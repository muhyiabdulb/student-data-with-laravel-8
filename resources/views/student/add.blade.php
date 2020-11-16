@extends('layouts.master', ['title' => 'Add Data'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Student</h1>
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
                <h3 class="card-title">Add Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('student.store') }}" method="post" role="form" id="quickForm">
                 @csrf
                 
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="text" name="nis" value="{{ old('nis') }}" class="form-control mb-2 @error('nis') is-invalid @enderror" id="nis" placeholder="Enter NIS">
                                @error('nis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control mb-2 @error('name') is-invalid @enderror" id="name" placeholder="Enter Name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>                               
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birth_date">Birth Date</label>
                                <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="form-control mb-2 @error('birth_date') is-invalid @enderror" id="birth_date">
                                @error('birth_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender</label> <br>
                                <input type="radio" name="gender" value="Laki-laki" class="mb-2 @error('gender') is-invalid @enderror" id="gender"> Laki-laki
                                <input type="radio" name="gender" value="Perempuan" class="mb-2 @error('gender') is-invalid @enderror" id="gender"> Perempuan
                                @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>                               
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control mb-2 @error('phone') is-invalid @enderror" id="phone" placeholder="Enter Phone">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="class">Choose Class</label>
                                <select class="form-control" name="class_id">
                                    <option disabled selected>Pilih Rombel</option>
                                    <?php foreach ($class as $item) { ?>
                                        <option value="{{ $item->name }}" value="{{ old('name') }}" class="form-control mb-2 @error('class_id') is-invalid @enderror" >{{ $item->name }}</option>
                                    <?php } ?>
                                </select>
                                @error('class_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>                               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea type="text" name="address" value="{{ old('address') }}" class="form-control mb-2 @error('address') is-invalid @enderror" id="address" placeholder="Enter Address"></textarea>
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>                              
                    </div>
                    <button type="submit" class="btn btn-primary btn">Save</button>
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