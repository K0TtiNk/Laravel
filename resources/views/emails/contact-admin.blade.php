<!DOCTYPE html>
<html>
<head>
    <title>Новое сообщение с сайта</title>
</head>
<body>
    <h1>Новое сообщение от {{ $data['name'] }}</h1>
    <p><strong>Телефон:</strong> {{ $data['phone'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Сообщение:</strong> {{ $data['message'] ?? 'Не указано' }}</p>
</body>
</html>