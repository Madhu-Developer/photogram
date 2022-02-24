
<?
//if (isset($_POST['usename']) and isset($_POST['password']) and !empty($_POST['email'])  and isset($_POST['phone']) ){
$username = $_POST['usename'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$error = signup($username,$password,$email,$phone);
//$signup = true ;
//}
?> 

<main class="form-signup">
<form method="post" action="signup.php">
    <img class="mb-4" src="https://git.selfmade.ninja/uploads/-/system/appearance/logo/1/Logo_Dark.png " alt="" width="" height="50">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="phone" type="text" class="form-control" id="floatingInput" placeholder="number">
      <label for="floatingInput">Phone </label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
   
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
  
  </form>
</main>


