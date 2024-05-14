@extends('layout.home')

@section('content')
<div class="agregar">
    <a class="btn success" href="{{route('agregar.producto')}}">+ Agregar producto</a>
</div>
<div>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>Donna Snider</td>
            <td>Customer Support</td>
            <td>New York</td>
            <td>27</td>
            <td>2011-01-25</td>
            <td>$112,000</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
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
