<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявки — Корочки.есть</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-card {
            max-width: 550px; /* Оптимальная ширина для формы создания */
            margin: 50px auto;
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="applications.html">Корочки.есть</a>
            <div class="navbar-text text-white ms-auto">
                Вы вошли как: <strong class="text-info">user123</strong> | <a href="authorization.html" class="text-danger text-decoration-none ms-2">Выйти</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card form-card shadow">
            <div class="card-header text-white text-center py-3">
                <h4 class="mb-0 fw-bold">Новая заявка</h4>
                <small>Заполнение параметров для записи на курс</small>
            </div>
            <div class="card-body p-4">
                
                <form action="applications.html" method="POST">
                    
                    <div class="mb-3">
                        <label for="courseName" class="form-label fw-semibold">Наименование курса</label>
                        <select class="form-select" id="courseName" name="course_name" required>
                            <option value="" disabled selected>-- Выберите программу обучения --</option>
                            <option value="frontend">Основы frontend-разработки (Bootstrap)</option>
                            <option value="php">Веб-разработка на PHP и MySQL</option>
                            <option value="design">Графический дизайн и основы композиции</option>
                        </select>
                        <div class="form-text text-muted" style="font-size: 0.8rem;">Выберите одно из доступных направлений.</div>
                    </div>

                    <div class="mb-3">
                        <label for="startDate" class="form-label fw-semibold">Желаемая дата начала</label>
                        <input type="date" class="form-control" id="startDate" name="start_date" required>
                        <div class="form-text text-muted" style="font-size: 0.8rem;">Укажите желаемое число для старта занятий.</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold d-block">Способ оплаты</label>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment_method" id="paymentPhone" value="phone" checked required>
                            <label class="form-check-input-label" for="paymentPhone">
                                Перевод по номеру телефона
                            </label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="paymentCash" value="cash" required>
                            <label class="form-check-input-label" for="paymentCash">
                                Наличные расчеты
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Отправить заявку на модерацию</button>
                </form>

            </div>
            <div class="card-footer text-center bg-white py-3 border-0">
                <a href="applications.php" class="text-decoration-none text-primary">← Вернуться к списку моих заявок</a>
            </div>
        </div>
    </div>
</body>
</html>