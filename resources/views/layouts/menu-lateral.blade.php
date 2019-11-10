<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{route('dashboard.index')}}" class="site_title"><i class="fa fa-fire"></i> <span>ICARUS</span></a>
    </div>

    <div class="clearfix"></div>

    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section active">
        <h3>Ferramenta</h3>
        <ul class="nav side-menu" style="">
          <li><a><i class="fa fa-edit"></i> Auditoria <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('audit.getCompany')}}">Auditoria</a></li>
              <li><a href="{{route('references.index')}}">Referências</a></li>
              <li><a href="{{route('audit.situations.index')}}">Situações</a></li>
              <li><a href="{{route('audit.validations.index')}}">Validações</a></li>
            </ul>
          </li>
        </ul>

        <br>
        <h3>Usuários</h3>
        <ul class="nav side-menu" style="">
          <li><a><i class="fa fa-users"></i> Usuários <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('roles.index')}}">Gerenciar Cargos</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-table"></i> Empresas <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="{{route('companies.index')}}">Gerenciar Empresas</a></li>
            </ul>
          </li>
      </div>
    </div>
  </div>