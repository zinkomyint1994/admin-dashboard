<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php"); 
 ?>


<div class="l-navbar fix_scroll pc_menu_no" id="navbar">
    <nav class="nav">
        <div>
            <div class="nav__brand">
                <!--   <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon> -->
                <div onclick="test(this)" class="nav__toggle" id="nav-toggle">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <a href="#" class="nav__logo">ジンコミィン</a>
            </div>
            <div class="nav__list">
                <a href="index.php" class="nav__link <?= ($activePage == 'index') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fas fa-desktop"></i></span>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="alternative.php" class="nav__link <?= ($activePage == 'alternative') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fas fa-business-time"></i></span>
                    <span class="nav__name">alternative</span>
                </a>
                <a href="stock.php" class="nav__link <?= ($activePage == 'stock') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fas fa-chart-line"></i></span>
                    <span class="nav__name">Stock</span>
                </a>

                <div id="tooltips_show" class="dropdown_btn nav__link collapse <?= ($activePage == 'customers' || $activePage == 'auth') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fa fa-users"></i></span>
                    <span class="nav__name">Customer</span>

                    <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                    <ul class="collapse__menu">
                        <a href="customers.php" class="collapse__sublink" style="line-height: 40px;">Customers_List</a>
                        <a href="auth.php" class="collapse__sublink">Customer_View</a>
                    </ul>
                     <div class="dropdown_btn-content">
                        <a href="customers.php">Customers_List</a>
                        <a href="auth.php">Customer_View</a>
                      </div>
                </div>

                <a href="pricing.php" class="nav__link <?= ($activePage == 'pricing') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fas fa-comment-dollar"></i></span>
                    <span class="nav__name">Pricing</span>
                </a>

                <a href="help.php" class="nav__link <?= ($activePage == 'help') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fas fa-question-circle"></i></span>
                    <span class="nav__name">Help</span>
                </a>

                <div id="tooltips_show" class="dropdown_btn nav__link collapse <?= ($activePage == 'product' || $activePage == 'card') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fa fa-product-hunt"></i></span>
                    <span class="nav__name">Product</span>

                    <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                    <ul class="collapse__menu">
                        <a href="product.php" class="collapse__sublink" style="line-height: 40px;">Products_List</a>
                        <a href="card.php" class="collapse__sublink">Product_View</a>
                    </ul>
                    <div class="dropdown_btn-content">
                        <a href="product.php">Products_List</a>
                        <a href="card.php">Product_View</a>
                    </div>
                </div>
                <a href="order.php" class="nav__link <?= ($activePage == 'order') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fas fa-archive"></i></span>
                    <span class="nav__name">Order</span>
                </a>

                <a href="userlist.php" class="nav__link <?= ($activePage == 'userlist') ? 'active':''; ?>">
                    <span class="nav__icon"><i style="font-size: 24px;" class="fas fa-clipboard-list"></i></span>
                    <span class="nav__name">Userlist</span>
                </a>

                <a href="forms.php" class="nav__link <?= ($activePage == 'forms') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="far fa-address-card"></i></span>
                    <span class="nav__name">Forms</span>
                </a>

                <a href="maxlist.php" class="nav__link <?= ($activePage == 'maxlist') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fab fa-maxcdn"></i></span>
                    <span class="nav__name">Max List</span>
                </a>

                <a href="#" class="nav__link" style="background-color: red; cursor: not-allowed;">
                    <span class="nav__icon"><i class="fas fa-shield-alt"></i></span>
                    <span class="nav__name">Session/Auth</span>
                </a>

                <a href="#" class="nav__link" style="background-color: red; cursor: not-allowed;">
                    <span class="nav__icon"><i class="fas fa-credit-card"></i></span>
                    <span class="nav__name">Left Sidebar Card</span>
                </a>

                <a href="profile.php" class="nav__link <?= ($activePage == 'profile') ? 'active':''; ?>">
                    <span class="nav__icon"><i class="fas fa-user"></i></span>
                    <span class="nav__name">User Profile</span>
                </a>
            </div>
        </div>

        <a href="../index.php" class="nav__link">
            <span class="nav__icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
            <span class="nav__name">Log Out</span>
        </a>
    </nav>
</div>
