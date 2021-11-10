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
									<button onclick="location.href='carthandler.php?cart_id=<?php echo $final['id'] ?> &cart_name=<?php echo $final['name'] ?>&cart_price=<?php echo $final['price'] ?>'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>	
						</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">

<!-- 							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		

<?php
	include ("files/footer.php");
?>
</body>
</html>