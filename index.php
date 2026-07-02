<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация — Корочки.есть</title>
    <!-- Подключение Bootstrap 5 (строго тот же стиль, что и в авторизации) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .registration-card {
            max-width: 450px; /* Точный размер карточки, как в авторизации */
            margin: 80px auto; /* Точные отступы сверху и снизу */
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
        <div class="card registration-card shadow">
            <div class="card-header text-white text-center py-3">
                <h4 class="mb-0 fw-bold">Корочки.есть</h4>
                <small>Регистрация нового пользователя</small>
            </div>
            <div class="card-body p-4">
                
                <!-- Форма регистрации -->
                <form action="#" method="POST">
                    
                    <!-- 1. Логин -->
                    <div class="mb-3">
                        <label for="login" class="form-label fw-semibold">Логин</label>
                        <input type="text" class="form-control" id="login" name="login" 
                               pattern="[A-Za-z0-9]{6,}" 
                               title="Минимум 6 символов, только латиница и цифры" 
                               required placeholder="Придумайте логин">
                        <div class="form-text text-muted" style="font-size: 0.8rem;">Латиница и цифры, не менее 6 символов.</div>
                    </div>

                    <!-- 2. Пароль -->
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" 
                               minlength="8" 
                               title="Минимум 8 символов" 
                               required placeholder="Придумайте пароль">
                        <div class="form-text text-muted" style="font-size: 0.8rem;">Минимум 8 символов.</div>
                    </div>

                    <!-- 3. ФИО -->
                    <div class="mb-3">
                        <label for="fullname" class="form-label fw-semibold">ФИО</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" 
                               pattern="[а-яА-ЯёЁ\s]+" 
                               title="Только кириллица и пробелы" 
                               required placeholder="Иванов Иван Иванович">
                        <div class="form-text text-muted" style="font-size: 0.8rem;">Символы кириллицы и пробелы.</div>
                    </div>

                    <!-- 4. Телефон -->
                    <div class="mb-3">
                        <label for="phone" class="form-label fw-semibold">Телефон</label>
                        <input type="text" class="form-control" id="phone" name="phone" 
                               pattern="8\(\d{3}\)\d{3}-\d{2}-\d{2}" 
                               placeholder="8(XXX)XXX-XX-XX" 
                               title="Формат: 8(XXX)XXX-XX-XX" 
                               required>
                        <div class="form-text text-muted" style="font-size: 0.8rem;">Обязательно в формате: 8(XXX)XXX-XX-XX</div>
                    </div>
                    <!-- 5. Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label fw-semibold">Электронная почта</label>
                        <input type="email" class="form-control" id="email" name="email" 
                               required placeholder="example@mail.com">
                        <div class="form-text text-muted" style="font-size: 0.8rem;">Действующий email адрес.</div>
                    </div>

                    <!-- Кнопка регистрации -->
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Зарегистрироваться</button>
                </form>

            </div>
            <div class="card-footer text-center bg-white py-3 border-0">
                <!-- Ссылка на авторизацию -->
                <a href="authorization.php" class="text-decoration-none text-primary">Уже зарегистрированы? Войти</a>
            </div>
        </div>
    </div>

</body>
</html>