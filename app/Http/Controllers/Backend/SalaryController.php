<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdvanceSalary;
use App\Models\Employee;
use App\Models\PaySalary;
use Carbon\Carbon;

class SalaryController extends Controller
{
    public function AddAdvanceSalary(){

        $employee = Employee::latest()->get();
        return view('backend.salary.add_advance_salary',compact('employee'));

    }// End Method


    public function AdvanceSalaryStore(Request $request){

        $validateData = $request->validate([
            'month' => 'required',
            'year' => 'required',
        ]);

        $month = $request->month;
        $employee_id = $request->employee_id;

        $advanced = AdvanceSalary::where('month',$month)->where('employee_id',$employee_id)->first();

        if ($advanced === NULL) {

            AdvanceSalary::insert([
                'employee_id' => $request->employee_id,
                'month' => $request->month,
                'year' => $request->year,
                'advance_salary' => $request->advance_salary,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Avance sur salaire payée avec succès',
                'alert-type' => 'success'
            );

            return redirect()->route('all.advance.salary')->with($notification);


        } else{

            $notification = array(
                'message' => 'Avance déjà payée',
                'alert-type' => 'warning'
            );

            return redirect()->back()->with($notification);

        }

    }// End Method


    public function AllAdvanceSalary(){

        $salary = AdvanceSalary::latest()->get();
        return view('backend.salary.all_advance_salary',compact('salary'));

    }// End Method



    public function EditAdvanceSalary($id){
        $employee = Employee::latest()->get();
        $salary = AdvanceSalary::findOrFail($id);
        return view('backend.salary.edit_advance_salary',compact('salary','employee'));

    }// End Method


    public function AdvanceSalaryUpdate(Request $request){

        $salary_id = $request->id;

        AdvanceSalary::findOrFail($salary_id)->update([
            'employee_id' => $request->employee_id,
            'month' => $request->month,
            'year' => $request->year,
            'advance_salary' => $request->advance_salary,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Avance de salaire mise à jour avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route('all.advance.salary')->with($notification);


    }// End Method


    public function deleteAdvance($id)
    {
        $advanceSalary = AdvanceSalary::findOrFail($id);
        $advanceSalary->delete();


        $notification = array(
            'message' => 'L\'avance sur salaire a été supprimée avec succès.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }



    //////////////////////// Pay Salary All Mehtod /////////////////


    public function PaySalary(){
        $employee = Employee::with('advance')->latest()->get();
        return view('backend.salary.pay_salary', compact('employee'));
    }



    public function PayNowSalary($id){
        // Récupération des données de l'employé
        $employee = Employee::findOrFail($id);

        // Récupération de l'avance sur salaire associée à cet employé
        $advanceSalary = $employee->advance_salaries->first();

        // Passer les données à la vue
        return view('backend.salary.paid_salary', compact('employee', 'advanceSalary'));
    }



    public function EmployeSalaryStore(Request $request){

        $employee_id = $request->id;

        PaySalary::insert([

            'employee_id' => $employee_id,
            'salary_month' => $request->month,
            'paid_amount' => $request->paid_amount,
            'advance_salary' => $request->advance_salary,
            'due_salary' => $request->due_salary,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Salaire du travailleur payé avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route('pay.salary')->with($notification);


    }// End Method


    public function MonthSalary(){

        $paidsalary = PaySalary::latest()->get();

        return view('backend.salary.month_salary',compact('paidsalary'));

    }// End Method

    public function monthNowSalary($id)
    {
//		return "Test de la méthode HistorySalary avec l'ID : $id";

        $employee = Employee::findOrFail($id);
//        dd($employee);
        $historySalary = $employee->salaryPayments; // Récupère l'historique des paiements
        return view('backend.salary.history_salary', compact('employee', 'historySalary'));
    }

    public function payHistoryDetail(String $id)
    {
        try {
            // Récupérer les détails du paiement de salaire
            $paySalary = PaySalary::with(['employee'])->findOrFail($id);

            // Passer les données à la vue
            return view('backend.salary.history-details', ['paySalary' => $paySalary]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Gérer l'exception ici, par exemple, rediriger avec un message d'erreur
            return redirect()->route('route.name')->with('error', 'Paiement de salaire introuvable.');
        }
    }



    public function deleteMonth($id)
    {
        $salary = PaySalary::findOrFail($id);

        // Supprimer l'historique
        $salary->delete();

        $notification = [
            'message' => 'History deleted',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);

    }


}
