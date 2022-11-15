@extends('layouts.admin')

@section('content')


<?php

$seo_page = $seo_pages->first();

//dd($seo_page);

?>






<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Seo Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('admin/products')}}">Seo Page</a></li>
            <li class="breadcrumb-item active">Edit</li>
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
              <h3 class="card-title">Edit Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" class="seo-form" action="{{url('admin/store-seo/' . $seo_page->id)}}" enctype="multipart/form-data">
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
                    <label for="page_name" class="required">Select Page</label>
                    <select class="form-control page-select" aria-label="Default select example">
                        {{-- <option selected>Open this select menu</option> --}}
                        @if($seo_pages)
                        @foreach($seo_pages as $key => $seo_page)
                        <option value="{{$seo_page->id}}">{{$seo_page->page_name}}</option>
                        @endforeach
                        @endif
                    </select>
                    @if ($errors->has('page_name'))
                    <span class="invalid-feedback">
                      {{ $errors->first('page_name') }}
                    </span>
                    @endif
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="meta_keywords" class="required">Meta Keywords</label>
                    <input type="text" class="form-control{{ $errors->has('meta_keywords') ? ' is-invalid' : '' }}" id="meta_keywords" name="meta_keywords" value="{{$seo_page->meta_keywords}}" required>
                    @if ($errors->has('meta_keywords'))
                    <span class="invalid-feedback">
                      {{ $errors->first('meta_keywords') }}
                    </span>
                    @endif
                  </div>
                </div>


                <div class="row">
                <div class="form-group col-md-6">
                    <label for="meta_title" class="required">Meta Title</label>
                    <input type="text" class="form-control{{ $errors->has('meta_title') ? ' is-invalid' : '' }}" id="meta_title" name="meta_title" value="{{$seo_page->meta_title}}" required>
                    @if ($errors->has('meta_title'))
                    <span class="invalid-feedback">
                      {{ $errors->first('meta_title') }}
                    </span>
                    @endif

                  <a href="#" class="page_url" target="_blank">Page url</a>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="meta_description" class="required">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="10"></textarea>
                    @if ($errors->has('meta_description'))
                    <span class="invalid-feedback">
                      {{ $errors->first('meta_description') }}
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
                <button type="submit" class="btn btn-primary fright">Submit</button>
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
{{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}

@section('script')
<script type="text/javascript">
  $(document).ready(function() {

    var seo_pages = {!! $seo_pages !!}
    var homepage_url = '{!! url('/') !!}';

    $(".page-select").change(function () {
    id = $(this).children(':selected').val();
    console.log(id);
    

    var url = $('.seo-form').attr('action');

    url = url.split('/')
    url.pop()

    url.push(id);

    url = url.join('/');

    $('.seo-form').attr('action',url);


    seo_page = seo_pages.filter(seo_page => seo_page.id == id)[0];

    $('form *').filter('.form-control').each(function(){

      field_name = $(this).attr('name');
    
      field_value = seo_page[field_name];
      

      $('input[name=' + field_name + ']').val(field_value);
      $('textarea[name=' + field_name + ']').val(field_value);

});


    page_url = homepage_url + '\\' + seo_page['page_uri'];

    $('.page_url').attr('href',page_url);
    
    //$(this).next('input').focus().val(page_id);    
});


$(".page-select").trigger('change');

});

</script>

@endsection
@endsection
