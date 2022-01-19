<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
			<!--scroll-->
	<div class="ex2">
		<div class="box_p">
			<!--table-->
			<!-- <div>
				<p class="p-l">All Order</p>
                <p class="m-t" style="text-align:right;">
                    <i class="fas fa-search print"></i>
                    <input type="text" id="myInput" class="custom_search mt_cust" onkeyup="search()" placeholder="Search no ..">
                  <i class="fas fa-cloud-download-alt print"></i>
                  <i class="fas fa-print print"></i>
                </p>
			</div> -->
			<div>
				<p class="p-l">All Customers</p>
				<div class="m-t" style="text-align:right;">
		         <input type="text" id="myInput" class="custom_search mt_cust" onkeyup="search()" placeholder="Search no">
							<i class="fas fa-search disp_no"></i>
				</div>
				</div>
			  	
				    <div class="grid-containe-pod">
				    	<table id="myTable">
								  <tr>
								    <th><input type="checkbox" onClick="toggle(this)" /> </th>
								    <th onclick="sortTable(0)">Order No<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
								    <th onclick="sortTable(1)">Customer<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
								    <th onclick="sortTable(2)">Product<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
								    <th onclick="sortTable(3)">Date<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
								    <th>Status</th>
								    <th>Method</th>
								    <th>Total</th>
								  </tr>
								  <tr>
								    <th><input type="checkbox" name="foo" value="bar1"></th>
								    <td>111</td>
								    <td>Aye Aye</td>
								    <td>Play Station5</td>
								    <td>13 Sep,2021</td>
								    <td><p class="instock">Available</p></td>
								    <td>Paypal</td>
								    <td>$1,200</td>
								  </tr>
								  <tr>
								    <th><input type="checkbox" name="foo" value="bar2"></th>
								    <td>222</td>
								    <td>Tun Tun</td>
								    <td>Nokia</td>
								    <td>14 Sep,2021</td>
								    <td><p class="available">Processing</p></td>
								    <td>Paypal</td>
								    <td>$1,200</td>
								  </tr>
								  <tr>
								   <th><input type="checkbox" name="foo" value="bar3"></th>
								    <td>333</td>
								    <td>Kyaw Kyaw</td>
								    <td>Samsung S22</td>
								    <td>15 Sep,2021</td>
								    <td><p class="instock">Available</p></td>
								    <td>Paypal</td>
								    <td>$1,200</td>
								  </tr>
								  <tr>
								   <th><input type="checkbox" name="foo" value="bar4"></th>
								    <td>444</td>
								    <td>Yan Yan</td>
								    <td>iphone 13</td>
								    <td>16 Sep,2021</td>
								    <td><p class="outstock">Cancelled</p></td>
								    <td>Paypal</td>
								    <td>$1,200</td>
								  </tr>
								</table>

				    </div>
				    <!--table-->
		</div>
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