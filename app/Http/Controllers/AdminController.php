<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    protected function show_all_reports(){

    	$employees_joined_this_year = DB::table('employees')
			 				->select('sFirstName','sLastName','dJoiningDate','sEmail', 'nContact')   	
					    	->whereYear('dJoiningDate', '=', date('Y'))
					    	->get();
    	//$employees= Employee::all();
		
		$employees_fifth_high_salary=DB::table('employees')
							->join('salaries', 'salaries.nSid','=','employees.nSid')
							->select('employees.sFirstName','employees.sLastName','employees.sEmail','employees.nContact', 'salaries.nAmount')
							->orderBy('nAmount', 'desc')
							->skip(4)
					        ->take(1)
					        ->get();

		$employees_birthday_this_month=DB::table('employees')
							->select('sFirstName', 'sLastName', 'sEmail', 'nContact', 'dDateOfBirth')
							->whereMonth('dDateOfBirth','=',date('m'))
					        ->get();			        

		$employees_per_department=DB::table('employees')
							->join('departments', 'departments.nDid','=','employees.nDid')
							->select('departments.sDepartmentName as department', DB::raw("count(*) as count"))
							->groupBy('departments.sDepartmentName')
							->get();	



		$employees_max_sal_all_dep=DB::table('employees')
							->join('departments', 'departments.nDid','=','employees.nDid')
							->join('salaries', 'salaries.nSid','=','employees.nSid')
							->select('departments.sDepartmentName as department',  DB::raw("MAX(salaries.nAmount) as salary"))
							->groupBy('departments.sDepartmentName')
							->get();							        
    	return view('admin.dashboard')->with('employees_joined_this_year', $employees_joined_this_year)
    	->with('employees_fifth_high_salary', $employees_fifth_high_salary)
    	->with('employees_birthday_this_month', $employees_birthday_this_month)
    	->with('employees_per_department', $employees_per_department)
    	->with('employees_max_sal_all_dep', $employees_max_sal_all_dep);
    }


    protected function show_report1(){
    	$employees_joined_this_year = DB::table('employees')
			 				->select('sFirstName','sLastName','dJoiningDate','sEmail', 'nContact')   	
					    	->whereYear('dJoiningDate', '=', date('Y'))
					    	->get();	
					    return view('admin.report1')->with('employees_joined_this_year', $employees_joined_this_year);
    }


    protected function show_report2(){
    	$employees_fifth_high_salary=DB::table('employees')
							->join('salaries', 'salaries.nSid','=','employees.nSid')
							->select(DB::RAW('DISTINCT(employees.nSid)'),'employees.sFirstName','employees.sLastName','employees.sEmail','employees.nContact', 'salaries.nAmount')
							->orderBy('nAmount', 'desc')
							->skip(4)
					        ->take(1)
					        ->get();
					   return view('admin.report2')->with('employees_fifth_high_salary', $employees_fifth_high_salary);

    }
    protected function show_report3(){
    	$employees_birthday_this_month=DB::table('employees')
							->select('sFirstName', 'sLastName', 'sEmail', 'nContact', 'dDateOfBirth')
							->whereMonth('dDateOfBirth','=',date('m'))
					        ->get();
					   return view('admin.report3')->with('employees_birthday_this_month', $employees_birthday_this_month);
    	        
    }
    protected function show_report4(){
    		$employees_per_department=DB::table('employees')
							->join('departments', 'departments.nDid','=','employees.nDid')
							->select('departments.sDepartmentName as department', DB::raw("count(*) as count"))
							->groupBy('departments.sDepartmentName')
							->get();
							return view('admin.report4')->with('employees_per_department', $employees_per_department);
    	
    }
    protected function show_report5(){
    		$employees_max_sal_all_dep=DB::table('employees')
							->join('departments', 'departments.nDid','=','employees.nDid')
							->join('salaries', 'salaries.nSid','=','employees.nSid')
							->select('departments.sDepartmentName as department',  DB::raw("MAX(salaries.nAmount) as salary"))
							->groupBy('departments.sDepartmentName')
							->get();
							return view('admin.report5')->with('employees_max_sal_all_dep', $employees_max_sal_all_dep);
    	
    }
}
