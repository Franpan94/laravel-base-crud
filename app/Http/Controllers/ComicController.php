<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    protected $validationdate = [
        'title'=>'required|min:3|max:255|unique:comics',
        'description'=>'required|min:10',
        'thumb'=>'required|min:3',
        'price'=>'required',
        'sale_date'=>'required|date',
    ];

    protected $validationmessages = [
        'title.exists'=>'Inserire minimo 3, massimo 255 caratteri',
        'description.exists'=>'Inserire minimo 10 caratteri',
        'thumb.exists'=>'Inserire minimo 3 caratteri',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Comic $comic)
    {
       return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationdates = $request->validate($this->validationdate, $this->validationmessages);

        $data =$request->all();

        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->save();
        return redirect()->route('comics.show', compact('comic'))->with('created', $comic->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic) //dependes injection
    {
        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validationdates = $request->validate($this->validationdate, $this->validationmessages);
        //
        $data =$request->all();
        
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->save();
        return redirect()->route('comics.show', compact('comic'))->with('edit', $comic->title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        
        $comic->delete();
        
        return redirect()->route('comics.index')->with('delete', $comic->title);
        
    }
}
