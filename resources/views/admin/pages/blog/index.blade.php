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
                        @if (session()->has('success'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <!-- Button trigger modal -->
                        <a href="{{ url('/admin/blog/create') }}" class="btn btn-primary">Tambah </a>

                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $no => $blg)
                                    <tr>
                                        <th scope="row">{{ ++$no }}</th>
                                        <td>{{ $blg->title }}</td>
                                        <td>
                                            <a href="{{ url('/admin/blog/' . $blg->id) }}"
                                                class="badge bg-success text-white border-0">lihat</a>
                                            <a href="{{ url('/admin/blog/' . $blg->id . '/edit') }}"
                                                class="badge bg-warning text-white border-0">Edit </a>


                                            <form action="{{ url('/admin/blog/' . $blg->id) }}" class="d-inline"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    class="badge bg-danger text-white border-0">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
