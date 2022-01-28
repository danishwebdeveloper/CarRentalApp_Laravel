@extends('layouts.app')

@section('title', 'Update Auto Details')
@section('Maincontent')

<div style="margin: 30px">
<form action="{{ route('admin.update', $editAuto->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT');
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div style="text-align: center"><h4><b>Add Auto Detail</b></h4></div>
    <div class="form-outline mb-4">
      <div class="col">
        <div class="form-outline">
            <label class="form-label" >Company Name</label>
            <input type="text" id="companyname" name="companyname" value="{{ $editAuto->companyname }}" class="form-control" required="required"/>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
            <label class="form-label">Select Image</label>
            <input type="file" id="file" name="file" class="form-control" />
            <img src="{{ asset('storage/imagesupload/'.$editAuto->path) }}" />
        </div>
      </div>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label">Title</label>
        <input type="text" id="title" name="title" value="{{ $editAuto->title }}" class="form-control" />

    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" >Price</label>
        <input type="text" id="price" name="price" value="{{ $editAuto->price }}" class="form-control" />

    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label">Kilometer</label>
      <input type="text" id="kilometer" name="kilometer" value="{{ $editAuto->Kilometer }}" class="form-control" />

    </div>

    <!-- Number input -->
    <div class="form-outline mb-4">
        <label class="form-label" >Select Type</label>
        <select id="type" name="type" value="{{ $editAuto->type }}" class="form-control">
                <option value="auto">Auto</option>
                <option value="manual">Manual</option>
                <option value="automanual">Auto and Manual</option>
        </select>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" >Modal</label>
        <input type="text" id="modal" name="modal" value="{{ $editAuto->model }}" class="form-control" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" >Review</label>
        <input type="text" id="review" name="review" value="{{ $editAuto->review }}" class="form-control" />
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Add Auto</button>
  </form>
</div>

@if($errors->any())
    {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
@endif

@endsection



