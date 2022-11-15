@extends('layouts.admin')
<style>
    .note-group-select-from-files {
        display: none;
    }

</style>
@section('content')
    <style>
        .addimage {
            margin: 4px 0px 8px 760px;
        }

    </style>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Send Mail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/users') }}">All Users</a></li>
                            <li class="breadcrumb-item active">Send Mail</li>
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
                                <h3 class="card-title">Send mail to all users</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="{{ url('admin/users/send-mail') }}"
                                enctype="multipart/form-data" id="myForm">
                                {{ csrf_field() }}
                                <div class="card-body">
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
                                                class="required">Description:</label><span><button type="button"
                                                    class="btn btn-success addimage" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg" id="addImage">Add
                                                    Image</button></span>
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
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    {{-- <div class="card-footer">
                                </div> --}}
                            </form>
                        </div>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Select Image</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" enctype="multipart/form-data" id="imageUploadForm"
                                            name="imageUploadForm">
                                            <div class="row">
                                                <div
                                                    class="form-group{{ $errors->has('product_image') ? ' is-invalid' : '' }} col-md-6">
                                                    <label for="product_image">Add New Image:</label>
                                                    <div class="input-group">
                                                        {{-- <div class="custom-file"> --}}
                                                        <input type="file" class="form-control" name="product_image"
                                                            id="product_image" required>
                                                        <label class="custom-file-label" for="product_image">Choose
                                                            file</label>
                                                        {{-- </div> --}}
                                                    </div>
                                                    @if ($errors->has('product_image'))
                                                        <span class="invalid-feedback">
                                                            {{ $errors->first('product_image') }}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6" style="margin-top: 32px;">
                                                    <button type="button" class="btn btn-success"
                                                        id="uploadImage">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row" id="responsecontainer">
                                            {{-- <div ></div> --}}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
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
@endsection

@section('script')
    <script type="text/javascript">
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
