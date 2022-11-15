@extends('layouts.frontlayout')

@section('title')
Contact Us
@endsection

@section('content')

<?php 



?>

<main id="" class="mt-5">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

          <div class="section-header">
              <h2>Profile Settings</h2>
              {{-- <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores
                  adipisci aliquam.</p> --}}
              </div>
              
          </div>
          
          <div class="container">
              
              <div class="row gy-5 gx-lg-5">
                  
                  <div class="col-lg-4 dnone">
                      
                      <div class="info">
                          <h3>Get in touch</h3>
                          <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>
                          
                          <div class="info-item d-flex">
                              <i class="bi bi-geo-alt flex-shrink-0"></i>
                              <div>
                                  <h4>Location:</h4>
                                  <p>A108 Adam Street, New York, NY 535022</p>
                              </div>
                          </div><!-- End Info Item -->
                          
                          <div class="info-item d-flex">
                              <i class="bi bi-envelope flex-shrink-0"></i>
                              <div>
                                  <h4>Email:</h4>
                                  <p>info@example.com</p>
                              </div>
                          </div><!-- End Info Item -->
                          
                          <div class="info-item d-flex">
                              <i class="bi bi-phone flex-shrink-0"></i>
                              <div>
                                  <h4>Call:</h4>
                                  <p>+1 5589 55488 55</p>
                              </div>
                          </div><!-- End Info Item -->
                          
                      </div>
                      
                  </div>

        <div class="col-lg-8ff profile-settings-container">
            <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit User Information</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('users/store-image/'.$user->id)}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="card-body">
                @if(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                
                
                <div class="row">
                  <div class="form-group col-md-6 dnone">
                    <label for="whatsapp_no" class="requiredz">Whatsapp No:</label>
                    <input type="text" class="form-control{{ $errors->has('whatsapp_no') ? ' is-invalid' : '' }}" id="whatsapp_no" name="whatsapp_no" value="{{$user->whatsapp_no}}" placeholder="Enter Whatsapp No." requiredz
                    oninvalid="this.setCustomValidity('Please Enter A Valid Phone Number')"
                    onchange="try{setCustomValidity('')}catch(e){}"
                    oninput="setCustomValidity(' ')" pattern="^[0-9-+()\s]*$"
                    >
                    @if ($errors->has('whatsapp_no'))
                    <span class="invalid-feedback">
                      {{ $errors->first('whatsapp_no') }}
                    </span>
                    @endif
                  </div>
                  
                  <div class="form-group col-md-6 dnone">
                    <label for="calling_no" class="requiredz">Calling No:</label>
                    <input type="text" class="form-control{{ $errors->has('calling_no') ? ' is-invalid' : '' }}" id="calling_no" name="calling_no" value="{{$user->calling_no}}" placeholder="Enter Calling No."
                    oninvalid="this.setCustomValidity('Please Enter A Valid Phone Number')"
                    onchange="try{setCustomValidity('')}catch(e){}"
                    oninput="setCustomValidity(' ')" pattern="^[0-9-+()\s]*$"
                    requiredz>
                    @if ($errors->has('calling_no'))
                    <span class="invalid-feedback">
                      {{ $errors->first('calling_no') }}
                    </span>
                    @endif
                  </div>

                </div>
                
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{$user->email}}" placeholder="Enter Email" 
                    oninvalid="this.setCustomValidity('Please Enter A Valid Email')"
                    onchange="try{setCustomValidity('')}catch(e){}"
                    oninput="setCustomValidity(' ')"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                    required>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      {{ $errors->first('email') }}
                    </span>
                    @endif
                  </div>
                  
                  <div class="form-group{{ $errors->has('image') ? ' is-invalid' : '' }} col-md-12">
                    <label for="image">User Image (Choose new):</label><br>
                    <div class="input-group">
                      <input type="file" class="form-control" name="image" id="image">
                      {{-- <label class="custom-file-label" for="image">Choose file</label> --}}
                    </div>
                    @if ($errors->has('image'))
                    <span class="" style="color: red">
                      *{{ $errors->first('image') }}
                    </span>
                    @endif
                  </div>
                  
                  <div class="form-group col-md-12" >
                    <label for="image">Profile Image (Current):</label><br>
                    <img src="{{url('users/images/'.$user->profile_image)}}" alt="" height="150" width="auto">
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
              
              <div class="card-footerz">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div><!-- End Contact Form -->
                  
              </div>
              
          </div>
      </section>

  </main><!-- End #main -->
@endsection