<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PaytmWallet;

class OrderController extends Controller
{
    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function order()
    {
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => 1,//$order->id,
          'user' => 1,//$user->id,
          'mobile_number' => 2345453432,//$user->phonenumber,
          'email' => 'abcd@gmail.com',//$user->email,
          'amount' => 345,//$order->amount,
          'callback_url' => 'http://example.com/payment/status'
        ]);
        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        
        if($transaction->isSuccessful()){
          //Transaction Successful
        }else if($transaction->isFailed()){
          //Transaction Failed
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }   
}    
