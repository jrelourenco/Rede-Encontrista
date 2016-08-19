<nav id="sidebar" class="navbar navbar-default navbar-fixed-left nav-stacked" role="navigation">
    <ul id="sidebar-menu"class="nav navbar-nav">
        <h3 class="navbar-title">Menu</h3>
        @Perm('sidebar.home')
        <li><a href="{{ URL::route('home') }}">Início</a></li>@endPerm
        @Perm('sidebar.profile')
        <li><a href="{{ URL::to('profile') }}">Perfil</a></li>@endPerm
        @Perm('sidebar.curriculum')
        <li><a href="{{ URL::to('curriculum') }}">Currículo</a></li>@endPerm
        @Perm('sidebar.calendar')
        <li><a href="{{ URL::to('calendar') }}">Calendário</a></li>@endPerm
        @Perm('sidebar.subscribe')
        <li><a href="{{ URL::route('meetings.index') }}">Inscrições</a></li>@endPerm
        @Perm('sidebar.contact')
        <li><a href="{{ URL::to('contact') }}">Contactos</a></li>@endPerm
        @Perm('sidebar.admin.course')
        <li class="admin"><a href="{{ URL::route('admin.meetings.index') }}">Gerir cursos</a></li>@endPerm
        @Perm('sidebar.admin.group')
        <li class="admin"><a href="{{ URL::route('admin.group.index') }}">Gerir Grupos</a></li>@endPerm
    </ul>
</nav>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="sidebar-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

    </div>
</nav>
