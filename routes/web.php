<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::middleware(['auth'])->group(function()
{
	//home para los diferentes tipos de usuarios
	Route::get('/', 'HomeController@index');
	Route::get('/admin', 'AdminController@index')->name('admin.home');	
	Route::get('/teacher', 'TeacherController@index')->name('teacher.home');	
	Route::get('/parent', 'HomeController@ViewParentHome')->name('parent.home');
	Route::get('/student', 'StudentController@index')->name('student.home');
	//apartado del admin para poder agregar, editar y eliminar un aula 
	Route::resource('admin/aulas','ClassroomController',[ 'except' => ['update', 'destroy'] ]);
	Route::post('admin/aulas/update/{id}', 'ClassroomController@update')->name('aulas.update');
	Route::post('admin/aulas/delete/{id}', 'ClassroomController@destroy')->name('aulas.destroy');
	//apartado del admin para poder agregar, editar y eliminar un Monster 
	Route::resource('admin/monster','MonsterController',[ 'except' => ['update', 'destroy'] ]);
	Route::post('admin/monster/update/{id}', 'MonsterController@update')->name('monster.update');
	Route::post('admin/monster/delete/{id}', 'MonsterController@destroy')->name('monster.destroy');
	//apartado del admin para poder agregar, editar y eliminar una materia
	Route::resource('admin/subject','SubjectController',[ 'except' => ['update', 'destroy'] ]);
	Route::post('admin/subject/update/{id}', 'SubjectController@update')->name('subject.update');
	Route::post('admin/subject/delete/{id}', 'SubjectController@destroy')->name('subject.destroy');
	//apartado del admin para agregar, editar y eliminar profesores
	Route::get('admin/teacher','AdminController@TeacherIndex')->name('admin.teacher.index');
	Route::post('admin/teacher','AdminController@StoreTeacher')->name('admin.teacher.store');
	//apartado del admin para agregar, editar y eliminar estudiantes
	Route::get('admin/student','AdminController@StudentIndex')->name('admin.student.index');
	Route::post('admin/student','AdminController@StoreStudent')->name('admin.student.store');
	Route::post('admin/user/update/{id}','AdminController@UpdateUser')->name('admin.student.store');
	Route::post('admin/user/delete/{id}', 'AdminController@DestroyUser')->name('admin.user.destroy');
	//apartado del admin para ver cursos
	Route::get('admin/courses','AdminController@CourseIndex')->name('admin.course.index');
	//apartado del admin para asignar profesores a los cursos
	Route::get('admin/assingcourses','AdminController@AssingCourseIndex')->name('admin.assingcourse.index');
	Route::post('admin/assingcourses','AdminController@AssingCourseStore')->name('admin.assingcourse.store');
	Route::post('admin/assingcourses/update/{id}','AdminController@AssingCourseUpdate')->name('admin.assingcourse.update');
	Route::post('admin/assingcourses/delete/{id}','AdminController@AssingCourseDelete')->name('admin.assingcourse.delete');

	//apartado para los profesores
	Route::get('teacher/classroom/{id}','TeacherController@ClassRoom')->name('teacher.classroom.index');
	Route::post('teacher/classroom/monster/update/{id}','MonsterController@UpdateAccion')->name('teacher.monster.update');

	//Ruta para los estudiantes
	Route::get('student/profile','StudentController@profile')->name('student.profile.index');



	Route::get('student/compañeros', 'StudentController@friend')->name('student.friend');
	

	
});

