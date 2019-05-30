<?php

namespace App\Http\Controllers;

use Image;
use Validator;
use App\Employee;
use Illuminate\Http\Request;

/**
 * @group Employee Management
 *
 * APIs for managing employees
 */
class EmployeeController extends Controller
{
    public function indexView()
    {
        return view('admin.employees.index');
    }

    public function createView()
    {
        return view('admin.employees.create');
    }

    public function editView($id)
    {
        return view('admin.employees.edit', compact('id'));
    }
    /**
     * Index all employees
     * @response {
     *      "id": 1,
     *      "name": "Ali",
     *      "surname": "Usta",
     *      "description": "Dünya mutfağında uzman şefimiz.",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function index()
    {
        return response()->json(Employee::all());
    }

    /**
     * Create a new employee
     *
     * @bodyParam name string required The name of the employee.
     * @bodyParam surname string required The surname of the employee.
     * @bodyParam description string required The description of the employee.
     * @bodyParam image_url file required The image of the employee.
     *
     * @response {
     *      "id": 1,
     *      "name": "Ali",
     *      "surname": "Usta",
     *      "description": "Dünya mutfağında uzman şefimiz.",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'image_url' => 'sometimes|max:8192'
        ], [
            'name.required' => 'Çalışan adı alanı boş geçilemez.',
            'surname.required' => 'Çalışan soyadı alanı boş geçilemez',
            'image_url.max' => 'Çalışan resmi en fazla 8 MB boyutunda olabilir.'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all(), 422);
        }

        if($request->hasFile('image_url')) {
            $image = $request->image_url->store('img/employees');
            $img = Image::make(public_path($image));
            $img->fit(1280, 720);
            $img->save(public_path($image));
        }

        $employee = $request->except('image_url');
        if($request->hasFile('image_url')){
            $employee['image_url'] = env('APP_URL'). '/' .$image;
        }
        $employee = Employee::create($employee);

        return response()->json($employee);
    }

    /**
     * Show specific category
     * @queryParam id required The id of the employee.
     * @response {
     *      "id": 1,
     *      "name": "Ali",
     *      "surname": "Usta",
     *      "description": "Dünya mutfağında uzman şefimiz.",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function show(Employee $employee)
    {
        return response()->json($employee);
    }

    /**
     * Update specific employee
     * @queryParam id required The id of the employee.
     * @bodyParam id int required The id of the category. Example: 9
     * @bodyParam name string required The name of the employee.
     * @bodyParam surname string required The surname of the employee.
     * @bodyParam description string required The description of the employee.
     * @bodyParam image_url file required The image of the employee.
     *
     * @response {
     *      "id": 9,
     *      "name": "Ali",
     *      "surname": "Usta",
     *      "description": "Dünya mutfağında uzman şefimiz.",
     *      "image_url": "https://via.placeholder.com/500x300"
     * }
     */
    public function update(Request $request, Employee $employee)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'image_url' => 'sometimes|max:8192'
        ]. [
            'name.required' => 'Çalışan adı alanı boş geçilemez.',
            'surname.required' => 'Çalışan soyadı alanı boş geçilemez',
            'image_url.max' => 'Çalışan resmi en fazla 8 MB boyutunda olabilir.'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all(), 422);
        }

        if($request->hasFile('image_url')) {
            $image = $request->image_url->store('img/employees');
            $img = Image::make(public_path($image));
            $img->fit(1280, 720);
            $img->save(public_path($image));
        }

        $employeeArr = $request->except('image_url');
        if($request->hasFile('image_url')){
            $employeeArr['image_url'] = env('APP_URL'). '/' .$image;
        }

        $employee->update($employeeArr);

        return response()->json($employee);
    }

    /**
     * Delete specific employee
     *
     * @queryParam id required The id of the employee.
     *
     * @response {
     *      "status": true
     * }
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json(['status' => true]);
    }
}
