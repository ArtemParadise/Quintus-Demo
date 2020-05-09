@extends('layouts.adminNavbar');


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @auth()
                    <div class="card ">

                        <div class="card-header bg-dark text-white font-custom h4">Categories
                            <a href="{{ route('createCategory') }}" class="btn btn-light offset-10">Add</a>
                        </div>

                        <table class="table table-hover" >
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                <th scope="col">Handlers</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $categories as $category )
                                <tr>
                                    <th class="align-middle" scope="row">{{$category->id}}</th>
                                    <td class="align-middle">{{$category->title}}</td>
                                    <td class="align-middle">{{$category->created_at->diffForHumans()}}</td>
                                    <td class="align-middle">{{$category->updated_at->diffForHumans()}}</td>
                                    <td class="align-middle">
                                        <a href="{{ route('editCategory', [ 'id' => $category->id]) }}" class="btn btn-outline-info btn-sm">Edit</a>
                                        <form action="{{ route('deleteCategory', [ 'id' => $category->id]) }}" method="post">
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
                <div class="pagLinks">{{ $categories->links() }}</div>
            </div>
        </div>
    </div>

@endsection
