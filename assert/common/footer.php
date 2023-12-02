<div class="container-fluid footer">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5   justify-content-evenly">
    <div class="col mb-3" data-aos="zoom-in"
      data-aos-easing="linear"
      data-aos-duration="1500">
      <div class="text-center">
        <a class="">
          <img src="./assert/images/Logo.png" class="img-fluid" alt="">
        </a>
      </div>
    </div>
    <div class="col mb-3"
      data-aos="zoom-in"
      data-aos-easing="linear"
      data-aos-duration="1500"
      >
      <h5 class="py-3 yellow">PROJECTS</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2">
          <a  class="nav-link   text-white">The Banganga</a>
        </li>
        <li class="nav-item mb-2">
          <a  class="nav-link   text-white">Worli Signages</a>
        </li>
        <li class="nav-item mb-2">
          <a  class="nav-link   text-white">Unesco Signages</a>
        </li>
      </ul>
    </div>
    <div class="col mb-3"
      data-aos="zoom-in"
      data-aos-easing="linear"
      data-aos-duration="1500"
      >
      <h5 class="py-3 yellow">OTHER LINKS</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2">
          <a  class="nav-link   text-white">Blogs</a>
        </li>
        <li class="nav-item mb-2">
          <a  class="nav-link   text-white">Press Coverage</a>
        </li>
        <li class="nav-item mb-2">
          <a  class="nav-link   text-white">About Us</a>
        </li>
        <li class="nav-item mb-2">
          <a  class="nav-link   text-white">Contact Us</a>
        </li>
        
      </ul>
    </div>
    <div class="col mb-3"
      data-aos="zoom-in"
      data-aos-easing="linear"
      data-aos-duration="1500"
      >
      <h5 class="py-3 yellow">FOLLOW US ON</h5>
      <ul class="nav d-flex">
        <li class="nav-item mb-2">
          <a  class="social-border mx-2">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
        </li>
        <li class="nav-item mb-2">
          <a  class="social-border mx-2">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </li>
        <li class="nav-item mb-2">
          <a  class="social-border mx-2">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </li>
        <li class="nav-item mb-2">
          <a  class="social-border mx-2">
            <i class="fa-brands fa-twitter"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>
  <div class="row footer-copyright">
    <div class="col-lg-12">
      <p class="text-white text-center  pt-3" >&copy; The Heritage Projects , All Right Reserved.</p>
    </div>
  </div>
</div>
<!-- click to top  -->
<a onclick="topFunction()" id="myBtn" title="Go to top"><img src="assert/images/top.svg" class="img-fluid w-75" alt="click-to-top"></a>
<!-- click to top  -->
<!--all cdn link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--all cdn link-->
<!-- external js file-->
<script type="text/javascript" src="./assert/js/allJs.js"></script>
<!-- external js file-->
<!--popup Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">MAKE A DONATION</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex">
                <div class="form-floating m-2 w-50 ">
                  <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="fname" required>
                  <label for="floatingInput">First Name</label>
                </div>
                <div class="form-floating m-2 w-50">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="lname" required>
                  <label for="floatingLast Name">Last Name</label>
                </div>
              </div>
              <div class="d-flex">
                <div class="form-floating m-2 w-50 ">
                  <input type="tel" class="form-control" id="floatingInput" placeholder="Mobile No." pattern="[789][0-9]{9}" name="mobile" required>
                  <label for="floatingInput">Mobile No.</label>
                </div>
                <div class="form-floating m-2 w-50">
                  <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email" required>
                  <label for="floatingPassword" required>Email Id</label>
                </div>
              </div>
              <div class="">
                <div class="form-floating m-2">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
                  <label for="floatingTextarea2">Comments</label>
                </div>
              </div>
              <div class="text-center my-5">
                <a class="btn yellow text-white py-3 px-4" onclick="showSweetAlert()"><b>SUBMIT</b></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--popup Modal -->