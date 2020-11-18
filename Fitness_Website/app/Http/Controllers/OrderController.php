<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\OrderDetail;

use Auth;

use PaytmWallet;

class OrderController extends Controller
{
    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function order($id)
    {   
        $user_id = Auth()->user()->id;
        $user_email = Auth()->user()->email;
        $user_ph_number = Auth()->user()->ph_number;
        $product = Product::find($id); 
        // $this->paymentCallback($id);

        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => mt_rand(1000,10000),//$order->id,
          'user' => $user_id,
          'mobile_number' => $user_ph_number,
          'email' => $user_email,
          'amount' => $product->price,//$order->amount,
          'callback_url' => 'http://127.0.0.1:8000/payment_status'
        ]);
        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback(Request $request)
    {   
        
      $transaction = PaytmWallet::with('receive');
        
      $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
      // dd($response);

      if($transaction->isSuccessful()){
          //Transaction Successful
          // return 'Transaction Successful';

          // $user_id = Auth()->user()->id;
          // $user_email = Auth()->user()->email;
          // $user_ph_number = Auth()->user()->ph_number;
          // $product = Product::find($id); 

          // $order_details=OrderDetail::create(['user_id'=>$user_id,'user_name'=>$user_id->name,'ph_number'=>$user_id->ph_number,'product_name'=>$product->name,'product_price'=>$product->price,'product_image'=>$product->image,'order_id'=>$response['ORDERID'],'txnid'=>$response['TXNID'],'order_date'=>$response['TXNDATE'],'bank_name'=>$response['BANKNAME']]);
          // dd($order_details);
          return view('payment_status',compact('response'));
      }
      else if($transaction->isFailed()){
          //Transaction Failed
      }
      else if($transaction->isOpen()){
          //Transaction Open/Processing
      }
      $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
      $transaction->getOrderId(); // Get order id
      $transaction->getTransactionId(); // Get transaction id

      
      // return redirect()->route('payment_status',[$response]);
    }   

    
    
    


    
}    
