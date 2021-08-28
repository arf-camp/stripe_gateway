<?php
require('config.php');//data-amount="1000"
?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
	    
		data-name="FoodKa Developer Team"
		data-description="online food ordering payment"
		data-image="myLogo.jpg"
		data-currency="BDT"
		data-email="tysonfarib123@gmail.com"
		
		
	>
	</script>

</form>