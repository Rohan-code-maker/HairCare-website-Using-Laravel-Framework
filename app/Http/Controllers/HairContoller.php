<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class HairContoller extends Controller
{
    public function index(){
        return view('index');
    }

    public function register(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'date'=>'required',
                'time'=>'required',
                'work'=>'required',
                'phone'=>'required',
            ]
            );

        //for inserting data
        $customer=new customer;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->date=$request['date'];
        $customer->time=$request['time'];
        $customer->work=$request['work'];
        $customer->phone=$request['phone'];
        $customer->message=$request['message'];
        $customer->save();

        return redirect('/customer/view');
    }

    public function create(){
        $url=url('/update');
        $data=compact('url');
        return view('update')->with($data);
    }
    public function view(){
        $customer=Customer::all();
        $data=compact('customer');
        return view('customer-view')->with($data);
    }

    public function delete($id){
        Customer::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $customer=Customer::find($id);
        if(is_null($customer))
        {
            //customer not found
            return redirect('customer-view');
        }
        else{
            $url=url('/customer/update')."/".$id;
            $data=compact('customer','url');
            return view('update')->with($data);
        }
    }

    public function update($id,Request $request){
        $customer=Customer::find($id);
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->date=$request['date'];
        $customer->time=$request['time'];
        $customer->work=$request['work'];
        $customer->phone=$request['phone'];
        $customer->message=$request['message'];
        $customer->save();

        return redirect('/customer/view');
    }
}
