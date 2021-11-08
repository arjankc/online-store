<?php
   include("files/connect.php");
   ?>
<!-- Header -->
<header>
   <!-- Header desktop -->
   <div class="container-menu-desktop">
   <!-- Topbar -->
   <div class="top-bar">
      <div class="content-topbar flex-sb-m h-full container">
         <div class="left-top-bar">
            Nepali Traditional Attires
         </div>
         <div class="right-top-bar flex-w h-full">
            <?php
               if (!empty($_SESSION['email'])) {?>
            <a href="handler/customerlogout.php" class="flex-c-m trans-04 p-lr-25">
            Logout
            </a>
            <?php }else{ ?> 
            <a href="customerforms.php" class="flex-c-m trans-04 p-lr-25">
            login
            </a>
            <?php } ?>
         </div>
      </div>
   </div>
   <div class="wrap-menu-desktop">
      <nav class="limiter-menu-desktop container">
         <!-- Logo desktop -->		
         <a href="#" class="logo">
         <img src="images/icons/logo-01.png" alt="IMG-LOGO">
         </a>
         <!-- Menu desktop -->
         <div class="menu-desktop">
            <ul class="main-menu">
               <li>
                  <a href="index.php">Home</a>
               </li>
               <li>
                  <a href="product.php">Shop</a>
               </li>
               <li>
                  <a href="about.php">About</a>
               </li>
               <li>
                  <a href="contact.php">Contact</a>
               </li>
            </ul>
         </div>
         <!-- Icon header -->
         <div class="wrap-icon-header flex-w flex-r-m">
            <?php
               if (!empty($_SESSION['cart'])) {
               	$qty=count($_SESSION['cart']);?>
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="<?php echo $qty ?>">
               <?php }else{?>
               <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="0">
                  <?php } ?>
                  <i class="zmdi zmdi-shopping-cart"></i>
               </div>
            </div>
      </nav>
      </div>	
   </div>
   <!-- Header Mobile -->
   <div class="wrap-header-mobile">
   <!-- Logo moblie -->		
   <div class="logo-mobile">
      <a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
   </div>
   <!-- Icon header -->
   <div class="wrap-icon-header flex-w flex-r-m m-r-15">
      <?php
         if (!empty($_SESSION['cart'])) {
         	$qty=count($_SESSION['cart']);?>
      <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="<?php echo $qty ?>">
         <?php }else{?>
         <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="0">
            <?php } ?>
            <i class="zmdi zmdi-shopping-cart"></i>
         </div>
      </div>
      <!-- Button show menu -->
      <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
         <span class="hamburger-box">
         <span class="hamburger-inner"></span>
         </span>
      </div>
   </div>
   <!-- Menu Mobile -->
   <div class="menu-mobile">
      <ul class="main-menu-m">
         <li>
            <a href="index.php">Home</a>
         </li>
         <li>
            <a href="product.php">Shop</a>
         </li>
         <li>
            <a href="about.php">About</a>
         </li>
         <li>
            <a href="contact.php">Contact</a>
         </li>
      </ul>
   </div>
</header>