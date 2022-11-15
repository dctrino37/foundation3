@extends('layouts.frontlayout')

@section('title')
{{trans('middle_east_office.contact_us')}}
@endsection

@section('content')



<main id="" class="mt-5">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
          
          <div class="section-header">
              <h2>{{trans('middle_east_office.contact_us')}}</h2>
              <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores
                  adipisci aliquam.</p>
              </div>
              
          </div>
          
          <div class="container">
              
              <div class="row gy-5 gx-lg-5">
                  
                  <div class="col-lg-4">
                      
                      <div class="info">
                          <h3>{{trans('middle_east_office.get_in_touch')}}</h3>
                          <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>
                          
                          <div class="info-item d-flex">
                              <i class="bi bi-geo-alt flex-shrink-0"></i>
                              <div>
                                  <h4>{{trans('middle_east_office.location:')}}</h4>
                                  <p>A108 Adam Street, New York, NY 535022</p>
                              </div>
                          </div><!-- End Info Item -->
                          
                          <div class="info-item d-flex">
                              <i class="bi bi-envelope flex-shrink-0"></i>
                              <div>
                                  <h4>{{trans('middle_east_office.email:')}}</h4>
                                  <p>info@example.com</p>
                              </div>
                          </div><!-- End Info Item -->
                          
                          <div class="info-item d-flex">
                              <i class="bi bi-phone flex-shrink-0"></i>
                              <div>
                                  <h4>{{trans('middle_east_office.call:')}}</h4>
                                  <p>+1 5589 55488 55</p>
                              </div>
                          </div><!-- End Info Item -->
                          
                      </div>
                      
                  </div>
                  
                  <div class="col-lg-8">
                      @include ('front.contact_form')
                  </div><!-- End Contact Form -->
                  
              </div>
              
          </div>
      </section>

  </main><!-- End #main -->
@endsection