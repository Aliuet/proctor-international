
@extends('frontend.layouts.main')
@section('main-container')
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center"">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Desktop Support</h1>
        <h2 >Our experienced IT support team is dedicated to ensuring the smooth functioning of your business operations. From troubleshooting technical issues to providing timely solutions, we've got you covered</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row gy-4">
          <div class="image col-xl-5"></div>
          <div class="col-xl-7">
            <div class="content d-flex flex-column justify-content-center ps-0 ps-xl-4">
              <h3 data-aos="fade-in" data-aos-delay="100">Why Choose Proctor International</h3>
              <!-- <p data-aos="fade-in">
              At Proctor International, we believe in harnessing the power of technology to empower businesses and individuals. As a leading IT solutions provider, we offer a wide range of services to meet your technology needs. From expert desktop support to creative website designing, our team of skilled professionals is dedicated to delivering top-notch solutions tailored to your requirements.
              </p> -->
              <div class="row gy-4 mt-3">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4><a href="#">Expertise and Experience</a></h4>
                  <p>At Proctor International, we have a team of highly skilled and experienced IT professionals and web designers. With years of expertise in the industry, we have successfully delivered numerous projects, catering to a diverse range of clients and industries</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4><a href="#">Customer-Centric Approach</a></h4>
                  <p> Our clients are at the heart of everything we do. We listen closely to their needs, requirements, and challenges to offer tailored solutions that align with their goals. Our customer-centric approach ensures that our clients' satisfaction remains our top priority.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4><a href="#">Innovation and Creativity</a></h4>
                  <p>We thrive on innovation and creativity. Our team stays updated with the latest technological advancements and industry trends to bring cutting-edge solutions to our clients. We infuse creativity into our website designs, ensuring a unique and captivating online presence for our clients.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4><a href="#">Timely Delivery</a></h4>
                  <p> We understand the importance of timely project completion. Our commitment to delivering projects on schedule is unwavering, ensuring that our clients can launch their initiatives without unnecessary delays</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4><a href="#">Collaborative Process</a></h4>
                  <p>We believe in working closely with our clients throughout the project lifecycle. Our collaborative process involves regular communication and feedback, enabling us to fine-tune our solutions to meet the evolving needs of our clients.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4><a href="#">Quality Assurance</a></h4>
                  <p>  We maintain a rigorous quality assurance process to ensure that our deliverables meet the highest standards. Our focus on quality ensures that our clients receive reliable and robust solutions that stand the test of time.</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-in">Services</h2>
                <p data-aos="fade-in">Desktop Support services offer comprehensive technical assistance to individuals or businesses, ensuring smooth operations, resolving issues, and optimizing computer &nbsp&nbsp &nbsp&nbsp &nbsp systems for enhanced productivity. Our expert team provides prompt solutions to hardware and software problems, ensuring a seamless and secure computing experience.</p>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/desktop-support/troubleshooting.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Hardware Troubleshooting</a></h5>
                            <p class="card-text">Diagnosing and resolving hardware-related issues such as malfunctioning components, connectivity problems, or hardware upgrades</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" data-aos="fade-left">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/desktop-support/software-update.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Software Installation and Updates</a></h5>
                            <p class="card-text">Installing, configuring, and updating software applications to ensure they are up-to-date and running smoothly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/desktop-support/operating-system.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Operating System Support</a></h5>
                            <p class="card-text">Assisting users with operating system-related problems, including troubleshooting errors and resolving compatibility issues.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" data-aos="fade-left">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img//desktop-support/virus-removel.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Virus and Malware Removal</a></h5>
                            <p class="card-text"> Identifying and eliminating viruses, malware, and other security threats from desktop systems.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/desktop-support/printer.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Printer and Peripheral Support</a></h5>
                            <p class="card-text">  Setting up and troubleshooting printers, scanners, and other peripherals connected to desktop computers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" data-aos="fade-left">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/desktop-support/user-account.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">User Account Management</a></h5>
                            <p class="card-text"> Creating, modifying, and managing user accounts, permissions, and access rights.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/desktop-support/password.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Password Reset and Account Recovery</a></h5>
                            <p class="card-text"> Helping users with password reset and account recovery processes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" data-aos="fade-left">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/desktop-support/data-recovery.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Data Backup and Restoration</a></h5>
                            <p class="card-text"> Implementing data backup solutions and assisting with data restoration when needed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/desktop-support/end-user.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">End-User Training</a></h5>
                            <p class="card-text"> Providing training and guidance to users on desktop usage, best practices, and IT security measures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" data-aos="fade-left">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/desktop-support/security-update.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">System and Security Updates</a></h5>
                            <p class="card-text"> Ensuring that desktop systems are regularly updated with the latest patches and security updates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Frequently Asked Questions</h2>
          <p data-aos="fade-in">It takes great pains to benefit. His needs result from something that actually drives him away. Let them be what they want. Anyone whom anyone desires. And no one who hinders receives the others. Because he should flee in this office of convenience, which is here</p>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>What is Desktop Support?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Desktop Support is a service that provides technical assistance and troubleshooting for desktop computers and related peripherals to ensure smooth operations and resolve issues.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Why do I need Desktop Support for my business?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Desktop Support is essential for businesses to maintain the productivity of employees, address technical problems efficiently, and minimize downtime.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>What types of technical issues does Desktop Support cover?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Desktop Support covers a wide range of issues, including software problems, hardware malfunctions, network connectivity, and user account management.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>How do I request Desktop Support assistance?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            You can request Desktop Support assistance through our designated helpdesk, phone, or email contact provided on our website.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Is Desktop Support available for both hardware and software issues?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Yes, our Desktop Support team is equipped to handle both hardware and software-related issues efficiently.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>What are the response times for Desktop Support requests?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Our standard response time for Desktop Support requests is typically within [specify response time], depending on the severity of the issue.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>How can I improve the performance of my desktop computer?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Our Desktop Support team can provide tips and recommendations to improve your computer's performance, such as regular updates and maintenance.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->
        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>How can I provide feedback or suggestions for improving Desktop Support services?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            You can provide feedback or suggestions by reaching out to our support team or participating in our customer satisfaction surveys. Your feedback is valuable to us!
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
  <!-- ======= Footer ======= -->
  <!-- End Footer -->

