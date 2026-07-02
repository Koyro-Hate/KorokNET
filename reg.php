<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация — Корочки.есть</title>
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
            <h3>Регистрация</h3>
            <p>Заполните поля ниже, чтобы создать аккаунт.</p>
            
            <form action="#" method="POST" class="reg-form">
                <div class="form-group">
                    <label for="username">Логин:</label>
                    <input type="text" id="username" name="username" placeholder="Придумайте логин" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Введите ваш email" required>
                </div>

                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input type="password" id="password" name="password" placeholder="Придумайте пароль" required>
                </div>

                <div class="form-group">
                    <label for="password_repeat">Повторите пароль:</label>
                    <input type="password" id="password_repeat" name="password_repeat" placeholder="Повторите пароль" required>
                </div>

                <button type="submit" class="btn-submit">Зарегистрироваться</button>
            </form>

            <p class="form-footer-text">Уже есть аккаунт? <a href="authorization.php">Войти</a></p>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <p>выполнила Cаргаева Кира Витальевна 02.07.26</p>
        </div>
    </footer>

</body>
</html>