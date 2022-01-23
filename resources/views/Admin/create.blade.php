@extends('layouts.app')

@section('title', 'Add Auto')
@section('Maincontent')

<div style="margin: 30px">
<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div style="text-align: center"><h4><b>Add Auto Detail</b></h4></div>
    <div class="form-outline mb-4">
      <div class="col">
        <div class="form-outline">
            <label class="form-label" >Company Name</label>
            <input type="text" id="companyname" name="companyname" class="form-control" required="required"/>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
            <label class="form-label">Select Image</label>
            <input type="file" id="file" name="file" class="form-control" />
        </div>
      </div>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label">Title</label>
        <input type="text" id="title" name="title" class="form-control" />

    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" >Price</label>
        <input type="text" id="price" name="price" class="form-control" />

    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label">Kilometer</label>
      <input type="text" id="kilometer" name="kilometer" class="form-control" />

    </div>

    <!-- Number input -->
    <div class="form-outline mb-4">
        <label class="form-label" >Select Type</label>
        <select id="type" name="type" class="form-control">
                <option value="auto">Auto</option>
                <option value="manual">Manual</option>
                <option value="automanual">Auto and Manual</option>
        </select>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" >Modal</label>
        <input type="text" id="modal" name="modal" class="form-control" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" >Review</label>
        <input type="text" id="review" name="review" class="form-control" />
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Add Auto</button>
  </form>
</div>

@if($errors->any())
    {!! implode('', $errors->all("<div class='alert alert-danger'>:message</div>")) !!}
@endif

@endsection


