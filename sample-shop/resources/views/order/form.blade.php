

 <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<h2>Оформление заказа</h2>

<form action="{{ route('order.submit') }}" method="POST">
    @csrf
    <label for="phone">Номер телефона:</label><br>
    <input type="text" id="phone" name="phone" required><br><br>

    <label for="postal_office">Почтовое отделение:</label><br>
    <input type="text" id="postal_office" name="postal_office" required><br><br>

    <label for="card_number">Номер карты:</label><br>
    <input type="text" id="card_number" name="card_number" required><br><br>

   

    <button type="submit">Произвести оплату</button>
</form>