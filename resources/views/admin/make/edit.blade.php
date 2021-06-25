@extends('layouts.backend.app') 
@section('content')
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">General Form Elements</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Forms</li>
                              <li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>	  

      <!-- Main content -->
      <section class="content">


        <div class="row col d-flex justify-content-center">			  
          <div class="col-lg-6 col-12 ">
              <!-- Basic Forms -->
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Car Make</h4>
                  </div>
                  <!-- /.box-header -->
                  <form action="{{ route('admin.make.update', $make->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                      <div class="box-body">
                          <div class="form-group">
                              <label>Car Make:</label>
                              <input type="text" name="name" value="{{$make->name}}" class="form-control" placeholder="Car Make">
                          </div>
                         
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                          <a href="{{ route('admin.make.index') }}" class="btn btn-rounded btn-danger">Back</a>
                          <button type="submit" class="btn btn-rounded btn-success pull-right">Submit</button>
                      </div>
                  </form>
                </div>
                <!-- /.box -->			
          </div>
        </div>

      </section>
      <!-- /.content -->
    </div>
</div>
@endsection
@push('js')
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}  
@endpush
