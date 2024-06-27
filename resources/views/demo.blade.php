{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/chat.css', 'resources/js/chat.js'])

  </head>
  <style>
    a{
        text-decoration: none;
    }
  </style>
  <body>
    <div class="container-fluid">
        @yield('navbar')

    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center text-white bg-dark">
        <div class="container pt-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <a class="navbar-brand" href="#"><img
                            src="{{ asset('image/fasoInovaW.svg')}}"
                            alt="logo-d-clic" height="100px" width="auto"></a>
                </div>
                <ul class="d-flex list-unstyled mb-0" >
                    <li class="me-4" >
                        <a href="" target="_blank" style="color: white" class="color-light liensFooter"><Strong>Terms & conditions</Strong></a>
                    </li>
                    <li class="me-4">
                        <a href="" target="_blank" style="color: white" class="liensFooter"><Strong>Privacy</Strong></a>
                    </li>
                    <li class="me-4">
                        <a href="" target="_blank" style="color: white" class="liensFooter"><Strong>Cookies</Strong></a>
                    </li>
                </ul>
                <section class="mb-4">
                    <a class="btn btn-link btn-floating btn-lg text-white m-1"
                        href="#" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#"
                        target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                    <a class="btn btn-link btn-floating btn-lg text-white m-1"
                        href="#" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                    <a class="btn btn-link btn-floating btn-lg text-white m-1"
                        href="#" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>

                    <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                </section>
            </div>
            <hr>
            <div class="text-center text-white p-3">
                &copy; 2024 Tous droits réservés |
                <a class="text-white text-decoration-none" href="#"> WebStormers</a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>

  </body>

</html> --}}
@extends('layouts.profil')



@section('navbar')


@endsection

<section>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <a href="#"><img src="{{ asset('image/fasoInova1.png')}}" style="width: 100px;" alt=""></a>
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
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card chat-app">
                                <div id="plist" class="people-list">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search...">
                                    </div>
                                    <ul class="list-unstyled chat-list mt-2 mb-0">
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Vincent Porter</div>
                                                <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>
                                            </div>
                                        </li>
                                        <li class="clearfix active">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Aiden Chavez</div>
                                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Mike Thomas</div>
                                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Christian Kelly</div>
                                                <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Monica Ward</div>
                                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Dean Henry</div>
                                                <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat">
                                    <div class="chat-header clearfix">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                                </a>
                                                <div class="chat-about">
                                                    <h6 class="m-b-0">Aiden Chavez</h6>
                                                    <small>Last seen: 2 hours ago</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 hidden-sm text-right">
                                                <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-history">
                                        <ul class="m-b-0">
                                            <li class="clearfix">
                                                <div class="message-data text-right">
                                                    <span class="message-data-time">10:10 AM, Today</span>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                                </div>
                                                <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="message-data">
                                                    <span class="message-data-time">10:12 AM, Today</span>
                                                </div>
                                                <div class="message my-message">Are we meeting today?</div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="message-data">
                                                    <span class="message-data-time">10:15 AM, Today</span>
                                                </div>
                                                <div class="message my-message">Project has been already finished and I have results to show you.</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-message clearfix">
                                        <div class="input-group mb-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-send"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter text here...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

