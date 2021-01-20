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

        $student = new Student; //creo un objeto
        $data = $request->json()->all(); //tomo las respuesta de la peticion ajax
        $codigo = $data['codigo']; //tomo los valores que estan en la llave de objeto data
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
        $student->save(); //guardo la informacion en la tabla students
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
    public function show(Request $request, $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $student = new Student; //creo un objeto
        $data = $request->json()->all(); //tomo las respuesta de la peticion ajax
        $id = $data['id'];

        $codigo = $data['codigo']; //tomo los valores que estan en la llave de objeto data
        $nombre = $data['nombre']; 
        $apellido = $data['apellido'];
        $direccion = $data['direccion'];
        $telefono = $data['telefono'];
        $residencia = $data['residencia'];
        $origen = $data['origen'];
        $nacionalidad = $data['nacionalidad'];
        $programa = $data['programa'];
        $student = $id;
        $student->codigo = $codigo;
        $student->nombres = $nombre; 
        $student->apellidos = $apellido; 
        $student->direccion = $direccion;
        $student->telefono = $telefono;
        $student->ciudad_residencia = $residencia; 
        $student->ciudad_origen =  $origen;
        $student->nacionalidad = $nacionalidad;
        $student->programa = $data['programa'];
        $student->save(); //guardo la informacion en la tabla students
        return json_encode(["msg"=>"updated student"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         $student = Student::find($id);
         return view('update')->with('student',$student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //elimino el registro por id y despues redirecciono a la pagina dashboard
        Student::destroy($id);
        return redirect('/dashboard');
    }
}
