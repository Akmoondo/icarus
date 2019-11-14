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
              @can('user-validate', 'auditoria-list')
                <li><a href="{{route('audit.getCompany')}}">Auditoria</a></li>
              @endcan
              @can('user-validate', 'referencia-list')
                <li><a href="{{route('references.index')}}">Referências</a></li>
              @endcan
              @can('user-validate', 'situacao-list')
                <li><a href="{{route('audit.situations.index')}}">Situações</a></li>
              @endcan
              @can('user-validate', 'validacao-list')   
                <li><a href="{{route('audit.validations.index')}}">Validações</a></li>
              @endcan
            </ul>
          </li>
        </ul>

        <br>
        @can('user-validate', 'usuario-list')
          <h3>Usuários</h3>
        @endcan
        <ul class="nav side-menu" style="">
          @can('user-validate', 'usuario-list')
          <li><a><i class="fa fa-users"></i> Usuários <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">              
                <li><a href="{{route('roles.index')}}">Gerenciar Cargos</a></li>
            </ul>          
          </li>
          @endcan
          @can('user-validate', 'empresa-list')
            <li><a><i class="fa fa-table"></i> Empresas <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">              
                <li><a href="{{route('companies.index')}}">Gerenciar Empresas</a></li>
                
              </ul>
            </li>
          @endcan
      </div>
    </div>
  </div>