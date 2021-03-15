<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Formulario para crear un nuevo registro</h1>

    <form action="{{ route('vehicles.store') }}" method="post">
      @csrf

        <div>
<           <label for="">Marca: </label>
            <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
        </div>
        <div>
<           <label for="">Modelo: </label>
            <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
        </div>
        <div>
<           <label for="">Color: </label>
            <input class="form-control" type="text" name="color" id="" placeholder="Color">
        </div>
        <div>
<           <label for="">Numero de serie: </label>
            <input class="form-control" type="text" name="serialNumber" id="" placeholder="Numero de serie">
        </div>
        <div>
<           <label for="">Matricula: </label>
            <input class="form-control" type="text" name="carRegistration" id="" placeholder="Matricula">
        </div>
        <div>
<           <label for="">Numero de puertas: </label>
            <input class="form-control" type="number" name="numberOfDoors" id="" placeholder="Numero de puertas">
        </div>
        <div>
<           <label for="">Numero de asientos: </label>
            <input class="form-control" type="number" name="numberOfSeats" id="" placeholder="Numero de asientos">
        </div>
        <div>
<           <label for="">Kilometraje: </label>
            <input class="form-control" type="number" name="mileage" id="" placeholder="Kilometraje">
        </div>
        <div>
<           <label for="">Cilindraje: </label>
            <input class="form-control" type="number" name="ylinderCapacity" id="" placeholder="Cilindraje">
        </div>
        <div>
<           <label for="">Descripcion: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
<           <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" id="" placeholder="comment">
        </div>

        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>

</div>