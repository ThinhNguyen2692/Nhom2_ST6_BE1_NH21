<?php include "header.php" ?>



<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
			
		

				<!-- aside Widget -->
				<div class="aside">
					
				
				</div>
				<!-- /aside Widget -->

				
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-12">
				<!-- store top filter -->
				<div class="store-filter clearfix">
					<div class="store-sort">
						<label>
							Sort By:
							<select class="input-select">
								<option value="0">Popular</option>
								<option value="1">Position</option>
							</select>
						</label>

						<label>
							Show:
							<select class="input-select">
								<option value="0">20</option>
								<option value="1">50</option>
							</select>
						</label>
					</div>
					<ul class="store-grid">
						<li class="active"><i class="fa fa-th"></i></li>
						<li><a href="#"><i class="fa fa-th-list"></i></a></li>
					</ul>
				</div>
				<!-- /store top filter -->

				<!-- store products -->
				<div class="row">
					<?php
					if (isset($_GET['keyword'])) :
						$keyword = $_GET['keyword'];
						$search = $product->search($keyword);
						// hiển thị 3 sản phẩm trên 1 trang
						$perPage = 3;
						// Lấy số trang trên thanh địa chỉ
						$page = isset($_GET['page']) ? $_GET['page'] : 1;
						// Tính tổng số dòng
						$total = count($search);
						// lấy đường dẫn đến file hiện hành
						$url = $_SERVER['PHP_SELF'] . "?keyword=" . $keyword;
						$search = $product->search3($keyword, $page, $perPage);
						if(count($search) == 0){
							echo "không tìm thấy sản phẩm";
						}else
							foreach ($search as $value) :
						

						
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
									
										<h4 class="product-price"><?php echo number_format($value['price']) ?> VND</del></h4>
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
												< </a>
										</div>
								</div>
							</div>
							<!-- /product -->

							<?php

						endforeach;

						?>

				</div>
			
				<!-- /store products -->

				<!-- store bottom filter -->
				<div class="store-filter clearfix">
					<span class="store-qty">Showing 20-100 products</span>
					<ul class="store-pagination">
						<?php echo $product->paginate($url, $total, $perPage, $page); ?>
					</ul>
				</div>
				<!-- /store bottom filter -->
			<?php endif; ?>
			</div>
			<!-- /store bottom filter -->
			<?php  ?>
		</div>
		<!-- /STORE -->
	</div>
	<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->

<?php include "footer.html" ?>