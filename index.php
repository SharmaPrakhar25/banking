<?php include('header.php'); ?>
<style>
/*-------- don't use this csss remove this ----------------------*/
.margin { margin-top:50px; }
/*-------- don't use this csss remove this ----------------------*/
.section {

  padding-top: 40px;

  padding-bottom: 45px;

}
.dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover
{
    color:black;
}
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}


svg {
  display: block;
  overflow: visible;
}

.slider-container {
  position: relative;
  height: 100%;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  cursor: all-scroll;
}

.slider-control {
  z-index: 2;
  position: absolute;
  top: 0;
  width: 12%;
  height: 100%;
  -webkit-transition: opacity 0.3s;
  transition: opacity 0.3s;
  will-change: opacity;
  opacity: 0;
}
.slider-control.inactive:hover {
  cursor: auto;
}
.slider-control:not(.inactive):hover {
  opacity: 1;
  cursor: pointer;
}
.slider-control.left {
  left: 0;
  background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.18) 0%, rgba(0, 0, 0, 0) 100%);
  background: linear-gradient(to right, rgba(0, 0, 0, 0.18) 0%, rgba(0, 0, 0, 0) 100%);
}
.slider-control.right {
  right: 0;
  background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.18) 100%);
  background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.18) 100%);
}

.slider-pagi {
  position: absolute;
  z-index: 3;
  left: 50%;
  bottom: 2rem;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  font-size: 0;
  list-style-type: none;
}
.slider-pagi__elem {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 2rem;
  height: 2rem;
  margin: 0 0.5rem;
  border-radius: 50%;
  border: 2px solid #fff;
  cursor: pointer;
}
.slider-pagi__elem:before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  width: 1.2rem;
  height: 1.2rem;
  background: #fff;
  border-radius: 50%;
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
}
.slider-pagi__elem.active:before, .slider-pagi__elem:hover:before {
  -webkit-transform: translate(-50%, -50%) scale(1);
          transform: translate(-50%, -50%) scale(1);
}

.slider {
  z-index: 1;
  position: relative;
  height: 100%;
}
.slider.animating {
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  will-change: transform;
}
.slider.animating .slide__bg {
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  will-change: transform;
}

.slide {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.slide.active .slide__overlay,
.slide.active .slide__text {
  opacity: 1;
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.slide__bg {
  position: absolute;
  top: 0;
  left: -50%;
  width: 100%;
  height: 100%;
  background-size: cover;
  will-change: transform;
}
.slide:nth-child(1) {
  left: 0;
}
.slide:nth-child(1) .slide__bg {
  left: 0;
  background-image: url("images/bg.jpg");
}
.slide:nth-child(1) .slide__overlay-path {
  fill: #4b5a45;
}
@media (max-width: 991px) {
  .slide:nth-child(1) .slide__text {
    background-color: rgba(233, 156, 126, 0.8);
  }
}
.slide:nth-child(2) {
  left: 100%;
}
.slide:nth-child(2) .slide__bg {
  left: -50%;
  background-image: url("images/bg.jpg");
}
.slide:nth-child(2) .slide__overlay-path {
  fill: #4b5a45;
}
@media (max-width: 991px) {
  .slide:nth-child(2) .slide__text {
    background-color: rgba(225, 204, 174, 0.8);
  }
}
.slide:nth-child(3) {
  left: 200%;
}
.slide:nth-child(3) .slide__bg {
  left: -100%;
  background-image: url("images/bg.jpg");
}
.slide:nth-child(3) .slide__overlay-path {
  fill: #4b5a45;
}
@media (max-width: 991px) {
  .slide:nth-child(3) .slide__text {
    background-color: rgba(173, 197, 205, 0.8);
  }
}
.slide:nth-child(4) {
  left: 300%;
}
.slide:nth-child(4) .slide__bg {
  left: -150%;
  background-image: url("images/bg.jpg");
}
.slide:nth-child(4) .slide__overlay-path {
  fill: #4b5a45;
}
@media (max-width: 991px) {
  .slide:nth-child(4) .slide__text {
    background-color: rgba(203, 198, 195, 0.8);
  }
}
.slide__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.slide__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 100%;
  min-height: 810px;
  -webkit-transition: opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
  transition: opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
  transition: transform 0.5s 0.5s, opacity 0.2s 0.5s;
  transition: transform 0.5s 0.5s, opacity 0.2s 0.5s, -webkit-transform 0.5s 0.5s;
  will-change: transform, opacity;
  -webkit-transform: translate3d(-20%, 0, 0);
          transform: translate3d(-20%, 0, 0);
  opacity: 0;
}
@media (max-width: 991px) {
  .slide__overlay {
    display: none;
  }
}
.slide__overlay path {
  opacity: 0.8;
}
.slide__text {
  position: absolute;
  width: 25%;
  bottom: 15%;
  left: 12%;
  color: #fff;
  -webkit-transition: opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  transition: opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  transition: transform 0.5s 0.8s, opacity 0.5s 0.8s;
  transition: transform 0.5s 0.8s, opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  will-change: transform, opacity;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  opacity: 0;
}
a.slide__text-link
{
    color:#5d9cec;
}

a.slide__text-link:hover { text-decoration:none; color:#FFF;}

@media (max-width: 991px) {
  .slide__text {
    left: 0;
    bottom: 0;
    width: 100%;
    height: 20rem;
    text-align: center;
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
    -webkit-transition: opacity 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
    transition: opacity 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
    transition: transform 0.5s 0.5s, opacity 0.5s 0.5s;
    transition: transform 0.5s 0.5s, opacity 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
    padding: 0 1rem;
  }
}
.slide__text-heading {
  font-family: "Polar", Helvetica, Arial, sans-serif;
  font-size: 5rem;
  margin-bottom: 2rem;
}
@media (max-width: 991px) {
  .slide__text-heading {
    line-height: 20rem;
    font-size: 3.5rem;
  }
}
.slide__text-desc {
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-size: 1.8rem;
  margin-bottom: 1.5rem;
}
@media (max-width: 991px) {
  .slide__text-desc {
    display: none;
  }
}
.slide__text-link {
  z-index: 5;
  display: inline-block;
  position: relative;
  padding: 0.5rem;
  cursor: pointer;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-size: 2.3rem;
  -webkit-perspective: 1000px;
          perspective: 1000px;
}
@media (max-width: 991px) {
  .slide__text-link {
    display: none;
  }
}
.slide__text-link:before {
  z-index: -1;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #5d9cec;
  -webkit-transform-origin: 50% 100%;
          transform-origin: 50% 100%;
  -webkit-transform: rotateX(-85deg);
          transform: rotateX(-85deg);
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
  will-change: transform;
}
.slide__text-link:hover:before {
  -webkit-transform: rotateX(0);
          transform: rotateX(0);
}
</style>
<style>
.home
{
    height:600px;
}

	/* Conatct start */

        .header-title
        {
          text-align: center;
          color:#5d9cec;
        }

        #tip 
        {
            display:none;  
        }

        .fadeIn
        {
          animation-duration: 3s;
        }

        .form-control
        {
        	border-radius:0px;
        	border:1px solid #EDEDED;
        }

        .form-control:focus
        {
        	border:1px solid #5d9cec;
        }

        .textarea-contact
        {
        	resize:none; 
        }

        .btn-send
        {
        	border-radius: 0px;
        	border:1px solid #5d9cec;
        	background:#5d9cec;
        	color:#fff; 
        }

        .btn-send:hover
        {
        	border:1px solid #5d9cec;
        	background:#fff;
        	color:#5d9cec;
        	transition:background 0.5s;   
        }

        .second-portion
        {
        	margin-top:50px; 
        }

		        @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
		@import "http://fonts.googleapis.com/css?family=Roboto:400,500";

		.box > .icon { text-align: center; position: relative; }
		.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #5d9cec; vertical-align: middle; }
		.box > .icon:hover > .image { background: #333; }
		.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
		.box > .icon:hover > .image > i { color: white !important; }
		.box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; min-height:163px;}
		.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
		.box > .icon > .info > h3.title { font-family: "Robot",sans-serif !important; font-size: 16px; color: #222; font-weight: 700;margin-top:14px; }
		.box > .icon > .info > p { font-family: "Robot",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
		.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
		.box > .icon > .info > .more a { font-family: "Robot",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
		.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
		.box .space { height: 30px; }

		@media only screen and (max-width: 768px)
		{
			.contact-form
			{
				margin-top:25px; 
			}

			.btn-send
			{
				width: 100%;
				padding:10px; 
			}

			.second-portion
			{
				margin-top:25px; 
			}
		}
</style>
        <!-- HOME -->
        <section class="home" id="home">
       <div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
    <div class="slide slide-0 active">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Lorem ipsum</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a href="http://hkmbhutto.wix.com/abdulrasheed"
          class="slide__text-link">Lorem ipsum</a>
        </div>
      </div>
    </div>
    <div class="slide slide-1 ">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Lorem ipsum</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a href="http://hkmbhutto.wix.com/abdulrasheed" 
          class="slide__text-link">Lorem ipsum</a>
        </div>
      </div>
    </div>
    <div class="slide slide-2">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Lorem ipsum</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a href="http://hkmbhutto.wix.com/abdulrasheed"
          class="slide__text-link">Lorem ipsum</a>
        </div>
      </div>
    </div>
    <div class="slide slide-3">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Lorem ipsum</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a href="http://hkmbhutto.wix.com/abdulrasheed"
          class="slide__text-link">Lorem ipsum</a>
        </div>
      </div>
    </div>
  </div>
</div>
        </section>

<!-- END HOME -->

 <!-- Features -->

        <section class="section js-section" id="features">

            <div class="container">


    
                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>

                        <p class="text-muted sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>

                </div> <!-- end row -->



                <div class="row">

                    <div class="col-sm-4">

                        <div class="features-box">

                            <i class="fa fa-diamond"></i>

                            <h4>Lorem ipsum</h4>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        </div>

                    </div>



                    <div class="col-sm-4">

                        <div class="features-box">

                            <i class="fa fa-bicycle"></i>

                            <h4>Lorem ipsum</h4>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        </div>

                    </div>



                    <div class="col-sm-4">

                        <div class="features-box">

                            <i class="fa fa-signal"></i>

                            <h4>Lorem ipsum</h4>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        </div>

                    </div>



                </div> <!-- end row -->



            </div> <!-- end container -->

        </section>

        <!-- end Features -->

        <!-- Features Alt -->

        <section class="section p-t-0">

            <div class="container">



                <div class="row">

                    <div class="col-sm-5">

                        <div class="feat-description m-t-20">

                            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>



                            <a href="" class="btn btn-custom">Learn More</a>

                        </div>

                    </div>



                    <div class="col-sm-6 col-sm-offset-1">

                        <img src="http://dev.hawkscode.com.au/adam-and-company/images/mac_1.png" alt="img" class="img-responsive m-t-20">

                    </div>



                </div><!-- end row -->



            </div> <!-- end container -->

        </section>

        <!-- end features alt -->





        <!-- Features Alt -->

        <section class="section">

            <div class="container">



                <div class="row">

                    <div class="col-sm-6">

                        <img src="http://dev.hawkscode.com.au/adam-and-company/images/mac_2.png" alt="img" class="img-responsive">

                    </div>



                    <div class="col-sm-5 col-sm-offset-1">

                        <div class="feat-description">

                            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>



                            <a href="" class="btn btn-custom">Learn More</a>

                        </div>

                    </div>



                </div><!-- end row -->



            </div> <!-- end container -->

        </section>

        <!-- end features alt -->





        <!-- Features Alt -->

        <!--<section class="section">

            <div class="container">



                <div class="row">

                    <div class="col-sm-5">

                        <div class="feat-description">

                            <h4>Praesent et viverra massa non varius magna eget nibh vitae velit posuere efficitur.</h4>

                            <p class="text-muted">Ubold is a fully featured premium admin template built on top of awesome Bootstrap 3.3.7, modern web technology HTML5, CSS3 and jQuery. It has many ready to use hand crafted components. The theme is fully responsive and easy to customize. The code is super easy to understand and gives power to any developer to turn this theme into real web application. </p>



                            <a href="" class="btn btn-custom">Learn More</a>

                        </div>

                    </div>



                    <div class="col-sm-6 col-sm-offset-1">

                        <img src="images/mac_3.png" alt="img" class="img-responsive">

                    </div>



                </div><!-- end row -->



            <!--</div> <!-- end container -->

        <!--</section>-->

        <!-- end features alt -->





        <!-- Testimonials section -->

        <section class="section bg-img-1">

            <div class="bg-overlay"></div>

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <div class="owl-carousel text-center">

                            <div class="item">

                                <div class="testimonial-box">

                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing.</h4>

                                    <img src="http://dev.hawkscode.com.au/adam-and-company/images/user.jpg" class="testi-user img-circle" alt="testimonials-user">

                                    <p>Lorem ipsum</p>

                                </div>

                            </div>

                            <div class="item">

                                <div class="testimonial-box">

                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing.</h4>

                                    <img src="http://dev.hawkscode.com.au/adam-and-company/images/user2.jpg" class="testi-user img-circle" alt="testimonials-user">

                                    <p>Lorem ipsum</p>

                                </div>

                            </div>

                            <div class="item">

                                <div class="testimonial-box">

                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing.</h4>

                                    <img src="http://dev.hawkscode.com.au/adam-and-company/images/user3.jpg" class="testi-user img-circle" alt="testimonials-user">

                                    <p>Lorem ipsum</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<section id="contact" class="js-section">
 <div class="container second-portion">
<div class="row">
    <h1 class="header-title"> Contact </h1>
    <hr>
    <div class="col-sm-12" id="parent">
    	<div class="col-sm-6">
     <iframe width="100%" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.7691635627016!2d144.07480561522192!3d-37.842289579747174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad3ff8cd0af02e5%3A0x95ab9f9165611b33!2sHawksCode+Softwares+Pty+Ltd!5e0!3m2!1sen!2sin!4v1518175912996" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    	<div class="col-sm-6">
    		<form action="contact.php" class="contact-form" method="post">
	
		        <div class="form-group">
		          <input type="text" class="form-control" id="name" name="contact_name" placeholder="Name" required="">
		        </div>
		    
		    
		        <div class="form-group form_left">
		          <input type="email" class="form-control" id="email" name="contact_email" placeholder="Email" required="">
		        </div>
		    
		      <div class="form-group">
		           <input type="text" class="form-control" id="phone" name="contact_mobile" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
		      </div>
		      <div class="form-group">
		      <textarea class="form-control textarea-contact" rows="5" id="comment" name="message" placeholder="Type Your Message/Feedback here..." required=""></textarea>
		      <br>
	      	  <button name="submit" class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
		      </div>
     		</form>
    	</div>
    </div>
  </div>

  <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">MAIL & WEBSITE</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp sales@hawkscode.com.au
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hawkscode.com.au
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CONTACT</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp XXXXX 
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">ADDRESS</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp   HawksCode Softwares Pty. Ltd
							 1, Mercer Street, Meredith, VIC - 3333 ( Australia )
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
		
		<!--My Portfolio  dont Copy this -->
	    
	</div>
      </div>
    </section>

        <!-- End Testimonials section -->





        <!-- PRICING -->

        <!--<section class="section" id="pricing">

            <div class="container">



                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3 class="title">Pricing</h3>

                        <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's <br> designed for describing your app, agency or business.</p>

                    </div>

                </div>--> <!-- end row -->





                <!--<div class="row">

                    <div class="col-lg-10 col-lg-offset-1">

                        <div class="row">



                            <!--Pricing Column-->

                            <!--<article class="pricing-column col-lg-4 col-md-4">

                                <div class="inner-box">

                                    <div class="plan-header text-center">

                                        <h3 class="plan-title">Ragular</h3>

                                        <h2 class="plan-price">$24</h2>

                                        <div class="plan-duration">Per License</div>

                                    </div>

                                    <ul class="plan-stats list-unstyled">

                                        <li> <i class="pe-7s-server"></i>Number of end products <b>1</b></li>

                                        <li> <i class="pe-7s-graph"></i>Customer support</li>

                                        <li> <i class="pe-7s-mail-open"></i>Free Updates</li>

                                        <li> <i class="pe-7s-tools"></i>24x7 Support</li>

                                    </ul>



                                    <div class="text-center">

                                        <a href="#" class="btn btn-sm btn-custom">Purchase Now</a>

                                    </div>

                                </div>

                            </article>-->





                            <!--Pricing Column-->

                            <!--<article class="pricing-column col-lg-4 col-md-4">

                                <div class="inner-box active">

                                    <div class="plan-header text-center">

                                        <h3 class="plan-title">Multiple</h3>

                                        <h2 class="plan-price">$120</h2>

                                        <div class="plan-duration">Per License</div>

                                    </div>

                                    <ul class="plan-stats list-unstyled">

                                        <li> <i class="pe-7s-server"></i>Number of end products <b>1</b></li>

                                        <li> <i class="pe-7s-graph"></i>Customer support</li>

                                        <li> <i class="pe-7s-mail-open"></i>Free Updates</li>

                                        <li> <i class="pe-7s-tools"></i>24x7 Support</li>

                                    </ul>



                                    <div class="text-center">

                                        <a href="#" class="btn btn-sm btn-custom">Purchase Now</a>

                                    </div>

                                </div>

                            </article>-->





                            <!--Pricing Column-->

                            <!--<article class="pricing-column col-lg-4 col-md-4">

                                <div class="inner-box">

                                    <div class="plan-header text-center">

                                        <h3 class="plan-title">Extended</h3>

                                        <h2 class="plan-price">$999</h2>

                                        <div class="plan-duration">Per License</div>

                                    </div>

                                    <ul class="plan-stats list-unstyled">

                                        <li> <i class="pe-7s-server"></i>Number of end products <b>1</b></li>

                                        <li> <i class="pe-7s-graph"></i>Customer support</li>

                                        <li> <i class="pe-7s-mail-open"></i>Free Updates</li>

                                        <li> <i class="pe-7s-tools"></i>24x7 Support</li>

                                    </ul>



                                    <div class="text-center">

                                        <a href="#" class="btn btn-sm btn-custom">Purchase Now</a>

                                    </div>

                                </div>

                            </article>



                        </div>

                    </div>--><!-- end col -->

                <!--</div>-->

                 <!-- end row -->



            <!--</div> <!-- end container -->

        <!--</section>

        <!-- End Pricing -->





        <!-- Clients -->

        <!--<section class="section p-t-0" id="clients">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3 class="title">Trusted by Thousands</h3>

                        <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's <br/> designed for describing your app, agency or business.</p>

                    </div>

                </div>

                <!-- end row -->



                <!--<div class="row text-center">

                    <div class="col-sm-12">

                        <ul class="list-inline client-list">

                            <li><a href="" title="Microsoft"><img src="images/clients/microsoft.png" alt="clients"></a></li>

                            <li><a href="" title="Google"><img src="images/clients/google.png" alt="clients"></a></li>

                            <li><a href="" title="Instagram"><img src="images/clients/instagram.png" alt="clients"></a></li>

                            <li><a href="" title="Converse"><img src="images/clients/converse.png" alt="clients"></a></li>

                        </ul>

                    </div> <!-- end Col -->



                <!--</div>--><!-- end row -->



            <!--</div>

        </section>-->

        <!--End  Clients -->

<?php include('footer.php'); ?>  
<script>
$('.features').click(function(){
    
 window.scrollTo(0, 300);   
});

$('.contact').click(function(){
    
 window.scrollTo(0, 2000);   
});

</script>

 
 <script>


$(document).ready(function() {
  
  var $slider = $(".slider"),
      $slideBGs = $(".slide__bg"),
      diff = 0,
      curSlide = 0,
      numOfSlides = $(".slide").length-1,
      animating = false,
      animTime = 500,
      autoSlideTimeout,
      autoSlideDelay = 6000,
      $pagination = $(".slider-pagi");
  
  function createBullets() {
    for (var i = 0; i < numOfSlides+1; i++) {
      var $li = $("<li class='slider-pagi__elem'></li>");
      $li.addClass("slider-pagi__elem-"+i).data("page", i);
      if (!i) $li.addClass("active");
      $pagination.append($li);
    }
  };
  
  createBullets();
  
  function manageControls() {
    $(".slider-control").removeClass("inactive");
    if (!curSlide) $(".slider-control.left").addClass("inactive");
    if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
  };
  
  function autoSlide() {
    autoSlideTimeout = setTimeout(function() {
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 0;
      changeSlides();
    }, autoSlideDelay);
  };
  
  autoSlide();
  
  function changeSlides(instant) {
    if (!instant) {
      animating = true;
      manageControls();
      $slider.addClass("animating");
      $slider.css("top");
      $(".slide").removeClass("active");
      $(".slide-"+curSlide).addClass("active");
      setTimeout(function() {
        $slider.removeClass("animating");
        animating = false;
      }, animTime);
    }
    window.clearTimeout(autoSlideTimeout);
    $(".slider-pagi__elem").removeClass("active");
    $(".slider-pagi__elem-"+curSlide).addClass("active");
    $slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
    $slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
    diff = 0;
    autoSlide();
  }

  function navigateLeft() {
    if (animating) return;
    if (curSlide > 0) curSlide--;
    changeSlides();
  }

  function navigateRight() {
    if (animating) return;
    if (curSlide < numOfSlides) curSlide++;
    changeSlides();
  }

  $(document).on("mousedown touchstart", ".slider", function(e) {
    if (animating) return;
    window.clearTimeout(autoSlideTimeout);
    var startX = e.pageX || e.originalEvent.touches[0].pageX,
        winW = $(window).width();
    diff = 0;
    
    $(document).on("mousemove touchmove", function(e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (startX - x) / winW * 70;
      if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
      $slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
      $slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
    });
  });
  
  $(document).on("mouseup touchend", function(e) {
    $(document).off("mousemove touchmove");
    if (animating) return;
    if (!diff) {
      changeSlides(true);
      return;
    }
    if (diff > -8 && diff < 8) {
      changeSlides();
      return;
    }
    if (diff <= -8) {
      navigateLeft();
    }
    if (diff >= 8) {
      navigateRight();
    }
  });
  
  $(document).on("click", ".slider-control", function() {
    if ($(this).hasClass("left")) {
      navigateLeft();
    } else {
      navigateRight();
    }
  });
  
  $(document).on("click", ".slider-pagi__elem", function() {
    curSlide = $(this).data("page");
    changeSlides();
  });
  
});
</script>