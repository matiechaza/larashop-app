<body class="horizontal-layout horizontal-menu {{$configData['horizontalMenuType']}} {{ $configData['blankPageClass'] }}
{{ $configData['bodyClass'] }}
{{ $configData['sidebarClass'] }} {{ $configData['verticalMenuNavbarType'] }} {{ $configData['footerType'] }}" data-menu="horizontal-menu" data-col="{{ $configData['showMenu'] === true ? '' : '1-column' }}" data-open="hover" data-layout="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}" style="{{ $configData['bodyStyle'] }}" data-framework="laravel" data-asset-path="{{ asset('/')}}">

{{-- Include Sidebar --}}
@if((isset($configData['showMenu']) && $configData['showMenu'] === true))
    @include('panels.sidebar')
@endif

<!-- BEGIN: Header-->
{{-- Include Navbar --}}
@include('panels.navbar')

{{-- Include Sidebar --}}
@include('panels.horizontalMenu')

<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-wrapper">
        <div class="sidebar-detached sidebar-left">
            <div class="sidebar">
                {{-- Include Sidebar Content --}}
                @yield('content-sidebar')
            </div>
        </div>
        <div class="content-detached content-right">
            <div class="content-body">
                {{-- Include Page Content --}}
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!-- End: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

{{-- include footer --}}
@include('panels/footer')

{{-- include default scripts --}}
@include('panels/scripts')

<script type="text/javascript">
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14
                , height: 14
            });
        }
    })

</script>
</body>

</html>
