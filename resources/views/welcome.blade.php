@extends('layout.app')
@section('title', 'Welcome')
@section('content')
<section class="banner_main">
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
       <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <div class="carousel-caption  banner_po">
                   <div class="row">
                      <div class="col-md-9">
                         <div class="build_box">
                            <h1>We Are Builders</h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority<br> There are many variations of passages of</p>
                            <a class="read_more conatct_btn" href="contact.html" role="button">Contact Us</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="carousel-caption banner_po">
                   <div class="row">
                      <div class="col-md-9">
                         <div class="build_box">
                            <h1>We Are Builders</h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority<br> There are many variations of passages of</p>
                            <a class="read_more conatct_btn" href="contact.html" role="button">Contact Us</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="carousel-caption banner_po">
                   <div class="row">
                      <div class="col-md-9">
                         <div class="build_box">
                            <h1>We Are Builders</h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority<br> There are many variations of passages of</p>
                            <a class="read_more conatct_btn" href="contact.html" role="button">Contact Us</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
       <i class="fa fa-angle-left" aria-hidden="true"></i>
       <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
       <i class="fa fa-angle-right" aria-hidden="true"></i>
       <span class="sr-only">Next</span>
       </a>
    </div>
 </section>
</header>
<!-- end banner -->
<!-- three_box -->
<div class="three_box">
 <div class="container">
    <div class="row">
       <div class="col-md-3">
          <div id="text_hover" class="const text_align_center">
             <i><img src="assets/images/ser1.png" alt="#"/></i>
             <span>construction services</span>
          </div>
       </div>
       <div class="col-md-3">
          <div id="text_hover" class="const text_align_center">
             <i><img src="assets/images/ser2.png" alt="#"/></i>
             <span>RECONSTRUCTION</span>
          </div>
       </div>
       <div class="col-md-3">
          <div id="text_hover" class="const text_align_center">
             <i><img src="assets/images/ser3.png" alt="#"/></i>
             <span>ELECTRICAL services</span>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- end three_box -->
<!-- about -->
<div class="about">
 <div class="container-fluid">
    <div class="row d_flex">
       <div class="col-md-7">
          <div class="titlepage">
             <h2>About Our Company</h2>
             <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</span>
             <a class="read_more" href="Javascript:void(0)"> Read More</a>
          </div>
       </div>
       <div class="col-md-5">
          <div class="about_img">
             <figure><img src="assets/images/about.png" alt="#"/></figure>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- end about -->
<!-- projects -->
<div class="projects">
 <div class="container-fluid">
    <div class="row">
       <div class="col-md-12">
          <div class="titlepage">
             <h2>Our Features Projects</h2>
             <span>It is a long established fact that a reader will be distracted by the readable</span>
          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-md-12">
          <div id="proj" class="carousel slide projects_ban" data-ride="carousel">
             <ol class="carousel-indicators">
                <li data-target="#proj" data-slide-to="0" class="active"></li>
                <li data-target="#proj" data-slide-to="1"></li>
                <li data-target="#proj" data-slide-to="2"></li>
             </ol>
             <div class="carousel-inner">
                <div class="carousel-item active">
                   <div class="container-fluid">
                      <div class="carousel-caption relative3">
                         <div class="row">
                            <div class="col-md-4">
                               <div class="project">
                                  <div class="project_img">
                                     <figure><img src="assets/images/project_img.png" alt="#"/></figure>
                                  </div>
                                  <div id="pro_ho" class="project_text">
                                     <h3>Reader will be<br> distracted by the readable</h3>
                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4">
                               <div class="project">
                                  <div class="project_img">
                                     <figure><img src="assets/images/project_img1.png" alt="#"/></figure>
                                  </div>
                                  <div id="pro_ho" class="project_text">
                                     <h3>Reader will be<br> distracted by the readable</h3>
                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4">
                               <div class="project">
                                  <div class="project_img">
                                     <figure><img src="assets/images/project_img2.png" alt="#"/></figure>
                                  </div>
                                  <div id="pro_ho" class="project_text">
                                     <h3>Reader will be<br> distracted by the readable</h3>
                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="carousel-item">
                   <div class="container-fluid">
                      <div class="carousel-caption relative3">
                         <div class="row">
                            <div class="col-md-4">
                               <div class="project">
                                  <div class="project_img">
                                     <figure><img src="assets/images/project_img.png" alt="#"/></figure>
                                  </div>
                                  <div id="pro_ho" class="project_text">
                                     <h3>Reader will be<br> distracted by the readable</h3>
                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4">
                               <div class="project">
                                  <div class="project_img">
                                     <figure><img src="assets/images/project_img2.png" alt="#"/></figure>
                                  </div>
                                  <div id="pro_ho" class="project_text">
                                     <h3>Reader will be<br> distracted by the readable</h3>
                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4">
                               <div class="project">
                                  <div class="project_img">
                                     <figure><img src="assets/images/project_img1.png" alt="#"/></figure>
                                  </div>
                                  <div id="pro_ho" class="project_text">
                                     <h3>Reader will be<br> distracted by the readable</h3>
                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="carousel-item">
                   <div class="container-fluid">
                      <div class="carousel-caption relative3">
                         <div class="row">
                            <div class="col-md-4">
                               <div class="project">
                                  <div class="project_img">
                                     <figure><img src="assets/images/project_img2.png" alt="#"/></figure>
                                  </div>
                                  <div id="pro_ho" class="project_text">
                                     <h3>Reader will be<br> distracted by the readable</h3>
                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4">
                               <div class="project">
                                  <div class="project_img">
                                     <figure><img src="assets/images/project_img.png" alt="#"/></figure>
                                  </div>
                                  <div id="pro_ho" class="project_text">
                                     <h3>Reader will be<br> distracted by the readable</h3>
                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4">
                               <div class="project">
                                  <div class="project_img">
                                     <figure><img src="assets/images/project_img1.png" alt="#"/></figure>
                                  </div>
                                  <div id="pro_ho" class="project_text">
                                     <h3>Reader will be<br> distracted by the readable</h3>
                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <a class="carousel-control-prev" href="#proj" role="button" data-slide="prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#proj" role="button" data-slide="next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
                </a>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- end projects -->
<!-- choose -->
<div class="choose">
 <div class="container">
    <div class="row">
       <div class="col-lg-6 col-md-7 ">
          <div class="titlepage">
             <h2>Why Choose Us</h2>
             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
             <div class="award">
                <div id="awa_ho" class="award_icon text_align_center">
                   <i><img src="assets/images/ch1.png" alt="#"/>
                   </i>
                   <strong>client satisfaction</strong>
                </div>
                <div id="awa_ho" class="award_icon text_align_center">
                   <i><img src="assets/images/ch2.png" alt="#"/></i>
                   <strong>award</strong>
                </div>
                <div id="awa_ho" class="award_icon text_align_center">
                   <i><img src="assets/images/ch3.png" alt="#"/></i>
                   <strong>Trustable</strong>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- end choose -->
<!-- staff -->
<div class="staff_main">
 <div class="container_staff">
    <div class="row">
       <div class="col-md-12">
          <div class="titlepage">
             <h2>Our Expert Staff</h2>
             <span>There are many variations of passages of Lorem Ipsum available, but the </span>
          </div>
       </div>
       <div class="col-md-3 col-sm-6">
          <div class="staff">
             <div class="man">
                <i><img src="assets/images/man.png" alt="#"/></i>
             </div>
             <div class="social_icon_main">
                <h4>Available</h4>
                <ul class="social_icon_staff text_align_center  ">
                   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
       <div class="col-md-3 col-sm-6">
          <div class="staff">
             <div class="man">
                <i><img src="assets/images/man.png" alt="#"/></i>
             </div>
             <div class="social_icon_main">
                <h4>Available</h4>
                <ul class="social_icon_staff text_align_center  ">
                   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
       <div class="col-md-3 col-sm-6">
          <div class="staff">
             <div class="man">
                <i><img src="assets/images/man.png" alt="#"/></i>
             </div>
             <div class="social_icon_main">
                <h4>Available</h4>
                <ul class="social_icon_staff text_align_center  ">
                   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
       <div class="col-md-3 col-sm-6">
          <div class="staff">
             <div class="man">
                <i><img src="assets/images/man.png" alt="#"/></i>
             </div>
             <div class="social_icon_main">
                <h4>Available</h4>
                <ul class="social_icon_staff text_align_center  ">
                   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
       <div class="col-md-12">
          <a class="read_more" href="Javascript:void(0)"> See More</a>
       </div>
    </div>
 </div>
</div>
<!-- end staff -->
<!--  contact -->
<div class="contact">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <div class="titlepage">
             <h2>Contact Us</h2>
          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 padding_right0">
          <form id="request" class="main_form">
             <div class="row">
                <div class="col-md-12 ">
                   <input class="contactus" placeholder="Name" type="type" name="Name"> 
                </div>
                <div class="col-md-12">
                   <input class="contactus" placeholder="Phone" type="type" name="Phone">                          
                </div>
                <div class="col-md-12">
                   <input class="contactus" placeholder="Email" type="type" name="Email"> 
                </div>
                <div class="col-md-12">
                   <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                </div>
                <div class="col-md-12">
                   <button class="send_btn">Send</button>
                </div>
             </div>
          </form>
       </div>
       <div class="col-md-6 padding_left0">
          <div class="map_main">
             <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="463" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- end contact -->
<div class="truck">
 <div class="container-fluid">
    <div class="row">
       <div class="col-md-6 jkhgkj">
          <div class="truck_img1">
             <img src="assets/images/truck.png" alt="#"/>
          </div>
       </div>
       <div class="col-md-6">
          <div class="truck_img1">
             <img src="assets/images/jcb.png" alt="#"/>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- clients -->
<div class="clients">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <div class="titlepage">
             <h2>Clients Words</h2>
             <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </span>
          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-md-8 offset-md-2">
          <div class="testimo_ban_bg">
             <div id="testimo" class="carousel slide testimo_ban" data-ride="carousel">
                <ol class="carousel-indicators">
                   <li data-target="#testimo" data-slide-to="0" class="active"></li>
                   <li data-target="#testimo" data-slide-to="1"></li>
                   <li data-target="#testimo" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <div class="container parile0">
                         <div class="carousel-caption relative2">
                            <div class="row d_flex">
                               <div class="col-md-12">
                                  <i><img class="qusright" src="assets/images/t.png" alt="#"/><img src="assets/images/tes.png" alt="#"/><img class="qusleft" src="assets/images/t.png" alt="#"/></i>
                                  <div class="consect">
                                     <span>consectetur</span>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="carousel-item">
                      <div class="container parile0">
                         <div class="carousel-caption relative2">
                            <div class="row d_flex">
                               <div class="col-md-12">
                                  <i><img class="qusright" src="assets/images/t.png" alt="#"/><img src="assets/images/tes.png" alt="#"/><img class="qusleft" src="assets/images/t.png" alt="#"/></i>
                                  <div class="consect">
                                     <span>consectetur</span>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="carousel-item">
                      <div class="container parile0">
                         <div class="carousel-caption relative2">
                            <div class="row d_flex">
                               <div class="col-md-12">
                                  <i><img class="qusright" src="assets/images/t.png" alt="#"/><img src="assets/images/tes.png" alt="#"/><img class="qusleft" src="assets/images/t.png" alt="#"/></i>
                                  <div class="consect">
                                     <span>consectetur</span>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna consectua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                   <span class="sr-only">Previous</span>
                   </a>
                   <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                   <i class="fa fa-arrow-right" aria-hidden="true"></i>
                   <span class="sr-only">Next</span>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- end clients -->
@endsection