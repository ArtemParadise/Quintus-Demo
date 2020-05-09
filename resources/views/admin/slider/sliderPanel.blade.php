@extends('layouts.adminNavbar')


@section('active')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link " href="/admin">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/admin/slider">Slider panel</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="/admin/brandwall">Brand Wall panel</a>
        </li>
    </ul>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @auth()
            <div class="card ">

                    <div class="card-header bg-dark text-white font-custom h4">Slider panel
                        <a href="{{ route('createSlider') }}" class="btn btn-light offset-10"> Add</a>
                    </div>


                    <table class="table table-hover" >
                        <thead>
                        <tr>
                            <th scope="col" >id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Active</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th scope="col">Handlers</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                        <tr>
                            <th class="align-middle" scope="row">{{$slider->id}}</th>
                            <td class="align-middle">{{$slider->title}}</td>
                            <td><img src='{{ asset($slider->img)}}' width="189" height="80">
{{--                            <td><img src='{{ asset('/storage/bckg.jpg') }}' width="189" height="80">--}}

                            </td>
                            <td class="align-middle" style="text-align: center;">{{$slider->active}}</td>
                            <td class="align-middle">{{$slider->created_at->diffForHumans()}}</td>
                            <td class="align-middle">{{$slider->updated_at->diffForHumans()}}</td>
                            <td class="align-middle">
                                <a href="{{ route('editSlider', [ 'id' => $slider->id]) }}" class="btn btn-outline-info btn-sm">Edit</a>
                                <form action="{{ route('deleteSlider', [ 'id' => $slider->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-outline-danger btn-sm" type="submit" value="Delete">
                                </form>
{{--                                <a href="{{ route('deleteSlider', [ 'id' => $slider->id]) }}" class="btn btn-outline-danger btn-sm">Delete</a>--}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>


            @endauth
        </div>
        <div class="pagin d-flex justify-content-center">
            <div class="pagLinks">{{ $sliders->links() }}</div>
        </div>
    </div>
</div>

@endsection
