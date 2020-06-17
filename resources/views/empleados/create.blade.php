Sección para crear empleados
<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" value="" id="Nombre">
    <br>
    <label for="Nombre">{{'Apellido Paterno'}}</label>
    <input type="text" name="ApellidoPaterno" value="" id="ApellidoPaterno">
    <br>
    <label for="Nombre">{{'Apellido Materno'}}</label>
    <input type="text" name="ApellidoMaterno" value="" id="ApellidoMaterno">
    <br>
    <label for="Nombre">{{'Correo'}}</label>
    <input type="email" name="Correo" value="" id="Correo">
    <br>
    <label for="Nombre">{{'Foto'}}</label>
    <input type="file" name="Foto" value="" id="Foto">
    <br>
    <input type="submit" value="Agregar">
</form>