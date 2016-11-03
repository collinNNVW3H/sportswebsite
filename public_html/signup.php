<!DOCTYPE html>

<html lang="en">

	<head>

	  <meta charset="utf-8">
	  
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	  <link rel="stylesheet" type="text/css" href="css/style_sheet.css">

	  <title>iSports - Sign Up</title>
	    <style>
	        .jumbotron{
	            background-color: beige      
	      }
	    </style>
	</head>

	<body>

		<h1> Sign Up </h1>

		<?php include '../resources/navigation.php'; ?>
	 	<div class="container">
	 	     <div class= "jumbotron">
	 	     <form>
	 	     <div class="required-field-header">(<span class="required">*</span>)=Fill it out! Or Else.</div>
	            *First name:
	            <br>
	            <input type="text" name="firstname">
	            <br>
	            *Last name:
	            <br>
	            <input type ="text" name="lastname">
	            <br>
	            *Email:
	            <br>
	            <input type ="text" name="email">
	            <br>
	            Address:
	            <br>
	            <input type ="text" name="address">
	            <br>
	            City:
	            <br>
	            <input type ="text" name="city">
	            <br>
	            State:
	            <br>
	            <input type ="text" name="state">
	            <br>
	            Phone:
	            <br>
	            <input type ="text" name="phone">
	            <br>
	            *Username:
	            <br>
	            <input type="text" name="username">
	            <br>
	            *Password:
	            <br>
	            <input type="password" name="password">
	            <br>
	            *Confirm Password:
	            <br>
	            <input type="password" name="confirmedPassword">
	            <br> <br>
	            <div class="form-group">
                <button type="button" class="btn btn-primary btn-lg">Sign Me Up</button>
              </div>

	    <br>

	     <?php include '../resources/footer.php'; ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>

</html>