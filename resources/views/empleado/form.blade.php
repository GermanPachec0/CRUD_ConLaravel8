    <h1>{{$modo}} Empleado</h1>
    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach($errors -> all() as $error)
               <li> {{$error}}</li>
            @endforeach
            </ul>
        </div>
        
    @endif

    <div class="form-group">
    <label for="Nombre"> Nombre</label>
    <input type="text" name= "Nombre" id= "Nombre" class="form-control" value="{{ isset($empleado -> nombre) ? $empleado -> nombre:old('Nombre') }}"> <br>
    </div>

    <div class="form-group">
    <label for="ApellidoPaterno" > Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" class="form-control" value="{{ isset($empleado -> apellidopaterno) ? $empleado -> apellidopaterno: old('ApellidoPaterno') }}" ><br>
    </div>

    <div class="form-group">
    <label for="ApellidoMaterno" > Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" class="form-control" value="{{ isset($empleado -> apellidomaterno) ? $empleado -> apellidomaterno: old('ApellidoMaterno') }}"><br>
    </div>

    <div class="form-group">
    <label for="Correo"> Correo</label>
    <input type="text" name="Correo" class="form-control" value="{{ isset($empleado -> correo) ? $empleado -> correo :old('Correo') }}"><br>
    </div>

    <div class="form-group">
    <label for="Foto" ></label>
    @if(isset($empleado -> foto))
    <img  class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->foto}}" width="20%">
    @endif;
    <input type="file" name="Foto" class="form-control" value=""><br><br>
    </div>


    <input class="btn btn-success" type="submit"  value="{{$modo}} Datos">
    <a class="btn btn-primary" href="{{url('/empleado')}}">Regresar</a>
