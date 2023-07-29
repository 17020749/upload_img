<div id="hs-medium-modal" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
  <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      
       <form method="post" action="{{route('role.update')}}">
          @csrf
          @method('PATCH')
      <div class="p-4 overflow-y-auto">
        <p class="mt-1 text-gray-800 dark:text-gray-400">
          <!--Tabs navigation-->
       
          <div class="flex items-start">
            <ul
            class="mr-4 flex list-none flex-col flex-wrap pl-0 border h-64"
            role="tablist"
            data-te-nav-ref>
            <li role="presentation" class="flex-grow text-center">
              
              <x-navigation-item 
              href="#tabs-admin"
              data-te-target="#tabs-admin"
              data-te-nav-active
              aria-controls="tabs-admin"
              aria-selected="true"
              >
              Admin
              </x-navigation-item>
            </li>
            <li role="presentation" class="flex-grow text-center">
              <x-navigation-item 
              href="#tabs-tester"
              data-te-target="#tabs-tester"
              aria-controls="tabs-tester"
              aria-selected="false"
              >
              Tester
              </x-navigation-item>
            </li>
            <li role="presentation" class="flex-grow text-center">
              <x-navigation-item 
              href="#tabs-edit"
              data-te-target="#tabs-edit"
              aria-controls="tabs-edit"
              aria-selected="false"
              >
              Edit
              </x-navigation-item>
            </li>
            <li role="presentation" class="flex-grow text-center">
              <x-navigation-item 
              href="#tabs-post"
              data-te-target="#tabs-post"
              aria-controls="tabs-post"
              aria-selected="false"
              >
              Post
              </x-navigation-item>
            </li>
          </ul>

<!--Tabs content-->
          <div class="border h-64">
              <!-- tab admin -->
              <x-role-page 
              id="tabs-admin"
              aria-labelledby="tabs-admin"
              data-te-tab-active
              >
              <x-slot name="navPage">
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-admin-teacher"
                  data-te-target="#tabs-admin-teacher"
                  data-te-nav-active
                  aria-controls="tabs-admin-teacher"
                  aria-selected="true"
                  >
                    teacher
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-admin-student"
                  data-te-target="#tabs-admin-student"
                  aria-controls="tabs-admin-student"
                  aria-selected="false"
                  >
                    Student
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-admin-semester"
                  data-te-target="#tabs-admin-semester"
                  aria-controls="tabs-admin-semester"
                  aria-selected="false"
                  >
                    Semester
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-admin-courses"
                  data-te-target="#tabs-admin-courses"
                  aria-controls="tabs-admin-courses"
                  aria-selected="false"
                  >
                    Courses
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-admin-department"
                  data-te-target="#tabs-admin-department"
                  aria-controls="tabs-admin-department"
                  aria-selected="false"
                  >
                    Department
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-admin-class"
                  data-te-target="#tabs-admin-class"
                  aria-controls="tabs-admin-class"
                  aria-selected="false"
                  >
                    Class
                  </x-navigation-item>
                </li>

              </x-slot>
              <x-slot name="teacher">
                <x-role-page-permission id="tabs-admin-teacher" aria-labelledby="tabs-admin-teacher" data-te-tab-active>
                  <x-nav-input id="AdminTeacherAdd" name="AdminTeacherAdd" checked="{{ $data->Admin->Teacher->Add }}">
                  Quyền thêm teacher
                    </x-nav-input>
                    <x-nav-input id="AdminTeacherUpdate" name="AdminTeacherUpdate" checked="{{ $data->Admin->Teacher->Update }}">
                      Quyền sửa teacher
                    </x-nav-input>
                    <x-nav-input id="AdminTeacherDelete" name="AdminTeacherDelete" checked="{{ $data->Admin->Teacher->Delete }}">
                      Quyền xóa teacher
                    </x-nav-input>
                </x-role-page-permission>
              </x-slot>

              <x-slot name="student">
                <x-role-page-permission id="tabs-admin-student" aria-labelledby="tabs-admin-student">
                   <x-nav-input id="AdminStudentAdd" name="AdminStudentAdd" checked="{{ $data->Admin->Student->Add }}">
                  Quyền thêm student
                </x-nav-input>
                <x-nav-input id="AdminStudentUpdate" name="AdminStudentUpdate" checked="{{ $data->Admin->Student->Update }}">
                  Quyền sửa student
                </x-nav-input>
                <x-nav-input id="AdminStudentDelete" name="AdminStudentDelete" checked="{{ $data->Admin->Student->Delete }}">
                  Quyền xóa student
                </x-nav-input>
                </x-role-page-permission>
              </x-slot>

              <x-slot name="courses">
                <x-role-page-permission id="tabs-admin-courses" aria-labelledby="tabs-admin-courses">
                  <x-nav-input id="AdminCoursesAdd" name="AdminCoursesAdd" checked="{{ $data->Admin->Courses->Add }}">
                  Quyền thêm courses
                </x-nav-input>
                <x-nav-input id="AdminCoursesUpdate" name="AdminCoursesUpdate" checked="{{ $data->Admin->Courses->Update }}">
                  Quyền sửa courses
                </x-nav-input>
                <x-nav-input id="AdminCoursesDelete" name="AdminCoursesDelete" checked="{{ $data->Admin->Courses->Delete }}">
                  Quyền xóa courses
                </x-nav-input>
                </x-role-page-permission>
              </x-slot>

              <x-slot name="semester">
                <x-role-page-permission id="tabs-admin-semester" aria-labelledby="tabs-admin-semester">
                  <x-nav-input id="AdminSemesterAdd" name="AdminSemesterAdd" checked="{{ $data->Admin->Semester->Add }}">
                  Quyền thêm semester
                </x-nav-input>
                <x-nav-input id="AdminSemesterUpdate" name="AdminSemesterUpdate" checked="{{ $data->Admin->Semester->Update }}">
                  Quyền sửa semester
                </x-nav-input>
                <x-nav-input id="AdminSemesterDelete" name="AdminSemesterDelete" checked="{{ $data->Admin->Semester->Delete }}">
                  Quyền xóa semester
                </x-nav-input>
                </x-role-page-permission>
              </x-slot>

              <x-slot name="department">
                <x-role-page-permission id="tabs-admin-department" aria-labelledby="tabs-admin-department">
                  <x-nav-input id="AdminDepartmentAdd" name="AdminDepartmentAdd" checked="{{ $data->Admin->Department->Add }}">
                  Quyền thêm department
                </x-nav-input>
                <x-nav-input id="AdminDepartmentUpdate" name="AdminDepartmentUpdate" checked="{{ $data->Admin->Department->Update }}">
                  Quyền sửa department
                </x-nav-input>
                <x-nav-input id="AdminDepartmentDelete" name="AdminDepartmentDelete" checked="{{ $data->Admin->Department->Delete }}">
                  Quyền xóa department
                </x-nav-input>
                </x-role-page-permission>
                
              </x-slot>
              <x-slot name="class">
                <x-role-page-permission id="tabs-admin-class" aria-labelledby="tabs-admin-class">
                  <x-nav-input id="AdminClassAdd" name="AdminClassAdd" checked="{{ $data->Admin->Class->Add }}">
                  Quyền thêm
                </x-nav-input>
                <x-nav-input id="AdminClassUpdate" name="AdminClassUpdate" checked="{{ $data->Admin->Class->Update }}">
                  Quyền sửa
                </x-nav-input>
                <x-nav-input id="AdminClassDelete" name="AdminClassDelete" checked="{{ $data->Admin->Class->Delete }}">
                  Quyền xóa
                </x-nav-input>
                </x-role-page-permission>
                
              </x-slot>  
              </x-role-page>
            <!-- tab tester -->
            <x-role-page
            id="tabs-tester"
              aria-labelledby="tabs-tester"
            >
            <x-slot name="navPage">
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-tester-teacher"
                  data-te-target="#tabs-tester-teacher"
                  data-te-nav-active
                  aria-controls="tabs-tester-teacher"
                  aria-selected="true"
                  >
                    teacher
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-tester-student"
                  data-te-target="#tabs-tester-student"
                  aria-controls="tabs-tester-student"
                  aria-selected="false"
                  >
                    Student
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-tester-semester"
                  data-te-target="#tabs-tester-semester"
                  aria-controls="tabs-tester-semester"
                  aria-selected="false"
                  >
                    Semester
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-tester-courses"
                  data-te-target="#tabs-tester-courses"
                  aria-controls="tabs-tester-courses"
                  aria-selected="false"
                  >
                    Courses
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-tester-department"
                  data-te-target="#tabs-tester-department"
                  aria-controls="tabs-tester-department"
                  aria-selected="false"
                  >
                    Department
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-tester-class"
                  data-te-target="#tabs-tester-class"
                  aria-controls="tabs-tester-class"
                  aria-selected="false"
                  >
                    Class
                  </x-navigation-item>
                </li>

              </x-slot>
             <x-slot name="teacher">
               <x-role-page-permission id="tabs-tester-teacher" aria-labelledby="tabs-tester-teacher" data-te-tab-active>
                  <x-nav-input id="TesterTeacherAdd" name="TesterTeacherAdd" checked="{{ $data->Tester->Teacher->Add }}">
                  Quyền thêm tester
                </x-nav-input>
                <x-nav-input id="TesterTeacherUpdate" name="TesterTeacherUpdate" checked="{{ $data->Tester->Teacher->Update }}">
                  Quyền sửa tester
                </x-nav-input>
                <x-nav-input id="TesterTeacherDelete" name="TesterTeacherDelete" checked="{{ $data->Tester->Teacher->Delete }}">
                  Quyền xóa tester
                </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="student">
                <x-role-page-permission id="tabs-tester-student" aria-labelledby="tabs-tester-student">
                  <x-nav-input id="TesterStudentAdd" name="TesterStudentAdd" checked="{{ $data->Tester->Student->Add }}">
                    Quyền thêm tester student
                  </x-nav-input>
                  <x-nav-input id="TesterStudentUpdate" name="TesterStudentUpdate" checked="{{ $data->Tester->Student->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="TesterStudentDelete" name="TesterStudentDelete" checked="{{ $data->Tester->Student->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="courses">
                <x-role-page-permission id="tabs-tester-courses" aria-labelledby="tabs-tester-courses">
                  <x-nav-input id="TesterCoursesAdd" name="TesterCoursesAdd" checked="{{ $data->Tester->Courses->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="TesterCoursesUpdate" name="TesterCoursesUpdate" checked="{{ $data->Tester->Courses->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="TesterCoursesDelete" name="TesterCoursesDelete" checked="{{ $data->Tester->Courses->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="semester">
                <x-role-page-permission id="tabs-tester-semester" aria-labelledby="tabs-tester-semester">
                  <x-nav-input id="TesterSemesterAdd" name="TesterSemesterAdd" checked="{{ $data->Tester->Semester->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="TesterSemesterUpdate" name="TesterSemesterUpdate" checked="{{ $data->Tester->Semester->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="TesterSemesterDelete" name="TesterSemesterDelete" checked="{{ $data->Tester->Semester->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="department">
                <x-role-page-permission id="tabs-tester-department" aria-labelledby="tabs-tester-department">
                  <x-nav-input id="TesterDepartmentAdd" name="TesterDepartmentAdd" checked="{{ $data->Tester->Department->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="TesterDepartmentUpdate" name="TesterDepartmentUpdate" checked="{{ $data->Tester->Department->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="TesterDepartmentDelete" name="TesterDepartmentDelete" checked="{{ $data->Tester->Department->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="class">
                <x-role-page-permission id="tabs-tester-class" aria-labelledby="tabs-tester-class">
                    <x-nav-input id="TesterClassAdd" name="TesterClassAdd" checked="{{ $data->Tester->Class->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="TesterClassUpdate" name="TesterClassUpdate" checked="{{ $data->Tester->Class->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="TesterClassDelete" name="TesterClassDelete" checked="{{ $data->Tester->Class->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>  
          </x-role-page>
            <!-- tab edit -->
            <x-role-page
            id="tabs-edit"
              aria-labelledby="tabs-edit"
            >
              <x-slot name="navPage">
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-edit-teacher"
                  data-te-target="#tabs-edit-teacher"
                  data-te-nav-active
                  aria-controls="tabs-edit-teacher"
                  aria-selected="true"
                  >
                    teacher
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-edit-student"
                  data-te-target="#tabs-edit-student"
                  aria-controls="tabs-edit-student"
                  aria-selected="false"
                  >
                    Student
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-edit-semester"
                  data-te-target="#tabs-edit-semester"
                  aria-controls="tabs-edit-semester"
                  aria-selected="false"
                  >
                    Semester
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-edit-courses"
                  data-te-target="#tabs-edit-courses"
                  aria-controls="tabs-edit-courses"
                  aria-selected="false"
                  >
                    Courses
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-edit-department"
                  data-te-target="#tabs-edit-department"
                  aria-controls="tabs-edit-department"
                  aria-selected="false"
                  >
                    Department
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-edit-class"
                  data-te-target="#tabs-edit-class"
                  aria-controls="tabs-edit-class"
                  aria-selected="false"
                  >
                    Class
                  </x-navigation-item>
                </li>

              </x-slot>
             <x-slot name="teacher">
               <x-role-page-permission id="tabs-edit-teacher" aria-labelledby="tabs-edit-teacher" data-te-tab-active>
                  <x-nav-input id="EditTeacherAdd" name="EditTeacherAdd" checked="{{ $data->Edit->Teacher->Add }}">
                  Quyền thêm Edit
                </x-nav-input>
                <x-nav-input id="EditTeacherUpdate" name="EditTeacherUpdate" checked="{{ $data->Edit->Teacher->Update }}">
                  Quyền sửa Edit
                </x-nav-input>
                <x-nav-input id="EditTeacherDelete" name="EditTeacherDelete" checked="{{ $data->Edit->Teacher->Delete }}">
                  Quyền xóa Edit
                </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="student">
                <x-role-page-permission id="tabs-edit-student" aria-labelledby="tabs-edit-student">
                  <x-nav-input id="EditStudentAdd" name="EditStudentAdd" checked="{{ $data->Edit->Student->Add }}">
                    Quyền thêm Edit student
                  </x-nav-input>
                  <x-nav-input id="EditStudentUpdate" name="EditStudentUpdate" checked="{{ $data->Edit->Student->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="EditStudentDelete" name="EditStudentDelete" checked="{{ $data->Edit->Student->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="courses">
                <x-role-page-permission id="tabs-edit-courses" aria-labelledby="tabs-edit-courses">
                  <x-nav-input id="EditCoursesAdd" name="EditCoursesAdd" checked="{{ $data->Edit->Courses->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="EditCoursesUpdate" name="EditCoursesUpdate" checked="{{ $data->Edit->Courses->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="EditCoursesDelete" name="EditCoursesDelete" checked="{{ $data->Edit->Courses->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="semester">
                <x-role-page-permission id="tabs-edit-semester" aria-labelledby="tabs-edit-semester">
                  <x-nav-input id="EditSemesterAdd" name="EditSemesterAdd" checked="{{ $data->Edit->Semester->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="EditSemesterUpdate" name="EditSemesterUpdate" checked="{{ $data->Edit->Semester->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="EditSemesterDelete" name="EditSemesterDelete" checked="{{ $data->Edit->Semester->Delete }}">
                    Quyền Edit
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="department">
                <x-role-page-permission id="tabs-edit-department" aria-labelledby="tabs-edit-department">
                  <x-nav-input id="EditDepartmentAdd" name="EditDepartmentAdd" checked="{{ $data->Edit->Department->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="EditDepartmentUpdate" name="EditDepartmentUpdate" checked="{{ $data->Edit->Department->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="EditDepartmentDelete" name="EditDepartmentDelete" checked="{{ $data->Edit->Department->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="class">
                <x-role-page-permission id="tabs-edit-class" aria-labelledby="tabs-edit-class">
                    <x-nav-input id="EditClassAdd" name="EditClassAdd" checked="{{ $data->Edit->Class->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="EditClassUpdate" name="EditClassUpdate" checked="{{ $data->Edit->Class->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="EditClassDelete" name="EditClassDelete" checked="{{ $data->Edit->Class->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>  
            </x-role-page>
            <!-- tab post -->
            <x-role-page
              id="tabs-post"
              aria-labelledby="tabs-post"
            >
                          <x-slot name="navPage">
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-post-teacher"
                  data-te-target="#tabs-post-teacher"
                  data-te-nav-active
                  aria-controls="tabs-post-teacher"
                  aria-selected="true"
                  >
                    teacher
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-post-student"
                  data-te-target="#tabs-post-student"
                  aria-controls="tabs-post-student"
                  aria-selected="false"
                  >
                    Student
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-post-semester"
                  data-te-target="#tabs-post-semester"
                  aria-controls="tabs-post-semester"
                  aria-selected="false"
                  >
                    Semester
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-post-courses"
                  data-te-target="#tabs-post-courses"
                  aria-controls="tabs-post-courses"
                  aria-selected="false"
                  >
                    Courses
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-post-department"
                  data-te-target="#tabs-post-department"
                  aria-controls="tabs-post-department"
                  aria-selected="false"
                  >
                    Department
                  </x-navigation-item>
                </li>
                <li role="presentation" class="flex-auto text-center">
                  <x-navigation-item 
                  href="#tabs-post-class"
                  data-te-target="#tabs-post-class"
                  aria-controls="tabs-post-class"
                  aria-selected="false"
                  >
                    Class
                  </x-navigation-item>
                </li>

              </x-slot>
             <x-slot name="teacher">
               <x-role-page-permission id="tabs-post-teacher" aria-labelledby="tabs-post-teacher" data-te-tab-active>
                  <x-nav-input id="PostTeacherAdd" name="PostTeacherAdd" checked="{{ $data->Post->Teacher->Add }}">
                  Quyền thêm post
                </x-nav-input>
                <x-nav-input id="PostTeacherUpdate" name="PostTeacherUpdate" checked="{{ $data->Post->Teacher->Update }}">
                  Quyền sửa post
                </x-nav-input>
                <x-nav-input id="PostTeacherDelete" name="PostTeacherDelete" checked="{{ $data->Post->Teacher->Delete }}">
                  Quyền xóa post
                </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="student">
                <x-role-page-permission id="tabs-post-student" aria-labelledby="tabs-post-student">
                  <x-nav-input id="PostStudentAdd" name="PostStudentAdd" checked="{{ $data->Post->Student->Add }}">
                    Quyền thêm post student
                  </x-nav-input>
                  <x-nav-input id="PostStudentUpdate" name="PostStudentUpdate" checked="{{ $data->Post->Student->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="PostStudentDelete" name="PostStudentDelete" checked="{{ $data->Post->Student->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="courses">
                <x-role-page-permission id="tabs-post-courses" aria-labelledby="tabs-post-courses">
                  <x-nav-input id="PostCoursesAdd" name="PostCoursesAdd" checked="{{ $data->Post->Courses->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="PostCoursesUpdate" name="PostCoursesUpdate" checked="{{ $data->Post->Courses->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="PostCoursesDelete" name="PostCoursesDelete" checked="{{ $data->Post->Courses->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="semester">
                <x-role-page-permission id="tabs-post-semester" aria-labelledby="tabs-post-semester">
                  <x-nav-input id="PostSemesterAdd" name="PostSemesterAdd" checked="{{ $data->Post->Semester->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="PostSemesterUpdate" name="PostSemesterUpdate" checked="{{ $data->Post->Semester->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="PostSemesterDelete" name="PostSemesterDelete" checked="{{ $data->Post->Semester->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="department">
                <x-role-page-permission id="tabs-post-department" aria-labelledby="tabs-post-department">
                  <x-nav-input id="PostDepartmentAdd" name="PostDepartmentAdd" checked="{{ $data->Post->Department->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="PostDepartmentUpdate" name="PostDepartmentUpdate" checked="{{ $data->Post->Department->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="PostDepartmentDelete" name="PostDepartmentDelete" checked="{{ $data->Post->Department->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
              <x-slot name="class">
                <x-role-page-permission id="tabs-post-class" aria-labelledby="tabs-post-class">
                    <x-nav-input id="PostTesterClassAdd" name="PostTesterClassAdd" checked="{{ $data->Post->Class->Add }}">
                  Quyền thêm
                  </x-nav-input>
                  <x-nav-input id="PostClassUpdate" name="PostClassUpdate" checked="{{ $data->Post->Class->Update }}">
                    Quyền sửa
                  </x-nav-input>
                  <x-nav-input id="PostClassDelete" name="PostClassDelete" checked="{{ $data->Post->Class->Delete }}">
                    Quyền xóa
                  </x-nav-input>
                </x-role-page-permission>
              </x-slot>
            </x-role-page>
          </div>
        </div>
        </p>
      </div>
      <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
        <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-red-200 font-semibold text-red-500 hover:text-white hover:bg-red-500 hover:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-medium-modal">
        Close
        </button>
        <button type="submit" @click="HSOverlay.close($modalEl)" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-green-200 font-semibold text-green-500 hover:text-white hover:bg-green-500 hover:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
        Save
        </button>
      </div>
        </form>
    </div>
  </div>
</div>
<script>
  const $modalEl = document.getElementById('hs-medium-modal');
$modalEl.addEventListener('open.hs.overlay', function(evt) {
  // Thực hiện các hành động sau khi modal cụ thể được mở
  console.log('Modal cụ thể đã được mở');
  
});

$modalEl.addEventListener('close.hs.overlay', function(evt) {
  // Thực hiện các hành động sau khi modal cụ thể được đóng
  console.log('Modal cụ thể đã được đóng');
  // ...
});
</script>