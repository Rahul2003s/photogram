	
<main class="form-signup w-100 m-auto">
  <form action='test.php' method='post'>
    <!-- <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Signup here!!..</h1>
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="phone" type="text" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Phone number</label>
    </div>
    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>