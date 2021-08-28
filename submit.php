<?php
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>50000,
		"currency"=>"BDT",
		"description"=>"online food ordering payment",
		"source"=>$token,
	));

	echo "<pre>";
	print_r($data);



echo $data['balance_transaction']; echo $data['status'];   echo $data['id']; 
	          
	            


}
?>