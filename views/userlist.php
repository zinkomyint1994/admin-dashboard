<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Dashboard</title>
         <?php include('../views/inc/header.php'); ?>
    </head>
    <body id="bbb">
        <div class="wrapper">
            <div class="section">
                 <!--nav-->
                   <?php include('../views/inc/nav.php'); ?>
                 <!--nav-->
                <!--mid-->
                <div class="container">
                    <!--second part-->
                    <div class="center userlist">
                        <div>
                            <div class="grid-container6 card_resp">
                                <!--card-->
                                <div class="item1 gird6_ul">
                                    <div class="box_style card_resp" style="display: flex; width: 100%;">
                                        <div class="stock_items">
                                            <img src="../assets/images/profile.png" width="65px" style="" />
                                            <!-- <hr> -->
                                            <p class="pg_font">Progress Bar</p>
                                            <div class="wrapper2 wp_2">
                                                <div class="progress-bar">
                                                    <span class="progress-bar-fill" style="width: 70%;"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stock_items" style="text-align: center;">
                                            <p class="box_h">Zin Ko</p>
                                            <p class="mail_fonts">zinko@gmail.com</p>
                                            <!-- <hr> -->
                                            <p class="pg_font2" style="margin-top: 18px; font-weight: initial;">45%</p>
                                        </div>
                                        <div class="stock_items" style="text-align: center;">
                                            <div class="fb_icons disp_no">
                                                <p><i class="fab fa-google m-r12"></i></p>
                                                <p><i class="fab fa-facebook m-r12"></i></p>
                                                <p><i class="fab fa-instagram"></i></p>
                                            </div>

                                            <!-- <hr style="margin-top: 32px;"> -->
                                            <div class="m-t23">
                                                <p class="userlist_btn m-r12">CHART</p>
                                                <p class="userlist_btn">PROFILE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--card-->
                                <!--card-->
                                <div class="item1 gird6_ul box_h">
                                    <div class="box_style card_resp" style="display: flex; width: 100%;">
                                        <div class="stock_items">
                                            <img src="../assets/images/profile.png" width="65px" style="" />

                                            <p class="pg_font">Progress Bar</p>
                                            <div class="wrapper2 wp_2">
                                                <div class="progress-bar">
                                                    <span class="progress-bar-fill" style="width: 70%;"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stock_items" style="text-align: center;">
                                            <p class="box_h">Tun Aung</p>
                                            <p class="mail_fonts">tunaung@gmail.com</p>

                                            <p class="pg_font2" style="margin-top: 18px; font-weight: initial;">45%</p>
                                        </div>
                                        <div class="stock_items" style="text-align: center;">
                                            <div class="fb_icons disp_no">
                                                <p><i class="fab fa-google m-r12"></i></p>
                                                <p><i class="fab fa-facebook m-r12"></i></p>
                                                <p><i class="fab fa-instagram"></i></p>
                                            </div>

                                            <div class="m-t23">
                                                <p class="userlist_btn m-r12">CHART</p>
                                                <p class="userlist_btn">PROFILE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--card-->
                            </div>
                        </div>
                    </div>
                    <!--second part-->
                </div>
                <!--mid-->
            </div>
            <!--sidebar-->
            <?php include('../views/inc/left_menu.php'); ?>
            <!--sidebar-->
        </div>
        <script src="../assets/js/panel.js"></script>
    </body>
</html>
