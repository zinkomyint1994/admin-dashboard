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
                <div class="container">
                    <div class="ex1">
                        <div class="center">
                            <div>
                                <div class="grid-container4 gird_he" style="height: 780px;">
                                    <!--form_product-->
                                    <div class="item1 card_wt" style="width: 75%; background-color: white;">
                                        <div style="display: flex;">
                                            <p class="order_title">Order #1028</p>
                                        </div>
                                        <div class="m-b-5">
                                            <p class="available m-r-8">Paid</p>
                                            <p class="instock">Unlimited</p>
                                        </div>
                                        <!--box-->
                                        <div class="order_box">
                                            <div style="display: flex;">
                                                <p class="oview">Overview</p>
                                                <p class="date">Sep 14,2021 at 00:23AM</p>
                                            </div>
                                            <hr />
                                            <div class="form_search card_resp">
                                                <p class="icons2 disp_no"><i class="fas fa-search"></i></p>
                                                <form id="search-model" class="mt_resp" style="display: flex;">
                                                    <input onkeypress="formsearch()" class="input_box2" type="text" placeholder="Search Brand ... " />
                                                </form>
                                            </div>

                                            <!--search-->
                                            <div class="mt_resp">
                                                <div class="box_style7 gird_he" style="display: flex;">
                                                    <div style="width: 150px;">
                                                        <h5>Microlab</h5>
                                                        <img src="../assets/images/audio.jpg" width="150px" style="margin-top: 30px;" />
                                                    </div>
                                                    <div class="stock_items" style="padding-left: 11px;">
                                                        <p class="pro_details">Product Details</p>
                                                        <p class="pro_name">Bass Speak Black</p>
                                                        <div style="display: flex;">
                                                            <p class="forms_txt">brand :</p>
                                                            <p class="forms_txt2">Microlab</p>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <p class="forms_txt">category :</p>
                                                            <p class="forms_txt2">audio</p>
                                                        </div>
                                                    </div>
                                                    <div class="stock_items" style="text-align: center;">
                                                        <p class="disp_no">Price</p>
                                                        <select class="sele_box">
                                                            <option value="0">Select Price</option>
                                                            <option value="1">$200</option>
                                                            <option value="2">$150</option>
                                                        </select>
                                                    </div>
                                                    <div class="stock_items" style="text-align: center;">
                                                        <p class="disp_no">Quantity</p>
                                                        <select class="sele_box">
                                                            <option value="0">Select Quantity</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                                    <div class="stock_items" style="text-align: center;">
                                                        <p class="disp_no">Total</p>
                                                        <p class="lsp">$250</p>
                                                    </div>
                                                </div>
                                                <!--second_box-->
                                                <div class="box_style7 gird_he" style="display: flex;">
                                                    <div style="width: 150px;">
                                                        <h5>Sony</h5>
                                                        <img src="../assets/images/audio.jpg" width="150px" style="margin-top: 30px;" />
                                                    </div>
                                                    <div class="stock_items" style="padding-left: 11px;">
                                                        <p class="pro_name">Bass Speak Black</p>
                                                        <div style="display: flex;">
                                                            <p class="forms_txt">brand :</p>
                                                            <p class="forms_txt2">Sony</p>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <p class="forms_txt">category :</p>
                                                            <p class="forms_txt2">audio</p>
                                                        </div>
                                                    </div>
                                                    <div class="stock_items" style="text-align: center;">
                                                        <select class="sele_box">
                                                            <option value="0">Select Price</option>
                                                            <option value="1">$200</option>
                                                            <option value="2">$150</option>
                                                        </select>
                                                    </div>
                                                    <div class="stock_items" style="text-align: center;">
                                                        <select class="sele_box">
                                                            <option value="0">Select Quantity</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                                    <div class="stock_items" style="text-align: center;">
                                                        <p class="m-t-4 lsp">$120</p>
                                                    </div>
                                                </div>
                                                <div class="row list-single" id="notAvailable" style="display: none;">
                                                    <div class="col-12">
                                                        <h5>Sorry, model has not been yet</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--search-->
                                        </div>
                                        <!--second_box-->
                                        <div class="card_resp" style="display: flex; margin-top: 20px;">
                                            <div class="item1">
                                                <div class="box_style6 box_no">
                                                    <div>
                                                        <textarea class="txt_area">write a note</textarea>
                                                    </div>
                                                    <div class="text_box">
                                                        <p class="userlist_btn">Add a note</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item1 mr-auto">
                                                <div class="">
                                                    <p class="bill_box">Bill Details</p>
                                                    <div style="display: flex;">
                                                        <p class="bill_details">Subtotal</p>
                                                        <p class="bill_cost bil_cst">$1,000.00</p>
                                                    </div>
                                                    <div style="display: flex;">
                                                        <p class="bill_txt">Shipping</p>
                                                    </div>
                                                    <div style="display: flex;">
                                                        <p class="mr-t-8 bill_details">DHL</p>
                                                        <p class="mr-t-8 dhl">$20.00</p>
                                                    </div>
                                                    <div style="display: flex;">
                                                        <p class="bill_txt">Deliver in 1-3 days</p>
                                                    </div>
                                                    <div style="display: flex;">
                                                        <p class="mr-t-8 bill_details">Taxes</p>
                                                        <p class="mr-t-8 dhl m-l-64">$150.00</p>
                                                    </div>
                                                    <div style="display: flex;">
                                                        <p class="bill_txt">GST 5%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--form_product-->
                                    <div class="item2 card_wt">
                                        <div class="box_style" style="width: 100%; background: #ffffff8f;">
                                            <!--card-->
                                            <div>
                                                <img src="../assets/images/profile.png" width="65px" style="" />
                                                <p style="letter-spacing: 1px;">Devid Tem</p>
                                                <p class="mail">tem@gmail.com</p>
                                                <p style="letter-spacing: 1px; font-size: 14px;">+959542592595</p>
                                                <div class="star">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <hr />
                                            <!--card-->
                                            <div class="address">
                                                <p style="color: black;">Shipping Address</p>
                                                <p>22 st,Lathar</p>
                                                <p>Yangon,Myanmar</p>
                                                <p style="color: black;">Billing Address</p>
                                                <p>22 st,Lathar</p>
                                                <p>Yangon,Myanmar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
