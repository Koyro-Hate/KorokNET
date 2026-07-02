<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои заявки — Корочки.есть</title>
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
        
        .app-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 35px;
            text-align: left;
        }
        .app-table th, .app-table td {
            padding: 12px;
            border-bottom: 1px solid #eeeeee;
        }
        .app-table th {
            background-color: #f8f9fa;
            color: #333;
        }
        
        .badge {
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 13px;
            font-weight: bold;
            display: inline-block;
        }
        .bg-new { background-color: #e2e3e5; color: #383d41; }
        .bg-progress { background-color: #fff3cd; color: #856404; }
        .bg-success { background-color: #d4edda; color: #155724; }
        
        .btn-add {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
        }
        .btn-add:hover {
            background-color: #218838;
        }
        
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #f0f2f5;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .dashboard-header h3 {
            margin: 0;
        }
        
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }
        .form-col {
            flex: 1;
        }
        .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .review-section {
            border-top: 2px solid #f0f2f5;
            padding-top: 20px;
            margin-top: 30px;
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
        
        <section class="info-section">
            
            <div class="dashboard-header">
                <div>
                    <h3>Мои заявки на обучение</h3>
                    <span style="color: #666; font-size: 14px;">Просмотр статуса и управление историей курсов</span>
                </div>
                <a href="new_application.php" class="btn-add">+ Подать новую заявку</a>
            </div>
            <h4 style="color: #555; margin-bottom: 10px; margin-top: 25px;">Список заявок</h4>
            
            <table class="app-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Наименование курса</th>
                        <th>Дата начала</th>
                        <th>Способ оплаты</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td style="font-weight: bold;">Основы frontend-разработки (Bootstrap)</td>
                        <td>15.07.2026</td>
                        <td>Перевод по номеру телефона</td>
                        <td><span class="badge bg-new">Новая</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td style="font-weight: bold;">Веб-разработка на PHP и MySQL</td>
                        <td>01.06.2026</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td style="font-weight: bold;">Графический дизайн и основы композиции</td>
                        <td>10.04.2026</td>
                        <td>Перевод по номеру телефона</td>
                        <td><span class="badge bg-success">Обучение завершено</span></td>
                    </tr>
                </tbody>
            </table>

            <div class="review-section">
                <h4 style="color: #007bff; margin-top: 0; margin-bottom: 15px;">Оставить отзыв о качестве образовательных услуг</h4>
                
                <form action="#" method="POST" class="reg-form" style="margin-top: 0;">
                    <div class="form-row">
                        <div class="form-col form-group">
                            <label style="font-weight: bold; font-size: 14px; display: block; margin-bottom: 5px;">Выберите курс:</label>
                            <select id="courseSelect" required>
                                <option value="" disabled selected>-- Выберите программу из списка --</option>
                                <option value="1">Основы frontend-разработки (Bootstrap)</option>
                                <option value="2">Веб-разработка на PHP и MySQL</option>
                                <option value="3">Графический дизайн и основы композиции</option>
                            </select>
                        </div>
                        <div class="form-col form-group">
                            <label style="font-weight: bold; font-size: 14px; display: block; margin-bottom: 5px;">Ваша оценка:</label>
                            <select id="ratingSelect" required>
                                <option value="5">5 — Отлично, всё понравилось</option>
                                <option value="4">4 — Хорошо, но есть замечания</option>
                                <option value="3">3 — Удовлетворительно</option>
                                <option value="2">2 — Плохо</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="font-weight: bold; font-size: 14px; display: block; margin-bottom: 5px;">Ваш отзыв:</label>
                        <textarea id="reviewText" rows="3" required placeholder="Напишите ваше мнение о качестве обучения..."></textarea>
                    </div>

                    <button type="submit" class="btn-submit" style="width: auto; padding: 10px 25px; margin-top: 0;">Отправить отзыв</button>
                </form>
            </div>

        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <p>выполнила Cаргаева Кира Витальевна 02.07.26</p>
        </div>
    </footer>

</body>
</html>