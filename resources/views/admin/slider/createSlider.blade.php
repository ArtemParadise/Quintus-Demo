@extends('layouts.adminNavbar')



@section('active')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link " href="/admin">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/slider">Slider panel</a>
        </li>
    </ul>
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <div class="card">
                    @auth()
                        <div class="card-header bg-dark text-white font-custom h4">Add slider</div>

                        <div class="card-body">
                            <form action="{{ route('storeSlider') }}" method="post" enctype="multipart/form-data">
                                @csrf
{{--                                <p>Title</p>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" name="title" required>--}}
{{--                                </div>--}}
{{--                                <p>Image</p>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="file" name="img" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="1" name="checkbox" id="defaultCheck1">--}}
{{--                                    <label class="form-check-label" for="defaultCheck1">--}}
{{--                                        Active--}}
{{--                                    </label>--}}
{{--                                </div>--}}

                                @include('admin.slider.parts.editPart')

                                <div class="btn-createS">
                                    <input type="submit" value="Add slider" class="btn btn btn-outline-success">
                                </div>

                            </form>

                        </div>



                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
