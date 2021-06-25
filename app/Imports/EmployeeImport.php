<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
          'employee_code' => $row['employee_code'],
          'firstname' => $row['firstname'],
          'idnumber' => $row['idnumber'],
          'payroll_category' => $row['payroll_category'],
          'pin' => $row['pin'],
          'branch_id' => $row['branch_id'],
          'lastname' => $row['lastname'],
          'middlename' => $row['middlename'],
        ]);
    }
}
