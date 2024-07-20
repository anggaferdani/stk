@extends('backend.templates.pages')
@section('title', 'Profile')
@section('header')
<div class="container-xl">
  <div class="row g-2 align-items-center">
    <div class="col">
      <h2 class="page-title">
        Profile
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
                <input type="text" class="form-control" name="" placeholder="Search">
                <button type="submit" class="btn btn-icon btn-dark-outline"><i class="fa-solid fa-magnifying-glass"></i></button>
                <a href="{{ route('admin.profile.index') }}" class="btn btn-icon btn-dark-outline"><i class="fa-solid fa-times"></i></a>
              </div>
            </form>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-vcenter card-table table-striped">
            <thead>
              <tr>
                <th>About Us</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($profiles->take(1) as $profile)
                <tr>
                  <td>{{ $profile->description }}</td>
                  <td>
                    <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $profile->id }}"><i class="fa-solid fa-pen"></i></button>
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

@foreach ($profiles as $profile)
<div class="modal modal-blur fade" id="edit{{ $profile->id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{ route('admin.profile.update', $profile->id) }}" method="POST" class="">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title">Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label required">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $profile->title }}">
            <div class="text-muted small">*column ini akan ditampilkan pada bagian title di index</div>
            @error('title')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label required">Subtitle</label>
            <input type="text" class="form-control" name="subtitle" placeholder="Subtitle" value="{{ $profile->subtitle }}">
            <div class="text-muted small">*column ini akan ditampilkan pada bagian subtitle di index</div>
            @error('subtitle')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label required">About Us</label>
            <textarea class="form-control" name="description" rows="6" placeholder="Description">{{ $profile->description }}</textarea>
            <div class="text-muted small">*column ini akan ditampilkan pada bagian about us</div>
            @error('description')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label required">Footer Description</label>
            <textarea class="form-control" name="footer_description" rows="6" placeholder="Footer Description">{{ $profile->footer_description }}</textarea>
            <div class="text-muted small">*column ini akan ditampilkan pada bagian about us</div>
            @error('footer_description')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label required">Visi</label>
            <textarea class="form-control" name="visi" rows="6" placeholder="Visi">{{ $profile->visi }}</textarea>
            <div class="text-muted small">*column ini akan ditampilkan pada bagian visi</div>
            @error('visi')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label required">Misi</label>
            <textarea class="form-control" name="misi" rows="6" placeholder="Misi">{{ $profile->misi }}</textarea>
            <div class="text-muted small">*column ini akan ditampilkan pada bagian misi</div>
            @error('misi')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label required">Address</label>
            <textarea class="form-control" name="address" rows="6" placeholder="Address">{{ $profile->address }}</textarea>
            <div class="text-muted small">*column ini akan ditampilkan pada bagian address</div>
            @error('address')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label required">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $profile->email }}">
            <div class="text-muted small">*column ini akan ditampilkan pada bagian email di index</div>
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label required">Phone Number</label>
            <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" value="{{ $profile->phone_number }}">
            <div class="text-muted small">*column ini akan ditampilkan pada bagian phone number di index</div>
            @error('phone_number')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Optional Phone Number</label>
            <input type="text" class="form-control" name="optional_phone_number" placeholder="Optional Phone Number" value="{{ $profile->optional_phone_number }}">
            <div class="text-muted small">*column ini akan ditampilkan pada bagian optional phone number di index</div>
            @error('optional_phone_number')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Link X</label>
            <input type="text" class="form-control" name="x" placeholder="X" value="{{ $profile->x }}">
            <div class="text-muted small">*column ini akan digunakan untuk meredirect ke akun x company</div>
            @error('x')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Link Instagram</label>
            <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{ $profile->instagram }}">
            <div class="text-muted small">*column ini akan digunakan untuk meredirect ke akun instagram company</div>
            @error('instagram')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Link Facebook</label>
            <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{ $profile->facebook }}">
            <div class="text-muted small">*column ini akan digunakan untuk meredirect ke akun facebook company</div>
            @error('facebook')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="">
            <label class="form-label">Link Youtube</label>
            <input type="text" class="form-control" name="youtube" placeholder="Youtube" value="{{ $profile->youtube }}">
            <div class="text-muted small">*column ini akan digunakan untuk meredirect ke akun youtube company</div>
            @error('youtube')<div class="text-danger">{{ $message }}</div>@enderror
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