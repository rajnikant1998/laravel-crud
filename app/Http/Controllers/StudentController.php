<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('studentform');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StudentRequest $request)
	{
		// print_r($request->toArray());
		// die;
		$validated = $request->validated();

		// INSERTED DATA IN DATABASE

		$student = new Student;
		$student->name = $request->name;
		$student->email = $request->email;
		$student->password = Hash::make($request->password);
		$student->country = $request->country;
		$student->state = $request->state;
		$student->city = $request->city;
		$student->address = $request->address;
		$student->gender = $request->gender;
		$student->date = $request->date;

		if ($request->hasfile('image')) {
			// $file = $request->file('image');
			// $extention = $file->getClientOriginalExtension();
			// $filename = time() . '.' . $extention;
			// $file->move('uploads/students/', $filename);
			// $student->image = $filename;

			foreach($request->image as $file){
				$filename = $file->getClientOriginalName();
				$file->move('uploads/students/',$filename);
				$data[]= $filename;
				$student->image = json_encode($data);
			//  $file = $request->file('image');
			// $extention = $files->getClientOriginalExtension();
			// $filename = time() . '.' . $extention;
			// $files->move('uploads/students/', $filename);
			// $student->image = $filename;
			}
		}
		$student->save();

		return redirect()->route('show');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Student  $student
	 * @return \Illuminate\Http\Response
	 */
	public function show(Student $student)
	{
		// SHOW DATA
		// echo "<pre>";
		// print_r($student->all());
		// echo "</pre>";
		// die;
		$student = student::all();
		$data = compact('student');

		return view('studentlist')->with($data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Student  $student
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$student = student::find($id);
		$data = compact('student');
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		if (is_null($student)) {
			return redirect()->route('show');
		} else {
			return view('studentedit')->with($data);
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Student  $student
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		// UPDATE DATA 

		// 	echo "<pre>";
		//    print_r($request->toArray());
		//    echo "</pre>";
		//    die;

		$request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'country' => 'required|string',
			'state' => 'required',
			'city' => 'required',
			'address' => 'required',
			'gender' => 'required',
			'date' => 'required',
			'image' => 'required'
		]);

		$student = Student::find($id);

		$student->name = $request->name;
		$student->email = $request->email;
		$student->country = $request->country;
		$student->state = $request->state;
		$student->city = $request->city;
		$student->address = $request->address;
		$student->gender = $request->gender;
		$student->date = $request->date;

		if ($request->image) {

			$destination = 'uploads/students/' . $student->image;
			if (File::exists($destination)) {
				File::delete($destination);
			}
			$file = $request->file('image');
			$extention = $file->getClientOriginalExtension();
			$filename = time() . '.' . $extention;
			$file->move('uploads/students/', $filename);
			$student->image = $filename;
		}
		$student->save();

		return redirect()->route('show');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Student  $student
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		// DELETE DATA

		$student = student::find($id);
		$student->delete();
		return redirect()->route('show');
	}
}
