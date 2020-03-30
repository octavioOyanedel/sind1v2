@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active">Data</li>
  </ol>
</nav>


<a class="btn btn-default btn-sm"><i class="fas fa-magic"></i></a>


        	<div class="table-responsive">
        		<p class="h4 mb-4">Tabla</p>
        		<table class="table table-sm table-hover">
        			<thead class="black white-text">
        				<tr>
        					<th scope="col">First</th>
        					<th scope="col">Last</th>
        					<th scope="col">Handle</th>
        					<th scope="col">#</th>
        					<th scope="col">First</th>
        					<th scope="col">Last</th>
        					<th scope="col">Handle</th>
        				</tr>
        			</thead>
        			<tbody>
        				<tr>
        					<td class="text-center"><a class="btn btn-danger btn-sm boton-tabla" title="Eliminar"><i class="fas fa-trash"></i></a></td>
        					<td class="text-center"><a class="btn btn-default btn-sm boton-tabla" title="Editar"><i class="fas fa-edit"></i></a></td>
        					<td scope="row ">1</td>
        					<td scope="row">1</td>
        					<td>Mark</td>
        					<td class="align-middle">Otto</td>
        					<td>@mdo</td>
        				</tr>
        				<tr>
        					<td scope="row">1</td>
        					<td scope="row">1</td>
        					<td scope="row">1</td>
        					<td scope="row">1</td>

        					<td>Jacob</td>
        					<td>Thornton</td>
        					<td>@fat</td>
        				</tr>
        				<tr>
        					<td scope="row">1</td>
        					<td scope="row">1</td>
        					<td scope="row">1</td>
        					<td scope="row">1</td>

        					<td>Larry</td>
        					<td>the Bird</td>
        					<td>@twitter</td>
        				</tr>
        			</tbody>
        		</table>
        	</div>  	

        </div>
    </div>
</div>
@endsection