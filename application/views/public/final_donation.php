<?php include('public_header.php');?>
<!--form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> <?php // remove sandbox=1 for live transactions ?>
	<input type="hidden" name="cmd" value="_cart" /> <?php // use _cart for cart checkout ?>
	<input type="hidden" name="add" value="1" />
	<input type="hidden" name="business" value=" verma98ritu-facilitator@gmail.com" />
  
	<input type="hidden" name="item_name" value="Donation" />
	<input type="hidden" name="amount" value="$_SESSION['amount']" />
	<input type="hidden" name="currency_code" value="USD" />
	<input type="hidden" name="lc" value="US" />
	
    <input type="submit" name="submit" value="Pay now using Paypal" /> 
    </form-->
<form name="_xclick" target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="verma98ritu-facilitator@gmail.com">
<input type="hidden" name="currency_code" value="INR">
<input type="hidden" name="item_name" value="Donation Amount">
<input type="hidden" name="amount" value="<?= $_SESSION['amount']?>">
<input type="image" src="http://www.paypal.com/en_US/i/btn/sc-but-01.gif" class="center1" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<input type="hidden" name="add" value="1">
</form>
<?php include('public_footer.php');?>