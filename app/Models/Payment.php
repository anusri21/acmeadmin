<?php

namespace App\Models;
use Carbon\Carbon;
use DB;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function savePayment($input) {        
        $query = DB::table('acme-payment');
        if ($input['id']) {
    
            $input['updated_at'] = Carbon::now()->toDateTimeString();
            $result = $query->where([['id', $input['id']]])->update($input);
            return $input['id'];
            
        } else {
        
            $input['created_at'] = Carbon::now()->toDateTimeString();
            $result = $query->insertGetId($input);
            return $result;
        }
    }

    public function saveExpense($input) {        
        $query = DB::table('acme-expense');
        if ($input['id']) {
    
            $input['updated_at'] = Carbon::now()->toDateTimeString();
            $result = $query->where([['id', $input['id']]])->update($input);
            return $input['id'];
            
        } else {
        
            $input['created_at'] = Carbon::now()->toDateTimeString();
            $result = $query->insertGetId($input);
            return $result;
        }
    }
    public function saveIncome($input) {        
        $query = DB::table('acme-expense');
        if ($input['id']) {
    
            $input['updated_at'] = Carbon::now()->toDateTimeString();
            $result = $query->where([['id', $input['id']]])->update($input);
            return $input['id'];
            
        } else {
        
            $input['created_at'] = Carbon::now()->toDateTimeString();
            $result = $query->insertGetId($input);
            return $result;
        }
    }
    public function savePaymentdetails($input) {        
        $query = DB::table('acme-paymentdetails');
        if ($input['id']) {
    
            $input['updated_at'] = Carbon::now()->toDateTimeString();
            $result = $query->where([['id', $input['id']]])->update($input);
            return $input['id'];
            
        } else {
        
            $input['created_at'] = Carbon::now()->toDateTimeString();
            $result = $query->insertGetId($input);
            return $result;
        }
    }
    
}