<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="http://localhost/Proyecto/cms/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CMS</span>
    </a>
    
    <!-- Sidebar -->

   
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/inicio') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/usuarios') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/slide') }}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Slide
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/categorias') }}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Categorías
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/excursiones') }}" class="nav-link">
              <i class="nav-icon fas fa-bus"></i>
              <p>
                Excursiones
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/mensajes') }}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Mensajes
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>