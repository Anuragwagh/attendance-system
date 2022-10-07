<html>
<head>
<style>
body {
  background-color: #9f9da7;
  font-size: 1.6rem;
  font-family: "Open Sans", sans-serif;
  color: #2b3e51;
}

h2 {

  font-weight: bold;
  text-align: center;
  padding: 0 0 0 0;
}

p {
  position: relative;
}

a:link,
a:visited,
a:active {
  color: #3ca9e2;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
a:focus, a:hover,
a:link:focus,
a:link:hover,
a:visited:focus,
a:visited:hover,
a:active:focus,
a:active:hover {
  color: #329dd5;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

#login-form-wrap {
  background-color: #fff;
  width: 60%;
  margin: 30px auto;
  text-align: center;
  padding: 20px 0 0 0;
  border-radius: 4px;
  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
}

input {
  display: block;
  box-sizing: border-box;
  width: 50%;
  outline: none;
  height: 60px;
  line-height: 60px;
  border-radius: 4px;
}

input[type="number"] {
  width: 50%;
  padding: 0 0 0 10px;
  margin: 0;
  color: #8a8b8e;
  border: 1px solid #c2c0ca;
  font-style: normal;
  font-size: 16px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  position: relative;
  display: inline-block;
  background: none;
  text-align: center;
}

input[type="number"]:focus {
  border-color: #3ca9e2;
}
input[type="submit"] {
  border: none;
  display: block;
  background-color: #3ca9e2;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
  font-size: 18px;
  position: relative;
  display: inline-block;
  cursor: pointer;
  text-align: center;
}
input[type="submit"]:hover {
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

#create-account-wrap {
  background-color: #eeedf1;
  color: #8a8b8e;
  font-size: 14px;
  width: 100%;
  padding: 10px 0;
  border-radius: 0 0 4px 4px;
}
</style>
</head>
<body>
<div id="login-form-wrap">
<h2>Student's Section</h2> <br>
		<?php if(isset($_GET['student'])) : ?>
			
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Sorry!</strong> Invalid Student Roll No.
				</div>
			
		<?php endif; ?>
<center>
<form  action="index.php" method="post" id="studentForm" data-toggle="validator">
<div class="credentials_block">
<p>
<input type="number" id="rollno" maxlength="6" name="rollno" placeholder="Please Enter Student's Roll Number" required>
</p> 
</div>
<br>
<div class="sarada">
<P>
<input type="submit" name="submit" style="border-radius:0%" value="Login">
</p>
</div>
<br>
<p>
<input type="hidden" name="student" value="y">
</p>
</form>
</center>
<div id="create-account-wrap">
<p>don't have an account? <a href="sample3.php">register now</a></p>
<p><a href="modules/signup.php"> register </a></p>
<script>
	$('#studentForm').validator();
</script>
</div>
</div>
</body>
</html>
