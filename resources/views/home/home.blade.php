@extends('layout.home')


@section('content')
    <?php
    $asd = 56416416416;
    ?>
    {{ $asd ?? 'holas' }}
    {{--     <input type="text" name="" id="" @style( )> --}}
    {{--     @verbatim --}}
    {{--  @php
        $isActive = true;
    @endphp

    <div class="container" @style(['background-color: red', 'font-weight: bold' => $isActive])>
        Hello, .
    </div>
    asdasdasdasdasd --}}
    {{--  @endverbatim --}}
@endsection
