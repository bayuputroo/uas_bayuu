@extends('admin.app')


@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category</h1>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah
                        </button>

                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $no => $ctg)
                                    <tr>
                                        <th scope="row">{{ ++$no }}</th>
                                        <td>{{ $ctg->name }}</td>
                                        <td>
                                            <button type="button" class="badge bg-warning text-white border-0"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal{{ $ctg->id }}">
                                                Edit
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $ctg->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Category
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('/admin/category/' . $ctg->id) }}"
                                                                method="post">
                                                                @method('PUT')
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">Nama
                                                                        Kategory</label>
                                                                    <input type="text" class="form-control"
                                                                        id="name" name="name"
                                                                        value="{{ $ctg->name }}" required>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button> </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <form action="{{ url('/admin/category/' . $ctg->id) }}" class="d-inline"
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


    <!-- Tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/category') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Kategory</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
