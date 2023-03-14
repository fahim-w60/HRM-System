<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="">
                        <img src="{{ asset('src/assets/img/logo2.svg') }}" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="./index.html" class="nav-link">HRM</a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        
        @if(Auth::User()->user_type == 'employee')
            @include('backend.partials.__employee_sidebar');
        @endif    
        @if(Auth::User()->user_type == 'director')
            @include('backend.partials.__director_sidebar');
        @endif  
        @if(Auth::User()->user_type == 'hr_manager')
            @include('backend.partials.__hr_manager_sidebar');
        @endif  
        @if(Auth::User()->user_type == 'chairman')
            @include('backend.partials.__chairman_sidebar');
        @endif  
        @if(Auth::User()->user_type == 'director_general')
            @include('backend.partials.__director_general_sidebar');
        @endif      
    </nav>

</div>