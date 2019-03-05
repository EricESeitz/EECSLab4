
<?php 
include 'EECSLab4Exercise3/style.css';

$username = $_POST["username"];  //number of user-defined item 1
$password = $_POST["password"];  //number of user-defined item 1

$item1Count = $_POST["oneBanana"];  //number of user-defined item 1
$item2Count = $_POST["5Banana"];  //number of user-defined item 2
$item3Count = $_POST["10Banana"];  //number of user-defined item 3

$item1Subtotal = $item1Count * 1;
$item2Subtotal = $item2Count * 4;
$item3Subtotal = $item3Count * 7;

$userShippingPrice = $_POST["shippingOption"];  //chooses one of 3 shipping methods

$totalCost = $userShippingPrice + $item1Subtotal + $item2Subtotal + $item3Subtotal;
$userShippingMethod;
if ($userShippingPrice == 5)
{
    $userShippingMethod = "Three Day";
}
else if ($userShippingPrice == 50)
{
    $userShippingMethod = "Overnight";
}
else
{
    $userShippingMethod = "Free";
}

//include css sheet in backend html
echo "<link rel='stylesheet' href='style.css' />";

echo "<h1>Thank you for your purchase!</h1>";
echo "Customer password: " . $password . "<br>";

echo "<h2>Recipt</h2>";
echo "<table border='1px solid black'>";
echo "<td> </td><td bgcolor='lightgrey'>Quantity</td><td bgcolor='lightgrey'>Cost per item</td><td bgcolor='lightgrey'>Sub total</td>"; 	//create initial header row
echo "<tr><td bgcolor='lightgrey'>One Banana</td><td bgcolor='lightpink'>" . $item1Count . "</td><td bgcolor='lightpink'>$1</td><td bgcolor='lightpink'>$" . $item1Subtotal . "</td></tr>"; 	//create initial header row
echo "<tr><td bgcolor='lightgrey'>5 Bananas</td><td bgcolor='lightpink'>" . $item2Count . "</td><td bgcolor='lightpink'>$4</td><td bgcolor='lightpink'>$" . $item2Subtotal . "</td></tr>"; 	//create initial header row
echo "<tr><td bgcolor='lightgrey'>10 Bananas</td><td bgcolor='lightpink'>" . $item3Count . "</td><td bgcolor='lightpink'>$7</td><td bgcolor='lightpink'>$" . $item3Subtotal . "</td></tr>"; 	//create initial header row
echo "<tr><td bgcolor='lightgrey'>Shipping</td><td  bgcolor='lightpink' colspan='2'>" . $userShippingMethod . "</td><td bgcolor='lightpink'>$" . $userShippingPrice . "</td></tr>"; 	//create initial header row
echo "<tr><td bgcolor='lightgrey' colspan='3'>Total Cost</td><td bgcolor='lightpink'>$" . $totalCost . "</td></tr>"; 	//create initial header row

echo 		"</table>";		//end of table

?>
