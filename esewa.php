<!DOCTYPE html>
<html lang="en">
   <?php
      session_start();
      include("handler/customersession.php");
      include ("files/head.php");
      include ("files/header.php");
      ?>
   <body class="animsition">
   <?php
         
         ?>
      <!-- breadcrumb -->
      <div class="container">
      </div>
      <!-- Shoping Cart -->
      <div class="bg0 p-t-75 p-b-85">
         <div class="container">
            <div class="row">
               <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                  <div class="m-l-25 m-r--38 m-lr-0-xl">
                     <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                           <tr class="table_head">
                              <th class="column-1">Action</th>
                              <th class="column-2">Name</th>
                              <th class="column-3">Price</th>
                              <th class="column-4">Quantity</th>
                              <th class="column-5"></th>
                           </tr>
                           <?php
                              if (isset($_SESSION['cart'])) {
                              	$total=0;
                              	foreach($_SESSION['cart'] as $key => $value) {
                              		$total=$total+$value['item_price']*$value['quantity'];
                              
                              ?>
                           <tr class="table_row">
                              <td class="column-1">
                                 <div class="">
                                    <form action="cartremove.php" method="POST">
                                       <button class="btn btn-sm btn-outline-danger" name="remove">Remove</button>
                                       <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
                                    </form>
                                 </div>
                              </td>
                              <td class="column-2"><?php echo $value['item_name'] ?>;</td>
                              <td class="column-3">Rs <?php echo $value['item_price'] ?></td>
                              <td class="column-4">
                                 <form action="cartupdate.php" method="POST">
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                       <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                          <i class="fs-16 zmdi zmdi-minus"></i>
                                       </div>
                                       <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?php echo $value['quantity'] ?>">
                                       <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                          <i class="fs-16 zmdi zmdi-plus"></i>
                                       </div>
                                    </div>
                              </td>
                              <td class="column-5">
                              <button class="btn btn-sm btn-outline-danger" name="update">
                              update
                              </button>
                              <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">											</form></td>
                           </tr>
                           <?php }
                              } ?>
                        </table>
                     </div>
                     <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                  <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                     <h4 class="mtext-109 cl2 p-b-30">
                        Cart Totals 
                     </h4>
                     <div class="flex-w flex-t bor12 p-b-13">
                           <div class="size-209">
                           <span class="mtext-110 cl2">
                           Rs <?php echo $_SESSION['total']; ?>
                           </span>
                        </div>
                     </div>
                     <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                           <span class="stext-110 cl2">
                           Shipping:
                           </span>
                        </div>
                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                           <p class="stext-111 cl6 p-t-2">
                              Free delivery all over Nepal!!
                           </p>
                           <div class="p-t-15">
                           <?php
                           echo 'your total bill amount is Rs.';
                           echo $_SESSION['total'];
                           echo '<br>';
                           ?>
                           <form action="https://uat.esewa.com.np/epay/main" method="POST">
                           <input value="<?php echo $_SESSION['total']?>" name="tAmt" type="hidden"> <!-- total amount -->
                           <input value="<?php echo $_SESSION['total']?>" name="amt" type="hidden"> <!-- actual amount -->
                           <input value="0" name="txAmt" type="hidden"> <!-- tax amount -->
                           <input value="0" name="psc" type="hidden"> <!-- service charge -->
                           <input value="0" name="pdc" type="hidden"> <!-- delivery charge -->
                           <input value="epay_payment" name="scd" type="hidden"> <!-- merchant code using test code right now -->
                           <input value="<?php echo $_SESSION['orderid']?>" name="pid" type="hidden"> <!-- unique id for the product/order -->
                           <input value="http://localhost/online-store/handler/sucess.php" type="hidden" name="su"> <!-- sucess redirect -->
                           <input value="http://localhost/online-store/handler/fail.php" type="hidden" name="fu"> <!-- faliure redirect -->
                           <input class="btn btn-primary" type="submit" value="Pay using eSewa">
                           </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
                           </div>
                           </div>
      <?php
         include('files/footer.php');
         ?>
   </body>
</html>