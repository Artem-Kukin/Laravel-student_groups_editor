<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Метод	Маршрут	                            Описание	Примечание
// GET	    /groups	                       Отображает список всех групп	Должна отображаться ссылка на страницу создания новой группы
// GET	    /groups/create	                       Отображает страницу для создания новой группы	-
// POST	    /groups	                           Создаёт  новую группу	После создания перенаправлять на список групп
// GET	    /groups/{group}	                       Отображает информацию по выбранной группе и список студентов этой группы	Должна отображаться ссылка на страницу создания нового студента
// GET	    /groups/{group}/students/create	           Отображает страницу для добавления студента в группу	-
// POST	    /groups/{group}/students	           Создаёт студента для группы	После создания перенаправлять на страницу группы
// GET	    /groups/{group}/students/{student}	Отображает информацию о студенте	-

Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
Route::get('/groups/create', [GroupController::class, 'create'])->name('group.create');
Route::post('/groups', [GroupController::class, 'store'])->name('group.store');
Route::get('/groups/{group}', [GroupController::class, 'show'])->name('group.show');
Route::get('/groups/{group}/edit', [GroupController::class, 'edit'])->name('group.edit');
Route::patch('/groups/{group}', [GroupController::class, 'update'])->name('group.update');
Route::delete('/groups/{group}', [GroupController::class, 'destroy'])->name('group.delete');

Route::get('/groups/{group}/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('student.store');
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('student.show');

