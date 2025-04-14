@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Контакты</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Имя *</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Телефон *</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Сообщение</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>

<!-- Подключаем Inputmask для телефона -->
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#phone').inputmask('+7 (999) 999-99-99');
        });
    </script>
@endsection
@endsection