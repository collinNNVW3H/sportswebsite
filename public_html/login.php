<!DOCTYPE html>

<html lang="en">

	<head>

	  <meta charset="utf-8">
	  
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" type="text/css" href="css/style_sheet.css">

	  <title>iSports - Login</title>

	  <style>
	    .jumbotron{
	        background-color: beige
	         
	    }
	  </style>

	</head>

	<body>
	
	 	<h1> Log In </h1>

		 <?php include '../resources/navigation.php'; ?>

	 	<div class="container">
	 	     <div class= "jumbotron">
	 	     <form class="address-form rio user-registration-form" method="post" action="/UserRegistrationAdd" >
	 	     <form>        
                Username:
                <br>
                <input type="text" name="username">
                <br>
                Password
                <br>
                <input type="password" name="password">
                <br><br>
                <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>  
                <br><br>
                <div class="form-group">
                <button type="button" class="btn btn-primary btn-lg">Log Me In</button>
            </form>

	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>


	    <?php include '../resources/footer.php'; ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>

</html>