@extends('admin.layouts.app')

@section('contents')
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Semua KYC Request</h3>
                <div class="card-actions">
                    <a href="{{ url()->previous() }}" class="btn btn-primary btn-3">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-2">
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                        </svg>
                        Back
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <tbody>
                            <tr>
                                <td>Full Name</td>
                                <td>{{ $kyc_request->full_name }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{ $kyc_request->date_of_birth }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $kyc_request->gender }}</td>
                            </tr>
                            <tr>
                                <td>Alamat Lengkap</td>
                                <td>{{ $kyc_request->full_address }}</td>
                            </tr>
                            <tr>
                                <td>Tipe Dokumen</td>
                                <td>{{ $kyc_request->document_type }}</td>
                            </tr>
                            <tr>
                                <td>Download Dokumen</td>
                                <td>
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.kyc.download', $kyc_request) }}">Download</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                @if ($kyc_request->status == 'pending')
                                    <td class="text-secondary"><span class="badge bg-warning-lt">Pending</span></td>
                                @elseif ($kyc_request->status == 'approved')
                                    <td class="text-secondary"><span class="badge bg-success-lt">Approved</span></td>
                                @else
                                    <td class="text-secondary"><span class="badge bg-danger-lt">Rejected</span></td>
                                @endif
                            </tr>
                            <tr>
                                <td>Mengganti Status Dokumen</td>
                                <td>
                                   <form action="{{ route('admin.kyc.update', $kyc_request)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group">
                                        <select name="status" id="" class="form-control">
                                            <option value="pending">Pending</option>
                                            <option value="approved">Approved</option>
                                            <option value="rejected">Rejected</option>
                                        </select>
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                   </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
