<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <div class="fix_scroll cust_list">
      <!--scroll-->
  <div class="">
    <div class="box_p">
          
      <!--table-->
      <div>
        <p class="p-l">All Customers</p>
        <div class="m-t search_ct" style="text-align:right;">
          <input type="text" id="myInput" class="custom_search mt_cust" onkeyup="search()" placeholder="Search email">
          <i class="fas fa-search disp_no"></i>
        </div>
      </div>

            <div class="grid-container4" style="overflow-x:auto;">
                        <table id="myTable">
                          <tr class="header">
                            <th><input type="checkbox" onClick="toggle(this)" /> </th>
                            <th onclick="sortTable(0)">Email<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
                            <th onclick="sortTable(1)">Address<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
                            <th onclick="sortTable(2)">Company<i class="fas fa-sort" style="padding-left: 4px;"></i></th>
                            <th>Balance</th>
                            <th></th>
                          </tr>
                          <tr>
                            <th><input type="checkbox" name="foo" value="bar1"></th>
                            <td>test1@gmail.com</td>
                            <td>test1</td>
                            <td>ACIUM1</td>
                            <td>$5,200</td>
                            <td><i class="fas fa-edit"></i></td>
                          </tr>
                           <tr>
                            <th><input type="checkbox" name="foo" value="bar2"></th>
                            <td>aaa@gmail.com</td>
                            <td>test2</td>
                            <td>ACIUM2</td>
                            <td>$5,200</td>
                            <td><i class="fas fa-edit"></i></td>
                          </tr>
                          <tr>
                            <th><input type="checkbox" name="foo" value="bar3"></th>
                            <td>bbb@gmail.com</td>
                            <td>test3</td>
                            <td>ACIUM3</td>
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

    <script src="../assets/js/panel.js"></script>
	</body>
</html>