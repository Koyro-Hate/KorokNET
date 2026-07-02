<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои заявки — Корочки.есть</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-card {
            max-width: 900px;
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
            <a class="navbar-brand fw-bold" href="#">Корочки.есть</a>
            <div class="navbar-text text-white ms-auto">
                Вы вошли как: <strong class="text-info">user123</strong> | <a href="authorization.php" class="text-danger text-decoration-none ms-2">Выйти</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card dashboard-card shadow">
            <div class="card-header text-white py-3">
                <h4 class="mb-0 fw-bold">Мои заявки на обучение</h4>
                <small>Просмотр статуса и управление историей курсов</small>
            </div>
            <div class="card-body p-4">
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0 text-secondary">Список заявок</h5>
                    <a href="new_application.php" class="btn btn-success fw-bold px-4 py-2">
                        + Подать новую заявку
                    </a>
                </div>

                <div class="table-responsive mb-5">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Наименование курса</th>
                                <th scope="col">Дата начала</th>
                                <th scope="col">Способ оплаты</th>
                                <th scope="col">Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="fw-semibold">Основы frontend-разработки (Bootstrap)</td>
                                <td>15.07.2026</td>
                                <td>Перевод по номеру телефона</td>
                                <td><span class="badge bg-secondary status-badge">Новая</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="fw-semibold">Веб-разработка на PHP и MySQL</td>
                                <td>01.06.2026</td>
                                <td>Наличные</td>
                                <td><span class="badge bg-warning text-dark status-badge">Идет обучение</span></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="fw-semibold">Графический дизайн и основы композиции</td>
                                <td>10.04.2026</td>
                                <td>Перевод по номеру телефона</td>
                                <td><span class="badge bg-success status-badge">Обучение завершено</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="border-top pt-4">
                    <h5 class="fw-bold mb-3 text-primary">Оставить отзыв о качестве образовательных услуг</h5>
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="courseSelect" class="form-label fw-semibold">Выберите курс</label>
                                <select class="form-select" id="courseSelect" required>
                                    <option value="" disabled selected>-- Выберите программу из списка --</option>
                                    <option value="1">Основы frontend-разработки (Bootstrap)</option>
                                    <option value="2">Веб-разработка на PHP и MySQL</option>
                                    <option value="3">Графический дизайн и основы композиции</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ratingSelect" class="form-label fw-semibold">Ваша оценка</label>
                                <select class="form-select" id="ratingSelect" required>
                                    <option value="5">5 — Отлично, всё понравилось</option>
                                    <option value="4">4 — Хорошо, но есть замечания</option>
                                    <option value="3">3 — Удовлетворительно</option>
                                    <option value="2">2 — Плохо</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="reviewText" class="form-label fw-semibold">Ваш отзыв</label>
                            <textarea class="form-control" id="reviewText" rows="3" required placeholder="Напишите ваше мнение о качестве обучения..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary fw-bold px-4 py-2">Отправить отзыв</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>