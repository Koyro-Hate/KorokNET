<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора — Корочки.есть</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .admin-card {
            max-width: 1000px; /* Широкая карточка для удобного отображения таблиц */
            margin: 40px auto;
            border: none;
            border-radius: 12px;
        }
        .card-header {
            border-top-left-radius: 12px !important;
            border-top-right-radius: 12px !important;
            background: #0d6efd;
        }
        .status-badge {
            font-size: 0.85rem;
            padding: 0.4em 0.8em;
            border-radius: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Корочки.есть — Панель управления</a>
            <div class="navbar-text text-white ms-auto">
                Вы вошли как: <strong class="text-warning">Администратор (admin)</strong> | <a href="authorization.html" class="text-danger text-decoration-none ms-2">Выйти</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card admin-card shadow">
            <div class="card-header text-white py-3">
                <h4 class="mb-0 fw-bold">Панель администратора</h4>
                <small>Управление заявками пользователей и модерация отзывов</small>
            </div>
            <div class="card-body p-4">

                <div class="mb-5">
                    <h5 class="fw-bold text-primary mb-3">Все поступающие заявки</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Пользователь</th>
                                    <th scope="col">Курс</th>
                                    <th scope="col">Дата старта</th>
                                    <th scope="col">Оплата</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col" class="text-center">Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><span class="badge bg-light text-dark">user123</span></td>
                                    <td class="fw-semibold">Основы frontend-разработки (Bootstrap)</td>
                                    <td>15.07.2026</td>
                                    <td>Телефон</td>
                                    <td><span class="badge bg-secondary status-badge">Новая</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-success me-1 fw-bold">Одобрить</button>
                                        <button class="btn btn-sm btn-outline-danger fw-bold">Отклонить</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><span class="badge bg-light text-dark">user123</span></td>
                                    <td class="fw-semibold">Веб-разработка на PHP и MySQL</td>
                                    <td>01.06.2026</td>
                                    <td>Наличные</td>
                                    <td><span class="badge bg-warning text-dark status-badge">Идет обучение</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-primary fw-bold">Завершить курс</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><span class="badge bg-light text-dark">ivan_petrov</span></td>
                                    <td class="fw-semibold">Графический дизайн и основы композиции</td>
                                    <td>10.04.2026</td>
                                    <td>Телефон</td>
                                    <td><span class="badge bg-success status-badge">Обучение завершено</span></td>
                                    <td class="text-center text-muted small">Действий нет</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="border-top pt-4">
                    <h5 class="fw-bold text-primary mb-3">Отзывы студентов о качестве услуг</h5>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card bg-light border-0 p-3 h-100" style="border-radius: 8px;">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <strong class="text-secondary" style="font-size: 0.9rem;">От: user123</strong>
                                    <span class="text-warning fw-bold">★ 5 / 5</span>
                                </div>
                                <h6 class="fw-bold mb-1" style="font-size: 0.95rem;">Графический дизайн и основы композиции</h6>
                                <p class="text-muted small mb-0">«Прекрасный курс! Все разложено по полочкам, отличная обратная связь от преподавателей. Корочки получил вовремя.»</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card bg-light border-0 p-3 h-100" style="border-radius: 8px;">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <strong class="text-secondary" style="font-size: 0.9rem;">От: sveta_krasnova</strong>
                                    <span class="text-warning fw-bold">★ 4 / 5</span>
                                </div>
                                <h6 class="fw-bold mb-1" style="font-size: 0.95rem;">Веб-разработка на PHP и MySQL</h6>
                                <p class="text-muted small mb-0">«Материал объемный и интересный, но хотелось бы чуть больше практических заданий по базам данных MySQL.»</p>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            <div class="card-footer bg-light text-center py-3 border-0" style="border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                <span class="text-muted small">Ссылки для тестирования:</span>
                <a href="authorization.html" class="text-primary small ms-2 text-decoration-none">Авторизация</a> |
                <a href="applications.html" class="text-primary small text-decoration-none">Просмотр заявок (ЛК)</a> |
                <a href="create_application.html" class="text-primary small text-decoration-none">Создать заявку</a>
            </div>
        </div>
    </div>

</body>
</html>