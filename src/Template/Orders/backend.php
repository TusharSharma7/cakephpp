<?php
  //Handle the form
  extract($_POST);
  $filename = "OrderSummery.txt";
				$file = fopen($filename,"w");
				
				$data = "Name: ".$_POST['name'] . PHP_EOL;
				$data .= "Address: ".$_POST['add'] . PHP_EOL;
				$data .= "City: ".$_POST['city'] . PHP_EOL;
				$data .= "Province: ".$_POST['province'] . PHP_EOL;
				$data .= "Email: ".$_POST['emailId'] . PHP_EOL;
				$data .= "Phone: ".$_POST['mob'] . PHP_EOL;
				$data .= "Postal:".$_POST['zip']. PHP_EOL;
				$data .= "Pizza size: " .$_POST['size'] . PHP_EOL;
				//$data .= "Toppings: " .$toplist . PHP_EOL;
				$data .= "Crust Type: " .$_POST['crust'] . PHP_EOL;
				//$data .= "Toppings: $" .$toprate . PHP_EOL;
				
				
				//if (isset($_POST['toppings'])) {
    //$optionArray = $_POST['toppings'];
	
    //for ($i=0; $i<count($optionArray); $i++) {
      //  echo $optionArray[$i]."<br />";
		
    //}

				
				fwrite($file,$data);
				fclose($file)
 
?>
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <title>Conestoga Pizzeria</title>

</head>
<body>
<p>Name: <?php echo $name;?></p>
<p>Address: <?php echo $add;?></p>
<p>City: <?php echo $city;?></p>
<p>Province: <?php echo $province;?></p>
<p>Postal Code: <?php echo $zip;?></p>
<p>Contact Number: <?php echo $mob;?></p>
<p>Email_Id: <?php echo $emailId;?></p>
<p>Pizza Size: <?php echo $size;?></p>
<p>Crust: <?php echo $crust;?></p>

</body>

</html>
