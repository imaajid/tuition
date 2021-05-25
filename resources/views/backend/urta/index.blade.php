@extends('layouts.backend')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">URTA</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('urtas.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create URTA
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">URTA</h6>
                    <p class="card-description">All the URTA are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    PIN
                                    {{-- pin --}}
                                </th>
                                <th>
                                    Token Number
                                    {{-- token_number --}}
                                </th>
                                <th>
                                    Number Saved
                                    {{-- number_saved --}}
                                </th>
                                <th>
                                    Contact Number
                                    {{-- contact_number --}}
                                </th>
                                <th>
                                    Registration Type
                                    {{-- registration_type --}}
                                </th>
                                <th>
                                    Submitted To Account
                                    {{-- submitted_to_account --}}
                                </th>
                                <th>
                                    Fee Submission Date
                                    {{-- fee_submission_date --}}
                                </th>
                                <th>
                                    Transaction Verify
                                    {{-- transaction_verify --}}
                                </th>
                                <th>
                                    Requirement Completion Date
                                    {{-- requirement_completion_date --}}
                                </th>
                                <th>
                                    Forwarded Verification Date
                                    {{-- forwarded_verification_date --}}
                                </th>
                                <th>
                                   
                                    {{-- trx_id --}}
                                    TRX_ID
                                </th>
                                <th>
                                    {{-- send_message_v_and_gr --}}
                                    V & GR Message
                                </th>
                                <th>
                                    {{-- group_removal --}}
                                    Group Removal
                                </th>
                                
                                <th>
                                    Created At
                                </th>
                                <th>
                                    Updated At
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($urtas as $key => $urta)
                                <tr>
                                    <td>
                                        {{ ++$key }}
                                    </td>
                                    <td>
                                        {{ $urta->pin }}
                                    </td>
                                    <td>
                                        {{ $urta->token_number }}
                                    </td>
                                    <td>
                                        {{ $urta->number_saved }}
                                    </td>
                                    <td>
                                        {{ $urta->contact_number }}
                                    </td>
                                    <td>
                                        {{ $urta->registration_type }}
                                    </td>
                                    <td>
                                        {{ $urta->submitted_to_account }}
                                    </td>
                                    <td>
                                        {{ $urta->fee_submission_date }}
                                    </td>
                                    <td>
                                        {{ $urta->transaction_verify }}
                                    </td>
                                    <td>
                                        {{ $urta->requirement_completion_date }}
                                    </td>
                                    <td>
                                        {{ $urta->forwarded_verification_date }}
                                    </td>
                                    <td>
                                      {{ $urta->trx_id }}
                                     </td>
                                    <td>
                                        {{ $urta->send_message_v_and_gr }}
                                    </td>
                                    <td>
                                        {{ $urta->group_removal }}
                                    </td>
                                     <td>
                                        {{ \Carbon\Carbon::parse($urta->created_at)->diffForhumans() }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($urta->updated_at)->diffForhumans() }}
                                    </td>
                                    <td>
                                        {{-- {{ route('doctor_details.destroy',$doctor_detail->id) }} --}}
                                        <form class="d-inline-block" action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                            </button>
                                        </form>
                                        {{-- {{ route('doctor_details.edit',$doctor_detail->id) }} --}}
                                        <a   href="" class="btn btn-warning btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
