<?php
namespace App\Http\Controllers;
use App\Imports\EmployeeImport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Apps\Imports\EmployeeImports;
use Maatwebsite\Excel\Facades\Excel;

class EmployeController extends Controller
{
    
    public function importForm()
    {
        return view('import');

    } 


    public function import(Request $request)
    {
        $upload = $request->file('fileupload');
        $filePath = $upload->getRealPath();
        
        
        Excel::import(new EmployeeImport, $filePath);
    return "sucessful importted";
    }
}
