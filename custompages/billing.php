<!DOCTYPE html>
	<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
	<head>
		<title><?php echo $title; ?> | Brandon Tran</title>
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="/s.css">
	</head>
<body>
	
<section>
	<h1>Billing Services for Brandon Tran</h1>
	<p>For your convenience, I use PayPal to manage hosting invoices. Please complete the form below to setup your monthly payment. A PayPal account is NOT needed to complete this form; only a major credit card. Thank you for your continued business.</p>
	
	<div style="text-align:center; border:1px solid #ccc; padding:20px 20px 0 20px; display:inline-block; margin:0 auto; ">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick" /><input type="hidden" name="hosted_button_id" value="BLB2LRYF3HSWY" /><br />
			Enter the monthly payment. $20 per site is standard.</p>
			<p>$ <input type="text" name="max_amount" value="" class="text_field" /> USD</p>
			<div><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_auto_billing_CC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></div>
			<p><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
	</div>
	
</section>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2896135-41"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());	
	  gtag('config', 'UA-2896135-41');
	</script>
	
</body>
</html>