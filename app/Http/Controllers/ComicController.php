<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $data = [
            'comics' => $comics
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidation());

        $form_data = $request->all();
        $new_comic = new Comic();
        $new_comic->title = $form_data['title'];
        $new_comic->description = $form_data['description'];
        $new_comic->series = $form_data['series'];
        $new_comic->type = $form_data['type'];
        $new_comic->price = $form_data['price'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->save();

        return redirect()->route('comic.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $data = [
            'comic' => $comic
        ];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            'comic' => $comic
        ];
        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->getValidation());
        $form_data = $request->all();

        $comic_updated = Comic::findOrFail($id);
        $comic_updated->update($form_data);

        return redirect()->route('comic.show', ['comic' => $comic_updated->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_deleted = Comic::findOrFail($id);
        $comic_deleted->delete();

        return redirect()->route('comic.index');
    }

    protected function getValidation() {
        return [
            'title' => 'required|max:100',
            'type' => 'required|max:30',
            'price' => 'required|max:10',
            'sale_date' => 'required',
            'description' => 'required|max:60000',
            'thumb' => 'required|max:60000',
            'series' => 'required|max:50'
        ];
    }
}
