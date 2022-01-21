
<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php"); 
 ?>
<!--pc_nav-->
<div class="top_navbar pc_menu_no">
    <div class="left_icons">
        <p class="m-r-15 title_no"><i style="color: #040404;" class="fas fa-bell"></i></p>
        <p class="m-r-15"><i style="color: #040404;" class="fas fa-shopping-cart"></i></p>
        <p class="m-r-15" style="color: #040404;">zinkomyint@gmail.com</p>
       <!--  <p class="m-r-15"><i style="color: #040404;" class="fas fa-user-circle"></i></p> -->
       <i style="color: #040404;" class="fas fa-user-circle dropbtn" onclick="final()"></i>
       <!--<button onclick="final()" class="dropbtn"></button> -->
              <div id="myDropdown" class="dropdown-content">
                <a href="profile.php" style="letter-spacing:2px;border-bottom: 1px solid #bcb5b5;"><i class="fas fa-user" aria-hidden="true"></i> Setting</a>
                <a href="../index.php" style="letter-spacing:2px"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
              </div>
        </div>
    </div>

<!--mobile_menu-->
<div class="mobile_menu">
    <div class="topnav" id="myTopnav">
    <a href="index.php" class="" style="margin-top:13px">ジンコミィン</a>
    <a href="index.php" class="<?= ($activePage == 'index') ? 'active':''; ?>">dashboard</a>
    <a href="alternative.php" class="<?= ($activePage == 'alternative') ? 'active':''; ?>">alternative</a>
    <a href="stock.php" class="<?= ($activePage == 'stock') ? 'active':''; ?>">Stock</a>
    <a href="customers.php" class="<?= ($activePage == 'customers') ? 'active':''; ?>">Customer List</a>
    <a href="auth.php" class="<?= ($activePage == 'auth') ? 'active':''; ?>">Customer View</a>
    <a href="pricing.php" class="<?= ($activePage == 'pricing') ? 'active':''; ?>">Pricing</a>
    <a href="help.php" class="<?= ($activePage == 'help') ? 'active':''; ?>">Help</a>
    <a href="product.php" class="<?= ($activePage == 'product') ? 'active':''; ?>">Product List</a>
    <a href="card.php" class="<?= ($activePage == 'card') ? 'active':''; ?>">Product View</a>
    <a href="order.php" class="<?= ($activePage == 'order') ? 'active':''; ?>">Order</a>
    <a href="userlist.php" class="<?= ($activePage == 'userlist') ? 'active':''; ?>">UserList</a>
    <a href="forms.php" class="<?= ($activePage == 'forms') ? 'active':''; ?>">Forms</a>
    <a href="maxlist.php" <?= ($activePage == 'maxlist') ? 'active':''; ?>>Max List</a>
    <a href="profile.php" class="<?= ($activePage == 'profile') ? 'active':''; ?>">User Profile</a>
    <a href="javascript:void(0);" class="icon" onclick="mobile_menu(this)">
        <!-- <i class="fa fa-bars"></i> -->
          <div class="bar4"></div>
          <div class="bar5"></div>
          <div class="bar6"></div>
    </a>
</div>
</div>

 <p class="m-r-15 title_resp mail_resp" style="color: #040404;"><i style="font-size: 21px;color: #040404;" class="fas fa-user-circle"></i></p>