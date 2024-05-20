<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class MpesaController extends Controller
{
    public function stkSimulation() {
        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $BusinessShortCode=174379;
        $LipaNaMpesaPasskey=env('MPESA_PASSKEY');
        $TransactionType="CustomerPayBillOnline";
        $Amount="1";
        $PartyA="254720000000";
        $PartyB=174379;
        $PhoneNumber="254720000000";
        $CallBackURL="https://website.com";
        $AccountReference="Your company's Payment";
        $TransactionDesc="Lipa na M-PESA web development";
        $Remarks="Thanks for shopping with us!";

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode, 
            $LipaNaMpesaPasskey, 
            $TransactionType, 
            $Amount, 
            $PartyA, 
            $PartyB, 
            $PhoneNumber, 
            $CallBackURL, 
            $AccountReference, 
            $TransactionDesc, 
            $Remarks
        );

        dd($stkPushSimulation);
    }
}
