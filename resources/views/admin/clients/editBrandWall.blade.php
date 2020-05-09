@extends('layouts.adminNavbar')


@section('active')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link " href="/admin">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/slider">Slider panel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/brandwall">Brand Wall panel</a>
        </li>
    </ul>
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <div class="card">
                    @auth()
                        <div class="card-header bg-dark text-white font-custom h4">Edit brand</div>
                        <div class="card-body">
                            <form action="{{ route('updateBrand', [ 'id' => $brand->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                @include('admin.clients.parts.editBrandWallPart')

                                <div class="btn-createS">
                                    <input type="submit" value="Update" class="btn btn btn-outline-success">
                                </div>
                            </form>

                        </div>

                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
