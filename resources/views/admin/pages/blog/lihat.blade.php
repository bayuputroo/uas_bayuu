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

                        <div class="card-body">
                            <h1>{{ $blog->title }}</h1>
                            <small>{{ $blog->category->name }}</small>
                            <hr>
                            <p>{!! $blog->deskripsi !!}</p>

                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->
    @endsection
