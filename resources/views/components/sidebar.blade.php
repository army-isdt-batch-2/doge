<div style="height:88vh;" class="d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">WELCOME</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="/departments" class="text-white nav-link @if($active == 'departments') active @endif">
                <i class="fa fa-bank"></i>
                Departments
            </a>
        </li>
        <li>
            <a href="/employees" class="nav-link @if($active == 'employees') active @endif text-white">
                <i class="fa fa-users"></i>
                Employees
            </a>
        </li>
        <li>
            <a href="/leaves" class="nav-link @if($active == 'leaves') active @endif text-white">
                <i class="fa fa-folder-open"></i>
                Leaves
            </a>
        </li>
        <li>
            <a href="/loans" class="nav-link @if($active == 'loans') active @endif text-white">
                <i class="fa fa-paw"></i>
                Loan
            </a>
        </li>
        <li>
            <a href="/mandatorydeductions"
                class="nav-link @if($active == 'mandatorydeductions') active @endif text-white">
                <i class="fa fa-times"></i>
                Mandatory Deductions
            </a>
        </li>
        <li>
            <a href="/payslips" class="nav-link @if($active == 'payslips') active @endif text-white">
                <i class="fa fa-usd"></i>
                Payslips
            </a>
        </li>
        <li>
            <a href="/timekeeping" class="nav-link @if($active == 'timekeeping') active @endif text-white">
                <i class="fa fa-clock-o"></i>
                Timekeeping
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>