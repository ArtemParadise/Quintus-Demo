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
                        <div class="card-header bg-dark text-white font-custom h4">Edit slider</div>

                        <div class="card-body">
                            <form action="{{ route('updateSlider', [ 'id' => $slider->id ]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <p>Title</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" required value="{{ $slider->title }}">
                                </div>
                                <p>Image</p>
                                <div class="image-slider d-flex justify-content-center">
                                    <img src="{{ asset($slider->img) }}" width="500" height="200" >
                                </div>
                                <div class="form-group" style="margin-top: 10px">
                                    <input type="file" name="img" >
                                </div>
                                <div class="form-check">
                                    {{--Checkbox condition--}}
                                    @if( $slider->active )
                                        <input class="form-check-input" type="checkbox" value="1" name="checkbox" id="defaultCheck1" checked>
                                    @else
                                        <input class="form-check-input" type="checkbox" value="1" name="checkbox" id="defaultCheck1">
                                    @endif

                                    <label class="form-check-label" for="defaultCheck1">
                                        Active
                                    </label>
                                </div>
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
