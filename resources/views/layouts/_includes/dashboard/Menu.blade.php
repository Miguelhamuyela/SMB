
<a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">Perfil</a>
<a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">Configurações</a>
<a class="nav-link text-danger" href="{{ route('logout') }}"
onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
Terminar a Sessão

<form id="logout-form" action="{{ route('logout') }}" method="POST">
@csrf
</form>
    
@if (null !== Auth::user())

  
                

    <li class="nav-item">
        <a class="nav-link pl-3" href="{{ route('admin.news.create') }}">
            <span class="ml-1 item-text">Cadastrar Notícia</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pl-3" href="{{ route('admin.news.index') }}">
            <span class="ml-1 item-text">Listar Notícias</span>
        </a>
    </li>
                     
@endif


