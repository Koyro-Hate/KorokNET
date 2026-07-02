<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявки — Корочки.есть</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        .nav-text {
            color: white;
            font-size: 15px;
        }
        .nav-text strong {
            color: #ffc107;
        }
        .nav-text a {
            color: #ff4d4d;
            text-decoration: none;
            margin-left: 10px;
            font-weight: bold;
        }
        .nav-text a:hover {
            text-decoration: underline;
        }

        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            font-size: 14px;
            background-color: #fff;
        }

        .radio-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }
        .radio-group input[type="radio"] {
            width: auto;
            margin: 0;
            cursor: pointer;
        }
        .radio-group label {
            font-weight: normal;
            margin: 0;
            cursor: pointer;
            color: #333;
        }
        
        .form-help-text {
            color: #666;
            font-size: 12px;
            display: block;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="container header-content">
            <div class="logo">Корочки.есть</div>
            <div class="nav-text">
                Вы вошли как: <strong>user123</strong> | <a href="authorization.php">Выйти</a>
            </div>
        </div>
    </header>

    <main class="container main-content">
        
        <section class="info-section form-container" style="max-width: 550px; margin: 0 auto;">
            <h3>Новая заявка</h3>
            <p>Заполнение параметров для записи на курс</p>
            
            <form action="applications.php" method="POST" class="reg-form" style="margin-top: 20px;">
                
                <div class="form-group">
                    <label for="courseName">Наименование курса:</label>
                    <select id="courseName" name="course_name" required>
                        <option value="" disabled selected>-- Выберите программу обучения --</option>
                        <option value="frontend">Основы frontend-разработки (Bootstrap)</option>
                        <option value="php">Веб-разработка на PHP и MySQL</option>
                        <option value="design">Графический дизайн и основы композиции</option>
                    </select>
                    <span class="form-help-text">Выберите одно из доступных направлений.</span>
                </div>

                <div class="form-group">
                    <label for="startDate">Желаемая дата начала:</label>
                    <input type="date" id="startDate" name="start_date" required>
                    <span class="form-help-text">Укажите желаемое число для старта занятий.</span>
                </div>

                <div class="form-group" style="margin-bottom: 25px;">
                    <label style="font-weight: bold; display: block; margin-bottom: 10px;">Способ оплаты:</label>
                    
                    <div class="radio-group">
                        <input type="radio" name="payment_method" id="paymentPhone" value="phone" checked required>
                        <label for="paymentPhone">Перевод по номеру телефона</label>
                    </div>
                    
                    <div class="radio-group">
                        <input type="radio" name="payment_method" id="paymentCash" value="cash" required>
                        <label for="paymentCash">Наличные расчеты</label>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Отправить заявку на модерацию</button>
            </form>

            <p class="form-footer-text" style="margin-top: 20px;">
                <a href="applications.php" style="text-decoration: none;">← Вернуться к списку моих заявок</a>
            </p>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <p>выполнила Cаргаева Кира Витальевна 02.07.26</p>
        </div>
    </footer>

</body>
</html>