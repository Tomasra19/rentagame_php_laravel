<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RentOrder;

class RentOrderController extends Controller
{
    public function insertOrder(Request $request) {
        $rentOrder = new RentOrder();
        $rentOrder->name = $request->name;
        $rentOrder->platform = $request->platform;
        $rentOrder->startDate = $request->startDate;
        $rentOrder->returnDate = $request->returnDate;
        $rentOrder->save();

        return response()->json(['success'=>'Užsakymas priimtas! Dėl užsakymo atsiėmimo kreiptis nurodytais kontaktais']);
    }

    public function getOrders() {

        $events = [];
        $rentOrders = RentOrder::all()->toArray();
        foreach ($rentOrders as $rentOrder) {
            if ($rentOrder['platform'] =='PS4') {
                $events[] = [
                    'title'  => $rentOrder['name'],
                    'start'  => $rentOrder['startDate'],
                    'end'    => $rentOrder['returnDate'],
                    'color'  => '#368ce7',
                    'allDay' => true
                ]; 
            } else {
                $events[] = [
                    'title'  => $rentOrder['name'],
                    'start'  => $rentOrder['startDate'],
                    'end'    => $rentOrder['returnDate'],
                    'color'  => '#0b903f',
                    'allDay' => true
                ]; 
            }
           
        }
        $json = json_encode($events);
        // str_replace('"','',$json);
        

        return view('calendar', compact('json'));
    }
}

