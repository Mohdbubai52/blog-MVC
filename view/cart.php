


<div class="hero-wrap hero-bread" style="background-image: url('Assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="home">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Wishlist</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php 
							foreach($data as $products)
							{
								?>
					
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(uploads/<?php echo $data['0']->Product_IMG; ?>)"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $data['0']->Product_Name; ?></h3>
						        	<p><?php echo $data['0']->Product_Details; ?></p>
						        </td>
						        
						        <td class="price"><?php echo $data['0']->Product_Price; ?></td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total"><?php echo $data['0']->Product_Price; ?></td>
						      </tr><!-- END TR-->

						      
							  <?php 
							  		}
									?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			<div class="row justify-content-start">
				<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
			<?php 
							foreach($data as $products)
							{
								// echo "<pre>";
								// print_r($data);
								// echo "</pre>";
								?>
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
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
    				<p class="text-center"><a href="checkout?<?php echo 'Product_ID='.$data['0']->Product_ID; ?>" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
				<?php 
							  		}
									  ?>
			  </div>
			</div>
		</section>

	