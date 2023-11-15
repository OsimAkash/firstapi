<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    public function addStud( Request $request )  {
        
        if ($request->add_stud == true) {
            $stud_name = $request->stname;
            $stud_mobile = $request->stmobile;

            $stud = new Student();
            $stud->student_name = $stud_name;
            $stud->student_mobile = $stud_mobile;
            $stud->save();

            return \response()->json(['msg'=> 'Student Added Successfully']);
        }


        
    }
    public function getStud()  {
        
        $data ['students']= Student::all();
        return \response()->json($data);
    }

    public function upadateStud(Request $request, $id )  {
        // echo $id;

        if ($request->update_stud==\true) {

            $stud_name = $request->stname;
            $stud_mobile = $request->stmobile;



            $data = array("student_name"=> $stud_name, "student_mobile"=> $stud_mobile);

            Student::where('student_id', $id)->update($data);

            return \response()->json(['msg'=> "Data Updated Successfully"]);
        }

        
        
    }
    
    public function deleteStud(Request $request, $id)  {
        
        if ($request->delete_stud==\true) {
           
            Student::where("student_id", $id)->delete();

            return \response()->json(['msg'=> "Recored Delete Successfully"]);

        }
    
    }
}
