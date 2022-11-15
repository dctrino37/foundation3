@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Delete Users</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Delete Users</li>
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

          <form role="form" method="post" action="{{ url('admin/delete-users-post') }}" enctype="multipart/form-data" id="delete_form">
            <div class="card-body table-responsive p-0 text-center">

          {{ csrf_field() }}
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <div class="input-group-append">
                    @if (count($users) > 0)
                     {{-- <a href="{{route('delete_users_post')}}"><button type="button" class="btn btn-success">Delete Users</button></a> --}}
                     <button type="submit" class="btn btn-primary delete">Delete Users</button>
                     @endif
                  </div>
                </div>
              </div>
            </div>
            @if(Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <!-- /.card-header -->


            

        

              <table id="examplez" class="table table-bordered table-head-fixed display">
                <thead>                  
                  <tr>
                    <th style="width: 10px">Sr.No.</th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Spam Reports</th>
                    <th>Select User</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($users) > 0)  
                  @foreach($users as $key => $value)
                  <tr>
                    <td>{{ $key+ $users->firstItem() }}</td>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name ? $value->name : '-' }}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->spam_report_ids_count ? $value->spam_report_ids_count : 0}}</td>
                    <td class="white-color"></td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan="7" align="center">No Records!</td>
                  </tr>  
                  @endif
                </tbody>
              </table>
            </div>
          </form>
          
              <ul class="pagination-wrapper mt-2">
                {{ $users->links() }}
              </ul>
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

<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select.dataTables.min.css')}}">


  @section('script')

  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.select.min.js')}}"></script>
  <script>
    $(document).ready(function(){

      var url = $('#delete_form').attr('action');

      $(".delete").on('click',function(){



          var dataz = tablez.rows('.selected').data();
      
          new_url = url + '/' + dataz.map(data => data[1]).join();

          console.log(dataz,new_url);

          $('#delete_form').attr('action',new_url);



        if (!confirm("Do you want to delete?")){
          return false;
        }
      });



    var tablez = $('#examplez').DataTable( {
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets: 5
        } ],
        select: {
            style:    'multiple',
            selector: 'td:last-child'
        },
        order: [[ 1, 'asc' ]]
    } );

    tablez.columns([1]).visible(false);



    });
  </script>
  @endsection
  @endsection