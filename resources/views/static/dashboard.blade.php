<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - JWSM TV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-base-200">
    <div class="drawer lg:drawer-open">
        <input id="drawer-toggle" type="checkbox" class="drawer-toggle" />

        <!-- Sidebar -->
        <div class="drawer-side z-20 lg:ps-4 lg:py-4">
            <label for="drawer-toggle" class="drawer-overlay"></label>
            <aside id="sidebar"
                class="bg-base-100 w-64 sm:w-72 md:w-80 h-full border border-base-300 sidebar-expanded transition-all duration-300 ease-in-out flex flex-col lg:rounded-xl">
                <!-- Sidebar header with logo -->
                <div class="p-3 md:p-4 flex items-center justify-start h-14 md:h-16">
                    <h1 class="text-lg md:text-xl font-bold sidebar-title">JWSM TV</h1>
                    <h1 class="text-lg md:text-xl font-bold hidden sidebar-collapsed-title text-center">JT</h1>
                </div>

                <!-- User info section -->
                <div class="px-4 py-4 mb-2 mx-3 border border-base-300 rounded-lg user-info-container">
                    <div class="dropdown dropdown-end w-full">
                        <div tabindex="0" class="flex items-center justify-between cursor-pointer">
                            <div class="flex items-center">
                                <div class="avatar avatar-placeholder">
                                    <div class="bg-neutral text-neutral-content w-10 rounded-full">
                                        <span class="font-bold">JD</span>
                                    </div>
                                </div>
                                <div class="ml-3 menu-item-text">
                                    <p class="font-medium text-sm">John Doe</p>
                                    <p class="text-xs text-base-content/70">Administrator</p>
                                </div>
                            </div>
                            <button class="btn btn-ghost btn-sm px-2 rounded-full menu-item-text">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                        <ul tabindex="0"
                            class="dropdown-content z-[100] menu p-2 shadow bg-base-100 rounded-box w-52 mb-2">
                            <li>
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar menu -->
                <ul class="menu p-3 w-full  text-base-content text-sm md:text-base flex-1">
                    <li class="menu-title">
                        <span>Main Menu</span>
                    </li>
                    <li><a class="active">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="menu-item-text">Dashboard</span>
                        </a></li>
                    <li><a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="menu-item-text">Videos</span>
                        </a></li>
                    <li><a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            <span class="menu-item-text">Categories</span>
                        </a></li>

                    <li class="menu-title mt-4">
                        <span>Content Management</span>
                    </li>
                    <li><a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="menu-item-text">Pages</span>
                        </a></li>
                    <li><a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                            <span class="menu-item-text">Comments</span>
                        </a></li>

                    <li class="menu-title mt-4">
                        <span>Settings</span>
                    </li>
                    <li>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="menu-item-text">General Settings</span>
                        </a>
                    </li>
                    <li>
                        <details open>
                            <summary>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                <span class="menu-item-text">Manajemen Pengguna</span>
                            </summary>
                            <ul class="text-gray-500 text-sm">
                                <li>
                                    <a># Data Role Pengguna</a>
                                </li>
                                <li>
                                    <a># Daftar Pengguna</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>

                <!-- Collapse button at the very bottom (desktop only) -->
                <div class="mt-auto hidden lg:block">
                    <button id="sidebar-toggle"
                        class="w-full flex items-center px-6 py-4 text-sm transition-all duration-300 rounded-b-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-5 w-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>
                        <span class="menu-item-text">Collapse</span>
                    </button>
                </div>
            </aside>
        </div>

        <!-- Page content -->
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div class="px-4 py-2 lg:px-4 lg:pt-4">
                <div class="navbar bg-base-100 border border-base-300 rounded-xl">
                    <div class="flex-none lg:hidden">
                        <label for="drawer-toggle" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                            </svg>
                        </label>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center">
                            <span class="text-xl font-bold block lg:hidden">JWSM TV Admin</span>
                        </div>
                        <!-- Kolom pencarian - hanya tampil di desktop -->
                        <div class="hidden lg:block lg:ml-1 lg:w-64">
                            <div class="form-control w-full">
                                <div class="input-group flex items-stretch">
                                    <label class="input backdrop-blur-md bg-white/10 border border-white/20 shadow">
                                        <svg class="h-[2em] opacity-50" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5"
                                                fill="none" stroke="currentColor">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <path d="m21 21-4.3-4.3"></path>
                                            </g>
                                        </svg>
                                        <input type="search" class="grow" placeholder="Search" />
                                        <kbd class="kbd kbd-sm">⌘</kbd>
                                        <kbd class="kbd kbd-sm">K</kbd>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none flex items-center gap-2">
                        <!-- Dark Mode Toggle -->
                        <label
                            class="swap swap-rotate btn backdrop-blur-md bg-white/10 border border-white/20 shadow btn-circle h-10 w-10">
                            <!-- this hidden checkbox controls the state -->
                            <input type="checkbox" class="theme-controller" value="dark" />

                            <!-- sun icon -->
                            <svg class="swap-off fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                            </svg>

                            <!-- moon icon -->
                            <svg class="swap-on fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                            </svg>
                        </label>

                        <!-- Dropdown notifikasi - hanya tampil di desktop  -->
                        <div class="dropdown dropdown-end hidden lg:block">
                            <label tabindex="0"
                                class="btn backdrop-blur-md bg-white/10 border border-white/20 shadow btn-circle h-10 w-10 flex items-center justify-center">
                                <div class="indicator">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                    <span class="badge badge-xs badge-primary indicator-item">3</span>
                                </div>
                            </label>
                            <div tabindex="0"
                                class="mt-3 z-[1] card card-compact dropdown-content w-64 bg-base-100 shadow">
                                <div class="card-body">
                                    <div class="font-bold text-lg mb-2">Notifikasi (3)</div>
                                    <div class="space-y-2">
                                        <div class="flex items-start gap-2 pb-2 border-b">
                                            <div class="bg-primary/10 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Video baru ditambahkan</p>
                                                <p class="text-xs text-gray-500">5 menit yang lalu</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-2 pb-2 border-b">
                                            <div class="bg-success/10 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-success"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Pembaruan sistem berhasil</p>
                                                <p class="text-xs text-gray-500">1 jam yang lalu</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-2">
                                            <div class="bg-warning/10 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-warning"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium">Penyimpanan hampir penuh</p>
                                                <p class="text-xs text-gray-500">1 hari yang lalu</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-actions mt-2">
                                        <button class="btn btn-primary btn-sm btn-block">Lihat semua</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="avatar avatar-placeholder">
                            <div
                                class="w-10 h-10 rounded-full flex items-center justify-center 
                                        backdrop-blur-md bg-white/10 border border-white/20 shadow">
                                <span class="font-bold">JD</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <main class="flex-1 p-4 md:pt-0 md:ps-4 md:pe-4 md:pb-4 pb-20 lg:pb-4">
                <fieldset class="fieldset bg-base-200 border-base-300 rounded-box border pt-2 pb-4 ps-4 pe-4">
                    <legend class="fieldset-legend gap-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                        </svg>
                        <span class="text-lg font-semibold">Dashboard</span>
                    </legend>
                    @yield('content')

                    <!-- Dummy content for preview -->
                    <div class="grid gap-4 md:gap-6">

                        {{-- Card --}}
                        <div class="stats bg-base-100 flex flex-col md:flex-row border border-base-300 rounded-xl">
                            <div class="stat">
                                <div class="stat-figure text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="inline-block w-6 h-6 md:w-8 md:h-8 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="stat-title">Total Videos</div>
                                <div class="stat-value text-primary text-2xl md:text-3xl">256</div>
                                <div class="stat-desc">21% more than last month</div>
                            </div>

                            <div class="stat">
                                <div class="stat-figure text-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="inline-block w-6 h-6 md:w-8 md:h-8 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div class="stat-title">Page Views</div>
                                <div class="stat-value text-secondary text-2xl md:text-3xl">2.6M</div>
                                <div class="stat-desc">14% more than last month</div>
                            </div>

                            <div class="stat">
                                <div class="stat-figure text-secondary">
                                    <div class="avatar">
                                        <div class="w-10 h-10 md:w-16 md:h-16 rounded-full">
                                            <div
                                                class="w-10 h-10 md:w-16 md:h-16 rounded-full bg-accent text-accent-content grid place-items-center">
                                                <span class="text-lg md:text-xl">U</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="stat-title">New Users</div>
                                <div class="stat-value text-2xl md:text-3xl">4,200</div>
                                <div class="stat-desc">↗︎ 8% increase</div>
                            </div>
                        </div>

                        {{-- Table --}}
                        <div class="card bg-base-100 border border-base-300 rounded-xl">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="flex items-center gap-1 text-sm font-bold">
                                        <svg class="size-4" fill="currentColor" width="12" height="12"
                                            viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M216,148H172V108h44a12,12,0,0,0,0-24H172V40a12,12,0,0,0-24,0V84H108V40a12,12,0,0,0-24,0V84H40a12,12,0,0,0,0,24H84v40H40a12,12,0,0,0,0,24H84v44a12,12,0,0,0,24,0V172h40v44a12,12,0,0,0,24,0V172h44a12,12,0,0,0,0-24Zm-108,0V108h40v40Z">
                                            </path>
                                        </svg>
                                        <h4 class="text-lg font-semibold">Recent Activity</h4>
                                    </div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="table table-zebra table-compact text-sm md:text-base">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th class="hidden sm:table-cell">Type</th>
                                                <th class="hidden md:table-cell">Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Video Pengajian Minggu</td>
                                                <td class="hidden sm:table-cell">Video</td>
                                                <td class="hidden md:table-cell">2023-10-15</td>
                                                <td>
                                                    <div class="badge badge-success badge-sm md:badge-md">Published
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ceramah Ustadz Ahmad</td>
                                                <td class="hidden sm:table-cell">Video</td>
                                                <td class="hidden md:table-cell">2023-10-14</td>
                                                <td>
                                                    <div class="badge badge-success badge-sm md:badge-md">Published
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kajian Tafsir Al-Quran</td>
                                                <td class="hidden sm:table-cell">Video</td>
                                                <td class="hidden md:table-cell">2023-10-12</td>
                                                <td>
                                                    <div class="badge badge-warning badge-sm md:badge-md">Draft</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tanya Jawab Seputar Ibadah</td>
                                                <td class="hidden sm:table-cell">Video</td>
                                                <td class="hidden md:table-cell">2023-10-10</td>
                                                <td>
                                                    <div class="badge badge-error badge-sm md:badge-md">Unpublished
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </main>
        </div>

        {{-- Dock --}}
        <div class="dock dock-sm lg:hidden rounded-t-lg shadow-lg">
            <button>
                <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g fill="currentColor" stroke-linejoin="miter" stroke-linecap="butt">
                        <polyline points="1 11 12 2 23 11" fill="none" stroke="currentColor"
                            stroke-miterlimit="10" stroke-width="2"></polyline>
                        <path d="m5,13v7c0,1.105.895,2,2,2h10c1.105,0,2-.895,2-2v-7" fill="none"
                            stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                        </path>
                        <line x1="12" y1="22" x2="12" y2="18" fill="none"
                            stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2">
                        </line>
                    </g>
                </svg>
                <span class="dock-label">Home</span>
            </button>

            <button class="dock-active">
                <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g fill="currentColor" stroke-linejoin="miter" stroke-linecap="butt">
                        <polyline points="3 14 9 14 9 17 15 17 15 14 21 14" fill="none" stroke="currentColor"
                            stroke-miterlimit="10" stroke-width="2"></polyline>
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"
                            fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"
                            stroke-width="2"></rect>
                    </g>
                </svg>
                <span class="dock-label">Inbox</span>
            </button>

            <button>
                <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g fill="currentColor" stroke-linejoin="miter" stroke-linecap="butt">
                        <circle cx="12" cy="12" r="3" fill="none" stroke="currentColor"
                            stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></circle>
                        <path
                            d="m22,13.25v-2.5l-2.318-.966c-.167-.581-.395-1.135-.682-1.654l.954-2.318-1.768-1.768-2.318.954c-.518-.287-1.073-.515-1.654-.682l-.966-2.318h-2.5l-.966,2.318c-.581.167-1.135.395-1.654.682l-2.318-.954-1.768,1.768.954,2.318c-.287.518-.515,1.073-.682,1.654l-2.318.966v2.5l2.318.966c.167.581.395,1.135.682,1.654l-.954,2.318,1.768,1.768,2.318-.954c.518.287,1.073.515,1.654.682l.966,2.318h2.5l.966-2.318c.581-.167,1.135-.395,1.654-.682l2.318.954,1.768-1.768-.954-2.318c.287-.518.515-1.073.682-1.654l2.318-.966Z"
                            fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"
                            stroke-width="2"></path>
                    </g>
                </svg>
                <span class="dock-label">Settings</span>
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.getElementById('sidebar');
            const toggleIcon = sidebarToggle ? sidebarToggle.querySelector('svg path') : null;
            const toggleText = sidebarToggle ? sidebarToggle.querySelector('.menu-item-text') : null;

            if (sidebarToggle && sidebar && toggleIcon) {
                sidebarToggle.addEventListener('click', function() {
                    // Toggle between collapsed and expanded width
                    if (sidebar.classList.contains('w-64') ||
                        sidebar.classList.contains('sm:w-72') ||
                        sidebar.classList.contains('md:w-80')) {

                        // Collapse sidebar
                        sidebar.classList.remove('w-64', 'sm:w-72', 'md:w-80');
                        sidebar.classList.add('w-20');

                        // Hide text elements (but not in dropdown menus)
                        document.querySelectorAll('.menu-item-text, .menu-title, .sidebar-title').forEach(
                            el => {
                                // Don't hide text inside details/dropdown menus
                                if (!el.closest('details')) {
                                    el.classList.add('hidden');
                                }
                            });

                        // Hide dropdown menus completely when sidebar is collapsed
                        document.querySelectorAll('.menu details').forEach(details => {
                            details.classList.add('hidden');
                        });

                        // Show collapsed title (JT)
                        document.querySelector('.sidebar-collapsed-title').classList.remove('hidden');

                        // Enlarge icons
                        document.querySelectorAll('.menu svg').forEach(icon => {
                            icon.classList.add('w-7', 'h-7');
                        });

                        // Center menu items and add vertical padding
                        document.querySelectorAll('.menu a, .menu button').forEach(item => {
                            item.classList.add('justify-center', 'py-3');
                        });

                        // Center user avatar in collapsed mode and remove border
                        const userInfoContainer = document.querySelector('.user-info-container');
                        if (userInfoContainer) {
                            userInfoContainer.classList.add('flex', 'justify-center');
                            userInfoContainer.classList.remove('border', 'rounded-lg');
                            userInfoContainer.querySelector('.flex.items-center.justify-between').classList
                                .add('justify-center');
                            userInfoContainer.querySelector('.flex.items-center.justify-between').classList
                                .remove('justify-between');

                            // Hide dropdown menu completely in sidebar when collapsed
                            const dropdownButton = userInfoContainer.querySelector('button');
                            if (dropdownButton) {
                                dropdownButton.classList.add('hidden');
                            }

                            // Hide dropdown content
                            const dropdownContent = userInfoContainer.querySelector('.dropdown-content');
                            if (dropdownContent) {
                                dropdownContent.classList.add('hidden');
                            }

                            // Disable pointer events on the entire user info container
                            userInfoContainer.classList.add('pointer-events-none');

                            // Remove cursor pointer style from all clickable elements
                            const clickableElements = userInfoContainer.querySelectorAll('.cursor-pointer');
                            clickableElements.forEach(el => {
                                el.classList.remove('cursor-pointer');
                            });
                        }

                        // Change toggle icon to expand icon and center it
                        toggleIcon.setAttribute('d',
                            'M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9'
                        );

                        // Ensure SVG icon is centered within its container
                        const svgElement = toggleIcon.closest('svg');
                        if (svgElement) {
                            svgElement.setAttribute('class', 'h-5 w-5 mx-auto');
                        }

                        // Hide toggle text but keep button visible
                        if (toggleText) {
                            toggleText.classList.add('hidden');
                        }

                        // Center the collapsed title (JT)
                        const collapsedTitle = document.querySelector('.sidebar-collapsed-title');
                        if (collapsedTitle) {
                            collapsedTitle.classList.add('block', 'text-center', 'w-full');
                            collapsedTitle.parentElement.classList.add('justify-center');
                            collapsedTitle.parentElement.classList.remove('justify-start');
                        }

                        // Center the toggle button icon
                        sidebarToggle.classList.add('justify-center');
                        sidebarToggle.classList.remove('px-4');
                        sidebarToggle.classList.add('px-0');
                    } else {
                        // Expand sidebar
                        sidebar.classList.remove('w-20');
                        sidebar.classList.add('w-64', 'sm:w-72', 'md:w-80');

                        // Show text elements
                        document.querySelectorAll('.menu-item-text, .menu-title, .sidebar-title').forEach(
                            el => {
                                el.classList.remove('hidden');
                            });

                        // Show dropdown menus when sidebar is expanded
                        document.querySelectorAll('.menu details').forEach(details => {
                            details.classList.remove('hidden');
                        });

                        // Hide collapsed title (JT)
                        document.querySelector('.sidebar-collapsed-title').classList.add('hidden');

                        // Restore icon size
                        document.querySelectorAll('.menu svg').forEach(icon => {
                            icon.classList.remove('w-7', 'h-7');
                        });

                        // Restore user info container in expanded mode
                        const userInfoContainer = document.querySelector('.user-info-container');
                        if (userInfoContainer) {
                            userInfoContainer.classList.remove('flex', 'justify-center');
                            userInfoContainer.classList.add('border', 'rounded-lg');
                            userInfoContainer.querySelector('.flex.items-center.justify-center').classList
                                .add('justify-between');
                            userInfoContainer.querySelector('.flex.items-center.justify-center').classList
                                .remove('justify-center');

                            // Show dropdown button again
                            const dropdownButton = userInfoContainer.querySelector('button');
                            if (dropdownButton) {
                                dropdownButton.classList.remove('hidden');
                            }

                            // Show dropdown content
                            const dropdownContent = userInfoContainer.querySelector('.dropdown-content');
                            if (dropdownContent) {
                                dropdownContent.classList.remove('hidden');
                            }

                            // Re-enable pointer events on the user info container
                            userInfoContainer.classList.remove('pointer-events-none');

                            // Restore cursor pointer style to clickable elements
                            const clickableDiv = userInfoContainer.querySelector('div[tabindex="0"]');
                            if (clickableDiv) {
                                clickableDiv.classList.add('cursor-pointer');
                            }

                            // Restore cursor pointer to button
                            if (dropdownButton) {
                                dropdownButton.classList.add('cursor-pointer');
                            }
                        }

                        // Restore menu item alignment and remove vertical padding
                        document.querySelectorAll('.menu a, .menu button').forEach(item => {
                            item.classList.remove('justify-center', 'py-3');
                        });

                        // Change toggle icon back to collapse icon
                        toggleIcon.setAttribute('d',
                            'M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15'
                        );

                        // Reset SVG icon styling
                        const svgElement = toggleIcon.closest('svg');
                        if (svgElement) {
                            svgElement.setAttribute('class', 'h-5 w-5 mr-2');
                        }

                        // Show toggle text
                        if (toggleText) {
                            toggleText.classList.remove('hidden');
                        }

                        // Restore sidebar title alignment
                        const sidebarTitle = document.querySelector('.sidebar-title');
                        const collapsedTitle = document.querySelector('.sidebar-collapsed-title');
                        if (sidebarTitle && collapsedTitle) {
                            // Hide collapsed title
                            collapsedTitle.classList.add('hidden');
                            collapsedTitle.classList.remove('block');

                            // Show main title and restore parent alignment
                            sidebarTitle.classList.remove('hidden');
                            sidebarTitle.parentElement.classList.remove('justify-center');
                            sidebarTitle.parentElement.classList.add('justify-start');
                        }

                        // Restore toggle button padding
                        sidebarToggle.classList.remove('justify-center');
                        sidebarToggle.classList.add('px-4');
                        sidebarToggle.classList.remove('px-0');
                    }
                });
            }
        });

        // Dark Mode Toggle Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const themeController = document.querySelector('.theme-controller');
            const htmlElement = document.documentElement;

            // Check for saved theme preference or default to 'light'
            const savedTheme = localStorage.getItem('theme') || 'light';

            // Apply saved theme
            htmlElement.setAttribute('data-theme', savedTheme);

            // Set checkbox state based on saved theme
            if (themeController) {
                themeController.checked = savedTheme === 'dark';
            }

            // Listen for theme toggle
            if (themeController) {
                themeController.addEventListener('change', function() {
                    const newTheme = this.checked ? 'dark' : 'light';

                    // Apply theme
                    htmlElement.setAttribute('data-theme', newTheme);

                    // Save preference
                    localStorage.setItem('theme', newTheme);

                    // Optional: Add smooth transition
                    htmlElement.style.transition = 'background-color 0.3s ease, color 0.3s ease';
                    setTimeout(() => {
                        htmlElement.style.transition = '';
                    }, 300);
                });
            }
        });
    </script>
</body>

</html>
