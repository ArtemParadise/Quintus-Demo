@extends('layouts.adminNavbar')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <div class="card">
                    @auth()
                        <div class="card-header bg-dark text-white font-custom h4">Edit category</div>
                        <div class="card-body">
                            <form action="{{ route('updateCategory', [ 'id' => $category->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                @include('admin.categories.parts.editCategoryPart')

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
