@extends('layouts.backend')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">URTA</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create URTA</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">URTA</h6>
                <form class="forms-sample" method="POST" action="{{ route('urtas.store') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>PIN:</label>
                            <input class="form-control mb-4 mb-md-0" name="pin"/>
                        </div>
                        <div class="col-md-6">
                            <label>Token Number</label>
                            <input class="form-control" type="text" name="token_number"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label>Number Saved:</label>
                            <input class="form-control mb-4 mb-md-0"  name="number_saved"/>
                        </div>
                        <div class="col-md-6">
                            <label>Contact Number</label>
                            <input class="form-control" name="contact_number" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Date of birth</label>
                            <div class="input-group date datepicker" id="datePickerExample">
                                <input type="text" class="form-control" name="dob"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <label>Registration Type</label>
                            <input class="form-control" name="registration_type" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Submitted To Account</label>
                            <input class="form-control" name="submitted_to_account" />
                        </div>
                        <div class="col-md-6">
                            <label>Fee Submission Date</label>
                             <div class="input-group date datepicker" id="datePickerExample">
                                <input type="text" class="form-control" name="fee_submission_date"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Transaction Verify</label>
                            <input class="form-control mb-4 mb-md-0" name="transaction_verify"/>
                        </div>
                        <div class="col-md-6">
                            <label>Requirement Completion Date:</label>
                            <div class="input-group date datepicker" id="datePickerExample">
                                <input type="text" class="form-control" name="requirement_completion_date"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Forwarded Verification Date</label>
                            <div class="input-group date datepicker" id="datePickerExample">
                                <input type="text" class="form-control" name="forwarded_verification_date"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Requirement Completion Date:</label>
                            <div class="input-group date datepicker" id="datePickerExample">
                                <input type="text" class="form-control" name="forwarded_verification_date"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>TRX_ID</label>
                            <input class="form-control" name="trx_id" />
                        </div>
                        <div class="col-md-6">
                            <label>V & GR Message</label>
                            <input class="form-control" name="send_message_v_and_gr" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Group Removal</label>
                            <input class="form-control" name="group_removal" />
                        </div>
                       
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('urtas.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
