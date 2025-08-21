<!DOCTYPE html>
<html lang="en">
<?php
	include ("files/head.php");
?>
<body class="animsition">
	
<?php
	include ("files/header.php");
	?>	
	<br>
	<!-- Product -->
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
								<button onclick="location.href='carthandler.php?cart_id=<?php echo $final['id'] ?>&cart_name=<?php echo $final['name'] ?>&cart_price=<?php echo $final['price'] ?>'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Add to cart
								</button>
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