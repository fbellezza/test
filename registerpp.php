<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- estilos propios CSS -->
<link rel="stylesheet" href="css/style.propio.css">


<!-- bootstrap JS -->
<script src="js/bootstrap.js"></script>
<body>
<div class="container">
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>