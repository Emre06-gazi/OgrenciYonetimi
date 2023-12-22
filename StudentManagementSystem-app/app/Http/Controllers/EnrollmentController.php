<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Enrollment;

class EnrollmentController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $enrollments = Enrollment::all(); //Buradaki Student Models-Student'i temsil eder.
        return view ('enrollments.index')->with('enrollments', $enrollments); //Buradaki students.index views-students-index temsil eder.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_Message', 'Kayıt Başarıyla Eklenmiştir!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $enrollments = Enrollment::find($id);
        return view ('enrollments.show')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $enrollments= Enrollment::find($id);
        return view ('enrollments.edit')->with('enrollments', $enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $enrollment = Enrollment::find($id);
        $input = $request->all();
        $enrollment->update($input);
        return redirect('enrollments')->with('flash_Message', 'Kayıt Başarıyla Güncellenmiştir!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_Message', 'Kayıt Başarıyla Silinmiştir!');
    }
}
