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
		<div class="container">
			<!--scroll-->
	<div class="ex2">
		<div class="box_p">
			<!--table-->
			<div>
				<p class="p-l">All Products</p>
				<p class="m-t" style="text-align:right;">
                    <i class="fas fa-search print disp_no"></i>
                    <input type="text" id="myInput" class="custom_search mt_cust" onkeyup="search()" placeholder="Search name ..">
                  <i class="fas fa-cloud-download-alt print"></i>
                  <i class="fas fa-print print"></i>
                </p>
			</div>
			  	
				    <div class="grid-container4">
				    	<table id="myTable">
								  <tr>
								    <th><i class="far fa-square"></i></th>
								    <th>Name</th>
								    <th>Details</th>
								    <th>Inventory</th>
								    <th>Price</th>
								    <th></th>
								  </tr>
								  <tr>
								    <th><i class="far fa-square"></i></th>
								    <td>Play Station</td>
								    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
								    <td><p class="available">limited stock</p></td>
								    <td>$1,200</td>
								    <td><i class="fas fa-edit"></i></td>
								  </tr>
								  <tr>
								    <th><i class="far fa-square"></i></th>
								    <td>Sony xperia one</td>
								    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
								    <td><p class="instock">Available</p></td>
								    <td>$800</td>
								    <td><i class="fas fa-edit"></i></td>
								  </tr>
								  <tr>
								    <th><i class="far fa-square"></i></th>
								    <td>Gamecontroller</td>
								    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
								    <td><p class="outstock">out of stock</p></td>
								    <td>$200</td>
								    <td><i class="fas fa-edit"></i></td>
								  </tr>
								  <tr>
								    <th><i class="far fa-square"></i></th>
								    <td>Earphone</td>
								    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
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