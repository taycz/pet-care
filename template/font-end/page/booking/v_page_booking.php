<!DOCTYPE html>
<html lang="en">
    <?php include ("views/head.php"); ?>
<body>
<?php include ("views/header.php"); ?>	
	<!-- content Booking -->
	
    <form action="" method="">
		<div class="contact">
			<div class="container">
				<h3 class="agileits-title">Booking Now</h3>
				<div class="contact-agileinfo">
					<div class="col-md-7 contact-right">
						<form action="#" method="post">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="text" class="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Phone no" placeholder="Phone" required="">
							<textarea name="Message" placeholder="Message" required=""></textarea>
							<input type="submit" value="SUBMIT">
						</form>
					</div>
					<div class="col-md-5 contact-left">
						<div class="address">
							<h5>Address:</h5>
							<p><i class="glyphicon glyphicon-home"></i> 333 Broome St New York, NY 10002, </p>
						</div>
						<div class="address address-mdl">
							<h5>Phones:</h5>
							<p><i class="glyphicon glyphicon-earphone"></i> +1 999 888 777</p>
							<p><i class="glyphicon glyphicon-phone"></i> +11 222 333</p>
						</div>
						<div class="address">
							<h5>Email:</h5>
							<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</form>
	?>
<?php
	include ("views/footer.php");
?>
</body>

</html>