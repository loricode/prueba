<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
                             type="text"
                             class="form-control"
                             placeholder="Codigo" 
                         />
                     </div>
                     </div><!-- end col 1 -->

                      <div class="col-sm">
                       <div class="input-group mb-3">
                         <input 
                             type="text"
                             class="form-control"
                             placeholder="Nombres" 
                         />
                      </div>
                     </div> <!-- end col 2 -->



                      <div class="col-sm">
                      <div class="input-group mb-3">
                         <input 
                             type="text"
                             class="form-control"
                             placeholder="Apellidos" 
                         />
                      </div>
                     </div><!-- end col 3 -->


                    <div class="col-sm">
                      <div class="input-group mb-3">
                         <input 
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
                              type="text"
                              class="form-control"
                              placeholder="Telefono" 
                            />
                        </div>
                      </div>  <!-- end  row 2 col 1 -->

                       <div class="col-sm">
                        <div class="input-group mb-3">
                          <input 
                             type="text"
                             class="form-control"
                             placeholder="Ciudad Residencia" 
                           />
                       </div>
                      </div> <!-- end row 2 col 2 -->



                     <div class="col-sm">
                        <div class="input-group mb-3">
                          <input 
                            type="text"
                            class="form-control"
                            placeholder="Ciudad Origen" 
                            />
                         </div>
                        </div><!-- end  row 2 col 3 -->


                      <div class="col-sm">
                        <div class="input-group mb-3">
                         <input 
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
                     </tr>
                   </thead>
                <tbody>
                  <tr>
                      @foreach($students as $student)
                         <td>{{$student->codigo}}</td>
                         <td>{{$student->nombres}}</td>
                         <td>{{$student->apellidos}}</td>  
                         <td>{{$student->direccion}}</td>
                         <td>{{$student->telefono}}</td> 
                         <td>{{$student->ciudad_residencia}}</td> 
                         <td>{{$student->ciudad_origen}}</td> 
                         <td>{{$student->nacionalidad}}</td> 
                         <td>{{$student->programa}}</td>    
                      @endforeach
                 </tr>
                </tbody>
            </table>
                </div>
                   
                </div>
          
                                    
          
            </div>
        </div>
<div class="row p-3">

    </div>


   
</x-app-layout>
