@extends('layout.main')

@section('content')
  <div class="mb-4">
    <span class="fs-3 border-1 border-bottom pb-2 pe-3">Create customer</span>
  </div>

  <a href="/customer" class="btn btn-secondary btn-lg mb-3" title="back"></a>

  <div class="row">
    <div class="col-5">
      <div class="card">
        <div class="card-body">
          <form action="/customer/{{ $customer->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label class="form-label">Name :</label>
              <input type="text" name="name" class="form-control" value="{{ $customer->name }}">
            </div>
            <div class="mb-3">
              <label class="form-label">Email :</label>
              <input type="text" name="email" class="form-control" value="{{ $customer->email }}">
            </div>
            <div class="mb-3">
              <label class="form-label">Phone :</label>
              <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}">
            </div>
            <div class="mb-3">
              <div class="form-check">
                <label class="form-lab">Member</label>
                <input type="checkbox" name="member" class="form-check-input" {{ $customer->member ? 'checked' : '' }}>
              </div>
            </div>

            <div class="d-grid">
              <button class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
