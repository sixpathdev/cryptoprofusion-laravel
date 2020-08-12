<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CoinbaseCommerce\Resources\Charge;
use CoinbaseCommerce\Webhook;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function createCharge(Request $request)
    {
        $chargeData = [
            'name' => Auth::user()->fullname,
            'email' => $request->input('user_email'),
            'description' => $request->input('plan'),
            'local_price' => [
                'amount' => $request->input('amount'),
                'currency' => 'USD'
            ],
            'pricing_type' => 'fixed_price'
        ];
        $charge_create = Charge::create($chargeData);
        dd($charge_create);
        // return $charge_create;

    }

    public function getAllCharges()
    {
        $allCharges = Charge::getAll();
        dd($allCharges);
    }

    public function webhook()
    {
        /**
         * To run this example please read README.md file
         * Past your Webhook Secret Key from Settings/Webhook section
         * Make sure you don't store your Secret Key in your source code!
         */
        $secret = 'SECRET_KEY';
        $headerName = 'X-Cc-Webhook-Signature';
        $headers = getallheaders();
        $signraturHeader = isset($headers[$headerName]) ? $headers[$headerName] : null;
        $payload = trim(file_get_contents('php://input'));

        try {
            dd($payload);
            $event = Webhook::buildEvent($payload, $signraturHeader, $secret);
            http_response_code(200);
            echo sprintf('Successully verified event with id %s and type %s.', $event->id, $event->type);
        } catch (\Exception $exception) {
            http_response_code(400);
            echo 'Error occured. ' . $exception->getMessage();
        }
    }
}
