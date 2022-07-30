<?php 
require("functions.php");
if(isset($_POST['register'])){
    if(registrasi($_POST) > 0){
        echo "<script>
                alert('User baru berhasil ditambahkan');
              </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/dist/output.css">
    <title>Halaman Register</title>
</head>
<body class="bg-[#F5F5F8] p-5">
    <button onclick="history.back()">
        <img class="w-3" src="/icon/angle-left-solid.svg" alt="">
    </button>
    <div class="mb-5 mt-3">
        <h1 class="font-bold text-3xl">Hi!</h1>
        <p class="text-sm">Fill the input below to create an account</p>
    </div>

    <form action="" method="POST">
        <div class="flex gap-2 mb-4">
            <div class="flex basis-1/2 py-1 px-4 border-main-color border-2 rounded-3xl">
                <svg class="w-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path class="fill-main-color" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/>
                </svg>
                <input name="first-name" class="block w-full bg-transparent placeholder:text-main-color focus:outline-none" type="text" placeholder="First Name">
            </div>
            <div class="flex basis-1/2 py-1 px-4 border-main-color border-2 rounded-3xl">
                <img src="" alt="">
                <input name="last-name" class="block w-full bg-transparent placeholder:text-main-color focus:outline-none" type="text" placeholder="Last Name">
            </div>
        </div>
        <div class="flex py-1 px-4 border-main-color border-2 rounded-3xl mb-4">
            <svg class="w-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path class="fill-main-color" d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/>
            </svg>
            <input name="email" class="block w-full bg-transparent placeholder:text-main-color focus:outline-none" type="text" placeholder="Email">
        </div>
        <div class="flex py-1 px-4 border-main-color border-2 rounded-3xl mb-4">
            <svg class="w-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-main-color" d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"/>
            </svg>
            <input name="password" class="block w-full bg-transparent placeholder:text-main-color focus:outline-none" type="password" placeholder="Password">
        </div>
        <div class="flex py-1 px-4 border-main-color border-2 rounded-3xl mb-4">
            <svg class="w-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-main-color" d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"/>
            </svg>
            <input name="confirm-password" class="block w-full bg-transparent placeholder:text-main-color focus:outline-none" type="password" placeholder="Confirm Password">
        </div>
        <div class="flex items-center gap-2">
            <input name="check" id="check" type="checkbox">
            <p class="text-xs text-main-color">I agree with Terms of Service and Privacy Policy</p>
        </div>
        <button name="register" class="font-semibold mt-5 mb-3 bg-main-color w-full p-2 rounded-2xl text-white" type="submit">Register</button>
    </form>
    <p class="text-main-color text-xs">Joined us before? <a class="font-bold" href="login.php">Login</a></p>
</body>
</html>