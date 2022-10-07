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
  font-weight: 300;
  text-align: center;
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

.col-lg-6 {
  background-color: #fff;
  width: 35%;
  margin: 30px auto;
  text-align: center;
  padding: 20px 0 0 0;
  border-radius: 4px;
  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
}

input {
  display: block;
  box-sizing: border-box;
  width: 75%;
  outline: none;
  height: 60px;
  line-height: 60px;
  border-radius: 4px;
}

input[type="text"],
input[type="password"] {
  width: 75%;
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
}
input[type="text"]:focus,
input[type="password"]:focus {
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
<div class="col-lg-6">
      <h3 class="text-center">Teacher's Section</h3>
		<?php if(isset($_GET['invalid'])) : ?>
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Sorry!</strong> Invalid Username Or Password.
				</div>
			
		<?php endif; ?>
	
      <form class="form-horizontal" id="loginForm" action="modules/verify.php" method="post" data-toggle="validator">
				<div class="form-group">
          
          <p><input type="text" class="form-control" id="inputEmail3" name="name" maxlength="16" placeholder="Enter Username" required></p>
        </div>
        <div class="form-group">
          
          <p><input type="password" class="form-control" id="inputPassword3"  name="pass" maxlength="16" placeholder="Enter Password" required></p>
        </div>
        <div class="form-group">
          <P><input type="submit" name="submit" class="btn btn-success btn-block" style="border-radius:0%" value="Login"></p>
        </div>
      </form>
	  <div id="create-account-wrap">
		<p>don't have an account? <a href="sample3.php">register now</a></p>
      </div>
   
    </div>
	
	
	<script>
	$('#loginForm').validator();
	</script>
	
	</body>
	</html>