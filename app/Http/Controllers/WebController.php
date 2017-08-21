<?php

namespace App\Http\Controllers;

use App\Automobile;
use App\Notifications\OrderNotification;
use App\Tarif;
use App\TaxiTarif;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class WebController extends Controller
{
    public function index()
    {
        $tariffs = Tarif::all();
        $tariff = array();
        $taxi_tariff = TaxiTarif::first();

        foreach ($tariffs as $tr) {
            if ($tr->type == 0)
                $tariff[$tr->id] = "Внутри города";
            else
                $tariff[$tr->id] = "За городом";
        }

        $automobiles = Automobile::all();
        $automobile = array();
        foreach ($automobiles as $key) {
            $automobile[$key->id] = $key->name;
        }

        return view('welcome')
            ->withTariff($tariff)
            ->withTariffs($tariffs)
            ->withTaxi_tariff($taxi_tariff)
            ->withAutomobile($automobile)
            ->withAutomobiles($automobiles);
    }

    public function orderSubmit(Request $request)
    {
        $rules = [
            'name' => 'required',
            'phone' => 'required',
            'address_A' => 'required',
            'address_B' => 'required',
            'point_A' => 'required',
            'point_B' => 'required',
        ];

        $messages = [
            'point_A.required' => 'Пункт А не выбран',
            'point_B.required' => 'Пункт Б не выбран',
            'name.required' => 'Введите имя',
            'phone.required' => 'Введите телефон',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $order = new Order;
        $order->user_type = 0;
        $order->car_id = $request->car;
        $order->tarif_id = $request->tarif;
        $order->address_A = $request->address_A;
        $order->address_B = $request->address_B;
        $order->point_A = $request->point_A;
        $order->point_B = $request->point_B;
        $order->persons = $request->persons;
        $order->unit = $request->unit;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->sum = $request->sum;
        $order->status = 0;
        $order->start_time = Carbon::parse($request->date . " " . $request->time, null);
        $order->save();
        $order->notify(new OrderNotification());
        return redirect()->back();
    }

    public function taxiOrderSubmit(Request $request)
    {

    }
}
