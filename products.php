<?php include "header.php"; ?>

	
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-12">
						<!-- store top filter -->
						
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<?php 
							if (isset($_GET['type_id'])):
							
							$type_id = $_GET["type_id"];
							$getProductsByType = $product->getProductsByType($type_id);
						
							//phan trang
							// hiển thị 3 sản phẩm trên 1 trang
							$perPage = 3; 				
							// Lấy số trang trên thanh địa chỉ
							$page = isset($_GET['page'])?$_GET['page']:1; 			
							// Tính tổng số dòng
							$total = count($getProductsByType); 					
							// lấy đường dẫn đến file hiện hành
							$url = $_SERVER['PHP_SELF']."?type_id=".$type_id;
							$get3ProductsByType = $product -> get3ProductsByType($type_id, $page, $perPage);
						
							foreach($get3ProductsByType as $value):
							?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" alt="">
										
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?> VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
									<a href="cart.php?id=<?php echo $value['id'] ?>">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
												 </a>
									</div>
								</div>
							</div>
							<!-- /product -->
							<?php endforeach; ?>
					
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<?php echo $product->paginate($url, $total, $perPage,$page); ?>
							</ul>
						</div>
						<!-- /store bottom filter -->
						<?php endif; ?>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<?php include "footer.html"; ?>
	