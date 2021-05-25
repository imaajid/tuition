<?php

namespace App\Http\Controllers\Admin;

use App\Models\Urta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class URTAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
           $urtas = Urta::all();
          
            return view('backend.urta.index',compact('urtas'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
           
            return view('backend.urta.create');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        try {
            Urta::create([
                'pin' => $request->pin,
                'token_number'=>  $request->token_number,
                'number_saved'=>  $request->number_saved,
                'contact_number'=>  $request->contact_number,
                'registration_type'=>  $request->registration_type,
                'submitted_to_account'=>  $request->submitted_to_account,
                'fee_submission_date'=>  $request->fee_submission_date,
                'transaction_verify'=>  $request->transaction_verify,
                'requirement_completion_date'=>  $request->requirement_completion_date,
                'forwarded_verification_date'=>  $request->forwarded_verification_date,
                'trx_id'=>  $request->trx_id,
                'send_message_v_and_gr'=>  $request->send_message_v_and_gr,
                'group_removal'=>  $request->group_removal,

                ]);
            return redirect()->route('urtas.index')->with('success', 'urta is successfully saved');
        } catch (\Exception $e) {
            return $e->getMessage();
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
