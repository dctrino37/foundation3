@extends('layouts.frontlayout')

@section('title')
{{trans('middle_east_office.social_programs')}}
@endsection

@section('content')

<section id="hero-animated-2" class="hero-animated d-flex align-items-center">
    <div class="container" data-aos="zoom-out">
      <div class="row ">
        <div class="infoDiv">
          <h1>{{trans('middle_east_office.social_program')}}</h1>
          <p>
            {{trans("middle_east_office.lorem_ipsum_is_simply_dummy_text_of_the_printing_and_typesetting_industry._lorem_ipsum_has_been_the_industry's_standard_dummy_text_ever_since_the_1500s.")}}
          </p>
        </div>
        <div class="col-lg-4">
          <div class="card d-block text-center">
            <img class="el-image" alt=""
            src="https://static.wixstatic.com/media/2bdd25_d5cfda2a81b5460eb59a9a8371ceb0b8~mv2.jpg/v1/crop/x_0,y_26,w_504,h_373/fill/w_386,h_284,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/WhatsApp%20Image%202020-11-24%20at%201_23_29%20PM_.jpg" width="100%">
            <h5 class="my-3 title">{{trans('middle_east_office.insurance_cards')}}
            </h5>
            <p style="text-align: center;padding: 10px;"><span style="font-weight: 400;">{{trans('middle_east_office.we_support_local_families_with_insurance_cards_that_will_provide_health_insurance_for_one_year_for_the_entire_family.')}}</span></p>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="card d-block text-center">
            <img class="el-image" alt=""
            src="https://static.wixstatic.com/media/4db942_e1deae572405402581e6cbf6e054c3ea~mv2.jpg/v1/fill/w_386,h_284,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/shutterstock_251585581.jpg" width="100%">
            <h5 class="my-3 title">{{trans('middle_east_office.mobile_clinic')}}</h5>
            <p style="text-align: center;padding: 10px;"><span style="font-weight: 400;">{{trans('middle_east_office.while_our_healthcare_center_is_being_constructed,_we_want_to_realize_a_mobile_health_clinic,_run_by_doctor_and_founder_fortunatus.')}}</span></p>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="card d-block text-center">
            <img class="el-image" alt=""
            src="https://static.wixstatic.com/media/2bdd25_6a020dac0e0a4fd3b97416c18792f7d2~mv2.jpeg/v1/crop/x_0,y_0,w_975,h_720/fill/w_386,h_284,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Front.jpeg" width="100%">
            <h5 class="my-3 title">{{trans('middle_east_office.healthcare_center')}}</h5>
            <p style="text-align: center;padding: 10px;"><span style="font-weight: 400;">{{trans('middle_east_office.our_main_project_is_building_a_healthcare_center_in_kahama,_where_we_can_help_and_support_everyone_in_this_region.')}}</span></p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<section id="programs" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card d-block text-center left-div">
          <h2 class="my-3">{{trans('middle_east_office.who_are_we?')}}</h2>
          <p class="p-3">{{trans('middle_east_office.in_the_region_of_kahama,_tanzania,_many_people_suffer_from_health_issues._the_local_people_are_poor,_often_work_in_harsh_conditions_and_cannot_always_receive_the_health_care_they_are_entitled_to._the_healthcare_capacity_is_insufficient_and_is_never_enough_to_help_everyone_in_the_region.')}} <br>
            {{trans('middle_east_office.martus_foundation_aims_to_provide_better_health_care_in_kahama_for_all_residents_-_regardless_their_socio-economic_position.')}}</p>
            <div class="buttons">
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.contact_us')}}</a>
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.donate_us')}}</a>
            </div>
        </div>
      </div>
      
      <div class="col-lg-6"> 
        <div class="card d-block text-center">
          <img src="https://static.wixstatic.com/media/4db942_39add6aba34a43b0b00890454509a25a~mv2.jpg/v1/crop/x_1545,y_0,w_3710,h_4000/fill/w_593,h_638,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/shutterstock_1798158742.jpg" alt="">
        </div>
        
      </div>
      
    </div>
  </div>
</section>

<section id="programs" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
       
      <div class="col-lg-6"> 
        <div class="card d-block text-center">
          <img src="https://static.wixstatic.com/media/4db942_39add6aba34a43b0b00890454509a25a~mv2.jpg/v1/crop/x_1545,y_0,w_3710,h_4000/fill/w_593,h_638,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/shutterstock_1798158742.jpg" alt="">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card d-block text-center left-div">
          <h2 class="my-3">{{trans('middle_east_office.who_are_we?')}}</h2>
          <p class="p-3">{{trans('middle_east_office.in_the_region_of_kahama,_tanzania,_many_people_suffer_from_health_issues._the_local_people_are_poor,_often_work_in_harsh_conditions_and_cannot_always_receive_the_health_care_they_are_entitled_to._the_healthcare_capacity_is_insufficient_and_is_never_enough_to_help_everyone_in_the_region.')}} <br>
            {{trans('middle_east_office.martus_foundation_aims_to_provide_better_health_care_in_kahama_for_all_residents_-_regardless_their_socio-economic_position.')}}</p>
            <div class="buttons">
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.contact_us')}}</a>
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.donate_us')}}</a>
            </div>
        </div>
      </div>
    
      
    </div>
  </div>
</section>

<section id="programs" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card d-block text-center left-div">
          <h2 class="my-3">{{trans('middle_east_office.who_are_we?')}}</h2>
          <p class="p-3">{{trans('middle_east_office.in_the_region_of_kahama,_tanzania,_many_people_suffer_from_health_issues._the_local_people_are_poor,_often_work_in_harsh_conditions_and_cannot_always_receive_the_health_care_they_are_entitled_to._the_healthcare_capacity_is_insufficient_and_is_never_enough_to_help_everyone_in_the_region.')}} <br>
            {{trans('middle_east_office.martus_foundation_aims_to_provide_better_health_care_in_kahama_for_all_residents_-_regardless_their_socio-economic_position.')}}</p>
            <div class="buttons">
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.contact_us')}}</a>
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.donate_us')}}</a>
            </div>
        </div>
      </div>
      
      <div class="col-lg-6"> 
        <div class="card d-block text-center">
          <img src="https://static.wixstatic.com/media/4db942_39add6aba34a43b0b00890454509a25a~mv2.jpg/v1/crop/x_1545,y_0,w_3710,h_4000/fill/w_593,h_638,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/shutterstock_1798158742.jpg" alt="">
        </div>
        
      </div>
      
    </div>
  </div>
</section>

<section id="programs" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-6"> 
        <div class="card d-block text-center">
          <img src="https://static.wixstatic.com/media/4db942_39add6aba34a43b0b00890454509a25a~mv2.jpg/v1/crop/x_1545,y_0,w_3710,h_4000/fill/w_593,h_638,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/shutterstock_1798158742.jpg" alt="">
        </div>
        
      </div>

      <div class="col-lg-6">
        <div class="card d-block text-center left-div">
          <h2 class="my-3">{{trans('middle_east_office.who_are_we?')}}</h2>
          <p class="p-3">{{trans('middle_east_office.in_the_region_of_kahama,_tanzania,_many_people_suffer_from_health_issues._the_local_people_are_poor,_often_work_in_harsh_conditions_and_cannot_always_receive_the_health_care_they_are_entitled_to._the_healthcare_capacity_is_insufficient_and_is_never_enough_to_help_everyone_in_the_region.')}} <br>
            {{trans('middle_east_office.martus_foundation_aims_to_provide_better_health_care_in_kahama_for_all_residents_-_regardless_their_socio-economic_position.')}}</p>
            <div class="buttons">
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.contact_us')}}</a>
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.donate_us')}}</a>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<section id="programs" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card d-block text-center left-div">
          <h2 class="my-3">{{trans('middle_east_office.who_are_we?')}}</h2>
          <p class="p-3">{{trans('middle_east_office.in_the_region_of_kahama,_tanzania,_many_people_suffer_from_health_issues._the_local_people_are_poor,_often_work_in_harsh_conditions_and_cannot_always_receive_the_health_care_they_are_entitled_to._the_healthcare_capacity_is_insufficient_and_is_never_enough_to_help_everyone_in_the_region.')}} <br>
            {{trans('middle_east_office.martus_foundation_aims_to_provide_better_health_care_in_kahama_for_all_residents_-_regardless_their_socio-economic_position.')}}</p>
            <div class="buttons">
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.contact_us')}}</a>
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.donate_us')}}</a>
            </div>
        </div>
      </div>
      
      <div class="col-lg-6"> 
        <div class="card d-block text-center">
          <img src="https://static.wixstatic.com/media/4db942_39add6aba34a43b0b00890454509a25a~mv2.jpg/v1/crop/x_1545,y_0,w_3710,h_4000/fill/w_593,h_638,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/shutterstock_1798158742.jpg" alt="">
        </div>
        
      </div>
      
    </div>
  </div>
</section>

<section id="programs" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-6"> 
        <div class="card d-block text-center">
          <img src="https://static.wixstatic.com/media/4db942_39add6aba34a43b0b00890454509a25a~mv2.jpg/v1/crop/x_1545,y_0,w_3710,h_4000/fill/w_593,h_638,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/shutterstock_1798158742.jpg" alt="">
        </div>  
      </div>

      <div class="col-lg-6">
        <div class="card d-block text-center left-div">
          <h2 class="my-3">{{trans('middle_east_office.who_are_we?')}}</h2>
          <p class="p-3">{{trans('middle_east_office.in_the_region_of_kahama,_tanzania,_many_people_suffer_from_health_issues._the_local_people_are_poor,_often_work_in_harsh_conditions_and_cannot_always_receive_the_health_care_they_are_entitled_to._the_healthcare_capacity_is_insufficient_and_is_never_enough_to_help_everyone_in_the_region.')}} <br>
            {{trans('middle_east_office.martus_foundation_aims_to_provide_better_health_care_in_kahama_for_all_residents_-_regardless_their_socio-economic_position.')}}</p>
            <div class="buttons">
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.contact_us')}}</a>
              <a href="contact.html" class="btn btn-primary" style="background: #b2d6de;border: #b2d6de;">{{trans('middle_east_office.donate_us')}}</a>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<main id="">
  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      
      <div class="section-header">
        <h2>{{trans('middle_east_office.contact_us')}}</h2>
        <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores
          adipisci aliquam.</p>
        </div>
        
      </div>
      
      <!-- <div class="map">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
        frameborder="0" allowfullscreen></iframe>
      </div> -->
      
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
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Reason of Contact" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">{{trans('middle_east_office.loading')}}</div>
                <div class="error-message"></div>
                <div class="sent-message">{{trans('middle_east_office.your_message_has_been_sent._thank_you!')}}</div>
              </div>
              <div class="text-center"><button type="submit">{{trans('middle_east_office.send_message')}}</button></div>
            </form>
          </div><!-- End Contact Form -->
          
        </div>
        
      </div>
    </section><!-- End Contact Section -->
    
  </main><!-- End #main -->
  
@endsection