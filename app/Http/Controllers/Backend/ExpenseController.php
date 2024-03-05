<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    public function AddExpense(){

        return view('backend.expense.add_expense');

    } // End Method


    public function StoreExpense(Request $request){
        $formatted_amount = number_format($request->amount, 2);
        Expense::insert([

            'details' => $request->details,
            'amount' => $formatted_amount, // Utilisation de la valeur formatée
            'month' => $request->month,
            'year' => $request->year,
            'date' => $request->date,
            'created_at' => Carbon::now(),
        ]);


        $notification = array(
            'message' => 'Expense Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Method



    public function TodayExpense(){

        $date = date("d-m-Y");
        $today = Expense::where('date',$date)->get();
        $totalExpense = $today->sum('amount'); // Calculez le total de la dépense d'aujourd'hui
        return view('backend.expense.today_expense',compact('today', 'totalExpense'));

    } // End Method


    public function EditExpense($id){

        $expense = Expense::findOrFail($id);
        return view('backend.expense.edit_expense',compact('expense'));

    }// End Method


    public function UpdateExpense(Request $request){

        $expense_id = $request->id;

        Expense::findOrFail($expense_id)->update([

            'details' => $request->details,
            'amount' => $request->amount,
            'month' => $request->month,
            'year' => $request->year,
            'date' => $request->date,
            'created_at' => Carbon::now(),
        ]);


        $notification = array(
            'message' => 'Expense Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('today.expense')->with($notification);

    }// End Method


    public function MonthExpense(){

        $month = date("F");
        $monthexpense = Expense::where('month',$month)->get();
        $totalExpensem = $monthexpense->sum('amount'); // Calculez le total de la dépense d'aujourd'hui
        return view('backend.expense.month_expense',compact('monthexpense', 'totalExpensem'));

    }// End Method


    public function YearExpense(){

        $year = date("Y");
        $yearexpense = Expense::where('year',$year)->get();
        $totalExpensey = $yearexpense->sum('amount'); // Calculez le total de la dépense d'aujourd'hui
        return view('backend.expense.year_expense',compact('yearexpense', 'totalExpensey'));

    }// End Method


}
