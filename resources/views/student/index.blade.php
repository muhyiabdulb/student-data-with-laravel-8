@extends('layouts.master', ['title' => 'All Students'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            @include('layouts.alert')
          <div class="col-sm-6">
            <a href="{{ route('student.add')}}" class="btn btn-primary btn-sm">Add Student</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Students Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIS</th>
                                        <th>Name</th>
                                        <th>Birth Date </th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>phone</th>
                                        <th>address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; ?>
                                @forelse ($students as $student) 
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $student->nis }}</td>
                                        <td>{{ $student->name }}</td>
                                        <!-- manggil fungsi BirthDate di model student -->
                                        <td>{{ $student->BirthDate}}</td>
                                        <!-- tidak menggunakan function -->
                                        <!-- <td>{{ Carbon\Carbon::parse($student->birth_date)->format('l, d F Y') }}</td> -->
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->class_id }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>
                                            <form action="{{ route('student.destroy', $student->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                                </button> 
                                                <a href="{{ route('student.show', $student->id) }}" class="btn btn-primary btn-sm">Show</a>
                                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success btn-sm ">Edit</a>          
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <div class="col-md-12">
                                    <div class="alert alert-info text-center">
                                        Not Found
                                    </div>
                                </div>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        <!-- /.row -->
        </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection