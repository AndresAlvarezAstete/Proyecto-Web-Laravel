<header class="row">
    
            <div id="logo" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    
                <img src="http://localhost/Proyecto/cms/public/storage/{{ $inicio->logo }}" class="img-responsive">

            </div>

            <div id="botoneraMovil" class="navbar-header navbar-inverse">

                <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#botonera">

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
            
            </div>

            <nav id="botonera" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 collapse navbar-collapse pull-right">
                        
                <ul class="nav navbar-nav">

                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/#top') }}">Categorias</a></li>
                    <li><a href="{{ url('/Excursiones-Todas') }}">Excursiones</a></li>
                    <li><a href="{{ url('/#contactenos') }}">Contáctenos</a></li>

                </ul>

            </nav>

        </header>