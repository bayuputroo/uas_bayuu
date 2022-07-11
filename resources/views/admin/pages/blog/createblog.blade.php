@extends('admin.app')


@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Blog</h1>
        </div>
        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-8 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">

                    </div>
                    <div class="card-body">
                        <form action="{{ url('/admin/blog') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Category</label>
                                <select class="form-select" name="category_id">
                                    @foreach ($category as $ctg)
                                        <option value="{{ $ctg->id }}">{{ $ctg->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Deskripsi</label>
                                <input id="x" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                                <trix-editor input="x"></trix-editor>
                            </div>
                            <input type="hidden" name="user_id" value="1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
