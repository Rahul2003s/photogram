<?php
$signup=false;
$error=false;
if(isset($_POST['email']) and isset($_POST['username']) and isset($_POST['password']) and isset($_POST['phone'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $error=User::signup($username, $password, $email, $phone);
    if (!$error) {
        $signup=true;
    }

}
?>
<?php
if ($signup) {
    if (!$error) {
        header("location: login.php");
    } else {
        $signup = false;
        dialogue("Something went wrong $error", "Signup Failed", "try again");
    }
} ?>

<main class="form-signup w-100 m-auto">
	<form action='signup.php' method='post'>
		<!-- <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
		<h1 class="h3 mb-3 fw-normal">Signup here!!..</h1>
		<div class="form-floating">
			<input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
				required>
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="phone" type="text" class="form-control" id="floatingPassword" placeholder="Password" required>
			<label for="floatingPassword">Phone number</label>
		</div>
		<div class="form-floating">
			<input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
				required>
			<label for="floatingInput">Username</label>
		</div>
		<div class="form-floating">
			<input id="password" name="password" type="password" class="form-control" id="floatingPassword"
				placeholder="Password" onkeyup='check_pass();' required>
			<label for="floatingPassword">Password</label>
		</div>
		<div class="form-floating">
			<input id="c_password" name="c_password" type="password" class="form-control" id="floatingPassword"
				placeholder="Password" onkeyup='check_pass()' ; required>
			<label for="floatingPassword">Confirm Password</label>
		</div>

		<button class="w-100 btn btn-lg btn-primary" id="submit" type="submit">Sign up</button>
	</form>
</main>