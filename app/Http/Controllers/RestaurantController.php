<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;
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
        $restaurants = Restaurant::all();

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
            'user_id' => 'exist:user,id',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'thumb_path' => 'mimes:jpeg,jpg,png|max:6000|nullable',
        ]);

        $data = $request->all();

        $path = NULL;

        if (array_key_exists('thumb_path', $data)) {
            $path = Storage::put('uploads', $data['thumb_path']);
        }

        $restaurant = new Restaurant();
        $restaurant->fill($data);

        $restaurant->user_id = $request->user()->id;
        $restaurant->slug = $this->generateSlug($restaurant->name);
        $restaurant->thumb_path = 'storage/'.$path;
        $restaurant->save();

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
        $types = Type::all();

        return view('dashboard.restaurants.edit', compact('restaurant', 'types'));
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
            'user_id' => 'exist:user,id',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'thumb_path' => 'mimes:jpeg,jpg,png|max:6000|nullable',
        ]);

        $data = $request->all();
        $data['slug'] = $this->generateSlug($data['name'], $restaurant->name != $data['name'], $restaurant->slug);

        $path = NULL;

        if (array_key_exists('thumb_path', $data)) {
            $path = Storage::put('uploads', $data['thumb_path']);
            $data['thumb_path'] = 'storage/'.$path;
        }

        $restaurant->update($data);

        if (array_key_exists('type_ids', $data)) {
            $restaurant->types()->sync($data['type_ids']);
        } else{
            $restaurant->types()->detach();
        }

        return redirect()->route('restaurant.edit', compact('restaurant'));
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

    private function generateSlug(string $name, bool $change = true, string $old_slug = '')
    {

        if(!$change){
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
