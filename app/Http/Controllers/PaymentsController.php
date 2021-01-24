<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        // request()->user()->notify(new PaymentReceived(900));

        // Notification::send(request()->user(), new PaymentReceived());


        // eventing pros and cons lecture # 49

        ProductPurchased::dispatch('toy');
    }
}
