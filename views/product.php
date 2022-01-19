<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
	<div class="">
		<div class="box_p">
			<!--table-->
				<div>
				<p class="p-l">All Customers</p>
				<div class="m-t" style="text-align:right;">
		         <input type="text" id="myInput" class="custom_search mt_cust" onkeyup="search()" placeholder="Search name">
							<i class="fas fa-search disp_no"></i>
				</div>
				</div>
		<!-- 	<div>
				<p class="p-l">All Products</p>
				<p class="m-t" style="text-align:right;">
                    <i class="fas fa-search print disp_no"></i>
                    <input type="text" id="myInput" class="custom_search mt_cust" onkeyup="search()" placeholder="Search name ..">
                  <i class="fas fa-cloud-download-alt print"></i>
                  <i class="fas fa-print print"></i>
                </p>
			</div> -->
			  	
				    <div class="grid-containe-pod" style="overflow-x:auto;">
				    	<table id="myTable">
								  <tr>
								    <th><input type="checkbox" onClick="toggle(this)" /> </th>
								    <th onclick="sortTable(0)">Name<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
								    <th onclick="sortTable(1)">Details<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
								    <th onclick="sortTable(2)">Inventory<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
								    <th>Price</th>
								    <th></th>
								  </tr>
								  <tr>
								    <th><input type="checkbox" name="foo" value="bar1"></th>
								    <td>Play Station</td>
								    <td>Sony</td>
								    <td><p class="available">limited stock</p></td>
								    <td>$1,200</td>
								    <td><i class="fas fa-edit"></i></td>
								  </tr>
								  <tr>
								    <th><input type="checkbox" name="foo" value="bar2"></th>
								    <td>Sony xperia one</td>
								    <td>Sony Mobile</td>
								    <td><p class="instock">Available</p></td>
								    <td>$800</td>
								    <td><i class="fas fa-edit"></i></td>
								  </tr>
								  <tr>
								    <th><input type="checkbox" name="foo" value="bar3"></th>
								    <td>Gamecontroller</td>
								    <td>Micorsoft Xbox</td>
								    <td><p class="outstock">out of stock</p></td>
								    <td>$200</td>
								    <td><i class="fas fa-edit"></i></td>
								  </tr>
								  <tr>
								    <th><input type="checkbox" name="foo" value="bar4"></th>
								    <td>Earphone</td>
								    <td>Apple</td>
								    <td><p class="instock">Available</p></td>
								    <td>$250</td>
								    <td><i class="fas fa-edit"></i></td>
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