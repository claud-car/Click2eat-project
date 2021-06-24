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

        return view('dashboard.plates.index', compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.plates.create');
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
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|float',
            'restaurant_id.*' => 'exists:restaurants,id',
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
        $plate->description = $request->$description;
        $plate->price = $request->price;
        $plate->restaurant_id = $request->restaurant()->id;
        $plate->is_visible = $request->is_visible;        
        $plate->thumb_path = 'storage/'.$path;
        $plate->save();

        return redirect()->route('plate.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function show(Plate $plate)
    {
        return view('plates.show', compact('plate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function edit(Plate $plate)
    {
        return view('dashboard.plates.edit', compact('plate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plate $plate)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|float',
            'restaurant_id.*' => 'exists:restaurants,id',
            'is_visible' => 'boolean',
            'thumb_path' => 'mimes:jpeg,jpg,png|max:6000|nullable',
        ]);

        $data = $request->all();

        $path = NULL;

        if (array_key_exists('thumb_path', $request->all())) {
            $path = Storage::put('uploads', $request->thumb_path);
        }

        $plate->name = $request->name;
        $plate->description = $request->$description;
        $plate->price = $request->price;
        $plate->restaurant_id = $request->restaurant()->id;
        $plate->is_visible = $request->is_visible;        
        $plate->thumb_path = 'storage/'.$path;

        $plate->update();

        $plate->restaurants()->attach($request->restaurant_id);

        return redirect()->route('dashboard', compact('plate'));
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

        $plate_with_slug= Plate::where('slug', '=' , $slug)->first();
        while($plate_with_slug) {
            $slug = $slug_base . '-' . $contatore;
            $contatore++;

            $plate_with_slug = Plate::where('slug', '=' , $slug)->first();
        }

        return $slug;
    }
}
