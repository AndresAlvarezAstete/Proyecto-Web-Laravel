 @extends('plantilla')

 @section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Editar Excursión: {{ $excursiones->titulo }}</h1>
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
                
                <form method="post" action="{{ route('actualizar-excursion', ['excursiones'=>$excursiones->id]) }}" enctype="multipart/form-data">
                  
                  @csrf
                  @method('put')

                  <h2>Título:</h2>
                  <input type="text" class="form-control" name="titulo" value="{{ $excursiones->titulo }}">

                  <h2>Categoría:</h2>
                  <select class="form-control" name="id_categoria">
                    
                    <option value="{{ $excursiones->id_categoria }}">Actual: {{ $excursiones->categoria->nombre }}</option>

                    @foreach($categorias as $categoria)

                      <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>

                    @endforeach

                  </select>

                  <h2>Portada Actual:</h2>
                  <img src="http://localhost/Proyecto/cms/public/storage/{{ $excursiones->portada }}" class="w-50">

                  <input type="hidden" name="portadaActual" value="{{ $excursiones->portada }}">

                  <input type="file" name="portadaNueva">

                  <h2>Descripción</h2>
                  <textarea class="form-control" name="descripcion">{{ $excursiones->descripcion }}</textarea>

                  <br>
                  <button type="submit" class="btn btn-success">Guardar</button>

                </form>

              </div>

            </div>

          </div>

        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection