<?php

namespace App\Http\Controllers;


use App\Models\DonationList;
use App\Models\Invoice;
use Illuminate\Http\Request;

use Karim007\LaravelBkashTokenize\Facade\BkashPaymentTokenize;

class BkashController extends Controller
{
    
    public function createPayment(Request $request)
    {
        $unique_id = uniqid();
        
        $donation_id = session('donation_id');

        // dd($donation_id );
        $amount = DonationList::where('id', $donation_id)->first()->amount;


        $data = [
            'intent' => 'sale',
            'mode' => '0011',
            'payerReference' => $unique_id,
            'currency' => 'BDT',
            'amount' => $amount,
            'merchantInvoiceNumber' => 0,
            'callbackURL' => config("bkash.callbackURL"),
        ];

        $request->merge($data);

        $request_data_json = json_encode($request->all());

        $bKashPaymentTokenize = new BkashPaymentTokenize();
        $response = BkashPaymentTokenize::cPayment($request_data_json);

        // dd($response);



        if (isset($response['bkashURL'])) {
            return redirect()->away($response['bkashURL']);
        } else {
            return redirect()->back()->with('error-alert2', $response['statusMessage'] ?? 'Something went wrong. Please try again later.');
        }
    }

    



    public function callBack(Request $request)
    {


        if ($request->status == 'success'){
            $response = BkashPaymentTokenize::executePayment($request->paymentID);
            

            if (!$response){ //if executePayment payment not found call queryPayment
                $response = BkashPaymentTokenize::queryPayment($request->paymentID);
                
            }
           
            if (isset($response['statusCode']) && $response['statusCode'] == "0000" && $response['transactionStatus'] == "Completed") {
                /*
                 * for refund need to store paymentID and trxID
                 */


                return redirect()->route('index')->with('success', 'Thank you for Donating Us!');
            }
           

        }else if ($request->status == 'cancel'){
            return BkashPaymentTokenize::cancel('Your payment is canceled');
        }else{
            return BkashPaymentTokenize::failure('Your transaction is failed');
        }
    }




}