<div class="nav-menu ">
    <nav id="navbar" class=" navbar navbar-expand-md navbar-dark  px-3 nav_b " >
    <a href="index.php" class="ps-3 ps-md-4 logo_img "><img src="./assets/img/logo.png" alt="" class="logo"></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse justify-content-end min-nav" id="navbarScroll">
          <ul class="navbar-nav navbar-nav-scroll nav_a" >
            
              <li class="nav-item ">
                <a class="nav-link  <?php if ($file_name == "need") { echo "active";
                   } ?>" aria-current="page" href="yournd.php">Your Needs
                
                  </a>
             </li>
             <li class="nav-item ">
                <a class="nav-link nav-link-ltr <?php if ($file_name == "insight") {
                   echo "active";
                   } ?>" href="insight.php">
       Insights
        
                </a>
             </li>  
             <li class="nav-item ">
                <a class="nav-link nav-link-ltr <?php if ($file_name == "property") {
                   echo "active";
                   } ?>" href="property.php">
            Properties
        
                </a>
             </li>
             <li class="nav-item ">
                <a class="nav-link nav-link-ltr <?php if ($file_name == "career") {
                   echo "active";
                   } ?>" href="career.php">
           Careers
                </a>
             </li>
             <li class="nav-item ">
                <a class="nav-link nav-link-ltr <?php if ($file_name == "about") {
                   echo "active";
                   } ?>" href="about.php">About US </a>
             </li> 
             <li class="nav-item ">
                <a class="nav-link nav-link-ltr <?php if ($file_name == "contact") {
                   echo "active";
                   } ?>" href="contact.php">Contact US </a>
             </li>
            
          </ul>
          <!-- <form class="">
            <input class="form-control me-2" type="text" placeholder="Search">
          </form> -->
       </div>
    </nav>
    
 </div>