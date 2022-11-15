@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Send Emails</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Send Emails</li>
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
                    <th style="width: 10px">Sr.No</th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Select Users</th>
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
            
              <ul class="pagination-wrapper mt-2">
                {{ $users->links() }}
              </ul>



<form role="form" method="post" action="{{ url('admin/users/send-mail') }}"
                                enctype="multipart/form-data" id="myForm">
                                {{ csrf_field() }}
                                
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                    @endif
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="subject" class="required">Subject:</label>
                                            <input type="text"
                                                class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}"
                                                id="subject" name="subject" value="{{ old('subject') }}"
                                                placeholder="Enter Subject" required>
                                            @if ($errors->has('subject'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('subject') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <label for="description"
                                                class="required">Description:</label>
                                            <textarea name="description" id="description" class="summernote form-control"></textarea>
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('description') }}
                                                </span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <button type="submit" class="btn btn-primary all-submit-button">Send mails to all</button>
                                            <button type="submit" class="btn btn-primary submit-button">Send</button>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    {{-- <div class="card-footer"> --}}

                                    <input type="hidden" name="email_ids" id="email_ids" value="">
                                
                            </form>

          </div>
          <!-- /. cols -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<style>
  

.submit-button{
  float: right;
  margin-right: 10px;
}

.all-submit-button{
  float: right;
}
</style>




<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select.dataTables.min.css')}}">


  @section('script')

  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.select.min.js')}}"></script>
  <script>
    $(document).ready(function(){

      var url = $('#delete_form').attr('action');

      $(".submit-button").on('click',function(){

          var dataz = tablez.rows('.selected').data();
      
          email_ids = dataz.map(data => data[1]).join();


          $('#email_ids').val(email_ids);



        if (!confirm("Are you sure you want to send email?")){
          return false;
        }
      });


      $(".all-submit-button").on('click',function(){

          $('#email_ids').val('all');


        if (!confirm("Are you sure you want to send emails to all users?")){
          return false;
        }
      });



    var tablez = $('#examplez').DataTable( {
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   4
        } ],
        select: {
            style:    'multiple',
            selector: 'td:last-child'
        },
        order: [[ 1, 'asc' ]]
    } );

    tablez.columns([1]).visible(false);



    });



$(document).ready(function() {
            $('.summernote').summernote({
                height: 350,
                toolbar: [
                    ['style', ['style', 'bold', 'italic', 'underline']],
                    ['fontsize', ['fontsize', 'fontname']],
                    ['height', ['height']],
                    ['operation', ['undo', 'redo']],
                    ['font', ['color', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['para', [, 'ul', 'ol', 'paragraph']],
                    ['object', ['picture']],
                    ['object', ['link', 'table']],
                    ['misc', ['codeview']]
                ]
            });

            $('#myForm').on('submit', function(e) {
                if ($('#description').summernote('isEmpty')) {
                    alert('The Description field is empty, fill it!');
                    e.preventDefault();
                }
            });

            $("#addImage").click(function() {
                var url = '{{ route('allImages') }}';
                $.ajax({
                    type: "POST",
                    url: url,
                    success: function(response) {
                        // console.log(response);                
                        $("#responsecontainer").append(response);
                    }
                });
            });

            $(document).on('click', '.copy-btn', function() {
                $(".copy-btn").text("Copy Link");
                value = $(this).data('clipboard-text');
                var $temp = $("<input>");
                $("#responsecontainer").append($temp);
                $temp.val(value).select();
                document.execCommand("copy");
                $temp.remove();
                var $this = $(this);
                $this.text('Copied');
            });



            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('body').on('click', '#uploadImage', function() {
                var iname = $("#product_image").val();
                var validExt = ['jpeg', 'jpg', 'png', 'gif'];
                var ext = iname.split('.').pop();

                if (iname == '') {
                    alert('Please choose image first!');
                    return false;
                }
                if (validExt.indexOf(ext.toLowerCase()) == -1) {
                    alert('Not allowed file type');
                    $("#product_image").val('');
                    return false;
                }
                // alert(iname);
                var registerForm = $("#imageUploadForm")[0];
                var data = new FormData(registerForm);
                $('#uploadImage').attr('disabled', true);
                $.ajax({
                    enctype: 'multipart/form-data',
                    url: '{{ route('allImages') }}',
                    type: 'POST',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // console.log(data);
                        $('#uploadImage').attr('disabled', false);
                        $("#responsecontainer").html("");
                        $("#product_image").val('');
                        $("#responsecontainer").append(data);
                        alert('Image uploaded successfully');
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }

                });
            });
        });


  </script>
  @endsection
  @endsection
