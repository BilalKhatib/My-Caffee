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
//add customers
if (isset($_POST['add_customer'])) {


  $customer_name = $_POST['customer_name'];
  $customer_phone_number = $_POST['customer_phone_number'];

  if (strlen($customer_phone_number) == 8 ) {

    $check_customer_phone_number = $con->query("SELECT * FROM customers WHERE customer_phone_number = '$customer_phone_number'");
    if ($check_customer_phone_number->num_rows > 0 ) {
      //phone number already exist
      header("Location: customers.php?customer_with_that_phone_number_already_exist");
    }else{
      $check_customer_name = $con->query("SELECT * FROM customers WHERE customer_name = '$customer_name'");
      if ($check_customer_name->num_rows > 0) {
        //customer with that name already exist
        header("Location: customers.php?customer_with_that_name_already_exist");
      }else{
    
    $add_customer = $con->query("INSERT INTO customers (customer_name , customer_points , customer_phone_number) VALUES ('$customer_name' , '0' , '$customer_phone_number')");
    $con->query($add_customer);
    //new customer added successfully
    header("Location: customers.php?customer_added_successfully");
  }
  }
}else{
  //phone number length is incorrect
  header("Location: customers.php?phone_number_length_is_incorrect");
    }

}
?>

<?php
//points System
if (isset($_POST['add_points'])) {
  $customer_id = $_POST['customer_id'];
  $sql = $con->query("SELECT * FROM customers WHERE customer_id = '$customer_id'");
  if ($sql->num_rows >= 1) {
     $check_points = $con->query("SELECT customer_points FROM customers Where customer_id = '$customer_id'");
    while ($row = mysqli_fetch_array($check_points)) {
      $old_points = $row['customer_points'];
      $newpoints = $_POST['points'];
      $old_points = $old_points + $newpoints;

      $add_points_to_user = $con->query("UPDATE customers SET customer_points = '$old_points' WHERE customer_id = '$customer_id'");
      $con->query($add_points_to_user);
        $_SESSION['points_added'] = "yes";
        header("Location: customers.php?points_added_to_user_id=$customer_id");
       
    }
    
  }else{
    $_SESSION['points_added'] = "no" ;
    header("Location: customers.php?customer_id_not_found");
  }

}

//remove points from customer

if (isset($_POST['remove_points'])) {
	$customer_id2 = $_POST['customer_id2'];
	$points_to_remove = $_POST['removepoints'];

	$check_points = $con->query("SELECT * FROM customers WHERE customer_id = '$customer_id2'");
	while ($row = mysqli_fetch_array($check_points)) {
		$old_customers_points = $row['customer_points']; 

		$old_customers_points = $old_customers_points - $points_to_remove;

		$update_points = $con->query("UPDATE customers SET customer_points = '$old_customers_points' WHERE customer_id = '$customer_id2' ");
		$con->query($update_points);
	}
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cafe Customers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="style/stockstyle.css">

    <script>
$(document).ready(function(){
  $("#search_bar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#customers_list tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


    <style>
      body {
        width: 80%;
      }



table {
  width : 1000px;
}

#customer_name {
  width: 95%;
  height: 75px;
  border: none;
  outline: none;
  font-size: 20px;
}

#Search {
  width: 95%;
  height: 75px;
  border: none;
  outline: none;
  font-size: 20px;  
}

#customer_phone_number {
  width: 95%;
  height: 75px;
  border: none;
  outline: none;
  font-size: 20px;

}

#Search_Result {
  width: 95%;
  height: 75px;
  border: none;
  outline: none;
  font-size: 20px;  
}

#add_customer {
  height: 60px;
  width :100%;
  display: inline-block;
  background-color: green;
  color: white;
  cursor: pointer;
  border: none;
  outline: none;
}

#customer_id{
  width: 95%;
  height: 75px;
  border: none;
  outline: none;
  font-size: 20px;
  font-family: arial, sans-serif;
}

#points {
  width: 95%;
  height: 75px;
  border: none;
  outline: none;
  font-size: 20px;
  font-family: arial, sans-serif;
}

#Search_btn {
  height: 60px;
  width :100%;
  display: inline-block;
  background-color: green;
  color: white;
  cursor: pointer;
  border: none;
  outline: none;  
}

#add_points {
  height: 60px;
  width :100%;
  display: inline-block;
  background-color: green;
  color: white;
  cursor: pointer;
  border: none;
  outline: none;  
}

#remove_points {
  height: 60px;
  width :100%;
  display: inline-block;
  background-color: red;
  color: white;
  cursor: pointer;
  border: none;
  outline: none;  
}



hr{
  width: 100%;
  border: 1px solid black;
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
        <h3>MyCafe <span>Customers</span></h3>

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
       
       <form method="post" id="frm">
        
          <table>
            <tr>
            <th><h2>Add A New Customer</h2></th>
            <th><h2>Add Points</h2></th>
            <th><h2>Remove Points</h2></th>
            </tr>
            <tr>
              <td>
                <input type="text" name="customer_name" id="customer_name" placeholder="Enter Customer Name ...">
              </td>
              <td>
                <input type="number" name="customer_id" id="customer_id" placeholder="Customer ID" >
              </td>
              <td>
                <input type="number" name="customer_id2" id="customer_id" placeholder="Customer ID" >
              </td>
            </tr>
            <tr>
              <td>
                <input type="number" name="customer_phone_number" id="customer_phone_number" placeholder="Enter Customer Phone Number ..." >
              </td>
              <td>
                <input type="number" name="points" id="points" placeholder="Add Points ( 1000 LBP = 1 point ) ..." >
              </td>   
              <td>
                <input type="number" name="removepoints" id="points" placeholder="Remove Customers Points ..." >
              </td>            
            </tr>
            <tr>
              <td style="background-color: green;">
                <input type="submit" name="add_customer" id="add_customer" value="Add New Customer">
              </td>
              <td style="background-color: green;">
                <input type="submit" name="add_points" id="add_points" value="Add Points">
              </td>
              <td style="background-color: red;">
                <input type="submit" name="remove_points" id="remove_points" value="Remove Points">
              </td>
            </tr>
          </table>
          
          <br><br><br>
         
           <table id="table1">
            <tr id="tr1">
              <th colspan="4" id="th1" style="text-align: left;">
                <h3 style="float: left;">Welcome To Customers Table</h3>
              </th>
            </tr>
            <tr id="tr1">
              <th colspan="4" id="th1">
                <input type="text" name="search_bar" id="search_bar" placeholder="Search Here ..." autocomplete="off" style="float: right; width: 100%;height: 70px;display: inline-block;border: none;outline: none;font-size: 20px;font-family: arial, sans-serif;background-color: transparent;">
              </th>
            </tr>
            <tr>
              <th id="th1"><h4>Customer ID</h4></th>
              <th id="th1"><h4>Customer Name</h4></h>
                <th id="th1"><h4>Customer Points</h4></th>
              <th id="th1"><h4>Customer Phone Number</h4></th>
            </tr>
            
              <tbody id="customers_list">
                <?php
                $get_customers = $con->query("SELECT * FROM customers ORDER BY customer_points DESC");
                while ($row = mysqli_fetch_array($get_customers)) {
                  echo "<tr id='tr1'>";
                  echo "<th id='th1'>";
                  $customer_id = $row['customer_id'];
                  echo $customer_id;
                  echo "</th>"; 
                  echo "<th id='th1'>";
                  $customer_name = $row['customer_name'];
                  echo $customer_name;
                  echo "</th>";
                  echo "<th id='th1'>";
                  $customer_points = $row['customer_points'];
                  echo $customer_points;
                  echo "</th>";   
                  echo "<th id='th1'>";
                  $customer_phone_number = $row['customer_phone_number'];
                  echo $customer_phone_number;
                  echo "</th>";  
                  echo "</tr>";             }
                ?>
              
              
           </tbody>
            
          </table>


</form>



        </div>
        
      </section>
     </div>
       

  </body>
</html>