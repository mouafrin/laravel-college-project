<?php

namespace App\Http\Controllers;
use App\Models\StudentApp;
use App\Models\EducationalInfo;
use App\Models\District;
use App\Models\thana;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;



class PageController extends Controller
{
    public function showHome(){
        return view('home');

    }
    public function showPhoto(){
        return view('photo');

    }
    public function showStudent(){
      
        return view('studentform');

    }
    public function showContact(){
        return view('contact');

    }
    public function showSign(){
        return view('reg');

    }
    public function showLog(){
        return view('login');

    }
    public function studentView(){
        return view('view');

    }
    public function district(Request $request){
        $data['districts']=DB:: table('districts') ->orderBy('name', 'ASC')->get();
        return view('studentform',$data);
    }
    public function getThana(Request $request){
       
        $id =$request->post('district_id');
        
        $thanas =DB:: table('thanas')-> where ('district_id',$id)->orderBy('name', 'ASC')->get();
        $html =' <option value="">Select district first</option>';
        foreach($thanas as $thana){
        $html.='<option value="'. $thana->id.'">'.$thana->name.'</option>';
      
        }
        return $html;
       
       
    }


   
   
    
     public function showList()
    { 
       

        $list = StudentApp::all();
       
        return view('display',['students' => $list]);
    }
    public function showStudentView($viewid)
    { 
        $students = StudentApp::findOrFail($viewid);
        //$district[] = DB::table('districts')
        $district = District::where ('id',$students->district)->first();
        $thana = Thana::where ('id',$students->thana)->first();
        $education= EducationalInfo:: where ('app_id',$viewid)->get();
      
       return view('view', compact('students','district','thana','education'));
        
    }
    
    public function showStudentEdit($editid)
   
    {   
        
        $student = StudentApp::findOrFail($editid);
        $districts = District:: where('status','1')->get();
        
        $selectedDistrict = District::find($student->district);
        
        $selectedThana = Thana::find($student->thana);

        // $edit = StudentApp::all();
        return view('edit',compact('student','districts','selectedDistrict','selectedThana'));
      
    }
    public function update(Request $request ,$editid){
        $editid = $request->input('editid');
        // Rest of your code
      
    

        $student = StudentApp::find($editid);
        $student->name = $request->name;
        $student->fathers_name = $request->fathers_name;
        $student->fathers_occupation = $request->fathers_occupation;
        $student->date_of_birth = $request->date_of_birth;
        $student->mobile = $request->mobile;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->district = $request->district;
        $student->thana = $request->thana;
      
        $student->signature = $request->signature;
        $student->accept_terms = $request->accept_terms;
        dd($request->all(), $editid);
        if($request->profile_pic)
        {
            $destination = 'images/' . $student->profile_pic;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move(public_path().'images/', $filename);
            $student->profile_pic = $filename;
     
        }
    
        $student->save();
        return redirect()->route('display', $editid);
       
    }

    public function showStudentDelete()
    {
        $list = StudentApp::all();
        return view('display',['students' => $list]);
      
    }
    public function store(Request $request)
{
    $student = new StudentApp;
    $student->name = $request->name;
    $student->fathers_name = $request->fathers_name;
    $student->fathers_occupation = $request->fathers_occupation;
    $student->date_of_birth = $request->date_of_birth;
    $student->mobile = $request->mobile;
    $student->address = $request->address;
    $student->gender = $request->gender;
    $student->email = $request->email;
    $student->district = $request->district;
    $student->thana = $request->thana;
    $student->profile_pic = $request->thana;

  
    $student->signature = $request->signature;
    $student->accept_terms = $request->accept_terms;
   
  
    dd($student);


    $student->save();
    return redirect()->route('student', ['editid' => $editid])->with('success', 'Student updated successfully');
   

foreach($request->institution_name as $key=>$data)
{
    $eduInfo = new EducationalInfo();
    $eduInfo->institution_name = $request->institution_name[$key];
    $eduInfo->degree = $request->degree[$key];
    $eduInfo->passing_year = $request->year[$key];
    $eduInfo->result = $request->result[$key];
    $eduInfo->app_id = $student->id;
    $eduInfo->update();


}


 
}
     
}
 

    

