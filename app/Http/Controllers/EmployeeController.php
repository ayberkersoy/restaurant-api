<?php

namespace App\Http\Controllers;

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
            'surname' => 'required|max:255'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $employee = Employee::create($request->all());

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
            'surname' => 'required|max:255'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }

        $employee->update($request->all());

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
