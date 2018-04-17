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
                <a class="text-black" href="index.php">หน้าหลัก</a> > <label class="text-blue"> แจ้งโอนเงิน</label>
              </div>

              <div class="page-title ml-lg-0 ml-md-0 ml-3 mb-3 align-sm-center align-md-center">
                <h3 class="text-pink mb-0">
                  แจ้งโอนเงิน
                </h3>
              </div>

              <div class="mb-lg-5 ml-lg-0 ml-md-0  px-md-0 px-3 align-sm-center align-md-center">
                <label>แจ้งโอนเงินโดยการแนบเอกสารโอนเงิน วันที่ เวลาและจำนวนเงิน ได้ที่แบบฟอร์มด้านล่าง</label>
              </div>

              <div class="mb-5 col-lg-8 col-md-10 col-12 px-0 mx-auto">

                  <div class="form-group row mx-0">
                    <label class="mr-md-1 mx-auto col-lg-3 col-md-3 col-11 align-right align-md-right align-sm-center px-0">
                      Username :
                    </label>
                    <div class="ml-md-2 mx-auto col-lg-5 col-md-5 col-8 px-0">
                      <input type="text" class="form-control form-control-sm overide-w-1024" id="" placeholder="">
                    </div>
                    <div class="mt-2 mt-md-0 ml-md-0 mx-auto col-lg-1 col-md-1 col-12 px-0 align-center">
                    </div>
                  </div>


                  <div class="form-group row mx-0">
                    <label class="mr-md-1 mx-auto col-lg-3 col-md-3 col-11 align-right align-md-right align-sm-center px-0">
                      วันที่ :
                    </label>
                    <div class="ml-md-2 mx-auto col-lg-5 col-md-5 col-8 px-0">
                      <input type="text" class="form-control form-control-sm overide-w-1024" id="" placeholder="">
                    </div>
                    <div class="mt-2 mt-md-0 ml-md-0 mx-auto col-lg-1 col-md-1 col-12 px-0 align-center">

                    </div>
                  </div>


                  <div class="form-group row mx-0">
                    <label class="mr-md-1 mx-auto col-lg-3 col-md-3 col-11 align-right align-md-right align-sm-center px-0">
                      เวลา :
                    </label>
                    <div class="ml-md-2 mx-auto col-lg-5 col-md-5 col-8 px-0">
                      <input type="text" class="form-control form-control-sm overide-w-1024" id="" placeholder="">
                    </div>
                    <div class="mt-2 mt-md-0 ml-md-0 mx-auto col-lg-1 col-md-1 col-12 px-0 align-center">

                    </div>
                  </div>


                  <div class="form-group row mx-0">
                    <label class="mr-md-1 mx-auto col-lg-3 col-md-3 col-11 align-right align-md-right align-sm-center px-0">
                      ยอดเงิน :
                    </label>
                    <div class="ml-md-2 mx-auto col-lg-5 col-md-5 col-8 px-0">
                      <input type="text" class="form-control form-control-sm overide-w-1024" id="" placeholder="">
                    </div>
                    <div class="mt-2 mt-md-0 ml-md-0 mx-auto col-lg-1 col-md-1 col-12 px-0 align-center">
                    </div>
                  </div>


                  <div class="form-group row mx-0">
                    <label class="mr-md-1 mx-auto col-lg-3 col-md-3 col-11 align-right align-md-right align-sm-center px-0">
                      หมายเลขบัญชี :
                    </label>
                    <div class="ml-md-2 mx-auto col-lg-5 col-md-5 col-8 px-0">
                      <input type="text" class="form-control form-control-sm overide-w-1024" id="" placeholder="">
                    </div>
                    <div class="mt-2 mt-md-0 ml-md-0 mx-auto col-lg-1 col-md-1 col-12 px-0 align-center">

                    </div>
                  </div>

                  <div class="form-group row mx-0">
                      <label class="mr-md-1 mx-auto col-lg-3 col-md-3 col-11 align-right align-md-right align-sm-center px-0">
                        ธนาคาร :
                      </label>
                      <div class="ml-md-2 mx-auto col-lg-5 col-md-5 col-8 px-0">
                        <input type="text" class="form-control form-control-sm overide-w-1024" id="" placeholder="">
                      </div>
                      <div class="mt-2 mt-md-0  ml-md-0 mx-auto col-lg-1 col-md-1 col-12 px-0 align-center plus-btn">

                      </div>
                  </div>

                  <div class="form-group row mx-0">
                    <label class="mr-md-1 mx-auto col-lg-3 col-md-3 col-11 align-right align-md-right align-sm-center px-0">
                      แบบหลักฐานการโอนเงิน:
                    </label>
                    <div class="ml-md-2 mx-auto col-lg-5 col-md-5 col-8 px-0">

                      <div class="custom-file">
                        <input type="file" class="custom-file-input " id="customFile">
                        <label class="custom-file-label overide-w-1024" for="customFile">Choose file</label>
                      </div>

                    </div>
                    <div class="mt-2 mt-md-0 ml-md-0 mx-auto col-lg-1 col-md-1 col-12 px-0 align-center">
                    </div>
                  </div>

                  <div class="form-group row mx-0 mt-3">
                      <label class="d-none d-md-none d-lg-block mr-md-0 mx-auto col-lg-4 col-md-3 col-11 align-right align-md-right align-sm-center px-0 ml-lg-2">
                      </label>
                      <div class="ml-lg-0 ml-md-2 col-lg-5 col-md-6 col-8 mx-auto mx-md-auto px-0">
                        <button class="mx-auto mx-md-auto mx-lg-0 nav-link login-btn align-center">
                            <i class="fa fa-envelope-o fa-lg p-relative" aria-hidden="true">
                            </i>  <label class=" mb-0"> ส่ง</label>
                        </button>
                      </div>
                      <div class="mt-2 ml-md-5 mx-auto col-lg-1 col-md-5 col-12 px-0 align-center">
                      </div>
                  </div>


          </div>

      </div>

      <div class="col-lg-4 col-10 px-0 mx-auto align-center das-overide-col">
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
