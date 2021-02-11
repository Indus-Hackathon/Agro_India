<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Alert</title>
</head>
<body>
	<button onclick="popUp()">
		Click ME
	</button>
	
	<script>
		const popUp = () => {
			swal("ThankYou!", "Your order has been confirmed.\n Check your email for details.", "success");

		} 
	</script>
</body>
</html>