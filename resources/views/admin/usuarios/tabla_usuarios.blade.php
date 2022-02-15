<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre y Apellido</th>
                <th>correo</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>


        @foreach ($usuarios as $usuario)
            
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ ucwords($usuario->name) }}</td>
                <td>{{ strtolower($usuario->email) }}</td>
                <td class="text-center">

                    <a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>

                </td>
            </tr>
            
        @endforeach 


        </tbody>
    </table>
</div>