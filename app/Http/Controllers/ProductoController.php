<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alegretp;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Alegretp::create($request->all());
        return redirect()->route('alegre.welcome');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $alegre = new Alegretp;
    $alegre->name = 'mama';
    $alegre->email = 'xOZ6y@example.com';
    $alegre->save();

    return $alegre;
    }

    public function find()
    {
        $alegre = Alegretp::find(23);
        $alegre->name = 'ápapa';
        $alegre->save();

        return $alegre;
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
