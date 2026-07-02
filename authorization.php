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
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header-content">
            <div class="logo">Корочки.есть</div>
            <a href="index.php" class="btn-reg">На главную</a>
        </div>
    </header>

    <main class="container main-content">
        
        <section class="info-section form-container">
            <h3>Вход в личный кабинет</h3>
            <p>Введите свои данные для доступа к платформе.</p>
            
            <form action="#" method="POST" class="reg-form">
                
                <div class="form-group">
                    <label for="login">Логин:</label>
                    <input type="text" id="login" name="login" 
                           pattern="[A-Za-z0-9]{6,}" 
                           title="Минимум 6 символов, только латиница и цифры" 
                           required placeholder="Введите логин">
                </div>

                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input type="password" id="password" name="password" 
                           minlength="8" 
                           title="Минимум 8 символов" 
                           required placeholder="Введите пароль">
                </div>

                <button type="submit" class="btn-submit">Войти</button>
            </form>

            <p class="form-footer-text">Ещё не зарегистрированы? <a href="register.php">Регистрация</a></p>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <p>выполнила Cаргаева Кира Витальевна 02.07.26</p>
        </div>
    </footer>

</body>
</html>