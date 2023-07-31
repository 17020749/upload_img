<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Db\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;
class CourseController extends Controller
{
    public function viewCourses(): View
    {
        return view('pages.courses');
    }
      public function getListCourse() {
        // if(Auth::user()->tokenCan(''))
        $listCourse = Course::all();
        return response()->json(
            [
                'status' => 200,
                'message' => 'thành công',
                'data' => $listCourse
            ]
            );
    }
     public function insertCourse(Request $request) {
        if(Auth::user()->tokenCan('Add:Courses'))
        {
            $course = Course::create($request->all());

            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Thêm thành công',
                    'data' => $course
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền thêm học kỳ');
        }
       
    }
    public function updateCourse(Request $request, $id) {
        if(Auth::user()->tokenCan('Update:Courses'))
        {
            $course = Course::find($id)->update($request->all());
            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Cập nhập thành công',
                    'data' => $course
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền cập nhập học kỳ');
        }
       
    }
    public function deleteCourse(Request $request, $id) {
        if(Auth::user()->tokenCan('Delete:Courses'))
        {
            $course = Course::find($id)->delete();
            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Xóa thành công',
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền xóa cập nhập học kỳ');
        }
       
    }
}
