@extends('layouts.master', ['title' => 'Show Students'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            @include('layouts.alert')
          <div class="col-sm-6">
            
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
                <div class="col-md-6">
                 <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->name }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $student->nis }}</li>
                        <li class="list-group-item">{{ $student->birth_date }}</li>
                        <li class="list-group-item">{{ $student->gender }}</li>
                        <li class="list-group-item">{{ $student->class_id }}</li>
                        <li class="list-group-item">{{ $student->phone }}</li>
                        <li class="list-group-item">{{ $student->address }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('student.index')}}" class="btn btn-primary btn-sm">Back</a>
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