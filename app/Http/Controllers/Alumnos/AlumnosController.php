<?php

namespace App\Http\Controllers\Alumnos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\RedirectResponse;


class AlumnosController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Student=Students::all();
        $Student=Students::paginate(10);
        return view('studentsadd', compact('Student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
 return view('formulario');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        {
            $request->validate([
                'name_student' => 'required|string|max:255',
                'id_student' => 'required|numeric',
                'email_student' => 'required|email',
                'password_student' => 'required|string',
            ]);
    
            Students::create($request->all());
    
            return redirect()->route('Alumnos.index')->with('success', 'Estudiante agregado correctamente');;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Student=Students::find($id);
        return view('show-student',compact('Student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Student=Students::find($id);
        return view('edit-student',compact('Student'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request ,$id):RedirectResponse
    {
        $student=Students::find($id);
        $student->update($request->all());

        return redirect()->route('Alumnos.index')->with('notificacion',
        'Estudiante modificado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
