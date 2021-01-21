<?php

namespace App\Http\Controllers;
use App\Models\Expense;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Member;

class ExpenseController extends MainController
{
    function manage(Request $request)
    {
        $expenses = Expense::where('admin_id', '=', $request->session()->get('current_user')->id)->get()->toArray();
        return view('expense.manage', ['current_user'=>$request->session()->get('current_user'),'expenses'=>$expenses]);
    }
    function addexpense()
    {
        return view('expense.addexpense');
    }
    function profile(Request $request)
    {
        return view('expense.profile', ['current_user'=>$request->session()->get('current_user')]);
    }

    function daybook(Request $request)
    {
        $expenses = Expense::where('admin_id', '=', $request->session()->get('current_user')->id)->get()->toArray();
        return view('expense.daybook', ['current_user'=>$request->session()->get('current_user'),'expenses'=>$expenses]);
     
    }
    function subcategory()
    {
        return view('expense.subcategory');
    }

    function add_expense(Request $request)
    {
        //return $request->input();
        //Validate Request
        $request->validate([
              'name' => 'required',
              'monthly_salary' => 'required',
              'monthly_expense_allocation' => 'required',
              'type_of_expenses' => 'required',
              'date' => 'required',
        ]);
         //INSERT DATA INTO DATABASE
         
         $expense = new Expense;
         $expense->admin_id = $request->session()->get('current_user')->id;
         $expense->name = $request->name;
         $expense->monthly_salary = $request->monthly_salary;
         $expense->monthly_expense_allocation = $request->monthly_expense_allocation;
         $expense->type_of_expenses = $request->type_of_expenses;
         $expense->mode_of_payment = $request->mode_of_payment;
         $expense->date = $request->date;
      

         $save = $expense->save();

         if($save)
         {
            echo "<center><strong>Your expense is recorded successfully</strong></center>";
            
            
           // return Redirect:: back()->with('Your expense is recorded successfully');   
            }

         else{
             echo "Something went wrong";
         }
       
    }

    function day_book(Request $request)
    {
       // $users_info = Expense::where('admin_id', '=', $request->session()->get('current_user')->id);
        //$request->session()->put('current_user',$users_info);

        $expenses = Expense::all()->toArray();
        return view('expense.daybook',['expenses'=>$expenses]);
  

       // return Expense::table('monthly_expense_allocation')->sum('monthly_expense_allocation');

    }

    function manager(Request $request)
    {
        $expenses = Expense::all()->toArray();
        return view('expense.manage',['expenses'=>$expenses]);
    }

   function delete($id)
   {
        $expenses=Expense::find($id);
        $expenses->delete();
        //echo "Data deleted";
        return redirect('/expense/daybook');

   }

}



