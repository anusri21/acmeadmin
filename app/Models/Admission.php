<?php

namespace App\Models;
use Carbon\Carbon;
use DB;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    public function saveStaff($input) {        
        $query = DB::table('staff');
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
    public function saveStudent($input) {        
        $query = DB::table('acme-student');
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
    public function saveEnquiry($input) {        
        $query = DB::table('acme-enquiry');
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