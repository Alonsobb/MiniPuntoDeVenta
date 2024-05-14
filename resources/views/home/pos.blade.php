@extends('layout.home')
@section('content')
    <div class="columns">

        <div class="column box">
            <table id="venta" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Name</th>
                        <th>Costo</th>


                    </tr>
                </thead>
                <tbody>


                </tbody>

            </table>
        </div>
        <div class="column box">
            <table id="productos" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Name</th>
                        <th>Costo</th>
                        <th>Existencia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $item)
                        <tr>
                            <td>{{ $item->codigo }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->venta }}</td>
                            <td>{{ $item->existencia }}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#venta').DataTable({
            paging: false
        });
        $('#productos').DataTable({
            paging: false
        });
    </script>
@endsection
