<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideojuegoRequest;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Videojuego\VideojuegoCollection;
use App\Http\Resources\Videojuego\VideojuegoResource;
use App\Models\Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideojuegoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VideojuegoCollection::collection(Videojuego::paginate(20));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideojuegoRequest $request)
    {
        $videojuego = new Videojuego();
        $videojuego->name = $request->name;
        $videojuego->genre = $request->genre;
        $videojuego->price = $request->price;
        $videojuego->stock = $request->stock;
        $videojuego->discount = $request->discount;
        $videojuego->user_id = Auth::id();

        $videojuego->save();

        return response([
            'res' => true,
            'data' => 'Product Created'
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function show(Videojuego $videojuego)
    {
        $show = new VideojuegoResource($videojuego);

        return $show;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function edit(Videojuego $videojuego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videojuego $videojuego)
    {
        $this->VideojuegoUserCheck($videojuego);

        $videojuego->update($request->all());

        return response([
            'res' => true,
            'data' => 'Product Updated'
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videojuego $videojuego)
    {
        $this->VideojuegoUserCheck($videojuego);

        $videojuego->delete();

        return response([
            'res' => true,
            'data' => 'Product Updated'
        ],201);
    }

    public function VideojuegoUserCheck($videojuego){

        if ((Auth::id()) != ($videojuego->user_id)) {
           abort(400, 'Product dont belongs to user');
        }
    }
}
