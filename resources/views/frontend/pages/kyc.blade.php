@extends('frontend.layouts.app')


@section('contents')
    <x-frontend.breadcrump :items="[
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'Login']
    ]"/>
    <div class="page-content pt-150 pb-135">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 offset-lg-3">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1 mb-4">
                                        <h4 class="mb-5">Kyc Verifiaction</h4>
                                    </div>
                                    <form method="post" action="{{route('kyc.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for=""class="font-weight-bold">Full Name <span class="text-danger">*</span></label>
                                            <input type="text" required="" name="full_name"
                                                placeholder=""/>
                                                <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
                                        </div>

                                         <div class="form-group">
                                            <label for=""class="font-weight-bold">Date of Birth <span class="text-danger">*</span></label>
                                            <input type="text" required="" name="date_of_birth"
                                                placeholder="1990/7/9" class="datepicker"/>
                                                <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                                        </div>

                                         <div class="form-group">
                                            <label for=""class="font-weight-bold">Gender <span class="text-danger">*</span></label>
                                            <select name="gender" id="" class="form-control">
                                                <option value="">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                        </div>

                                         <div class="form-group">
                                            <label for=""class="font-weight-bold">Full Address <span class="text-danger">*</span></label>
                                            <input type="text" required="" name="full_address"
                                                placeholder="" />
                                                <x-input-error :messages="$errors->get('full_address')" class="mt-2" />
                                        </div>

                                          <div class="form-group">
                                            <label for=""class="font-weight-bold">Document Type <span class="text-danger">*</span></label>
                                            <select name="document_type" id="" class="form-control">
                                                <option value="">Select</option>
                                                <option value="id_card">ID card</option>
                                                <option value="passport">Passport</option>
                                                <option value="drivinf_license">Driving License</option>
                                            </select>
                                                <x-input-error :messages="$errors->get('document_type')" class="mt-2" />
                                        </div>

                                           <div class="form-group">
                                            <label for=""class="font-weight-bold">Document Scan Copy <span class="text-danger">*</span></label>
                                            <input type="file" required="" name="document_scan_copy"/>
                                                <x-input-error :messages="$errors->get('document_scan_copy')" class="mt-2" />
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-heading btn-block hover-up"
                                                name="">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
