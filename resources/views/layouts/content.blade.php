@section('blog-detail')
<!-- BLOG DETAIL -->
<section class="project-detail section-padding-half">
     <div class="container">
          <div class="row">

               <div class="col-lg-9 mx-auto col-md-10 col-12 mt-lg-5 text-center" data-aos="fade-up">
                    <h4 class="blog-category text-info">Creative Work</h4>

                    <h1>9 useful things to learn and practice for your digital marketing</h1>

                    <div class="client-info">
                         <div class="d-flex justify-content-center align-items-center mt-3">
                              <img src="images/project/project-detail/male-avatar.png" class="img-fluid" alt="male avatar">

                              <p>Sweet Candy</p>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>


<div class="full-image text-center" data-aos="zoom-in">
     <img src="images/blog/blog-header-image.jpg" class="img-fluid" alt="blog header">
</div>


<!-- BLOG DETAIL -->
<section class="project-detail">
     <div class="container">
          <div class="row">

               <div class="col-lg-9 mx-auto col-md-11 col-12 my-5 pt-3" data-aos="fade-up">

                    <h2 class="mb-3">Etiam quis metus elementum, tempor risus vel, condimentum orci.</h2>

                    <p>Mauris in convallis nunc, non facilisis arcu. Nunc sapien nulla, interdum at diam non, aliquam vestibulum leo. Fusce laoreet malesuada ante, consectetur consequat ante tempor et. Quisque ac risus ligula.</p>

                    <p>Suspendisse bibendum tortor at est placerat auctor. Phasellus tortor est, bibendum eu ex eu, tincidunt efficitur nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                    <ul class="list-detail py-3">
                         <li><span>Quisque at condimentum est. Duis sollicitudin urna id elit pulvinar placerat. Ut ac dui in ex vulputate dictum.</span></li>

                         <li><span>Mauris vitae tellus nisi. Morbi rutrum lacus sit amet volutpat viverra.</span></li>

                         <li><span> Integer maximus sem ut ipsum blandit elementum. Nullam sollicitudin accumsan commodo.</span></li>
                    </ul>

                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel, condimentum orci.</p>

                    <h2 class="mt-5 mb-3">Curabitur tempus vel libero lobortis feugiat</h2>

                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris in convallis nunc, non facilisis arcu. Nunc sapien nulla, interdum at diam non, aliquam vestibulum leo.</p>

                    <blockquote>Phasellus dapibus ex sed dolor blandit, efficitur iaculis ipsum scelerisque. Cras elementum nibh id felis sagittis, sit amet pellentesque ligula porttitor. Fusce laoreet malesuada ante, consectetur consequat ante tempor et. Quisque ac risus ligula.</blockquote>
               </div>
          </div>

          <div class="col-lg-8 mx-auto mb-5 pb-5 col-12" data-aos="fade-up">

               <h3 class="my-3" data-aos="fade-up">Leave a comment</h3>

               <form action="#" method="get" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                    <div class="row">
                         <div class="col-lg-6 col-12">
                              <input type="text" class="form-control" name="name" placeholder="Name">
                         </div>

                         <div class="col-lg-6 col-12">
                              <input type="email" class="form-control" name="email" placeholder="Email">
                         </div>

                         <div class="col-lg-12 col-12">
                              <textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                         </div>

                         <div class="col-lg-5 mx-auto col-7">
                              <button type="submit" class="form-control" id="submit-button" name="submit">Submit Comment</button>
                         </div>
                    </div>
               </form>
          </div>

     </div>

</section>
@endsection

@section('blog')
<!-- BLOG -->
<section class="blog section-padding">
     <div class="container">
          <div class="row">

               <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">

                    <h1 class="mb-4" data-aos="fade-up">Digital Trend Blog</h1>
               </div>

               <div class="col-lg-7 col-md-7 col-12 mb-4">
                    <div class="blog-header" data-aos="fade-up" data-aos-delay="100">
                         <img src="images/blog/blog-header-image.jpg" class="img-fluid" alt="blog header">

                         <div class="blog-header-info">
                              <h4 class="blog-category text-info">Creative</h4>

                              <h3><a href="blog-detail.html">The Key to Creative Work is Knowing When to Walk Away</a></h3>
                         </div>
                    </div>
               </div>

               <div class="col-lg-5 col-md-5 col-12 mb-4">
                    <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                         <img src="images/blog/blog-sidebar-image.jpg" class="img-fluid" alt="blog">

                         <div class="blog-info">
                              <h4 class="blog-category text-danger">Design</h4>

                              <h3><a href="blog-detail.html">Why Truly Accessible Design Benefits Everyone</a></h3>
                         </div>
                    </div>

                    <div class="blog-sidebar py-4 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                         <img src="images/blog/blog-sidebar-image01.jpg" class="img-fluid" alt="blog">

                         <div class="blog-info">
                              <h4 class="blog-category text-success">lifestyle</h4>

                              <h3><a href="blog-detail.html">Be Humble About What You Know</a></h3>
                         </div>
                    </div>

                    <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                         <img src="images/blog/blog-sidebar-image02.jpg" class="img-fluid" alt="blog">

                         <div class="blog-info">
                              <h4 class="blog-category text-primary">Coding</h4>

                              <h3><a href="blog-detail.html">The Mistakes I Made As a Coding Beginner</a></h3>
                         </div>
                    </div>

               </div>

               <div class="col-lg-5 ml-auto mt-5 pt-5 col-md-6 col-12">

                    <img src="images/newsletter.png" data-aos="fade-up" data-aos-delay="100" class="img-fluid" alt="newsletter">
               </div>

               <div class="col-lg-5 mr-auto mt-5 pt-5 col-md-6 col-12 newsletter-form">
                    <h4 data-aos="fade-up" data-aos-delay="200">Email Newsletter</h4>

                    <h2 data-aos="fade-up" data-aos-delay="300">Let’s stay up-to-date. We'll share you all good stuffs.</h2>
                    <form action="#" method="get" enctype="multipart/form-data">
                         <div class="form-group mt-4" data-aos="fade-up" data-aos-delay="400">
                              <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Please enter your email" required>

                              <small id="emailHelp" class="form-text text-muted">We'll NOT share your email address to anyone else.</small>

                         </div>

                         <div class="form-group form-check" data-aos="fade-up" data-aos-delay="500">
                              <input name="monthly" type="checkbox" class="form-check-input" id="monthly">

                              <label class="form-check-label" for="monthly">Please send me a monthly newsletter.</label>
                         </div>

                         <button type="submit" data-aos="fade-up" data-aos-delay="500" class="btn w-100 mt-3">Sign up</button>
                    </form>
               </div>

          </div>
     </div>
</section>
@endsection

@section('contact')
<!-- CONTACT -->
<section class="contact section-padding">
     <div class="container">
          <div class="row">

               <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                    <h1 class="mb-4">Hey there, Let's <strong>talk</strong> about <strong>creative</strong> projects</h1>

                    <p>or email us at <a href="mailto:hello@company.com">hello@company.com</a></p>
                    <p>Please follow our <a rel="nofollow" href="https://templatemo.com/contact">contact page</a> to <strong>setup</strong> the contact form.</p>
               </div>

               <div class="col-lg-8 mx-auto col-md-10 col-12">

                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->

                    <form action="#" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                         <div class="row">
                              <div class="col-lg-6 col-12">
                                   <input type="text" class="form-control" name="name" placeholder="Name">
                              </div>

                              <div class="col-lg-6 col-12">
                                   <input type="email" class="form-control" name="email" placeholder="Email">
                              </div>

                              <div class="col-lg-12 col-12">
                                   <textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                              </div>

                              <div class="col-lg-5 mx-auto col-7">
                                   <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                              </div>
                         </div>

                    </form>
               </div>

          </div>
     </div>
</section>

<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
<div class="google-map" data-aos="zoom-in">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11196.961132529668!2d-43.38581128725845!3d-23.011063013218724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdb695cd967b7%3A0x171cdd035a6a9d84!2sAv.%20L%C3%BAcio%20Costa%20-%20Barra%20da%20Tijuca%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%20Brazil!5e0!3m2!1sen!2sth!4v1568649412152!5m2!1sen!2sth" width="1920" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
@endsection

@section('index')
<!-- HERO -->
<section class="hero hero-bg d-flex justify-content-center align-items-center">
     <div class="container">
          <div class="row">

               <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="hero-text">

                         <h1 class="text-white" data-aos="fade-up">We are ready for your digital marketing</h1>

                         <a href="contact.html" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Let us discuss together!</a>

                         <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +99 080 070 4224</strong>
                    </div>
               </div>

               <div class="col-lg-6 col-12">
                    <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                         <img src="images/working-girl.png" class="img-fluid" alt="working girl">
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- ABOUT -->
<section class="about section-padding pb-0" id="about">
     <div class="container">
          <div class="row">

               <div class="col-lg-7 mx-auto col-md-10 col-12">
                    <div class="about-info">

                         <h2 class="mb-4" data-aos="fade-up">the best <strong>Digital Marketing agency</strong> in Rio de Janeiro</h2>

                         <p class="mb-0" data-aos="fade-up">Total 5 HTML pages are included in this template from TemplateMo website. Please check 2 <a href="blog.html">blog</a> pages, <a href="project-detail.html">project</a> page, and <a href="contact.html">contact</a> page.
                              <br><br>You are <strong>allowed</strong> to use this template for commercial or non-commercial purpose. You are NOT allowed to redistribute the template ZIP file on template collection websites.
                         </p>
                    </div>

                    <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                         <img src="images/office.png" class="img-fluid" alt="office">
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- PROJECT -->
<section class="project section-padding" id="project">
     <div class="container-fluid">
          <div class="row">

               <div class="col-lg-12 col-12">

                    <h2 class="mb-5 text-center" data-aos="fade-up">
                         Please take a look through our
                         <strong>featured Digital Trends</strong>
                    </h2>

                    <div class="owl-carousel owl-theme" id="project-slide">
                         <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                              <img src="images/project/project-image01.jpg" class="img-fluid" alt="project image">

                              <div class="project-info">
                                   <small>Marketing</small>

                                   <h3>
                                        <a href="project-detail.html">
                                             <span>Sweet Go Agency</span>
                                             <i class="fa fa-angle-right project-icon"></i>
                                        </a>
                                   </h3>
                              </div>
                         </div>

                         <div class="item project-wrapper" data-aos="fade-up">
                              <img src="images/project/project-image02.jpg" class="img-fluid" alt="project image">

                              <div class="project-info">
                                   <small>Website</small>

                                   <h3>
                                        <a href="project-detail.html">
                                             <span>Smart Ladies</span>
                                             <i class="fa fa-angle-right project-icon"></i>
                                        </a>
                                   </h3>
                              </div>
                         </div>

                         <div class="item project-wrapper" data-aos="fade-up">
                              <img src="images/project/project-image03.jpg" class="img-fluid" alt="project image">

                              <div class="project-info">
                                   <small>Branding</small>

                                   <h3>
                                        <a href="project-detail.html">
                                             <span>Shoes factory</span>
                                             <i class="fa fa-angle-right project-icon"></i>
                                        </a>
                                   </h3>
                              </div>
                         </div>

                         <div class="item project-wrapper" data-aos="fade-up">
                              <img src="images/project/project-image04.jpg" class="img-fluid" alt="project image">

                              <div class="project-info">
                                   <small>Social Media</small>

                                   <h3>
                                        <a href="project-detail.html">
                                             <span>Race Bicycle</span>
                                             <i class="fa fa-angle-right project-icon"></i>
                                        </a>
                                   </h3>
                              </div>
                         </div>

                         <div class="item project-wrapper" data-aos="fade-up">
                              <img src="images/project/project-image05.jpg" class="img-fluid" alt="project image">

                              <div class="project-info">
                                   <small>Video</small>

                                   <h3>
                                        <a href="project-detail.html">
                                             <span>Ultimate HealthCare</span>
                                             <i class="fa fa-angle-right project-icon"></i>
                                        </a>
                                   </h3>
                              </div>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- TESTIMONIAL -->
<section class="testimonial section-padding">
     <div class="container">
          <div class="row">

               <div class="col-lg-6 col-md-5 col-12">
                    <div class="contact-image" data-aos="fade-up">

                         <img src="images/female-avatar.png" class="img-fluid" alt="website">
                    </div>
               </div>

               <div class="col-lg-6 col-md-7 col-12">
                    <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                    <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo.</h2>

                    <p data-aos="fade-up" data-aos-delay="400">
                         <strong>Mary Zoe</strong>

                         <span class="mx-1">/</span>

                         <small>Digital Agency (CEO)</small>
                    </p>
               </div>

          </div>
     </div>
</section>
@endsection

@section('project-detail')
<!-- PROJECT DETAIL -->
<section class="project-detail section-padding-half">
     <div class="container">
          <div class="row">

               <div class="col-lg-9 mx-auto col-md-10 col-12 mt-lg-5 text-center" data-aos="fade-up">

                    <h4>Digital Marketing Agency</h4>

                    <h1>127+ Duis sollicitudin urna id elit pulvinar placerat</h1>
               </div>

          </div>
     </div>
</section>

<div class="full-image text-center" data-aos="zoom-in">
     <img src="images/project/project-detail/interview-process.jpg" class="img-fluid" alt="interview process">
</div>

<!-- PROJECT DETAIL -->
<section class="project-detail section-padding">
     <div class="container">
          <div class="row">

               <div class="col-lg-6 col-md-6 col-12 mb-5">

                    <img src="images/project/project-detail/personal-website.png" class="img-fluid" alt="personal website" data-aos="fade-up">
               </div>

               <div class="col-lg-5 col-md-6 mr-lg-auto mt-lg-5 col-12" data-aos="fade-up" data-aos-delay="200">

                    <h2>Pellentesque pretium interdum</h2>

                    <p class="mt-3 mb-4">Nunc sapien nulla, interdum at diam non, aliquam vestibulum leo. Fusce laoreet malesuada ante, consectetur consequat.</p>

                    <ul class="list-detail">
                         <li><span>Curabitur commodo a sapien non</span></li>
                         <li><span>Sed facilisis convallis turpis</span></li>
                         <li><span>Quisque placerat augue neque</span></li>
                         <li><span>Nullam fringilla arcu a tortor</span></li>
                    </ul>
               </div>
          </div>

          <div class="col-lg-12 col-12">
               <div class="embed-responsive embed-responsive-16by9 my-5 py-5" data-aos="fade-up">
                    <iframe class="embed-responsive-item" width="800" height="450" src="https://www.youtube.com/embed/myVN26Vx4MU?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
          </div>

          <div class="col-lg-9 mx-auto col-12" data-aos="fade-up">
               <div class="client-info mt-lg-5 py-lg-5">
                    <h3>Curabitur egestas mollis tellus sit amet porttitor. Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel.</h3>

                    <div class="d-flex align-items-center mt-3">
                         <img src="images/project/project-detail/male-avatar.png" class="img-fluid" alt="male avatar">

                         <p>Angelo Sharp, Creative Director</p>
                    </div>
               </div>
          </div>
     </div>
</section>
@endsection