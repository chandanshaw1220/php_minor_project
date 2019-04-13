<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'travel');
if ($conn) {
	echo "connected with database";
} else {
	echo "error";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body{
	background-image: url(view-from-lighthouse-815x459.jpg);
	background-position: center;
	background-size: 100% 100%;
	background-size: cover;
}

.container {
  position:center;
  margin: 20px;
  left:40%;
  top:20%;
  max-width: 300px;
  max-height: 300px;
  padding: 16px;
  background-size: 100% 100%;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<h2 style="color:White;text-align: left;font-size: 400%; font-family:Ink Free;">LETS EXPLORE CHENNAI!</h2>
<form action="action.php" class="container" method="POST">
<legend><h1 style="color:White;font-family: Ink Free;font-size: 100%">What are you looking for?</h1></legend>
  <div class="bg-img">
    <label for="uname" style="color:White;font-family: Ink Free;font-size: 150%"><b>Choose your Category</b></label>
    <input type="text" placeholder="Type here" name="uname" required>
    </div>
  <br>
   <div class="bg-img">
    <label for="uname" style="color:White;font-family: Ink Free;font-size: 150%"><b>Choose your radius</b></label>
    <input type="number" placeholder="Type here" name="distance" required>
  </div>
  <br>
  <input type="submit" name="button" value="submit"><br><br>
  </form>
</body>
</html>