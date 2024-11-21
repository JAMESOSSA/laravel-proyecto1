@extends('layouts.plantilla')

@section('title', 'Index de productos')

@section('content')




    <h1>index de productos</h1>
    
    <a href="{{route('products.create')}}"class="btn btn-success">Nuevo Producto</button></a>
    <table class="table table-striped">
        <thead>
            
            <tr>
                
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Descripcion</th>
                <th>Opciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th>{{$product->code}}</th>
                <th>{{$product->name}}</th>
                <th>{{$product->price}}</th>
                <th>{{$product->ammount}}</th>
                <th>{{$product->supplier}}</th>
                <th>{{$product->description}}</th>
                <td class="d-flex justify-content-start gap-2">

                    <a href="{{route('products.edit', $product)}}"class="btn btn-outline-warning">Editar</a>
                    <form action="{{route('products.destroy',$product) }}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" role="button">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{URL('products/pdf')}}" target="_blank" class="btn btn-outline-info" >Generar Reporte</a>
    <div>
        {{$products->links()}}
    </div>
@endsection

