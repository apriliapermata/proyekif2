<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url('/img/coffeeshop.jpg');

            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #996633;

            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            height: auto;
        }

        .login-container h2 {
            margin-top: 0;
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 80%;
            padding: 13px;
            margin-bottom: 15px;
            border: none;

        }

        .login-container input[type="submit"] {
            background-color: #663300;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 10%;
            cursor: pointer;

        }

        .login-container input[type="submit"]:hover {
            background-color: #a08845;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <!-- Tampilkan pesan kesalahan jika ada -->
        <?php if (session()->has('error')) : ?>
            <div style="color: white;">
                <?= session('error') ?>
            </div>
        <?php endif; ?>
        <form action="/login" method="post">
            <label for="inputUsername">Username:</label>
            <input type="text" name="username" id="username" placeholder="Username" class="form-control">

            <label for="inputPassword">Password:</label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control">

            <input type="submit" name="login" value="Login">
            <!-- <button type="submit">Login</button> -->
        </form>
    </div>
</body>

</html>