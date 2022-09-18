<?php
require '../db.php';

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['logged_in'])) {
  header('Location: index.php');
  exit;
}
?>

<?php

  //get items prices

  $coffee = $con->query("SELECT * FROM products WHERE id = '1' ");
  while ($row = mysqli_fetch_array($coffee)) {
    $coffeeprice = $row['price'];
    $coffeename = $row['name'];


  }

  $tea = $con->query("SELECT * FROM products WHERE id = '2' ");
  while ($row = mysqli_fetch_array($tea)) {
    $teaprice = $row['price'];
  }

  $nescafe = $con->query("SELECT * FROM products WHERE id = '3' ");
  while ($row = mysqli_fetch_array($nescafe)) {
    $nescafeprice = $row['price'];
  }

  $cappucino = $con->query("SELECT * FROM products WHERE id = '4' ");
  while ($row = mysqli_fetch_array($cappucino)) {
    $cappucinoprice = $row['price'];
  }

  $zhourat = $con->query("SELECT * FROM products WHERE id = '5' ");
  while ($row = mysqli_fetch_array($zhourat)) {
    $zhouratprice = $row['price'];
  }

  $ginger = $con->query("SELECT * FROM products WHERE id = '6' ");
  while ($row = mysqli_fetch_array($ginger)) {
    $gingerprice = $row['price'];
  }

  $lemon = $con->query("SELECT * FROM products WHERE id = '7' ");
  while ($row = mysqli_fetch_array($lemon)) {
    $lemonprice = $row['price'];
  }

  $lemonade = $con->query("SELECT * FROM products WHERE id = '8' ");
  while ($row = mysqli_fetch_array($lemonade)) {
    $lemonadeprice = $row['price'];
  }

  $carrot = $con->query("SELECT * FROM products WHERE id = '9' ");
  while ($row = mysqli_fetch_array($carrot)) {
    $carrotprice = $row['price'];
  }

  $sevenup = $con->query("SELECT * FROM products WHERE id = '10' ");
  while ($row = mysqli_fetch_array($sevenup)) {
    $sevenupprice = $row['price'];
  }

  $pepsi = $con->query("SELECT * FROM products WHERE id = '11' ");
  while ($row = mysqli_fetch_array($pepsi)) {
    $pepsiprice = $row['price'];
  }

  $mirinda = $con->query("SELECT * FROM products WHERE id = '12' ");
  while ($row = mysqli_fetch_array($mirinda)) {
    $mirindaprice = $row['price'];
  }

  $xtrapineapple = $con->query("SELECT * FROM products WHERE id = '13' ");
  while ($row = mysqli_fetch_array($xtrapineapple)) {
    $xtrapineappleprice = $row['price'];
  }

  $ictpassionfruits = $con->query("SELECT * FROM products WHERE id = '14' ");
  while ($row = mysqli_fetch_array($ictpassionfruits)) {
    $ictpassionfruitsprice = $row['price'];
  }

  $ictpeach = $con->query("SELECT * FROM products WHERE id = '15' ");
  while ($row = mysqli_fetch_array($ictpeach)) {
    $ictpeachprice = $row['price'];
  }

  $ampblue = $con->query("SELECT * FROM products WHERE id = '16' ");
  while ($row = mysqli_fetch_array($ampblue)) {
    $ampblueprice = $row['price'];
  }

  $xxl = $con->query("SELECT * FROM products WHERE id = '17' ");
  while ($row = mysqli_fetch_array($xxl)) {
    $xxlprice = $row['price'];
  }

  $mexican = $con->query("SELECT * FROM products WHERE id = '18' ");
  while ($row = mysqli_fetch_array($mexican)) {
    $mexicanprice = $row['price'];
  }

  $smallwater = $con->query("SELECT * FROM products WHERE id = '19' ");
  while ($row = mysqli_fetch_array($smallwater)) {
    $smallwaterprice = $row['price'];
  }

  $m3assaltfe7 = $con->query("SELECT * FROM products WHERE id = '20' ");
  while ($row = mysqli_fetch_array($m3assaltfe7)) {
    $m3assaltfe7price = $row['price'];
  }

  $m3assalna3na3w7amod = $con->query("SELECT * FROM products WHERE id = '21' ");
  while ($row = mysqli_fetch_array($m3assalna3na3w7amod)) {
    $m3assalna3na3w7amodprice = $row['price'];
  }

  $m3assalna3na3w3lkeh = $con->query("SELECT * FROM products WHERE id = '22' ");
  while ($row = mysqli_fetch_array($m3assalna3na3w3lkeh)) {
    $m3assalna3na3w3lkehprice = $row['price'];
  }

  $rasjabali = $con->query("SELECT * FROM products WHERE id = '23' ");
  while ($row = mysqli_fetch_array($rasjabali)) {
    $rasjabaliprice = $row['price'];
  }

  $nuts = $con->query("SELECT * FROM products WHERE id = '24' ");
  while ($row = mysqli_fetch_array($nuts)) {
    $nutsprice = $row['price'];
  }

  $ka3keh = $con->query("SELECT * FROM products WHERE id = '25' ");
  while ($row = mysqli_fetch_array($ka3keh)) {
    $ka3kehprice = $row['price'];
  }

  $ka3kehwkhodra = $con->query("SELECT * FROM products WHERE id = '26' ");
  while ($row = mysqli_fetch_array($ka3kehwkhodra)) {
    $ka3kehwkhodraprice = $row['price'];
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
    <link rel="stylesheet" type="text/css" href="../style/tablesstyle.css">
    <link rel="stylesheet" type="text/css" href="tablesdescriptionsstyles.css">
<style>
button {
  display: inline-block;
  height: 75px;
  width: 100%;
  cursor: pointer;
  border: none;
}

#open-table-btn {
  background-color: #65C868;
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
        <h3>MyCafe <span>Tables</span></h3>
      </div>

    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="../pictures/pp.jpg" class="profile_image">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
         <a href="../stock.php"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="../tables.php"><i class="fas fa-edit"></i><span>Tables</span></a>
        <a href="../customers.php"><i class="fas fa-users"></i><span>Customers</span></a>
        <a href="../reminder.php"><i class="far fa-bell"></i><span>Reminder</span></a>
        <a href="../statistics.php"><i class="fas fa-chart-line"></i><span>Statistics</span></a>
        <a href="../changestock.php"><i class="fas fa-sliders-h"></i><span>change stock</span></a>
        <a href="../logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="../pictures/pp.jpg" class="profile_image">
        <br>
        <h4>MyCafe Admin</h4>
      </div>
      <a href="../stock.php"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="../tables.php"><i class="fas fa-edit"></i><span>Tables</span></a>
        <a href="../customers.php"><i class="fas fa-users"></i><span>Customers</span></a>
        <a href="../reminder.php"><i class="far fa-bell"></i><span>Reminder</span></a>
        <a href="../statistics.php"><i class="fas fa-chart-line"></i><span>Statistics</span></a>
        <a href="../changestock.php"><i class="fas fa-sliders-h"></i><span>change stock</span></a>
        <a href="../logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <section class="section" style="max-width: 1920px;">
      
      <div class="card">
       

        <table id="table1">
          <tr id="tr1">
            <td colspan="3" id="td1" style="background-image: url('../pictures/Logo.jpeg'); background-repeat: no-repeat; height: 150px;background-position: left;
  font-family: 'Roboto' , sans-serif;
  margin: 0;
    text-transform: uppercase;
    font-size: 20px;
    font-weight: 900;">
              <center>MyCafe Invoice</center>
              <center>Table #5<center>
            </td>
          </tr>
           <tr id="tr1">
            <th id="th1">Items On Table</th>
            <th id="th1">Quantity</th>
            <th id="th1">Items Price</th>
          </tr>
          
          <?php
          $sql = $con->query("SELECT * FROM table5description");

          while ($row = mysqli_fetch_array($sql)) {
            if ($row['item_quantity'] != 0) {
              echo "<tr id='tr1'>";
          echo "<th id='th1'>";
          echo $row['item_name'];
          echo "</th>";
          echo "<th id='th1'>";
          echo $row['item_quantity'];
          echo "</th>";
          echo "<th id='th1'>";
          echo $row['item_price'];
          echo "</th>";
          echo "</tr>";
            }
          
          }
          ?>
          <tr id="tr1">
            <th colspan="2" id="th1">Total</th>
            
            <th>
              <?php 
              $sql = $con->query("SELECT * FROM tables WHERE table_id = '5'"); 
              while($row = mysqli_fetch_array($sql))
                {echo $row['table_total'];} 
              ?>    
            </th>
          </tr>
        </table>





      </div>
    </div>





  </body>
</html>