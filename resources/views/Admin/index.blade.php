@extends('layouts.app')

@section('Maincontent')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body> --}}
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Autos</b></h2>
					</div>
                    {{--  Success Message  --}}
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

					<div class="col-sm-6">
						<a href="{{ route('admin.create') }}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>ADD AUTO</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Company Name</th>
						<th>Image</th>
						<th>Title</th>
						<th>Price</th>
						<th>Kilomter</th>
                        <th>Type</th>
                        <th>Model</th>
                        <th>Reviews</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($cardetails as $cardetail)
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><a href="{{ route('admin.show', $cardetail->id) }}">
                            {{ $cardetail->companyname }}
                        </a></td>
                        <td>{{ "After click show Image" }}</td>
                        <td>{{ $cardetail->title }}</td>
                        <td>{{ $cardetail->price }}</td>
                        <td>{{ $cardetail->Kilometer }}</td>
                        <td>{{ $cardetail->type }}</td>
                        <td>{{ $cardetail->model }}</td>
                        <td>{{ $cardetail->review }}</td>
						<td>

							<a href="{{ route('admin.edit', $cardetail->id) }}" class="btn btn-primary" >
                                EDIT
                            </a>
                            <form action="{{ route('admin.destroy', $cardetail->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="DELETE" class="btn btn-primary"/>
                            {{-- <a href="{{ route('admin.destroy', $cardetail->id) }}" class="delete" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i> --}}
                            </a>
                        </form>
						</td>
					</tr>
                    @endforeach
				</tbody>
			</table>
			{{-- <div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div> --}}
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->

</body>
</html>
@endsection
