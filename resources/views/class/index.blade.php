@extends('layouts.master', ['title' => 'All Class'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        @include('layouts.alert')
          <div class="col-sm-6">
            <a href="{{ route('class.add')}}" class="btn btn-primary btn-sm">Add Class</a>
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
                          <h3 class="card-title">Class Data</h3>

                          <!-- SEARCH FORM -->
                          <div class="card-tools">
                            <form class="form-inline " action="{{ route('search.class') }}">
                                <div class="input-group input-group-sm">
                                    <input name="query" class="form-control float-right" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Class Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1 ?>
                                    @forelse($class as $name)
                                    <tr>                                
                                      <td>{{ $no++ }}</td>
                                      <td>{{ $name->name }}</td>
                                      <td>
                                      
                                       <form action="{{ route('class.destroy', $name->id) }}" method="post">
                                          @csrf
                                          @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                            Delete
                                            </button> 
                                            <a href="{{ route('class.edit', $name->id) }}" class="btn btn-success btn-sm ">Edit</a>          
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