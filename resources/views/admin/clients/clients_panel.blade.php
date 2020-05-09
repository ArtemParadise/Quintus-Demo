@extends('layouts.adminNavbar');

@section('active')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link " href="/admin">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="/admin/slider">Slider panel</a>
        </li>
        <li class="nav-item active">
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
                            <a href="{{ route('createBrand') }}" class="btn btn-light offset-10"> Add</a>
                        </div>


                        <table class="table table-hover" >
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Active</th>
                                <th scope="col">Priority</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                <th scope="col">Handlers</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $brands as $brand )
                                <tr>
                                    <th class="align-middle" scope="row">{{$brand->id}}</th>
                                    <td class="align-middle">{{$brand->title}}</td>
                                    <td style="background: coral; width: 190px "><img src='{{ asset($brand->img)}}' width="189" height="80">
                                    </td>
                                    <td class="align-middle" style="text-align: center;">{{$brand->active}}</td>
                                    <td class="align-middle" style="text-align: center;">{{$brand->priority}}</td>
                                    <td class="align-middle">{{$brand->created_at->diffForHumans()}}</td>
                                    <td class="align-middle">{{$brand->updated_at->diffForHumans()}}</td>
                                    <td class="align-middle">
                                        <a href="{{ route('editBrand', [ 'id' => $brand->id]) }}" class="btn btn-outline-info btn-sm">Edit</a>
                                        <form action="{{ route('deleteBrand', [ 'id' => $brand->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-outline-danger btn-sm" type="submit" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                @endauth
            </div>
            <div class="pagin d-flex justify-content-center">
                <div class="pagLinks">{{ $brands->links() }}</div>
            </div>
        </div>
    </div>

@endsection
