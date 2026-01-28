<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $url = env('URL_BASE_API', "https://thesimpsonsapi.com/api");
       $response = Http::acceptJson()->withToken(Session::get('token'))->get($url . '/characters');
       //dd($response->json());

       if ($response->successful()){
            $characters = $response->json('results');

            return view('character.index', compact('characters'));
        }else{
            abort($response->status());
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
