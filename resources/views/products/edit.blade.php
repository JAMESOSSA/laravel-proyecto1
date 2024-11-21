@extends('layouts.plantilla')

@section('title','Editar Producto')

@section('content')

<div class="container mt-7">
    <h4>Agregar Producto</h4>
    <form action="{{route('products.update', $product)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-7 md-2">
                <label for="">Codigo</label>
                <input type="text"name="code" id="code" class="form-control" value="{{old('code',$product->code)}}" placeholder="Codigo del producto">


            </div>
            <div class="col-md-7 md-2">
                <label for="">Nombre</label>
                <input type="text"name="name" id="name" class="form-control" value="{{old('name',$product->name)}}" placeholder="Nombre del producto">
                

            </div>

        </div>
        <div class="row">
            <div class="col-md-7 md-2">
                <label for="">Precio</label>
                <input type="text"name="price" id="price" class="form-control" value="{{old('price',$product->price)}}" placeholder="Precio del producto">


            </div>
            <div class="col-md-7 md-2">
                <label for="">Cantidad</label>
                <input type="text"name="ammount" id="ammount" class="form-control" value="{{old('ammount',$product->ammount)}}" placeholder="Codigo del producto">
                

            </div>

        <div class="row">
            <div class="col-md-7 md-2">
                <label for="">Proveedor</label>
                <input type="text"name="supplier" id="supplier" class="form-control" value="{{old('supplier',$product->supplier)}}" placeholder="proveedor del producto">
    
    
            </div>
            <div class="col-md-7 md-2">
                <label for="">Descripcion</label>
                <input type="text"name="description" id="description" class="form-control" placeholder="Descripcion del producto">
                    
    
            </div>
            

        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-auto">
                <button type="submit" class="btn btn-success px-5">Agregar</button>
            </div>
            <div class="col-auto">
                <a href="/products" class="btn btn-warning px-5">Regresar</a>
            </div>
        </div>

      
    </form>

</div>

@endsection