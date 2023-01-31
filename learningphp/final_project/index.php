
<?php include "./inc/header.php"; ?>

<!-- services start  -->

<section id="services" class="services section-padding divider">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <div class="section-title mb-5">
          <h1 class="fw-bold" data-aos="fade-up">My Services</h1>
          <p data-aos="fade-up">There are many variations of passages of Lorem Ipsum available but the<br> majority have suffered alteration in some form by injected humour</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php 
        $services = $db->select("select * from service");    
      ?>
      <?php if($services->num_rows > 0) { ?>
        <?php while($result = $services->fetch_assoc()){ ?>
        <div class="col-lg-4 col-md-6">
          <div class="card shadow rounded-5 mb-5" data-aos="fade-up">
            <div class="icon mt-5 ms-4 rounded-2 d-flex justify-content-center align-items-center"><i class="<?php echo $result['icon']; ?>"></i></div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $result['heading']; ?></h5>
              <p class="card-text"><?php echo $result['details']; ?></p>
            </div>
          </div>
        </div>
      <?php }}; ?>
    </div>
  </div>
</section>

<!-- services end  -->

<!-- work start  -->

<section id="work" class="work section-padding divider">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <div class="section-title mb-5">
          <h1 class="fw-bold" data-aos="fade-up">My Work</h1>
          <p data-aos="fade-up">There are many variations of passages of Lorem Ipsum available but the<br> majority have suffered alteration in some form by injected humour</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card mb-5 " data-aos="fade-up">
          <div class="img p-4">
            <img src="./img/project-02.jpg" class="card-img-top rounded-4" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Project Heading</h5>
            <a href="#" class="btn btn-outline-info">Detials</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card mb-5 " data-aos="fade-up">
          <div class="img p-4">
            <img src="./img/project-02.jpg" class="card-img-top rounded-4" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Project Heading</h5>
            <a href="#" class="btn btn-outline-info">Detials</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card mb-5 " data-aos="fade-up">
          <div class="img p-4">
            <img src="./img/project-03.jpg" class="card-img-top rounded-4" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Project Heading</h5>
            <a href="#" class="btn btn-outline-info">Detials</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card mb-5 " data-aos="fade-up">
          <div class="img p-4">
            <img src="./img/project-05.jpg" class="card-img-top rounded-4" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Project Heading</h5>
            <a href="#" class="btn btn-outline-info">Detials</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card mb-5 " data-aos="fade-up">
          <div class="img p-4">
            <img src="./img/project-05.jpg" class="card-img-top rounded-4" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Project Heading</h5>
            <a href="#" class="btn btn-outline-info">Detials</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card mb-5 " data-aos="fade-up">
          <div class="img p-4">
            <img src="./img/project-03.jpg" class="card-img-top rounded-4" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Project Heading</h5>
            <a href="#" class="btn btn-outline-info">Detials</a>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>

<!-- work end  -->

<!-- skill start  -->

<section class="skill section-padding divider" id="skill">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <div class="section-title mb-5">
          <h1 class="fw-bold" data-aos="fade-up">My Skills</h1>
          <p data-aos="fade-up">There are many variations of passages of Lorem Ipsum available but the<br> majority have suffered alteration in some form by injected humour</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="range">

          <div class="label d-flex justify-content-between">
            <label for="" class="text-dark">HTML</label>
            <label for="" class="text-dark">90%</label>
          </div>
          <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" data-aos="fade-up"></div>
          </div>

          <div class="label d-flex justify-content-between">
            <label for="" class="text-dark">CSS</label>
            <label for="" class="text-dark">90%</label>
          </div>
          <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" data-aos="fade-up"></div>
          </div>

          <div class="label d-flex justify-content-between">
            <label for="" class="text-dark">JAVASCRIPT</label>
            <label for="" class="text-dark">5%</label>
          </div>
          <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: 5%;" data-aos="fade-up"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- skill end  -->

<!-- testimonial start -->

<section class="testimonials section-padding divider" id="testimonials">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <div class="section-title mb-5">
          <h1 class="fw-bold" data-aos="fade-up">Clients Saying</h1>
          <p data-aos="fade-up">There are many variations of passages of Lorem Ipsum available but the<br> majority have suffered alteration in some form by injected humour</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="card rounded-4" data-aos="fade-up">
          <div class="card-body">
            <p class="text-info">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </p>
            <p class="card-text">Cool design there are many variations of passages of available but the majority alteration</p>
            <div class="card-footer d-flex justify-content-start px-0">

              <div class="card-footer-img">
                <img src="./img/user-02.jpg" class="rounded-4" alt="">
              </div>
              <div class="card-footer-info p-2">
                <h5 class="fw-bold">Jon Doe</h3>
                  <p>UI Designer</p>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="card rounded-4" data-aos="fade-up">
          <div class="card-body">
            <p class="text-info">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </p>
            <p class="card-text">Cool design there are many variations of passages of available but the majority alteration</p>
            <div class="card-footer d-flex justify-content-start px-0">

              <div class="card-footer-img">
                <img src="./img/user-03.jpg" class="rounded-4" alt="">
              </div>
              <div class="card-footer-info p-2">
                <h5 class="fw-bold">Jon Doe</h3>
                  <p>UI Designer</p>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="card rounded-4" data-aos="fade-up">
          <div class="card-body">
            <p class="text-info">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </p>
            <p class="card-text">Cool design there are many variations of passages of available but the majority alteration</p>
            <div class="card-footer d-flex justify-content-start px-0">

              <div class="card-footer-img">
                <img src="./img/user-04.jpg" class="rounded-4" alt="">
              </div>
              <div class="card-footer-info p-2">
                <h5 class="fw-bold">Jon Doe</h3>
                  <p>UI Designer</p>
              </div>

            </div>
          </div>
        </div>
      </div>


    </div>

    <div class="discuss section-padding bg-info text-center mt-5 rounded-5" data-aos="fade-up">
      <h1 class="text-white fw-bold">Have a project? Let's Discuss</h1>
      <p class="text-white">There are many variations of passages of Lorem Ipsum available but the<br> majority have suffered alteration in some form by injected humour</p>
      <a href="#" class="btn btn-outline-info me-3">Get Started</a>
    </div>
  </div>
</section>

<!-- testimonial end -->

<!-- contact start -->

<section class="contact section-padding" id="contact">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <div class="section-title mb-5">
          <h1 class="fw-bold" data-aos="fade-up">Contact Me</h1>
          <p data-aos="fade-up">There are many variations of passages of Lorem Ipsum available but the<br> majority have suffered alteration in some form by injected humour</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="#" class="row g-3">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="Enter Name" data-aos="fade-up">
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" placeholder="Enter Email" data-aos="fade-up">
          </div>
          <div class="form-group col-md-12">
            <input type="text" class="form-control" placeholder="Enter Subject" data-aos="fade-up">
          </div>
          <div class="form-group col-md-12">
            <textarea name="" rows="5" class="form-control" placeholder="Enter Message" data-aos="fade-up"></textarea>
          </div>
          <div class="form-group col-md-12">
            <button type="submit" class="btn btn-outline-info" data-aos="fade-up">Send Message</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>

<!-- contact end -->
<?php include "./inc/footer.php"; ?>