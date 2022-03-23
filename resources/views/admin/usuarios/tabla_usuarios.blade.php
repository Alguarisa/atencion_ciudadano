<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
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

                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button type="submit" class="btn btn-danger btn-circle btn-sm"
                    
                    @if (Auth::user()->id == $usuario->id)
                        disabled
                    @endif
                    
                    ><i class="fas fa-trash"></i></button>
                </form>

                </td>
            </tr>
            
        @endforeach 


        </tbody>
    </table>
</div>