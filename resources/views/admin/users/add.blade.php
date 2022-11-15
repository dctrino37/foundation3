@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product Management</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('admin/products')}}">Product Management</a></li>
            <li class="breadcrumb-item active">Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('admin/product/store')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="card-body">
                @if(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                
                
                <div class="row">
                  <div class="form-group{{ $errors->has('image') ? ' is-invalid' : '' }} col-md-6">
                    <label for="image">Product Image:</label>
                    <div class="input-group">
                      {{--  <div class="custom-file">  --}}
                        <input type="file" class="form-control" name="image" id="image" required>
                        <label class="custom-file-label" for="image">Choose file</label>
                        {{--  </div>  --}}
                      </div>
                      @if ($errors->has('image'))
                      <span class="invalid-feedback">
                        {{ $errors->first('image') }}
                      </span>
                      @endif
                    </div>
                    
                    <div class="form-group col-md-6">
                      <label for="whatsapp_no" class="required">Whatsapp Number:</label>
                      <input type="text" class="form-control{{ $errors->has('whatsapp_no') ? ' is-invalid' : '' }}" id="whatsapp_no" name="whatsapp_no" value="{{old('whatsapp_no')}}" placeholder="Enter Whatsapp No." 
                      oninvalid="this.setCustomValidity('Please Enter A Valid Phone Number')"
                      onchange="try{setCustomValidity('')}catch(e){}"
                      oninput="setCustomValidity(' ')" pattern="^[0-9-+()\s]*$"
                      required>
                      @if ($errors->has('whatsapp_no'))
                      <span class="invalid-feedback">
                        {{ $errors->first('whatsapp_no') }}
                      </span>
                      @endif
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="calling_no" class="required">Calling Number:</label>
                      <input type="text" class="form-control{{ $errors->has('calling_no') ? ' is-invalid' : '' }}" id="calling_no" name="calling_no" value="{{old('calling_no')}}" placeholder="Enter Calling No." required
                      oninvalid="this.setCustomValidity('Please Enter A Valid Phone Number')"
                      onchange="try{setCustomValidity('')}catch(e){}"
                      oninput="setCustomValidity(' ')" pattern="^[0-9-+()\s]*$"
                      >
                      @if ($errors->has('calling_no'))
                      <span class="invalid-feedback">
                        {{ $errors->first('calling_no') }}
                      </span>
                      @endif
                    </div>
                    
                    <div class="form-group col-md-6">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{old('email')}}" placeholder="Enter Email" required
                      oninvalid="this.setCustomValidity('Please Enter A Valid Email')"
                      onchange="try{setCustomValidity('')}catch(e){}"
                      oninput="setCustomValidity(' ')"
                      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                      >
                      @if ($errors->has('email'))
                      <span class="invalid-feedback">
                        {{ $errors->first('email') }}
                      </span>
                      @endif
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /. cols -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.ckeditor').ckeditor();
    });
  </script>
  @endsection
