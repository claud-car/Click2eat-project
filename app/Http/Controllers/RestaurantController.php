<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::where('user_id', Auth::id())->get();

        return view('dashboard.restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();

        return view('dashboard.restaurants.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'exists:user,id',
            'name' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'zip' => 'required|numeric|digits_between:5,5',
            'types' => 'required',
            'thumb' => 'mimes:jpeg,jpg,png|max:8000|required',
        ]);

        $path = $request->file('thumb')->getClientOriginalName() . "_" . time() . "." . $request->file('thumb')->getClientOriginalExtension();
        $store = $request->file('thumb')->storeAs('public/restaurants/covers', $path);

        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->street = $request->street;
        $restaurant->city = $request->city;
        $restaurant->province = $request->province;
        $restaurant->zip = $request->zip;

        $restaurant->user_id = $request->user()->id;
        $restaurant->slug = $this->generateSlug($request->name);
        $restaurant->thumb_path = 'restaurants/covers/'. $path;
        $restaurant->save();

        $restaurant->types()->attach(json_decode($request->types));

        return ['response' => 'Business created successfully!'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        $plates = $restaurant->plates;

        return view('restaurants.show', compact('restaurant', 'plates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        if (!Gate::allows('check-user', $restaurant)) {
            abort(403);
        }

        $types = Type::all();
        $restaurant_types = $restaurant->types()->get();

        foreach ($restaurant_types as $old_type) {
            $old_types[] = $old_type->id;
        }

        return view('dashboard.restaurants.edit', compact('restaurant', 'types', 'old_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'user_id' => 'exists:user,id',
            'name' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'zip' => 'required|numeric|digits_between:5,5',
            'types' => 'required'
        ]);

        if ($request->hasFile('thumb')) {
            Storage::disk('public')->delete($restaurant->thumb_path);

            $path = $request->file('thumb')->getClientOriginalName() . "_" . time() . "." . $request->file('thumb')->getClientOriginalExtension();
            $store = $request->file('thumb')->storeAs('public/restaurants/covers', $path);

            $restaurant->thumb_path = 'restaurants/covers/'. $path;
        }

        $restaurant->slug = $this->generateSlug($request->name, $restaurant->name !== $request->name, $restaurant->slug);
        $restaurant->name = $request->name;
        $restaurant->street = $request->street;
        $restaurant->city = $request->city;
        $restaurant->province = $request->province;
        $restaurant->zip = $request->zip;

        $restaurant->user_id = $request->user()->id;

        $restaurant->update();

        $restaurant->types()->sync(json_decode($request->types));

        return ['response' => 'Information edited successfully!'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        Storage::disk('public')->delete($restaurant->thumb_path);

        $restaurant->delete();

        return ['response' => 'Business deleted successfully!'];
    }

    public function getAll()
    {
        $restaurants = Restaurant::with('types')->get();

        return response()->json($restaurants);
    }

    private function generateSlug(string $name, bool $change = true, string $old_slug = '')
    {
        if (!$change) {
            return $old_slug;
        }

        $slug = Str::slug($name, '-');
        $slug_base = $slug;
        $contatore = 1;

        $restaurant_with_slug= Restaurant::where('slug', '=' , $slug)->first();
        while($restaurant_with_slug) {
            $slug = $slug_base . '-' . $contatore;
            $contatore++;

            $restaurant_with_slug = Restaurant::where('slug', '=' , $slug)->first();
        }

        return $slug;
    }

}
