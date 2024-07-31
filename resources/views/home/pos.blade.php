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
                        <th>Cantidad</th>


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
                            <td id="codigo">{{ $item->codigo }}</td>
                            <td id="nombre">{{ $item->nombre }}</td>
                            <td id="venta">${{ $item->venta }}</td>
                            <td id="existencia">{{ $item->existencia }}</td>
                            <td>
                                <div class="btn success agregar">Agregar</div>
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
            search: {
                boundary: true
            }
        });

        var tblventas = new DataTable('#venta');


        $(".agregar").each(function() {
            $(this).on("click", function() {
                a=[]

                $($(this).closest("tr").children()).each(function() {
                    if ($(this).attr('id')) {
                        a.push( $(this).text())
                    }
                })
                $($('#productos').attr("tbody")).each(function(){
                    console.log($(this));
                })
/*                 tblventas.row.add([
                    a[0],
                    a[1],
                    a[3],
                    '<input  class="input type="number" value="1"></input>',
                ])
                .draw(); */
            })
        })

        $($('#productos')).each(function(){
                    console.log($(this));
                })

    </script>
@endsection
