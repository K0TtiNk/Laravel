<!DOCTYPE html>
<html>
<head>
    <title>Ваше сообщение получено</title>
</head>
<body>
    <h1>Спасибо, {{ $data['name'] }}!</h1>
    <p>Мы получили ваше сообщение и скоро ответим.</p>
    <p><strong>Ваше сообщение:</strong> {{ $data['message'] ?? 'Не указано' }}</p>
</body>
</html>