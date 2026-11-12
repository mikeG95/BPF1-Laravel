<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="{{ route('dashboard') }}">
            <img class="navbar-brand-dark" src="{{ asset('assets-admin/img/brand/light.svg') }}" alt="Volt logo" /> 
            <img class="navbar-brand-light" src="{{ asset('assets-admin/img/brand/dark.svg') }}" alt="Volt logo" />        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>


    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        <img src="{{ asset('assets-admin/img/team/profile-picture-3.jpg') }}" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                    </div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, Jane</h2>
                        <a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            Sign Out
                        </a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="{{ asset('assets-admin/img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
                        </span>
                        <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
                    </a>
                </li>
                

                {{-- Menu Dashboard --}}
                <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 8V4a6 6 0 016 6h-6z"/>
                            </svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                {{-- Menu Pelanggan --}}
                <li class="nav-item {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                    <a href="{{ route('pelanggan.index') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.742-.479 3 3 0 00-4.682-2.72m.94 3.198v-.003c0-1.113-.285-2.16-.786-3.07M18 18.72v.003c0 .552-.447.999-.999.999H6.999A.999.999 0 016 18.723v-.003a6 6 0 0112 0ZM15 6.375a3 3 0 11-6 0 3 3 0 016 0Zm6 2.25a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0ZM6 8.625a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0Z"/>
                            </svg>
                        </span>
                        <span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>

                {{-- Menu User --}}
                <li class="nav-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372A9.337 9.337 0 0021 18.813a5.25 5.25 0 00-9.797-2.236M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0Zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0Z"/>
                            </svg>
                        </span>
                        <span class="sidebar-text">User</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
