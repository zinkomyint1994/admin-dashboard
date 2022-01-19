<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Dashboard</title>
       <?php include('../views/inc/header.php'); ?>
    </head>
    <body id="bbb">
        <div class="menu"></div>
        <div class="wrapper">
            <div class="section">
                 <!--nav-->
                    <?php include('../views/inc/nav.php'); ?>
                <!--nav-->
                <!--mid-->
                <div class="container fix_scroll">
                    <!--scroll-->
                    <div class="">
                        <!--chartlist-->
                        <div class="aa">
                            <div class="container" style="display: flex;margin:-21px">
                                <!-- LINE CHART BLOCK (LEFT-CONTAINER) -->
                                <div class="line-chart-block block" style="margin-top: -11px;">
                                    <div class="line-chart">
                                        <div class="grafico">
                                            <ul class="eje-y">
                                                <li data-ejeY="30"></li>
                                                <li data-ejeY="20"></li>
                                                <li data-ejeY="10"></li>
                                                <li data-ejeY="0"></li>
                                            </ul>
                                            <ul class="eje-x">
                                                <li>Apr</li>
                                                <li>May</li>
                                                <li>Jun</li>
                                            </ul>
                                            <span data-valor="25">
                                                <span data-valor="8">
                                                    <span data-valor="13">
                                                        <span data-valor="5">
                                                            <span data-valor="23">
                                                                <span data-valor="12"> <span data-valor="15"> </span></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="time-lenght horizontal-list">
                                        <li><a class="time-lenght-btn" href="#14" style="color: #ffffff;">Week</a></li>
                                        <li><a class="time-lenght-btn" href="#15" style="color: #ffffff;">Month</a></li>
                                        <li><a class="time-lenght-btn" href="#16" style="color: #ffffff;">Year</a></li>
                                    </ul>
                                    <ul class="month-data clear">
                                        <li>
                                            <p style="color: #ffffff;">APR<span class="scnd-font-color"> 2013</span></p>
                                            <p style="color: #ffffff;"><span class="entypo-plus increment"> </span>21<sup>%</sup></p>
                                        </li>
                                        <li>
                                            <p style="color: #ffffff;">MAY<span class="scnd-font-color"> 2013</span></p>
                                            <p style="color: #ffffff;"><span class="entypo-plus increment"> </span>48<sup>%</sup></p>
                                        </li>
                                        <li>
                                            <p style="color: #ffffff;">JUN<span class="scnd-font-color"> 2013</span></p>
                                            <p style="color: #ffffff;"><span class="entypo-plus increment"> </span>35<sup>%</sup></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--chartlist-->
                        <!--chart_list-->
                        <div class="">
                            <div class="grid-containe-alt grid_alt alt_disp">
                                <div class="item2 it2">
                                    <div class="box_style4 box_4">
                                        <div class="igFrameBar2">
                                            <div class="igData igData1"></div>
                                            <div class="igData igData2"></div>
                                            <div class="igData igData3"></div>
                                            <div class="igData igData4"></div>
                                            <div class="igData igData5 disp_no"></div>
                                            <div class="igData igData6 disp_no"></div>
                                            <div class="igData igData7 disp_no"></div>
                                            <div class="igData igData8 disp_no"></div>
                                            <div class="igData igData9 disp_no"></div>
                                            <div class="igData igData10 disp_no"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-container-alt2 grid_2 alt_3" style="margin-top: -6px;">
                                    <div class="test1 box_style5 box_5">
                                        <div class="dash_icons3">
                                            <i class="fas fa-dollar-sign"></i>
                                        </div>
                                        <div class="dash_fonts2" style="margin-top: 14px;">
                                            This week sales
                                        </div>
                                        <div class="dash_fonts2">
                                            85,000
                                        </div>
                                    </div>
                                    <div class="test2 box_style5 box_5">
                                        <div class="dash_icons3">
                                            <i class="fab fa-stack-exchange"></i>
                                        </div>
                                        <div class="dash_fonts2">
                                            Inventory status
                                        </div>
                                        <div class="dash_fonts2">
                                            8.5%Stock Surplus
                                        </div>
                                    </div>
                                    <div class="test3 box_style5 box_5 m-t-0 alt_t">
                                        <div class="dash_icons3">
                                            <i class="fas fa-truck"></i>
                                        </div>
                                        <div class="dash_fonts2">
                                            Orders to deliver
                                        </div>
                                        <div class="dash_fonts2">
                                            201 Orders
                                        </div>
                                    </div>
                                    <div class="test4 box_style5 box_5 m-t-0 alt_t">
                                        <div class="dash_icons3">
                                            <i class="fas fa-search-dollar"></i>
                                        </div>
                                        <div class="dash_fonts2">
                                            67%
                                        </div>
                                        <div class="dash_fonts2">
                                            Stock Exchange
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--chart_list-->
                    </div>
                    <!--scroll-->
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
