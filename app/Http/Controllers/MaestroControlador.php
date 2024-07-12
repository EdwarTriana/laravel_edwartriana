<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;

class MaestroControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $course = Maestro::all();
        return view('maestros.index', compact('course'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('maestros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $course = new Maestro();
        $course->nombre = $request->input('nombre');
        $course->apellido = $request->input('apellido');
        $course->edad = $request->input('edad');
        $course->especialidad = $request->input('especialidad');

        $course->save();
        return 'Registro exitoso';
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
