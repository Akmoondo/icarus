<div class="container-fluid">
        <div class="row">
         <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
             <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Sistema</span>
              </h5>
              <ul class="nav flex-column">
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('dashboard.index') }}">
                   <span data-feather="bar-chart-2"></span>
                    Dashboard
                  </a>
                </li>
              </h6>
              
                <li class="nav-item">
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
                  <a class="nav-link" href="auditoria.php">
                  <span data-feather="file"></span>
                    Auditoria
                  </a>
                  </h6>
                </li>
                <li class="nav-item">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
                  <a class="nav-link" href="resources\views\avisos\index.blade.php">
                    <span data-feather="alert-circle"></span>
                    Avisos
                  </a>
                  </h6>
                </li>
                <li class="nav-item">
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
                  <a class="nav-link" href="relatorio.php">
                    <span data-feather="layers"></span>
                    Relatórios
                  </a>
                  </h6>
                </li>
              </ul>
      
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Gerenciamento</span>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
                  <a class="nav-link" href="user.php">
                    <span data-feather="users"></span>
                    Contas
                  </a>
                  </h6>
                </li>
                <li class="nav-item">
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
                  <a class="nav-link" href="log.php">
                  <span data-feather="archive"></span>
                    LOGS
                  </a>
                  </h6>
                </li>
              </ul>
            </div>
          </nav>