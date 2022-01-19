<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php"); 
 ?>
<!--menu icons-->
<div class="test">
    <ul>
        <li>
            <a class="menu_icons" href="index.php">
                <span class="icon"><i class="fas fa-desktop"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="alternative.php" class="menu_icons">
                <span class="icon"><i class="fas fa-business-time"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="stock.php" class="menu_icons">
                <span class="icon"><i class="fas fa-chart-line"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="customers.php" class="menu_icons">
                <span class="icon"><i class="fa fa-users"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="pricing.php" class="menu_icons">
                <span class="icon"><i class="fas fa-comment-dollar"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="help.php" class="menu_icons">
                <span class="icon"><i class="fas fa-question-circle"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="product.php" class="menu_icons">
                <span class="icon"><i class="fa fa-product-hunt"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="order.php" class="menu_icons">
                <span class="icon"><i class="fas fa-archive"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="userlist.php" class="menu_icons">
                <span class="icon"><i class="fas fa-clipboard-list"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="forms.php" class="menu_icons">
                <span class="icon"><i class="far fa-address-card"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="maxlist.php" class="menu_icons">
                <span class="icon"><i class="fab fa-maxcdn"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="#" class="menu_icons" style="cursor: not-allowed;">
                <span class="icon"><i class="fas fa-shield-alt"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="#" class="menu_icons" style="cursor: not-allowed;">
                <span class="icon"><i class="fas fa-credit-card"></i></span>
            </a>
        </li>
        <li class="m-t-14">
            <a href="profile.php" class="menu_icons">
                <span class="icon"><i class="fas fa-user"></i></span>
            </a>
        </li>
    </ul>
</div>
<!--menu icons-->

<div class="sidebar">
   
    <div class="menu_scroll">
         <p class="logo2">ジンコミィン</p>
         <ul>
        <li>
            <a href="index.php" class="<?= ($activePage == 'index') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="fas fa-desktop"></i></span>
                <span class="item">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="alternative.php" class="<?= ($activePage == 'alternative') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="fas fa-business-time"></i></span>
                <span class="item">Alternative</span>
            </a>
        </li>
        <li>
            <a href="stock.php" class="<?= ($activePage == 'stock') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="fas fa-chart-line"></i></span>
                <span class="item">Stock Management</span>
            </a>
        </li>

        <p class="logo">PAGES</p>
        <li>
            <div class="dropdown">
                <a role="button" onclick="customer()" class="dropbtn <?= ($activePage == 'customers' || $activePage == 'auth') ? 'active':''; ?> hover-left">
                    <span class="icon"><i class="fa fa-users"></i></span>
                    Customers <i style="margin-left: 6px;font-size: 11px" class="fas fa-chevron-down"></i>
                </a>
                <div id="myDropdown" class="drop_t hover-left">
                    <a href="customers.php" style="text-align: center">Customers List</a>
                    <a href="auth.php" style="text-align: center">Customer View</a>
                </div>
            </div>
        </li>

        <li>
            <a href="pricing.php" class="<?= ($activePage == 'pricing') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="fas fa-comment-dollar"></i></span>
                <span class="item">Pricing</span>
            </a>
        </li>
        <li>
            <a href="help.php" class="<?= ($activePage == 'help') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="fas fa-question-circle"></i></span>
                <span class="item">Help</span>
            </a>
        </li>
        <li>
            <div class="dropdown">
                <a role="button" onclick="product()" class="dropbtn <?= ($activePage == 'product' || $activePage == 'card') ? 'active':''; ?> hover-left">
                    <span class="icon"><i class="fa fa-product-hunt"></i></span>
                    Products <i style="padding-left: 16px;font-size: 11px" class="fas fa-chevron-down"></i>
                </a>
                <div id="pro" class="drop_t hover-left">
                    <a href="product.php" style="text-align: center">Products List</a>
                    <a href="card.php" style="text-align: center">Product View</a>
                </div>
            </div>
        </li>
        <li>
            <a href="order.php" class="<?= ($activePage == 'order') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="fas fa-archive"></i></span>
                <span class="item">Order</span>
            </a>
        </li>
        <li>
            <a href="userlist.php" class="<?= ($activePage == 'userlist') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="fas fa-clipboard-list"></i></span>
                <span class="item">User list</span>
            </a>
        </li>
        <li>
            <a href="forms.php" class="<?= ($activePage == 'forms') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="far fa-address-card"></i></span>
                <span class="item">Forms</span>
            </a>
        </li>
        <li>
            <a href="maxlist.php" class="<?= ($activePage == 'maxlist') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="fab fa-maxcdn"></i></span>
                <span class="item">Max List</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon"><i class="fas fa-shield-alt"></i></span>
                <span class="item" style="cursor: not-allowed;">
                    Session/Auth
                    <p class="btn_diable">disable</p>
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon"><i class="fas fa-credit-card"></i></span>
                <span class="item" style="cursor: not-allowed;">
                    Left Sidebar Card
                    <p class="btn_diable">disable</p>
                </span>
            </a>
        </li>
        <li>
            <a href="profile.php" class="<?= ($activePage == 'profile') ? 'active':''; ?> hover-left">
                <span class="icon"><i class="fas fa-user"></i></span>
                <span class="item">User Profile</span>
            </a>
        </li>
    </ul>
    </div>
    
</div>
