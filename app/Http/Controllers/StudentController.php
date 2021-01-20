<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
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
    public function create(Request $request)
    {
        $student = new Student;
        $data = $request->json()->all();
        $codigo = $data['codigo'];
        $nombre = $data['nombre']; 
        $apellido = $data['apellido'];
        $direccion = $data['direccion'];
        $telefono = $data['telefono'];
        $residencia = $data['residencia'];
        $origen = $data['origen'];
        $nacionalidad = $data['nacionalidad'];
        $programa = $data['programa'];
        $student->codigo = $codigo;
        $student->nombres = $nombre; 
        $student->apellidos = $apellido; 
        $student->direccion = $direccion;
        $student->telefono = $telefono;
        $student->ciudad_residencia = $residencia; 
        $student->ciudad_origen =  $origen;
        $student->nacionalidad = $nacionalidad;
        $student->programa = $data['programa'];
        $student->save();
        return json_encode(["msg"=>"added student"]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
