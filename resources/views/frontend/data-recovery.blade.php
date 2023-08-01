
@extends('frontend.layouts.main')
@section('main-container')
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center"">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Data Backup & Recovery </h1>
        <h2>We provide comprehensive solutions to safeguard your critical data and ensure business continuity in case of any unforeseen events.</h2>
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
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Services</h2>
          <p data-aos="fade-in">we provide comprehensive solutions to safeguard your critical data and ensure business continuity in case of any unforeseen events. Our Data Backup & Recovery services include:</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex" data-aos="fade-right">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/databackup/backup-cpc.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Data Backup Solutions</a></h5>
                  <p class="card-text">Implementing automated and secure backup systems to protect your valuable data.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex" data-aos="fade-left">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/databackup/recovery.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Data Recovery Planning</a></h5>
                  <p class="card-text">Creating customized recovery plans to efficiently retrieve lost or corrupted data.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex" data-aos="fade-right">
              <div class="card">
                <div class="card-img">
                <img src="assets/img/databackup/data-recovery.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Regular Data Backups</a></h5>
                  <p class="card-text">Scheduling regular backups to ensure up-to-date copies of your data are available.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/databackup/disaster-recovery-plan.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Disaster Recovery Services</a></h5>
                <p class="card-text">Swift and systematic recovery in the event of data loss or system failure.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/databackup/data-migration.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Data Migration</a></h5>
                <p class="card-text">Seamless migration of data between systems or cloud platforms.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/databackup/security.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Data Security & Encryption</a></h5>
                <p class="card-text">Implementing measures to secure data during backup and storage.</p>
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
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>What is Data Backup & Recovery?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Data Backup & Recovery is the process of creating secure copies of important data and implementing strategies to retrieve lost or corrupted data in case of unexpected data loss or system failure.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Why is Data Backup important for my business?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Data Backup ensures that critical business information is protected from data loss due to hardware failure, human error, malware attacks, or natural disasters.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>What are the different data backup options available?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            We offer various data backup options, including on-site backups, off-site backups, cloud-based backups, and hybrid backup solutions.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>How often should I perform data backups?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            The frequency of data backups depends on the volume of data changes. Regular backups are recommended, with critical data being backed up more frequently.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>How does Data Recovery work in case of data loss?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            In case of data loss, our Data Recovery process involves accessing backup copies of your data and restoring it to the affected systems.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>What measures do you take to ensure the security of backed-up data?</h4>
          </div>
          <div class="col-lg-7">
            <p>We use encryption and secure storage facilities to protect backed-up data from unauthorized access and maintain data integrity. In case of data loss, our Data Recovery process involves accessing backup copies of your data and restoring it to the affected systems.
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

