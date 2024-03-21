						<!-- <?php 
						echo "<pre>";
                         print_r($_REQUEST);
                          echo "</pre>";
						  ?> -->

<div class="hero-wrap hero-bread" style="background-image: url('Assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
		  <form action="" method="post" enctype="multipart/form-data">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
					 
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" name="Name" class="form-control" placeholder="" required>
	                </div>
	              </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State </label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="State" id="" class="form-control">
		                  	<option value="raj">Rajsthan</option>
		                    <option value="guj">Gujrat</option>
		                    <option value="mp">Madhya predesh</option>
		                    <option value="mh">Maharashatra</option>
		                    <option value="kr">Kerala</option>
		                    <option value="pub">Punjab</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" placeholder="House number and street name" name="address">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)" name="app">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="" name="City">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="" name="zip">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="" name="Phone" required>
	                </div>
	              </div>
	             
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<!-- <div class="radio">
										  <label class="mr-3"><input type="radio" name="registration"> Create an Account? </label>
										  <label><input type="radio" name="optradio"> Ship to different address</label>
										</div> -->
									</div>
                </div>
	            </div>
	          <!-- END -->



	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span><?php echo $data['0']->Product_Price; ?></span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>$0.00</span>
		    					</p>
		    					<p class="d-flex">
    						<span>Discount</span>
							<?php 
							
							$percentage=3;

							$subtotal = ($percentage/100)*$data['0']->Product_Price;
							?>
    						<span><?php echo $subtotal ?></span>
    					</p>
		    					<hr>
								<?php
		    					$total = $data['0']->Product_Price + $subtotal; 
						?>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span><?php echo $total ?></span>
    					</p>
								</div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
						  <div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2">Cash On Dilivery</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value="" class="mr-2" required> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
									
										<button type="submit" class="btn btn-primary py-3 px-4" name="pro_submit">Place an order</button>
									</form>
									
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->