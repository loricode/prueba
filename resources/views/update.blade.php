<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="container">
                  <form action="">
                  <div class="row">
                  <input
                             id="idupdate"  
                             type="text"
                             class="form-control"
                             placeholder="Ciudad Residencia" 
                             value="{{$student->id}}"
                             hidden
                           />

                     <div class="col-sm">
                     <div class="input-group mb-3">
                         <input 
                             id="codigo"
                             type="text"
                             class="form-control"
                             placeholder="Codigo" 
                             value="{{$student->codigo}}"
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
                             value="{{$student->nombres}}"
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
                             value="{{$student->apellidos}}"
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
                             value="{{$student->direccion}}"
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
                              value="{{$student->telefono}}"
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
                             value="{{$student->ciudad_residencia}}"
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
                            value="{{$student->ciudad_origen}}"
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
                            value="{{$student->nacionalidad}}"
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
                                  value="{{$student->programa}}"
                               />
                            </div>
                            </div>

                            <div class="col-sm-3" >
                                <button id="btnupdate" class="btn btn-primary">
                                  Aceptar
                                </button>
                            </div>
                           
                          </div><!--end row 3-->
                          </form>
                   </div> 
 </x-app-layout>