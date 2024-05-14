@extends('layout.home')

@section('content')
<form class="box card" action="{{route('agregar.producto.post')}}" >
    @csrf
    {{$errors}}
    <div class="field">
      <label class="label">Nombre del Producto</label>
      <div class="control">
        <input class="input" type="text" name="producto" placeholder="Producto"  />
      </div>
    </div>



    <button type="submit" class="button is-primary">Agregar</button>
  </form>

@endsection
@section('script')
@endsection
