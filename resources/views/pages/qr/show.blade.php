@extends('layout.template')
@section('content')
    <div style="margin-top:200px">
        @isset($qr)
            <h1>Scan This for your Attendance</h1> <br>
            <img src="{!! asset($qr . '.png') !!}" width="200px" height="201" />
            @empty($qr)
                Fill Data First!
            @endempty
        @endisset
        <a href="{{route('index','/'.$data)}}"><button class="btn btn-info"></button></a>
    </div>

@endsection
