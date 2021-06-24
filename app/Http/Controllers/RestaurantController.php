<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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

        return view('dashboard.dashboard', compact('restaurants'));
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
            'address' => 'required|string|max:255',
            'type_id' => 'required',
            'thumb_path' => 'mimes:jpeg,jpg,png|max:6000|nullable',
        ]);

        $path = NULL;

        if (array_key_exists('thumb_path', $request->all())) {
            $path = Storage::put('uploads', $request->thumb_path);
        }

        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;

        $restaurant->user_id = $request->user()->id;
        $restaurant->slug = $this->generateSlug($request->name);
        $restaurant->thumb_path = 'storage/'.$path;
        $restaurant->save();

        $restaurant->types()->attach($request->type_id);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show', compact('restaurant'));
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
            'address' => 'required|string|max:255',
            'type_id' => 'required',
            'thumb_path' => 'mimes:jpeg,jpg,png|max:6000|nullable',
        ]);

        $path = NULL;

        if (array_key_exists('thumb_path', $request->all())) {
            $path = Storage::put('uploads', $request->thumb_path);
        }

        $restaurant->slug = $this->generateSlug($request->name, $restaurant->name !== $request->name, $restaurant->slug);
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;

        $restaurant->user_id = $request->user()->id;
        $restaurant->thumb_path = 'storage/'.$path;

        $restaurant->update();

        $restaurant->types()->sync($request->type_id);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('dashboard', 'delete-success');
    }

    public function search()
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
