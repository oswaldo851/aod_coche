<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
           <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title">Listado de vehiculos registrados en la base de datos</h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('vehicles.create') }}">+ Nuevo</a>
                        
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
        <th>Acciones</th>
    </thead>

    <tbody>
    @forelse ($vehiculos as $vehicle)
        <tr>
            <td>
            <a class="btn btn-info btn-small" href="{{ route('vehicle.show',$vehicle->id) }}">
            <h4>{{ $vehicle->brand }} {{ $vehicle->model }}</h4>
            </a>
            </td>
            <td>
                <p><b>Numero de serie: </b>{{ $vehicle->serialNumber }}</p>
                <p><b>Color: </b>{{ $vehicle->color }}</p>
                <p><b>Puertas: </b>{{ $vehicle->numberOfDoors }}</p>
                <p><b>Asientos: </b>{{ $vehicle->numberOfSeats }}</p>
                <p><b>Matricula: </b>{{ $vehicle->carRegistration }}</p>
            </td>
            <td><p>{{ $vehicle->description }}</p></td>
            <td>ver | editar | eliminar</td>


@empty
    <h1>La tabla no tiene datos</h1>
    </tr>
@endforelse
</tbody>
</table>
</div>
</div>


</div>