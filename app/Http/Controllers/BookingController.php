<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Movie;
use App\Models\User;
use PDF;
use Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $booking = Booking::orderBy('id', 'asc')->paginate(6);
                
            return view('admin.listPesanan', ['booking' => $booking]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($film_id)
    {
        
        $movies = Movie::where('id', $film_id)->first();
        return view('user.booking.create', compact('movies')); 
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
            'jumlah_tiket' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',                    
        ]);
            $id_film = $request->get('t_id');
            $moviesBooking = Movie::where('id', $id_film)->first();
            
            $booking = new Booking;
            $booking->id_user = Auth::user()->id;
            $booking->id_film = $request->get('t_id');
            $booking->jumlah_tiket = $request->get('jumlah_tiket');
            $booking->tanggal = $request->get('tanggal');
            $booking->jam = $request->get('jam');                   
            
            $booking->total_harga = $moviesBooking->harga * $request->get('jumlah_tiket');                
            
            $movie = new Movie;
            $movie->id = $request->get('t_id');        
            $booking->movie()->associate($movie);    

            $user = new User;
            $user->id = Auth::user()->id;        
            $booking->user()->associate($user);   

            $booking->save();              
            $booking = Booking::with('movie')->where('id', $booking->id)->first();        
            
            // // redirect after add data
            return view('user.booking.payment', ['booking' => $booking]);            
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role=="Admin"){
            Booking::find($id)->delete();
            return redirect()->route('booking.index')
            -> with('success', 'Booking Successfully Deleted');
        } else {
            Booking::find($id)->delete();
            return redirect()->route('tiketSaya')
            -> with('success', 'Booking Successfully Deleted');
        }
    }

    public function print_pdf(Request $request, $id){
        $booking = Booking::find($id); 
        $pdf = PDF::loadview('user.booking.print', ['booking'=>$booking]);
        return $pdf->stream(); 
    }

    public function payment($id){
        $booking = Booking::find($id);
        return view('user.booking.payment', ['booking' => $booking]); 
    }
}
