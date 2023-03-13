<ul class="list-unstyled menu-categories" id="accordionExample">
    <li class="menu active">
        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <span>Dashboard</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
     
    </li>

    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Personal Info Area</span></div>
    </li>

    <li class="menu">
        <a href="#invoice" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                <span>Employee</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="invoice" data-bs-parent="#accordionExample">
            <li>
                <a href="{{ route('employee.create') }}"> Add Employee </a>
            </li>
            <li>
                <a href="{{ route('employee.index') }}"> Employee List </a>
            </li>                            
        </ul>
    </li>


    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Adminstrator Area</span></div>
    </li>

    <li class="menu">
        <a href="#components" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                <span>Adminstrator</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="components" data-bs-parent="#accordionExample">
            <li>
                <a href="#">Add Adminstrator</a>
            </li>
            <li>
                <a href="#">Adminstrator List</a>
            </li>
            <li>
                <a href="#">Add Department</a>
            </li>
            <li>
                <a href="#">Department List</a>
            </li>
        </ul>
    </li>




    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Leave Area</span></div>
    </li>

    <li class="menu">
        <a href="./table-basic.html" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span>Tables</span>
            </div>
        </a>
    </li>

    <li class="menu">
        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                <span>DataTables</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
            <li>
                <a href="./table-datatable-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./table-datatable-striped-table.html"> Striped </a>
            </li>
            <li>
                <a href="./table-datatable-custom.html"> Custom </a>
            </li>
            <li>
                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
            </li>
        </ul>
    </li>

    <li class="menu">
        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                <span>Forms</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
            <li>
                <a href="./form-bootstrap-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./form-input-group-basic.html"> Input Group </a>
            </li>
            <li>
                <a href="./form-layouts.html"> Layouts </a>
            </li>
            <li>
                <a href="./form-validation.html"> Validation </a>
            </li>
            <li>
                <a href="./form-input-mask.html"> Input Mask </a>
            </li>
            <li>
                <a href="./form-selectBox.html"> SelectBox </a>
            </li>
            <li>
                <a href="./form-tagify.html"> Tagify </a>
            </li>
            <li>
                <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
            </li>
            <li>
                <a href="./form-maxlength.html"> Maxlength </a>
            </li>                          
            <li>
                <a href="./form-checkbox.html"> Checkbox </a>
            </li>
            <li>
                <a href="./form-radio.html"> Radio </a>
            </li>
            <li>
                <a href="./form-switches.html"> Switches </a>
            </li>
            <li>
                <a href="./form-wizard.html"> Wizards </a>
            </li>
            <li>
                <a href="./form-fileupload.html"> File Upload </a>
            </li>
            <li>
                <a href="./form-quill.html"> Quill Editor </a>
            </li>
            <li>
                <a href="./form-markdown.html"> Markdown Editor </a>
            </li>
            <li>
                <a href="./form-date-time-picker.html"> Date Time Picker </a>
            </li>
            <li>
                <a href="./form-slider.html"> Slider </a>
            </li>
            <li>
                <a href="./form-clipboard.html"> Clipboard </a>
            </li>
            <li>
                <a href="./form-autoComplete.html"> Auto Complete </a>
            </li>
        </ul>
    </li>


    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Payroll Area</span></div>
    </li>

    <li class="menu">
        <a href="./table-basic.html" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span>Tables</span>
            </div>
        </a>
    </li>

    <li class="menu">
        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                <span>DataTables</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
            <li>
                <a href="./table-datatable-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./table-datatable-striped-table.html"> Striped </a>
            </li>
            <li>
                <a href="./table-datatable-custom.html"> Custom </a>
            </li>
            <li>
                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
            </li>
        </ul>
    </li>

    <li class="menu">
        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                <span>Forms</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
            <li>
                <a href="./form-bootstrap-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./form-input-group-basic.html"> Input Group </a>
            </li>
            <li>
                <a href="./form-layouts.html"> Layouts </a>
            </li>
            <li>
                <a href="./form-validation.html"> Validation </a>
            </li>
            <li>
                <a href="./form-input-mask.html"> Input Mask </a>
            </li>
            <li>
                <a href="./form-selectBox.html"> SelectBox </a>
            </li>
            <li>
                <a href="./form-tagify.html"> Tagify </a>
            </li>
            <li>
                <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
            </li>
            <li>
                <a href="./form-maxlength.html"> Maxlength </a>
            </li>                          
            <li>
                <a href="./form-checkbox.html"> Checkbox </a>
            </li>
            <li>
                <a href="./form-radio.html"> Radio </a>
            </li>
            <li>
                <a href="./form-switches.html"> Switches </a>
            </li>
            <li>
                <a href="./form-wizard.html"> Wizards </a>
            </li>
            <li>
                <a href="./form-fileupload.html"> File Upload </a>
            </li>
            <li>
                <a href="./form-quill.html"> Quill Editor </a>
            </li>
            <li>
                <a href="./form-markdown.html"> Markdown Editor </a>
            </li>
            <li>
                <a href="./form-date-time-picker.html"> Date Time Picker </a>
            </li>
            <li>
                <a href="./form-slider.html"> Slider </a>
            </li>
            <li>
                <a href="./form-clipboard.html"> Clipboard </a>
            </li>
            <li>
                <a href="./form-autoComplete.html"> Auto Complete </a>
            </li>
        </ul>
    </li>


    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Attendance Area</span></div>
    </li>

    <li class="menu">
        <a href="./table-basic.html" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span>Tables</span>
            </div>
        </a>
    </li>

    <li class="menu">
        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                <span>DataTables</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
            <li>
                <a href="./table-datatable-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./table-datatable-striped-table.html"> Striped </a>
            </li>
            <li>
                <a href="./table-datatable-custom.html"> Custom </a>
            </li>
            <li>
                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
            </li>
        </ul>
    </li>

    <li class="menu">
        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                <span>Forms</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
            <li>
                <a href="./form-bootstrap-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./form-input-group-basic.html"> Input Group </a>
            </li>
            <li>
                <a href="./form-layouts.html"> Layouts </a>
            </li>
            <li>
                <a href="./form-validation.html"> Validation </a>
            </li>
            <li>
                <a href="./form-input-mask.html"> Input Mask </a>
            </li>
            <li>
                <a href="./form-selectBox.html"> SelectBox </a>
            </li>
            <li>
                <a href="./form-tagify.html"> Tagify </a>
            </li>
            <li>
                <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
            </li>
            <li>
                <a href="./form-maxlength.html"> Maxlength </a>
            </li>                          
            <li>
                <a href="./form-checkbox.html"> Checkbox </a>
            </li>
            <li>
                <a href="./form-radio.html"> Radio </a>
            </li>
            <li>
                <a href="./form-switches.html"> Switches </a>
            </li>
            <li>
                <a href="./form-wizard.html"> Wizards </a>
            </li>
            <li>
                <a href="./form-fileupload.html"> File Upload </a>
            </li>
            <li>
                <a href="./form-quill.html"> Quill Editor </a>
            </li>
            <li>
                <a href="./form-markdown.html"> Markdown Editor </a>
            </li>
            <li>
                <a href="./form-date-time-picker.html"> Date Time Picker </a>
            </li>
            <li>
                <a href="./form-slider.html"> Slider </a>
            </li>
            <li>
                <a href="./form-clipboard.html"> Clipboard </a>
            </li>
            <li>
                <a href="./form-autoComplete.html"> Auto Complete </a>
            </li>
        </ul>
    </li>


    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Training Manage Area</span></div>
    </li>

    <li class="menu">
        <a href="./table-basic.html" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span>Tables</span>
            </div>
        </a>
    </li>

    <li class="menu">
        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                <span>DataTables</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
            <li>
                <a href="./table-datatable-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./table-datatable-striped-table.html"> Striped </a>
            </li>
            <li>
                <a href="./table-datatable-custom.html"> Custom </a>
            </li>
            <li>
                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
            </li>
        </ul>
    </li>

    <li class="menu">
        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                <span>Forms</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
            <li>
                <a href="./form-bootstrap-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./form-input-group-basic.html"> Input Group </a>
            </li>
            <li>
                <a href="./form-layouts.html"> Layouts </a>
            </li>
            <li>
                <a href="./form-validation.html"> Validation </a>
            </li>
            <li>
                <a href="./form-input-mask.html"> Input Mask </a>
            </li>
            <li>
                <a href="./form-selectBox.html"> SelectBox </a>
            </li>
            <li>
                <a href="./form-tagify.html"> Tagify </a>
            </li>
            <li>
                <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
            </li>
            <li>
                <a href="./form-maxlength.html"> Maxlength </a>
            </li>                          
            <li>
                <a href="./form-checkbox.html"> Checkbox </a>
            </li>
            <li>
                <a href="./form-radio.html"> Radio </a>
            </li>
            <li>
                <a href="./form-switches.html"> Switches </a>
            </li>
            <li>
                <a href="./form-wizard.html"> Wizards </a>
            </li>
            <li>
                <a href="./form-fileupload.html"> File Upload </a>
            </li>
            <li>
                <a href="./form-quill.html"> Quill Editor </a>
            </li>
            <li>
                <a href="./form-markdown.html"> Markdown Editor </a>
            </li>
            <li>
                <a href="./form-date-time-picker.html"> Date Time Picker </a>
            </li>
            <li>
                <a href="./form-slider.html"> Slider </a>
            </li>
            <li>
                <a href="./form-clipboard.html"> Clipboard </a>
            </li>
            <li>
                <a href="./form-autoComplete.html"> Auto Complete </a>
            </li>
        </ul>
    </li>

    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>ACR Manage</span></div>
    </li>

    <li class="menu">
        <a href="./table-basic.html" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span>Tables</span>
            </div>
        </a>
    </li>

    <li class="menu">
        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                <span>DataTables</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
            <li>
                <a href="./table-datatable-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./table-datatable-striped-table.html"> Striped </a>
            </li>
            <li>
                <a href="./table-datatable-custom.html"> Custom </a>
            </li>
            <li>
                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
            </li>
        </ul>
    </li>

    <li class="menu">
        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                <span>Forms</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
            <li>
                <a href="./form-bootstrap-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./form-input-group-basic.html"> Input Group </a>
            </li>
            <li>
                <a href="./form-layouts.html"> Layouts </a>
            </li>
            <li>
                <a href="./form-validation.html"> Validation </a>
            </li>
            <li>
                <a href="./form-input-mask.html"> Input Mask </a>
            </li>
            <li>
                <a href="./form-selectBox.html"> SelectBox </a>
            </li>
            <li>
                <a href="./form-tagify.html"> Tagify </a>
            </li>
            <li>
                <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
            </li>
            <li>
                <a href="./form-maxlength.html"> Maxlength </a>
            </li>                          
            <li>
                <a href="./form-checkbox.html"> Checkbox </a>
            </li>
            <li>
                <a href="./form-radio.html"> Radio </a>
            </li>
            <li>
                <a href="./form-switches.html"> Switches </a>
            </li>
            <li>
                <a href="./form-wizard.html"> Wizards </a>
            </li>
            <li>
                <a href="./form-fileupload.html"> File Upload </a>
            </li>
            <li>
                <a href="./form-quill.html"> Quill Editor </a>
            </li>
            <li>
                <a href="./form-markdown.html"> Markdown Editor </a>
            </li>
            <li>
                <a href="./form-date-time-picker.html"> Date Time Picker </a>
            </li>
            <li>
                <a href="./form-slider.html"> Slider </a>
            </li>
            <li>
                <a href="./form-clipboard.html"> Clipboard </a>
            </li>
            <li>
                <a href="./form-autoComplete.html"> Auto Complete </a>
            </li>
        </ul>
    </li>


    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Employee</span></div>
    </li>

    <li class="menu">
        <a href="./table-basic.html" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span>Tables</span>
            </div>
        </a>
    </li>

    <li class="menu">
        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                <span>DataTables</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
            <li>
                <a href="./table-datatable-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./table-datatable-striped-table.html"> Striped </a>
            </li>
            <li>
                <a href="./table-datatable-custom.html"> Custom </a>
            </li>
            <li>
                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
            </li>
        </ul>
    </li>

    <li class="menu">
        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                <span>Forms</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
            <li>
                <a href="./form-bootstrap-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./form-input-group-basic.html"> Input Group </a>
            </li>
            <li>
                <a href="./form-layouts.html"> Layouts </a>
            </li>
            <li>
                <a href="./form-validation.html"> Validation </a>
            </li>
            <li>
                <a href="./form-input-mask.html"> Input Mask </a>
            </li>
            <li>
                <a href="./form-selectBox.html"> SelectBox </a>
            </li>
            <li>
                <a href="./form-tagify.html"> Tagify </a>
            </li>
            <li>
                <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
            </li>
            <li>
                <a href="./form-maxlength.html"> Maxlength </a>
            </li>                          
            <li>
                <a href="./form-checkbox.html"> Checkbox </a>
            </li>
            <li>
                <a href="./form-radio.html"> Radio </a>
            </li>
            <li>
                <a href="./form-switches.html"> Switches </a>
            </li>
            <li>
                <a href="./form-wizard.html"> Wizards </a>
            </li>
            <li>
                <a href="./form-fileupload.html"> File Upload </a>
            </li>
            <li>
                <a href="./form-quill.html"> Quill Editor </a>
            </li>
            <li>
                <a href="./form-markdown.html"> Markdown Editor </a>
            </li>
            <li>
                <a href="./form-date-time-picker.html"> Date Time Picker </a>
            </li>
            <li>
                <a href="./form-slider.html"> Slider </a>
            </li>
            <li>
                <a href="./form-clipboard.html"> Clipboard </a>
            </li>
            <li>
                <a href="./form-autoComplete.html"> Auto Complete </a>
            </li>
        </ul>
    </li>


    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Dashboard</span></div>
    </li>

    <li class="menu">
        <a href="./table-basic.html" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span>Tables</span>
            </div>
        </a>
    </li>

    <li class="menu">
        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                <span>DataTables</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
            <li>
                <a href="./table-datatable-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./table-datatable-striped-table.html"> Striped </a>
            </li>
            <li>
                <a href="./table-datatable-custom.html"> Custom </a>
            </li>
            <li>
                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
            </li>
        </ul>
    </li>

    <li class="menu">
        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                <span>Forms</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
            <li>
                <a href="./form-bootstrap-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./form-input-group-basic.html"> Input Group </a>
            </li>
            <li>
                <a href="./form-layouts.html"> Layouts </a>
            </li>
            <li>
                <a href="./form-validation.html"> Validation </a>
            </li>
            <li>
                <a href="./form-input-mask.html"> Input Mask </a>
            </li>
            <li>
                <a href="./form-selectBox.html"> SelectBox </a>
            </li>
            <li>
                <a href="./form-tagify.html"> Tagify </a>
            </li>
            <li>
                <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
            </li>
            <li>
                <a href="./form-maxlength.html"> Maxlength </a>
            </li>                          
            <li>
                <a href="./form-checkbox.html"> Checkbox </a>
            </li>
            <li>
                <a href="./form-radio.html"> Radio </a>
            </li>
            <li>
                <a href="./form-switches.html"> Switches </a>
            </li>
            <li>
                <a href="./form-wizard.html"> Wizards </a>
            </li>
            <li>
                <a href="./form-fileupload.html"> File Upload </a>
            </li>
            <li>
                <a href="./form-quill.html"> Quill Editor </a>
            </li>
            <li>
                <a href="./form-markdown.html"> Markdown Editor </a>
            </li>
            <li>
                <a href="./form-date-time-picker.html"> Date Time Picker </a>
            </li>
            <li>
                <a href="./form-slider.html"> Slider </a>
            </li>
            <li>
                <a href="./form-clipboard.html"> Clipboard </a>
            </li>
            <li>
                <a href="./form-autoComplete.html"> Auto Complete </a>
            </li>
        </ul>
    </li>
    

    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Report</span></div>
    </li>

    <li class="menu">
        <a href="./table-basic.html" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span>Tables</span>
            </div>
        </a>
    </li>

    <li class="menu">
        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                <span>DataTables</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
            <li>
                <a href="./table-datatable-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./table-datatable-striped-table.html"> Striped </a>
            </li>
            <li>
                <a href="./table-datatable-custom.html"> Custom </a>
            </li>
            <li>
                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
            </li>
        </ul>
    </li>

    <li class="menu">
        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                <span>Forms</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
            <li>
                <a href="./form-bootstrap-basic.html"> Basic </a>
            </li>
            <li>
                <a href="./form-input-group-basic.html"> Input Group </a>
            </li>
            <li>
                <a href="./form-layouts.html"> Layouts </a>
            </li>
            <li>
                <a href="./form-validation.html"> Validation </a>
            </li>
            <li>
                <a href="./form-input-mask.html"> Input Mask </a>
            </li>
            <li>
                <a href="./form-selectBox.html"> SelectBox </a>
            </li>
            <li>
                <a href="./form-tagify.html"> Tagify </a>
            </li>
            <li>
                <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
            </li>
            <li>
                <a href="./form-maxlength.html"> Maxlength </a>
            </li>                          
            <li>
                <a href="./form-checkbox.html"> Checkbox </a>
            </li>
            <li>
                <a href="./form-radio.html"> Radio </a>
            </li>
            <li>
                <a href="./form-switches.html"> Switches </a>
            </li>
            <li>
                <a href="./form-wizard.html"> Wizards </a>
            </li>
            <li>
                <a href="./form-fileupload.html"> File Upload </a>
            </li>
            <li>
                <a href="./form-quill.html"> Quill Editor </a>
            </li>
            <li>
                <a href="./form-markdown.html"> Markdown Editor </a>
            </li>
            <li>
                <a href="./form-date-time-picker.html"> Date Time Picker </a>
            </li>
            <li>
                <a href="./form-slider.html"> Slider </a>
            </li>
            <li>
                <a href="./form-clipboard.html"> Clipboard </a>
            </li>
            <li>
                <a href="./form-autoComplete.html"> Auto Complete </a>
            </li>
        </ul>
    </li>


</ul>