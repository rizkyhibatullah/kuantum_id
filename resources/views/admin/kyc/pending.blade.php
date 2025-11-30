@extends('admin.layouts.app')

@section('contents')
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Semua KYC Request Pending</h3>
                <div class="card-actions">
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($kycRequests as $kycRequest )
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$kycRequest->full_name}}</td>
                                <td class="text-secondary">{{$kycRequest->user->email}}</td>
                                <td class="text-secondary">{{$kycRequest->date_of_birth}}</td>
                                <td class="text-secondary">{{$kycRequest->gender}}</td>
                                @if ($kycRequest->status == 'pending')
                                    <td class="text-secondary"><span class="badge bg-warning-lt">Pending</span></td>
                                @elseif ($kycRequest->status == 'approved')
                                    <td class="text-secondary"><span class="badge bg-success-lt">Approved</span></td>
                                @else
                                    <td class="text-secondary"><span class="badge bg-danger-lt">Rejected</span></td>
                                @endif
                                <td>
                                    <a href="{{ route('admin.kyc.show', $kycRequest) }}">View</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada Permintaan KYC</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $kycRequests->links() }}
                  </div>
            </div>
        </div>
    </div>
@endsection
