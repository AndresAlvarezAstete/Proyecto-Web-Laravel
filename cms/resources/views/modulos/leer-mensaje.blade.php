 @extends('plantilla')

 @section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Nombre: {{ $mensaje->nombre }}</h1>
            <h1 class="m-0 text-dark">Email: {{ $mensaje->email }}</h1>
          </div><!-- /.col -->     
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
          
          <div class="col-12">
            
            <div class="card">
              
              <div class="card-body">
                
                {{ $mensaje->mensaje }}
                

              </div>

            </div>

          </div>

        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection