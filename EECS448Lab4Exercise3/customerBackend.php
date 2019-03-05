<?php

$item1Count = $_POST["item1"];  //number of user-defined item 1

$userShippingMethod = $_POST["shippingOption"];  //chooses one of 3 shipping methods

echo  "Customer shipping method: " . $userShippingMethod;

?>