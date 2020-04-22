@extends('layouts.adminNavbar')



@section('active')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link " href="/admin">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="/admin/slider">Slider panel</a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @auth()
                    <div class="card-header bg-dark text-white font-custom h4">Admin panel</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
