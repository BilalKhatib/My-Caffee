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
/////////////////////////////////////////
//daily expenses
$workers_salary_day = "";
$electricity_expense_day = "";
$internet_expense_day = "";
$free_items_given_day = "0";
$delivery_expense_day = "0";
$store_rent_cost_day = "";

//monthly expenses
$workers_salary_month = "";
$electricity_expense_month = "";
$internet_expense_month = "";
$free_items_given_month = "";
$delivery_expense_month = "";
$store_rent_cost_month = "";

//yearly expenses
$workers_salary_year = "";
$electricity_expense_year = "";
$internet_expense_year = "";
$free_items_given_year = "";
$delivery_expense_year = "";
$store_rent_cost_year = "";
/////////////////////////////////////////

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cafe Statistics</title>
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

#changepricebtn{
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
  border: 1px solid #cccccc;
  padding: 8px;
   border : 1px solid black;
}

#tr1:nth-child(even) {
  background-color: #cccccc;
   border : 1px solid black;
}

#search_bar {
	float: right; 
	width: 100%;
	height: 30px;
	display: inline-block;
	border: none;
	outline: none;
	font-size: 20px;
	font-family: arial, sans-serif;
	background-color: transparent;
}

#choose_year {
	float: right; 
	width: 100%;
	height: 30px;
	display: inline-block;
	border: none;
	outline: none;
	font-size: 20px;
	font-family: arial, sans-serif;
	background-color: transparent;
}

#jump_to_buttons {	
	height: 70px;
}

#choose_months {
	width: 100%;
	height: 75px;
	border:none;
	outline: none;
	background-color: transparent;
	font-size: 20px;
	font-family: arial, sans-serif;
	cursor: pointer;
}

#choosemonthsubmit{
	width: 100%;
	height: 75px;
	border:none;
	outline: none;
	background-color: transparent;
	font-size: 16px;
	font-family: arial, sans-serif;	
	cursor: pointer;
	color: white;
}

#choose_years {
	width: 100%;
	height: 75px;
	border:none;
	outline: none;
	background-color: transparent;
	font-size: 20px;
	font-family: arial, sans-serif;
	cursor: pointer;
}

#chooseyearsubmit{
	width: 100%;
	height: 75px;
	border:none;
	outline: none;
	background-color: transparent;
	font-size: 16px;
	font-family: arial, sans-serif;	
	cursor: pointer;
	color: white;
}


    </style>
        <script>
$(document).ready(function(){
  $("#search_bar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#date tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  </head>

  <body>
  	 
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>MyCafe <span>Statistics</span></h3>

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
    		
    	
      	<div class="card">
      		
       		<div style="float: right">
      		<a href="#daily_earnings">
      		<input type="submit" name="jumptodailyearnings" id="jump_to_buttons" value="GO To Daily Earnings" style="background-color: #000000;position: fixed;opacity: 1;width: 15%; border: 1px solid black;cursor: pointer;color: white;font-weight: bolder;font-size: 18px;">
      		</a>
      		<a href="#monthly_earnings">
      		<input type="submit" name="jumptomonthlyearnings" id="jump_to_buttons" value="GO To Monthly Earnings" style="background-color: #000000;position: fixed;opacity: 1;width: 15%;color: white;margin-top: 5%;cursor: pointer;font-weight: bolder;font-size: 18px;">
      		</a>
      		<a href="#yearly_earnings">
      		<input type="button" name="jumptoyearlyearnings" id="jump_to_buttons" value="GO To Yearly Earnings" style="background-color: #000000;position: fixed;opacity: 1;width: 15%;color: white;margin-top: 10%;cursor: pointer;font-weight: bolder;font-size: 18px;">
      		</a>
      		</div>
      		<a name="daily_earnings" style="opacity: 0;">
      		<table id="table1">
      			<tr id="tr1">
 					<th id="th1" colspan="9"><h2>Today's Earnings</h2><?php echo date('d/m/20y'); ?></th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1" colspan="9"><h2><?php $today=date('20y/m/d'); $sql=$con->query("SELECT total_earnings FROM statistics WHERE date1 = '$today'"); while ($row = mysqli_fetch_array($sql)) { echo $row['total_earnings'];}; ?>&nbsp;LBP</h2></th>     				
      			</tr>

      			<tr id="tr1"></tr>
      			<tr id="tr1">
              		<th colspan="9" id="th1">
                		<h2>MyCafe Daily Earnings</h2>
                		<p style="float: right;">FOR MONTH : <?php echo date('m');?></p>
              		</th>
            	</tr>

      			<tr id="tr1">
              		<th colspan="5" id="th1">
                		<input type="text" name="search_bar" id="search_bar" placeholder="Search By Date" autocomplete="off">
                	</th>
                	<th id="th1" colspan="3">
					<select name="choose_months" id="choose_months">
						<option value="1">01 - January</option>
						<option value="2">02 - February</option>
						<option value="3">03 - March</option>
						<option value="5">04 - April</option>
						<option value="5">05 - May</option>
						<option value="6">06 - June</option>
						<option value="7">07 - July</option>
						<option value="8">08 - August</option>
						<option value="9">09 - September</option>
						<option value="10">10 - October</option>
						<option value="11">11 - November</option>
						<option value="12">12 - December</option>
					</select>                		
                	</th>	
                	<th id="th1" style="background-color: #399106;">
                		<input type="submit" name="choosemonthsubmit" id="choosemonthsubmit" value="Choose Month">
                	</th>
            	</tr>
      			<tr id="tr1">
					<td id="td1">Date</td>
					<td id="td1">Total Earnings</td> 
					<td id="td1">Workers Salary<br><center>(Per Day)</center></td>  
					<td id="td1">Electricity Expense<br><center>(Per Day)</center></td>
					<td id="td1">Internet Expense<br><center>(Per Day)</center></td>
					<td id="td1">Free Items Given<br><center>(For Customers)</center></td>
					<td id="td1">Delivery Expense<br><center>(Per Day)</center></td> 
					<td id="td1">Store Rent Cost<br><center>(Per Day)</center></td>   
					<td id="td1">Total Profit</td>  				
      			</tr>
      			<tbody id="date">
 				<tr id="tr1">
 					<th id="th1">1</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '1' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day1earnings = $row['total_earnings'];
 								echo $day1earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">2</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '2' and Month(date1) = '$thismonth' ");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day2earnings = $row['total_earnings'];
 								echo $day2earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">3</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '3' and Month(date1) = '$thismonth' ");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day3earnings = $row['total_earnings'];
 								echo $day3earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">4</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '4' and Month(date1) = '$thismonth' ");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day4earnings = $row['total_earnings'];
 								echo $day4earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">5</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '5' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day5earnings = $row['total_earnings'];
 								echo $day5earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">6</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '6' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day6earnings = $row['total_earnings'];
 								echo $day6earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">7</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '7' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day7earnings = $row['total_earnings'];
 								echo $day7earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">8</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '8' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day8earnings = $row['total_earnings'];
 								echo $day8earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">9</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '9' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day9earnings = $row['total_earnings'];
 								echo $day9earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">10</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '10' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day10earnings = $row['total_earnings'];
 								echo $day10earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">11</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '11' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day11earnings = $row['total_earnings'];
 								echo $day11earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">12</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '12' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day12earnings = $row['total_earnings'];
 								echo $day12earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">13</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '13' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day13earnings = $row['total_earnings'];
 								echo $day13earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">14</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '14' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day14earnings = $row['total_earnings'];
 								echo $day14earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">15</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '15' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day15earnings = $row['total_earnings'];
 								echo $day15earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">16</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '16' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day16earnings = $row['total_earnings'];
 								echo $day16earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">17</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '17' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day17earnings = $row['total_earnings'];
 								echo $day17earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">18</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '18' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day18earnings = $row['total_earnings'];
 								echo $day18earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">19</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '19' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day19earnings = $row['total_earnings'];
 								echo $day19earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">20</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '20' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day20earnings = $row['total_earnings'];
 								echo $day20earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">21</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '21' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day21earnings = $row['total_earnings'];
 								echo $day21earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">22</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '22' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day22earnings = $row['total_earnings'];
 								echo $day22earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">23</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '23' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day23earnings = $row['total_earnings'];
 								echo $day23earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">24</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '24' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day24earnings = $row['total_earnings'];
 								echo $day24earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">25</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '25' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day25earnings = $row['total_earnings'];
 								echo $day25earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">26</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '26' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day26earnings = $row['total_earnings'];
 								echo $day26earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">27</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '27' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day27earnings = $row['total_earnings'];
 								echo $day27earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">28</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '28' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day28earnings = $row['total_earnings'];
 								echo $day28earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">					
 					<th id="th1">29</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '29' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day29earnings = $row['total_earnings'];
 								echo $day29earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">30</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '30' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day30earnings = $row['total_earnings'];
 								echo $day30earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
 				<tr id="tr1">
 					<th id="th1">31</th>
 					<th id="th1">
 							<?php
 							$thismonth = date('m');
 							$sql = $con->query("SELECT total_earnings FROM statistics WHERE Day(date1) = '31' and Month(date1) = '$thismonth'");
 							while ($row = mysqli_fetch_array($sql)) {
 								$day31earnings = $row['total_earnings'];
 								echo $day31earnings;
 							}
 							?>
 					</th>
 					<th id="th1">
 						<?php echo $workers_salary_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_day;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_day;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 				</tr>
      			</tbody>
      		
      			<tr id="tr1"></tr>
      			<tr id="tr1">
              		<th colspan="9" id="th1">
                		<h2>MyCafe Monthly Earnings</h2>
                		<p style="float: right;">FOR YEAR : <?php echo date('20y');?></p>
                		
              		</th>
            	</tr>
            	<!--
      			<tr id="tr1">
              		
              		<th colspan="8" id="th1">
                		<input type="number" name="choose_year" id="choose_year" placeholder="choose Year (Default : Current Year )" autocomplete="off">
              		</th>
              	
            	</tr>-->
            	<tr id="tr1">
              		<th colspan="5" id="th1">
                		<input type="text" name="search_bar" id="search_bar" placeholder="Search By Month" autocomplete="off">
              		</th>
              		<th id="th1" colspan="3">
					<select name="choose_years" id="choose_years">
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
					</select>  
					<a name="monthly_earnings" style="opacity: 0;">              		
                	</th>	
                	<th id="th1" style="background-color: #399106;">
                		<input type="submit" name="chooseyearsubmit" id="chooseyearsubmit" value="Choose Year">
                	</th>
            	</tr>
      			<tr id="tr1">
					<td id="td1">Month</td>
					<td id="td1">Total Earnings</td> 
					<td id="td1">Workers Salary<br><center>(Per Month)</center></td>  
					<td id="td1">Electricity Expense<br><center>(Per Month)</center></td>
					<td id="td1">Internet Expense<br><center>(Per Month)</center></td>
					<td id="td1">Free Items Given<br><center>(For Customers)</center></td>
					<td id="td1">Delivery Expense<br><center>(Per Month)</center></td>
					<td id="td1">Store Rent Cost<br><center>(Per Month)</center></td>   
					<td id="td1">Total Profit</td>  				
      			</tr>
      			<tbody id="date">
 					<tr id="tr1">
 						<th id="th1">1</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth1 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '1' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth1); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">2</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth2 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '2' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth2); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">3</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth3 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '3' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth3); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">4</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth4 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '4' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth4); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">5</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth5 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '5' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth5); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">6</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth6 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '6' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth6); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">7</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth7 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '7' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth7); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">8</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth8 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '8' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth8); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">9</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth9 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '9' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth9); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">10</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth10 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '10' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth10); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">11</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth11 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '11' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth11); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
 					<tr id="tr1">
 						<th id="th1">12</th>
 						<th id="th1">
 							<?php
 							$thisyear = date('20y');
 							$getmonth12 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Month(date1) = '12' and Year(date1) = '$thisyear'");
 							$row = mysqli_fetch_assoc($getmonth12); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_month;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_month;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>   				
      			</tr>
      			</tbody>
      		
      			<tr id="tr1"></tr>
      			<tr id="tr1">
      				
              		<th colspan="9" id="th1">
                		<h2>MyCafe Yearly Earnings</h2>
              		</th>
            	</tr>
      			<tr id="tr1">
              		<th colspan="9" id="th1">
                		<input type="text" name="search_bar" id="search_bar" placeholder="Search By Year" autocomplete="off">
              		</th>
            	</tr>
      			<tr id="tr1">
					<td id="td1">Year</td>
					<td id="td1">Total Earnings</td> 
					<td id="td1">Workers Salary<br><center>(Per Year)</center></td>  
					<td id="td1">Electricity Expense<br><center>(Per Year)</center></td>
					<td id="td1">Internet Expense<br><center>(Per Year)</center></td>
					<td id="td1">Free Items Given<br><center>(For Customers)</center></td>
					<td id="td1">Store Rent Cost<br><center>(Per Year)</center></td> 
					<td id="td1">Delivery Expense<br><center>(Per Year)</center></td>  
					<td id="td1">Total Profit</td>  				
      			</tr>
      			<tbody id="date">
 					<tr id="tr1">
 						<th id="th1">2021</th>
 						<th id="th1">
 							<a name="yearly_earnings" style="opacity: 0;">
 							
 							<?php
 							$getyear1 = $con->query("SELECT SUM(total_earnings) AS totalsum FROM statistics WHERE Year(date1) = '2021'");
 							$row = mysqli_fetch_assoc($getyear1); 

							$sum = $row['totalsum'];

							echo $sum;
 							?>
 						</th>
 						<th id="th1">
 						<?php echo $workers_salary_year;?>
 					</th>
 					<th id="th1">
 						<?php echo $electricity_expense_year;?>
 					</th>
 					<th id="th1">
 						<?php echo $internet_expense_year;?>
 					</th>
 					<th id="th1">
 						<?php echo $free_items_given_year;?>
 					</th>
 					<th id="th1">
 						<?php echo $delivery_expense_year;?>
 					</th>
 					<th id="th1">
 						<?php echo $store_rent_cost_year;?>
 					</th>
 					<th id="th1">
 						<?php echo"total";?>
 					</th>
 					</tr>
      			</tbody>
      		</table>
      		<br><br><br><br><br><br><br>


      	</div>
     	</section>

     </div>
       

  </body>
</html>