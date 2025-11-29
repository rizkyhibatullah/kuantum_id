<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    {{-- <link href="./dist/libs/jsvectormap/dist/jsvectormap.css?1750026893" rel="stylesheet" />  --}}
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/global/upload-preview/upload-preview.css') }}">
    <link href="{{ asset('assets/admin/dist/css/tabler.css')}}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN CUSTOM FONT -->
    <style>
      @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
    @stack('styles')
  </head>
  <body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{asset('assets/admin/dist/js/tabler-theme.min.js')}}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">
      <!--  BEGIN SIDEBAR  -->
      @include('vendor-dashboard.layouts.sidebar')
      <!--  END SIDEBAR  -->
      <div class="page-wrapper">
        <!-- BEGIN PAGE BODY -->
        <div class="page-body">
          @yield('contents')
        </div>
        <!-- END PAGE BODY -->
        <!--  BEGIN FOOTER  -->
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2025
                    <a href="." class="link-secondary">KuantumId</a>. All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="javascript:void(0)" class="link-secondary" rel="noopener"> v1.0.0 </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
        <!--  END FOOTER  -->
      </div>
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/admin/dist/js/tabler.min.js')}}" defer></script>
    <script src="{{ asset('assets/global/upload-preview/upload-preview.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    @stack('scripts')
  </body>
</html>
