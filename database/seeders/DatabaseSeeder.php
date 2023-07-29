<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   

        // tạo tài khoản 
        \App\Models\User::factory()->create([
            'name' => 'Tester',
            'email' => 'tester@gmail.com',
            'isAdmin' => false,
        ]);

                \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'isadmin' => true,
        ]);
        // khởi tạo các page 
         \App\Models\Page::factory()->create([
            'name' => 'Teacher',
            'description' => 'Danh sách giáo viên',
        ]);
         \App\Models\Page::factory()->create([
            'name' => 'Student',
            'description' => 'Danh sách sinh viên',
        ]);
         \App\Models\Page::factory()->create([
            'name' => 'Semester',
            'description' => 'Danh sách học kỳ',
        ]);
         \App\Models\Page::factory()->create([
            'name' => 'Courses',
            'description' => 'Danh sách Khóa học',
        ]);
         \App\Models\Page::factory()->create([
            'name' => 'Department',
            'description' => 'Danh sách khoa',
        ]);
         \App\Models\Page::factory()->create([
            'name' => 'Class',
            'description' => 'Danh sách lớp học',
        ]);

        // tạo nhóm quyền
          \App\Models\Role\Role::factory()->create([
            'name' => 'Admin',
            
        ]);
        \App\Models\Role\Role::factory()->create([
            'name' => 'Tester',
            
        ]);
        \App\Models\Role\Role::factory()->create([
            'name' => 'Edit',
        ]);
        \App\Models\Role\Role::factory()->create([
            'name' => 'Post',
        ]);
        // tạo quyền
          \App\Models\Role\Permission::factory()->create([
            'name' => 'Add',
            'description' => 'Quyền thêm',
        ]);

          \App\Models\Role\Permission::factory()->create([
            'name' => 'Update',
            'description' => 'Quyền sửa',
        ]);

        \App\Models\Role\Permission::factory()->create([
            'name' => 'Delete',
            'description' => 'Quyền xóa',
        ]);
        // gán quyền cho nhóm quyền
        // Admin
         // Teacher
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '1',
            'page_id' => '1',
            'status' => true,
        ]);
          \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '2',
            'page_id' => '1',
            'status' => true,
        ]);
           \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '3',
            'page_id' => '1',
            'status' => true,
        ]);
        // Student
       \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '1',
            'page_id' => '2',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '2',
            'page_id' => '2',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '3',
            'page_id' => '2',
            'status' => true,
        ]);
        // Semester
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '1',
            'page_id' => '3',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '2',
            'page_id' => '3',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '3',
            'page_id' => '3',
            'status' => true,
        ]);
        // Courses
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '1',
            'page_id' => '4',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '2',
            'page_id' => '4',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '3',
            'page_id' => '4',
            'status' => true,
        ]);
        // Department
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '1',
            'page_id' => '5',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '2',
            'page_id' => '5',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '3',
            'page_id' => '5',
            'status' => true,
        ]);
        // Class
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '1',
            'page_id' => '6',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '2',
            'page_id' => '6',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '1',
            'permission_id' => '3',
            'page_id' => '6',
            'status' => true,
        ]);
        // Tester
         // Teacher
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '1',
            'page_id' => '1',
            'status' => true,
        ]);
          \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '2',
            'page_id' => '1',
            'status' => true,
        ]);
           \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '3',
            'page_id' => '1',
            'status' => true,
        ]);
        // Student
       \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '1',
            'page_id' => '2',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '2',
            'page_id' => '2',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '3',
            'page_id' => '2',
            'status' => true,
        ]);
        // Semester
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '1',
            'page_id' => '3',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '2',
            'page_id' => '3',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '3',
            'page_id' => '3',
            'status' => true,
        ]);
        // Courses
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '1',
            'page_id' => '4',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '2',
            'page_id' => '4',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '3',
            'page_id' => '4',
            'status' => true,
        ]);
        // Department
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '1',
            'page_id' => '5',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '2',
            'page_id' => '5',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '3',
            'page_id' => '5',
            'status' => true,
        ]);
        // Class
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '1',
            'page_id' => '6',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '2',
            'page_id' => '6',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '2',
            'permission_id' => '3',
            'page_id' => '6',
            'status' => true,
        ]);
        // Edit
         // Teacher
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '1',
            'page_id' => '1',
            'status' => true,
        ]);
          \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '2',
            'page_id' => '1',
            'status' => true,
        ]);
           \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '3',
            'page_id' => '1',
            'status' => true,
        ]);
        // Student
       \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '1',
            'page_id' => '2',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '2',
            'page_id' => '2',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '3',
            'page_id' => '2',
            'status' => true,
        ]);
        // Semester
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '1',
            'page_id' => '3',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '2',
            'page_id' => '3',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '3',
            'page_id' => '3',
            'status' => true,
        ]);
        // Courses
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '1',
            'page_id' => '4',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '2',
            'page_id' => '4',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '3',
            'page_id' => '4',
            'status' => true,
        ]);
        // Department
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '1',
            'page_id' => '5',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '2',
            'page_id' => '5',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '3',
            'page_id' => '5',
            'status' => true,
        ]);
        // Class
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '1',
            'page_id' => '6',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '2',
            'page_id' => '6',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '3',
            'permission_id' => '3',
            'page_id' => '6',
            'status' => true,
        ]);
        // Post
         // Teacher
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '1',
            'page_id' => '1',
            'status' => true,
        ]);
          \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '2',
            'page_id' => '1',
            'status' => true,
        ]);
           \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '3',
            'page_id' => '1',
            'status' => true,
        ]);
        // Student
       \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '1',
            'page_id' => '2',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '2',
            'page_id' => '2',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '3',
            'page_id' => '2',
            'status' => true,
        ]);
        // Semester
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '1',
            'page_id' => '3',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '2',
            'page_id' => '3',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '3',
            'page_id' => '3',
            'status' => true,
        ]);
        // Courses
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '1',
            'page_id' => '4',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '2',
            'page_id' => '4',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '3',
            'page_id' => '4',
            'status' => true,
        ]);
        // Department
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '1',
            'page_id' => '5',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '2',
            'page_id' => '5',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '3',
            'page_id' => '5',
            'status' => true,
        ]);
        // Class
        \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '1',
            'page_id' => '6',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '2',
            'page_id' => '6',
            'status' => true,
        ]);
         \App\Models\Role\RolePermissionPage::factory()->create([
            'role_id' => '4',
            'permission_id' => '3',
            'page_id' => '6',
            'status' => true,
        ]);
      // gán nhóm quyền cho user
         DB::table('role_users')->insert([
            'user_id' => '2',
            'role_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('role_users')->insert([
            'user_id' => '2',
            'role_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('role_users')->insert([
            'user_id' => '2',
            'role_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('role_users')->insert([
            'user_id' => '2',
            'role_id' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
         // tạo học kỳ
          \App\Models\Db\Semester::factory()->create([
        'semester_code' => 'HKI',
        'semester_name' => 'Học kỳ 1',
        ]);
          \App\Models\Db\Semester::factory()->create([
        'semester_code' => 'HKII',
        'semester_name' => 'Học kỳ 2',
        ]);
        // tạo khóa học 
        \App\Models\Db\Course::factory()->create([
        'course_code' => 'K60',
        'course_name' => 'Khóa thứ 60',
        ]);
         \App\Models\Db\Course::factory()->create([
        'course_code' => 'K61',
        'course_name' => 'Khóa thứ 61',
        ]);
         \App\Models\Db\Course::factory()->create([
        'course_code' => 'K62',
        'course_name' => 'Khóa thứ 62',
        ]);
         \App\Models\Db\Course::factory()->create([
        'course_code' => 'K63',
        'course_name' => 'Khóa thứ 63',
        ]);
         \App\Models\Db\Course::factory()->create([
        'course_code' => 'K64',
        'course_name' => 'Khóa thứ 64',
        ]);
        \App\Models\Db\Course::factory()->create([
        'course_code' => 'K65',
        'course_name' => 'Khóa thứ 65',
        ]);
        \App\Models\Db\Course::factory()->create([
        'course_code' => 'K66',
        'course_name' => 'Khóa thứ 66',
        ]);
        \App\Models\Db\Course::factory()->create([
        'course_code' => 'K67',
        'course_name' => 'Khóa thứ 67',
        ]);
      
       // tạo khoa
         \App\Models\Db\Department::factory()->create([
        'department_code' => 'CNTT',
        'department_name' => 'Công nghệ thông tin',
        ]);
         \App\Models\Db\Department::factory()->create([
        'department_code' => 'HKVT',
        'department_name' => 'Hàng không vũ trụ',
        ]);
         \App\Models\Db\Department::factory()->create([
        'department_code' => 'TTNT',
        'department_name' => 'Trí tuệ nhân tạo',
        ]);
         \App\Models\Db\Department::factory()->create([
        'department_code' => 'KHMT',
        'department_name' => 'Khoa học máy tính',
        ]);
         \App\Models\Db\Department::factory()->create([
        'department_code' => 'HTTT',
        'department_name' => 'Hệ thống thông tin',
        ]);
          \App\Models\Db\Department::factory()->create([
        'department_code' => 'MTT&TT',
        'department_name' => 'Mạng máy tính và truyền thông',
        ]);
        // tạo lớp
          \App\Models\Db\Classroom::factory()->create([
        'class_code' => 'CA',
        'class_name' => 'Lớp CA',
        ]);
          \App\Models\Db\Classroom::factory()->create([
        'class_code' => 'CB',
        'class_name' => 'Lớp CB',
        ]);
          \App\Models\Db\Classroom::factory()->create([
        'class_code' => 'CC',
        'class_name' => 'Lớp CC',
        ]);
          \App\Models\Db\Classroom::factory()->create([
        'class_code' => 'CD',
        'class_name' => 'Lớp CD',
        ]);
          \App\Models\Db\Classroom::factory()->create([
        'class_code' => 'CE',
        'class_name' => 'Lớp CE',
        ]);
          \App\Models\Db\Classroom::factory()->create([
        'class_code' => 'CF',
        'class_name' => 'Lớp CF',
        ]);
       // tạo giáo viên
       \App\Models\Db\Teacher::factory()->count(50)->create();
       // tạo sinh viên
       \App\Models\Db\Student::factory()->count(500)->create();
    }
}
