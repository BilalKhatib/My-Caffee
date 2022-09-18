<?php
error_reporting(0);
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
$today = date('20y-m-d');


$table1 = $con->query("SELECT * FROM tables WHERE table_id = '1' ");

while ($row = mysqli_fetch_array($table1)) {
  $table_total = $row['table_total'];


$today_stats = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
while ($row = mysqli_fetch_array($today_stats)) {
  $total1 = $row['total_earnings'];


  $total1 = $total1 + $table_total;

  if (isset($_POST['closetable1'])) {
    
   
    $customer_payed1 = $_POST['customer_payed1'];
    $_SESSION['return1'] = (int)$customer_payed1 - (int)$table_total ;

    $update_today_earnings = $con->query(" UPDATE statistics SET total_earnings = '$total1' WHERE date1 = '$today' ");
    $update_table_total = $con->query(" UPDATE tables SET table_total = '0' WHERE  table_id = '1' ");
    $update_items_on_table = $con->query("UPDATE table1description SET item_quantity = '0' ");

    $con->query($update_today_earnings);
    $con->query($update_table_total);
    header("Location: tables.php");
    $con->qury($update_items_on_table);
    

  }
}
}


$table2 = $con->query("SELECT * FROM tables WHERE table_id = '2' ");

while ($row = mysqli_fetch_array($table2)) {
  $table_total = $row['table_total'];


$today_stats = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
while ($row = mysqli_fetch_array($today_stats)) {
  $total1 = $row['total_earnings'];


  $total1 = $total1 + $table_total;

  if (isset($_POST['closetable2'])) {
    $customer_payed2 = $_POST['customer_payed2'];
    $_SESSION['return2'] = (int)$customer_payed2 - (int)$table_total ;
    $update_today_earnings = $con->query(" UPDATE statistics SET total_earnings = '$total1' WHERE date1 = '$today' ");
    $update_table_total = $con->query(" UPDATE tables SET table_total = '0' WHERE  table_id = '2' ");
    $update_items_on_table2 = $con->query("UPDATE table2description SET item_quantity = '0' ");

    $con->query($update_today_earnings);
    $con->query($update_table_total);
    header("Location: tables.php");
    $con->qury($update_items_on_table2);

  }
}
}

$table3 = $con->query("SELECT * FROM tables WHERE table_id = '3' ");

while ($row = mysqli_fetch_array($table3)) {
  $table_total = $row['table_total'];


$today_stats = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
while ($row = mysqli_fetch_array($today_stats)) {
  $total1 = $row['total_earnings'];


  $total1 = $total1 + $table_total;

  if (isset($_POST['closetable3'])) {
    $customer_payed3 = $_POST['customer_payed3'];
    $_SESSION['return3'] = (int)$customer_payed3 - (int)$table_total ;
    $update_today_earnings = $con->query(" UPDATE statistics SET total_earnings = '$total1' WHERE date1 = '$today' ");
    $update_table_total = $con->query(" UPDATE tables SET table_total = '0' WHERE  table_id = '3' ");
    $update_items_on_table3 = $con->query("UPDATE table3description SET item_quantity = '0' ");

    $con->query($update_today_earnings);
    $con->query($update_table_total);
    header("Location: tables.php");
    $con->qury($update_items_on_table3);
  }
}
}

$table4 = $con->query("SELECT * FROM tables WHERE table_id = '4' ");

while ($row = mysqli_fetch_array($table4)) {
  $table_total = $row['table_total'];


$today_stats = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
while ($row = mysqli_fetch_array($today_stats)) {
  $total1 = $row['total_earnings'];


  $total1 = $total1 + $table_total;

  if (isset($_POST['closetable4'])) {
    $customer_payed4 = $_POST['customer_payed4'];
    $_SESSION['return4'] = (int)$customer_payed4 - (int)$table_total ;
    $update_today_earnings = $con->query(" UPDATE statistics SET total_earnings = '$total1' WHERE date1 = '$today' ");
    $update_table_total = $con->query(" UPDATE tables SET table_total = '0' WHERE  table_id = '4' ");
    $update_items_on_table4 = $con->query("UPDATE table4description SET item_quantity = '0' ");

    $con->query($update_today_earnings);
    $con->query($update_table_total);
    header("Location: tables.php");
    $con->qury($update_items_on_table4);
  }
}
}

$table5 = $con->query("SELECT * FROM tables WHERE table_id = '5' ");

while ($row = mysqli_fetch_array($table5)) {
  $table_total = $row['table_total'];


$today_stats = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
while ($row = mysqli_fetch_array($today_stats)) {
  $total1 = $row['total_earnings'];


  $total1 = $total1 + $table_total;

  if (isset($_POST['closetable5'])) {
    $customer_payed5 = $_POST['customer_payed5'];
    $_SESSION['return5'] = (int)$customer_payed5 - (int)$table_total ;
    $update_today_earnings = $con->query(" UPDATE statistics SET total_earnings = '$total1' WHERE date1 = '$today' ");
    $update_table_total = $con->query(" UPDATE tables SET table_total = '0' WHERE  table_id = '5' ");
    $update_items_on_table5 = $con->query("UPDATE table5description SET item_quantity = '0' ");

    $con->query($update_today_earnings);
    $con->query($update_table_total);
    header("Location: tables.php");
    $con->qury($update_items_on_table5);
  }
}
}

$table6 = $con->query("SELECT * FROM tables WHERE table_id = '6' ");

while ($row = mysqli_fetch_array($table6)) {
  $table_total = $row['table_total'];


$today_stats = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
while ($row = mysqli_fetch_array($today_stats)) {
  $total1 = $row['total_earnings'];


  $total1 = $total1 + $table_total;

  if (isset($_POST['closetable6'])) {
    $customer_payed6 = $_POST['customer_payed6'];
    $_SESSION['return6'] = (int)$customer_payed6 - (int)$table_total ;
    $update_today_earnings = $con->query(" UPDATE statistics SET total_earnings = '$total1' WHERE date1 = '$today' ");
    $update_table_total = $con->query(" UPDATE tables SET table_total = '0' WHERE  table_id = '6' ");
    $update_items_on_table6 = $con->query("UPDATE table6description SET item_quantity = '0' ");

    $con->query($update_today_earnings);
    $con->query($update_table_total);
    header("Location: tables.php");
    $con->qury($update_items_on_table6);
  }
}
}

$table7 = $con->query("SELECT * FROM tables WHERE table_id = '7' ");

while ($row = mysqli_fetch_array($table7)) {
  $table_total = $row['table_total'];


$today_stats = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
while ($row = mysqli_fetch_array($today_stats)) {
  $total1 = $row['total_earnings'];


  $total1 = $total1 + $table_total;

  if (isset($_POST['closetable7'])) {
    $customer_payed7 = $_POST['customer_payed7'];
    $_SESSION['return7'] = (int)$customer_payed7 - (int)$table_total ;
    $update_today_earnings = $con->query(" UPDATE statistics SET total_earnings = '$total1' WHERE date1 = '$today' ");
    $update_table_total = $con->query(" UPDATE tables SET table_total = '0' WHERE  table_id = '7' ");
    $update_items_on_table7 = $con->query("UPDATE table7description SET item_quantity = '0' ");

    $con->query($update_today_earnings);
    $con->query($update_table_total);
    header("Location: tables.php");
    $con->qury($update_items_on_table7);
  }
}
}

$table8 = $con->query("SELECT * FROM tables WHERE table_id = '8' ");

while ($row = mysqli_fetch_array($table8)) {
  $table_total = $row['table_total'];


$today_stats = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
while ($row = mysqli_fetch_array($today_stats)) {
  $total1 = $row['total_earnings'];


  $total1 = $total1 + $table_total;

  if (isset($_POST['closetable8'])) {
    $customer_payed8 = $_POST['customer_payed8'];
    $_SESSION['return8'] = (int)$customer_payed8 - (int)$table_total ;
    $update_today_earnings = $con->query(" UPDATE statistics SET total_earnings = '$total1' WHERE date1 = '$today' ");
    $update_table_total = $con->query(" UPDATE tables SET table_total = '0' WHERE  table_id = '8' ");
    $update_items_on_table8 = $con->query("UPDATE table8description SET item_quantity = '0' ");

    $con->query($update_today_earnings);
    $con->query($update_table_total);
    header("Location: tables.php");
    $con->qury($update_items_on_table8);
  }
}
}

$table9 = $con->query("SELECT * FROM tables WHERE table_id = '9' ");

while ($row = mysqli_fetch_array($table9)) {
  $table_total = $row['table_total'];


$today_stats = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
while ($row = mysqli_fetch_array($today_stats)) {
  $total1 = $row['total_earnings'];


  $total1 = $total1 + $table_total;

  if (isset($_POST['closetable9'])) {
    $customer_payed9 = $_POST['customer_payed9'];
    $_SESSION['return9'] = (int)$customer_payed9 - (int)$table_total ;
    $update_today_earnings = $con->query(" UPDATE statistics SET total_earnings = '$total1' WHERE date1 = '$today' ");
    $update_table_total = $con->query(" UPDATE tables SET table_total = '0' WHERE  table_id = '9' ");
	$update_items_on_table9 = $con->query("UPDATE table9description SET item_quantity = '0' ");

    $con->query($update_today_earnings);
    $con->query($update_table_total);
    header("Location: tables.php");
    $con->qury($update_items_on_table9);
  }
}
}

//open tables
if (isset($_POST['open-table-btn1'])) {
	$_SESSION['return1'] = '';
	header("Location: tables.php");
}
if (isset($_POST['open-table-btn2'])) {
	$_SESSION['return2'] = '';
	header("Location: tables.php");
}
if (isset($_POST['open-table-btn3'])) {
	$_SESSION['return3'] = '';
	header("Location: tables.php");
}
if (isset($_POST['open-table-btn4'])) {
	$_SESSION['return4'] = '';
	header("Location: tables.php");
}
if (isset($_POST['open-table-btn5'])) {
	$_SESSION['return5'] = '';
	header("Location: tables.php");
}
if (isset($_POST['open-table-btn6'])) {
	$_SESSION['return6'] = '';
	header("Location: tables.php");
}
if (isset($_POST['open-table-btn7'])) {
	$_SESSION['return7'] = '';
	header("Location: tables.php");
}
if (isset($_POST['open-table-btn8'])) {
	$_SESSION['return8'] = '';
	header("Location: tables.php");
}
if (isset($_POST['open-table-btn9'])) {
	$_SESSION['return9'] = '';
	header("Location: tables.php");
}




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cafe System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="style/tablesstyle.css">
<style>
button {
  display: inline-block;
  height: 75px;
  width: 100%;
  cursor: pointer;
  border: none;
}

#open-table-btn {
  background-color: green;
  color: white;
  display: inline-block;
  height: 75px;
  width: 100%;
  cursor: pointer;
  border: none;  
}

#closebtn {
  background-color: #B02A2A;
  color: white;
  display: inline-block;
  height: 75px;
  width: 100%;
  cursor: pointer;
  border: none;
}

#customer_payed {
  display: inline-block;
  width: 90%;
  height: 75px;
  border: none;
  outline: none;
  font-weight: bold;
  font-size: 14px;
}

#return {
  display: inline-block;
  width: 90%;
  height: 75px;
  border: none;
  outline: none;
  font-weight: bold;
  font-size: 14px;
  background-color: #CFC0BD;
}

a {
  text-decoration: none;
  color: black;
}

#tabledetailscell {
  height: 75px;
  background-color: pink;
}

</style>
  </head>

  <body>
    <script>

function test(){
  var t = document.getElementById("table1");
  window.addEventListener("load", function test(){
    var color = window.localStorage.getItem("t");
    if(color == 'undefined'){
      table1.style.backgroundColor = "red";
    }else if(color == "green"){
      table1.style.backgroundColor = color;
    }
  }, false);
}test();


function setColor1green(color){  
    document.getElementById("table1").style.backgroundColor=color;
    window.localStorage.setItem("t", "green");
};

function setColor1red(color){  
    document.getElementById("table1").style.backgroundColor=color;
    window.localStorage.setItem("t", "red");
};

function test2(){
  var t2 = document.getElementById("table2");
  window.addEventListener("load", function test2(){
    var color = window.localStorage.getItem("t2");
    if(color == 'undefined'){
      table2.style.backgroundColor = "red";
    }else if(color == "green"){
      table2.style.backgroundColor = color;
    }
  }, false);
}test2();


function setColor2green(color){  
    document.getElementById("table2").style.backgroundColor=color;
    window.localStorage.setItem("t2", "green");
};

function setColor2red(color){  
    document.getElementById("table2").style.backgroundColor=color;
    window.localStorage.setItem("t2", "red");
};

function test3(){
  var t3 = document.getElementById("table3");
  window.addEventListener("load", function test3(){
    var color = window.localStorage.getItem("t3");
    if(color == 'undefined'){
      table3.style.backgroundColor = "red";
    }else if(color == "green"){
      table3.style.backgroundColor = color;
    }
  }, false);
}test3();


function setColor3green(color){  
    document.getElementById("table3").style.backgroundColor=color;
    window.localStorage.setItem("t3", "green");
};

function setColor3red(color){  
    document.getElementById("table3").style.backgroundColor=color;
    window.localStorage.setItem("t3", "red");
};

function test4(){
  var t4 = document.getElementById("table4");
  window.addEventListener("load", function test4(){
    var color = window.localStorage.getItem("t4");
    if(color == 'undefined'){
      table4.style.backgroundColor = "red";
    }else if(color == "green"){
      table4.style.backgroundColor = color;
    }
  }, false);
}test4();


function setColor4green(color){  
    document.getElementById("table4").style.backgroundColor=color;
    window.localStorage.setItem("t4", "green");
};

function setColor4red(color){  
    document.getElementById("table4").style.backgroundColor=color;
    window.localStorage.setItem("t4", "red");
};

function test5(){
  var t5 = document.getElementById("table5");
  window.addEventListener("load", function test5(){
    var color = window.localStorage.getItem("t5");
    if(color == 'undefined'){
      table5.style.backgroundColor = "red";
    }else if(color == "green"){
      table5.style.backgroundColor = color;
    }
  }, false);
}test5();


function setColor5green(color){  
    document.getElementById("table5").style.backgroundColor=color;
    window.localStorage.setItem("t5", "green");
};

function setColor5red(color){  
    document.getElementById("table5").style.backgroundColor=color;
    window.localStorage.setItem("t5", "red");
};

function test6(){
  var t6 = document.getElementById("table6");
  window.addEventListener("load", function test6(){
    var color = window.localStorage.getItem("t6");
    if(color == 'undefined'){
      table6.style.backgroundColor = "red";
    }else if(color == "green"){
      table6.style.backgroundColor = color;
    }
  }, false);
}test6();


function setColor6green(color){  
    document.getElementById("table6").style.backgroundColor=color;
    window.localStorage.setItem("t6", "green");
};

function setColor6red(color){  
    document.getElementById("table6").style.backgroundColor=color;
    window.localStorage.setItem("t6", "red");
};

function test7(){
  var t7 = document.getElementById("table7");
  window.addEventListener("load", function test7(){
    var color = window.localStorage.getItem("t7");
    if(color == 'undefined'){
      table7.style.backgroundColor = "red";
    }else if(color == "green"){
      table7.style.backgroundColor = color;
    }
  }, false);
}test7();


function setColor7green(color){  
    document.getElementById("table7").style.backgroundColor=color;
    window.localStorage.setItem("t7", "green");
};

function setColor7red(color){  
    document.getElementById("table7").style.backgroundColor=color;
    window.localStorage.setItem("t7", "red");
};

function test8(){
  var t8 = document.getElementById("table8");
  window.addEventListener("load", function test8(){
    var color = window.localStorage.getItem("t8");
    if(color == 'undefined'){
      table8.style.backgroundColor = "red";
    }else if(color == "green"){
      table8.style.backgroundColor = color;
    }
  }, false);
}test8();


function setColor8green(color){  
    document.getElementById("table8").style.backgroundColor=color;
    window.localStorage.setItem("t8", "green");
};

function setColor8red(color){  
    document.getElementById("table8").style.backgroundColor=color;
    window.localStorage.setItem("t8", "red");
};

function test9(){
  var t9 = document.getElementById("table9");
  window.addEventListener("load", function test9(){
    var color = window.localStorage.getItem("t9");
    if(color == 'undefined'){
      table9.style.backgroundColor = "red";
    }else if(color == "green"){
      table9.style.backgroundColor = color;
    }
  }, false);
}test9();


function setColor9green(color){  
    document.getElementById("table9").style.backgroundColor=color;
    window.localStorage.setItem("t9", "green");
};

function setColor9red(color){  
    document.getElementById("table9").style.backgroundColor=color;
    window.localStorage.setItem("t9", "red");
};



</script>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>MyCafe <span>Tables</span></h3>
      </div>

    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="pictures/pp.jpg" class="profile_image">
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
       <form method="post" id="frm1">
        <table>
          
          <tr style="height: 45px;">
            <th colspan="7">MyCafe Tables</th>
          </tr>

          <tr style="height: 60px;">
            <th>table number </th>
            <th colspan="2" id="table1">1</th>
            <th colspan="2" id="table2">2</th>
            <th colspan="2" id="table3">3</th>
          </tr>

          <tr style="height: 60px;">
            <th>Table Total in LBP</th>
            <th colspan="2"><?php   
              $table_total1= $con->query("SELECT * FROM tables Where table_id = '1' ");
              while($row = mysqli_fetch_array($table_total1))
              { echo $row['table_total'];}?></th>
            <th colspan="2"><?php   
              $table_total1= $con->query("SELECT * FROM tables Where table_id = '2' ");
              while($row = mysqli_fetch_array($table_total1))
              { echo $row['table_total'];}?></th>
            <th colspan="2"><?php   
              $table_total1= $con->query("SELECT * FROM tables Where table_id = '3' ");
              while($row = mysqli_fetch_array($table_total1))
              { echo $row['table_total'];}?></th>
          </tr>

          <tr>
            <th>Customer Payed</th>
            <th colspan="2"><input type="number" name="customer_payed1" id="customer_payed" placeholder="how much ?"></th>
            <th colspan="2"><input type="number" name="customer_payed2" id="customer_payed" placeholder="how much ?"></th>
            <th colspan="2"><input type="number" name="customer_payed3" id="customer_payed" placeholder="how much ?"></th>
          </tr>

           <tr>
            <th>Return</th>
            <th colspan="2" style="background-color: #CFC0BD;height: 70px;">
             <?php
            	if (isset($_POST['closetable1'])) {
                
            }echo $_SESSION['return1'];
			?> 
			</th>
            <th colspan="2" style="background-color: #CFC0BD;height: 70px;"><?php
            	if (isset($_POST['closetable2'])) {
              		
          		} echo $_SESSION['return2'];
          		
			?></th>
            <th colspan="2" style="background-color: #CFC0BD;height: 70px;"><?php
            	if (isset($_POST['closetable3'])) {
              		
          		} echo $_SESSION['return3'];
          		
			?></th>
          </tr>

          <tr style="height: 60px;">
            <th>Table Status</th>
            <th><input type="submit" name="open-table-btn1" id="open-table-btn" onclick="setColor1green('#65C868')" value="Open Table"></th>
            <th><input type="submit" id="closebtn" name="closetable1" value="Close Table" onclick="setColor1red('#B02A2A')"> </th>
            <th><input type="submit" name="open-table-btn2" id="open-table-btn" onclick="setColor2green('#65C868')" value="Open Table"></th>
            <th><input type="submit" id="closebtn" name="closetable2" value="Close Table" onclick="setColor2red('#B02A2A')"> </th>
            <th><input type="submit" name="open-table-btn3" id="open-table-btn" onclick="setColor3green('#65C868')" value="Open Table"></th>
            <th><input type="submit" id="closebtn" name="closetable3" value="Close Table" onclick="setColor3red('#B02A2A')"> </th>
          </tr>
            <tr style=" background-color: red;">
              <th>Table Details </th>
              <th colspan="2" id="tabledetailscell"> <a href="tables/tabledetails1.php">show table 1 details</a> </th>
              <th colspan="2" id="tabledetailscell"> <a href="tables/tabledetails2.php">show table 2 details</a> </th>
              <th colspan="2" id="tabledetailscell"> <a href="tables/tabledetails3.php">show table 3 details</a> </th>
            </tr>
        </table>

      </div>
      </section>
      <br><br><br><br>
      <div class="card">

                <table>
          
          <tr style="height: 45px;">
            <th colspan="7">MyCafe Tables</th>
          </tr>

          <tr style="height: 60px;">
            <th>table number</th>
            <th colspan="2" id="table4">4</th>
            <th colspan="2" id="table5">5</th>
            <th colspan="2" id="table6">6</th>
          </tr>

          <tr style="height: 60px;">
            <th>Table Total in LBP</th>
            <th colspan="2"><?php   
              $table_total1= $con->query("SELECT * FROM tables Where table_id = '4' ");
              while($row = mysqli_fetch_array($table_total1))
              { echo $row['table_total'];}?></th>
            <th colspan="2"><?php   
              $table_total1= $con->query("SELECT * FROM tables Where table_id = '5' ");
              while($row = mysqli_fetch_array($table_total1))
              { echo $row['table_total'];}?></th>
            <th colspan="2"><?php   
              $table_total1= $con->query("SELECT * FROM tables Where table_id = '6' ");
              while($row = mysqli_fetch_array($table_total1))
              { echo $row['table_total'];}?></th>
          </tr>

           <tr>
            <th>Customer Payed</th>
            <th colspan="2"><input type="number" name="customer_payed4" id="customer_payed" placeholder="how much ?"></th>
            <th colspan="2"><input type="number" name="customer_payed5" id="customer_payed" placeholder="how much ?"></th>
            <th colspan="2"><input type="number" name="customer_payed6" id="customer_payed" placeholder="how much ?"></th>
          </tr>

           <tr>
            <th>Return</th>
            <th colspan="2" style="background-color: #CFC0BD;height: 70px;"><?php
            	if (isset($_POST['closetable4'])) {
              		
          		} echo $_SESSION['return4'];
          		
			?></th>
            <th colspan="2" style="background-color: #CFC0BD;height: 70px;"><?php
            	if (isset($_POST['closetable5'])) {
              		
          		} echo $_SESSION['return5'];
          		
			?></th>
            <th colspan="2" style="background-color: #CFC0BD;height: 70px;"><?php
            	if (isset($_POST['closetable6'])) {
              		
          		} echo $_SESSION['return6'];
          		
			?></th>
          </tr>

          <tr style="height: 60px;">
            <th>Table Status</th>
            <th><input type="submit" name="open-table-btn4" id="open-table-btn" onclick="setColor4green('#65C868')" value="Open Table"></th>
           <th><input type="submit" id="closebtn" name="closetable4" value="Close Table" onclick="setColor4red('#B02A2A')"> </th>
            <th><input type="submit" name="open-table-btn5" id="open-table-btn" onclick="setColor5green('#65C868')" value="Open Table"></th>
            <th><input type="submit" id="closebtn" name="closetable5" value="Close Table" onclick="setColor5red('#B02A2A')"> </th>
            <th><input type="submit" name="open-table-btn6" id="open-table-btn" onclick="setColor6green('#65C868')" value="Open Table"></th>
            <th><input type="submit" id="closebtn" name="closetable6" value="Close Table" onclick="setColor6red('#B02A2A')"> </th>
          </tr>
          <tr style=" background-color: red;">
              <th>Table Details</th>
              <th colspan="2" id="tabledetailscell"> <a href="tables/tabledetails4.php">show table 4 details</a> </th>
              <th colspan="2" id="tabledetailscell"> <a href="tables/tabledetails5.php">show table 5 details</a> </th>
              <th colspan="2" id="tabledetailscell"> <a href="tables/tabledetails6.php">show table 6 details</a> </th>
            </tr>
        </table>
      </div>
      <br><br><br><br>
      <div class="card">
                <table>
          
          <tr style="height: 45px;">
            <th colspan="7">MyCafe Tables</th>
          </tr>

          <tr style="height: 60px;">
            <th>table number</th>
            <th colspan="2" id="table7">7</th>
            <th colspan="2" id="table8">8</th>
            <th colspan="2" id="table9">9</th>
          </tr>

          <tr style="height: 60px;">
            <th>Table Total in LBP</th>
            <th colspan="2"><?php   
              $table_total1= $con->query("SELECT * FROM tables Where table_id = '7' ");
              while($row = mysqli_fetch_array($table_total1))
              { echo $row['table_total'];}?></th>
            <th colspan="2"><?php   
              $table_total1= $con->query("SELECT * FROM tables Where table_id = '8' ");
              while($row = mysqli_fetch_array($table_total1))
              { echo $row['table_total'];}?></th>
            <th colspan="2"><?php   
              $table_total1= $con->query("SELECT * FROM tables Where table_id = '9' ");
              while($row = mysqli_fetch_array($table_total1))
              { echo $row['table_total'];}?></th>
          </tr>

          <tr>
            <th>Customer Payed</th>
            <th colspan="2"><input type="number" name="customer_payed7" id="customer_payed" placeholder="how much ?"></th>
            <th colspan="2"><input type="number" name="customer_payed8" id="customer_payed" placeholder="how much ?"></th>
            <th colspan="2"><input type="number" name="customer_payed9" id="customer_payed" placeholder="how much ?"></th>
          </tr>

           <tr>
            <th>Return</th>
            <th colspan="2" style="background-color: #CFC0BD;height: 70px;"><?php
            	if (isset($_POST['closetable7'])) {
              		
          		} echo $_SESSION['return7'];
          		
			?></th>
            <th colspan="2" style="background-color: #CFC0BD;height: 70px;"><?php
            	if (isset($_POST['closetable8'])) {
              		
          		} echo $_SESSION['return8'];
          		
			?></th>
            <th colspan="2" style="background-color: #CFC0BD;height: 70px;"><?php
            	if (isset($_POST['closetable9'])) {
              		
          		} echo $_SESSION['return9'];
          		
			?></th>
          </tr>

          <tr style="height: 60px;">
            <th>Table Status</th>
            <th><input type="submit" name="open-table-btn7" id="open-table-btn" onclick="setColor7green('#65C868')" value="Open Table"></th>
            <th><input type="submit" id="closebtn" name="closetable7" value="Close Table" onclick="setColor7red('#B02A2A')"> </th>
            <th><input type="submit" name="open-table-btn8" id="open-table-btn" onclick="setColor8green('#65C868')" value="Open Table"></th>
            <th><input type="submit" id="closebtn" name="closetable8" value="Close Table" onclick="setColor8red('#B02A2A')"> </th>
            <th><input type="submit" name="open-table-btn9" id="open-table-btn" onclick="setColor9green('#65C868')" value="Open Table"></th>
            <th><input type="submit" id="closebtn" name="closetable9" value="Close Table" onclick="setColor9red('#B02A2A')"> </th>
          </tr>
          <tr style=" background-color: red;">
              <th>Table Details</th>
              <th colspan="2" id="tabledetailscell"> <a href="tables/tabledetails7.php">show table 7 details</a> </th>
              <th colspan="2" id="tabledetailscell"> <a href="tables/tabledetails8.php">show table 8 details</a> </th>
              <th colspan="2" id="tabledetailscell"> <a href="tables/tabledetails9.php">show table 9 details</a> </th>
            </tr>
        </table>
      </form>
        <br><br><br><br>
      </div>
    </div>





  </body>
</html>