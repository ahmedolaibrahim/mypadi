<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BankRequest;
use App\BankInfo;

use Illuminate\Support\Facades\Route;


class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
            

            $firstname  =  $request->session()->get('firstname')? $request->session()->get('firstname') : "";
            $lastname   =  $request->session()->get('lastname')? $request->session()->get('lastname') : "";
            $address    =  $request->session()->get('address')? $request->session()->get('address') : "";
            $phone      =  $request->session()->get('phone')? $request->session()->get('phone') : "";
            $gender     =  $request->session()->get('gender')? $request->session()->get('gender') : "";
            $user_id    =  $request->session()->get('user_id')? $request->session()->get('user_id') : "";


            return view('bank.index',compact('firstname','lastname','address','phone','gender','user_id'));
    
   }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
       //checks if there's an incoming request
       if($request){
         
          $account_number = rand(1111111111, mt_getrandmax());
          // insert into database
          $result = BankInfo::updateOrCreate( [

                                     'firstname' => $request->firstname, 
                                     'lastname' => $request->lastname,
                                     'gender' => $request->sex,
                                     'address' =>  $request->address,
                                     'phone_number'   =>  $request->phone,
                                     'account_number' => $account_number ,
                                     'account_type' => 'Savings',
                                     'opening_bal' => 0.00
                                     ]);
         // if new user record was successfully inserted into the DB

         if($result){

            $request->session()->put('firstname', $request->firstname);
            $request->session()->put('lastname', $request->lastname);
            $request->session()->put('gender', $request->sex);
            $request->session()->put('address', $request->address);
            $request->session()->put('phone', $request->phone);
            $request->session()->put('user_id', $result->id);
            $request->session()->put('account_number', $account_number);

            // get last inserted id to be used to the next form wizard

             $user_id = $result->id;

              return redirect()->to("/account");
        

         }

         else{

            //user was not inserted go back to the basics pages
            return  back();
         }
       }
    }


   public function saveAccount(Request $request, $user_id)

    {
       //checks if there's an incoming request
       if($request){

          //get user id that will be used for updating current account
          
           $id = $user_id;
           $user =  BankInfo::where('id', $id)->first();

            $updateBankInfo =  $user->update([
                    'account_type'      => $request->account_type,
                    'opening_bal'     =>   $request->opening_bal
            ]);

            if($updateBankInfo){


                 $request->session()->put('account_type',  $request->account_type);
                 $request->session()->put('opening_bal', $request->opening_bal);

                 return redirect()->to("/finish");
            }

       }
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    

     /**
     * Display the Account details Form .
     *
     */


    public function showAccount(Request $request)
    {

      // dd($request->session()->all());
            $user_id = $request->session()->get('user_id') ? $request->session()->get('user_id')  :"";
            $opening_bal = $request->session()->get('opening_bal') ? (int) $request->session()->get('opening_bal')  :"";
            $account_type = $request->session()->get('account_type') ? $request->session()->get('account_type')  :"Savings";
     
            return  view('bank.account',compact('user_id','opening_bal','account_type'));
    }


    /**
     * Show the Finish Form .
     *
     */
      public function showFinish(Request $request)
    {
        

            $firstname  =  $request->session()->get('firstname')? $request->session()->get('firstname') : "";
            $lastname   =  $request->session()->get('lastname')? $request->session()->get('lastname') : "";
            $address    =  $request->session()->get('address')? $request->session()->get('address') : "";
            $phone      =  $request->session()->get('phone')? $request->session()->get('phone') : "";
            $gender     =  $request->session()->get('gender')? $request->session()->get('gender') : "";
            $opening_bal = $request->session()->get('opening_bal') ? (int) $request->session()->get('opening_bal')  :"";
            $account_number = $request->session()->get('account_number') ? (int) $request->session()->get('account_number')  :"";
            $account_type = $request->session()->get('account_type') ? $request->session()->get('account_type')  :"";
            $user_id    =  $request->session()->get('user_id') ||"";


       return view('bank.finish',compact('firstname','lastname','address','phone','gender','user_id','opening_bal','account_number','account_type'));
    }


     /**
     * Show the Finish Form .
     *
     */
      public function showBankAccounts(Request $request)
    {
        
       //flush previuosly added session for last user

       $request->session()->flush();
       
       // 
       $accounts = bankInfo::all();
     
       return view('bank.all',compact('accounts'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
