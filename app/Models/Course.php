<?php

namespace App\Models;
use Carbon\Carbon;
use DB;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function saveCourse($input) {        
        $query = DB::table('acme-course');
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
    public function savecourseCategory($input) {        
        $query = DB::table('course_category');
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
    public function savebatchschedule($input) {        
        $query = DB::table('batch_schedule');
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
    public function savecoursedetails($input) {        
        $query = DB::table('student_course');
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
    public function courseLines($inputItem) {

        try {
            if ($inputItem['id']) {
                $result = DB::table('student_lines')->where('id', $inputItem['id'])->update($inputItem);
                return $inputItem['id'];
            } else {
                $result = DB::table('student_lines')->insertGetId($inputItem);
                return $result;
            }
        } catch (QueryException $e) {

            return false;
        }
    }
    public function savepdfcat($input) {        
        $query = DB::table('acme-pdfcatgeory');
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
    public function savepdf($input) {        
        $query = DB::table('acme-pdf');
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