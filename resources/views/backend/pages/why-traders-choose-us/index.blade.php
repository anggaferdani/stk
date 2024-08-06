@extends('backend.templates.pages')
@section('title', 'Why Traders Choose Us')
@section('header')
<div class="container-xl">
  <div class="row g-2 align-items-center">
    <div class="col">
      <h2 class="page-title">
        Why Traders Choose Us
      </h2>
    </div>
    <div class="col-auto ms-auto d-print-none">
      <div class="btn-list">
      </div>
    </div>
  </div>
</div>
@endsection
@section('content')
<div class="container-xl">
  <div class="row">
    <div class="col-12">
      @if(Session::get('success'))
        <div class="alert alert-important alert-success" role="alert">
          {{ Session::get('success') }}
        </div>
      @endif
      @if(Session::get('error'))
        <div class="alert alert-important alert-danger" role="alert">
          {{ Session::get('error') }}
        </div>
      @endif
      <div class="card">
        <div class="card-header">
          <div class="ms-auto">
            <form action="" class="">
              <div class="d-flex">
                <input disabled type="text" class="form-control" name="" placeholder="Search">
                <button type="submit" class="btn btn-icon btn-dark-outline"><i class="fa-solid fa-magnifying-glass"></i></button>
                <a href="{{ route('admin.why-traders-choose-us.index') }}" class="btn btn-icon btn-dark-outline"><i class="fa-solid fa-times"></i></a>
              </div>
            </form>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-vcenter card-table table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Icon</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($whyTradersChooseUs->take(3) as $wtcu)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td><i class="{{ $wtcu->icon }} fs-1 text-warning"></i></td>
                  <td>{{ $wtcu->title }}</td>
                  <td>{{ $wtcu->description }}</td>
                  <td>
                    <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $wtcu->id }}"><i class="fa-solid fa-pen"></i></button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@foreach ($whyTradersChooseUs as $wtcu)
<div class="modal modal-blur fade" id="edit{{ $wtcu->id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{ route('admin.why-traders-choose-us.update', $wtcu->id) }}" method="POST" class="">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title">Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <div class="form-label required">Icon</div>
            <select class="form-select" name="icon">
              <option value="fa-regular fa-star" @if($wtcu->icon == 'fa-regular fa-star') @selected(true) @endif>Star</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label required">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $wtcu->title }}">
            @error('title')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="">
            <label class="form-label required">Description</label>
            <textarea class="form-control" name="description" rows="6" placeholder="Description">{{ $wtcu->description }}</textarea>
            @error('description')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection