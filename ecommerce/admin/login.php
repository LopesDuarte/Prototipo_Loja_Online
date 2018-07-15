<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ecommerce/core/init.php';
include 'includes/head.php';
$email = ((isset($_POST['email']))?sanitize($_POST['email']):'');
$email = trim($email);
$password = ((isset($_POST['password']))?sanitize($_POST['password']):'');
$password = trim($password);
$errors = array();
//$password = 'password';
//$hashed = password_hash($password,PASSWORD_DEFAULT);
//echo $hashed;

?>

    <style>
        body {
            background-image: url("/ecommerce/images/headerlogo/background.png");
            background-size: 100vw 100vh;
            background-attachment: fixed;
        }

    </style>


    <div id="login-form">
        <div>
            <?php
            if($_POST){
                //form validation
                if(empty($_POST['email']) || empty($_POST['password'])){
                    $errors[] = 'You must provide email and password';
                }
                // validate email 
                if(!filter_var($email.FILTER_VALIDATE_EMAIL)){
                    $errors[] = 'you must enter a valid email';
                }
                
                // password is more than 6 carachters
                if(strlen($password)< 6 ){
                $errors[] = 'Password must be at least 6 characters';  }
                // check if email exists in the database
                $query = $db->query("SELECT * FROM users WHERE email = '$email'");
                $user = mysqli_fetch_assoc($query);
                $userCount = mysqli_num_rows($query);
                if($userCount < 1){
                    $errors[] = 'that email doesn\'t exist in database';
                }
                if(!password_verify($password, $user['password'])){
                    $error[] = 'The password does not match our records. Please try again';
                }else{
                    echo 'user logged in';
                }
                //check errors
                if(!empty($errors)){
                    echo display_errors($errors);
                }else{
                    $user_id = $user['id'];
                    login($user_id); 
                    
                }
            }
            ?>

        </div>
        <h2 class="text-center">Login</h2>
        <hr>
        <form action="login.php" method="post">

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?=$email;?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="<?=$password;?>">
            </div>

            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
            </div>
        </form>

        <p class="text-right"><a href="/ecommerce/index.php" alt="home">Visit Site</a></p>

    </div>

    <?php include 'includes/footer.php';
?>
