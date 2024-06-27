@extends('layouts.admin')
@section('content')
<body id="body-pd">
    <header class="header bg-purple-50" id="header">
       <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
       <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
       <nav class="nav">
          <div>
             <a href="{{ route('innovation') }}" class="nav_logo">
                 <i class='bx bx-layer nav_logo-icon'></i>
                 <span class="nav_logo-name">Fasoinnov</span>
                </a>
             <div class="nav_list">
                <a href="{{ route('innovation') }}" class="nav_link active">
                    <i class='bx bx-brain nav_icon'></i>
                     <span class="nav_name">Innovations</span>
                </a>
                <a href="{{ route('annonce') }}" class="nav_link">
                    <i class='bx bx-news nav_icon'></i>
                    <span class="nav_name">Annonces</span>
                </a>
                <a href="{{ route('chat') }}" class="nav_link">
                    <i class='bx bx-message-square-detail nav_icon'></i>
                    <span class="nav_name">Discussion</span>
                </a>
                {{-- <a href="#" class="nav_link">
                    <i class='bx bx-bookmark nav_icon'></i>
                    <span class="nav_name">Bookmark</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-folder nav_icon'></i>
                    <span class="nav_name">Files</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                    <span class="nav_name">Stats</span>
                </a>  --}}
            </div>
          </div>
          <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
       </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100">
        @yield('chat')
    </div>
    <!--Container Main end-->
@endsection
























{{-- @if (Route::has('login'))
<nav class="-mx-3 flex flex-1 justify-end">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Register
            </a>
        @endif
    @endauth
</nav>
@endif --}}
