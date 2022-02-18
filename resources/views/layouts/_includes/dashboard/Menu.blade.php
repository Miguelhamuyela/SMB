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
                            <a class="nav-link" href="{{ route('admin.manufactures.list.index') }}">Listar</a>
                        </li>


                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#cowork" aria-expanded="false"
                    aria-controls="users">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">Cowork</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="cowork">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.coworks.create.index') }}">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.coworks.list.index') }}">Listar</a>
                        </li>


                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#elernings" aria-expanded="false"
                    aria-controls="users">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">Elernings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="elernings">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.elernings.create.index') }}">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.elernings.list.index') }}">Listar</a>
                        </li>


                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auditoriums" aria-expanded="false"
                    aria-controls="users">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">Auditório</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auditoriums">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.auditoriums.create.index') }}">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.auditoriums.list.index') }}">Listar</a>
                        </li>


                    </ul>
                </div>
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

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#employees" aria-expanded="false"
                    aria-controls="employees">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">Funcionáros</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="employees">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.employees.create')}}">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.employees.index') }}">Listar</a>
                        </li>


                    </ul>
                </div>
            </li>
        </ul>
    </nav>
@endif
