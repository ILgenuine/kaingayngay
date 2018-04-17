<!doctype html>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body style="background-color:#EEE;">

    <?php include_once('inc/navbar.php'); ?>

<div class="container nav-container">

      <div class="row row-content mt-4 mb-5 mx-0">

        <div class="mx-md-auto col-lg-8 col-md-11 col-12 px-0">

              <div class="mb-3 ml-lg-0 ml-md-0 ml-3">
                <a class="text-black" href="index.php">หน้าหลัก</a> > <label class="text-blue"> เข้าสู่ระบบ</label>
              </div>

              <div class="page-title ml-lg-0 ml-md-0 ml-3 mb-3 align-sm-center align-md-center">
                <h3 class="text-pink mb-0">
                  เข้าสู่ระบบ
                </h3>
              </div>

              <div class="mb-lg-5 ml-lg-0 ml-md-0  px-md-0 px-3 align-sm-center align-md-center">
                <label>โปรดกรอก Username และ รหัสผ่านของท่าน เพื่อเข้าใช้บริการของเรา</label>
              </div>


              <div class="col-lg-8 col-md-10 col-12 px-0 mx-auto d-lg-cblock d-block d-md-block">

                  <div class="form-group row mx-0">
                    <label class="mr-md-1 mx-auto col-lg-4 col-md-2 col-11 align-right align-md-right align-sm-center px-0">
                      Username :
                    </label>
                    <div class="ml-md-2 mx-auto col-lg-5 col-md-5 col-8 px-0">
                      <input type="text" class="form-control form-control-sm overide-w-1024" id="" placeholder="">
                    </div>
                  </div>

                  <div class="form-group row mx-0">
                    <label class="mr-md-1 mx-auto col-lg-4 col-md-2 col-11 align-right align-md-right align-sm-center px-0">
                      Password :
                    </label>
                    <div class="ml-md-2 mx-auto col-lg-5 col-md-5 col-8 px-0">
                      <input type="password" class="form-control form-control-sm overide-w-1024" id="" placeholder="">
                    </div>
                  </div>

                  <div class="form-group row mx-0">
                    <label class="d-none d-md-none d-lg-block mr-md-0 mx-auto col-lg-4 col-md-3 col-11 align-right align-md-right align-sm-center px-0">
                    </label>
                    <div class="ml-lg-3 ml-md-2 col-lg-5 col-md-6 col-8 mx-auto mx-md-auto px-0">
                      <button class="mx-auto mx-md-auto mx-lg-0 nav-link login-btn align-center">
                          <p class=" mb-0">
                            ลงชื่อเข้าใช้
                          </p>
                      </button>
                    </div>
                  </div>

                  <div class="form-group row mx-0">
                    <label class="mr-md-0 mx-auto col-lg-4 col-md-2 d-none d-md-none d-lg-block align-right align-md-right align-sm-center px-0">
                    </label>
                    <div class="ml-md-2 col-lg-5 col-md-12 col-12 mx-auto px-0 mr-0 ">
                      <div class="overide-form align-left align-md-center align-sm-center">
                        <a class="text-darkblue" href='forgetpassword.php'>
                              ลืมรหัสผ่าน
                        </a>
                        |
                        <a class="text-darkblue" href='register.php'>
                              สมัครสมาชิก
                        </a>
                      </div>
                    </div>
                  </div>
             </div>
      </div>



      <div class="col-lg-4 col-10 px-0 mx-auto align-center">
          <div>
            <a href="#">
              <img src="assets/images/sponsor/270x500-demo.jpg" alt="" title="" width="270px" height="500px">
            </a>
          </div>
      </div>

    </div>

</div>


    <?php include_once('inc/footer.php'); ?>
    <?php include_once('inc/footer-script.php'); ?>
    </script>


  </body>
</html>
