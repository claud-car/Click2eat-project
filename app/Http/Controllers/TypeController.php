<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();

        return view('dashboard.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.types.create');
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
            'thumb_path' => 'mimes:jpeg,jpg,png|max:6000|nullable',
        ]);

        $data = $request->all();

        $path = NULL;

        if (array_key_exists('thumb_path', $data)) {
            $path = Storage::put('uploads', $data['thumb_path']);
        }

        $type = new Type();
        $type->fill($data);
        
        $type->slug = $this->generateSlug($type->name);
        $type->thumb_path = 'storage/'.$path;
        $type->save();

        return redirect()->route('type.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $types
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view('dashboard.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $types
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $request->validate([
            'restaurant_id' => 'exists:restaurant,id',
            'name' => 'required|string|max:255',
            'thumb_path' => 'mimes:jpeg,jpg,png|max:6000|nullable',
        ]);

        $data = $request->all();
        $data['slug'] = $this->generateSlug($data['name'], $type->name != $data['name'], $type->slug);

        $path = NULL;

        if (array_key_exists('thumb_path', $data)) {
            $path = Storage::put('uploads', $data['thumb_path']);
            $data['thumb_path'] = 'storage/'.$path;
        }

        $type->update($data);

        // if (array_key_exists('type_ids', $data)) {
        //     $type->type()->sync($data['type_ids']);
        // } else{
        //     $type->type()->detach();
        // }

        return redirect()->route('type.index', compact('type'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $types
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('type.index', 'delete-success');

        
    }

    private function generateSlug(string $name, bool $change = true, string $old_slug = '')
    {

        if(!$change){
            return $old_slug;
        }

        $slug = Str::slug($name, '-');
        $slug_base = $slug;
        $contatore = 1;

        $type_with_slug= Restaurant::where('slug', '=' , $slug)->first();
        while($type_with_slug) {
            $slug = $slug_base . '-' . $contatore;
            $contatore++;

            $type_with_slug = Restaurant::where('slug', '=' , $slug)->first();
        }

        return $slug;
    }
}