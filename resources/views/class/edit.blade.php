@extends('layouts.master', ['title' => 'Update Data'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Class</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Class</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('class.update', $classes->id) }}" method="post" role="form" id="quickForm">
                 @csrf
                 {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="className">Class Name</label>
                    <input type="text" name="name" value="{{ old('name') ?? $classes->name }}" class="form-control mb-2 @error('name') is-invalid @enderror" id="className" placeholder="Enter Class Name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-primary btn">Submit</button>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection