<!DOCTYPE html>
<html lang="en">
<?php
	include ("files/head.php");
?>
<body class="animsition">
	
<?php
	include ("files/header.php");
	?>	

	<!-- breadcrumb -->
	<div class="container">
		
	</div>
		

<!-- Product Detail -->
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<?php
				include("files/connect.php");
				$id=$_GET['details_id'];
				$sql="Select * from products where id='$id'";
				$results=$connect->query($sql);
				$final=$results->fetch_assoc();

				?>
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">

								<div class="item-slick3" data-thumb="
								<?php 
								$path= $final['picture'];
								$display = substr($path, 3);
								echo $display;
								?>">
									<div class="wrap-pic-w pos-relative" style="height:600px">
										<img src="
								<?php 
								$path= $final['picture'];
								$display = substr($path, 3);
								echo $display;
								?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="
											<?php 
											$path= $final['picture'];
											$display = substr($path, 3);
											echo $display;
											?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $final['name'] ?>
						</h4>

						<span class="mtext-106 cl2">
							Rs. <?php echo $final['price'] ?>
						</span>

						<p class="stext-102 cl3 p-t-23">
							<?php echo $final['description'] ?>
						</p>
						
						<!--  -->
						<div class="p-t-33">

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<button onclick="location.href='carthandler.php?cart_id=<?php echo $final['id'] ?> &cart_name=<?php echo $final['name'] ?>&cart_price=<?php echo $final['price'] ?>'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Add to cart
									</button>
								</div>
							</div>	
						</div>
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">

<!-- social share -->
<div class="fb-share-button" 
data-href="/details.php?details_id=<?php echo $final['id']?>" 
data-layout="button_count">
</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- List products below detail -->		
<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-c-m m-tb-10">
					
				</div>

			</div>

			<div class="row isotope-grid">
				<?php

				include("files/connect.php");
				$sql="select * from products";
				$results=$connect->query($sql);

				while($final=$results->fetch_assoc()) {

				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="
							<?php 
								$path= $final['picture'];
								$display = substr($path, 3);
								echo $display;
 
							?>" alt="IMG-PRODUCT">

							<a href="details.php?details_id=<?php echo $final['id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								More Details
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['name'] ?>
								</a>

								<span class="stext-105 cl3">
									Rs. <?php echo $final['price'] ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							</div>
						</div>
					</div>
				</div>
<?php } ?>

			</div>
		</div>
	</div>

<?php
	include ("files/footer.php");
?>
</body>
</html>