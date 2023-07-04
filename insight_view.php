<?php $file_name="insight";
  include ('templates/header.php') ?>
<div class="ab_pag">
  <div class="ind_nav">
    <?php include('templates/nav.php')?>
  </div>
</div>
<div class="img_proban">
  <img src="./assets/img/ab.jpg" alt="" class="w-100" />
  <h5>Everything with Reach</h5>
</div>
<div
  class="d-flex flex-wrap my-3 w-90 align-items-center justify-content-center"
>
  <div class="col-md-4 px-3 mb-3">
    <div class="blg_viw">
      <h4>Recent Post</h4>
      <div
        class="blg_viws d-flex mt-2 wow fadeInLeft"
        data-wow-duration="1s"
        data-wow-delay="0.4s"
      >
        <img src="./assets/img/2.jpg" alt="" />
        <div class="bg_vwi">
          <a href=""><h6>How To Weather Proof Your Roof This Winter?</h6></a>
          <p>April 12,2021</p>
        </div>
      </div>
      <div
        class="blg_viws d-flex mt-2 wow fadeInLeft"
        data-wow-duration="1s"
        data-wow-delay="0.6s"
      >
        <img src="./assets/img/ab3.jpg" alt="" />
        <div class="bg_vwi">
          <a href=""> <h6>How To Weather Proof Your Roof This Winter?</h6></a>
          <p>May 12,2021</p>
        </div>
      </div>
      <div
        class="blg_viws d-flex mt-2 wow fadeInLeft"
        data-wow-duration="1s"
        data-wow-delay="0.8s"
      >
        <img src="./assets/img/career-growth.jpg" alt="" />
        <div class="bg_vwi">
          <a href=""><h6>How To Weather Proof Your Roof This Winter?</h6></a>
          <p>May 12,2021</p>
        </div>
      </div>
    </div>

    <div
      class="en_quotea mt-3 wow bounceInUp"
      data-wow-duration="2s"
      data-wow-delay="0.8s"
    >
      <div class="en_que">
        <div class="en_cir">
          <i class="fa-solid fa-headset fa-3x"></i>
        </div>
        <p>Let’s Make a Call For Your Home painting Designing</p>
        <p><a href="tel:+91 98745 62323">+91 98745 62323</a></p>
        <div class="abt_btn mt-3">
          <button
            class="btn_rd m-auto"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#myModal"
          >
            Get a Enquiry
          </button>
        </div>
      </div>
    </div>
  </div>
  <div
    class="col-md-8 px-3 wow fadeInRight"
    data-wow-duration="2s"
    data-wow-delay="0.8s"
  >
    <div class="blog_View">
      <div class="img_min">
        <img src="./assets/img/2.jpg" alt="" />
      </div>
      <div class="mt-3 d-flex com_blog justify-content-between">
        <div class="d-flex">
          <i class="fa-solid fa-folder-open"></i>
          <p>January 11, 2022</p>
        </div>
        <div class="d-flex">
          <i class="fa-solid fa-calendar-days"></i>
          <p>Advisory Services</p>
        </div>
      </div>
      <h4>Etiam Vel Diam Volutpa Pellentesques</h4>
      <p>
        Each business niche may require a unique functionality of its own. With
        that notion in mind, our team of professional WordPress coders has been
        working day and night to roll out a definitive collection of built-in
        WordPress plugins, that come with each of our WordPress themes…
      </p>
      <p>
        Each business niche may require a unique functionality of its own. With
        that notion in mind, our team of professional WordPress coders has been
        working day and night to roll out a definitive collection of built-in
        WordPress plugins, that come with each of our WordPress themes…
      </p>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" data-bs-dismiss="modal" class="cl_se">
        <i class="fa-solid fa-xmark"></i>
      </button>

      <div class="modal-body">
        <div class="frl_ap">
          <div class="application_for">
            <h5>Enquiry</h5>
            <div class="en_fprm">
              <form action="">
                <div class="mt-3">
                  <label for="name"> Name</label>
                  <input type="name" placeholder="Name" class="form-control" />
                </div>
                <div class="mt-3">
                  <label for="email"> Email</label>
                  <input
                    type="email"
                    placeholder="Email"
                    class="form-control"
                  />
                </div>
                <div class="mt-3">
                  <label> Contact no</label>
                  <input
                    type="email"
                    placeholder="Mobile No"
                    class="form-control"
                  />
                </div>
                <div class="mt-3">
                  <label> Message </label>
                  <textarea
                    name="type"
                    id=""
                    cols="20"
                    rows="5"
                    class="form-control"
                    placeholder="Message"
                  ></textarea>
                </div>

                <div class="abt_btn mt-3 px-2">
                  <button class="btn_rd">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include ('templates/footer.php') ?>
