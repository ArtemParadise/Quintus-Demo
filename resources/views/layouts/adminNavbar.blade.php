@extends('layouts.app')

<link href="{{ asset('css/adminPanel/custom-style.css') }}" rel="stylesheet">
<link href="{{ asset('css/adminPanel/custom.css') }}" rel="stylesheet">

@section('navbar')
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
{{--                <ul class="navbar-nav mr-auto">--}}
{{--                    <li class="nav-item active">--}}
{{--                        <a class="nav-link " href="/admin">Home <span class="sr-only">(current)</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/admin/slider">Slider panel</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
                @yield('active')
            </div>
        </div>

    </nav>
@endsection
