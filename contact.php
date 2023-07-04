<?php $file_name="contact";
include ('templates/header.php') ?>
<div class="ab_pag">
  <div class="ind_nav">
    <?php include('templates/nav.php')?>
  </div>
  <div class="img_proban">
    <img src="./assets/img/ab.jpg" alt="" class="w-100" />
    <h5>Everything with Reach</h5>
  </div>
</div>
<div class="con_act w-90 my-3">
  <div class="d-flex flex-wrap justify-content-center align-items-center">
    <div
      class="col-md-7 px-2 wow zoomIn"
      data-wow-duration="1s"
      data-wow-delay="0.3s"
    >
      <div class="en_form">
        <h6>GET IN TOUCH</h6>
        <h5>Contact us & Reach !!</h5>
        <form action="">
          <div class="d-flex flex-wrap">
            <div class="col-md-12 px-2">
              <div class="tex_spav">
                <div class="d-flex">
                  <label for="name" class="form-label"> Name</label>
                  <p class="text-danger ps-1 mb-0">* (Enter Your Name)</p>
                </div>
                <input type="name" placeholder="Name" class="form-control" />
              </div>
            </div>
            <div class="col-12 px-2">
              <div class="tex_spav">
                <div class="d-flex">
                  <label class="form-label"> Mobile Number</label>
                  <p class="text-danger ps-1 mb-0">* (Enter Your Number)</p>
                </div>

                <input
                  type="number"
                  placeholder="MOB"
                  class="form-control"
                  name="mobile"
                />
              </div>
            </div>
            <div class="col-12 px-2">
              <div class="tex_spav">
                <div class="d-flex">
                  <label for="email" class="form-label"> E-Mail</label>
                  <p class="text-danger ps-1 mb-0">
                    * (Enter Your vaild Email)
                  </p>
                </div>

                <input type="email" placeholder="Email" class="form-control" />
              </div>
            </div>
            <div class="col-md-12 px-2">
              <div class="tex_spav">
                <div class="d-flex">
                  <label for="name" class="form-label"> Message</label>
                  <p class="text-danger ps-1 mb-0">
                    * (Minimum to fill for 20 letter)
                  </p>
                </div>
                <textarea
                  class="form-control"
                  rows="5"
                  id="Message"
                  name="text"
                  placeholder="Message"
                ></textarea>
              </div>
            </div>
            <div class="abt_btn mt-3 px-2">
              <button class="btn_rd">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-5 px-2">
      <div class="map wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.7963182470503!2d80.2068389!3d13.0486331!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52671c0b3a2bb9%3A0x16a14b1deec3ada3!2sNINOS%20IT%20SOLUTION%20PVT.LTD!5e0!3m2!1sen!2sin!4v1656746828024!5m2!1sen!2sin"
          width="100%"
          height="300"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      <div
        class="add_ress d-flex align-items-center wow bounceInUp"
        data-wow-duration="2s"
        data-wow-delay="0.4s"
      >
        <div class="ad_Cirt">
          <i class="fa-solid fa-phone"></i>
        </div>
        <ul class="list-unstyled mb-0">
          <li class="ps-3"><a href="tel:9778455660">9778455660</a></li>
          <li class="ps-3">
            <a href="tel:9778455660">9778455660</a>
          </li>
        </ul>
      </div>
      <div
        class="add_ress d-flex align-items-center wow bounceInUp"
        data-wow-duration="2s"
        data-wow-delay="0.6s"
      >
        <div class="ad_Cirt">
          <i class="fa-solid fa-envelope-open-text"></i>
        </div>
        <ul class="list-unstyled mb-0">
          <li class="ps-3">
            <a href="mailto:demo @gmail.com">demo@gmail.com</a>
          </li>
          <li class="ps-3">
            <a href="mailto:deme@gmail.com">deme@gmail.com</a>
          </li>
        </ul>
      </div>
      <div
        class="add_ress d-flex align-items-center wow bounceInUp"
        data-wow-duration="2s"
        data-wow-delay="0.8s"
      >
        <div class="ad_Cirt">
          <i class="fa-solid fa-map-location-dot"></i>
        </div>
        <ul class="list-unstyled mb-0">
          <li class="ps-3">
            <a href=""
              >3rd Floor, Gulecha Towers, 158 Arcot Road, Vadapalani, Chennai-
              600 026.</a
            >
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php include ('templates/footer.php') ?>
