<?php 
    require_once('_functions.php');

    if (isset($_POST['signup'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Hash the password before storing it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $insertQuery = "INSERT INTO master (nama, email, username, password) VALUES ('$nama', '$email', '$username', '$hashedPassword')";

        if (mysqli_query($koneksi, $insertQuery)) {
            // Registration successful, redirect to login page
            header("Location: login.php");
            exit;
        } else {
            // Registration failed, handle the error
            $errorMessage = "Registration failed. Please try again later.";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cokro Laundry | Sign Up</title>
    <link rel="stylesheet" href="<?=url('_assets/css/login.css')?>">
    <link rel="shortcut icon" href="<?= url('_assets/img/logo/favicon-svg.svg') ?>" type="image/x-icon">
</head>
<body>

<div class="box">
    <div class="box-content">
        <div class="col box__left">
            <div class="logo">
                <img src="<?= url('_assets/img/logo/logo2.png') ?>" alt="">
            </div>
            <div class="box__left-title">
                <h4>Sign Up</h4>
            </div>

            <div class="box__left-form">
                <form action="" method="post">
                    <div class="box__left-form-group">
                        <div class="input-form">
                            <input type="text" name="username" placeholder="Username" required autocomplete="off">
                        </div>
                    </div>

                    <div class="box__left-form-group">
                    <div class="input-form">
                    <input type="text" name="email" placeholder="Email" required autocomplete="off">
                    </div>
                    </div>

                    
                    <div class="box__left-form-group">
                        <div class="input-form">
                            <input type="password" name="password" placeholder="Password" required autocomplete="off">
                        </div>
                    </div>

                    <a>Already have an account? </a><a href="<?=url('login.php')?>" class="btn-lg bg-primary">Login</a>

                    <div class="box__left-form-group">
                        <button type="submit" name="signup" class="btn-login mt-1">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col box__right">
		<div class="box__right-content">
					<div class="text__right">
						<h1>Sign Up</h1>
					</div>

					<img src=" <?=url('_assets/img/orang.png')?>" alt="" class="box-img-orang">
					<img src=" <?=url('_assets/img/celana.png')?>" alt="" class="box-img-celana">
					<img src=" <?=url('_assets/img/kaos.png')?>" alt="" class="box-img-kaos">
					<img src=" <?=url('_assets/img/kemeja.png')?>" alt="" class="box-img-kemeja">

					<!-- Bubble Variasi -->
					<div class="bubble-1"></div>
					<div class="bubble-2"></div>
					<div class="bubble-3"></div>
					<div class="bubble-4"></div>
					<div class="bubble-5"></div>
					<div class="bubble-6"></div>

					<!-- Garis Variasi -->
					<div class="garis garis-sm garis-1"></div>
					<div class="garis garis-md garis-2"></div>
					<div class="garis garis-sm garis-3"></div>
					<div class="garis garis-md garis-4"></div>
					<div class="garis garis-md garis-5"></div>
					<div class="garis garis-lg garis-6"></div>
					<div class="garis garis-lg garis-7"></div>
					<div class="garis garis-xl garis-8"></div>
					<div class="garis garis-sm garis-9"></div>
					<div class="garis garis-md garis-10"></div>
					<div class="garis garis-sm garis-11"></div>
					<div class="garis garis-md garis-12"></div>
				</div>
        </div>
    </div>
</div>

<div class="copyright">
    <p>Copyright &copy; 2023 | Group 1 Cokro Laundry</p>
</div>

</body>
</html>
