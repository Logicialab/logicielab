<div class="navbar-collapse collapse" id="navbarCollapse">
    <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

        <li class="nav-item">
            <a class="nav-link{{ Request::is('/') ? ' active' : '' }}" href="/">الرئيسية</a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Request::is('about') ? ' active' : '' }}" href="/about">من نحن</a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Request::is('services') ? ' active' : '' }}" href="/services">خدماتنا</a>
            
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link{{ Request::is('ourteam') ? ' active' : '' }}" href="/ourteam">فريقنا</a>
        </li> --}}
        
        <li class="nav-item">
            <a class="nav-link{{ Request::is('projects') ? ' active' : '' }}" href="/projects">أعمالنا</a>
        </li>
     


        <!-- Nav item -->
        {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Pages</a>
            <ul class="dropdown-menu">
                <!-- Dropdown submenu -->				
                <li> <a class="dropdown-item" href="/about">About</a></li>
                <li> <a class="dropdown-item" href="/pricing">Pricing</a></li>
                <li> <a class="dropdown-item" href="/faq">FAQ</a></li>
                <li> <a class="dropdown-item" href="/conditions">Terms & Conditions</a></li>

            </ul>
        </li> --}}

        

        
        <!-- Nav item -->
        <li class="nav-item"> <a class="nav-link{{ Request::is('contact') ? ' active' : '' }}"" href="/contact">تواصل معنا </a> </li>
    </ul>
</div>