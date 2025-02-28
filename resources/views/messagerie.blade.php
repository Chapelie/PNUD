@extends('layouts.home')


 
@section('navbar')


@endsection

<section>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    
            *,
            ::after,
            ::before {
                box-sizing: border-box;
            }
    
            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
    
                background-repeat: no-repeat;
                background-position: center bottom;
                background-size: cover;
            }
    
            h3 {
                font-size: 1.2375rem;
            
            }
    
            a {
                cursor: pointer;
                text-decoration: none;
                font-family: 'Poppins', sans-serif;
            }
    
            li {
                list-style: none;
            }
    
            /* Layout skeleton */
    
            .wrapper {
                align-items: stretch;
                display: flex;
                width: 100%;
            }
    
            #sidebar {
                max-width: 264px;
                min-width: 264px;
                transition: all 0.35s ease-in-out;
                box-shadow: 0 0 35px 0 rgba(49, 57, 66, 0.5);
                z-index: 1111;
            }
    
            /* Sidebar collapse */
    
            #sidebar.collapsed {
                margin-left: -264px;
            }
    
            .main {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                width: 100%;
                overflow: hidden;
                transition: all 0.35s ease-in-out;
            }
    
            .sidebar-logo {
                padding: 1.15rem 1.5rem;
            }
    
            .sidebar-logo a {
    
                font-size: 1.25rem;
                font-weight: 600;
            }
    
            .sidebar-nav {
                padding: 0;
            }
    
            .sidebar-header {
            
                font-size: .75rem;
                padding: 1.5rem 1.5rem .375rem;
            }
    
            a.sidebar-link {
                padding: .625rem 1.625rem;
                
                position: relative;
                display: block;
                font-size: 1rem;
            }
    
            .sidebar-link[data-bs-toggle="collapse"]::after {
                border: solid;
                border-width: 0 .075rem .075rem 0;
                content: "";
                display: inline-block;
                padding: 2px;
                position: absolute;
                right: 1.5rem;
                top: 1.4rem;
                transform: rotate(-135deg);
                transition: all .2s ease-out;
            }
    
            .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
                transform: rotate(45deg);
                transition: all .2s ease-out;
            }
    
            .content {
                flex: 1;
                max-width: 100vw;
                width: 100vw;
            }
    
            /* Responsive */
    
            @media (min-width:768px) {
                .content {
                    width: auto;
                }
            }
    
    </style>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">CodzSword</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        <Strong>Generale</Strong>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link bg-primary" style="color: white">
                            <i class="fa-regular fa-pen-to-square pe-2"></i>
                           New message
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-regular fa-message pe-2"></i>
                            Messages
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            <i class="fa-regular fa-file-lines pe-2"></i>
                            Forums
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Analytics</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Ecommerce</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Crypto</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard"
                            aria-expanded="false" aria-controls="dashboard">
                            <i class="fa-solid fa-sliders pe-2"></i>
                            Friends
                        </a>
                        <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Dashboard Analytics</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Dashboard Ecommerce</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#auth"
                            aria-expanded="false" aria-controls="auth">
                            <i class="fa-regular fa-user pe-2"></i>
                            Profile
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Register</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-header">
                        <Strong>Profile</Strong>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi"
                            aria-expanded="false" aria-controls="multi">
                            <i class="fa-solid fa-share-nodes pe-2"></i>
                            Multi Level
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                    Two Links
                                </a>
                                <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Link 1</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Link 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" >
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3>Bootstrap Sidebar Tutorial</h3>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>
<script>
    const toggler = document.querySelector(".btn");
    toggler.addEventListener("click",function(){
        document.querySelector("#sidebar").classList.toggle("collapsed");
    });
</script>

