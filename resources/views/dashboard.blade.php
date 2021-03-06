
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 
                <div class="container">
                  <div class="row">

                     <div class="col-sm">
                     <div class="input-group mb-3">
                         <input 
                             id="codigo"
                             type="text"
                             class="form-control"
                             placeholder="Codigo" 
                         />
                     </div>
                     </div><!-- end col 1 -->

                      <div class="col-sm">
                       <div class="input-group mb-3">
                         <input 
                             id="nombre"
                             type="text"
                             class="form-control"
                             placeholder="Nombres" 
                         />
                      </div>
                     </div> <!-- end col 2 -->



                      <div class="col-sm">
                      <div class="input-group mb-3">
                         <input 
                             id="apellido"
                             type="text"
                             class="form-control"
                             placeholder="Apellidos" 
                         />
                      </div>
                     </div><!-- end col 3 -->


                    <div class="col-sm">
                      <div class="input-group mb-3">
                         <input 
                              id="direccion"
                             type="text"
                             class="form-control"
                             placeholder="Direccion" 
                         />
                      </div>
                    </div><!-- end col 4 -->

                    </div><!-- end row 1 -->

                    <div class="row">

                       <div class="col-sm">
                         <div class="input-group mb-3">
                           <input 
                              id="telefono"
                              type="text"
                              class="form-control"
                              placeholder="Telefono" 
                            />
                        </div>
                      </div>  <!-- end  row 2 col 1 -->

                       <div class="col-sm">
                        <div class="input-group mb-3">
                          <input
                             id="residencia"  
                             type="text"
                             class="form-control"
                             placeholder="Ciudad Residencia" 
                           />
                       </div>
                      </div> <!-- end row 2 col 2 -->



                     <div class="col-sm">
                        <div class="input-group mb-3">
                          <input
                            id="origen" 
                            type="text"
                            class="form-control"
                            placeholder="Ciudad Origen" 
                            />
                         </div>
                        </div><!-- end  row 2 col 3 -->


                      <div class="col-sm">
                        <div class="input-group mb-3">
                         <input 
                            id="nacionalidad"
                            type="text"
                            class="form-control"
                            placeholder="Nacionalidad" 
                         />
                        </div>
                       </div><!-- end row 2 col 4 -->

                          </div><!-- end row 2 -->

                          <div class="row">
                            <div class="col-sm-3">
                             <div class="input-group mb-3">
                                <input 
                                  id="programa"
                                  type="text"
                                  class="form-control"
                                  placeholder="Programa" 
                               />
                            </div>
                            </div>

                            <div class="col-sm-3" >
                                <button id="btnform" class="btn btn-primary">
                                  Aceptar
                                </button>
                            </div>
                          </div><!--end row 3-->
                   </div> <!--container-->

                   
                <table class="table table-dark">
                  <thead>
                     <tr>
                       <th scope="col">Codigo</th>
                       <th scope="col">Nombres</th>
                       <th scope="col">Apelllidos</th>
                       <th scope="col">Dirección</th>
                       <th scope="col">Telefono</th>
                       <th scope="col">Ciudad Residencia</th>
                       <th scope="col">Ciudad Origen</th>
                       <th scope="col">Nacionalidad</th>
                       <th scope="col">Programa</th>
                       <th scope="col">Opcion</th>
                     </tr>
                   </thead>
                <tbody>
                  
                      @foreach($students as $student)
                      <tr >
                         <td>{{$student->codigo}}</td>
                         <td>{{$student->nombres}}</td>
                         <td>{{$student->apellidos}}</td>  
                         <td>{{$student->direccion}}</td>
                         <td>{{$student->telefono}}</td> 
                         <td>{{$student->ciudad_residencia}}</td> 
                         <td>{{$student->ciudad_origen}}</td> 
                         <td>{{$student->nacionalidad}}</td> 
                         <td>{{$student->programa}}</td>   
                         <td>
                            <a href="dashboard/{{$student->id}}" class="btn btn-danger btn-sm">
                               Delete
                            </a>
                            </td>
                            <td>
                            <a 
                                href="dashboard/update/{{$student->id}}" class="btn btn-info btn-sm">
                               update
                            </a>
                            </td>
                           
                         
                         </tr>   
                      @endforeach
                 
                </tbody>
            </table>
                </div>
                   
                </div>
          
                                    
          
            </div>
        </div>
<div class="row p-3">

    </div>


   
</x-app-layout>
