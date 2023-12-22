<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all(); //Buradaki Student Models-Student'i temsil eder.
        return view ('students.index')->with('students', $students); //Buradaki students.index views-students-index temsil eder.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_Message', 'Öğrenci Başarıyla Eklenmiştir!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $students = Student::find($id);
        return view ('students.show')->with('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view ('students.edit')->with('students', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('students')->with('flash_Message', 'Öğrenci Başarıyla Güncellenmiştir!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('students')->with('flash_Message', 'Öğrenci Başarıyla Silinmiştir!');
    }
}
