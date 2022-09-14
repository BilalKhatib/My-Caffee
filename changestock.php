<?php
require 'db.php';

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['logged_in'])) {
	header('Location: index.php');
	exit;
}

?>
<?php
//change item price

if (isset($_POST['changepricebutton'])) {
	$item_id = $_POST['changepriceinput'];

	$select_item = $con->query("SELECT * FROM PRODUCTS WHERE id='$item_id' ");
	$new_item_price = $_POST["newpriceinput"];

	$update_item_price = $con->query("UPDATE products SET price='$new_item_price' WHERE id='$item_id' ");
	$con->query($update_item_price);
  header("Location: changestock.php");

}

// change direct price

if (isset($_POST['changedirectpricebutton'])) {
	$item_id = $_POST['changepriceinput'];

	$select_item = $con->query("SELECT * FROM PRODUCTS WHERE id='$item_id' ");
	$new_item_price = $_POST["newpriceinput"];

	$update_item_price = $con->query("UPDATE products SET direct_sell_price='$new_item_price' WHERE id='$item_id' ");
	$con->query($update_item_price);
  header("Location: changestock.php");

}

//change item quantity

if (isset($_POST['changeitemquantitybutton'])) {
	$item_id = $_POST['changepriceinput'];

	$select_item = $con->query("SELECT * FROM PRODUCTS WHERE id='$item_id' ");
	$new_item_quantity = $_POST['changeitemquantity'];

	$update_item_quantity = $con->query("UPDATE products SET quantity = '$new_item_quantity' WHERE id = '$item_id' ");
	$con->query($update_item_quantity);
  header("Location: changestock.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Stock</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="style/stockstyle.css">
    <style>
    	body {
    		width: 80%;
    	}

table , th , td {
  border: 1px solid black;
  border-spacing: 0;

}


button {
  display: inline-block;
  height: 75px;
  width: 100%;
  cursor: pointer;
}

#addtotablebtn {
	background-color: #65C868;
	display: inline-block;
  	height: 75px;
  	width: 100%;
  	cursor: pointer;
  	outline: none;
  	border: none;
}

#removefromtablebtn {
	background-color: #B02A2A;
	color: white;
  	display: inline-block;
  	height: 75px;
  	width: 100%;
  	cursor: pointer;
  	outline: none;
  	border: none;
}

#direct-sell-btn {
	background-color: #65C868;
}

#return-direct-sell-btn {
	background-color: #B02A2A;
	color: white;
}

#tableid {
	width: 90%;
	height: 75px;
	color: black;
	font-weight: bold;
	font-size: 20px;
	border : none;
	opacity: 1;
	background-color: transparent;
	outline: none;

}

#tableidcell {
	background-color: #F5B0B0;
}

#items-category{
	height: 40px;
	font-size: 24px;
}

#changepricebutton{
  	display: inline-block;
  	height: 75px;
  	width: 100%;
  	cursor: pointer;
  	outline: none;	
  	border: none;
}

#changepriceinput{
  	display: inline-block;
  	height: 75px;
  	width: 100%;
  	cursor: pointer;
  	outline: none;	
  	border: none;
}

#newpriceinput{
  	display: inline-block;
  	height: 75px;
  	width: 100%;
  	cursor: pointer;
  	outline: none;	
  	border: none;
}

#changeitemquantity{
  	display: inline-block;
  	height: 75px;
  	width: 100%;
  	cursor: pointer;
  	outline: none;	
  	border: none;
}

#changeitemquantitybutton{
  	display: inline-block;
  	height: 75px;
  	width: 100%;
  	cursor: pointer;
  	outline: none;	
  	border: none;
}

#table1 {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border : 1px solid black;
}

#td1, #th1 {
  border: 1px solid #dddddd;
  padding: 8px;
   border : 1px solid black;
}

#tr1:nth-child(even) {
  background-color: #dddddd;
   border : 1px solid black;
}


    </style>
  </head>

  <body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>MyCafe <span>Stock</span></h3>

      </div>
      
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="images/me.png" class="profile_image">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="stock.php"><i class="fas fa-cubes"></i><span>Stock</span></a>
      	<a href="tables.php"><i class="fas fa-edit"></i><span>Tables</span></a>
      	<a href="customers.php"><i class="fas fa-users"></i><span>Customers</span></a>
      	<a href="reminder.php"><i class="far fa-bell"></i><span>Reminder</span></a>
      	<a href="statistics.php"><i class="fas fa-chart-line"></i><span>Statistics</span></a>
        <a href="changestock.php"><i class="fas fa-sliders-h"></i><span>change stock</span></a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>

      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="pictures/pp.jpg" class="profile_image">
        <br>
        <h4>MyCafe Admin</h4>
      </div>
      <a href="stock.php"><i class="fas fa-cubes"></i><span>Stock</span></a>
      	<a href="tables.php"><i class="fas fa-edit"></i><span>Tables</span></a>
      	<a href="customers.php"><i class="fas fa-users"></i><span>Customers</span></a>
      	<a href="reminder.php"><i class="far fa-bell"></i><span>Reminder</span></a>
      	<a href="statistics.php"><i class="fas fa-chart-line"></i><span>Statistics</span></a>
        <a href="changestock.php"><i class="fas fa-sliders-h"></i><span>change stock</span></a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>

    </div>
    <!--sidebar end-->

    <div class="content">
    	<section class="section" style="max-width: 1920px;">
    	
      <div class="card" >
       
      	<div>
      		<form method="post">
      			<div style="float: right;">
      			<input type="number" name="changepriceinput" id="changepriceinput" placeholder="choose product id"  style="background-color: #CFC0BD;position: fixed;opacity: 1;width: 15%; border: 1px solid black; font-weight: bold; font-size: 16px; color: black;">
      			<br><br><br><br><br>

      			<input type="number" name="newpriceinput" id="newpriceinput" placeholder="Update Price"  style="background-color: #CFC0BD;position: fixed;opacity: 1;width: 15%; border: 1px solid black; font-weight: bold; font-size: 16px; color: black;">
      			<br><br><br><br><br>

      			<input type="submit" name="changepricebutton" value="change price" id="changepricebutton" style="background-color: green;position: fixed;opacity: 1;width: 16%;color: white;">

      			<br><br><br><br><br>

      			<input type="submit" name="changedirectpricebutton" value="change direct price" id="changepricebutton" style="background-color: green;position: fixed;opacity: 1;width: 16%;color: white;">

      			<br><br><br><br><br>

      			<input type="number" name="changeitemquantity" placeholder="Update Stock" id="changeitemquantity" style="background-color: #CFC0BD;position: fixed;opacity: 1;width: 15%; border: 1px solid black; font-weight: bold; font-size: 16px; color: black;">

      			<br><br><br><br><br>

      			<input type="submit" name="changeitemquantitybutton" value="Update Stock" id="changeitemquantitybutton" style="background-color: green;position: fixed;opacity: 1;width: 16%;color: white;">

      			

      			</div>
      		<table id="table1">
      			
      			<tr id="tr1">
      				<th colspan="8" id="items-category"> <marquee behavior="alternate" scrollamount="5">  Hot Drinks </marquee> </th>
      			</tr>
      			<tr>
      				<td rowspan="3" id="td1"><img src="pictures/products/coffee.png"></td>
      				<th colspan="3" id="th1">1- Coffee</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/tea.jpg"></td>
      				<th colspan="3" id="th1">2- Tea</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '1' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>

      				 <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '1' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>

      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '1' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '2' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '2' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '2' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/nescafe.png"></td>
      				<th colspan="3" id="th1">3- Nescafe</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/cappucino.jpg"></td>
      				<th colspan="3" id="th1">4- Cappucino</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '3' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '3' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '3' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '4' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '4' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '4' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			<tr id="tr1">
      				<td rowspan="3"><img src="pictures/products/zhourat.jpg"></td>
      				<th colspan="3">5- Zhourat</th>
      				<td rowspan="3"><img src="pictures/products/ginger.png"></td>
      				<th colspan="3">6- Ginger</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '5' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '5' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '5' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '6' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '6' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '6' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			      			<tr id="tr1">
      				<th colspan="8" id="items-category" id="th1"> <marquee behavior="alternate" scrollamount="5">  Fresh Drinks </marquee> </th>
      			</tr>
      			<tr>
      				<td rowspan="3" id="td1"><img src="pictures/products/lemon.png"></td>
      				<th colspan="3" id="th1">7- Lemon Juice</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/lemonade.png"></td>
      				<th colspan="3" id="th1">8- Lemonade</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '7' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '7' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '7' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '8' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '8' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '8' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/carrot.jpg"></td>
      				<th colspan="8" id="th1">9- Carrot Juice</th>
      				
      			</tr>
      			<tr id="tr1">
      				<th colspan="2" id="th1">Price in LBP</th>
      				<th colspan="2" id="th1">Direct Price</th>
      				<th colspan="3" id="th1">in Stock</th>
      				
      			</tr>
      			<tr id="tr1">
      				<th colspan="2" id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '9' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th colspan="2" id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '9' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th colspan="3" id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '9' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				
      			</tr>
      			
      			<tr id="tr1">
      				<th colspan="8" id="items-category" id="th1"> <marquee behavior="alternate" scrollamount="5">Cold Drinks</marquee> </th>
      			</tr>
      			<tr>
      				<td rowspan="3" id="td1"><img src="pictures/products/7up.jpg"></td>
      				<th colspan="3" id="th1">10- 7UP</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/pepsi.jpg"></td>
      				<th colspan="3" id="th1">11- Pepsi</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '10' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '10' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '10' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '11' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '11' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '11' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/mirinda.jpg"></td>
      				<th colspan="3" id="th1">12- Mirinda</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/xtra-ananas.jpg"></td>
      				<th colspan="3" id="th1">13- Xtra Pineapple</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '12' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '12' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '12' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '13' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '13' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '13' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/lipton-ice-tea-passion-fruits.jpg"></td>
      				<th colspan="3" id="th1">14- ICT Passion Fruits</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/lipton-ice-tea-peach.jpg"></td>
      				<th colspan="3" id="th1">15- ICT Peach</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '14' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '14' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '14' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '15' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '15' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '15' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/amp-blue.png"></td>
      				<th colspan="3" id="th1">16- AMP Blue</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/xxl.png"></td>
      				<th colspan="3" id="th1">17- XXL</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '16' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '16' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '16' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '17' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '17' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '17' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/mexican.jpg"></td>
      				<th colspan="3" id="th1">18- Mexican</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/watter-bottle-small.jpg"></td>
      				<th colspan="3" id="th1">19- Small Water</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '18' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '18' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '18' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '19' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '19' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '19' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
            <tr id="tr1">
              <td rowspan="3" id="td1"><img src="pictures/products/icedcoffee.jpg"></td>
              <th colspan="3" id="th1">32 - Iced Coffee</th>
              
            </tr>
            <tr>
              <th id="th1">Price in LBP</th>
              <th id="th1">Direct Price</th>
              <th id="th1">in Stock</th>
              
            </tr>
            <tr id="tr1">
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '32' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['price'];}
               ?></th>
                <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '32' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['direct_sell_price'];}
               ?></th>
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '32' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['quantity'];}
               ?></th>
             </tr>
      			
      			<tr id="tr1">
      				<th colspan="8" id="items-category" id="th1"> <marquee behavior="alternate" scrollamount="5">Argileh</marquee> </th>
      			</tr>
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/m3assal-tfe7.jpg"></td>
      				<th colspan="3" id="th1">20- tffe7</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/m3assal-na3na3w7amod.jpg"></td>
      				<th colspan="3" id="th1">21- na3na3 w 7amod</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '20' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '20' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '20' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '21' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '21' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '21' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/m3assal-na3na3w3lkeh.jpg"></td>
      				<th colspan="3" id="th1">22- na3na3 w 3lkeh</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/ras-jabali.jpg"></td>
      				<th colspan="3" id="th1">23- ras jabali</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '22' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '22' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '22' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '23' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '23' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '23' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
            <tr id="tr1">
              <td rowspan="3" id="td1"><img src="pictures/products/mazaya-gum.jpg"></td>
              <th colspan="3" id="th1">27- m3assal 3lkeh</th>
              <td rowspan="3" id="td1"><img src="pictures/products/Cedars-Silver.jpg"></td>
              <th colspan="3" id="th1">28- Cedars Silver</th>
            </tr>
            <tr id="tr1">
              <th id="th1">Price in LBP</th>
              <th id="th1">Direct Price</th>
              <th id="th1">in Stock</th>
              <th id="th1">Price in LBP</th>
              <th id="th1">Direct Price</th>
              <th id="th1">in Stock</th>
            </tr>
            <tr id="tr1">
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '27' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['price'];}
               ?></th>
                <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '27' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['direct_sell_price'];}
               ?></th>
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '27' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['quantity'];}
               ?></th>
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '28' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['price'];}
               ?></th>
                <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '28' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['direct_sell_price'];}
               ?></th>
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '28' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['quantity'];}
               ?></th>
            </tr>
      			
      			<tr id="tr1">
      				<th colspan="8" id="items-category" id="th1"> <marquee behavior="alternate" scrollamount="5">Others</marquee> </th>
      			</tr>
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/nuts.jpg"></td>
      				<th colspan="3" id="th1">24- Nuts</th>
      				<td rowspan="3" id="td1"><img src="pictures/products/ka3keh.jpg"></td>
      				<th colspan="3" id="th1">25- ka3keh</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '24' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '24' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '24' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '25' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '25' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '25' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			
      			<tr id="tr1">
      				<td rowspan="3" id="td1"><img src="pictures/products/ka3kehwkhodra.jpg"></td>
      				<th colspan="3" id="th1">26- ka3keh w khodra</th>
      				
      			</tr>
      			<tr id="tr1">
      				<th id="th1">Price in LBP</th>
      				<th id="th1">Direct Price</th>
      				<th id="th1">in Stock</th>
      				
      			</tr>
      			<tr id="tr1">
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '26' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '26' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th id="th1"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '26' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				
      			</tr>

            <tr id="tr1">
              <th colspan="8" id="items-category" id="th1"> <marquee behavior="alternate" scrollamount="5">Dessert</marquee> </th>
            </tr>
            <tr>
              <td rowspan="3" id="td1"><img src="pictures/products/eclair.jpg"></td>
              <th colspan="3" id="th1">29- Eclair</th>
              <td rowspan="3" id="td1"><img src="pictures/products/cupcake.jpg"></td>
              <th colspan="3" id="th1">30- Cup Cake</th>
            </tr>
            <tr id="tr1">
              <th id="th1">Price in LBP</th>
              <th id="th1">Direct Price</th>
              <th id="th1">in Stock</th>
              <th id="th1">Price in LBP</th>
              <th id="th1">Direct Price</th>
              <th id="th1">in Stock</th>
            </tr>
            <tr id="tr1">
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '29' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['price'];}
               ?></th>
                <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '29' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['direct_sell_price'];}
               ?></th>
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '29' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['quantity'];}
               ?></th>
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '30' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['price'];}
               ?></th>
                <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '30' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['direct_sell_price'];}
               ?></th>
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '30' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['quantity'];}
               ?></th>
            </tr>
            <tr id="tr1">
              <td rowspan="3" id="td1"><img src="pictures/products/coconut.jpg"></td>
              <th colspan="3" id="th1">31 - Coconut</th>
              
            </tr>
            <tr id="tr1">
              <th id="th1">Price in LBP</th>
              <th id="th1">Direct Price</th>
              <th id="th1">in Stock</th>
              
            </tr>
            <tr id="tr1">
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '31' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['price'];}
               ?></th>
                <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '31' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['direct_sell_price'];}
               ?></th>
              <th id="th1"><?php 
              $result = $con->query("SELECT * FROM products WHERE id = '31' ");
              while($row = mysqli_fetch_array($result))
          { echo $row['quantity'];}
               ?></th>
             </tr>
      			
      		</table>
      	</div>
       	
      		</form>
      	</div>
       

  </body>
</html>