@if (null !== Auth::user())
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="{{ route('admin.user.show', Auth::User()->id) }}" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="{{ Auth::User()->photo }}"
                            alt="{{ Auth::User()->name }}">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Auth::User()->name }}</p>
                        <p class="designation">{{ Auth::User()->level }}</p>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-category">Dashboard</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>


            <li class="nav-item nav-category mt-2">Serviços</li>
            @if ('Gestor' == Auth::user()->level || 'Fábrica de Software' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                {{-- manufactures --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.manufactures.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Fabrica de Software</span>
                    </a>
                </li>
            @endif
            @if ('Gestor' == Auth::user()->level || 'Reparação de Equipamentos' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                {{-- equipmentRepair --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.equipmentRepair.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Reparação de Equipamentos</span>
                    </a>
                </li>
            @endif
            @if ('Gestor' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                {{-- elernings --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.elernings.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">E-learning</span>
                    </a>
                </li>

                <li class="nav-item nav-category mt-2">Alugueres</li>
                {{-- startups --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.startup.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Startup</span>
                    </a>
                </li>

                {{-- coworks --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.coworks.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Cowork</span>
                    </a>
                </li>

                {{-- auditoriums --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.auditoriums.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Auditório</span>
                    </a>
                </li>
            @endif

            @if ('Administrador' == Auth::user()->level || 'Finanças' == Auth::user()->level)
                {{-- Payments --}}

                <li class="nav-item nav-category mt-2">Pagamentos</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.payments.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Pagamentos</span>
                    </a>
                </li>
                {{-- End Payments --}}
            @endif

            {{-- employees --}}
            <li class="nav-item nav-category mt-2">Funcionários do DIGITAL.AO</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.employees.index') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Funcionáros</span>
                </a>
            </li>

            @if ('Administrador' == Auth::user()->level)
                {{-- employees --}}
                <li class="nav-item nav-category mt-2">Funcionários do DIGITAL.AO</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.employees.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Funcionáros</span>
                    </a>
                </li>


                <li class="nav-item mb-5">
                    <a class="nav-link" href="{{ route('admin.user.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Utilizadores</span>
                    </a>
                </li>
            @endif


        </ul>
    </nav>
@endif
