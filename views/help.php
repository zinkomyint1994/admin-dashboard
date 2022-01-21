<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Dashboard</title>
          <?php include('../views/inc/header.php'); ?>
    </head>
    <body id="body-pd">
        <div class="wrapper">
            <div class="section">
            <!--nav-->
            <?php include('../views/inc/nav.php'); ?>
            <!--nav-->
            </div>
        </div>
            <!--sidebar-->
                <?php include('../views/inc/left_menu.php'); ?>
            <!--sidebar-->

              <!--mid-->
                <div class="fix_scroll help_wid">
                    <div class="" style="margin-bottom:80px">
                        <div class="search">
                            <p class="search_icons"><i class="fas fa-search"></i></p>
                            <input class="help_search" placeholder="search keyword base" />
                            <button class="button button2">search</button>
                        </div>
                        <div class="category cat_resp">
                            <p>Or Browse by category</p>
                        </div>
                   
                    <!--four card-->
                    <div>
                        <div class="grid-container gird_he">
                            <div class="item1">
                                <div class="box_style">
                                    <div class="dash_icons2">
                                        <i class="fas fa-laptop-house"></i>
                                    </div>
                                    <div class="dash_fonts3">
                                        Getting Started
                                    </div>
                                </div>
                            </div>

                            <div class="item2">
                                <div class="box_style">
                                    <div class="dash_icons2">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div class="dash_fonts3">
                                        Plans & Pricing
                                    </div>
                                </div>
                            </div>

                            <div class="item3">
                                <div class="box_style">
                                    <div class="dash_icons2">
                                        <i class="fas fa-question-circle"></i>
                                    </div>
                                    <div class="dash_fonts3">
                                        Sales @ Questions
                                    </div>
                                </div>
                            </div>

                            <div class="item4">
                                <div class="box_style">
                                    <div class="dash_icons2">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <div class="dash_fonts3">
                                        Usage Guide
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--four card-->
                </div>
                <!--mid-->

        <script src="../assets/js/panel.js"></script>
    </body>
</html>
