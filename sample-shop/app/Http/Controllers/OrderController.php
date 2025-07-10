<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painting;

class OrderController extends Controller
{
    public function show($id)
    {
        $painting = Painting::findOrFail($id);
        return view('order.form', compact('painting'));
    }

    public function submit(Request $request, $id)
    {
        // Обработка данных формы оплаты
        // Например, сохранить заказ, провести платеж и т.д.
        // Для примера просто покажем сообщение

        // Валидация данных
        $validated = $request->validate([
            'phone' => 'required|string',
            'postal_office' => 'required|string',
            'card_number' => 'required|string',
            // добавьте другие поля по необходимости
        ]);

        // Тут должна быть логика платежа и сохранения заказа

        return redirect()->route('thankyou')->with('success', 'Заказ оформлен!'); 
    }
}