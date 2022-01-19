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
                <div class="container fix_scroll">
                    <!--scroll-->
                    <div class="width_auth">
                        <!--four card-->
                        <div>
                            <div class="grid-container5 auth_center gird5_st">
                                <div class="item1 cust_cent">
                                    <div class="box_style6" style="background: #054468a6;border-radius: 8px;">
                                        <img src="../assets/images/img_avatar.png" alt="profile" class="cir_image" />
                                        <p class="view_cust3">ZIN KO MYINT</p>
                                        <p class="view_cust3">ELECTRONIC ARTS LTD</p>
                                        <div style="margin-top: -11px;">
                                            <div class="view_cust">
                                                <p class="view_cust2">Email</p>
                                                <p class="view_txt">admin@gmail.com</p>
                                            </div>
                                            <div class="view_cust">
                                                <p class="view_cust2">Phone</p>
                                                <p class="view_txt ph_no">+95 421555899</p>
                                            </div>
                                            <div class="view_cust">
                                                <p class="view_cust2">Country</p>
                                                <p class="view_txt country">Myanmar</p>
                                            </div>
                                            <div class="view_cust">
                                                <p class="view_cust2">Region</p>
                                                <p class="view_txt region">Yangon</p>
                                            </div>
                                            <div class="view_cust">
                                                <p class="view_cust2">Address</p>
                                                <p class="view_txt region">Hledan</p>
                                            </div>
                                            <div class="view_cust" style="border: none !important; margin-bottom: -12px;">
                                                <p class="view_cust2"><i class="fas fa-lock"></i></p>
                                                <p class="view_txt">Reset & Send Password</p>
                                            </div>
                                            <div class="view_cust" style="border: none !important;">
                                                <p class="view_cust2"><i class="fas fa-sign-in-alt"></i></p>
                                                <p class="view_txt log">Login as Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item2 cust_cent">
                                    <div class="box_style6" style="background: #054468a6;border-radius: 8px;">
                                        <div class="bill_txt2">
                                            <p>Billing</p>
                                        </div>

                                        <div class="view_cust">
                                            <p class="view_cust2">Credit Card</p>
                                            <p class="view_txt">**** **** **** **** 4562</p>
                                        </div>
                                        <div class="view_cust">
                                            <p class="view_cust2">paid</p>
                                            <p class="view_txt">5($500.00)</p>
                                        </div>
                                        <div class="view_cust">
                                            <p class="view_cust2">Draft</p>
                                            <p class="view_txt">2($150.00)</p>
                                        </div>
                                        <div class="view_cust">
                                            <p class="view_cust2">Unpaid/Due</p>
                                            <p class="view_txt">1($355.0)</p>
                                        </div>
                                        <div class="view_cust">
                                            <p class="view_cust2">Unpaid/Due</p>
                                            <p class="view_txt">1($355.0)</p>
                                        </div>
                                        <div class="view_cust">
                                            <p class="view_cust2">Refunded</p>
                                            <p class="view_txt">0($0.00)</p>
                                        </div>
                                        <div class="view_cust">
                                            <p class="view_cust2">Gross Income</p>
                                            <p class="view_txt">$2,100.00</p>
                                        </div>
                                        <div class="view_cust" style="border: none !important; margin-bottom: -12px;">
                                            <p class="view_cust2"><i class="fas fa-file-invoice"></i></p>
                                            <p class="view_txt">Create Invoice</p>
                                        </div>
                                        <div class="view_cust" style="border: none !important;">
                                            <p class="view_cust2"><i class="fas fa-share-square"></i></p>
                                            <p class="view_txt">Resend Due Invoices</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item3 cust_cent" style="background: none;">
                                    <div class="box_style6" style="border-radius: 8px;line-height: 26px;height: 223px; margin-bottom: 21px; background: #054468a6;">
                                        <div class="bill_txt2">
                                            <p>Billing</p>
                                        </div>
                                        <select class="sel2">
                                            <option>Resend Last Invoice</option>
                                        </select>
                                        <button class="send">Send Email</button>
                                        <!-- <p class="send">Send Email</p> -->
                                        <div style="display: flex;">
                                            <p class="order2">27/10/2021 | 12:23</p>
                                            <p class="order">Order Received</p>
                                        </div>
                                        <div style="display: flex;">
                                            <p class="order2">27/11/2021 | 10:23</p>
                                            <p class="order">Order Confirmation</p>
                                        </div>
                                    </div>
                                    <div class="box_style6" style="border-radius: 8px;margin-bottom: 25px;line-height: 22px;height: 49%; background: #054468a6;;">
                                        <div class="bill_txt2">
                                            <p>Other Actions</p>
                                        </div>
                                        <div class="oth_act">
                                            <p class="close_acc2"><i class="fas fa-times-circle"></i></p>
                                            <p class="close_acc">Close Account</p>
                                        </div>
                                        <div class="oth_act">
                                            <p class="close_acc2"><i class="fas fa-download"></i></p>
                                            <p class="close_acc">Export Data</p>
                                        </div>
                                        <div class="oth_act">
                                            <p class="close_acc2" style="color: #fb6d6d !important;"><i class="fas fa-exclamation-circle"></i></p>
                                            <p class="close_acc" style="color: #b2b0b0; text-align: left;">Once you delete account,data will be loat forever</p>
                                        </div>
                                        <button class="del_acc" style="border:none">
                                            <p class="del_icons"><i class="fas fa-trash"></i></p>
                                            <p style="margin-top: 7px;font-size: 13px;letter-spacing: 1px;">Delete Account</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--four card-->
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
