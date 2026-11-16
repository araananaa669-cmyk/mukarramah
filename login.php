<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === 'Syntax squad' && $password === 'syntax123') {

        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        header("Location: index.php?page=dashboard");
        exit;

    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Toko Baju</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #e8e8e8;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 440px;
            background: #ffffff;
            padding: 40px;
            border: 1px solid #d5d5d5;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.10);
        }

        .logo {
            width: 65px;
            height: 65px;
            background: #343434;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            font-size: 30px;
            margin-bottom: 28px;
        }

        .subtitle {
            font-size: 11px;
            letter-spacing: 2px;
            font-weight: bold;
            color: #777777;
            margin-bottom: 12px;
        }

        h1 {
            font-size: 32px;
            color: #292929;
            margin-bottom: 12px;
        }

        .description {
            font-size: 14px;
            color: #888888;
            margin-bottom: 30px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 9px;
        }

        input {
            width: 100%;
            height: 48px;
            border: 1px solid #cccccc;
            border-radius: 7px;
            padding: 12px;
            font-size: 14px;
            margin-bottom: 22px;
            background: #fafafa;
            outline: none;
        }

        input:focus {
            border-color: #555555;
            background: #ffffff;
        }

        button {
            width: 100%;
            height: 50px;
            background: #343434;
            color: #ffffff;
            border: none;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #555555;
        }

        .error {
            background: #eeeeee;
            color: #333333;
            border: 1px solid #cccccc;
            padding: 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            color: #999999;
            font-size: 11px;
            margin-top: 28px;
        }

        @media (max-width: 480px) {

            .login-container {
                padding: 28px;
            }

            h1 {
                font-size: 27px;
            }
        }

    </style>
</head>

<body>

    <div class="login-container">

        <div class="logo">
            ♡
        </div>

        <p class="subtitle">
            SISTEM INFORMASI MANAJEMEN
        </p>

        <h1>TOKO BAJU</h1>

        <p class="description">
            Masuk untuk mengelola toko baju Anda.
        </p>

        <?php if ($error): ?>
            <div class="error">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST">

            <label>Username</label>

            <input
                type="text"
                name="username"
                placeholder="Masukkan username"
                required
            >

            <label>Password</label>

            <input
                type="password"
                name="password"
                placeholder="Masukkan password"
                required
            >

            <button type="submit">
                MASUK KE SISTEM
            </button>

        </form>

        <div class="footer">
            © 2026 TOKO BAJU | SISTEM INFORMASI
        </div>

    </div>

</body>
</html>
