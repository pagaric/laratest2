<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use Illuminate\Http\Request;

class EmpController extends Controller
{

    public function empSel()
    {
        $db = new Emp();
        $data = $db->getAllName();
        return view('empSelect', ['data' => $data]);
    }

    public function empSelByName(Request $req)
    {
        $n = $req->input('nom');
        $db = new Emp();

        $infos = $db->getEmpByName($n);
        $data = $db->getAllName();
        return view('empSelect', ['infos' => $infos, 'data' => $data]);
    }



    
    public function selectEmp()
    {
        
        return view('employeeByName');
    }

    public function getEmpByName(Request $request)
    {
        $name = $request->input('nom');

        $db = new Emp();

        $data = $db->getEmpByName($name);

        return view('employeeByName', compact('data'));
    }

    public function listEmployees()
    {
        $db = new Emp();

        $data = $db->getAllEmpInfos('JOB', 'MGR');

        return view('employees', ['emp' => $data]);
    }

}
