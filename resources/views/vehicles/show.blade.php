<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
<br><br>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                       <div class="card-title">
                        <h2>Vehiculo: {{ $vehicle->brand }} {{ $vehicle->model }}</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('vehicles.create') }}">< Regresar</a>
                        
                        </div>
                    </div>
                </div>
            </div>
         <div class="card-body">
      <table class="table table-striped">
       <thead>
        <th>Vehiculo</th>
        <th>Informacion</th>
        <th>Descripcion</th> 
    </thead>

    <tbody>
    @forelse ($vehiculos as $vehicle)
        <tr>
            <td>
               <p>Imagen</p>
            </td>
            <td>
                <p><b>Numero de serie: </b>{{ $vehicle->serialNumber }}</p>
                <p><b>Color: </b>{{ $vehicle->color }}</p>
                <p><b>Puertas: </b>{{ $vehicle->numberOfDoors }}</p>
                <p><b>Asientos: </b>{{ $vehicle->numberOfSeats }}</p>
                <p class="text-uppercase"><b class="text-capitalize">Matricula: </b>{{ $vehicle->carRegistration }}</p>
            </td>
            <td><p>{{ $vehicle->description }}</p></td>
    </tr>

    </tbody>
   </table>
</div>
<div class="card-footer"></div>
    <div class="col-md-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{ route('vehicles.edit', $vehicle->id) }}">< Editar</a>
                <a class="btn btn-ganger" href="{{ route('vehicles.destroy', $vehicle->id) }}">< Eliminar</a>        
            </div>
    </div>
</div>
</div>