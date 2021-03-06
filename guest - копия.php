<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <title>Гостевая книга</title>
	<style>
	  body { background: url(background.jpg); }
	</style>
  </head>
  <body>
	<div class="container">
		<div class="col-md-12">
			<h1 style="text-align: center">Гостевая книга</h1>
		</div>
		<hr color="blue">
		<?php
			if(isset($_POST)) {
				echo $_POST['name'] . '<br>';
				echo $_POST['email'] . '<br>';
				echo $_POST['bigtext'] . '<br>';
				echo '<br>';
			}
		?>
		<hr color="blue">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-3">
					<label for="FormInput">Ваше имя</label>
					<label class="sr-only" for="inlineFormInput">Name</label>
					<input name="name" type="name" class="form-control mb-2" id="FormInput" placeholder="Имя">
				</div>  
				<div class="col-md-3">
					<label for="Email">Ваш email</label>
					<input name="email" type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email">
				</div>  
			</div>
			<div class="row">
				<div class="col-md-10">
					<label for="Textarea">Ваше сообщение</label>
					<textarea name="bigtext" class="form-control" id="Textarea" rows="3"></textarea>
				  </div>
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Отправить сообщение</button>
		</div>
	</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>