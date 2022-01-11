<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	  <?php include('../views/inc/header.php'); ?>
</head>
<body id="bbb">
	<div class="menu">
		
	</div>
    <div class="wrapper">
       <div class="section">
		   <!--nav-->
               <?php include('../views/inc/nav.php'); ?>
            <!--nav-->
        <!--mid-->
		<div class="container">
			<!--scroll-->
	<div class="ex1">
		<div class="box_p">
          
			<!--table-->
			<div>
				<p class="p-l">All Customers</p>
				<p class="m-t" style="text-align:right;">
					<i class="fas fa-search print disp_no"></i>
                    <input type="text" id="myInput" class="custom_search mt_cust" onkeyup="search()" placeholder="Search email ..">
				  <i class="fas fa-cloud-download-alt print"></i>
				  <i class="fas fa-print print"></i>
				</p>
			</div>
			  	
				    <div class="grid-container4">
                        <table id="myTable">
                          <tr class="header">
                            <th><i class="far fa-square"></i></th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Company</th>
                            <th>Balance</th>
                            <th></th>
                          </tr>
                          <tr>
                            <th><i class="far fa-square"></i></th>
                            <td>test@gmail.com</td>
                            <td>63 Poplar Avenue, Cliffside, Virginia, 4592</td>
                            <td>ACIUM</td>
                            <td>$5,200</td>
                            <td><i class="fas fa-edit"></i></td>
                          </tr>
                           <tr>
                            <th><i class="far fa-square"></i></th>
                            <td>aaa@gmail.com</td>
                            <td>63 Poplar Avenue, Cliffside, Virginia, 4592</td>
                            <td>ACIUM</td>
                            <td>$5,200</td>
                            <td><i class="fas fa-edit"></i></td>
                          </tr>
                          <tr>
                            <th><i class="far fa-square"></i></th>
                            <td>bbb@gmail.com</td>
                            <td>63 Poplar Avenue, Cliffside, Virginia, 4592</td>
                            <td>ACIUM</td>
                            <td>$5,200</td>
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