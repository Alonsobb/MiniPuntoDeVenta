@extends('layout.home')

@section('content')
<div class="agregar">
    <a class="btn success" href="{{route('agregar.producto')}}">+ Agregar producto</a>
</div>
<div>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Name</th>
            <th>Precio de compra</th>
            <th>Precio de venta</th>
            <th>Existencia</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $item)
        <tr>
            <td>{{$item->codigo}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->compra}}</td>
            <td>{{$item->venta}}</td>
            <td>{{$item->existencia}}</td>
        </tr>
        @endforeach

    </tbody>
    <tfoot>
        <tr>
            <th>Codigo</th>
            <th>Name</th>
            <th>Precio de compra</th>
            <th>Precio de venta</th>
            <th>Existencia</th>

        </tr>
    </tfoot>
</table>
</div>

@endsection

@section('script')
<script>
    let table = new DataTable('#example');
</script>
@endsection
