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

	$result9 = $con->query("SELECT * FROM products WHERE id = '16' ");
      				while($row = mysqli_fetch_array($result9))
					{ 	$amp_blue_quantity1 = $row['quantity'];
						}

$result10 = $con->query("SELECT * FROM products WHERE id = '17' ");
      				while($row = mysqli_fetch_array($result10))
					{ 	$xxl_quantity1 = $row['quantity'];
						}


$result11 = $con->query("SELECT * FROM products WHERE id = '25' ");
      				while($row = mysqli_fetch_array($result11))
					{ 	$ka3keh_quantity1 = $row['quantity'];
						}						

//add items to tables

if (isset($_POST['additemstotable'])) {

	//get table id
	$tableid = $_POST['tableid'];

	//get items quantity
	$coffee_quantity = $_POST['coffeequantity'];
	if (empty($coffee_quantity)) {
		$coffee_quantity = 0 ;
	}
	$tea_quantity = $_POST['teaquantity'];
	if (empty($tea_quantity)) {
		$tea_quantity = 0;
	}
	$nescafe_quantity = $_POST['nescafequantity'];
	if (empty($nescafe_quantity)) {
		$nescafe_quantity = 0;
	}
	$cappucino_quantity = $_POST['cappucinoquantity'];
	if (empty($cappucino_quantity)) {
		$cappucino_quantity = 0;
	}
	$zhourat_quantity = $_POST['zhouratquantity'];
	if (empty($zhourat_quantity)) {
		$zhourat_quantity = 0;
	}
	$ginger_quantity = $_POST['gingerquantity'];
	if (empty($ginger_quantity)) {
		$ginger_quantity = 0;
	}
	$lemon_juice_quantity = $_POST['lemonjuicequantity'];
	if (empty($lemon_juice_quantity)) {
		$lemon_juice_quantity = 0;
	}
	$lemonade_quantity = $_POST['lemonadequantity'];
	if (empty($lemonade_quantity)) {
		$lemonade_quantity = 0;
	}
	$carrot_juice_quantity = $_POST['carrotjuicequantity'];
	if (empty($carrot_juice_quantity)) {
		$carrot_juice_quantity = 0;
	}
	$sevenup_quantity = $_POST['7upquantity'];
	if (empty($sevenup_quantity)) {
		$sevenup_quantity = 0;
	}
	$pepsi_quantity = $_POST['pepsiquantity'];
	if (empty($pepsi_quantity)) {
		$pepsi_quantity = 0;
	}
	$mirinda_quantity = $_POST['mirindaquantity'];
	if (empty($mirinda_quantity)) {
		$mirinda_quantity = 0;
	}
	$xtra_pineapple_quantity = $_POST['xtrapineapplequantity'];
	if (empty($xtra_pineapple_quantity)) {
		$xtra_pineapple_quantity = 0;
	}
	$ict_passion_quantity = $_POST['ictpassionfruitsquantity'];
	if (empty($ict_passion_quantity)) {
		$ict_passion_quantity = 0;
	}
	$ict_peach_quantity = $_POST['ictpeachquantity'];
	if (empty($ict_peach_quantity)) {
		$ict_peach_quantity = 0;
	}
	$amp_blue_quantity = $_POST['ampbluequantity'];
	if (empty($amp_blue_quantity)) {
		$amp_blue_quantity = 0;
	}
	$xxl_quantity = $_POST['xxlquantity'];
	if (empty($xxl_quantity)) {
		$xxl_quantity = 0;
	}
	$mexican_quantity = $_POST['mexicanquantity'];
	if (empty($mexican_quantity)) {
		$mexican_quantity = 0;
	}
	$small_water_quantity = $_POST['smallwaterquantity'];
	if (empty($small_water_quantity)) {
		$small_water_quantity = 0;
	}
	$m3assal_tffe7_quantity = $_POST['m3assaltffe7quantity'];
	if (empty($m3assal_tffe7_quantity)) {
		$m3assal_tffe7_quantity = 0;
	}
	$m3assal_na3na3_w_7amod_quantity = $_POST['m3assalna3na3w7amodquantity'];
	if (empty($m3assal_na3na3_w_7amod_quantity)) {
		$m3assal_na3na3_w_7amod_quantity = 0;
	}
	$m3assal_na3na3_w_3lkeh_quantity = $_POST['m3assalna3na3w3lkehquantity'];
	if (empty($m3assal_na3na3_w_3lkeh_quantity)) {
		$m3assal_na3na3_w_3lkeh_quantity = 0;
	}
	$ras_jabeli_quantity = $_POST['rasjabaliquantity'];
	if (empty($ras_jabeli_quantity)) {
		$ras_jabeli_quantity = 0;
	}
	$nuts_quantity = $_POST['nutsquantity'];
	if (empty($nuts_quantity)) {
		$nuts_quantity = 0;
	}
	$ka3keh_quantity = $_POST['ka3kehquantity'];
	if (empty($ka3keh_quantity)) {
		$ka3keh_quantity = 0;
	}
	$ka3keh_w_khodra_quantity = $_POST['ka3kehwkhodraquantity'];
	if (empty($ka3keh_w_khodra_quantity)) {
		$ka3keh_w_khodra_quantity = 0;
	}
	$m3assal_3lkeh_quantity = $_POST['m3assal3lkehquantity'];
	if (empty($m3assal_3lkeh_quantity)) {
		$m3assal_3lkeh_quantity = 0;
	}
	$cedars_quantity = $_POST['cedarsquantity'];
	if (empty($cedars_quantity)) {
		$cedars_quantity = 0 ;
	}
	$eclair_quantity = $_POST['eclairquantity'];
	if (empty($eclair_quantity)) {
		$eclair_quantity = 0 ;
	}
	$cupcake_quantity = $_POST['cupcakequantity'];
	if (empty($cupcake_quantity)) {
		$cupcake_quantity = 0 ;
	}
	$coconut_quantity = $_POST['coconutquantity'];
	if (empty($coconut_quantity)) {
		$coconut_quantity = 0 ;
	}
	$iced_coffee_quantity = $_POST['icedcoffeequantity'];
	if (empty($iced_coffee_quantity)) {
		$iced_coffee_quantity = 0 ;
	}

	

	//get items prices

	$coffee = $con->query("SELECT * FROM products WHERE id = '1' ");
	while ($row = mysqli_fetch_array($coffee)) {
		$coffeeprice = $row['price'];
		$coffeename = $row['name'];


	}

	$tea = $con->query("SELECT * FROM products WHERE id = '2' ");
	while ($row = mysqli_fetch_array($tea)) {
		$teaprice = $row['price'];
		$teaname = $row['name'];
	}

	$nescafe = $con->query("SELECT * FROM products WHERE id = '3' ");
	while ($row = mysqli_fetch_array($nescafe)) {
		$nescafeprice = $row['price'];
		$nescafename = $row['name'];
	}

	$cappucino = $con->query("SELECT * FROM products WHERE id = '4' ");
	while ($row = mysqli_fetch_array($cappucino)) {
		$cappucinoprice = $row['price'];
		$cappucinoname = $row['name'];
	}

	$zhourat = $con->query("SELECT * FROM products WHERE id = '5' ");
	while ($row = mysqli_fetch_array($zhourat)) {
		$zhouratprice = $row['price'];
		$zhouratname = $row['name'];
	}

	$ginger = $con->query("SELECT * FROM products WHERE id = '6' ");
	while ($row = mysqli_fetch_array($ginger)) {
		$gingerprice = $row['price'];
		$gingername = $row['name'];
	}

	$lemon = $con->query("SELECT * FROM products WHERE id = '7' ");
	while ($row = mysqli_fetch_array($lemon)) {
		$lemonprice = $row['price'];
		$lemonname = $row['name'];
	}

	$lemonade = $con->query("SELECT * FROM products WHERE id = '8' ");
	while ($row = mysqli_fetch_array($lemonade)) {
		$lemonadeprice = $row['price'];
		$lemonadename = $row['name'];
	}

	$carrot = $con->query("SELECT * FROM products WHERE id = '9' ");
	while ($row = mysqli_fetch_array($carrot)) {
		$carrotprice = $row['price'];
		$carrotname = $row['name'];
	}

	$sevenup = $con->query("SELECT * FROM products WHERE id = '10' ");
	while ($row = mysqli_fetch_array($sevenup)) {
		$sevenupprice = $row['price'];
		$sevenupname = $row['name'];
	}

	$pepsi = $con->query("SELECT * FROM products WHERE id = '11' ");
	while ($row = mysqli_fetch_array($pepsi)) {
		$pepsiprice = $row['price'];
		$pepsiname = $row['name'];
	}

	$mirinda = $con->query("SELECT * FROM products WHERE id = '12' ");
	while ($row = mysqli_fetch_array($mirinda)) {
		$mirindaprice = $row['price'];
		$mirindaname = $row['name'];
	}

	$xtrapineapple = $con->query("SELECT * FROM products WHERE id = '13' ");
	while ($row = mysqli_fetch_array($xtrapineapple)) {
		$xtrapineappleprice = $row['price'];
		$xtrapineapplename = $row['name'];
	}

	$ictpassionfruits = $con->query("SELECT * FROM products WHERE id = '14' ");
	while ($row = mysqli_fetch_array($ictpassionfruits)) {
		$ictpassionfruitsprice = $row['price'];
		$ictpassionfruitsname = $row['name'];
	}

	$ictpeach = $con->query("SELECT * FROM products WHERE id = '15' ");
	while ($row = mysqli_fetch_array($ictpeach)) {
		$ictpeachprice = $row['price'];
		$ictpeachname = $row['name'];
	}

	$ampblue = $con->query("SELECT * FROM products WHERE id = '16' ");
	while ($row = mysqli_fetch_array($ampblue)) {
		$ampblueprice = $row['price'];
		$ampbluename = $row['name'];
	}

	$xxl = $con->query("SELECT * FROM products WHERE id = '17' ");
	while ($row = mysqli_fetch_array($xxl)) {
		$xxlprice = $row['price'];
		$xxlname = $row['name'];
	}

	$mexican = $con->query("SELECT * FROM products WHERE id = '18' ");
	while ($row = mysqli_fetch_array($mexican)) {
		$mexicanprice = $row['price'];
		$mexicanname = $row['name'];
	}

	$smallwater = $con->query("SELECT * FROM products WHERE id = '19' ");
	while ($row = mysqli_fetch_array($smallwater)) {
		$smallwaterprice = $row['price'];
		$smallwatername = $row['name'];
	}

	$m3assaltfe7 = $con->query("SELECT * FROM products WHERE id = '20' ");
	while ($row = mysqli_fetch_array($m3assaltfe7)) {
		$m3assaltfe7price = $row['price'];
		$m3ssaltffe7name = $row['name'];
	}

	$m3assalna3na3w7amod = $con->query("SELECT * FROM products WHERE id = '21' ");
	while ($row = mysqli_fetch_array($m3assalna3na3w7amod)) {
		$m3assalna3na3w7amodprice = $row['price'];
		$m3assalna3na3w7amodname = $row['name'];
	}

	$m3assalna3na3w3lkeh = $con->query("SELECT * FROM products WHERE id = '22' ");
	while ($row = mysqli_fetch_array($m3assalna3na3w3lkeh)) {
		$m3assalna3na3w3lkehprice = $row['price'];
		$m3assalna3na3w3lkehname = $row['name'];
	}

	$rasjabali = $con->query("SELECT * FROM products WHERE id = '23' ");
	while ($row = mysqli_fetch_array($rasjabali)) {
		$rasjabaliprice = $row['price'];
		$rasjabaliname = $row['name'];
	}

	$m3assal3lkeh = $con->query("SELECT * FROM products WHERE id = '27' ");
	while ($row = mysqli_fetch_array($m3assal3lkeh)) {
		$m3assal3lkehprice = $row['price'];
		$m3assal3lkehname = $row['name'];
	}

	$cedars = $con->query("SELECT * FROM products WHERE id = '28' ");
	while ($row = mysqli_fetch_array($cedars)) {
		$cedarsprice = $row['price'];
		$cedarsname = $row['name'];
	}

	$nuts = $con->query("SELECT * FROM products WHERE id = '24' ");
	while ($row = mysqli_fetch_array($nuts)) {
		$nutsprice = $row['price'];
		$nutsname = $row['name'];
	}

	$ka3keh = $con->query("SELECT * FROM products WHERE id = '25' ");
	while ($row = mysqli_fetch_array($ka3keh)) {
		$ka3kehprice = $row['price'];
		$ka3kehname = $row['name'];
	}

	$ka3kehwkhodra = $con->query("SELECT * FROM products WHERE id = '26' ");
	while ($row = mysqli_fetch_array($ka3kehwkhodra)) {
		$ka3kehwkhodraprice = $row['price'];
		$ka3kehwkhodraname = $row['name'];
	}

	$eclair = $con->query("SELECT * FROM products WHERE id = '29' ");
	while ($row = mysqli_fetch_array($eclair)) {
		$eclairprice = $row['price'];
		$eclairname = $row['name'];
	}

	$cupcake = $con->query("SELECT * FROM products WHERE id = '30' ");
	while ($row = mysqli_fetch_array($cupcake)) {
		$cupcakeprice = $row['price'];
		$cupcakename = $row['name'];
	}

	$coconut = $con->query("SELECT * FROM products WHERE id = '31' ");
	while ($row = mysqli_fetch_array($coconut)) {
		$coconutprice = $row['price'];
		$coconutname = $row['name'];
	}

	$icedcoffee = $con->query("SELECT * FROM products WHERE id = '32' ");
	while ($row = mysqli_fetch_array($icedcoffee)) {
		$icedcoffeeprice = $row['price'];
		$icedcoffeename = $row['name'];
	}




	//add items to tables and update table total



	$table = $con->query("SELECT * FROM tables WHERE table_id = '$tableid' ");
	while ($row = mysqli_fetch_array($table)) {
		$old_total = $row['table_total'];

		$new_total = $old_total + ((int)$coffee_quantity * (int)$coffeeprice ) + ((int)$tea_quantity * (int)$teaprice ) + ((int)$nescafe_quantity * (int)$nescafeprice ) + ((int)$cappucino_quantity * (int)$cappucinoprice) + ((int)$zhourat_quantity * (int)$zhouratprice) + ((int)$ginger_quantity * (int)$gingerprice)  + ((int)$lemon_juice_quantity * (int)$lemonprice) + ((int)$lemonade_quantity * (int)$lemonadeprice) + ((int)$carrot_juice_quantity * (int)$carrotprice) + ((int)$sevenup_quantity * (int)$sevenupprice) + ((int)$pepsi_quantity * (int)$pepsiprice) + ((int)$mirinda_quantity * (int)$mirindaprice) + ((int)$xtra_pineapple_quantity * (int)$xtrapineappleprice) + ((int)$ict_passion_quantity * (int)$ictpassionfruitsprice) + ((int)$ict_peach_quantity * (int)$ictpeachprice) + ((int)$amp_blue_quantity * (int)$ampblueprice) + ((int)$xxl_quantity * (int)$xxlprice) + ((int)$mexican_quantity * (int)$mexicanprice) + ((int)$small_water_quantity * (int)$smallwaterprice) + ((int)$m3assal_tffe7_quantity * (int)$m3assaltfe7price) + ((int)$m3assal_na3na3_w_7amod_quantity * (int)$m3assalna3na3w7amodprice) + ((int)$m3assal_na3na3_w_3lkeh_quantity * (int)$m3assalna3na3w3lkehprice) + ((int)$ras_jabeli_quantity * (int)$rasjabaliprice) + ((int)$m3assal_3lkeh_quantity * (int)$m3assal3lkehprice) + ((int)$cedars_quantity * (int)$cedarsprice)+ ((int)$nuts_quantity * (int)$nutsprice) + ((int)$ka3keh_quantity * (int)$ka3kehprice) + ((int)$ka3keh_w_khodra_quantity * (int)$ka3kehwkhodraprice) + ((int)$eclair_quantity * (int)$eclairprice) + ((int)$cupcake_quantity * (int)$cupcakeprice) + ((int)$coconut_quantity * (int)$coconutprice)+ ((int)$iced_coffee_quantity * (int)$icedcoffeeprice);
		
		


		$result = $con->query("UPDATE tables SET table_total = '$new_total' WHERE table_id = '$tableid' ");
		$con->query($result);

	//add items to table 1 description
		if ($tableid == 1) {
			$coffee_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '1'");
		while($row = mysqli_fetch_array($coffee_on_table1)){
			$old_coffee_quantity = $row['item_quantity'];
			$old_coffee_quantity = (int)$old_coffee_quantity + (int)$coffee_quantity;
			$update_coffee_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_coffee_quantity' WHERE item_id = '1'");

			$con->query($update_coffee_quantity);
		}	
		$tea_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '2'");
		while($row = mysqli_fetch_array($tea_on_table1)){
			$old_tea_quantity = $row['item_quantity'];
			$old_tea_quantity = (int)$old_tea_quantity + (int)$tea_quantity;
			$update_tea_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_tea_quantity' WHERE item_id = '2'");

			$con->query($update_tea_quantity);
		}
		$nescafe_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '3'");
		while($row = mysqli_fetch_array($nescafe_on_table1)){
			$old_nescafe_quantity = $row['item_quantity'];
			$old_nescafe_quantity = (int)$old_nescafe_quantity + (int)$nescafe_quantity;
			$update_nescafe_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_nescafe_quantity' WHERE item_id = '3'");

			$con->query($update_nescafe_quantity);
		}
		$cappucino_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '4'");
		while($row = mysqli_fetch_array($cappucino_on_table1)){
			$old_cappucino_quantity = $row['item_quantity'];
			$old_cappucino_quantity = (int)$old_cappucino_quantity + (int)$cappucino_quantity;
			$update_cappucino_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_cappucino_quantity' WHERE item_id = '4'");

			$con->query($update_cappucino_quantity);
		}
		$zhourat_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '5'");
		while($row = mysqli_fetch_array($zhourat_on_table1)){
			$old_zhourat_quantity = $row['item_quantity'];
			$old_zhourat_quantity = (int)$old_zhourat_quantity + (int)$zhourat_quantity;
			$update_zhourat_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_zhourat_quantity' WHERE item_id = '5'");

			$con->query($update_zhourat_quantity);
		}
		$ginger_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '6'");
		while($row = mysqli_fetch_array($ginger_on_table1)){
			$old_ginger_quantity = $row['item_quantity'];
			$old_ginger_quantity = (int)$old_ginger_quantity + (int)$ginger_quantity;
			$update_ginger_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_ginger_quantity' WHERE item_id = '6'");

			$con->query($update_ginger_quantity);
		}
		$lemonjuice_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '7'");
		while($row = mysqli_fetch_array($lemonjuice_on_table1)){
			$old_lemonjuice_quantity = $row['item_quantity'];
			$old_lemonjuice_quantity = (int)$old_lemonjuice_quantity + (int)$lemon_juice_quantity;
			$update_lemonjuice_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_lemonjuice_quantity' WHERE item_id = '7'");

			$con->query($update_lemonjuice_quantity);
		}
		$lemonade_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '8'");
		while($row = mysqli_fetch_array($lemonade_on_table1)){
			$old_lemonade_quantity = $row['item_quantity'];
			$old_lemonade_quantity = (int)$old_lemonade_quantity + (int)$lemonade_quantity;
			$update_lemonade_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_lemonade_quantity' WHERE item_id = '8'");

			$con->query($update_lemonade_quantity);
		}
		$carrotjuice_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '9'");
		while($row = mysqli_fetch_array($carrotjuice_on_table1)){
			$old_carrotjuice_quantity = $row['item_quantity'];
			$old_carrotjuice_quantity = (int)$old_carrotjuice_quantity + (int)$carrot_juice_quantity;
			$update_carrotjuice_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_carrotjuice_quantity' WHERE item_id = '9'");

			$con->query($update_carrotjuice_quantity);
		}
		$sevenup_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '10'");
		while($row = mysqli_fetch_array($sevenup_on_table1)){
			$old_sevenup_quantity = $row['item_quantity'];
			$old_sevenup_quantity = (int)$old_sevenup_quantity + (int)$sevenup_quantity;
			$update_sevenup_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_sevenup_quantity' WHERE item_id = '10'");

			$con->query($update_sevenup_quantity);
		}
		$pepsi_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '11'");
		while($row = mysqli_fetch_array($pepsi_on_table1)){
			$old_pepsi_quantity = $row['item_quantity'];
			$old_pepsi_quantity = (int)$old_pepsi_quantity + (int)$pepsi_quantity;
			$update_pepsi_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_pepsi_quantity' WHERE item_id = '11'");

			$con->query($update_pepsi_quantity);
		}
		$mirinda_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '12'");
		while($row = mysqli_fetch_array($mirinda_on_table1)){
			$old_mirinda_quantity = $row['item_quantity'];
			$old_mirinda_quantity = (int)$old_mirinda_quantity + (int)$mirinda_quantity;
			$update_mirinda_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_mirinda_quantity' WHERE item_id = '12'");

			$con->query($update_mirinda_quantity);
		}
		$xtrapineapple_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '13'");
		while($row = mysqli_fetch_array($xtrapineapple_on_table1)){
			$old_xtrapineapple_quantity = $row['item_quantity'];
			$old_xtrapineapple_quantity = (int)$old_xtrapineapple_quantity + (int)$xtra_pineapple_quantity;
			$update_xtrapineapple_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_xtrapineapple_quantity' WHERE item_id = '13'");

			$con->query($update_xtrapineapple_quantity);
		}
		$ictpassion_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '14'");
		while($row = mysqli_fetch_array($ictpassion_on_table1)){
			$old_ictpassion_quantity = $row['item_quantity'];
			$old_ictpassion_quantity = (int)$old_ictpassion_quantity + (int)$ict_passion_quantity;
			$update_ictpassion_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_ictpassion_quantity' WHERE item_id = '14'");

			$con->query($update_ictpassion_quantity);
		}
		$ictpeach_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '15'");
		while($row = mysqli_fetch_array($ictpeach_on_table1)){
			$old_ictpeach_quantity = $row['item_quantity'];
			$old_ictpeach_quantity = (int)$old_ictpeach_quantity + (int)$ict_peach_quantity;
			$update_ictpeach_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_ictpeach_quantity' WHERE item_id = '15'");

			$con->query($update_ictpeach_quantity);
		}
		$ampblue_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '16'");
		while($row = mysqli_fetch_array($ampblue_on_table1)){
			$old_ampblue_quantity = $row['item_quantity'];
			$old_ampblue_quantity = (int)$old_ampblue_quantity + (int)$amp_blue_quantity;
			$update_ampblue_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_ampblue_quantity' WHERE item_id = '16'");

			$con->query($update_ampblue_quantity);
		}
		$xxl_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '17'");
		while($row = mysqli_fetch_array($xxl_on_table1)){
			$old_xxl_quantity = $row['item_quantity'];
			$old_xxl_quantity = (int)$old_xxl_quantity + (int)$xxl_quantity;
			$update_xxl_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_xxl_quantity' WHERE item_id = '17'");

			$con->query($update_xxl_quantity);
		}
		$mexican_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '18'");
		while($row = mysqli_fetch_array($mexican_on_table1)){
			$old_mexican_quantity = $row['item_quantity'];
			$old_mexican_quantity = (int)$old_mexican_quantity + (int)$mexican_quantity;
			$update_mexican_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_mexican_quantity' WHERE item_id = '18'");

			$con->query($update_mexican_quantity);
		}
		$smallwater_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '19'");
		while($row = mysqli_fetch_array($smallwater_on_table1)){
			$old_smallwater_quantity = $row['item_quantity'];
			$old_smallwater_quantity = (int)$old_smallwater_quantity + (int)$small_water_quantity;
			$update_smallwater_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_smallwater_quantity' WHERE item_id = '19'");

			$con->query($update_smallwater_quantity);
		}
		$argilehapple_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '20'");
		while($row = mysqli_fetch_array($argilehapple_on_table1)){
			$old_argilehapple_quantity = $row['item_quantity'];
			$old_argilehapple_quantity = (int)$old_argilehapple_quantity + (int)$m3assal_tffe7_quantity;
			$update_argilehapple_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_argilehapple_quantity' WHERE item_id = '20'");

			$con->query($update_argilehapple_quantity);
		}
		$argilehna3na3w7amod_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '21'");
		while($row = mysqli_fetch_array($argilehna3na3w7amod_on_table1)){
			$old_argilehna3na3w7amod_quantity = $row['item_quantity'];
			$old_argilehna3na3w7amod_quantity = (int)$old_argilehna3na3w7amod_quantity + (int)$m3assal_na3na3_w_7amod_quantity;
			$update_argilehna3na3w7amod_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_argilehna3na3w7amod_quantity' WHERE item_id = '21'");

			$con->query($update_argilehna3na3w7amod_quantity);
		}
		$argilehna3na3w3lkeh_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '22'");
		while($row = mysqli_fetch_array($argilehna3na3w3lkeh_on_table1)){
			$old_argilehna3na3w3lkeh_quantity = $row['item_quantity'];
			$old_argilehna3na3w3lkeh_quantity = (int)$old_argilehna3na3w3lkeh_quantity + (int)$m3assal_na3na3_w_3lkeh_quantity;
			$update_argilehna3na3w3lkeh_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_argilehna3na3w3lkeh_quantity' WHERE item_id = '22'");

			$con->query($update_argilehna3na3w3lkeh_quantity);
		}
		$argilehrasjabali_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '23'");
		while($row = mysqli_fetch_array($argilehrasjabali_on_table1)){
			$old_argilehrasjabali_quantity = $row['item_quantity'];
			$old_argilehrasjabali_quantity = (int)$old_argilehrasjabali_quantity + (int)$ras_jabeli_quantity;
			$update_argilehrasjabali_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_argilehrasjabali_quantity' WHERE item_id = '23'");

			$con->query($update_argilehrasjabali_quantity);
		}
		$nuts_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '24'");
		while($row = mysqli_fetch_array($nuts_on_table1)){
			$old_nuts_quantity = $row['item_quantity'];
			$old_nuts_quantity = (int)$old_nuts_quantity + (int)$nuts_quantity;
			$update_nuts_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_nuts_quantity' WHERE item_id = '24'");

			$con->query($update_nuts_quantity);
		}
		$ka3keh_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '25'");
		while($row = mysqli_fetch_array($ka3keh_on_table1)){
			$old_ka3keh_quantity = $row['item_quantity'];
			$old_ka3keh_quantity = (int)$old_ka3keh_quantity + (int)$ka3keh_quantity;
			$update_ka3keh_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_ka3keh_quantity' WHERE item_id = '25'");

			$con->query($update_ka3keh_quantity);
		}
		$ka3kehwkhodra_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '26'");
		while($row = mysqli_fetch_array($ka3kehwkhodra_on_table1)){
			$old_ka3kehwkhodra_quantity = $row['item_quantity'];
			$old_ka3kehwkhodra_quantity = (int)$old_ka3kehwkhodra_quantity + (int)$ka3keh_w_khodra_quantity;
			$update_ka3kehwkhodra_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_ka3kehwkhodra_quantity' WHERE item_id = '26'");

			$con->query($update_ka3kehwkhodra_quantity);
		}
		$argileh3lkeh_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '27'");
		while($row = mysqli_fetch_array($argileh3lkeh_on_table1)){
			$old_argileh3lkeh_quantity = $row['item_quantity'];
			$old_argileh3lkeh_quantity = (int)$old_argileh3lkeh_quantity + (int)$m3assal_3lkeh_quantity;
			$update_argileh3lkeh_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_argileh3lkeh_quantity' WHERE item_id = '27'");

			$con->query($update_argileh3lkeh_quantity);
		}
		$cedars_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '28'");
		while($row = mysqli_fetch_array($cedars_on_table1)){
			$old_cedars_quantity = $row['item_quantity'];
			$old_cedars_quantity = (int)$old_cedars_quantity + (int)$cedars_quantity;
			$update_cedars_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_cedars_quantity' WHERE item_id = '28'");

			$con->query($update_cedars_quantity);
		}

		$eclair_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '29'");
		while($row = mysqli_fetch_array($eclair_on_table1)){
			$old_eclair_quantity = $row['item_quantity'];
			$old_eclair_quantity = (int)$old_eclair_quantity + (int)$eclair_quantity;
			$update_eclair_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_eclair_quantity' WHERE item_id = '29'");

			$con->query($update_eclair_quantity);
		}

		$cupcake_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '30'");
		while($row = mysqli_fetch_array($cupcake_on_table1)){
			$old_cupcake_quantity = $row['item_quantity'];
			$old_cupcake_quantity = (int)$old_cupcake_quantity + (int)$cupcake_quantity;
			$update_cupcake_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_cupcake_quantity' WHERE item_id = '30'");

			$con->query($update_cupcake_quantity);
		}

		$coconut_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '31'");
		while($row = mysqli_fetch_array($coconut_on_table1)){
			$old_coconut_quantity = $row['item_quantity'];
			$old_coconut_quantity = (int)$old_coconut_quantity + (int)$coconut_quantity;
			$update_coconut_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_coconut_quantity' WHERE item_id = '31'");

			$con->query($update_coconut_quantity);
		}

		$iced_coffee_on_table1 = $con->query("SELECT * FROM table1description WHERE item_id = '32'");
		while($row = mysqli_fetch_array($iced_coffee_on_table1)){
			$old_iced_coffee_quantity = $row['item_quantity'];
			$old_iced_coffee_quantity = (int)$old_iced_coffee_quantity + (int)$iced_coffee_quantity;
			$update_iced_coffee_quantity = $con->query("UPDATE table1description SET item_quantity = '$old_iced_coffee_quantity' WHERE item_id = '32'");

			$con->query($update_iced_coffee_quantity);
		}

		}
		
		
		//add items to table 2 description
		if ($tableid == 2) {
			$coffee_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '1'");
		while($row = mysqli_fetch_array($coffee_on_table2)){
			$old_coffee_quantity = $row['item_quantity'];
			$old_coffee_quantity = (int)$old_coffee_quantity + (int)$coffee_quantity;
			$update_coffee_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_coffee_quantity' WHERE item_id = '1'");

			$con->query($update_coffee_quantity);
		}	
		$tea_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '2'");
		while($row = mysqli_fetch_array($tea_on_table2)){
			$old_tea_quantity = $row['item_quantity'];
			$old_tea_quantity = (int)$old_tea_quantity + (int)$tea_quantity;
			$update_tea_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_tea_quantity' WHERE item_id = '2'");

			$con->query($update_tea_quantity);
		}
		$nescafe_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '3'");
		while($row = mysqli_fetch_array($nescafe_on_table2)){
			$old_nescafe_quantity = $row['item_quantity'];
			$old_nescafe_quantity = (int)$old_nescafe_quantity + (int)$nescafe_quantity;
			$update_nescafe_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_nescafe_quantity' WHERE item_id = '3'");

			$con->query($update_nescafe_quantity);
		}
		$cappucino_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '4'");
		while($row = mysqli_fetch_array($cappucino_on_table2)){
			$old_cappucino_quantity = $row['item_quantity'];
			$old_cappucino_quantity = (int)$old_cappucino_quantity + (int)$cappucino_quantity;
			$update_cappucino_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_cappucino_quantity' WHERE item_id = '4'");

			$con->query($update_cappucino_quantity);
		}
		$zhourat_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '5'");
		while($row = mysqli_fetch_array($zhourat_on_table2)){
			$old_zhourat_quantity = $row['item_quantity'];
			$old_zhourat_quantity = (int)$old_zhourat_quantity + (int)$zhourat_quantity;
			$update_zhourat_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_zhourat_quantity' WHERE item_id = '5'");

			$con->query($update_zhourat_quantity);
		}
		$ginger_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '6'");
		while($row = mysqli_fetch_array($ginger_on_table2)){
			$old_ginger_quantity = $row['item_quantity'];
			$old_ginger_quantity = (int)$old_ginger_quantity + (int)$ginger_quantity;
			$update_ginger_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_ginger_quantity' WHERE item_id = '6'");

			$con->query($update_ginger_quantity);
		}
		$lemonjuice_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '7'");
		while($row = mysqli_fetch_array($lemonjuice_on_table2)){
			$old_lemonjuice_quantity = $row['item_quantity'];
			$old_lemonjuice_quantity = (int)$old_lemonjuice_quantity + (int)$lemon_juice_quantity;
			$update_lemonjuice_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_lemonjuice_quantity' WHERE item_id = '7'");

			$con->query($update_lemonjuice_quantity);
		}
		$lemonade_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '8'");
		while($row = mysqli_fetch_array($lemonade_on_table2)){
			$old_lemonade_quantity = $row['item_quantity'];
			$old_lemonade_quantity = (int)$old_lemonade_quantity + (int)$lemonade_quantity;
			$update_lemonade_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_lemonade_quantity' WHERE item_id = '8'");

			$con->query($update_lemonade_quantity);
		}
		$carrotjuice_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '9'");
		while($row = mysqli_fetch_array($carrotjuice_on_table2)){
			$old_carrotjuice_quantity = $row['item_quantity'];
			$old_carrotjuice_quantity = (int)$old_carrotjuice_quantity + (int)$carrot_juice_quantity;
			$update_carrotjuice_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_carrotjuice_quantity' WHERE item_id = '9'");

			$con->query($update_carrotjuice_quantity);
		}
		$sevenup_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '10'");
		while($row = mysqli_fetch_array($sevenup_on_table2)){
			$old_sevenup_quantity = $row['item_quantity'];
			$old_sevenup_quantity = (int)$old_sevenup_quantity + (int)$sevenup_quantity;
			$update_sevenup_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_sevenup_quantity' WHERE item_id = '10'");

			$con->query($update_sevenup_quantity);
		}
		$pepsi_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '11'");
		while($row = mysqli_fetch_array($pepsi_on_table2)){
			$old_pepsi_quantity = $row['item_quantity'];
			$old_pepsi_quantity = (int)$old_pepsi_quantity + (int)$pepsi_quantity;
			$update_pepsi_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_pepsi_quantity' WHERE item_id = '11'");

			$con->query($update_pepsi_quantity);
		}
		$mirinda_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '12'");
		while($row = mysqli_fetch_array($mirinda_on_table2)){
			$old_mirinda_quantity = $row['item_quantity'];
			$old_mirinda_quantity = (int)$old_mirinda_quantity + (int)$mirinda_quantity;
			$update_mirinda_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_mirinda_quantity' WHERE item_id = '12'");

			$con->query($update_mirinda_quantity);
		}
		$xtrapineapple_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '13'");
		while($row = mysqli_fetch_array($xtrapineapple_on_table2)){
			$old_xtrapineapple_quantity = $row['item_quantity'];
			$old_xtrapineapple_quantity = (int)$old_xtrapineapple_quantity + (int)$xtra_pineapple_quantity;
			$update_xtrapineapple_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_xtrapineapple_quantity' WHERE item_id = '13'");

			$con->query($update_xtrapineapple_quantity);
		}
		$ictpassion_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '14'");
		while($row = mysqli_fetch_array($ictpassion_on_table2)){
			$old_ictpassion_quantity = $row['item_quantity'];
			$old_ictpassion_quantity = (int)$old_ictpassion_quantity + (int)$ict_passion_quantity;
			$update_ictpassion_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_ictpassion_quantity' WHERE item_id = '14'");

			$con->query($update_ictpassion_quantity);
		}
		$ictpeach_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '15'");
		while($row = mysqli_fetch_array($ictpeach_on_table2)){
			$old_ictpeach_quantity = $row['item_quantity'];
			$old_ictpeach_quantity = (int)$old_ictpeach_quantity + (int)$ict_peach_quantity;
			$update_ictpeach_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_ictpeach_quantity' WHERE item_id = '15'");

			$con->query($update_ictpeach_quantity);
		}
		$ampblue_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '16'");
		while($row = mysqli_fetch_array($ampblue_on_table2)){
			$old_ampblue_quantity = $row['item_quantity'];
			$old_ampblue_quantity = (int)$old_ampblue_quantity + (int)$amp_blue_quantity;
			$update_ampblue_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_ampblue_quantity' WHERE item_id = '16'");

			$con->query($update_ampblue_quantity);
		}
		$xxl_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '17'");
		while($row = mysqli_fetch_array($xxl_on_table2)){
			$old_xxl_quantity = $row['item_quantity'];
			$old_xxl_quantity = (int)$old_xxl_quantity + (int)$xxl_quantity;
			$update_xxl_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_xxl_quantity' WHERE item_id = '17'");

			$con->query($update_xxl_quantity);
		}
		$mexican_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '18'");
		while($row = mysqli_fetch_array($mexican_on_table2)){
			$old_mexican_quantity = $row['item_quantity'];
			$old_mexican_quantity = (int)$old_mexican_quantity + (int)$mexican_quantity;
			$update_mexican_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_mexican_quantity' WHERE item_id = '18'");

			$con->query($update_mexican_quantity);
		}
		$smallwater_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '19'");
		while($row = mysqli_fetch_array($smallwater_on_table2)){
			$old_smallwater_quantity = $row['item_quantity'];
			$old_smallwater_quantity = (int)$old_smallwater_quantity + (int)$small_water_quantity;
			$update_smallwater_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_smallwater_quantity' WHERE item_id = '19'");

			$con->query($update_smallwater_quantity);
		}
		$argilehapple_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '20'");
		while($row = mysqli_fetch_array($argilehapple_on_table2)){
			$old_argilehapple_quantity = $row['item_quantity'];
			$old_argilehapple_quantity = (int)$old_argilehapple_quantity + (int)$m3assal_tffe7_quantity;
			$update_argilehapple_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_argilehapple_quantity' WHERE item_id = '20'");

			$con->query($update_argilehapple_quantity);
		}
		$argilehna3na3w7amod_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '21'");
		while($row = mysqli_fetch_array($argilehna3na3w7amod_on_table2)){
			$old_argilehna3na3w7amod_quantity = $row['item_quantity'];
			$old_argilehna3na3w7amod_quantity = (int)$old_argilehna3na3w7amod_quantity + (int)$m3assal_na3na3_w_7amod_quantity;
			$update_argilehna3na3w7amod_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_argilehna3na3w7amod_quantity' WHERE item_id = '21'");

			$con->query($update_argilehna3na3w7amod_quantity);
		}
		$argilehna3na3w3lkeh_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '22'");
		while($row = mysqli_fetch_array($argilehna3na3w3lkeh_on_table2)){
			$old_argilehna3na3w3lkeh_quantity = $row['item_quantity'];
			$old_argilehna3na3w3lkeh_quantity = (int)$old_argilehna3na3w3lkeh_quantity + (int)$m3assal_na3na3_w_3lkeh_quantity;
			$update_argilehna3na3w3lkeh_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_argilehna3na3w3lkeh_quantity' WHERE item_id = '22'");

			$con->query($update_argilehna3na3w3lkeh_quantity);
		}
		$argilehrasjabali_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '23'");
		while($row = mysqli_fetch_array($argilehrasjabali_on_table2)){
			$old_argilehrasjabali_quantity = $row['item_quantity'];
			$old_argilehrasjabali_quantity = (int)$old_argilehrasjabali_quantity + (int)$ras_jabeli_quantity;
			$update_argilehrasjabali_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_argilehrasjabali_quantity' WHERE item_id = '23'");

			$con->query($update_argilehrasjabali_quantity);
		}
		$nuts_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '24'");
		while($row = mysqli_fetch_array($nuts_on_table2)){
			$old_nuts_quantity = $row['item_quantity'];
			$old_nuts_quantity = (int)$old_nuts_quantity + (int)$nuts_quantity;
			$update_nuts_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_nuts_quantity' WHERE item_id = '24'");

			$con->query($update_nuts_quantity);
		}
		$ka3keh_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '25'");
		while($row = mysqli_fetch_array($ka3keh_on_table2)){
			$old_ka3keh_quantity = $row['item_quantity'];
			$old_ka3keh_quantity = (int)$old_ka3keh_quantity + (int)$ka3keh_quantity;
			$update_ka3keh_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_ka3keh_quantity' WHERE item_id = '25'");

			$con->query($update_ka3keh_quantity);
		}
		$ka3kehwkhodra_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '26'");
		while($row = mysqli_fetch_array($ka3kehwkhodra_on_table2)){
			$old_ka3kehwkhodra_quantity = $row['item_quantity'];
			$old_ka3kehwkhodra_quantity = (int)$old_ka3kehwkhodra_quantity + (int)$ka3keh_w_khodra_quantity;
			$update_ka3kehwkhodra_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_ka3kehwkhodra_quantity' WHERE item_id = '26'");

			$con->query($update_ka3kehwkhodra_quantity);
		}
		$argileh3lkeh_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '27'");
		while($row = mysqli_fetch_array($argileh3lkeh_on_table2)){
			$old_argileh3lkeh_quantity = $row['item_quantity'];
			$old_argileh3lkeh_quantity = (int)$old_argileh3lkeh_quantity + (int)$m3assal_3lkeh_quantity;
			$update_argileh3lkeh_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_argileh3lkeh_quantity' WHERE item_id = '27'");

			$con->query($update_argileh3lkeh_quantity);
		}
		$cedars_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '28'");
		while($row = mysqli_fetch_array($cedars_on_table2)){
			$old_cedars_quantity = $row['item_quantity'];
			$old_cedars_quantity = (int)$old_cedars_quantity + (int)$cedars_quantity;
			$update_cedars_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_cedars_quantity' WHERE item_id = '28'");

			$con->query($update_cedars_quantity);
		}

$eclair_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '29'");
		while($row = mysqli_fetch_array($eclair_on_table2)){
			$old_eclair_quantity = $row['item_quantity'];
			$old_eclair_quantity = (int)$old_eclair_quantity + (int)$eclair_quantity;
			$update_eclair_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_eclair_quantity' WHERE item_id = '29'");

			$con->query($update_eclair_quantity);
		}

		$cupcake_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '30'");
		while($row = mysqli_fetch_array($cupcake_on_table2)){
			$old_cupcake_quantity = $row['item_quantity'];
			$old_cupcake_quantity = (int)$old_cupcake_quantity + (int)$cupcake_quantity;
			$update_cupcake_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_cupcake_quantity' WHERE item_id = '30'");

			$con->query($update_cupcake_quantity);
		}

		$coconut_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '31'");
		while($row = mysqli_fetch_array($coconut_on_table2)){
			$old_coconut_quantity = $row['item_quantity'];
			$old_coconut_quantity = (int)$old_coconut_quantity + (int)$coconut_quantity;
			$update_coconut_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_coconut_quantity' WHERE item_id = '31'");

			$con->query($update_coconut_quantity);
		}

		$iced_coffee_on_table2 = $con->query("SELECT * FROM table2description WHERE item_id = '32'");
		while($row = mysqli_fetch_array($iced_coffee_on_table2)){
			$old_iced_coffee_quantity = $row['item_quantity'];
			$old_iced_coffee_quantity = (int)$old_iced_coffee_quantity + (int)$iced_coffee_quantity;
			$update_iced_coffee_quantity = $con->query("UPDATE table2description SET item_quantity = '$old_iced_coffee_quantity' WHERE item_id = '32'");

			$con->query($update_iced_coffee_quantity);
		}

		}
		
		//add items to table 3 description
		if ($tableid == 3) {
			
		
		$coffee_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '1'");
		while($row = mysqli_fetch_array($coffee_on_table3)){
			$old_coffee_quantity = $row['item_quantity'];
			$old_coffee_quantity = (int)$old_coffee_quantity + (int)$coffee_quantity;
			$update_coffee_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_coffee_quantity' WHERE item_id = '1'");

			$con->query($update_coffee_quantity);
		}	
		$tea_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '2'");
		while($row = mysqli_fetch_array($tea_on_table3)){
			$old_tea_quantity = $row['item_quantity'];
			$old_tea_quantity = (int)$old_tea_quantity + (int)$tea_quantity;
			$update_tea_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_tea_quantity' WHERE item_id = '2'");

			$con->query($update_tea_quantity);
		}
		$nescafe_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '3'");
		while($row = mysqli_fetch_array($nescafe_on_table3)){
			$old_nescafe_quantity = $row['item_quantity'];
			$old_nescafe_quantity = (int)$old_nescafe_quantity + (int)$nescafe_quantity;
			$update_nescafe_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_nescafe_quantity' WHERE item_id = '3'");

			$con->query($update_nescafe_quantity);
		}
		$cappucino_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '4'");
		while($row = mysqli_fetch_array($cappucino_on_table3)){
			$old_cappucino_quantity = $row['item_quantity'];
			$old_cappucino_quantity = (int)$old_cappucino_quantity + (int)$cappucino_quantity;
			$update_cappucino_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_cappucino_quantity' WHERE item_id = '4'");

			$con->query($update_cappucino_quantity);
		}
		$zhourat_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '5'");
		while($row = mysqli_fetch_array($zhourat_on_table3)){
			$old_zhourat_quantity = $row['item_quantity'];
			$old_zhourat_quantity = (int)$old_zhourat_quantity + (int)$zhourat_quantity;
			$update_zhourat_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_zhourat_quantity' WHERE item_id = '5'");

			$con->query($update_zhourat_quantity);
		}
		$ginger_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '6'");
		while($row = mysqli_fetch_array($ginger_on_table3)){
			$old_ginger_quantity = $row['item_quantity'];
			$old_ginger_quantity = (int)$old_ginger_quantity + (int)$ginger_quantity;
			$update_ginger_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_ginger_quantity' WHERE item_id = '6'");

			$con->query($update_ginger_quantity);
		}
		$lemonjuice_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '7'");
		while($row = mysqli_fetch_array($lemonjuice_on_table3)){
			$old_lemonjuice_quantity = $row['item_quantity'];
			$old_lemonjuice_quantity = (int)$old_lemonjuice_quantity + (int)$lemon_juice_quantity;
			$update_lemonjuice_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_lemonjuice_quantity' WHERE item_id = '7'");

			$con->query($update_lemonjuice_quantity);
		}
		$lemonade_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '8'");
		while($row = mysqli_fetch_array($lemonade_on_table3)){
			$old_lemonade_quantity = $row['item_quantity'];
			$old_lemonade_quantity = (int)$old_lemonade_quantity + (int)$lemonade_quantity;
			$update_lemonade_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_lemonade_quantity' WHERE item_id = '8'");

			$con->query($update_lemonade_quantity);
		}
		$carrotjuice_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '9'");
		while($row = mysqli_fetch_array($carrotjuice_on_table3)){
			$old_carrotjuice_quantity = $row['item_quantity'];
			$old_carrotjuice_quantity = (int)$old_carrotjuice_quantity + (int)$carrot_juice_quantity;
			$update_carrotjuice_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_carrotjuice_quantity' WHERE item_id = '9'");

			$con->query($update_carrotjuice_quantity);
		}
		$sevenup_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '10'");
		while($row = mysqli_fetch_array($sevenup_on_table3)){
			$old_sevenup_quantity = $row['item_quantity'];
			$old_sevenup_quantity = (int)$old_sevenup_quantity + (int)$sevenup_quantity;
			$update_sevenup_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_sevenup_quantity' WHERE item_id = '10'");

			$con->query($update_sevenup_quantity);
		}
		$pepsi_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '11'");
		while($row = mysqli_fetch_array($pepsi_on_table3)){
			$old_pepsi_quantity = $row['item_quantity'];
			$old_pepsi_quantity = (int)$old_pepsi_quantity + (int)$pepsi_quantity;
			$update_pepsi_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_pepsi_quantity' WHERE item_id = '11'");

			$con->query($update_pepsi_quantity);
		}
		$mirinda_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '12'");
		while($row = mysqli_fetch_array($mirinda_on_table3)){
			$old_mirinda_quantity = $row['item_quantity'];
			$old_mirinda_quantity = (int)$old_mirinda_quantity + (int)$mirinda_quantity;
			$update_mirinda_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_mirinda_quantity' WHERE item_id = '12'");

			$con->query($update_mirinda_quantity);
		}
		$xtrapineapple_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '13'");
		while($row = mysqli_fetch_array($xtrapineapple_on_table3)){
			$old_xtrapineapple_quantity = $row['item_quantity'];
			$old_xtrapineapple_quantity = (int)$old_xtrapineapple_quantity + (int)$xtra_pineapple_quantity;
			$update_xtrapineapple_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_xtrapineapple_quantity' WHERE item_id = '13'");

			$con->query($update_xtrapineapple_quantity);
		}
		$ictpassion_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '14'");
		while($row = mysqli_fetch_array($ictpassion_on_table3)){
			$old_ictpassion_quantity = $row['item_quantity'];
			$old_ictpassion_quantity = (int)$old_ictpassion_quantity + (int)$ict_passion_quantity;
			$update_ictpassion_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_ictpassion_quantity' WHERE item_id = '14'");

			$con->query($update_ictpassion_quantity);
		}
		$ictpeach_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '15'");
		while($row = mysqli_fetch_array($ictpeach_on_table3)){
			$old_ictpeach_quantity = $row['item_quantity'];
			$old_ictpeach_quantity = (int)$old_ictpeach_quantity + (int)$ict_peach_quantity;
			$update_ictpeach_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_ictpeach_quantity' WHERE item_id = '15'");

			$con->query($update_ictpeach_quantity);
		}
		$ampblue_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '16'");
		while($row = mysqli_fetch_array($ampblue_on_table3)){
			$old_ampblue_quantity = $row['item_quantity'];
			$old_ampblue_quantity = (int)$old_ampblue_quantity + (int)$amp_blue_quantity;
			$update_ampblue_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_ampblue_quantity' WHERE item_id = '16'");

			$con->query($update_ampblue_quantity);
		}
		$xxl_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '17'");
		while($row = mysqli_fetch_array($xxl_on_table3)){
			$old_xxl_quantity = $row['item_quantity'];
			$old_xxl_quantity = (int)$old_xxl_quantity + (int)$xxl_quantity;
			$update_xxl_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_xxl_quantity' WHERE item_id = '17'");

			$con->query($update_xxl_quantity);
		}
		$mexican_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '18'");
		while($row = mysqli_fetch_array($mexican_on_table3)){
			$old_mexican_quantity = $row['item_quantity'];
			$old_mexican_quantity = (int)$old_mexican_quantity + (int)$mexican_quantity;
			$update_mexican_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_mexican_quantity' WHERE item_id = '18'");

			$con->query($update_mexican_quantity);
		}
		$smallwater_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '19'");
		while($row = mysqli_fetch_array($smallwater_on_table3)){
			$old_smallwater_quantity = $row['item_quantity'];
			$old_smallwater_quantity = (int)$old_smallwater_quantity + (int)$small_water_quantity;
			$update_smallwater_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_smallwater_quantity' WHERE item_id = '19'");

			$con->query($update_smallwater_quantity);
		}
		$argilehapple_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '20'");
		while($row = mysqli_fetch_array($argilehapple_on_table3)){
			$old_argilehapple_quantity = $row['item_quantity'];
			$old_argilehapple_quantity = (int)$old_argilehapple_quantity + (int)$m3assal_tffe7_quantity;
			$update_argilehapple_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_argilehapple_quantity' WHERE item_id = '20'");

			$con->query($update_argilehapple_quantity);
		}
		$argilehna3na3w7amod_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '21'");
		while($row = mysqli_fetch_array($argilehna3na3w7amod_on_table3)){
			$old_argilehna3na3w7amod_quantity = $row['item_quantity'];
			$old_argilehna3na3w7amod_quantity = (int)$old_argilehna3na3w7amod_quantity + (int)$m3assal_na3na3_w_7amod_quantity;
			$update_argilehna3na3w7amod_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_argilehna3na3w7amod_quantity' WHERE item_id = '21'");

			$con->query($update_argilehna3na3w7amod_quantity);
		}
		$argilehna3na3w3lkeh_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '22'");
		while($row = mysqli_fetch_array($argilehna3na3w3lkeh_on_table3)){
			$old_argilehna3na3w3lkeh_quantity = $row['item_quantity'];
			$old_argilehna3na3w3lkeh_quantity = (int)$old_argilehna3na3w3lkeh_quantity + (int)$m3assal_na3na3_w_3lkeh_quantity;
			$update_argilehna3na3w3lkeh_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_argilehna3na3w3lkeh_quantity' WHERE item_id = '22'");

			$con->query($update_argilehna3na3w3lkeh_quantity);
		}
		$argilehrasjabali_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '23'");
		while($row = mysqli_fetch_array($argilehrasjabali_on_table3)){
			$old_argilehrasjabali_quantity = $row['item_quantity'];
			$old_argilehrasjabali_quantity = (int)$old_argilehrasjabali_quantity + (int)$ras_jabeli_quantity;
			$update_argilehrasjabali_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_argilehrasjabali_quantity' WHERE item_id = '23'");

			$con->query($update_argilehrasjabali_quantity);
		}
		$nuts_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '24'");
		while($row = mysqli_fetch_array($nuts_on_table3)){
			$old_nuts_quantity = $row['item_quantity'];
			$old_nuts_quantity = (int)$old_nuts_quantity + (int)$nuts_quantity;
			$update_nuts_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_nuts_quantity' WHERE item_id = '24'");

			$con->query($update_nuts_quantity);
		}
		$ka3keh_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '25'");
		while($row = mysqli_fetch_array($ka3keh_on_table3)){
			$old_ka3keh_quantity = $row['item_quantity'];
			$old_ka3keh_quantity = (int)$old_ka3keh_quantity + (int)$ka3keh_quantity;
			$update_ka3keh_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_ka3keh_quantity' WHERE item_id = '25'");

			$con->query($update_ka3keh_quantity);
		}
		$ka3kehwkhodra_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '26'");
		while($row = mysqli_fetch_array($ka3kehwkhodra_on_table3)){
			$old_ka3kehwkhodra_quantity = $row['item_quantity'];
			$old_ka3kehwkhodra_quantity = (int)$old_ka3kehwkhodra_quantity + (int)$ka3keh_w_khodra_quantity;
			$update_ka3kehwkhodra_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_ka3kehwkhodra_quantity' WHERE item_id = '26'");

			$con->query($update_ka3kehwkhodra_quantity);
		}
		$argileh3lkeh_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '27'");
		while($row = mysqli_fetch_array($argileh3lkeh_on_table3)){
			$old_argileh3lkeh_quantity = $row['item_quantity'];
			$old_argileh3lkeh_quantity = (int)$old_argileh3lkeh_quantity + (int)$m3assal_3lkeh_quantity;
			$update_argileh3lkeh_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_argileh3lkeh_quantity' WHERE item_id = '27'");

			$con->query($update_argileh3lkeh_quantity);
		}
		$cedars_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '28'");
		while($row = mysqli_fetch_array($cedars_on_table3)){
			$old_cedars_quantity = $row['item_quantity'];
			$old_cedars_quantity = (int)$old_cedars_quantity + (int)$cedars_quantity;
			$update_cedars_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_cedars_quantity' WHERE item_id = '28'");

			$con->query($update_cedars_quantity);
		}

		$eclair_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '29'");
		while($row = mysqli_fetch_array($eclair_on_table3)){
			$old_eclair_quantity = $row['item_quantity'];
			$old_eclair_quantity = (int)$old_eclair_quantity + (int)$eclair_quantity;
			$update_eclair_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_eclair_quantity' WHERE item_id = '29'");

			$con->query($update_eclair_quantity);
		}

		$cupcake_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '30'");
		while($row = mysqli_fetch_array($cupcake_on_table3)){
			$old_cupcake_quantity = $row['item_quantity'];
			$old_cupcake_quantity = (int)$old_cupcake_quantity + (int)$cupcake_quantity;
			$update_cupcake_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_cupcake_quantity' WHERE item_id = '30'");

			$con->query($update_cupcake_quantity);
		}

		$coconut_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '31'");
		while($row = mysqli_fetch_array($coconut_on_table3)){
			$old_coconut_quantity = $row['item_quantity'];
			$old_coconut_quantity = (int)$old_coconut_quantity + (int)$coconut_quantity;
			$update_coconut_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_coconut_quantity' WHERE item_id = '31'");

			$con->query($update_coconut_quantity);
		}

		$iced_coffee_on_table3 = $con->query("SELECT * FROM table3description WHERE item_id = '32'");
		while($row = mysqli_fetch_array($iced_coffee_on_table3)){
			$old_iced_coffee_quantity = $row['item_quantity'];
			$old_iced_coffee_quantity = (int)$old_iced_coffee_quantity + (int)$iced_coffee_quantity;
			$update_iced_coffee_quantity = $con->query("UPDATE table3description SET item_quantity = '$old_iced_coffee_quantity' WHERE item_id = '32'");

			$con->query($update_iced_coffee_quantity);
		}

	}
		//add items to table 4 description
		if ($tableid == 4) {
			
		
		$coffee_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '1'");
		while($row = mysqli_fetch_array($coffee_on_table4)){
			$old_coffee_quantity = $row['item_quantity'];
			$old_coffee_quantity = (int)$old_coffee_quantity + (int)$coffee_quantity;
			$update_coffee_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_coffee_quantity' WHERE item_id = '1'");

			$con->query($update_coffee_quantity);
		}	
		$tea_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '2'");
		while($row = mysqli_fetch_array($tea_on_table4)){
			$old_tea_quantity = $row['item_quantity'];
			$old_tea_quantity = (int)$old_tea_quantity + (int)$tea_quantity;
			$update_tea_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_tea_quantity' WHERE item_id = '2'");

			$con->query($update_tea_quantity);
		}
		$nescafe_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '3'");
		while($row = mysqli_fetch_array($nescafe_on_table4)){
			$old_nescafe_quantity = $row['item_quantity'];
			$old_nescafe_quantity = (int)$old_nescafe_quantity + (int)$nescafe_quantity;
			$update_nescafe_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_nescafe_quantity' WHERE item_id = '3'");

			$con->query($update_nescafe_quantity);
		}
		$cappucino_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '4'");
		while($row = mysqli_fetch_array($cappucino_on_table4)){
			$old_cappucino_quantity = $row['item_quantity'];
			$old_cappucino_quantity = (int)$old_cappucino_quantity + (int)$cappucino_quantity;
			$update_cappucino_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_cappucino_quantity' WHERE item_id = '4'");

			$con->query($update_cappucino_quantity);
		}
		$zhourat_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '5'");
		while($row = mysqli_fetch_array($zhourat_on_table4)){
			$old_zhourat_quantity = $row['item_quantity'];
			$old_zhourat_quantity = (int)$old_zhourat_quantity + (int)$zhourat_quantity;
			$update_zhourat_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_zhourat_quantity' WHERE item_id = '5'");

			$con->query($update_zhourat_quantity);
		}
		$ginger_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '6'");
		while($row = mysqli_fetch_array($ginger_on_table4)){
			$old_ginger_quantity = $row['item_quantity'];
			$old_ginger_quantity = (int)$old_ginger_quantity + (int)$ginger_quantity;
			$update_ginger_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_ginger_quantity' WHERE item_id = '6'");

			$con->query($update_ginger_quantity);
		}
		$lemonjuice_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '7'");
		while($row = mysqli_fetch_array($lemonjuice_on_table4)){
			$old_lemonjuice_quantity = $row['item_quantity'];
			$old_lemonjuice_quantity = (int)$old_lemonjuice_quantity + (int)$lemon_juice_quantity;
			$update_lemonjuice_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_lemonjuice_quantity' WHERE item_id = '7'");

			$con->query($update_lemonjuice_quantity);
		}
		$lemonade_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '8'");
		while($row = mysqli_fetch_array($lemonade_on_table4)){
			$old_lemonade_quantity = $row['item_quantity'];
			$old_lemonade_quantity = (int)$old_lemonade_quantity + (int)$lemonade_quantity;
			$update_lemonade_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_lemonade_quantity' WHERE item_id = '8'");

			$con->query($update_lemonade_quantity);
		}
		$carrotjuice_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '9'");
		while($row = mysqli_fetch_array($carrotjuice_on_table4)){
			$old_carrotjuice_quantity = $row['item_quantity'];
			$old_carrotjuice_quantity = (int)$old_carrotjuice_quantity + (int)$carrot_juice_quantity;
			$update_carrotjuice_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_carrotjuice_quantity' WHERE item_id = '9'");

			$con->query($update_carrotjuice_quantity);
		}
		$sevenup_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '10'");
		while($row = mysqli_fetch_array($sevenup_on_table4)){
			$old_sevenup_quantity = $row['item_quantity'];
			$old_sevenup_quantity = (int)$old_sevenup_quantity + (int)$sevenup_quantity;
			$update_sevenup_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_sevenup_quantity' WHERE item_id = '10'");

			$con->query($update_sevenup_quantity);
		}
		$pepsi_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '11'");
		while($row = mysqli_fetch_array($pepsi_on_table4)){
			$old_pepsi_quantity = $row['item_quantity'];
			$old_pepsi_quantity = (int)$old_pepsi_quantity + (int)$pepsi_quantity;
			$update_pepsi_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_pepsi_quantity' WHERE item_id = '11'");

			$con->query($update_pepsi_quantity);
		}
		$mirinda_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '12'");
		while($row = mysqli_fetch_array($mirinda_on_table4)){
			$old_mirinda_quantity = $row['item_quantity'];
			$old_mirinda_quantity = (int)$old_mirinda_quantity + (int)$mirinda_quantity;
			$update_mirinda_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_mirinda_quantity' WHERE item_id = '12'");

			$con->query($update_mirinda_quantity);
		}
		$xtrapineapple_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '13'");
		while($row = mysqli_fetch_array($xtrapineapple_on_table4)){
			$old_xtrapineapple_quantity = $row['item_quantity'];
			$old_xtrapineapple_quantity = (int)$old_xtrapineapple_quantity + (int)$xtra_pineapple_quantity;
			$update_xtrapineapple_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_xtrapineapple_quantity' WHERE item_id = '13'");

			$con->query($update_xtrapineapple_quantity);
		}
		$ictpassion_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '14'");
		while($row = mysqli_fetch_array($ictpassion_on_table4)){
			$old_ictpassion_quantity = $row['item_quantity'];
			$old_ictpassion_quantity = (int)$old_ictpassion_quantity + (int)$ict_passion_quantity;
			$update_ictpassion_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_ictpassion_quantity' WHERE item_id = '14'");

			$con->query($update_ictpassion_quantity);
		}
		$ictpeach_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '15'");
		while($row = mysqli_fetch_array($ictpeach_on_table4)){
			$old_ictpeach_quantity = $row['item_quantity'];
			$old_ictpeach_quantity = (int)$old_ictpeach_quantity + (int)$ict_peach_quantity;
			$update_ictpeach_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_ictpeach_quantity' WHERE item_id = '15'");

			$con->query($update_ictpeach_quantity);
		}
		$ampblue_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '16'");
		while($row = mysqli_fetch_array($ampblue_on_table4)){
			$old_ampblue_quantity = $row['item_quantity'];
			$old_ampblue_quantity = (int)$old_ampblue_quantity + (int)$amp_blue_quantity;
			$update_ampblue_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_ampblue_quantity' WHERE item_id = '16'");

			$con->query($update_ampblue_quantity);
		}
		$xxl_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '17'");
		while($row = mysqli_fetch_array($xxl_on_table4)){
			$old_xxl_quantity = $row['item_quantity'];
			$old_xxl_quantity = (int)$old_xxl_quantity + (int)$xxl_quantity;
			$update_xxl_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_xxl_quantity' WHERE item_id = '17'");

			$con->query($update_xxl_quantity);
		}
		$mexican_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '18'");
		while($row = mysqli_fetch_array($mexican_on_table4)){
			$old_mexican_quantity = $row['item_quantity'];
			$old_mexican_quantity = (int)$old_mexican_quantity + (int)$mexican_quantity;
			$update_mexican_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_mexican_quantity' WHERE item_id = '18'");

			$con->query($update_mexican_quantity);
		}
		$smallwater_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '19'");
		while($row = mysqli_fetch_array($smallwater_on_table4)){
			$old_smallwater_quantity = $row['item_quantity'];
			$old_smallwater_quantity = (int)$old_smallwater_quantity + (int)$small_water_quantity;
			$update_smallwater_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_smallwater_quantity' WHERE item_id = '19'");

			$con->query($update_smallwater_quantity);
		}
		$argilehapple_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '20'");
		while($row = mysqli_fetch_array($argilehapple_on_table4)){
			$old_argilehapple_quantity = $row['item_quantity'];
			$old_argilehapple_quantity = (int)$old_argilehapple_quantity + (int)$m3assal_tffe7_quantity;
			$update_argilehapple_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_argilehapple_quantity' WHERE item_id = '20'");

			$con->query($update_argilehapple_quantity);
		}
		$argilehna3na3w7amod_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '21'");
		while($row = mysqli_fetch_array($argilehna3na3w7amod_on_table4)){
			$old_argilehna3na3w7amod_quantity = $row['item_quantity'];
			$old_argilehna3na3w7amod_quantity = (int)$old_argilehna3na3w7amod_quantity + (int)$m3assal_na3na3_w_7amod_quantity;
			$update_argilehna3na3w7amod_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_argilehna3na3w7amod_quantity' WHERE item_id = '21'");

			$con->query($update_argilehna3na3w7amod_quantity);
		}
		$argilehna3na3w3lkeh_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '22'");
		while($row = mysqli_fetch_array($argilehna3na3w3lkeh_on_table4)){
			$old_argilehna3na3w3lkeh_quantity = $row['item_quantity'];
			$old_argilehna3na3w3lkeh_quantity = (int)$old_argilehna3na3w3lkeh_quantity + (int)$m3assal_na3na3_w_3lkeh_quantity;
			$update_argilehna3na3w3lkeh_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_argilehna3na3w3lkeh_quantity' WHERE item_id = '22'");

			$con->query($update_argilehna3na3w3lkeh_quantity);
		}
		$argilehrasjabali_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '23'");
		while($row = mysqli_fetch_array($argilehrasjabali_on_table4)){
			$old_argilehrasjabali_quantity = $row['item_quantity'];
			$old_argilehrasjabali_quantity = (int)$old_argilehrasjabali_quantity + (int)$ras_jabeli_quantity;
			$update_argilehrasjabali_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_argilehrasjabali_quantity' WHERE item_id = '23'");

			$con->query($update_argilehrasjabali_quantity);
		}
		$nuts_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '24'");
		while($row = mysqli_fetch_array($nuts_on_table4)){
			$old_nuts_quantity = $row['item_quantity'];
			$old_nuts_quantity = (int)$old_nuts_quantity + (int)$nuts_quantity;
			$update_nuts_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_nuts_quantity' WHERE item_id = '24'");

			$con->query($update_nuts_quantity);
		}
		$ka3keh_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '25'");
		while($row = mysqli_fetch_array($ka3keh_on_table4)){
			$old_ka3keh_quantity = $row['item_quantity'];
			$old_ka3keh_quantity = (int)$old_ka3keh_quantity + (int)$ka3keh_quantity;
			$update_ka3keh_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_ka3keh_quantity' WHERE item_id = '25'");

			$con->query($update_ka3keh_quantity);
		}
		$ka3kehwkhodra_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '26'");
		while($row = mysqli_fetch_array($ka3kehwkhodra_on_table4)){
			$old_ka3kehwkhodra_quantity = $row['item_quantity'];
			$old_ka3kehwkhodra_quantity = (int)$old_ka3kehwkhodra_quantity + (int)$ka3keh_w_khodra_quantity;
			$update_ka3kehwkhodra_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_ka3kehwkhodra_quantity' WHERE item_id = '26'");

			$con->query($update_ka3kehwkhodra_quantity);
		}
		$argileh3lkeh_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '27'");
		while($row = mysqli_fetch_array($argileh3lkeh_on_table4)){
			$old_argileh3lkeh_quantity = $row['item_quantity'];
			$old_argileh3lkeh_quantity = (int)$old_argileh3lkeh_quantity + (int)$m3assal_3lkeh_quantity;
			$update_argileh3lkeh_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_argileh3lkeh_quantity' WHERE item_id = '27'");

			$con->query($update_argileh3lkeh_quantity);
		}
		$cedars_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '28'");
		while($row = mysqli_fetch_array($cedars_on_table4)){
			$old_cedars_quantity = $row['item_quantity'];
			$old_cedars_quantity = (int)$old_cedars_quantity + (int)$cedars_quantity;
			$update_cedars_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_cedars_quantity' WHERE item_id = '28'");

			$con->query($update_cedars_quantity);
		}

		$eclair_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '29'");
		while($row = mysqli_fetch_array($eclair_on_table4)){
			$old_eclair_quantity = $row['item_quantity'];
			$old_eclair_quantity = (int)$old_eclair_quantity + (int)$eclair_quantity;
			$update_eclair_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_eclair_quantity' WHERE item_id = '29'");

			$con->query($update_eclair_quantity);
		}

		$cupcake_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '30'");
		while($row = mysqli_fetch_array($cupcake_on_table4)){
			$old_cupcake_quantity = $row['item_quantity'];
			$old_cupcake_quantity = (int)$old_cupcake_quantity + (int)$cupcake_quantity;
			$update_cupcake_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_cupcake_quantity' WHERE item_id = '30'");

			$con->query($update_cupcake_quantity);
		}

		$coconut_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '31'");
		while($row = mysqli_fetch_array($coconut_on_table4)){
			$old_coconut_quantity = $row['item_quantity'];
			$old_coconut_quantity = (int)$old_coconut_quantity + (int)$coconut_quantity;
			$update_coconut_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_coconut_quantity' WHERE item_id = '31'");

			$con->query($update_coconut_quantity);
		}

		$iced_coffee_on_table4 = $con->query("SELECT * FROM table4description WHERE item_id = '32'");
		while($row = mysqli_fetch_array($iced_coffee_on_table4)){
			$old_iced_coffee_quantity = $row['item_quantity'];
			$old_iced_coffee_quantity = (int)$old_iced_coffee_quantity + (int)$iced_coffee_quantity;
			$update_iced_coffee_quantity = $con->query("UPDATE table4description SET item_quantity = '$old_iced_coffee_quantity' WHERE item_id = '32'");

			$con->query($update_iced_coffee_quantity);
		}

	}
		//add items to table 5 description
		if ($tableid == 5) {
			# code...
		
		$coffee_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '1'");
		while($row = mysqli_fetch_array($coffee_on_table5)){
			$old_coffee_quantity = $row['item_quantity'];
			$old_coffee_quantity = (int)$old_coffee_quantity + (int)$coffee_quantity;
			$update_coffee_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_coffee_quantity' WHERE item_id = '1'");

			$con->query($update_coffee_quantity);
		}	
		$tea_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '2'");
		while($row = mysqli_fetch_array($tea_on_table5)){
			$old_tea_quantity = $row['item_quantity'];
			$old_tea_quantity = (int)$old_tea_quantity + (int)$tea_quantity;
			$update_tea_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_tea_quantity' WHERE item_id = '2'");

			$con->query($update_tea_quantity);
		}
		$nescafe_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '3'");
		while($row = mysqli_fetch_array($nescafe_on_table5)){
			$old_nescafe_quantity = $row['item_quantity'];
			$old_nescafe_quantity = (int)$old_nescafe_quantity + (int)$nescafe_quantity;
			$update_nescafe_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_nescafe_quantity' WHERE item_id = '3'");

			$con->query($update_nescafe_quantity);
		}
		$cappucino_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '4'");
		while($row = mysqli_fetch_array($cappucino_on_table5)){
			$old_cappucino_quantity = $row['item_quantity'];
			$old_cappucino_quantity = (int)$old_cappucino_quantity + (int)$cappucino_quantity;
			$update_cappucino_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_cappucino_quantity' WHERE item_id = '4'");

			$con->query($update_cappucino_quantity);
		}
		$zhourat_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '5'");
		while($row = mysqli_fetch_array($zhourat_on_table5)){
			$old_zhourat_quantity = $row['item_quantity'];
			$old_zhourat_quantity = (int)$old_zhourat_quantity + (int)$zhourat_quantity;
			$update_zhourat_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_zhourat_quantity' WHERE item_id = '5'");

			$con->query($update_zhourat_quantity);
		}
		$ginger_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '6'");
		while($row = mysqli_fetch_array($ginger_on_table5)){
			$old_ginger_quantity = $row['item_quantity'];
			$old_ginger_quantity = (int)$old_ginger_quantity + (int)$ginger_quantity;
			$update_ginger_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_ginger_quantity' WHERE item_id = '6'");

			$con->query($update_ginger_quantity);
		}
		$lemonjuice_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '7'");
		while($row = mysqli_fetch_array($lemonjuice_on_table5)){
			$old_lemonjuice_quantity = $row['item_quantity'];
			$old_lemonjuice_quantity = (int)$old_lemonjuice_quantity + (int)$lemon_juice_quantity;
			$update_lemonjuice_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_lemonjuice_quantity' WHERE item_id = '7'");

			$con->query($update_lemonjuice_quantity);
		}
		$lemonade_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '8'");
		while($row = mysqli_fetch_array($lemonade_on_table5)){
			$old_lemonade_quantity = $row['item_quantity'];
			$old_lemonade_quantity = (int)$old_lemonade_quantity + (int)$lemonade_quantity;
			$update_lemonade_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_lemonade_quantity' WHERE item_id = '8'");

			$con->query($update_lemonade_quantity);
		}
		$carrotjuice_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '9'");
		while($row = mysqli_fetch_array($carrotjuice_on_table5)){
			$old_carrotjuice_quantity = $row['item_quantity'];
			$old_carrotjuice_quantity = (int)$old_carrotjuice_quantity + (int)$carrot_juice_quantity;
			$update_carrotjuice_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_carrotjuice_quantity' WHERE item_id = '9'");

			$con->query($update_carrotjuice_quantity);
		}
		$sevenup_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '10'");
		while($row = mysqli_fetch_array($sevenup_on_table5)){
			$old_sevenup_quantity = $row['item_quantity'];
			$old_sevenup_quantity = (int)$old_sevenup_quantity + (int)$sevenup_quantity;
			$update_sevenup_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_sevenup_quantity' WHERE item_id = '10'");

			$con->query($update_sevenup_quantity);
		}
		$pepsi_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '11'");
		while($row = mysqli_fetch_array($pepsi_on_table5)){
			$old_pepsi_quantity = $row['item_quantity'];
			$old_pepsi_quantity = (int)$old_pepsi_quantity + (int)$pepsi_quantity;
			$update_pepsi_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_pepsi_quantity' WHERE item_id = '11'");

			$con->query($update_pepsi_quantity);
		}
		$mirinda_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '12'");
		while($row = mysqli_fetch_array($mirinda_on_table5)){
			$old_mirinda_quantity = $row['item_quantity'];
			$old_mirinda_quantity = (int)$old_mirinda_quantity + (int)$mirinda_quantity;
			$update_mirinda_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_mirinda_quantity' WHERE item_id = '12'");

			$con->query($update_mirinda_quantity);
		}
		$xtrapineapple_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '13'");
		while($row = mysqli_fetch_array($xtrapineapple_on_table5)){
			$old_xtrapineapple_quantity = $row['item_quantity'];
			$old_xtrapineapple_quantity = (int)$old_xtrapineapple_quantity + (int)$xtra_pineapple_quantity;
			$update_xtrapineapple_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_xtrapineapple_quantity' WHERE item_id = '13'");

			$con->query($update_xtrapineapple_quantity);
		}
		$ictpassion_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '14'");
		while($row = mysqli_fetch_array($ictpassion_on_table5)){
			$old_ictpassion_quantity = $row['item_quantity'];
			$old_ictpassion_quantity = (int)$old_ictpassion_quantity + (int)$ict_passion_quantity;
			$update_ictpassion_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_ictpassion_quantity' WHERE item_id = '14'");

			$con->query($update_ictpassion_quantity);
		}
		$ictpeach_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '15'");
		while($row = mysqli_fetch_array($ictpeach_on_table5)){
			$old_ictpeach_quantity = $row['item_quantity'];
			$old_ictpeach_quantity = (int)$old_ictpeach_quantity + (int)$ict_peach_quantity;
			$update_ictpeach_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_ictpeach_quantity' WHERE item_id = '15'");

			$con->query($update_ictpeach_quantity);
		}
		$ampblue_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '16'");
		while($row = mysqli_fetch_array($ampblue_on_table5)){
			$old_ampblue_quantity = $row['item_quantity'];
			$old_ampblue_quantity = (int)$old_ampblue_quantity + (int)$amp_blue_quantity;
			$update_ampblue_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_ampblue_quantity' WHERE item_id = '16'");

			$con->query($update_ampblue_quantity);
		}
		$xxl_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '17'");
		while($row = mysqli_fetch_array($xxl_on_table5)){
			$old_xxl_quantity = $row['item_quantity'];
			$old_xxl_quantity = (int)$old_xxl_quantity + (int)$xxl_quantity;
			$update_xxl_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_xxl_quantity' WHERE item_id = '17'");

			$con->query($update_xxl_quantity);
		}
		$mexican_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '18'");
		while($row = mysqli_fetch_array($mexican_on_table5)){
			$old_mexican_quantity = $row['item_quantity'];
			$old_mexican_quantity = (int)$old_mexican_quantity + (int)$mexican_quantity;
			$update_mexican_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_mexican_quantity' WHERE item_id = '18'");

			$con->query($update_mexican_quantity);
		}
		$smallwater_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '19'");
		while($row = mysqli_fetch_array($smallwater_on_table5)){
			$old_smallwater_quantity = $row['item_quantity'];
			$old_smallwater_quantity = (int)$old_smallwater_quantity + (int)$small_water_quantity;
			$update_smallwater_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_smallwater_quantity' WHERE item_id = '19'");

			$con->query($update_smallwater_quantity);
		}
		$argilehapple_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '20'");
		while($row = mysqli_fetch_array($argilehapple_on_table5)){
			$old_argilehapple_quantity = $row['item_quantity'];
			$old_argilehapple_quantity = (int)$old_argilehapple_quantity + (int)$m3assal_tffe7_quantity;
			$update_argilehapple_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_argilehapple_quantity' WHERE item_id = '20'");

			$con->query($update_argilehapple_quantity);
		}
		$argilehna3na3w7amod_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '21'");
		while($row = mysqli_fetch_array($argilehna3na3w7amod_on_table5)){
			$old_argilehna3na3w7amod_quantity = $row['item_quantity'];
			$old_argilehna3na3w7amod_quantity = (int)$old_argilehna3na3w7amod_quantity + (int)$m3assal_na3na3_w_7amod_quantity;
			$update_argilehna3na3w7amod_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_argilehna3na3w7amod_quantity' WHERE item_id = '21'");

			$con->query($update_argilehna3na3w7amod_quantity);
		}
		$argilehna3na3w3lkeh_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '22'");
		while($row = mysqli_fetch_array($argilehna3na3w3lkeh_on_table5)){
			$old_argilehna3na3w3lkeh_quantity = $row['item_quantity'];
			$old_argilehna3na3w3lkeh_quantity = (int)$old_argilehna3na3w3lkeh_quantity + (int)$m3assal_na3na3_w_3lkeh_quantity;
			$update_argilehna3na3w3lkeh_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_argilehna3na3w3lkeh_quantity' WHERE item_id = '22'");

			$con->query($update_argilehna3na3w3lkeh_quantity);
		}
		$argilehrasjabali_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '23'");
		while($row = mysqli_fetch_array($argilehrasjabali_on_table5)){
			$old_argilehrasjabali_quantity = $row['item_quantity'];
			$old_argilehrasjabali_quantity = (int)$old_argilehrasjabali_quantity + (int)$ras_jabeli_quantity;
			$update_argilehrasjabali_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_argilehrasjabali_quantity' WHERE item_id = '23'");

			$con->query($update_argilehrasjabali_quantity);
		}
		$nuts_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '24'");
		while($row = mysqli_fetch_array($nuts_on_table5)){
			$old_nuts_quantity = $row['item_quantity'];
			$old_nuts_quantity = (int)$old_nuts_quantity + (int)$nuts_quantity;
			$update_nuts_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_nuts_quantity' WHERE item_id = '24'");

			$con->query($update_nuts_quantity);
		}
		$ka3keh_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '25'");
		while($row = mysqli_fetch_array($ka3keh_on_table5)){
			$old_ka3keh_quantity = $row['item_quantity'];
			$old_ka3keh_quantity = (int)$old_ka3keh_quantity + (int)$ka3keh_quantity;
			$update_ka3keh_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_ka3keh_quantity' WHERE item_id = '25'");

			$con->query($update_ka3keh_quantity);
		}
		$ka3kehwkhodra_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '26'");
		while($row = mysqli_fetch_array($ka3kehwkhodra_on_table5)){
			$old_ka3kehwkhodra_quantity = $row['item_quantity'];
			$old_ka3kehwkhodra_quantity = (int)$old_ka3kehwkhodra_quantity + (int)$ka3keh_w_khodra_quantity;
			$update_ka3kehwkhodra_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_ka3kehwkhodra_quantity' WHERE item_id = '26'");

			$con->query($update_ka3kehwkhodra_quantity);
		}
		$argileh3lkeh_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '27'");
		while($row = mysqli_fetch_array($argileh3lkeh_on_table5)){
			$old_argileh3lkeh_quantity = $row['item_quantity'];
			$old_argileh3lkeh_quantity = (int)$old_argileh3lkeh_quantity + (int)$m3assal_3lkeh_quantity;
			$update_argileh3lkeh_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_argileh3lkeh_quantity' WHERE item_id = '27'");

			$con->query($update_argileh3lkeh_quantity);
		}
		$cedars_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '28'");
		while($row = mysqli_fetch_array($cedars_on_table5)){
			$old_cedars_quantity = $row['item_quantity'];
			$old_cedars_quantity = (int)$old_cedars_quantity + (int)$cedars_quantity;
			$update_cedars_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_cedars_quantity' WHERE item_id = '28'");

			$con->query($update_cedars_quantity);
		}

		$eclair_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '29'");
		while($row = mysqli_fetch_array($eclair_on_table5)){
			$old_eclair_quantity = $row['item_quantity'];
			$old_eclair_quantity = (int)$old_eclair_quantity + (int)$eclair_quantity;
			$update_eclair_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_eclair_quantity' WHERE item_id = '29'");

			$con->query($update_eclair_quantity);
		}

		$cupcake_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '30'");
		while($row = mysqli_fetch_array($cupcake_on_table5)){
			$old_cupcake_quantity = $row['item_quantity'];
			$old_cupcake_quantity = (int)$old_cupcake_quantity + (int)$cupcake_quantity;
			$update_cupcake_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_cupcake_quantity' WHERE item_id = '30'");

			$con->query($update_cupcake_quantity);
		}

		$coconut_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '31'");
		while($row = mysqli_fetch_array($coconut_on_table5)){
			$old_coconut_quantity = $row['item_quantity'];
			$old_coconut_quantity = (int)$old_coconut_quantity + (int)$coconut_quantity;
			$update_coconut_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_coconut_quantity' WHERE item_id = '31'");

			$con->query($update_coconut_quantity);
		}

		$iced_coffee_on_table5 = $con->query("SELECT * FROM table5description WHERE item_id = '32'");
		while($row = mysqli_fetch_array($iced_coffee_on_table5)){
			$old_iced_coffee_quantity = $row['item_quantity'];
			$old_iced_coffee_quantity = (int)$old_iced_coffee_quantity + (int)$iced_coffee_quantity;
			$update_iced_coffee_quantity = $con->query("UPDATE table5description SET item_quantity = '$old_iced_coffee_quantity' WHERE item_id = '32'");

			$con->query($update_iced_coffee_quantity);
		}


	}
		//add items to table 6 description
		if ($tableid == 6) {
			
		
		$coffee_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '1'");
		while($row = mysqli_fetch_array($coffee_on_table6)){
			$old_coffee_quantity = $row['item_quantity'];
			$old_coffee_quantity = (int)$old_coffee_quantity + (int)$coffee_quantity;
			$update_coffee_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_coffee_quantity' WHERE item_id = '1'");

			$con->query($update_coffee_quantity);
		}	
		$tea_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '2'");
		while($row = mysqli_fetch_array($tea_on_table6)){
			$old_tea_quantity = $row['item_quantity'];
			$old_tea_quantity = (int)$old_tea_quantity + (int)$tea_quantity;
			$update_tea_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_tea_quantity' WHERE item_id = '2'");

			$con->query($update_tea_quantity);
		}
		$nescafe_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '3'");
		while($row = mysqli_fetch_array($nescafe_on_table6)){
			$old_nescafe_quantity = $row['item_quantity'];
			$old_nescafe_quantity = (int)$old_nescafe_quantity + (int)$nescafe_quantity;
			$update_nescafe_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_nescafe_quantity' WHERE item_id = '3'");

			$con->query($update_nescafe_quantity);
		}
		$cappucino_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '4'");
		while($row = mysqli_fetch_array($cappucino_on_table6)){
			$old_cappucino_quantity = $row['item_quantity'];
			$old_cappucino_quantity = (int)$old_cappucino_quantity + (int)$cappucino_quantity;
			$update_cappucino_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_cappucino_quantity' WHERE item_id = '4'");

			$con->query($update_cappucino_quantity);
		}
		$zhourat_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '5'");
		while($row = mysqli_fetch_array($zhourat_on_table6)){
			$old_zhourat_quantity = $row['item_quantity'];
			$old_zhourat_quantity = (int)$old_zhourat_quantity + (int)$zhourat_quantity;
			$update_zhourat_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_zhourat_quantity' WHERE item_id = '5'");

			$con->query($update_zhourat_quantity);
		}
		$ginger_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '6'");
		while($row = mysqli_fetch_array($ginger_on_table6)){
			$old_ginger_quantity = $row['item_quantity'];
			$old_ginger_quantity = (int)$old_ginger_quantity + (int)$ginger_quantity;
			$update_ginger_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_ginger_quantity' WHERE item_id = '6'");

			$con->query($update_ginger_quantity);
		}
		$lemonjuice_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '7'");
		while($row = mysqli_fetch_array($lemonjuice_on_table6)){
			$old_lemonjuice_quantity = $row['item_quantity'];
			$old_lemonjuice_quantity = (int)$old_lemonjuice_quantity + (int)$lemon_juice_quantity;
			$update_lemonjuice_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_lemonjuice_quantity' WHERE item_id = '7'");

			$con->query($update_lemonjuice_quantity);
		}
		$lemonade_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '8'");
		while($row = mysqli_fetch_array($lemonade_on_table6)){
			$old_lemonade_quantity = $row['item_quantity'];
			$old_lemonade_quantity = (int)$old_lemonade_quantity + (int)$lemonade_quantity;
			$update_lemonade_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_lemonade_quantity' WHERE item_id = '8'");

			$con->query($update_lemonade_quantity);
		}
		$carrotjuice_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '9'");
		while($row = mysqli_fetch_array($carrotjuice_on_table6)){
			$old_carrotjuice_quantity = $row['item_quantity'];
			$old_carrotjuice_quantity = (int)$old_carrotjuice_quantity + (int)$carrot_juice_quantity;
			$update_carrotjuice_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_carrotjuice_quantity' WHERE item_id = '9'");

			$con->query($update_carrotjuice_quantity);
		}
		$sevenup_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '10'");
		while($row = mysqli_fetch_array($sevenup_on_table6)){
			$old_sevenup_quantity = $row['item_quantity'];
			$old_sevenup_quantity = (int)$old_sevenup_quantity + (int)$sevenup_quantity;
			$update_sevenup_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_sevenup_quantity' WHERE item_id = '10'");

			$con->query($update_sevenup_quantity);
		}
		$pepsi_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '11'");
		while($row = mysqli_fetch_array($pepsi_on_table6)){
			$old_pepsi_quantity = $row['item_quantity'];
			$old_pepsi_quantity = (int)$old_pepsi_quantity + (int)$pepsi_quantity;
			$update_pepsi_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_pepsi_quantity' WHERE item_id = '11'");

			$con->query($update_pepsi_quantity);
		}
		$mirinda_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '12'");
		while($row = mysqli_fetch_array($mirinda_on_table6)){
			$old_mirinda_quantity = $row['item_quantity'];
			$old_mirinda_quantity = (int)$old_mirinda_quantity + (int)$mirinda_quantity;
			$update_mirinda_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_mirinda_quantity' WHERE item_id = '12'");

			$con->query($update_mirinda_quantity);
		}
		$xtrapineapple_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '13'");
		while($row = mysqli_fetch_array($xtrapineapple_on_table6)){
			$old_xtrapineapple_quantity = $row['item_quantity'];
			$old_xtrapineapple_quantity = (int)$old_xtrapineapple_quantity + (int)$xtra_pineapple_quantity;
			$update_xtrapineapple_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_xtrapineapple_quantity' WHERE item_id = '13'");

			$con->query($update_xtrapineapple_quantity);
		}
		$ictpassion_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '14'");
		while($row = mysqli_fetch_array($ictpassion_on_table6)){
			$old_ictpassion_quantity = $row['item_quantity'];
			$old_ictpassion_quantity = (int)$old_ictpassion_quantity + (int)$ict_passion_quantity;
			$update_ictpassion_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_ictpassion_quantity' WHERE item_id = '14'");

			$con->query($update_ictpassion_quantity);
		}
		$ictpeach_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '15'");
		while($row = mysqli_fetch_array($ictpeach_on_table6)){
			$old_ictpeach_quantity = $row['item_quantity'];
			$old_ictpeach_quantity = (int)$old_ictpeach_quantity + (int)$ict_peach_quantity;
			$update_ictpeach_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_ictpeach_quantity' WHERE item_id = '15'");

			$con->query($update_ictpeach_quantity);
		}
		$ampblue_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '16'");
		while($row = mysqli_fetch_array($ampblue_on_table6)){
			$old_ampblue_quantity = $row['item_quantity'];
			$old_ampblue_quantity = (int)$old_ampblue_quantity + (int)$amp_blue_quantity;
			$update_ampblue_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_ampblue_quantity' WHERE item_id = '16'");

			$con->query($update_ampblue_quantity);
		}
		$xxl_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '17'");
		while($row = mysqli_fetch_array($xxl_on_table6)){
			$old_xxl_quantity = $row['item_quantity'];
			$old_xxl_quantity = (int)$old_xxl_quantity + (int)$xxl_quantity;
			$update_xxl_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_xxl_quantity' WHERE item_id = '17'");

			$con->query($update_xxl_quantity);
		}
		$mexican_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '18'");
		while($row = mysqli_fetch_array($mexican_on_table6)){
			$old_mexican_quantity = $row['item_quantity'];
			$old_mexican_quantity = (int)$old_mexican_quantity + (int)$mexican_quantity;
			$update_mexican_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_mexican_quantity' WHERE item_id = '18'");

			$con->query($update_mexican_quantity);
		}
		$smallwater_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '19'");
		while($row = mysqli_fetch_array($smallwater_on_table6)){
			$old_smallwater_quantity = $row['item_quantity'];
			$old_smallwater_quantity = (int)$old_smallwater_quantity + (int)$small_water_quantity;
			$update_smallwater_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_smallwater_quantity' WHERE item_id = '19'");

			$con->query($update_smallwater_quantity);
		}
		$argilehapple_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '20'");
		while($row = mysqli_fetch_array($argilehapple_on_table6)){
			$old_argilehapple_quantity = $row['item_quantity'];
			$old_argilehapple_quantity = (int)$old_argilehapple_quantity + (int)$m3assal_tffe7_quantity;
			$update_argilehapple_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_argilehapple_quantity' WHERE item_id = '20'");

			$con->query($update_argilehapple_quantity);
		}
		$argilehna3na3w7amod_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '21'");
		while($row = mysqli_fetch_array($argilehna3na3w7amod_on_table6)){
			$old_argilehna3na3w7amod_quantity = $row['item_quantity'];
			$old_argilehna3na3w7amod_quantity = (int)$old_argilehna3na3w7amod_quantity + (int)$m3assal_na3na3_w_7amod_quantity;
			$update_argilehna3na3w7amod_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_argilehna3na3w7amod_quantity' WHERE item_id = '21'");

			$con->query($update_argilehna3na3w7amod_quantity);
		}
		$argilehna3na3w3lkeh_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '22'");
		while($row = mysqli_fetch_array($argilehna3na3w3lkeh_on_table6)){
			$old_argilehna3na3w3lkeh_quantity = $row['item_quantity'];
			$old_argilehna3na3w3lkeh_quantity = (int)$old_argilehna3na3w3lkeh_quantity + (int)$m3assal_na3na3_w_3lkeh_quantity;
			$update_argilehna3na3w3lkeh_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_argilehna3na3w3lkeh_quantity' WHERE item_id = '22'");

			$con->query($update_argilehna3na3w3lkeh_quantity);
		}
		$argilehrasjabali_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '23'");
		while($row = mysqli_fetch_array($argilehrasjabali_on_table6)){
			$old_argilehrasjabali_quantity = $row['item_quantity'];
			$old_argilehrasjabali_quantity = (int)$old_argilehrasjabali_quantity + (int)$ras_jabeli_quantity;
			$update_argilehrasjabali_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_argilehrasjabali_quantity' WHERE item_id = '23'");

			$con->query($update_argilehrasjabali_quantity);
		}
		$nuts_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '24'");
		while($row = mysqli_fetch_array($nuts_on_table6)){
			$old_nuts_quantity = $row['item_quantity'];
			$old_nuts_quantity = (int)$old_nuts_quantity + (int)$nuts_quantity;
			$update_nuts_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_nuts_quantity' WHERE item_id = '24'");

			$con->query($update_nuts_quantity);
		}
		$ka3keh_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '25'");
		while($row = mysqli_fetch_array($ka3keh_on_table6)){
			$old_ka3keh_quantity = $row['item_quantity'];
			$old_ka3keh_quantity = (int)$old_ka3keh_quantity + (int)$ka3keh_quantity;
			$update_ka3keh_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_ka3keh_quantity' WHERE item_id = '25'");

			$con->query($update_ka3keh_quantity);
		}
		$ka3kehwkhodra_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '26'");
		while($row = mysqli_fetch_array($ka3kehwkhodra_on_table6)){
			$old_ka3kehwkhodra_quantity = $row['item_quantity'];
			$old_ka3kehwkhodra_quantity = (int)$old_ka3kehwkhodra_quantity + (int)$ka3keh_w_khodra_quantity;
			$update_ka3kehwkhodra_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_ka3kehwkhodra_quantity' WHERE item_id = '26'");

			$con->query($update_ka3kehwkhodra_quantity);
		}
		$argileh3lkeh_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '27'");
		while($row = mysqli_fetch_array($argileh3lkeh_on_table6)){
			$old_argileh3lkeh_quantity = $row['item_quantity'];
			$old_argileh3lkeh_quantity = (int)$old_argileh3lkeh_quantity + (int)$m3assal_3lkeh_quantity;
			$update_argileh3lkeh_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_argileh3lkeh_quantity' WHERE item_id = '27'");

			$con->query($update_argileh3lkeh_quantity);
		}
		$cedars_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '28'");
		while($row = mysqli_fetch_array($cedars_on_table6)){
			$old_cedars_quantity = $row['item_quantity'];
			$old_cedars_quantity = (int)$old_cedars_quantity + (int)$cedars_quantity;
			$update_cedars_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_cedars_quantity' WHERE item_id = '28'");

			$con->query($update_cedars_quantity);
		}


		$eclair_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '29'");
		while($row = mysqli_fetch_array($eclair_on_table6)){
			$old_eclair_quantity = $row['item_quantity'];
			$old_eclair_quantity = (int)$old_eclair_quantity + (int)$eclair_quantity;
			$update_eclair_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_eclair_quantity' WHERE item_id = '29'");

			$con->query($update_eclair_quantity);
		}

		$cupcake_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '30'");
		while($row = mysqli_fetch_array($cupcake_on_table6)){
			$old_cupcake_quantity = $row['item_quantity'];
			$old_cupcake_quantity = (int)$old_cupcake_quantity + (int)$cupcake_quantity;
			$update_cupcake_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_cupcake_quantity' WHERE item_id = '30'");

			$con->query($update_cupcake_quantity);
		}

		$coconut_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '31'");
		while($row = mysqli_fetch_array($coconut_on_table6)){
			$old_coconut_quantity = $row['item_quantity'];
			$old_coconut_quantity = (int)$old_coconut_quantity + (int)$coconut_quantity;
			$update_coconut_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_coconut_quantity' WHERE item_id = '31'");

			$con->query($update_coconut_quantity);
		}

		$iced_coffee_on_table6 = $con->query("SELECT * FROM table6description WHERE item_id = '32'");
		while($row = mysqli_fetch_array($iced_coffee_on_table6)){
			$old_iced_coffee_quantity = $row['item_quantity'];
			$old_iced_coffee_quantity = (int)$old_iced_coffee_quantity + (int)$iced_coffee_quantity;
			$update_iced_coffee_quantity = $con->query("UPDATE table6description SET item_quantity = '$old_iced_coffee_quantity' WHERE item_id = '32'");

			$con->query($update_iced_coffee_quantity);
		}


	}
		//add items to table 7 description
		if ($tableid == 7) {
		
		$coffee_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '1'");
		while($row = mysqli_fetch_array($coffee_on_table7)){
			$old_coffee_quantity = $row['item_quantity'];
			$old_coffee_quantity = (int)$old_coffee_quantity + (int)$coffee_quantity;
			$update_coffee_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_coffee_quantity' WHERE item_id = '1'");

			$con->query($update_coffee_quantity);
		}	
		$tea_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '2'");
		while($row = mysqli_fetch_array($tea_on_table7)){
			$old_tea_quantity = $row['item_quantity'];
			$old_tea_quantity = (int)$old_tea_quantity + (int)$tea_quantity;
			$update_tea_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_tea_quantity' WHERE item_id = '2'");

			$con->query($update_tea_quantity);
		}
		$nescafe_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '3'");
		while($row = mysqli_fetch_array($nescafe_on_table7)){
			$old_nescafe_quantity = $row['item_quantity'];
			$old_nescafe_quantity = (int)$old_nescafe_quantity + (int)$nescafe_quantity;
			$update_nescafe_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_nescafe_quantity' WHERE item_id = '3'");

			$con->query($update_nescafe_quantity);
		}
		$cappucino_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '4'");
		while($row = mysqli_fetch_array($cappucino_on_table7)){
			$old_cappucino_quantity = $row['item_quantity'];
			$old_cappucino_quantity = (int)$old_cappucino_quantity + (int)$cappucino_quantity;
			$update_cappucino_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_cappucino_quantity' WHERE item_id = '4'");

			$con->query($update_cappucino_quantity);
		}
		$zhourat_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '5'");
		while($row = mysqli_fetch_array($zhourat_on_table7)){
			$old_zhourat_quantity = $row['item_quantity'];
			$old_zhourat_quantity = (int)$old_zhourat_quantity + (int)$zhourat_quantity;
			$update_zhourat_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_zhourat_quantity' WHERE item_id = '5'");

			$con->query($update_zhourat_quantity);
		}
		$ginger_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '6'");
		while($row = mysqli_fetch_array($ginger_on_table7)){
			$old_ginger_quantity = $row['item_quantity'];
			$old_ginger_quantity = (int)$old_ginger_quantity + (int)$ginger_quantity;
			$update_ginger_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_ginger_quantity' WHERE item_id = '6'");

			$con->query($update_ginger_quantity);
		}
		$lemonjuice_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '7'");
		while($row = mysqli_fetch_array($lemonjuice_on_table7)){
			$old_lemonjuice_quantity = $row['item_quantity'];
			$old_lemonjuice_quantity = (int)$old_lemonjuice_quantity + (int)$lemon_juice_quantity;
			$update_lemonjuice_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_lemonjuice_quantity' WHERE item_id = '7'");

			$con->query($update_lemonjuice_quantity);
		}
		$lemonade_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '8'");
		while($row = mysqli_fetch_array($lemonade_on_table7)){
			$old_lemonade_quantity = $row['item_quantity'];
			$old_lemonade_quantity = (int)$old_lemonade_quantity + (int)$lemonade_quantity;
			$update_lemonade_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_lemonade_quantity' WHERE item_id = '8'");

			$con->query($update_lemonade_quantity);
		}
		$carrotjuice_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '9'");
		while($row = mysqli_fetch_array($carrotjuice_on_table7)){
			$old_carrotjuice_quantity = $row['item_quantity'];
			$old_carrotjuice_quantity = (int)$old_carrotjuice_quantity + (int)$carrot_juice_quantity;
			$update_carrotjuice_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_carrotjuice_quantity' WHERE item_id = '9'");

			$con->query($update_carrotjuice_quantity);
		}
		$sevenup_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '10'");
		while($row = mysqli_fetch_array($sevenup_on_table7)){
			$old_sevenup_quantity = $row['item_quantity'];
			$old_sevenup_quantity = (int)$old_sevenup_quantity + (int)$sevenup_quantity;
			$update_sevenup_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_sevenup_quantity' WHERE item_id = '10'");

			$con->query($update_sevenup_quantity);
		}
		$pepsi_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '11'");
		while($row = mysqli_fetch_array($pepsi_on_table7)){
			$old_pepsi_quantity = $row['item_quantity'];
			$old_pepsi_quantity = (int)$old_pepsi_quantity + (int)$pepsi_quantity;
			$update_pepsi_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_pepsi_quantity' WHERE item_id = '11'");

			$con->query($update_pepsi_quantity);
		}
		$mirinda_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '12'");
		while($row = mysqli_fetch_array($mirinda_on_table7)){
			$old_mirinda_quantity = $row['item_quantity'];
			$old_mirinda_quantity = (int)$old_mirinda_quantity + (int)$mirinda_quantity;
			$update_mirinda_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_mirinda_quantity' WHERE item_id = '12'");

			$con->query($update_mirinda_quantity);
		}
		$xtrapineapple_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '13'");
		while($row = mysqli_fetch_array($xtrapineapple_on_table7)){
			$old_xtrapineapple_quantity = $row['item_quantity'];
			$old_xtrapineapple_quantity = (int)$old_xtrapineapple_quantity + (int)$xtra_pineapple_quantity;
			$update_xtrapineapple_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_xtrapineapple_quantity' WHERE item_id = '13'");

			$con->query($update_xtrapineapple_quantity);
		}
		$ictpassion_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '14'");
		while($row = mysqli_fetch_array($ictpassion_on_table7)){
			$old_ictpassion_quantity = $row['item_quantity'];
			$old_ictpassion_quantity = (int)$old_ictpassion_quantity + (int)$ict_passion_quantity;
			$update_ictpassion_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_ictpassion_quantity' WHERE item_id = '14'");

			$con->query($update_ictpassion_quantity);
		}
		$ictpeach_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '15'");
		while($row = mysqli_fetch_array($ictpeach_on_table7)){
			$old_ictpeach_quantity = $row['item_quantity'];
			$old_ictpeach_quantity = (int)$old_ictpeach_quantity + (int)$ict_peach_quantity;
			$update_ictpeach_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_ictpeach_quantity' WHERE item_id = '15'");

			$con->query($update_ictpeach_quantity);
		}
		$ampblue_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '16'");
		while($row = mysqli_fetch_array($ampblue_on_table7)){
			$old_ampblue_quantity = $row['item_quantity'];
			$old_ampblue_quantity = (int)$old_ampblue_quantity + (int)$amp_blue_quantity;
			$update_ampblue_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_ampblue_quantity' WHERE item_id = '16'");

			$con->query($update_ampblue_quantity);
		}
		$xxl_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '17'");
		while($row = mysqli_fetch_array($xxl_on_table7)){
			$old_xxl_quantity = $row['item_quantity'];
			$old_xxl_quantity = (int)$old_xxl_quantity + (int)$xxl_quantity;
			$update_xxl_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_xxl_quantity' WHERE item_id = '17'");

			$con->query($update_xxl_quantity);
		}
		$mexican_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '18'");
		while($row = mysqli_fetch_array($mexican_on_table7)){
			$old_mexican_quantity = $row['item_quantity'];
			$old_mexican_quantity = (int)$old_mexican_quantity + (int)$mexican_quantity;
			$update_mexican_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_mexican_quantity' WHERE item_id = '18'");

			$con->query($update_mexican_quantity);
		}
		$smallwater_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '19'");
		while($row = mysqli_fetch_array($smallwater_on_table7)){
			$old_smallwater_quantity = $row['item_quantity'];
			$old_smallwater_quantity = (int)$old_smallwater_quantity + (int)$small_water_quantity;
			$update_smallwater_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_smallwater_quantity' WHERE item_id = '19'");

			$con->query($update_smallwater_quantity);
		}
		$argilehapple_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '20'");
		while($row = mysqli_fetch_array($argilehapple_on_table7)){
			$old_argilehapple_quantity = $row['item_quantity'];
			$old_argilehapple_quantity = (int)$old_argilehapple_quantity + (int)$m3assal_tffe7_quantity;
			$update_argilehapple_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_argilehapple_quantity' WHERE item_id = '20'");

			$con->query($update_argilehapple_quantity);
		}
		$argilehna3na3w7amod_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '21'");
		while($row = mysqli_fetch_array($argilehna3na3w7amod_on_table7)){
			$old_argilehna3na3w7amod_quantity = $row['item_quantity'];
			$old_argilehna3na3w7amod_quantity = (int)$old_argilehna3na3w7amod_quantity + (int)$m3assal_na3na3_w_7amod_quantity;
			$update_argilehna3na3w7amod_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_argilehna3na3w7amod_quantity' WHERE item_id = '21'");

			$con->query($update_argilehna3na3w7amod_quantity);
		}
		$argilehna3na3w3lkeh_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '22'");
		while($row = mysqli_fetch_array($argilehna3na3w3lkeh_on_table7)){
			$old_argilehna3na3w3lkeh_quantity = $row['item_quantity'];
			$old_argilehna3na3w3lkeh_quantity = (int)$old_argilehna3na3w3lkeh_quantity + (int)$m3assal_na3na3_w_3lkeh_quantity;
			$update_argilehna3na3w3lkeh_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_argilehna3na3w3lkeh_quantity' WHERE item_id = '22'");

			$con->query($update_argilehna3na3w3lkeh_quantity);
		}
		$argilehrasjabali_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '23'");
		while($row = mysqli_fetch_array($argilehrasjabali_on_table7)){
			$old_argilehrasjabali_quantity = $row['item_quantity'];
			$old_argilehrasjabali_quantity = (int)$old_argilehrasjabali_quantity + (int)$ras_jabeli_quantity;
			$update_argilehrasjabali_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_argilehrasjabali_quantity' WHERE item_id = '23'");

			$con->query($update_argilehrasjabali_quantity);
		}
		$nuts_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '24'");
		while($row = mysqli_fetch_array($nuts_on_table7)){
			$old_nuts_quantity = $row['item_quantity'];
			$old_nuts_quantity = (int)$old_nuts_quantity + (int)$nuts_quantity;
			$update_nuts_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_nuts_quantity' WHERE item_id = '24'");

			$con->query($update_nuts_quantity);
		}
		$ka3keh_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '25'");
		while($row = mysqli_fetch_array($ka3keh_on_table7)){
			$old_ka3keh_quantity = $row['item_quantity'];
			$old_ka3keh_quantity = (int)$old_ka3keh_quantity + (int)$ka3keh_quantity;
			$update_ka3keh_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_ka3keh_quantity' WHERE item_id = '25'");

			$con->query($update_ka3keh_quantity);
		}
		$ka3kehwkhodra_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '26'");
		while($row = mysqli_fetch_array($ka3kehwkhodra_on_table7)){
			$old_ka3kehwkhodra_quantity = $row['item_quantity'];
			$old_ka3kehwkhodra_quantity = (int)$old_ka3kehwkhodra_quantity + (int)$ka3keh_w_khodra_quantity;
			$update_ka3kehwkhodra_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_ka3kehwkhodra_quantity' WHERE item_id = '26'");

			$con->query($update_ka3kehwkhodra_quantity);
		}
		$argileh3lkeh_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '27'");
		while($row = mysqli_fetch_array($argileh3lkeh_on_table7)){
			$old_argileh3lkeh_quantity = $row['item_quantity'];
			$old_argileh3lkeh_quantity = (int)$old_argileh3lkeh_quantity + (int)$m3assal_3lkeh_quantity;
			$update_argileh3lkeh_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_argileh3lkeh_quantity' WHERE item_id = '27'");

			$con->query($update_argileh3lkeh_quantity);
		}
		$cedars_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '28'");
		while($row = mysqli_fetch_array($cedars_on_table7)){
			$old_cedars_quantity = $row['item_quantity'];
			$old_cedars_quantity = (int)$old_cedars_quantity + (int)$cedars_quantity;
			$update_cedars_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_cedars_quantity' WHERE item_id = '28'");

			$con->query($update_cedars_quantity);
		}


		$eclair_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '29'");
		while($row = mysqli_fetch_array($eclair_on_table7)){
			$old_eclair_quantity = $row['item_quantity'];
			$old_eclair_quantity = (int)$old_eclair_quantity + (int)$eclair_quantity;
			$update_eclair_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_eclair_quantity' WHERE item_id = '29'");

			$con->query($update_eclair_quantity);
		}

		$cupcake_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '30'");
		while($row = mysqli_fetch_array($cupcake_on_table7)){
			$old_cupcake_quantity = $row['item_quantity'];
			$old_cupcake_quantity = (int)$old_cupcake_quantity + (int)$cupcake_quantity;
			$update_cupcake_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_cupcake_quantity' WHERE item_id = '30'");

			$con->query($update_cupcake_quantity);
		}

		$coconut_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '31'");
		while($row = mysqli_fetch_array($coconut_on_table7)){
			$old_coconut_quantity = $row['item_quantity'];
			$old_coconut_quantity = (int)$old_coconut_quantity + (int)$coconut_quantity;
			$update_coconut_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_coconut_quantity' WHERE item_id = '31'");

			$con->query($update_coconut_quantity);
		}

		$iced_coffee_on_table7 = $con->query("SELECT * FROM table7description WHERE item_id = '32'");
		while($row = mysqli_fetch_array($iced_coffee_on_table7)){
			$old_iced_coffee_quantity = $row['item_quantity'];
			$old_iced_coffee_quantity = (int)$old_iced_coffee_quantity + (int)$iced_coffee_quantity;
			$update_iced_coffee_quantity = $con->query("UPDATE table7description SET item_quantity = '$old_iced_coffee_quantity' WHERE item_id = '32'");

			$con->query($update_iced_coffee_quantity);
		}


	}
		//add items to table 8 description
		if ($tableid == 8) {
			
		$coffee_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '1'");
		while($row = mysqli_fetch_array($coffee_on_table8)){
			$old_coffee_quantity = $row['item_quantity'];
			$old_coffee_quantity = (int)$old_coffee_quantity + (int)$coffee_quantity;
			$update_coffee_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_coffee_quantity' WHERE item_id = '1'");

			$con->query($update_coffee_quantity);
		}	
		$tea_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '2'");
		while($row = mysqli_fetch_array($tea_on_table8)){
			$old_tea_quantity = $row['item_quantity'];
			$old_tea_quantity = (int)$old_tea_quantity + (int)$tea_quantity;
			$update_tea_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_tea_quantity' WHERE item_id = '2'");

			$con->query($update_tea_quantity);
		}
		$nescafe_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '3'");
		while($row = mysqli_fetch_array($nescafe_on_table8)){
			$old_nescafe_quantity = $row['item_quantity'];
			$old_nescafe_quantity = (int)$old_nescafe_quantity + (int)$nescafe_quantity;
			$update_nescafe_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_nescafe_quantity' WHERE item_id = '3'");

			$con->query($update_nescafe_quantity);
		}
		$cappucino_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '4'");
		while($row = mysqli_fetch_array($cappucino_on_table8)){
			$old_cappucino_quantity = $row['item_quantity'];
			$old_cappucino_quantity = (int)$old_cappucino_quantity + (int)$cappucino_quantity;
			$update_cappucino_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_cappucino_quantity' WHERE item_id = '4'");

			$con->query($update_cappucino_quantity);
		}
		$zhourat_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '5'");
		while($row = mysqli_fetch_array($zhourat_on_table8)){
			$old_zhourat_quantity = $row['item_quantity'];
			$old_zhourat_quantity = (int)$old_zhourat_quantity + (int)$zhourat_quantity;
			$update_zhourat_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_zhourat_quantity' WHERE item_id = '5'");

			$con->query($update_zhourat_quantity);
		}
		$ginger_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '6'");
		while($row = mysqli_fetch_array($ginger_on_table8)){
			$old_ginger_quantity = $row['item_quantity'];
			$old_ginger_quantity = (int)$old_ginger_quantity + (int)$ginger_quantity;
			$update_ginger_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_ginger_quantity' WHERE item_id = '6'");

			$con->query($update_ginger_quantity);
		}
		$lemonjuice_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '7'");
		while($row = mysqli_fetch_array($lemonjuice_on_table8)){
			$old_lemonjuice_quantity = $row['item_quantity'];
			$old_lemonjuice_quantity = (int)$old_lemonjuice_quantity + (int)$lemon_juice_quantity;
			$update_lemonjuice_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_lemonjuice_quantity' WHERE item_id = '7'");

			$con->query($update_lemonjuice_quantity);
		}
		$lemonade_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '8'");
		while($row = mysqli_fetch_array($lemonade_on_table8)){
			$old_lemonade_quantity = $row['item_quantity'];
			$old_lemonade_quantity = (int)$old_lemonade_quantity + (int)$lemonade_quantity;
			$update_lemonade_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_lemonade_quantity' WHERE item_id = '8'");

			$con->query($update_lemonade_quantity);
		}
		$carrotjuice_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '9'");
		while($row = mysqli_fetch_array($carrotjuice_on_table8)){
			$old_carrotjuice_quantity = $row['item_quantity'];
			$old_carrotjuice_quantity = (int)$old_carrotjuice_quantity + (int)$carrot_juice_quantity;
			$update_carrotjuice_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_carrotjuice_quantity' WHERE item_id = '9'");

			$con->query($update_carrotjuice_quantity);
		}
		$sevenup_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '10'");
		while($row = mysqli_fetch_array($sevenup_on_table8)){
			$old_sevenup_quantity = $row['item_quantity'];
			$old_sevenup_quantity = (int)$old_sevenup_quantity + (int)$sevenup_quantity;
			$update_sevenup_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_sevenup_quantity' WHERE item_id = '10'");

			$con->query($update_sevenup_quantity);
		}
		$pepsi_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '11'");
		while($row = mysqli_fetch_array($pepsi_on_table8)){
			$old_pepsi_quantity = $row['item_quantity'];
			$old_pepsi_quantity = (int)$old_pepsi_quantity + (int)$pepsi_quantity;
			$update_pepsi_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_pepsi_quantity' WHERE item_id = '11'");

			$con->query($update_pepsi_quantity);
		}
		$mirinda_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '12'");
		while($row = mysqli_fetch_array($mirinda_on_table8)){
			$old_mirinda_quantity = $row['item_quantity'];
			$old_mirinda_quantity = (int)$old_mirinda_quantity + (int)$mirinda_quantity;
			$update_mirinda_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_mirinda_quantity' WHERE item_id = '12'");

			$con->query($update_mirinda_quantity);
		}
		$xtrapineapple_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '13'");
		while($row = mysqli_fetch_array($xtrapineapple_on_table8)){
			$old_xtrapineapple_quantity = $row['item_quantity'];
			$old_xtrapineapple_quantity = (int)$old_xtrapineapple_quantity + (int)$xtra_pineapple_quantity;
			$update_xtrapineapple_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_xtrapineapple_quantity' WHERE item_id = '13'");

			$con->query($update_xtrapineapple_quantity);
		}
		$ictpassion_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '14'");
		while($row = mysqli_fetch_array($ictpassion_on_table8)){
			$old_ictpassion_quantity = $row['item_quantity'];
			$old_ictpassion_quantity = (int)$old_ictpassion_quantity + (int)$ict_passion_quantity;
			$update_ictpassion_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_ictpassion_quantity' WHERE item_id = '14'");

			$con->query($update_ictpassion_quantity);
		}
		$ictpeach_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '15'");
		while($row = mysqli_fetch_array($ictpeach_on_table8)){
			$old_ictpeach_quantity = $row['item_quantity'];
			$old_ictpeach_quantity = (int)$old_ictpeach_quantity + (int)$ict_peach_quantity;
			$update_ictpeach_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_ictpeach_quantity' WHERE item_id = '15'");

			$con->query($update_ictpeach_quantity);
		}
		$ampblue_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '16'");
		while($row = mysqli_fetch_array($ampblue_on_table8)){
			$old_ampblue_quantity = $row['item_quantity'];
			$old_ampblue_quantity = (int)$old_ampblue_quantity + (int)$amp_blue_quantity;
			$update_ampblue_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_ampblue_quantity' WHERE item_id = '16'");

			$con->query($update_ampblue_quantity);
		}
		$xxl_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '17'");
		while($row = mysqli_fetch_array($xxl_on_table8)){
			$old_xxl_quantity = $row['item_quantity'];
			$old_xxl_quantity = (int)$old_xxl_quantity + (int)$xxl_quantity;
			$update_xxl_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_xxl_quantity' WHERE item_id = '17'");

			$con->query($update_xxl_quantity);
		}
		$mexican_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '18'");
		while($row = mysqli_fetch_array($mexican_on_table8)){
			$old_mexican_quantity = $row['item_quantity'];
			$old_mexican_quantity = (int)$old_mexican_quantity + (int)$mexican_quantity;
			$update_mexican_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_mexican_quantity' WHERE item_id = '18'");

			$con->query($update_mexican_quantity);
		}
		$smallwater_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '19'");
		while($row = mysqli_fetch_array($smallwater_on_table8)){
			$old_smallwater_quantity = $row['item_quantity'];
			$old_smallwater_quantity = (int)$old_smallwater_quantity + (int)$small_water_quantity;
			$update_smallwater_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_smallwater_quantity' WHERE item_id = '19'");

			$con->query($update_smallwater_quantity);
		}
		$argilehapple_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '20'");
		while($row = mysqli_fetch_array($argilehapple_on_table8)){
			$old_argilehapple_quantity = $row['item_quantity'];
			$old_argilehapple_quantity = (int)$old_argilehapple_quantity + (int)$m3assal_tffe7_quantity;
			$update_argilehapple_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_argilehapple_quantity' WHERE item_id = '20'");

			$con->query($update_argilehapple_quantity);
		}
		$argilehna3na3w7amod_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '21'");
		while($row = mysqli_fetch_array($argilehna3na3w7amod_on_table8)){
			$old_argilehna3na3w7amod_quantity = $row['item_quantity'];
			$old_argilehna3na3w7amod_quantity = (int)$old_argilehna3na3w7amod_quantity + (int)$m3assal_na3na3_w_7amod_quantity;
			$update_argilehna3na3w7amod_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_argilehna3na3w7amod_quantity' WHERE item_id = '21'");

			$con->query($update_argilehna3na3w7amod_quantity);
		}
		$argilehna3na3w3lkeh_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '22'");
		while($row = mysqli_fetch_array($argilehna3na3w3lkeh_on_table8)){
			$old_argilehna3na3w3lkeh_quantity = $row['item_quantity'];
			$old_argilehna3na3w3lkeh_quantity = (int)$old_argilehna3na3w3lkeh_quantity + (int)$m3assal_na3na3_w_3lkeh_quantity;
			$update_argilehna3na3w3lkeh_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_argilehna3na3w3lkeh_quantity' WHERE item_id = '22'");

			$con->query($update_argilehna3na3w3lkeh_quantity);
		}
		$argilehrasjabali_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '23'");
		while($row = mysqli_fetch_array($argilehrasjabali_on_table8)){
			$old_argilehrasjabali_quantity = $row['item_quantity'];
			$old_argilehrasjabali_quantity = (int)$old_argilehrasjabali_quantity + (int)$ras_jabeli_quantity;
			$update_argilehrasjabali_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_argilehrasjabali_quantity' WHERE item_id = '23'");

			$con->query($update_argilehrasjabali_quantity);
		}
		$nuts_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '24'");
		while($row = mysqli_fetch_array($nuts_on_table8)){
			$old_nuts_quantity = $row['item_quantity'];
			$old_nuts_quantity = (int)$old_nuts_quantity + (int)$nuts_quantity;
			$update_nuts_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_nuts_quantity' WHERE item_id = '24'");

			$con->query($update_nuts_quantity);
		}
		$ka3keh_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '25'");
		while($row = mysqli_fetch_array($ka3keh_on_table8)){
			$old_ka3keh_quantity = $row['item_quantity'];
			$old_ka3keh_quantity = (int)$old_ka3keh_quantity + (int)$ka3keh_quantity;
			$update_ka3keh_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_ka3keh_quantity' WHERE item_id = '25'");

			$con->query($update_ka3keh_quantity);
		}
		$ka3kehwkhodra_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '26'");
		while($row = mysqli_fetch_array($ka3kehwkhodra_on_table8)){
			$old_ka3kehwkhodra_quantity = $row['item_quantity'];
			$old_ka3kehwkhodra_quantity = (int)$old_ka3kehwkhodra_quantity + (int)$ka3keh_w_khodra_quantity;
			$update_ka3kehwkhodra_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_ka3kehwkhodra_quantity' WHERE item_id = '26'");

			$con->query($update_ka3kehwkhodra_quantity);
		}
		$argileh3lkeh_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '27'");
		while($row = mysqli_fetch_array($argileh3lkeh_on_table8)){
			$old_argileh3lkeh_quantity = $row['item_quantity'];
			$old_argileh3lkeh_quantity = (int)$old_argileh3lkeh_quantity + (int)$m3assal_3lkeh_quantity;
			$update_argileh3lkeh_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_argileh3lkeh_quantity' WHERE item_id = '27'");

			$con->query($update_argileh3lkeh_quantity);
		}
		$cedars_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '28'");
		while($row = mysqli_fetch_array($cedars_on_table8)){
			$old_cedars_quantity = $row['item_quantity'];
			$old_cedars_quantity = (int)$old_cedars_quantity + (int)$cedars_quantity;
			$update_cedars_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_cedars_quantity' WHERE item_id = '28'");

			$con->query($update_cedars_quantity);
		}

		$eclair_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '29'");
		while($row = mysqli_fetch_array($eclair_on_table8)){
			$old_eclair_quantity = $row['item_quantity'];
			$old_eclair_quantity = (int)$old_eclair_quantity + (int)$eclair_quantity;
			$update_eclair_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_eclair_quantity' WHERE item_id = '29'");

			$con->query($update_eclair_quantity);
		}

		$cupcake_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '30'");
		while($row = mysqli_fetch_array($cupcake_on_table8)){
			$old_cupcake_quantity = $row['item_quantity'];
			$old_cupcake_quantity = (int)$old_cupcake_quantity + (int)$cupcake_quantity;
			$update_cupcake_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_cupcake_quantity' WHERE item_id = '30'");

			$con->query($update_cupcake_quantity);
		}

		$coconut_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '31'");
		while($row = mysqli_fetch_array($coconut_on_table8)){
			$old_coconut_quantity = $row['item_quantity'];
			$old_coconut_quantity = (int)$old_coconut_quantity + (int)$coconut_quantity;
			$update_coconut_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_coconut_quantity' WHERE item_id = '31'");

			$con->query($update_coconut_quantity);
		}

		$iced_coffee_on_table8 = $con->query("SELECT * FROM table8description WHERE item_id = '32'");
		while($row = mysqli_fetch_array($iced_coffee_on_table8)){
			$old_iced_coffee_quantity = $row['item_quantity'];
			$old_iced_coffee_quantity = (int)$old_iced_coffee_quantity + (int)$iced_coffee_quantity;
			$update_iced_coffee_quantity = $con->query("UPDATE table8description SET item_quantity = '$old_iced_coffee_quantity' WHERE item_id = '32'");

			$con->query($update_iced_coffee_quantity);
		}



	}
		//add items to table 9 description
		if ($tableid == 9) {
			
		$coffee_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '1'");
		while($row = mysqli_fetch_array($coffee_on_table9)){
			$old_coffee_quantity = $row['item_quantity'];
			$old_coffee_quantity = (int)$old_coffee_quantity + (int)$coffee_quantity;
			$update_coffee_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_coffee_quantity' WHERE item_id = '1'");

			$con->query($update_coffee_quantity);
		}	
		$tea_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '2'");
		while($row = mysqli_fetch_array($tea_on_table9)){
			$old_tea_quantity = $row['item_quantity'];
			$old_tea_quantity = (int)$old_tea_quantity + (int)$tea_quantity;
			$update_tea_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_tea_quantity' WHERE item_id = '2'");

			$con->query($update_tea_quantity);
		}
		$nescafe_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '3'");
		while($row = mysqli_fetch_array($nescafe_on_table9)){
			$old_nescafe_quantity = $row['item_quantity'];
			$old_nescafe_quantity = (int)$old_nescafe_quantity + (int)$nescafe_quantity;
			$update_nescafe_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_nescafe_quantity' WHERE item_id = '3'");

			$con->query($update_nescafe_quantity);
		}
		$cappucino_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '4'");
		while($row = mysqli_fetch_array($cappucino_on_table9)){
			$old_cappucino_quantity = $row['item_quantity'];
			$old_cappucino_quantity = (int)$old_cappucino_quantity + (int)$cappucino_quantity;
			$update_cappucino_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_cappucino_quantity' WHERE item_id = '4'");

			$con->query($update_cappucino_quantity);
		}
		$zhourat_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '5'");
		while($row = mysqli_fetch_array($zhourat_on_table9)){
			$old_zhourat_quantity = $row['item_quantity'];
			$old_zhourat_quantity = (int)$old_zhourat_quantity + (int)$zhourat_quantity;
			$update_zhourat_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_zhourat_quantity' WHERE item_id = '5'");

			$con->query($update_zhourat_quantity);
		}
		$ginger_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '6'");
		while($row = mysqli_fetch_array($ginger_on_table9)){
			$old_ginger_quantity = $row['item_quantity'];
			$old_ginger_quantity = (int)$old_ginger_quantity + (int)$ginger_quantity;
			$update_ginger_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_ginger_quantity' WHERE item_id = '6'");

			$con->query($update_ginger_quantity);
		}
		$lemonjuice_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '7'");
		while($row = mysqli_fetch_array($lemonjuice_on_table9)){
			$old_lemonjuice_quantity = $row['item_quantity'];
			$old_lemonjuice_quantity = (int)$old_lemonjuice_quantity + (int)$lemon_juice_quantity;
			$update_lemonjuice_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_lemonjuice_quantity' WHERE item_id = '7'");

			$con->query($update_lemonjuice_quantity);
		}
		$lemonade_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '8'");
		while($row = mysqli_fetch_array($lemonade_on_table9)){
			$old_lemonade_quantity = $row['item_quantity'];
			$old_lemonade_quantity = (int)$old_lemonade_quantity + (int)$lemonade_quantity;
			$update_lemonade_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_lemonade_quantity' WHERE item_id = '8'");

			$con->query($update_lemonade_quantity);
		}
		$carrotjuice_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '9'");
		while($row = mysqli_fetch_array($carrotjuice_on_table9)){
			$old_carrotjuice_quantity = $row['item_quantity'];
			$old_carrotjuice_quantity = (int)$old_carrotjuice_quantity + (int)$carrot_juice_quantity;
			$update_carrotjuice_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_carrotjuice_quantity' WHERE item_id = '9'");

			$con->query($update_carrotjuice_quantity);
		}
		$sevenup_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '10'");
		while($row = mysqli_fetch_array($sevenup_on_table9)){
			$old_sevenup_quantity = $row['item_quantity'];
			$old_sevenup_quantity = (int)$old_sevenup_quantity + (int)$sevenup_quantity;
			$update_sevenup_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_sevenup_quantity' WHERE item_id = '10'");

			$con->query($update_sevenup_quantity);
		}
		$pepsi_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '11'");
		while($row = mysqli_fetch_array($pepsi_on_table9)){
			$old_pepsi_quantity = $row['item_quantity'];
			$old_pepsi_quantity = (int)$old_pepsi_quantity + (int)$pepsi_quantity;
			$update_pepsi_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_pepsi_quantity' WHERE item_id = '11'");

			$con->query($update_pepsi_quantity);
		}
		$mirinda_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '12'");
		while($row = mysqli_fetch_array($mirinda_on_table9)){
			$old_mirinda_quantity = $row['item_quantity'];
			$old_mirinda_quantity = (int)$old_mirinda_quantity + (int)$mirinda_quantity;
			$update_mirinda_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_mirinda_quantity' WHERE item_id = '12'");

			$con->query($update_mirinda_quantity);
		}
		$xtrapineapple_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '13'");
		while($row = mysqli_fetch_array($xtrapineapple_on_table9)){
			$old_xtrapineapple_quantity = $row['item_quantity'];
			$old_xtrapineapple_quantity = (int)$old_xtrapineapple_quantity + (int)$xtra_pineapple_quantity;
			$update_xtrapineapple_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_xtrapineapple_quantity' WHERE item_id = '13'");

			$con->query($update_xtrapineapple_quantity);
		}
		$ictpassion_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '14'");
		while($row = mysqli_fetch_array($ictpassion_on_table9)){
			$old_ictpassion_quantity = $row['item_quantity'];
			$old_ictpassion_quantity = (int)$old_ictpassion_quantity + (int)$ict_passion_quantity;
			$update_ictpassion_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_ictpassion_quantity' WHERE item_id = '14'");

			$con->query($update_ictpassion_quantity);
		}
		$ictpeach_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '15'");
		while($row = mysqli_fetch_array($ictpeach_on_table9)){
			$old_ictpeach_quantity = $row['item_quantity'];
			$old_ictpeach_quantity = (int)$old_ictpeach_quantity + (int)$ict_peach_quantity;
			$update_ictpeach_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_ictpeach_quantity' WHERE item_id = '15'");

			$con->query($update_ictpeach_quantity);
		}
		$ampblue_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '16'");
		while($row = mysqli_fetch_array($ampblue_on_table9)){
			$old_ampblue_quantity = $row['item_quantity'];
			$old_ampblue_quantity = (int)$old_ampblue_quantity + (int)$amp_blue_quantity;
			$update_ampblue_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_ampblue_quantity' WHERE item_id = '16'");

			$con->query($update_ampblue_quantity);
		}
		$xxl_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '17'");
		while($row = mysqli_fetch_array($xxl_on_table9)){
			$old_xxl_quantity = $row['item_quantity'];
			$old_xxl_quantity = (int)$old_xxl_quantity + (int)$xxl_quantity;
			$update_xxl_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_xxl_quantity' WHERE item_id = '17'");

			$con->query($update_xxl_quantity);
		}
		$mexican_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '18'");
		while($row = mysqli_fetch_array($mexican_on_table9)){
			$old_mexican_quantity = $row['item_quantity'];
			$old_mexican_quantity = (int)$old_mexican_quantity + (int)$mexican_quantity;
			$update_mexican_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_mexican_quantity' WHERE item_id = '18'");

			$con->query($update_mexican_quantity);
		}
		$smallwater_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '19'");
		while($row = mysqli_fetch_array($smallwater_on_table9)){
			$old_smallwater_quantity = $row['item_quantity'];
			$old_smallwater_quantity = (int)$old_smallwater_quantity + (int)$small_water_quantity;
			$update_smallwater_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_smallwater_quantity' WHERE item_id = '19'");

			$con->query($update_smallwater_quantity);
		}
		$argilehapple_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '20'");
		while($row = mysqli_fetch_array($argilehapple_on_table9)){
			$old_argilehapple_quantity = $row['item_quantity'];
			$old_argilehapple_quantity = (int)$old_argilehapple_quantity + (int)$m3assal_tffe7_quantity;
			$update_argilehapple_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_argilehapple_quantity' WHERE item_id = '20'");

			$con->query($update_argilehapple_quantity);
		}
		$argilehna3na3w7amod_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '21'");
		while($row = mysqli_fetch_array($argilehna3na3w7amod_on_table9)){
			$old_argilehna3na3w7amod_quantity = $row['item_quantity'];
			$old_argilehna3na3w7amod_quantity = (int)$old_argilehna3na3w7amod_quantity + (int)$m3assal_na3na3_w_7amod_quantity;
			$update_argilehna3na3w7amod_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_argilehna3na3w7amod_quantity' WHERE item_id = '21'");

			$con->query($update_argilehna3na3w7amod_quantity);
		}
		$argilehna3na3w3lkeh_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '22'");
		while($row = mysqli_fetch_array($argilehna3na3w3lkeh_on_table9)){
			$old_argilehna3na3w3lkeh_quantity = $row['item_quantity'];
			$old_argilehna3na3w3lkeh_quantity = (int)$old_argilehna3na3w3lkeh_quantity + (int)$m3assal_na3na3_w_3lkeh_quantity;
			$update_argilehna3na3w3lkeh_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_argilehna3na3w3lkeh_quantity' WHERE item_id = '22'");

			$con->query($update_argilehna3na3w3lkeh_quantity);
		}
		$argilehrasjabali_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '23'");
		while($row = mysqli_fetch_array($argilehrasjabali_on_table9)){
			$old_argilehrasjabali_quantity = $row['item_quantity'];
			$old_argilehrasjabali_quantity = (int)$old_argilehrasjabali_quantity + (int)$ras_jabeli_quantity;
			$update_argilehrasjabali_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_argilehrasjabali_quantity' WHERE item_id = '23'");

			$con->query($update_argilehrasjabali_quantity);
		}
		$nuts_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '24'");
		while($row = mysqli_fetch_array($nuts_on_table9)){
			$old_nuts_quantity = $row['item_quantity'];
			$old_nuts_quantity = (int)$old_nuts_quantity + (int)$nuts_quantity;
			$update_nuts_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_nuts_quantity' WHERE item_id = '24'");

			$con->query($update_nuts_quantity);
		}
		$ka3keh_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '25'");
		while($row = mysqli_fetch_array($ka3keh_on_table9)){
			$old_ka3keh_quantity = $row['item_quantity'];
			$old_ka3keh_quantity = (int)$old_ka3keh_quantity + (int)$ka3keh_quantity;
			$update_ka3keh_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_ka3keh_quantity' WHERE item_id = '25'");

			$con->query($update_ka3keh_quantity);
		}
		$ka3kehwkhodra_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '26'");
		while($row = mysqli_fetch_array($ka3kehwkhodra_on_table9)){
			$old_ka3kehwkhodra_quantity = $row['item_quantity'];
			$old_ka3kehwkhodra_quantity = (int)$old_ka3kehwkhodra_quantity + (int)$ka3keh_w_khodra_quantity;
			$update_ka3kehwkhodra_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_ka3kehwkhodra_quantity' WHERE item_id = '26'");

			$con->query($update_ka3kehwkhodra_quantity);
		}
		$argileh3lkeh_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '27'");
		while($row = mysqli_fetch_array($argileh3lkeh_on_table9)){
			$old_argileh3lkeh_quantity = $row['item_quantity'];
			$old_argileh3lkeh_quantity = (int)$old_argileh3lkeh_quantity + (int)$m3assal_3lkeh_quantity;
			$update_argileh3lkeh_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_argileh3lkeh_quantity' WHERE item_id = '27'");

			$con->query($update_argileh3lkeh_quantity);
		}
		$cedars_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '28'");
		while($row = mysqli_fetch_array($cedars_on_table9)){
			$old_cedars_quantity = $row['item_quantity'];
			$old_cedars_quantity = (int)$old_cedars_quantity + (int)$cedars_quantity;
			$update_cedars_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_cedars_quantity' WHERE item_id = '28'");

			$con->query($update_cedars_quantity);
		}



		$eclair_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '29'");
		while($row = mysqli_fetch_array($eclair_on_table9)){
			$old_eclair_quantity = $row['item_quantity'];
			$old_eclair_quantity = (int)$old_eclair_quantity + (int)$eclair_quantity;
			$update_eclair_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_eclair_quantity' WHERE item_id = '29'");

			$con->query($update_eclair_quantity);
		}

		$cupcake_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '30'");
		while($row = mysqli_fetch_array($cupcake_on_table9)){
			$old_cupcake_quantity = $row['item_quantity'];
			$old_cupcake_quantity = (int)$old_cupcake_quantity + (int)$cupcake_quantity;
			$update_cupcake_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_cupcake_quantity' WHERE item_id = '30'");

			$con->query($update_cupcake_quantity);
		}

		$coconut_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '31'");
		while($row = mysqli_fetch_array($coconut_on_table9)){
			$old_coconut_quantity = $row['item_quantity'];
			$old_coconut_quantity = (int)$old_coconut_quantity + (int)$coconut_quantity;
			$update_coconut_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_coconut_quantity' WHERE item_id = '31'");

			$con->query($update_coconut_quantity);
		}

		$iced_coffee_on_table9 = $con->query("SELECT * FROM table9description WHERE item_id = '32'");
		while($row = mysqli_fetch_array($iced_coffee_on_table9)){
			$old_iced_coffee_quantity = $row['item_quantity'];
			$old_iced_coffee_quantity = (int)$old_iced_coffee_quantity + (int)$iced_coffee_quantity;
			$update_iced_coffee_quantity = $con->query("UPDATE table9description SET item_quantity = '$old_iced_coffee_quantity' WHERE item_id = '32'");

			$con->query($update_iced_coffee_quantity);
		}
}











		header("Location: stock.php");

		



		//update stocks 


	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '1' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$coffee_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '1' ");

		$con->query($update_stock);
	}


	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '2' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$tea_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '2' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '3' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$nescafe_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '3' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '4' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$cappucino_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '4' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '5' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$zhourat_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '5' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '6' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ginger_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '6' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '7' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$lemon_juice_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '7' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '8' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$lemonade_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '8' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '9' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$carrot_juice_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '9' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '10' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$sevenup_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '10' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '11' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$pepsi_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '11' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '12' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$mirinda_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '12' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '13' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$xtra_pineapple_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '13' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '14' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ict_passion_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '14' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '15' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ict_peach_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '15' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '16' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$amp_blue_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '16' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '17' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$xxl_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '17' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '18' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$mexican_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '18' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '19' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$small_water_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '19' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '20' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$m3assal_tffe7_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '20' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '21' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$m3assal_na3na3_w_7amod_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '21' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '22' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$m3assal_na3na3_w_3lkeh_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '22' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '23' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ras_jabeli_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '23' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '24' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$nuts_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '24' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '25' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ka3keh_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '25' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '26' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ka3keh_w_khodra_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '26' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '27' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$m3assal_3lkeh_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '27' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '28' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$cedars_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '28' ");

		$con->query($update_stock);
	}		

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '29' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$eclair_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '29' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '30' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$cupcake_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '30' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '31' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$coconut_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '31' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '32' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$iced_coffee_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '32' ");

		$con->query($update_stock);
	}

}

	

}



if (isset($_POST['directsell'])) {
	$customer_id_for_direct_sell = $_POST['customer_id'];
	//get items quantity
	$coffee_quantity = $_POST['coffeequantity'];
	$tea_quantity = $_POST['teaquantity'];
	$nescafe_quantity = $_POST['nescafequantity'];
	$cappucino_quantity = $_POST['cappucinoquantity'];
	$zhourat_quantity = $_POST['zhouratquantity'];
	$ginger_quantity = $_POST['gingerquantity'];
	$lemon_juice_quantity = $_POST['lemonjuicequantity'];
	$lemonade_quantity = $_POST['lemonadequantity'];
	$carrot_juice_quantity = $_POST['carrotjuicequantity'];
	$sevenup_quantity = $_POST['7upquantity'];
	$pepsi_quantity = $_POST['pepsiquantity'];
	$mirinda_quantity = $_POST['mirindaquantity'];
	$xtra_pineapple_quantity = $_POST['xtrapineapplequantity'];
	$ict_passion_quantity = $_POST['ictpassionfruitsquantity'];
	$ict_peach_quantity = $_POST['ictpeachquantity'];
	$amp_blue_quantity = $_POST['ampbluequantity'];
	$xxl_quantity = $_POST['xxlquantity'];
	$mexican_quantity = $_POST['mexicanquantity'];
	$small_water_quantity = $_POST['smallwaterquantity'];
	$m3assal_tffe7_quantity = $_POST['m3assaltffe7quantity'];
	$m3assal_na3na3_w_7amod_quantity = $_POST['m3assalna3na3w7amodquantity'];
	$m3assal_na3na3_w_3lkeh_quantity = $_POST['m3assalna3na3w3lkehquantity'];
	$ras_jabeli_quantity = $_POST['rasjabaliquantity'];
	$nuts_quantity = $_POST['nutsquantity'];
	$ka3keh_quantity = $_POST['ka3kehquantity'];
	$ka3keh_w_khodra_quantity = $_POST['ka3kehwkhodraquantity'];
	$m3assal_3lkeh_quantity = $_POST['m3assal3lkehquantity'];
	$cedars_quantity = $_POST['cedarsquantity'];
	$eclair_quantity = $_POST['eclairquantity'];
	$cupcake_quantity = $_POST['cupcakequantity'];
	$coconut_quantity = $_POST['coconutquantity'];
	$iced_coffee_quantity = $_POST['icedcoffeequantity'];


	//get items prices

	$coffee = $con->query("SELECT price FROM products WHERE id = '1' ");
	while ($row = mysqli_fetch_array($coffee)) {
		$coffeeprice = $row['price'];
	}

	$tea = $con->query("SELECT price FROM products WHERE id = '2' ");
	while ($row = mysqli_fetch_array($tea)) {
		$teaprice = $row['price'];
	}

	$nescafe = $con->query("SELECT price FROM products WHERE id = '3' ");
	while ($row = mysqli_fetch_array($nescafe)) {
		$nescafeprice = $row['price'];
	}

	$cappucino = $con->query("SELECT price FROM products WHERE id = '4' ");
	while ($row = mysqli_fetch_array($cappucino)) {
		$cappucinoprice = $row['price'];
	}

	$zhourat = $con->query("SELECT price FROM products WHERE id = '5' ");
	while ($row = mysqli_fetch_array($zhourat)) {
		$zhouratprice = $row['price'];
	}

	$ginger = $con->query("SELECT price FROM products WHERE id = '6' ");
	while ($row = mysqli_fetch_array($ginger)) {
		$gingerprice = $row['price'];
	}

	$lemon = $con->query("SELECT price FROM products WHERE id = '7' ");
	while ($row = mysqli_fetch_array($lemon)) {
		$lemonprice = $row['price'];
		$lemon_points_for_direct_sell = "6";
	}

	$lemonade = $con->query("SELECT price FROM products WHERE id = '8' ");
	while ($row = mysqli_fetch_array($lemonade)) {
		$lemonadeprice = $row['price'];
	}

	$carrot = $con->query("SELECT price FROM products WHERE id = '9' ");
	while ($row = mysqli_fetch_array($carrot)) {
		$carrotprice = $row['price'];
	}

	$sevenup = $con->query("SELECT price FROM products WHERE id = '10' ");
	while ($row = mysqli_fetch_array($sevenup)) {
		$sevenupprice = $row['price'];
	}

	$pepsi = $con->query("SELECT price FROM products WHERE id = '11' ");
	while ($row = mysqli_fetch_array($pepsi)) {
		$pepsiprice = $row['price'];
	}

	$mirinda = $con->query("SELECT price FROM products WHERE id = '12' ");
	while ($row = mysqli_fetch_array($mirinda)) {
		$mirindaprice = $row['price'];
	}

	$xtrapineapple = $con->query("SELECT price FROM products WHERE id = '13' ");
	while ($row = mysqli_fetch_array($xtrapineapple)) {
		$xtrapineappleprice = $row['price'];
	}

	$ictpassionfruits = $con->query("SELECT price FROM products WHERE id = '14' ");
	while ($row = mysqli_fetch_array($ictpassionfruits)) {
		$ictpassionfruitsprice = $row['price'];
	}

	$ictpeach = $con->query("SELECT price FROM products WHERE id = '15' ");
	while ($row = mysqli_fetch_array($ictpeach)) {
		$ictpeachprice = $row['price'];
	}

	$ampblue = $con->query("SELECT price FROM products WHERE id = '16' ");
	while ($row = mysqli_fetch_array($ampblue)) {
		$ampblueprice = $row['price'];
	}

	$xxl = $con->query("SELECT price FROM products WHERE id = '17' ");
	while ($row = mysqli_fetch_array($xxl)) {
		$xxlprice = $row['price'];
	}

	$mexican = $con->query("SELECT price FROM products WHERE id = '18' ");
	while ($row = mysqli_fetch_array($mexican)) {
		$mexicanprice = $row['price'];
	}

	$smallwater = $con->query("SELECT price FROM products WHERE id = '19' ");
	while ($row = mysqli_fetch_array($smallwater)) {
		$smallwaterprice = $row['price'];
	}

	$m3assaltfe7 = $con->query("SELECT price FROM products WHERE id = '20' ");
	while ($row = mysqli_fetch_array($m3assaltfe7)) {
		$m3assaltfe7price = $row['price'];
	}

	$m3assalna3na3w7amod = $con->query("SELECT price FROM products WHERE id = '21' ");
	while ($row = mysqli_fetch_array($m3assalna3na3w7amod)) {
		$m3assalna3na3w7amodprice = $row['price'];
	}

	$m3assalna3na3w3lkeh = $con->query("SELECT price FROM products WHERE id = '22' ");
	while ($row = mysqli_fetch_array($m3assalna3na3w3lkeh)) {
		$m3assalna3na3w3lkehprice = $row['price'];
	}

	$rasjabali = $con->query("SELECT price FROM products WHERE id = '23' ");
	while ($row = mysqli_fetch_array($rasjabali)) {
		$rasjabaliprice = $row['price'];
	}

	$nuts = $con->query("SELECT price FROM products WHERE id = '24' ");
	while ($row = mysqli_fetch_array($nuts)) {
		$nutsprice = $row['price'];
	}

	$ka3keh = $con->query("SELECT price FROM products WHERE id = '25' ");
	while ($row = mysqli_fetch_array($ka3keh)) {
		$ka3kehprice = $row['price'];
	}

	$ka3kehwkhodra = $con->query("SELECT price FROM products WHERE id = '26' ");
	while ($row = mysqli_fetch_array($ka3kehwkhodra)) {
		$ka3kehwkhodraprice = $row['price'];
	}

	$m3assal3lkeh = $con->query("SELECT price FROM products WHERE id = '27' ");
	while ($row = mysqli_fetch_array($m3assal3lkeh)) {
		$m3assal3lkehprice = $row['price'];
	}

	$cedars = $con->query("SELECT price FROM products WHERE id = '28' ");
	while ($row = mysqli_fetch_array($cedars)) {
		$cedarsprice = $row['price'];
	}

	$eclair = $con->query("SELECT price FROM products WHERE id = '29' ");
	while ($row = mysqli_fetch_array($ecalir)) {
		$eclairprice = $row['price'];
	}

	$cupcake = $con->query("SELECT price FROM products WHERE id = '30' ");
	while ($row = mysqli_fetch_array($cupcake)) {
		$cupcakeprice = $row['price'];
	}

	$coconut = $con->query("SELECT price FROM products WHERE id = '31' ");
	while ($row = mysqli_fetch_array($coconut)) {
		$coconutprice = $row['price'];
	}

	$icedcoffee = $con->query("SELECT price FROM products WHERE id = '32' ");
	while ($row = mysqli_fetch_array($icedcoffee)) {
		$icedcoffeeprice = $row['price'];
	}



	//add items to daily sell and update total

	$today = $today = date('20y-m-d');
	$daily_total = $con->query("SELECT * FROM statistics WHERE date1 = '$today' ");
	while ($row = mysqli_fetch_array($daily_total)) {
		$dailytotal1 = $row['total_earnings'];

		$direct_total =  ((int)$coffee_quantity * (int)$coffeeprice ) + ((int)$tea_quantity * (int)$teaprice ) + ((int)$nescafe_quantity * (int)$nescafeprice ) + ((int)$cappucino_quantity * (int)$cappucinoprice) + ((int)$zhourat_quantity * (int)$zhouratprice) + ((int)$ginger_quantity * (int)$gingerprice)  + ((int)$lemon_juice_quantity * (int)$lemonprice) + ((int)$lemonade_quantity * (int)$lemonadeprice) + ((int)$carrot_juice_quantity * (int)$carrotprice) + ((int)$sevenup_quantity * (int)$sevenupprice) + ((int)$pepsi_quantity * (int)$pepsiprice) + ((int)$mirinda_quantity * (int)$mirindaprice) + ((int)$xtra_pineapple_quantity * (int)$xtrapineappleprice) + ((int)$ict_passion_quantity * (int)$ictpassionfruitsprice) + ((int)$ict_peach_quantity * (int)$ictpeachprice) + ((int)$amp_blue_quantity * (int)$ampblueprice) + ((int)$xxl_quantity * (int)$xxlprice) + ((int)$mexican_quantity * (int)$mexicanprice) + ((int)$small_water_quantity * (int)$smallwaterprice) + ((int)$m3assal_tffe7_quantity * (int)$m3assaltfe7price) + ((int)$m3assal_na3na3_w_7amod_quantity * (int)$m3assalna3na3w7amodprice) + ((int)$m3assal_na3na3_w_3lkeh_quantity * (int)$m3assalna3na3w3lkehprice) + ((int)$ras_jabeli_quantity * (int)$rasjabaliprice) + ((int)$m3assal_3lkeh_quantity * (int)$m3assal3lkehprice) + ((int)$cedars_quantity * (int)$cedarsprice) + ((int)$nuts_quantity * (int)$nutsprice) + ((int)$ka3keh_quantity * (int)$ka3kehprice) + ((int)$ka3keh_w_khodra_quantity * (int)$ka3kehwkhodraprice) + ((int)$eclair_quantity * (int)$eclairprice) + ((int)$cupcake_quantity * (int)$cupcakeprice) + ((int)$coconut_quantity * (int)$coconutprice) + ((int)$iced_coffee_quantity * (int)$icedcoffeeprice);

		

		$dailytotal1 = $dailytotal1 + $direct_total ;
		$update_daily_total = $con->query("UPDATE statistics SET total_earnings = '$dailytotal1' ");
		$con->query($update_daily_total);
		header("Location: stock.php");


		//update stocks 

	

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '1' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$coffee_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '1' ");

		$con->query($update_stock);
	}


	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '2' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$tea_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '2' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '3' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$nescafe_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '3' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '4' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$cappucino_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '4' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '5' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$zhourat_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '5' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '6' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ginger_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '6' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '7' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$lemon_juice_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '7' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '8' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$lemonade_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '8' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '9' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$carrot_juice_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '9' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '10' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$sevenup_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '10' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '11' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$pepsi_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '11' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '12' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$mirinda_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '12' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '13' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$xtra_pineapple_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '13' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '14' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ict_passion_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '14' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '15' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ict_peach_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '15' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '16' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$amp_blue_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '16' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '17' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$xxl_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '17' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '18' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$mexican_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '18' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '19' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$small_water_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '19' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '20' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$m3assal_tffe7_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '20' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '21' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$m3assal_na3na3_w_7amod_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '21' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '22' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$m3assal_na3na3_w_3lkeh_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '22' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '23' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ras_jabeli_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '23' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '24' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$nuts_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '24' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '25' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ka3keh_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '25' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '26' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$ka3keh_w_khodra_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '26' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '27' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$m3assal_3lkeh_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '27' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '28' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$cedars_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '28' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '29' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$eclair_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '29' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '30' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$cupcake_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '30' ");

		$con->query($update_stock);
	}


	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '31' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$coconut_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '31' ");

		$con->query($update_stock);
	}

	$get_stock = $con->query("SELECT quantity FROM products WHERE id = '32' ");

	while ($row = mysqli_fetch_array($get_stock)) {
		$old_stock = $row['quantity'];

		$new_stock = $old_stock - (int)$iced_coffee_quantity ;

		$update_stock = $con->query("UPDATE products SET quantity = '$new_stock' WHERE id = '32' ");

		$con->query($update_stock);
	}


	}

	
}



	




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cafe Stock</title>
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

#customer_id {
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
    	
      <div class="card">
       
      	<div>
      		<form method="post">
      			<div style="float: right;" >
      			<input type="number" name="tableid" id="tableid" placeholder="table number (1-9)"  style="background-color: #CFC0BD;position: fixed;opacity: 1;width: 15%; border: 1px solid black; font-weight: bold; font-size: 16px; color: black;">
      			<br><br><br><br><br>
      			<!--
      			<input type="number" name="customer_id" id="customer_id" placeholder="Customer ID"  style="background-color: #CFC0BD;position: fixed;opacity: 1;width: 15%; border: 1px solid black; font-weight: bold; font-size: 16px; color: black;">
      			<br><br><br><br><br>
      		-->

      			<input type="submit" name="additemstotable" value="Add To Table" id="addtotablebtn" style="background-color: green;position: fixed;opacity: 1;width: 15%;color: white;">

      			<br><br><br><br><br>

      			<input type="submit" name="directsell" value="Direct Sell" id="addtotablebtn" style="background-color: green;position: fixed;opacity: 1;width: 15%;color: white;" >

      			</div>
      		<table>
      			
      			<tr>
      				<th colspan="8" id="items-category"> <marquee behavior="alternate" scrollamount="5">  Hot Drinks </marquee> </th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/coffee.png"></td>
      				<th colspan="3">1- Coffee</th>
      				<td rowspan="3"><img src="pictures/products/tea.jpg"></td>
      				<th colspan="3">2- Tea</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '1' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>

      				 <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '1' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>

      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '1' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '2' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '2' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '2' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="coffeequantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="teaquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/nescafe.png"></td>
      				<th colspan="3">3- Nescafe</th>
      				<td rowspan="3"><img src="pictures/products/cappucino.jpg"></td>
      				<th colspan="3">4- Cappucino</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '3' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '3' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '3' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '4' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '4' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '4' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="nescafequantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="cappucinoquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/zhourat.jpg"></td>
      				<th colspan="3">5- Zhourat</th>
      				<td rowspan="3"><img src="pictures/products/ginger.png"></td>
      				<th colspan="3">6- Ginger</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '5' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '5' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '5' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '6' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '6' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '6' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="zhouratquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="gingerquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			      			<tr>
      				<th colspan="8" id="items-category"> <marquee behavior="alternate" scrollamount="5">  Fresh Drinks </marquee> </th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/lemon.png"></td>
      				<th colspan="3">7- Lemon Juice</th>
      				<td rowspan="3"><img src="pictures/products/lemonade.png"></td>
      				<th colspan="3">8- Lemonade</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '7' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '7' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '7' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '8' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '8' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '8' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="lemonjuicequantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="lemonadequantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/carrot.jpg"></td>
      				<th colspan="8">9- Carrot Juice</th>
      				
      			</tr>
      			<tr>
      				<th colspan="2">Price in LBP</th>
      				<th colspan="2">Direct Price</th>
      				<th colspan="3">in Stock</th>
      				
      			</tr>
      			<tr>
      				<th colspan="2"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '9' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th colspan="2"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '9' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th colspan="3"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '9' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				
      			</tr>
      			<tr>
      				<th colspan="8" height="40px;">
      					<input type="number" name="carrotjuicequantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<th colspan="8" id="items-category"> <marquee behavior="alternate" scrollamount="5">Cold Drinks</marquee> </th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/7up.jpg"></td>
      				<th colspan="3">10- 7UP</th>
      				<td rowspan="3"><img src="pictures/products/pepsi.jpg"></td>
      				<th colspan="3">11- Pepsi</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '10' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '10' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '10' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '11' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '11' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '11' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="7upquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="pepsiquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/mirinda.jpg"></td>
      				<th colspan="3">12- Mirinda</th>
      				<td rowspan="3"><img src="pictures/products/xtra-ananas.jpg"></td>
      				<th colspan="3">13- Xtra Pineapple</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '12' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '12' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '12' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '13' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '13' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '13' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="mirindaquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="xtrapineapplequantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/lipton-ice-tea-passion-fruits.jpg"></td>
      				<th colspan="3">14- ICT Passion Fruits</th>
      				<td rowspan="3"><img src="pictures/products/lipton-ice-tea-peach.jpg"></td>
      				<th colspan="3">15- ICT Peach</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '14' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '14' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '14' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '15' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '15' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '15' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="ictpassionfruitsquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="ictpeachquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/amp-blue.png"></td>
      				<th colspan="3">16- AMP Blue</th>
      				<td rowspan="3"><img src="pictures/products/xxl.png"></td>
      				<th colspan="3">17- XXL</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '16' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '16' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '16' ");
      				while($row = mysqli_fetch_array($result))
					{ 	$amp_blue_quantity1 = $row['quantity'];
						echo $amp_blue_quantity1;}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '17' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '17' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '17' ");
      				while($row = mysqli_fetch_array($result))
					{ 	$xxl_quantity1 = $row['quantity'];
						echo $xxl_quantity1;}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="ampbluequantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="xxlquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/mexican.jpg"></td>
      				<th colspan="3">18- Mexican</th>
      				<td rowspan="3"><img src="pictures/products/watter-bottle-small.jpg"></td>
      				<th colspan="3">19- Small Water</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '18' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '18' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<!--<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '18' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th> -->

      				 <th>
      				 	<?php
      				 	echo (int)$amp_blue_quantity1 + (int)$xxl_quantity1 ;
      				 	?>

      				 </th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '19' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '19' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '19' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="mexicanquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="smallwaterquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/icedcoffee.jpg"></td>
      				<th colspan="8">32- Iced Coffee</th>
      				
      			</tr>
      			<tr>
      				<th colspan="2">Price in LBP</th>
      				<th colspan="2">Direct Price</th>
      				<th colspan="3">in Stock</th>
      				
      			</tr>
      			<tr>
      				<th colspan="2"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '32' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th colspan="2"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '32' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th colspan="3"><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '32' ");
      				while($row = mysqli_fetch_array($result))
					{ 	echo $row['quantity'];}
      				 ?></th>
      				
      			</tr>
      			<tr>
      				<th colspan="8" height="40px;">
      					<input type="number" name="icedcoffeequantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<th colspan="8" id="items-category"> <marquee behavior="alternate" scrollamount="5">Argileh</marquee> </th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/m3assal-tfe7.jpg"></td>
      				<th colspan="3">20- tffe7</th>
      				<td rowspan="3"><img src="pictures/products/m3assal-na3na3w7amod.jpg"></td>
      				<th colspan="3">21- na3na3 w 7amod</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '20' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '20' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '20' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '21' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '21' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '21' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="m3assaltffe7quantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="m3assalna3na3w7amodquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/m3assal-na3na3w3lkeh.jpg"></td>
      				<th colspan="3">22- na3na3 w 3lkeh</th>
      				<td rowspan="3"><img src="pictures/products/ras-jabali.jpg"></td>
      				<th colspan="3">23- ras jabali</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '22' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '22' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '22' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '23' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '23' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '23' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="m3assalna3na3w3lkehquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="rasjabaliquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>

      			<tr>
      				<td rowspan="3"><img src="pictures/products/mazaya-gum.jpg"></td>
      				<th colspan="3">27- m3assal 3lkeh</th>
      				<td rowspan="3"><img src="pictures/products/Cedars-Silver.jpg"></td>
      				<th colspan="3">28- Cedars Silver</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '27' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '27' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '27' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '28' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '28' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '28' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="m3assal3lkehquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="cedarsquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>

      			<tr>
      				<th colspan="8" id="items-category"> <marquee behavior="alternate" scrollamount="5">Others</marquee> </th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/nuts.jpg"></td>
      				<th colspan="3">24- Nuts</th>
      				<td rowspan="3"><img src="pictures/products/ka3keh.jpg"></td>
      				<th colspan="3">25- ka3keh</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '24' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '24' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '24' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '25' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '25' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '25' ");
      				while($row = mysqli_fetch_array($result))
					{ 	$ka3keh_quantity1 = $row['quantity'];
						echo $ka3keh_quantity1;}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="nutsquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="ka3kehquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/ka3kehwkhodra.jpg"></td>
      				<th colspan="3">26- ka3keh w khodra</th>
      				
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '26' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '26' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php echo (int)$ka3keh_quantity1 ?></th>
      				
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="ka3kehwkhodraquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<th colspan="8" id="items-category"> <marquee behavior="alternate" scrollamount="5">Dessert</marquee> </th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/eclair.jpg"></td>
      				<th colspan="3">29- Eclair</th>
      				<td rowspan="3"><img src="pictures/products/cupcake.jpg"></td>
      				<th colspan="3">30- Cup Cake</th>
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '29' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '29' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '29' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['quantity'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '30' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '30' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '30' ");
      				while($row = mysqli_fetch_array($result))
					{ 	echo $row['quantity'];}
      				 ?></th>
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="eclairquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      				<th colspan="4" height="40px;">
      					<input type="number" name="cupcakequantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      			<tr>
      				<td rowspan="3"><img src="pictures/products/coconut.jpg"></td>
      				<th colspan="3">31- Coconut</th>
      				
      			</tr>
      			<tr>
      				<th>Price in LBP</th>
      				<th>Direct Price</th>
      				<th>in Stock</th>
      				
      			</tr>
      			<tr>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '31' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['price'];}
      				 ?></th>
      				  <th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '31' ");
      				while($row = mysqli_fetch_array($result))
					{ echo $row['direct_sell_price'];}
      				 ?></th>
      				<th><?php 
      				$result = $con->query("SELECT * FROM products WHERE id = '31' ");
      				while($row = mysqli_fetch_array($result))
					{ 	echo $row['quantity'];}
      				 ?></th>
      				
      			</tr>
      			<tr>
      				<th colspan="4" height="40px;">
      					<input type="number" name="coconutquantity" id="quantity" placeholder="enter quantity" min="0" style="width: 75%; height: 35px;outline: none;border:none;">
      				</th>
      			</tr>
      		</table>
      	</div>
       	
      		</form>
      	</div>
       

  </body>
</html>