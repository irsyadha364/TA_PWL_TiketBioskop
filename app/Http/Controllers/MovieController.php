<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Movie;
use DB;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.uploadFilm');
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
            'nama_film' => 'required',
            'desk_film' => 'required',
            'cover_film' => 'required',
            'harga' => 'required',
        ]);

        if ($request->file('cover_film')) {
            $image_name = $request->file('cover_film')->store('images/products', 'public');
        }
        
        $authUser = Auth::user();
        $movies = new Movie;
        $movies->nama_film = $request->get('nama_film');
        $movies->desk_film = $request->get('desk_film');
        $movies->cover_film = $image_name;
        $movies->harga = $request->get('harga');   
                               
               
        $movies->save();                     

        // redirect after add data
        return redirect()->route('home')
            ->with('success', 'Product Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = DB::table('movies')->where('id', $id)->first();
        return view('admin.editMovie', compact('movies'));
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
        $request->validate([            
            'nama_film' => 'required',
            'desk_film' => 'required',
            'cover_film' => 'required',
            'harga' => 'required',
        ]);

        
        $movies = Movie::find($id);
        $movies->nama_film = $request->get('nama_film');
        $movies->desk_film = $request->get('desk_film');
        if($request->file('cover_film')) {
            if ($movies->cover_film && file_exists(storage_path('app/public/' . $movies->cover_film))) {
                Storage::delete('public/' . $movies->cover_film);                        
            }
            $image_name = $request->file('cover_film')->store('images/products', 'public');
            $movies->cover_film = $image_name; 
        }
        $movies->harga = $request->get('harga');   
                               
        $movies->save();                     

        // redirect after add data
        return redirect()->route('home')
            ->with('success', 'Product Successfully Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::find($id)->delete();
        return redirect()->route('home')
        -> with('success', 'Movie Successfully Deleted');
    }
}
