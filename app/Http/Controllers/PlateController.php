<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Plate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plates = Plate::all();

        return view('dashboard.restaurants.plates.index', compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Restaurant $restaurant)
    {   
        return view('dashboard.restaurants.plates.create', compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|between:0,99.99',
            'restaurant_id' => 'exists:restaurants,id',
            'is_visible' => 'boolean',
            'thumb_path' => 'mimes:jpeg,jpg,png|max:6000|nullable',
        ]);

        $data = $request->all();

        $path = NULL;

        if (array_key_exists('thumb_path', $data)) {
            $path = Storage::put('uploads', $data['thumb_path']);
        }


        $plate = new Plate();
        $plate->name = $request->name;
        $plate->description = $request->description;
        $plate->price = $request->price;
        $plate->restaurant_id = $restaurant->id;
        $plate->slug = $this->generateSlug($plate->name);      
        $plate->thumb_path = 'storage/'.$path;
        $plate->save();

        return redirect()->route('restaurant.show', compact('restaurant'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function show(Plate $plate)
    {
        return view('plate.show', compact('plate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant, Plate $plate)
    {
        return view('dashboard.restaurants.plates.edit', compact ('restaurant', 'plate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant, Plate $plate)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|between:0,99.99',
            'restaurant_id.*' => 'exists:restaurants,id',
            'is_visible' => 'boolean',
            'thumb_path' => 'mimes:jpeg,jpg,png|max:6000|nullable',
        ]);

        $path = NULL;

        if (array_key_exists('thumb_path', $request->all())) {
            $path = Storage::put('uploads', $request->thumb_path);
        }

        $plate->slug = $this->generateSlug($request->name, $plate->name !== $request->name, $restaurant->id !== $plate->restaurant_id, $plate->slug);
        $plate->name = $request->name;
        $plate->description = $request->description;
        $plate->price = $request->price;
        $plate->restaurant_id = $restaurant->id;
        $plate->thumb_path = 'storage/'.$path;

        $plate->update();

        return redirect()->route('restaurant.show', compact('plate', 'restaurant'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plate $plate)
    {
        $plate->delete();

        return redirect()->route('restaurant.show', 'delete-success');
    }

    private function generateSlug(string $name, bool $change = true, bool $restaurant = true, string $old_slug = '')
    {
        // dd($restaurant);

        if(!$change){
            return $old_slug;
        }

        // if(!$restaurant){
        //     return $old_slug;
        // }

        $slug = Str::slug($name, '-');
        $slug_base = $slug;
        $contatore = 1;

        $plate_with_slug= Plate::where('slug', '=' , $slug)->first();
        while($plate_with_slug) {
            $slug = $slug_base . '-' . $contatore;
            $contatore++;

            $plate_with_slug = Plate::where('slug', '=' , $slug)->first();
        }

        return $slug;
    }
}



