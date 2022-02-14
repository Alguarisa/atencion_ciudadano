@extends('sb.master')





@section('contenido')
    

<div class="row">
    <div class="col-md-4">
        



        <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
        
        
        
         


            </div>
          </div>
           </div>
    <div class="col-md-8">
        

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre y Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Configuracion</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>


    </div>

</div>
 



@endsection