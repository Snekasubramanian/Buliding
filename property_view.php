<?php $file_name="property";
include ('templates/header.php') ?>
<div class="ban_img">
  <div class="ind_nav">
    <?php include('templates/nav.php')?>
  </div>
  <div class="img_proban">
    <img src="./assets/img/im1.jpg" alt="" class="w-100" />
    <h5>Everything with Reach</h5>
  </div>
</div>
<div class="my-3 w-80">
  <div class="col-md-12">
    <div
      class="top_co wow bounceInUp"
      data-wow-duration="1s"
      data-wow-delay="0.6s"
    >
      <h5>OPALINE 1BHK Apartment, Navalur</h5>
      <p>
        The 1BHK Homes at Opaline stand tall in 2 towering blocks, Crystal and
        Diamond. It is here 288 1BHK homes open the doors for you to enjoy fine
        living in style. Zero space wastage in design, aesthetic in style and
        functional in utility, the 1 BHK apartments are ideal for today's
        contemporary lifestyle.
      </p>
    </div>
    <div
      class="pr_vie wow bounceInUp"
      data-wow-duration="1s"
      data-wow-delay="1s"
    >
      <h5>Attributes</h5>
      <table class="table table-striped">
        <tbody>
          <tr>
            <td>Types of Flats</td>
            <td>1 BHK</td>
          </tr>
          <tr>
            <td>No. of Flats</td>
            <td>288</td>
          </tr>
          <tr>
            <td>No. of Blocks</td>
            <td>2</td>
          </tr>
          <tr>
            <td>No. of Floors</td>
            <td>Stilt + 12 Floor</td>
          </tr>
          <tr>
            <td>Apartment Range</td>
            <td>587 - 601 sq.ft</td>
          </tr>
        </tbody>
      </table>
      <div class="cont_pr">
        <p>
          <i class="fa-solid fa-building pe-2"></i>Over 1800+ happy families
        </p>
        <p>
          <i class="fa-solid fa-building pe-2"></i>Homes that offer excellent
          value for money
        </p>
        <p>
          <i class="fa-solid fa-building pe-2"></i>Close Proximity to workspace,
          entertainment & university
        </p>
      </div>
    </div>

    <div
      class="map_vie wow zoomIn"
      data-wow-duration="1s"
      data-wow-delay="0.3s"
    >
      <h5>Location Map</h5>
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
      class="ami_ties mt-3 wow bounceInLeft"
      data-wow-duration="2s"
      data-wow-delay="0.8s"
    >
      <h5>Aminities</h5>
      <button class="accordion">Section 1</button>
      <div class="panel">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>

      <button class="accordion">Section 2</button>
      <div class="panel">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>

      <button class="accordion">Section 3</button>
      <div class="panel">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>
  </div>
</div>

<div
  class="en_qui my-3 wow zoomIn"
  data-wow-duration="1s"
  data-wow-delay="0.8s"
>
  <div class="en_img">
    <h5>Enquiry Form</h5>
    <form action="">
      <div class="row w-90">
        <div class="mt-2 col-md-6">
          <label for="name">Name</label>
          <input type="name" class="form-control" placeholder="Name" />
        </div>
        <div class="mt-2 col-md-6">
          <label for="name">Email</label>
          <input type="emai" class="form-control" placeholder="Email" />
        </div>

        <div class="mt-2 col-md-12">
          <label for="number">Number</label>
          <input type="number" class="form-control" placeholder="Mobile No" />
        </div>
        <div class="mt-2 col-md-12">
          <label for="">Message</label>
          <textarea
            name="type"
            id=""
            cols="30"
            rows="5"
            placeholder="Message"
            class="form-control"
          ></textarea>
        </div>
        <div class="abt_btn mt-3 px-2">
          <button class="btn_rd">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php include ('templates/footer.php') ?>
