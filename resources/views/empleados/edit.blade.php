
<form action="{{url('/empleados/'.$empleado->id)}}" method="post" enctype="multipart/form-data"> 
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre">
    <br>
    <label for="Nombre">{{'Apellido Paterno'}}</label>
    <input type="text" name="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}" id="ApellidoPaterno">
    <br>
    <label for="Nombre">{{'Apellido Materno'}}</label>
    <input type="text" name="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}" id="ApellidoMaterno">
    <br>
    <label for="Nombre">{{'Correo'}}</label>
    <input type="email" name="Correo" value="{{$empleado->correo}}" id="Correo">
    <br>
    <label for="Nombre">{{'Foto'}}</label>
    <br>
    <img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
    <br>
    <input type="file" name="Foto" value="" id="Foto">
    <br>
    <input type="submit" value="Editar">
    
</form>