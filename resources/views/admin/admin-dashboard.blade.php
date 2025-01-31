<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('pictures/Bizmatech-logo-removebg-preview.png')}}">
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    {{-- Style Css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('head')
</head>
<body>

    <div class="home-div h-100 w-100">
        {{-- SideBar Design --}}
        <div class="sidebar">
            <div class="text">
                <h1>BMT Marketing</h1>
                <p>Systematic Buddy 2.0</p>
            </div>

            <a href="{{ route('bulletin')}}"
            class="{{ Request::routeIs('bulletin') ? 'active' : '' }}">
                <div class="side-bar input-group mb-0 mt-5 d-flex align-items-center justify-content-center border rounded">
                    <i class="fa-solid fa-list-ul me-2 icon" style="font-size: 14px;"></i>
                    <span class="navbar-text" style="font-size: 12px;">Bulletin & To Do</span>
                </div>
            </a>
   
            <a href="{{ route('postTemplate') }}"
            class="{{ Request::routeIs('postTemplate') ? 'active' : '' }}">
                <div class="side-bar input-group mt-1 d-flex align-items-center justify-content-center border rounded">
                    <i class="fa-solid fa-signs-post me-2 icon" style="font-size: 14px;"></i>
                    <span class="navbar-text" style="font-size: 12px;">Post Templates</span>
                </div>
            </a>
       
            <a href="{{route('replyTemplate')}}"
            class="{{ Request::routeIs('replyTemplate') ? 'active' : '' }}">
                <div class="side-bar input-group mt-1 d-flex align-items-center justify-content-center border rounded">
                    <i class="fa-solid fa-reply me-2 icon" style="font-size: 14px;"></i>
                    <span class="navbar-text" style="font-size: 12px;">Reply Templates</span>
                </div>
            </a>
            <hr>
            <a href="{{route('priceList')}}"
            class="{{ Request::routeIs('priceList') ? 'active' : '' }}">
                <div class="side-bar input-group mt-3 d-flex align-items-center justify-content-center border rounded">
                    <i class="fa-solid fa-money-check-dollar me-2 icon" style="font-size: 14px;"></i>
                    <span class="navbar-text" style="font-size: 12px;">Price List</span>
                </div>
            </a>

            <a href="{{route('quotation')}}"
            class="{{ Request::routeIs('quotation') ? 'active' : '' }}">
                <div class="side-bar input-group mt-1 d-flex align-items-center justify-content-center border rounded">
                    <i class="fa-solid fa-quote-left me-2 icon" style="font-size: 14px;"></i>
                    <span class="navbar-text" style="font-size: 12px;">Quotation</span>
                </div>
            </a>

            <a href="{{route('prospects')}}"
            class="{{ Request::routeIs('prospects') ? 'active' : '' }}">
                <div class="side-bar input-group mt-1 d-flex align-items-center justify-content-center border rounded">
                    <i class="fa-solid fa-magnifying-glass-dollar me-2 icon" style="font-size: 14px;"></i>
                    <span class="navbar-text" style="font-size: 12px;">Prospects</span>
                </div>
            </a>
            <hr>    
            <a href="{{route('insight')}}"
            class="{{ Request::routeIs('insight') ? 'active' : '' }}">
                <div class="side-bar input-group mt-2 d-flex align-items-center justify-content-center border rounded">
                    <i class="fa-solid fa-lightbulb me-2 icon" style="font-size: 14px;"></i>
                    <span class="navbar-text" style="font-size: 12px;">Insight</span>
                </div>
            </a>

            <a href="{{route('guides')}}"
            class="{{ Request::routeIs('guides') ? 'active' : '' }}">
                <div class="side-bar input-group mt-2 d-flex align-items-center justify-content-center border rounded">
                    <i class="fa-solid fa-book me-2 icon" style="font-size: 14px;"></i>
                    <span class="navbar-text" style="font-size: 12px;">Guides</span>
                </div>
            </a>
            
        </div>

        {{-- Header --}}
        <div class="header outline-none p-2 w-100" style="background-color:#F3F5FD;">
            <div class="h-100 w-100 d-flex align-items-center justify-content-between rounded shadow p-2" style="background-color:#ffff;">
                <div class="d-flex align-items-center justify-content-between gap-3">
                    {{-- Search --}}
                    <div class="input-group border rounded" style="height: 2rem; width: 230px;">
                        <span class="input-group-text bg-transparent border-0" id="basic-addon1">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon1" style="font-size: 0.8rem;">
                    </div>
                    
                        {{-- Buttons --}}
                    <div class="d-flex align-items-center justify-content-between" style="width:330px;">

                        {{-- Add --}}
                        <div class="addButton">
                            <button type="button" class="btn btn-success saveButton" data-bs-toggle="modal" data-bs-target="#exampleModal"
                             style="font-size:0.6rem; width:100px; border-radius:3px;">
                                <i class="fa-solid fa-plus" style="margin-right: 5px;"></i> Add
                            </button>                            
                        </div>
                        
                        {{-- Edit --}}
                        <div class="editButton">
                            <button type="button" class="btn btn-primary" style="font-size:0.6rem; width:100px; border-radius:3px">
                                <i class="fa-regular fa-pen-to-square" style="margin-right: 5px;"></i>Edit
                            </button>
                        </div>

                        {{-- Delete --}}
                        <div class="deleteButton">
                            <button type="button" class="btn btn-danger" style="font-size:0.6rem; width:100px; border-radius:3px">
                                <i class="fa-solid fa-trash" style="margin-right: 5px;"></i>Delete
                            </button>
                        </div>
                    </div>
                </div>
                
                {{-- Modal Add --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <small class="text-muted">Add Item</small>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size:0.6rem;"></button>
                            </div> 
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="itemName" class="form-label" style="font-size:0.7rem;">Item Name</label>
                                        <input type="text" class="form-control" id="itemName" placeholder="Enter item name" style="height:30px;">
                                    </div>
                                    <div class="mb-3">
                                        <label for="itemDescription" class="form-label" style="font-size:0.7rem;">Description</label>
                                        <textarea class="form-control" id="itemDescription" rows="3" placeholder="Enter description"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                 
                {{-- Dropdown --}}
                <div class="dropdown h-100 d-flex align-items-center justify-content-center" style="width: 50px">
                    <button type="button" class="d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false" style="all:unset; cursor:pointer;">
                        <i class="fa-regular fa-user"></i>
                        <i class="fa-solid fa-sort-down" style="font-size:0.8rem; margin-left:5px;"></i>
                      </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" :href="route('profile.edit')" style="font-size:0.8rem;">{{ __('Profile') }}</a></li>
                        <li><a class="dropdown-item" href="#" style="font-size:0.8rem;">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="dropdown-item" style="font-size:0.8rem;text-align:center;">
                            @csrf
                                <x-dropdown-link :href="route('logout')" style="text-decoration: none;color: red;"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                            </form>
                        </li>
                      </ul>
                </div> 
            </div>
        </div>

        {{-- Main Content --}}

        <div class="content p-2">
            <div class="main-content h-100 w-100 border rounded shadow p-3" style="background-color:#ffff">

        <div class="content p-2 h-100">
            <div class="main-content h-100 w-100 border rounded shadow p-2" style="background-color:#ffff">

                @yield('content')
            </div>
        </div>
        
    </div>
    
   
    {{-- Script JS --}}
    <script src="{{ asset('js/bulletin.js') }}"></script>

    {{-- Bootstrap CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>