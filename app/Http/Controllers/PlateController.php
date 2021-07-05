<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Plate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Restaurant $restaurant)
    {
        if (!Gate::allows('check-user', $restaurant)) {
            abort(403);
        }

        $plates = $restaurant->plates;

        return view('dashboard.restaurants.plates.index', compact('plates', 'restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Restaurant $restaurant)
    {
        if (!Gate::allows('check-user', $restaurant)) {
            abort(403);
        }

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
            'price' => 'required|numeric|between:0,99.99',
            'restaurant_id' => 'exists:restaurants,id',
            'visibility' => 'required|boolean',
            'thumb' => 'mimes:jpeg,jpg,png|max:8000|required',
        ]);

        $path = $request->file('thumb')->getClientOriginalName() . "_" . time() . "." . $request->file('thumb')->getClientOriginalExtension();
        $store = $request->file('thumb')->storeAs('public/restaurants/plates/thumbnails', $path, 's3');

        Storage::disk('s3')->setVisibility($store, 'public');

        $plate = new Plate();
        $plate->name = $request->name;
        $plate->description = $request->description;
        $plate->price = $request->price;
        $plate->is_visible = $request->visibility;
        $plate->restaurant_id = $restaurant->id;
        $plate->slug = $this->generateSlug($plate->name);
        $plate->thumb_path = Storage::disk('s3')->url($store);
        $plate->save();

        return ['response' => 'Plate added successfully!'];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant, Plate $plate)
    {
        if (!Gate::allows('check-user', $restaurant)) {
            abort(403);
        }

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
            'price' => 'required|numeric|between:0,99.99',
            'visibility' => 'required|boolean',
            'restaurant_id.*' => 'exists:restaurants,id',
        ]);

        if ($request->hasFile('thumb')) {
            Storage::disk('s3')->delete($plate->thumb_path);

            $path = $request->file('thumb')->getClientOriginalName() . "_" . time() . "." . $request->file('thumb')->getClientOriginalExtension();
            $store = $request->file('thumb')->storeAs('public/restaurants/plates/thumbnails', $path, 's3');

            Storage::disk('s3')->setVisibility($store, 'public');

            $plate->thumb_path = Storage::disk('s3')->url($store);
        }

        $plate->slug = $this->generateSlug($request->name, $plate->name !== $request->name, $restaurant->id !== $plate->restaurant_id, $plate->slug);
        $plate->name = $request->name;
        $plate->description = $request->description;
        $plate->price = $request->price;
        $plate->is_visible = $request->visibility;
        $plate->restaurant_id = $restaurant->id;

        $plate->update();

        return ['response' => 'Plate edited successfully!'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant, Plate $plate)
    {
        Storage::disk('s3')->delete($plate->thumb_path);

        $plate->delete();

        return ['response' => 'Plate deleted successfully!'];
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



