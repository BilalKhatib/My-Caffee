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
$date1 = date("d/m/y/h/m/s");
if (isset($_POST['add_reminder_btn'])) {
	$reminder_added_succesfully = "<div class='popup center active '>
              <div class='icon'>
              <i class='fa fa-check'></i>
              </div>
              <div class='title'>
              Success!!
              </div>
              <div class='description'>
              Reminder Added Succesfully , <br>
              Please Click On Dimiss To Hide This Message !
              </div>
              <div class='dismiss-btn'>
              <button id='dismiss-popup-btn'>
              Dismiss
              </button>
              </div>
              </div>";
  $reminder = $_POST['reminder'];
  $add_reminder = $con->query("INSERT INTO reminders (reminder , created_at) VALUES ('$reminder' , '$date1')");
  $con->query($add_reminder); 

  echo $reminder_added_succesfully;
  
}




if (isset($_POST['remove_reminder_btn'])) {
  $reminder_id = $_POST['remove_reminder'];
  $remove_reminder = $con->query("DELETE FROM reminders WHERE id = '$reminder_id'");
  $con->query($remove_reminder); 
  

  	$reminder_removed_succesfully = "<div class='popup1 center1 active1 '>
              <div class='icon1'>
              <i class='fa fa-check'></i>
              </div>
              <div class='title1'>
              Success!!
              </div>
              <div class='description1'>
              Reminder Deleted Succesfully , <br>
              Please Click On Dimiss To Hide This Message !
              </div>
              <div class='dismiss-btn1'>
              <button id='dismiss-popup-btn1'>
              Dismiss
              </button>
              </div>
              </div>";

              echo $reminder_removed_succesfully;

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cafe Reminder</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/stockstyle.css">
    <style>
    	body {
    		width: 80%;
    	}



table {
  width : 1000px;
}

#reminder {
  width: 95%;
  height: 150px;
  border: none;
  outline: none;
  font-size: 20px;
}

#add_reminder_btn {
  height: 60px;
  width :100%;
  display: inline-block;
  background-color: green;
  color: white;
  float: right;
  cursor: pointer;
  border: none;
  outline: none;
}

#remove_reminder_div {
  float: right;
}

#remove_reminder {
  width: 95%;
  border: none;
  outline: none;
  display: inline-block;
height: 100px;
font-size: 18px;
height: 150px;
}

#remove_reminder_btn {
   height: 60px;
  width :100%;
  display: inline-block;
  background-color: red;
  color: white;
  float: right;
  cursor: pointer;
  border: none;
  outline: none;
}

#reminder-cell {
  width: 50%;
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
  border: 1px solid #cccccc;
  padding: 8px;
   border : 1px solid black;
}

#tr1:nth-child(even) {
  background-color: #cccccc;
   border : 1px solid black;
}


/*reminder added succesfully message design*/




@import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";

body {
  background:#ddd;
  font-family:"Raleway";
}
.center {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.popup {
  width:350px;
  height:320px;
  padding:30px 20px;
  background:#348644;
  border-radius:10px;
  box-sizing:border-box;
  z-index:2;
  text-align:center;
  opacity:0;
  color: white;
  top:-200%;
  transform:translate(-50%,-50%) scale(0.5);
  transition: opacity 300ms ease-in-out,
              top 1000ms ease-in-out,
              transform 1000ms ease-in-out;
}
.popup.active {
  opacity:1;
  top:50%;
  transform:translate(-50%,-50%) scale(1);
  transition: transform 300ms cubic-bezier(0.18,0.89,0.43,1.19);
}

.popup .icon {
  margin:5px 0px;
  width:50px;
  height:50px;
  border:2px solid #34f234;
  text-align:center;
  display:inline-block;
  border-radius:50%;
  line-height:60px;
}
.popup .icon i.fa {
  font-size:30px;
  color:#34f234;
} 
.popup .title {
  margin:5px 0px;
  font-size:30px;
  font-weight:600;
  color: white;
}
.popup .description {
  color:white;
  font-size:15px;
  padding:5px;
}
.popup .dismiss-btn {
  margin-top:15px;
}
.popup .dismiss-btn button {
  padding:10px 20px;
  background:#111;
  color:#f5f5f5;
  border:2px solid #111;
  font-size:16px;
  font-weight:600;
  outline:none;
  border-radius:10px;
  cursor:pointer;
  transition: all 300ms ease-in-out;
}
.popup .dismiss-btn button:hover {
  color:#111;
  background:#f5f5f5;
}
.popup > div {
  position:relative;
  top:10px;
  opacity:0;
}
.popup.active > div {
  top:0px;
  opacity:1;
}
.popup.active .icon {
  transition: all 300ms ease-in-out 250ms;
}
.popup.active .title {
  transition: all 300ms ease-in-out 300ms;
}
.popup.active .description {
  transition: all 300ms ease-in-out 350ms;
}
.popup.active .dismiss-btn {
  transition: all 300ms ease-in-out 400ms;
}

/*reminder Deleted succesfully message design*/




@import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";

body {
  background:#ddd;
  font-family:"Raleway";
}
.center1 {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.popup1 {
  width:350px;
  height:320px;
  padding:30px 20px;
  background:#C41940;
  border-radius:10px;
  box-sizing:border-box;
  z-index:2;
  text-align:center;
  opacity:0;
  color: white;
  top:-200%;
  transform:translate(-50%,-50%) scale(0.5);
  transition: opacity 300ms ease-in-out,
              top 1000ms ease-in-out,
              transform 1000ms ease-in-out;
}
.popup1.active1 {
  opacity:1;
  top:50%;
  transform:translate(-50%,-50%) scale(1);
  transition: transform 300ms cubic-bezier(0.18,0.89,0.43,1.19);
}

.popup1 .icon1 {
  margin:5px 0px;
  width:50px;
  height:50px;
  border:2px solid white;
  color: white;
  text-align:center;
  display:inline-block;
  border-radius:50%;
  line-height:60px;
}
.popup1 .icon1 i.fa {
  font-size:30px;
  color:white;
} 
.popup1 .title1 {
  margin:5px 0px;
  font-size:30px;
  font-weight:600;
  color: white;
}
.popup1 .description1 {
  color:white;
  font-size:15px;
  padding:5px;
}
.popup1 .dismiss-btn1 {
  margin-top:15px;
}
.popup1 .dismiss-btn1 button {
  padding:10px 20px;
  background:#111;
  color:#f5f5f5;
  border:2px solid #111;
  font-size:16px;
  font-weight:600;
  outline:none;
  border-radius:10px;
  cursor:pointer;
  transition: all 300ms ease-in-out;
}
.popup1 .dismiss-btn1 button:hover {
  color:#111;
  background:#f5f5f5;
}
.popup1 > div {
  position:relative;
  top:10px;
  opacity:0;
}
.popup1.active1 > div {
  top:0px;
  opacity:1;
}
.popup1.active1 .icon1 {
  transition: all 300ms ease-in-out 250ms;
}
.popup1.active1 .title1 {
  transition: all 300ms ease-in-out 300ms;
}
.popup1.active1 .description1 {
  transition: all 300ms ease-in-out 350ms;
}
.popup1.active1 .dismiss-btn1 {
  transition: all 300ms ease-in-out 400ms;
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
        <h3>MyCafe <span>Reminder</span></h3>

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
       
       <form method="post" id="form" name="form">
      	
          <table>
            <tr>
            <th><h2>Add A New Reminder Here</h2></th>
            <th><h3>Remove Reminder Here</h3></th>
            </tr>
            <tr>
              <td><input type="text" name="reminder" id="reminder" placeholder="Add To Reminder ..."></td>
              <td><input type="number" name="remove_reminder" id="remove_reminder" placeholder="Reminder ID"></td>
            </tr>
            <tr>

            

              	<td style="background-color: green;">
              	<input type="submit" name="add_reminder_btn" id="add_reminder_btn" value="ADD Reminder">
          		</td>
               <!-- <button type="submit" name="add_reminder_btn" id="addreminder" value="ADD">ADD</button>  -->
                

              <td style="background-color: red;">
                <input type="submit" name="remove_reminder_btn" id="remove_reminder_btn" value="Remove Reminder">
              </td>
            </tr>
          </table>

          
          <br><br><br>
          <table id="table1">
            <tr id="tr1">
              <th colspan="3" id="th1"><button id="check" style="width: 30%;height: 20px;">test</button></th>
            </tr>
            <tr id="tr1">
              <th id="th1"><h4>Reminder ID</h4></th>
              <th id="th1" id="reminder-cell"><h4>Reminder</h4></h>
              <th id="th1"><h4>Date Created</h4></th>
            </tr>
            
            <?php

            $get_reminder_db = $con->query("SELECT * FROM reminders");
            while ($row = mysqli_fetch_array($get_reminder_db)) {
            	$reminder_id = $row['id'];
            	$reminder = $row['reminder'];
            	$created_at = $row['created_at'];
            	echo "<tr id='tr1'>";
            	echo "<th id='th1'>";
            	echo $reminder_id;
            	echo "</th>";
            	echo "<th id='th1'>";
            	echo $reminder;
            	echo "</th>";
            	echo "<th id='th1'>";
            	echo $created_at;
            	echo "</th>";
            	echo "</tr>";
            }
            ?>
              
            
          </table>


</form>
</div>


       


              
        
     	</section>
      
     </div>
              	<script type="text/javascript">
	function reminderadded(){
  	document.getElementsByClassName("popup")[0].classList.add("active");
  	document.location.href = "reminder.php?reminder_added";
  	
  };

 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
</script>

              	<script type="text/javascript">
	function reminderadded(){
  	document.getElementsByClassName("popup")[0].classList.add("active");
  	
  };

 
document.getElementById("dismiss-popup-btn1").addEventListener("click",function(){
  document.getElementsByClassName("popup1")[0].classList.remove("active1");
});
</script>
<!--
<script type="text/javascript">
	document.getElementById("add_reminder_btn").addEventListener("click",function(){
  	document.getElementsByClassName("popup")[0].classList.add("active");
  	document.frm.submit();
  
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
</script>
-->
  </body>
</html>