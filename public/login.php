<?php 

require('functions.php');

session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            // cek session
            $_SESSION['login'] = true;

            header('Location: home.php');
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/dist/output.css">
    <title>Halaman Login</title>
</head>
<body class="bg-[#F5F5F8] p-5">
    <button onclick="history.back()">
        <img class="w-3" src="/icon/angle-left-solid.svg" alt="">
    </button>
    <div class="w-60 m-auto">
        <img class="w-full h-full" src="/img/gambar-login.png" alt="">
    </div>
    <div class="mb-5 mt-3">
        <h1 class="font-bold text-3xl">Welcome Back !</h1>
        <p class="text-sm">Please login to continue</p>
    </div>
    
    <form action="" method="POST">
        <div class="flex py-1 px-4 border-main-color border-2 rounded-3xl mb-4">
            <svg class="w-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-main-color" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/>
            </svg>
            <input class="w-full bg-transparent placeholder:text-main-color focus:outline-none" name="email" type="text" placeholder="Email" autocomplete="off">
        </div>
        <div class="flex py-1 px-4 border-main-color border-2 rounded-3xl">
            <svg class="w-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-main-color" d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"/>
            </svg>
            <input class="w-full bg-transparent placeholder:text-main-color focus:outline-none" name="password" type="password" placeholder="Password" autocomplete="off">
            <img class="w-4" src="/icon/eye-solid.svg" alt="">
        </div>
        <a class="block text-main-color text-xs font-bold text-right" href="">Forgot Password?</a>
        <button class="font-semibold mt-5 mb-3 bg-main-color w-full p-2 rounded-2xl text-white" name="login" type="submit">Login</button>
    </form>
    <p class="text-main-color text-xs">Dont have an account? <a class="font-bold" href="register.php">Sign Up</a></p>
</body>
</html>