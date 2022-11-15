@extends('layouts.admin')

@section('content')
<style>
  .field_icon {
    float: right;
    margin-left: -25px;
    margin-top: -25px;
    position: relative;
    z-index: 2;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>My Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">My Profile</li>
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
              <h3 class="card-title">Profile Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('admin/my-profile/update')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="card-body">
                @if(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="username" class="required">Name:</label>
                    <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" name="username" value="{{Auth::user()->name}}" placeholder="Enter Name">
                    @if ($errors->has('username'))
                    <span class="invalid-feedback">
                      {{ $errors->first('username') }}
                    </span>
                    @endif
                  </div>

                  <div class="form-group col-md-6">
                    <label for="email" class="required">Email:</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{Auth::user()->email}}" placeholder="Enter Email">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      {{ $errors->first('email') }}
                    </span>
                    @endif
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="mobile" class="required">Mobile:</label>
                    <input type="number" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" id="mobile" name="mobile" value="{{Auth::user()->mobile}}" placeholder="Enter Mobile No.">
                    @if ($errors->has('mobile'))
                    <span class="invalid-feedback">
                      {{ $errors->first('mobile') }}
                    </span>
                    @endif
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="password" class="required">Password:</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" value="{{Auth::user()->real_password}}" placeholder="Enter Password">
                    <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                      {{ $errors->first('password') }}
                    </span>
                    @endif
                  </div>
                </div>
                
                
                  {{-- <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" id="status" name="status">
                      <option value="">Select</option>
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                    @if ($errors->has('status'))
                      <span class="invalid-feedback">
                        {{ $errors->first('status') }}
                      </span>
                    @endif
                  </div> --}}
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

 @section('script')
 <script>
  $(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
</script>
@endsection
