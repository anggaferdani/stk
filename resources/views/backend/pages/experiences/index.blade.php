@extends('backend.templates.pages')
@section('title', 'Experience')
@section('header')
<div class="container-xl">
  <div class="row g-2 align-items-center">
    <div class="col">
      <h2 class="page-title">
        Experience
      </h2>
    </div>
    <div class="col-auto ms-auto d-print-none">
      <div class="btn-list">
        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#createModal">Create new report</a>
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
            <form action="{{ route('admin.experience.index') }}" class="">
              <div class="d-flex">
                <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Search">
                <button type="submit" class="btn btn-icon btn-dark-outline"><i class="fa-solid fa-magnifying-glass"></i></button>
                <a href="{{ route('admin.experience.index') }}" class="btn btn-icon btn-dark-outline"><i class="fa-solid fa-times"></i></a>
              </div>
            </form>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-vcenter card-table table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Experience</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($experiences as $experience)
                <tr>
                  <td>{{ ($experiences->currentPage() - 1) * $experiences->perPage() + $loop->iteration }}</td>
                  <td>{{ $experience->experience }}</td>
                  <td>
                    <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $experience->id }}"><i class="fa-solid fa-pen"></i></button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          <ul class="pagination m-0 ms-auto">
            @if($experiences->hasPages())
              {{ $experiences->appends(request()->query())->links('pagination::bootstrap-4') }}
            @else
              <li class="page-item">No more records</li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal modal-blur fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{ route('admin.experience.store') }}" method="POST" class="">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Create</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="">
            <label class="form-label required">Experience</label>
            <input type="text" class="form-control" name="experience" placeholder="Experience">
            @error('experience')<div class="text-danger">{{ $message }}</div>@enderror
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

@foreach ($experiences as $experience)
<div class="modal modal-blur fade" id="edit{{ $experience->id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{ route('admin.experience.update', $experience->id) }}" method="POST" class="">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title">Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="">
            <label class="form-label required">Experience</label>
            <input type="text" class="form-control" name="experience" placeholder="Experience" value="{{ $experience->experience }}">
            @error('experience')<div class="text-danger">{{ $message }}</div>@enderror
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