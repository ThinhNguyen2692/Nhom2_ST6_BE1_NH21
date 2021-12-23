<?php
include "header.php";
?>
<<<<<<< HEAD
<?php include "header.php"; ?>

<body>

	<!-- HEADER -->

	<!-- /HEADER -->

	<!-- NAVIGATION -->

	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<?php
			$getChitietsp = $product->getChitietsp();
			foreach ($getChitietsp as $value) : ?>
=======
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
>>>>>>> 226a8895c2d99b88a70c80c5279277012ca83b16
				<div class="row">
					<?php
						$getChiTietSP = $product->getChitietsp($_GET['id']);
						foreach ($getChiTietSP as $value) { ?>
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="./img/<?php echo $value['image'] ?>" alt="">
							</div>

							
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
					
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $value['name'] ?></h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price"><?php echo number_format($value['price']) ?></h3>
								<span class="product-available">In Stock</span>
							</div>
							<div class="add-to-cart">
							<a href="cart.php?id=<?php echo $value['id'] ?>">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
												 </a>
							</div>

							
							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">Headphones</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p><?php echo $value['description'] ?></p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->
								
							
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>
						<?php 
							$getSanPhamLienQuan = $product->getSanPhamLienQuan($value['manu_id']);
							foreach ($getSanPhamLienQuan as $value2) {?>
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
							<img src="./img/<?php echo $value2['image'] ?>" alt="">
								<div class="product-label">
									
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="product.php?id=<?php echo $value2['id'] ?>"><?php echo $value2['name'] ?></a></h3>
								<h4 class="product-price"><?php echo number_format($value2['price']) ?> VND </del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
							<a href="cart.php?id=<?php echo $value2['id'] ?>">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
												< </a>
							</div>
						</div>
					</div>
					<!-- /product -->
					<?php

					}	
						}
					?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

<?php
include "footer.html"
?>