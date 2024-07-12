<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $course = Curso::all();
        //return $course;
        return view('cursos.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all();
        $course = new Curso();
        $course->nombre = $request->input('nombre');
        $course->descripcion = $request->input('descripcion');

        if($request->hasFile('imagen')){
            $course->imagen = $request->file('imagen')->store('public/cursos');
        }

        $course->save();
        return 'Registro exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $course = Curso::find($id);
        return view('cursos.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $course = Curso::find($id);
        return view('cursos.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $course = Curso::find($id);
        $course->fill($request->except('imagen'));

        if($request->hasFile('imagen')){
            $course->imagen = $request->file('imagen')->store('public/cursos');
            $course->save();
            return 'Curso guardado y actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
