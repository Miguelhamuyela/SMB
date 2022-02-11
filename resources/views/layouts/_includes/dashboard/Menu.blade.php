@if (null !== Auth::user())

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="{{ route('admin.user.show', Auth::User()->id) }}" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="/storage/{{ Auth::User()->photo }}"
                            alt="{{ Auth::User()->name }}">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Auth::User()->name }}</p>
                        <p class="designation">{{ Auth::User()->level }}</p>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>




            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#startups" aria-expanded="false"
                    aria-controls="users">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">Startups</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="startups">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.startup.create.index') }}">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.startup.list.index') }}">Listar</a>
                        </li>


                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#fabrica" aria-expanded="false"
                    aria-controls="users">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">Fabrica de Software</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="fabrica">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.manufactures.create.index') }}">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.startup.list.index') }}">Listar</a>
                        </li>


                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#fabrica" aria-expanded="false"
                    aria-controls="users">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">Clientes</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="fabrica">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.client.create.index') }}">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.client.list.index') }}">Listar</a>
                        </li>


                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Basic UI Elements</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                    <i class="menu-icon typcn typcn-shopping-bag"></i>
                    <span class="menu-title">Form elements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/charts/chartjs.html">
                    <i class="menu-icon typcn typcn-th-large-outline"></i>
                    <span class="menu-title">Charts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class="menu-icon typcn typcn-bell"></i>
                    <span class="menu-title">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/icons/font-awesome.html">
                    <i class="menu-icon typcn typcn-user-outline"></i>
                    <span class="menu-title">Icons</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false"
                    aria-controls="users">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">Utilizadores</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.user.index') }}">Listar</a>
                        </li>


                    </ul>
                </div>
            </li>
        </ul>
    </nav>
@endif
