@extends('front.layouts.app')
@section('section')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

      {{-- Banner --}}
      @include('front.partials.banner')
      
    </section><!-- End Hero -->
    
      <main id="main">
        <!-- ======= About Section ======= -->
        @include('front.partials.about')
        <!-- End About Section -->
    
        <!-- ======= Values Section ======= -->
        @include('front.partials.values')
        <!-- End Values Section -->
    
        <!-- ======= Counts Section ======= -->
        @include('front.partials.counts')
       <!-- End Counts Section -->
    
        <!-- ======= Features Section ======= -->
        @include('front.partials.features')
        <!-- End Features Section -->
    
        <!-- ======= Services Section ======= -->
        @include('front.partials.services')
        <!-- End Services Section -->
    
        <!-- ======= Pricing Section ======= -->
        {{-- @include('front.partials.pricing') --}}
       <!-- End Pricing Section -->
    
        <!-- ======= F.A.Q Section ======= -->
        {{-- @include('front.partials.faq') --}}
        <!-- End F.A.Q Section -->
    
        <!-- ======= Portfolio Section ======= -->
        {{-- <section id="portfolio" class="portfolio">
    
          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Portfolio</h2>
              <p>Check our latest work</p>
            </header>
    
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">App</li>
                  <li data-filter=".filter-card">Card</li>
                  <li data-filter=".filter-web">Web</li>
                </ul>
              </div>
            </div>
    
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 3</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
    
        </section> --}}
        <!-- End Portfolio Section -->
    
        <!-- ======= Testimonials Section ======= -->
        {{-- <section id="testimonials" class="testimonials">
    
          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Testimonials</h2>
              <p>What they are saying about us</p>
            </header>
    
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
              <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
              </div>
              <div class="swiper-pagination"></div>
            </div>
    
          </div>
    
        </section> --}}
        <!-- End Testimonials Section -->
    
        <!-- ======= Team Section ======= -->
        {{-- <section id="team" class="team">
    
          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Team</h2>
              <p>Our hard working team</p>
            </header>
    
            <div class="row gy-4">
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
    
        </section> --}}
        <!-- End Team Section -->
    
        <!-- ======= Clients Section ======= -->
        {{-- <section id="clients" class="clients">
    
          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Our Clients</h2>
              <p>Temporibus omnis officia</p>
            </header>
    
            <div class="clients-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
    
        </section> --}}
        <!-- End Clients Section -->
    
        <!-- ======= Recent Blog Posts Section ======= -->
        {{-- <section id="recent-blog-posts" class="recent-blog-posts">
    
          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Blog</h2>
              <p>Recent posts form our Blog</p>
            </header>
    
            <div class="row">
    
              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">Tue, September 15</span>
                  <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
                  <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">Fri, August 28</span>
                  <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                  <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">Mon, July 11</span>
                  <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                  <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
    
            </div>
    
          </div>
    
        </section> --}}
        <!-- End Recent Blog Posts Section -->
    
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
    
          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Contact</h2>
              <p>Contact Us</p>
            </header>
    
            <div class="row gy-4">
    
              <div class="col-lg-6">
    
                <div class="row gy-4">
                  <div class="col-md-6">
                    <div class="info-box">
                      <i class="bi bi-geo-alt"></i>
                      <h3>Address</h3>
                      <p> 1st floor Bilal building,<br>Kolathara po calicut 673655</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <i class="bi bi-telephone"></i>
                      <h3>Call Us</h3>
                      <p><a href="tel:+919745421461">+91 97454 21461</a><br>
                         <a href="tel:+919846055421">+91 98460 55421</a>
                        </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <i class="bi bi-envelope"></i>
                      <h3>Email Us</h3>
                      <p><a href="mailto:finprocorporatesolutions@gmail.com">finprocorporatesolutions@gmail.com</a></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <i class="bi bi-clock"></i>
                      <h3>Open Hours</h3>
                      <p>Monday - Friday<br>9:00AM - 06:00PM</p>
                    </div>
                  </div>
                </div>
    
              </div>
    
              <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">
    
                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
    
                    <div class="col-md-6 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
    
                    <div class="col-md-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
    
                    <div class="col-md-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                    </div>
    
                    <div class="col-md-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
    
                      <button type="submit">Send Message</button>
                    </div>
    
                  </div>
                </form>
    
              </div>
    
            </div>
    
          </div>
    
        </section>
        <!-- End Contact Section -->
    
      </main><!-- End #main -->  
@endsection