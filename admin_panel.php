<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора — Корочки.есть</title>
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

        /* Административная таблица */
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            margin-bottom: 30px;
            text-align: left;
            font-size: 15px;
        }
        .admin-table th, .admin-table td {
            padding: 12px;
            border: 1px solid #eeeeee;
        }
        .admin-table th {
            background-color: #f8f9fa;
            color: #333;
        }

        /* Плашки статусов и пользователей */
        .badge {
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 13px;
            font-weight: bold;
            display: inline-block;
        }
        .bg-user { background-color: #e2e3e5; color: #383d41; }
        .bg-new { background-color: #6c757d; color: white; }
        .bg-progress { background-color: #fff3cd; color: #856404; }
        .bg-success { background-color: #d4edda; color: #155724; }

        /* Кнопки действий в таблице */
        .btn-action {
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            border: 1px solid transparent;
            background: transparent;
            transition: all 0.2s ease;
        }
        .btn-approve { border-color: #28a745; color: #28a745; margin-right: 5px; }
        .btn-approve:hover { background: #28a745; color: white; }
        
        .btn-reject { border-color: #dc3545; color: #dc3545; }
        .btn-reject:hover { background: #dc3545; color: white; }
        
        .btn-complete { border-color: #007bff; color: #007bff; }
        .btn-complete:hover { background: #007bff; color: white; }

        /* Сетка для отзывов модерации */
        .review-grid {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .review-card {
            flex: 1;
            min-width: 280px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-sizing: border-box;
        }
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 8px;
        }
        
        /* Блок ссылок для тестирования */
        .test-links {
            margin-top: 35px;
            padding-top: 15px;
            border-top: 2px solid #f0f2f5;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        .test-links a {
            color: #007bff;
            text-decoration: none;
            margin: 0 10px;
        }
        .test-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="container header-content">
            <div class="logo">Корочки.есть — Панель управления</div>
            <div class="nav-text">
                Вы вошли как: <strong>Администратор (admin)</strong> | <a href="authorization.php">Выйти</a>
            </div>
        </div>
    </header>
    <main class="container main-content">
        
        <section class="info-section">
            <h3 style="margin-bottom: 5px;">Панель администратора</h3>
            <span style="color: #666; font-size: 14px; display: block; margin-bottom: 25px;">Управление заявками пользователей и модерация отзывов</span>

            <div style="margin-bottom: 35px;">
                <h4 style="color: #007bff; margin-top: 0; margin-bottom: 15px;">Все поступающие заявки</h4>
                
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Пользователь</th>
                            <th>Курс</th>
                            <th>Дата старта</th>
                            <th>Оплата</th>
                            <th>Статус</th>
                            <th style="text-center">Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><span class="badge bg-user">user123</span></td>
                            <td style="font-weight: bold;">Основы frontend-разработки (Bootstrap)</td>
                            <td>15.07.2026</td>
                            <td>Телефон</td>
                            <td><span class="badge bg-new">Новая</span></td>
                            <td>
                                <button class="btn-action btn-approve">Одобрить</button>
                                <button class="btn-action btn-reject">Отклонить</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span class="badge bg-user">user123</span></td>
                            <td style="font-weight: bold;">Веб-разработка на PHP и MySQL</td>
                            <td>01.06.2026</td>
                            <td>Наличные</td>
                            <td><span class="badge bg-warning">Идет обучение</span></td>
                            <td>
                                <button class="btn-action btn-complete">Завершить курс</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span class="badge bg-user">ivan_petrov</span></td>
                            <td style="font-weight: bold;">Графический дизайн и основы композиции</td>
                            <td>10.04.2026</td>
                            <td>Телефон</td>
                            <td><span class="badge bg-success">Обучение завершено</span></td>
                            <td style="color: #999; font-size: 13px; font-style: italic;">Действий нет</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="border-top: 2px solid #f0f2f5; padding-top: 25px;">
                <h4 style="color: #007bff; margin-top: 0; margin-bottom: 15px;">Отзывы студентов о качестве услуг</h4>
                
                <div class="review-grid">
                    <div class="review-card">
                        <div class="review-header">
                            <strong style="color: #555;">От: user123</strong>
                            <span style="color: #ffc107; font-weight: bold;">★ 5 / 5</span>
                        </div>
                        <h5 style="margin: 0 0 8px 0; color: #212529;">Графический дизайн и основы композиции</h5>
                        <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.5;">«Прекрасный курс! Все разложено по полочкам, отличная обратная связь от преподавателей. Корочки получил вовремя.»</p>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <strong style="color: #555;">От: sveta_krasnova</strong>
                            <span style="color: #ffc107; font-weight: bold;">★ 4 / 5</span>
                        </div>
                        <h5 style="margin: 0 0 8px 0; color: #212529;">Веб-разработка на PHP и MySQL</h5>
                        <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.5;">«Материал объемный и интересный, но хотелось бы чуть больше практических заданий по базам данных MySQL.»</p>
                    </div>
                </div>
            </div>

            <div class="test-links">
                <span>Ссылки для тестирования:</span>
                <a href="authorization.php">Авторизация</a> |
                <a href="applications.php">Просмотр заявок (ЛК)</a>
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