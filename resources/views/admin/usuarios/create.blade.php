<form class="user" method="POST" action="{{ route('usuarios.store') }}">
    @csrf
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                placeholder="Nombre" name="nombre" required>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user" id="exampleLastName"
                placeholder="Apellido" name="apellido" required>
        </div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
            placeholder="correo electronico" name="email" required>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user"
                id="exampleInputPassword" placeholder="contraseña" name="password" required>
        </div>
        
    </div>
    <input type="submit" value="Crear usuario" class="btn btn-primary btn-user btn-block">
    <hr>
   
   
</form>