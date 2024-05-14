@extends('layout.home')

@section('content')
    <form class="box card" method="post" action="{{ route('agregar.producto.post') }}">
        @csrf

        <div class="field">
            <label class="label">Nombre del Producto</label>
            <div class="control">
                <input class="input @error('nombre')
        is-danger
        @enderror " type="text" name="nombre"
                    placeholder="Producto" value="{{ old('nombre') }}" />
            </div>

        </div>
        @error('nombre')
            <p class="help is-danger">{{ $message }}</p>
        @enderror

        <div class="field">
            <label class="label">Codigo del Producto</label>
            <div class="control">
                <input class="input @error('codigo')
        is-danger
        @enderror " type="text" name="codigo"
                    placeholder="Codigo del Producto" value="{{ old('codigo') }}" />
            </div>

        </div>
        @error('codigo')
            <p class="help is-danger">{{ $message }}</p>
        @enderror

        <div class="field">
            <label class="label">Precio de compra</label>
            <div class="control">
                <input class="input @error('compra') is-danger @enderror " type="text" name="compra"
                    placeholder="Precio de Compra" value="{{ old('compra') }}" />
            </div>

        </div>
        @error('compra')
            <p class="help is-danger">{{ $message }}</p>
        @enderror

        <div class="field">
            <label class="label">Precio de Venta</label>
            <div class="control">
                <input class="input @error('venta')
        is-danger
        @enderror " type="text" name="venta"
                    placeholder="venta" value="{{ old('venta') }}" />
            </div>

        </div>
        @error('venta')
            <p class="help is-danger">{{ $message }}</p>
        @enderror

        <div class="field">
            <label class="label">Existencia</label>
            <div class="control">
                <input class="input @error('existencia')
        is-danger
        @enderror " type="text" name="existencia"
                    placeholder="existencia" value="{{ old('existencia') }}" />
            </div>

        </div>
        @error('existencia')
            <p class="help is-danger">{{ $message }}</p>
        @enderror



        <button type="submit" class="button is-primary">Agregar</button>
    </form>
@endsection
@section('script')
@endsection
