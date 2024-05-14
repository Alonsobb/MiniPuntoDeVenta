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
                        <th>Agregar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $item)
                        <tr>
                            <td>{{ $item->codigo }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>${{ $item->venta }}</td>
                            <td>{{ $item->existencia }}</td>
                            <td>
                                <div class="btn success">Agregar</div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#productos').DataTable({
            paging: false,
            searching: false
        });
        $('#productos').DataTable({
            paging: false,
            search: {
                boundary: true
            }
        });


        function addNewRow() {
            $('#productos').row
                .add([
                    counter + '.1',
                    counter + '.2',
                    counter + '.3',
                ])
                .draw(false);

            counter++;
        }

        let counter = 1;



        // Automatically add a first row of data
        addNewRow();
    </script>
@endsection
