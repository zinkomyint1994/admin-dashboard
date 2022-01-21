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
        <div class="stock_scroll stock_ml stk_wid">
              <div class="stock">
            <!--four card-->
            <div>
                <div class="grid-container3 grid_3 st_resp">
                    <div class="item1 it1_st">
                        <div class="box_style st_pd">
                            <div class="dash_icons">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="dash_fonts">
                                10,495
                            </div>
                            <div class="dash_fonts2">
                                New Members
                            </div>
                        </div>
                    </div>

                    <div class="item2 it1_st">
                        <div class="box_style st_pd">
                            <div class="dash_icons">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="dash_fonts">
                                30,942
                            </div>
                            <div class="dash_fonts2">
                                Places Added
                            </div>
                        </div>
                    </div>

                    <div class="item3 it1_st">
                        <div class="box_style st_pd">
                            <div class="dash_icons">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="dash_fonts">
                                45,269
                            </div>
                            <div class="dash_fonts2">
                                Support Members
                            </div>
                        </div>
                    </div>

                    <div class="item4 it1_st">
                        <div class="box_style st_pd">
                            <div class="dash_icons">
                                <i class="fas fa-tags"></i>
                            </div>
                            <div class="dash_fonts">
                                20,965
                            </div>
                            <div class="dash_fonts2">
                                Tags Used
                            </div>
                        </div>
                    </div>
                    <div class="item5 st_cost">
                        <div class="invent" style="width: 76%;">
                            <p class="inv_title">Inventory Summary</p>
                            <div class="item5" style="background-color:#FFF">
                                <div>
                                    <div class="qual_box">
                                        <p class="font_size_st" style="font-size: 10px;">QUANTITY IN HAND</p>
                                        <p class="st_txt">540</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item5" style="background-color:#FFF;margin-top: 10px;">
                                <div class="qual_box">
                                    <p class="font_size_st" style="font-size: 10px">QUANTITY TO BE RECEIVED</p>
                                    <p class="st_txt">120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--four card-->
            <!--second part-->
            <div style="margin-bottom: 70px;">
                <div>
                    <div class="grid-cont_stk gird4_st">
                        <div class="item1 it1_st">
                            <div class="box_style" style="display: flex;background-color: #FFF;">
                                <div class="stock_items">
                                    <p style="color: red;">Stock Items</p>
                                    <p class="stock_fo2">Low Stock Items</p>
                                    <p class="stock_fo2">Available Items</p>
                                  <!--   <hr> -->
                                    <p class="stock_fo2">Purchase Order</p>
                                    <p class="stock_fo2">Quantity Ordered</p>
                                    <p style="letter-spacing: 4px;color: #fff;text-align:center;background-color:#054468a6;border-radius: 4px;">432</p>
                                </div>
                                <div class="stock_items" style="text-align: center;">
                                    <div class="stock_items3">
                                        <p style="color:#952b2ba6">234</p>
                                    </div>
                                    <p>209</p>
                                    <p>1208</p>
                                    <hr>
                                    <p style="margin-top: 26px;" class="stock_fo">Total Cost</p>
                                    <p style="color: #5c859c;">$432,439</p>
                                </div>
                                <div style="width: 150px;">
                                <!--svg-->
                                <div class="disp_no">
                                    <svg width="150" height="150" viewBox="0 0 36 36">
                                      <defs>
                                        <radialGradient id="gradient">
                                          <stop offset="85%" stop-color="#6d6d6d" />
                                          <stop offset="100%" stop-color="white" />
                                        </radialGradient>
                                      </defs>
                                      <circle r="15.9155" cx="18" cy="18" fill="transparent" stroke="url(#gradient)" ; stroke-width="3" ; />
                                      <path d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831" fill="transparent" stroke="#3281ff" ; stroke-width="3" ; stroke-dasharray="60, 100" />
                                      <text style="font-size:4px;font-weight: normal;" x="18" y="18" transform='translate(-3,1)'>60 %</text>
                                    </svg>
                                    </div>
                                    <!--svg-->
                                </div>
                            </div>
                        </div>
                          <div class="item2 it1_st">
                            <div class="box_style it1_st" style="display: flex;height: 100%;background-color: #FFF;margin-bottom:26px">
                                <div class="stock_items2">
                                    <p class="disp_no stk_name">Name</p>
                                    <hr>
                                    <p class="m-t-14 stock_fo">Earphone</p>
                                    <p class="m-t-14 stock_fo">Keyboard</p>
                                    <p class="m-t-14 stock_fo">iphone X</p>
                                </div>
                                <div class="stock_items2">
                                    <p class="disp_no stk_name">Revenue</p>
                                    <hr>
                                    <p class="m-t-14 pric_st dolr_po">$100</p>
                                    <p class="m-t-14 pric_st dolr_po">$605</p>
                                    <p class="m-t-14 pric_st dolr_po">$600</p>
                                </div>
                                  <div class="stock_items2">
                                    <p class="disp_no stk_name" style="text-align: left;">Stock Staus</p>
                                    <hr>
                                    <p class="available m-t-14">15 available</p>
                                    <p class="instock m-t-14">in stock</p>
                                    <p class="outstock m-t-14">out of stock</p>
                                </div>
                                  <div class="stock_items2" style="text-align:center;">
                                    <p class="disp_no stk_name">Action</p>
                                    <hr>
                                    <p class="m-t-14 disp_no"><i class="fas fa-edit"></i></p>
                                    <p class="m-t-14 disp_no"><i class="fas fa-edit"></i></p>
                                    <p class="m-t-14 disp_no"><i class="fas fa-edit"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--second part-->
        </div>
        <!--scroll-->
        </div>
          <!--mid-->
    <script src="../assets/js/panel.js"></script>
 </body>
</html>
