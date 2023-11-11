<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use App\Models\Plan;

class LoginController extends Controller
{
    function admin(Request $request){
    // dd("yahann aa");
    if (request()->isMethod('post')) {
      $username = request('email');
      $password = request('password');
      if (Auth::guard('admin')->attempt(['email' => $username, 'password' => $password])) {
        // return redirect(route('admin-dashboard'));
          return redirect(route('dashboard'));
      }else{
        return back()->with('error','Invalid Attempts');
      }
    }
    return view('login');
  }

    public function dashboard(){
    	return view('admin.dashboard');
    }

    public function add_features(){
    	return view('admin.add_features');
    }

    public function plans(Request $req){
      if (request()->isMethod('post')) {
        // dd($req->all());
        request()->validate([
            'name'          => 'required',
        ],[
        'name.required' => 'Pricing Plan Name field is required.',
        ]);
        if (request()->has('id')) {
            $add_plan = Plan::find(request('id'));
            $message = ['success' => 'Plan has been updated successfully'];
        }else{
            $add_paln = new Plan;
            $add_paln->created_at = date('Y-m-d H:i:s');
            $message = ['success' => 'Plan has been added successfully'];
        }
        $add_paln->name       = $req->name;
        $add_paln->description       = $req->description;
        $add_paln->price      = $req->price;
        $add_paln->tracked_store  = $req->tracked_store;
        $add_paln->global_store = $req->global_store;
        $add_paln->global_product = $req->global_product;
        $add_paln->email_ticket = $req->email_ticket;
        $add_paln->save();
        return back()->with($message);
      }
      $data = Plan::find(request('id'));
      return view('admin.plans',compact('data'));
    }

    public function plan_list(){
      if (request()->has('del')) {
      if (is_numeric(request('del'))) {
                 $plan = Plan::
                     where('id', request('del'))
                     ->delete();
                return back()->with('success', 'Record has been deleted successfully');
            } else {
                return back();
            }
    }
      $plans = Plan:: all();
      return view('admin.plan-list',compact('plans'));
    }
}
