@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card mb-4">
               <div class="card-header py-3 text-center">
                     <h6 class="m-0 font-weight-bold text-primary">Registre su Producto</h6>
               </div>
                 <form action="{{ route('formulario.store') }}" method="POST">
                     @csrf
                     <div class="card-body">
                       <div class="form-group">
                           <label for="">Nombre del producto</label>
                           <input name="nombre" type="text" class="form-control" placeholder="Nombre del producto...">
                       </div>
                       <div class="form-group">
                           <label for="">Modelo</label>
                           <input name="modelo" type="text" class="form-control" placeholder="Modelo del Producto...">
                       </div>
                       <div class="form-group">
                           <label for="">N° de serie</label>
                           <input name="serie" type="text" class="form-control" placeholder="Ej: 738426746...">
                       </div>
                       <div class="form-group">
                           <label for="">Status</label>
                           <textarea name="status" class="form-control" name="status" cols="30" rows="5"></textarea>
                       </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-success" value="Registrar">
                       </div>
                   </div>
               </form>
            </div>
        </div>
    </div>
 </div>
@endsection
