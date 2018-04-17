<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light nav-border">
    <div class="container nav-container">

      <div style="text-align:center;">
        <a class="navbar-brand" href="index.php">
          <div>
          <img class="d-none d-lg-inline" width='100px' height='auto' src="assets/images/logo/logo.jpg" alt="">
          </div>
          <div>
            <h4 class="text-pink mb-0">
              ขายง่ายง่าย
            </h4>
          </div>
          <div>
            <h5 class=" text-grey mb-0">
              Kaiy Ngay Ngay
            </h5>
          </div>
        </a>
      </div>





        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="navbar-collapse flex-column collapse" id="navbarSupportedContent" style="text-align:center;">

            <ul class="navbar-nav ml-auto mb-1">

                <!-- <li class="nav-item">
                    <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
                </li> -->

                <li class="nav-item">
                  <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle logged-in-button" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="pt-0" width='30px' height='auto' src="assets/images/user/101.jpg" alt="">
                    <label>
                      David McCornel
                    </label>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="text-align:center;">
                      <button class="dropdown-item" type="button" onclick="window.location.href='editprofile.php';">Edit Profile</button>
                      <button class="dropdown-item" type="button" onclick="window.location.href='index.php';">Log out</button>
                  </div>
                  </div>
                </li>

                <li>
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart fa-lg p-relative" aria-hidden="true"><span class="bugget">0</span></i></a>
                </li>
            </ul>

            <ul class="navbar-nav flex-row mb-2 justify-content-center ml-auto secondnav">
                <li class="nav-item">

                    <div class="input-group mb-2">
                      <input type="text" class="form-control underline" placeholder="ค้นหาสินค้า" aria-label="">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary underline" type="button"><i class="fa fa-search fa-lg"></i></button>
                      </div>
                    </div>

                </li>
            </ul>

            <ul class="navbar-nav flex-column flex-lg-row flex-md-column mb-2  ml-auto secondnav">
                <li class="nav-item">
                    <a class="text-black hover-pink nav-link " href="index.php">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="text-black hover-pink nav-link " href="productcategories.php">หมวดสินค้า</a>
                </li>
                <li class="nav-item">
                    <a class="text-black hover-pink nav-link " href="allproduct.php">รวมประกาศ</a>
                </li>
                <li class="nav-item">
                    <a class="text-black hover-pink nav-link " href="register.php">สมัครสมาชิก</a>
                </li>
                <li class="nav-item">
                    <a class="text-black hover-pink nav-link " href="payment.php">แจ้งชำระเงิน</a>
                </li>
                <li class="nav-item">
                    <a class="text-black hover-pink nav-link sell-register mx-auto px-0 px-lg-3" href="sell.php">
                        <p class=" mb-0"  style="letter-spacing: 2px;">
                          <i class="fa fa-pencil fa-lg p-relative" aria-hidden="true">
                          </i>
                          ลงประกาศขาย
                        </p>
                    </a>
                </li>
            </ul>

        </div>





    </div>
</nav>
