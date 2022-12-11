<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="/">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Administración</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('GestionUser.index')}}">
                        <i data-feather="users"></i>
                        <span data-key="t-dashboard">Gestión Usuarios</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('gestion-rol-permision.index')}}">
                        <i data-feather="users"></i>
                        <span data-key="t-dashboard">Roles & Permisos</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('gestionLocales.index')}}">
                        <i data-feather="users"></i>
                        <span data-key="t-dashboard">Gestión Locales</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-menu">Negocio</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Gestión Clientes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('gestionRepresentante.index')}}">
                                <span data-key="t-calendar">Representantes</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('gestionEmpresas.index')}}">
                                <span data-key="t-chat">Clientes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span data-key="t-chat">Listado Clientes</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#">
                        <i data-feather="users"></i>
                        <span data-key="t-dashboard">Gestión Arriendos</span>
                    </a>
                </li>

                

                <li class="menu-title" data-key="t-menu">Otros</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Apps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="apps-calendar.html">
                                <span data-key="t-calendar">Calendar</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-chat.html">
                                <span data-key="t-chat">Chat</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-email">Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                <li><a href="apps-email-read.html" data-key="t-read-email">Read Email</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">Invoices</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
                                <li><a href="apps-invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-contacts">Contacts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                <li><a href="apps-contacts-list.html" data-key="t-user-list">User List</a></li>
                                <li><a href="apps-contacts-profile.html" data-key="t-profile">Profile</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="">
                                <span data-key="t-blog">Blog</span>
                                <span class="badge rounded-pill badge-soft-danger float-end" key="t-new">New</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-blog-grid.html" data-key="t-blog-grid">Blog Grid</a></li>
                                <li><a href="apps-blog-list.html" data-key="t-blog-list">Blog List</a></li>
                                <li><a href="apps-blog-detail.html" data-key="t-blog-details">Blog Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>

            {{-- <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                        <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                        <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Sidebar -->
    </div>
</div>