<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === 'user123' && $password === '12345678') {
        header('Location: applications.php');
        exit;
    } elseif ($login === 'Admin1' && $password === 'KorokNET') {
        header('Location: admin_panel.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация — Корочки.есть</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .auth-card {
            max-width: 450px;
            margin: 80px auto;
            border: none;
            border-radius: 12px;
        }
        .card-header {
            border-top-left-radius: 12px !important;
            border-top-right-radius: 12px !important;
            background: #0d6efd;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card auth-card shadow">
            <div class="card-header text-white text-center py-3">
                <h4 class="mb-0 fw-bold">Корочки.есть</h4>
                <small>Вход в личный кабинет</small>
            </div>
            <div class="card-body p-4">
                
                <form action="#" method="POST">
                    
                    <div class="mb-3">
                        <label for="login" class="form-label fw-semibold">Логин</label>
                        <input type="text" class="form-control" id="login" name="login" 
                               pattern="[A-Za-z0-9]{6,}" 
                               title="Минимум 6 символов, только латиница и цифры" 
                               required placeholder="Введите логин">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" 
                               minlength="8" 
                               title="Минимум 8 символов" 
                               required placeholder="Введите пароль">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Войти</button>
                </form>

            </div>
            <div class="card-footer text-center bg-white py-3 border-0">
                <a href="index.php" class="text-decoration-none text-primary">Ещё не зарегистрированы? Регистрация</a>
            </div>
        </div>
    </div>

</body>
</html>