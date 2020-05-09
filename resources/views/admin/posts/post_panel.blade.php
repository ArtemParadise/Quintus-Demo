@extends('layouts.adminNavbar');


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @auth()
                    <div class="card ">

                        <div class="card-header bg-dark text-white font-custom h4">Posts
                            <a href="{{ route('createPost') }}" class="btn btn-light offset-10">Add</a>
                        </div>

                        <table class="table table-hover" >
                            <thead>
                            <tr>
                                <th class="align-middle" scope="col">id</th>
                                <th class="align-middle" scope="col">Title</th>
                                <th class="align-middle" scope="col">Description</th>
                                <th class="align-middle" scope="col">Image</th>
                                <th class="align-middle" scope="col">Category</th>
                                <th class="align-middle" scope="col">Stick</th>
                                <th class="align-middle" scope="col">Created at</th>
                                <th class="align-middle" scope="col">Updated at</th>
                                <th class="align-middle" scope="col">Handlers</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $posts as $post )
                                <tr>
                                    <th class="align-middle" scope="row">{{$post->id}}</th>
                                    <td class="align-middle">{{$post->title}}</td>
                                    <td class="align-middle">{{$post->descr}}</td>
                                    <td><img src='{{ asset($post->img)}}' width="189" height="80">
                                    </td>
                                    <td class="align-middle" style="text-align: center;">{{ $post->category->title }}</td>
                                    <td class="align-middle" style="text-align: center;">{{$post->stick}}</td>
                                    <td class="align-middle">{{$post->created_at->diffForHumans()}}</td>
                                    <td class="align-middle">{{$post->updated_at->diffForHumans()}}</td>
                                    <td class="align-middle">
                                        <a href="{{ route('editPost', [ 'id' => $post->id]) }}" class="btn btn-outline-info btn-sm">Edit</a>
                                        <form action="{{ route('deletePost', [ 'id' => $post->id]) }}" method="post">
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
                <div class="pagLinks">{{ $posts->links() }}</div>
            </div>
        </div>
    </div>

@endsection
