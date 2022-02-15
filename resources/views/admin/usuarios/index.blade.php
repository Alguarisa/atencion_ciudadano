@extends('sb.master')





@section('contenido')
    

<div class="row">
    <div class="col-md-4">
        

    <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Usuarios Registrados</h6>
          </div>
          <div class="card-body">
              {{-- form usuarios --}}
              
          </div>
      </div>

        
    </div>
    <div class="col-md-8">
        

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Usuarios Registrados</h6>
          </div>
          <div class="card-body">
              {{-- tabla usuarios --}}
              @include('admin.usuarios.tabla_usuarios')
          </div>
      </div>

      
      
    </div>

</div>
 



@endsection