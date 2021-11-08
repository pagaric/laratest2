<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    
    public function selectEmp()
    {
        return view('employeeByName');
    }

    public function getEmpByName(Request $request)
    {
        $name = $request->input('nom');

        $db = new Emp();

        $data = $db->getEmpByName($name);

        return view('employeeByName', ['data' => $data]);
    }

    public function listEmployees()
    {
        $db = new Emp();

        $data = $db->getAllEmpInfos('JOB', 'MGR');

        return view('employees', ['emp' => $data]);
    }

}
