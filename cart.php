<!doctype html>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body style="background-color:#EEE;">

    <?php include_once('inc/navbar.php'); ?>

	<div class="container nav-container">

        <div class="row row-content mt-4 mb-5 mx-0">
    		<div class="containers">
	       	 	<div class="thumbnail">
	       	 		<div class="row">
		       	 		<div class="col-sm-12">
                  <div class="col-12 px-0 mx-auto ">
                    <div class="mb-3 ml-lg-0 ml-md-0 ml-3">
                      <a class="text-black" href="index.php">หน้าหลัก</a> > <label class="text-blue"> ตะกร้าสินค้า</label>
                    </div>
                  </div>
    							<h3 class="text-pink">ตะกร้าสินค้า</h3>
    						</div>
						<div class="col-12 col-lg-8 table-responsive">
							<table class="table table-light table-bordered">
							<thead>
								<tr>
									<th width="20%"><input type="checkbox" name="checklist" class="cart-check">เลือกทั้งหมด</th>
									<th width="45%">สินค้า</th>
									<th width="12%">ราคาสินค้า</th>
									<th width="5%">ลบ</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" name="checklist" class="cart-check"></td>
									<td>
										<div class="">
											<a href="product/detail/39">
												<img src="assets/images/car/car2.jpg" class="cart-img">
											</a>
										</div>
										รองเท้า
									</td>
									<td>199</td>

									<td><a href=""><i class="fa fa-times" aria-hidden="true" style="color: #d12b27;"></i></a></td>
								</tr>
								<tr>
									<td><input type="checkbox" name="checklist" class="cart-check"></td>
									<td>
										<div class="">
											<a href="product/detail/39">
												<img src="assets/images/car/car2.jpg" class="cart-img">
											</a>
										</div>
										รองเท้า
									</td>
									<td>250</td>

									<td><a href=""><i class="fa fa-times" aria-hidden="true" style="color: #d12b27;"></i></a></td>
								</tr>
								<tr>
									<td><input type="checkbox" name="checklist" class="cart-check"></td>
									<td>
										<div class="">
											<a href="product/detail/39">
												<img src="assets/images/car/car2.jpg" class="cart-img">
											</a>
										</div>
										รองเท้า
									</td>
									<td>150</td>
									<td><a href=""><i class="fa fa-times" aria-hidden="true" style="color: #d12b27;"></i></a></td>
								</tr>
							</tbody>


							</table>
						</div>

						<div class="col-12 col-lg-4">
							<div class="cart-total">
								<div>
									<h4>ติดต่อ</h4>
								</div>
								<hr>
								<div class="form-group input-group">
	                                <input type="radio" name="sup" class="mt-1"> &nbsp;Lorem ipsum dolor sit amet, consectetur
	                            </div>
	                            <div class="form-group input-group">
	                               	<input type="radio" name="sup" class="mt-1"> &nbsp;Lorem ipsum dolor sit amet.
	                            </div>
	                            <div class="form-group input-group">
	                               	<input type="radio" name="sup" class="mt-1"> &nbsp;Lorem ipsum dolor.
	                            </div>
                        	</div>

              <div class="cart-total">
								<div>
									<h3>ราคาสินค้าทั้งหมด</h3>
								</div>

								<hr>
								<div class="row">
                    <div class="col-sm-6">
                        <p>สินค้าทั้งหมด</p>
                    </div>
                    <div class="col-sm-6">
                        <p id="qty_product">1 รายการ</p>
                    </div>

                    <div class="col-sm-6">
                        <p>รวมยอดส่งซื้อสินค้า</p>
                    </div>
                    <div class="col-sm-6">
                        <p id="sum_product" style="font-size: 25px;">450 บาท</p>
                    </div>
                </div>

							</div>
						</div>

<!-- 						<div class="col-sm-4">

						</div> -->

						<div class="col-12 col-md-12 col-10 mx-auto">
						   	<div class="form-group pull-right mx-2">
						   		<a href="orders.php" class=" mx-auto mx-md-auto mx-lg-0 nav-link login-btn align-center">
		                         	<p class=" mb-0">
		                           		ดำเนินการต่อ
		                         	</p>
	                </a>
						   	</div>
						   	<div class="form-group pull-right mx-2">
						   		<a href="productcategories.php"  class=" mx-auto mx-md-auto mx-lg-0 nav-link login-btn align-center">
		                         	<p class=" mb-0">
		                           		เลือกสินค้าต่อ
		                         	</p>
	                </a>
						   	</div>
						</div>
						<!-- <div class="col-sm-12"> -->

						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

    <?php include_once('inc/footer.php'); ?>
    <?php include_once('inc/footer-script.php'); ?>
    </script>


  </body>
</html>
