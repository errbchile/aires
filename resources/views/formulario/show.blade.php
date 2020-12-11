@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card mb-4">
               <div class="card-header py-3 text-center">
                     <h6 class="m-0 font-weight-bold text-primary">Producto Procesado</h6>
               </div>
                 <form action="{{ route('formulario.store') }}" method="POST">
                     @csrf
                     <div class="card-body">
                       <div class="form-group">
                           <label>Nombre del producto</label>
                           <input readonly name="nombre" type="text" class="form-control" value="{{ isset($producto->nombre) ? $producto->nombre : null }}">
                       </div>
                       <div class="form-group">
                           <label>Modelo</label>
                           <input readonly name="modelo" type="text" class="form-control" value="{{ isset($producto->modelo) ? $producto->modelo : null }}">
                       </div>
                       <div class="form-group">
                           <label>N° de serie</label>
                           <input readonly name="serie" type="text" class="form-control" value="{{ isset($producto->serie) ? $producto->serie : null }}">
                       </div>
                       <div class="form-group">
                           <label>Status</label>
                           <textarea name="status" readonly class="form-control" name="status" cols="30" rows="5">{{ isset($producto->status) ? $producto->status : null }}</textarea>
                       </div>
                   </div>
               </form>
            </div>
        </div>
    </div>
 </div>
@endsection
