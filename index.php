<?php include('header.php') ?>

<!-- Banner start -->
<!-- <section>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="banner-section p-2">
					<div class="banner p-5">
						<div class="row p-5">
							<div class="col-lg-7">
								<div class="banner-content">
									<h5 class="blue">Starting at <b>$XXXX</b></h5>
									<div class="banner-heading">The best Laptop collection 2023</div>
									<h4>Exclusive offer <span class="red">-10%</span> off this week</h4>
									<a href="" class="shop-now-btn btn mt-4">Shop Now <i class="fa-solid fa-arrow-right-long"></i></a>
								</div>
							</div>
							<div class="banner-img">
								<img src="img/banner-1.png" class="img-fluid ms-auto pt-5" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- Banner end -->

<!-- Banner start -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="banner-section mb-0">
					<div class="banner-img">
						<img src="img/banner-1.jpg" class="img-fluid w-100 pt-5" alt="" />
					</div>
					<div class="banner-img">
						<img src="img/banner-1.jpg" class="img-fluid w-100 pt-5" alt="" />
					</div>
					<div class="banner-img">
						<img src="img/banner-1.jpg" class="img-fluid w-100 pt-5" alt="" />
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<div class="col-lg-12">
						<div class="filter-box d-flex justify-content-between align-items-center mt-5">
							<div>
								<h6>LAPTOPS</h6>
								<a href="" class="shop-now-link">Shop now <i class="fa-solid fa-angles-right"></i></a>
							</div>
							<div>
								<img src="img/macbook.png" alt="" srcset="">
							</div>
						</div>
						<div class="filter-box d-flex justify-content-between align-items-center mt-4">
							<div>
								<h6>PRINTERS</h6>
								<a href="" class="shop-now-link">Shop now <i class="fa-solid fa-angles-right"></i></a>
							</div>
							<div>
								<img src="img/printer.png" alt="" srcset="">
							</div>
						</div>
						<div class="filter-box d-flex justify-content-between align-items-center mt-4">
							<div>
								<h6>PC</h6>
								<a href="" class="shop-now-link">Shop now <i class="fa-solid fa-angles-right"></i></a>
							</div>
							<div>
								<img src="img/imac.png" alt="" srcset="">
							</div>
						</div>
						<div class="filter-box d-flex justify-content-between align-items-center mt-4">
							<div>
								<h6>COMPUTER PERIPHERALS</h6>
								<a href="" class="shop-now-link">Shop now <i class="fa-solid fa-angles-right"></i></a>
							</div>
							<div>
								<img src="img/computer.png" alt="" srcset="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner end -->

<!-- Best Selling Products start -->
<section class="content best-sell">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h4>Best Selling Products</h4>
				<a class='slick-prev'><img src="img/svg/prev.svg" alt=""></a>
				<a class='slick-next'><img src="img/svg/next.svg" alt=""></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="best-deal-product">
					<?php for($i = 0; $i <= 6; $i++) { ?>
					<div class="product-box text-center">
						<img src="img/laptop.jpg" class="mx-auto mb-5" alt="">
						<h6>MacBook Air 13.3" Laptop - Apple M1 chip - 8GB Memory...</h6>
						<p>$ 1,499.00 <del class="old-price">$ 1,499.00</del> </p>
						<p><span class="deal">In Stock</span></p>
						<a href="" class="btn add-to-cart"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Best Selling Products end -->

<!-- Banner and product start -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="small-banner">
					<img src="img/banner-2.jpg" alt="">
				</div>
				<div class="small-banner">
					<img src="img/banner-3.jpg" alt="">
				</div>
				<div class="small-banner">
					<img src="img/banner-4.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="row">
					<?php for($i = 0; $i <= 5; $i++) { ?>
						<div class="col-lg-4 mt-4">
							<div class="product-box text-center">
								<img src="img/laptop.jpg" class="mx-auto mb-5" alt="">
								<h6>MacBook Air 13.3" Laptop - Apple M1 chip - 8GB Memory...</h6>
								<p>$ 1,499.00 <del class="old-price">$ 1,499.00</del> </p>
								<p><span class="deal">In Stock</span></p>
								<a href="" class="btn add-to-cart"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner and product end -->

<!-- Site Information start -->
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="info-box">
					<div class="info-img">
						<img src="img/svg/truck.svg" alt="" srcset="">
					</div>
					<div class="info-text">
						<h6 class="mb-0">Free Delivery</h6>
						<p><span class="info-text">Lorem Ipsum Dolor Sit Amet</span></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="info-box">
					<div class="info-img">
						<img src="img/svg/dollar.svg" alt="" srcset="">
					</div>
					<div class="info-text">
						<h6 class="mb-0">Return & Refund</h6>
						<p><span class="info-text">Lorem Ipsum Dolor Sit Amet</span></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="info-box">
					<div class="info-img">
						<img src="img/svg/discount.svg" alt="" srcset="">
					</div>
					<div class="info-text">
						<h6 class="mb-0">Discounts</h6>
						<p><span class="info-text">Lorem Ipsum Dolor Sit Amet</span></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="info-box">
					<div class="info-img">
						<img src="img/svg/headset.svg" alt="" srcset="">
					</div>
					<div class="info-text">
						<h6 class="mb-0">24/7 Support</h6>
						<p><span class="info-text">Lorem Ipsum Dolor Sit Amet</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Site Information end -->

<!-- Banner section start -->
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="second-banner-slider">
					<div class="second-banner">
						<img src="img/banner-5.jpg" class="img-fluid w-100 rounded-4" alt="">
					</div>
					<div class="second-banner">
						<img src="img/banner-5.jpg" class="img-fluid w-100 rounded-4" alt="">
					</div>
					<div class="second-banner">
						<img src="img/banner-5.jpg" class="img-fluid w-100 rounded-4" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner section end -->

<!-- Trending Products start -->
<section class="content best-sell">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h4>Trending Products</h4>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-4">
				<div class="tend-product-box">
					<div class="trend-head">
						<h6>MacBook Air 15" Laptop - M2 chip - 8GB Memory - 512GB SSD</h6>
						<a href="" class="btn buy-now">BUY NOW</a>
					</div>
					<div class="trend-img">
						<img src="img/trend-printer.png" alt="" srcset="">
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="tend-product-box">
					<div class="trend-head">
						<h6>Apple MacBook Pro 16" Certified Refurbished - Intel Core i7</h6>
						<a href="" class="btn buy-now">BUY NOW</a>
					</div>
					<div class="trend-img">
						<img src="img/trend-printer.png" alt="" srcset="">
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="tend-product-box">
					<div class="trend-head">
						<h6>Apple - MacBook Pro 16" Laptop - M2 Pro chip - 16GB Memory </h6>
						<a href="" class="btn buy-now">BUY NOW</a>
					</div>
					<div class="trend-img">
						<img src="img/trend-printer.png" alt="" srcset="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Trending Products end -->

<!-- Banner section start -->
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<img src="img/banner-6.jpg" class="w-100 img-fluid rounded-4" alt="">
			</div>
		</div>
	</div>
</section>
<!-- Banner section end -->

<!-- We are Associated with start -->
<section class="content best-sell">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h4>We are Associated with</h4>
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/apple.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/samsung.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/dell.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/lenovo.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/hp.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/lg.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/bose.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/canon.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/sony.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/microsoft.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/epson.png" alt="" srcset="">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-section">
					<img src="img/google.png" alt="" srcset="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- We are Associated with end -->

<!-- Featured Products start -->
<section class="content best-sell">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h4>Featured Products</h4>
			</div>
		</div>
		<div class="row">
			<?php for($i = 0; $i <= 9; $i++) { ?>
				<div class="w-20 mt-5">
					<div class="product-box text-center">
						<img src="img/imac.png" class="mx-auto pb-5" alt="">
						<h6>MacBook Air 13.3" Laptop - Apple M1 chip - 8GB Memory...</h6>
						<p>$ 1,499.00 <del class="old-price">$ 1,499.00</del> </p>
						<p><span class="deal">In Stock</span></p>
						<a href="" class="btn add-to-cart"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Featured Products end -->

<?php include('footer.php') ?>
