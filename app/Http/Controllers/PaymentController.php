<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Redirect;

use Validator;
use Response;
use DB;
use Session;

class PaymentController extends Controller
{
    public function __construct() {
        $this->payment = new Payment();
    }
    public function payment(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'name' => isset($data['name']) ? $data['name'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'mobile' => isset($data['mobile']) ? $data['mobile'] : '',
                'payment_id' => isset($data['payment_id']) ? $data['payment_id'] : '',
                'paymentmethod' => isset($data['paymentmethod']) ? $data['paymentmethod'] : '',
                'paymentapplied' => isset($data['paymentapplied']) ? $data['paymentapplied'] : '',
                'datarecived' => isset($data['datarecived']) ? $data['datarecived'] : '',
                'amount' => isset($data['amount']) ? $data['amount'] : '',
                
            ];
           
           

            $rules = array(
                'name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'payment_id'   => 'required',
                'paymentmethod' => 'required',
                // 'paymentapplied' => 'required',
                // 'datarecived' => 'required',
                // 'amount' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                return Response::json([
                            'status' => 0,
                            'message' => $checkValid->errors()->all()
                                ], 400);
            } else { 
               
                $paymentInput = array(
                    'id' => $input['id'],
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'mobile' => $input['mobile'],
                    'payment_id' => $input['payment_id'],
                    'paymentmethod'=>$input['paymentmethod'],
                    'paymentapplied' => $input['paymentapplied'],
                    'datarecived' => $input['datarecived'],
                    'amount' => $input['amount'],
                    'status'=>1,
                   
                );
               //dd($paymentInput);
                $paymentid = $this->payment->savePayment($paymentInput);
               
               if ($paymentid) {
                   
                return redirect('admin/paymentlist');
                } else {
                    return Response::json([
                                'status' => 0,
                                'message' => 'Please provide valid details'
                                    ], 400);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
     
    }

  
    public function addpaymentdetails(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'payment_type' => isset($data['payment_type']) ? $data['payment_type'] : '',
                'payment_category' => isset($data['payment_category']) ? $data['payment_category'] : '',
                'amount' => isset($data['amount']) ? $data['amount'] : '',
                'name' => isset($data['name']) ? $data['name'] : '',
                'payment_method' => isset($data['payment_method']) ? $data['payment_method'] : '',
                'phone' => isset($data['phone']) ? $data['phone'] : '',
                'date' => isset($data['date']) ? $data['date'] : '',
                'comments' => isset($data['comments']) ? $data['comments'] : '',

                
            ];
           
           

            $rules = array(
                'payment_type' => 'required',
                'payment_category' => 'required',
                'phone' => 'required',
                'amount'   => 'required',
                'payment_method' => 'required',
                // 'paymentapplied' => 'required',
                // 'datarecived' => 'required',
                // 'amount' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                // return Response::json([
                //             'status' => 0,
                //             'message' => $checkValid->errors()->all()
                //                 ], 400);
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
               
                $paymentInput = array(
                    'id' => $input['id'],
                    'payment_type' => $input['payment_type'],
                    'payment_category' => $input['payment_category'],
                    'amount' => $input['amount'],
                    'username' => $input['name'],
                    'payment_method' => $input['payment_method'],
                    'phone' => $input['phone'],
                    'date'=>$input['date'],
                    'comments' => $input['comments'],
                    'status'=>1,
                   
                );
               //dd($paymentInput);
                $paymentid = $this->payment->savePaymentdetails ($paymentInput);
               
               if ($paymentid) {
                return Response::json([
                    'status' => 1,
                    'message' => 'Successfully Added'
                        ], 200);
                //return redirect('backend/paymentdetaillist');
                } else {
                    return Response::json([
                                'status' => 0,
                                'message' => 'Please provide valid details'
                                    ], 400);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
     
    }
}