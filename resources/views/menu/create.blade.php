@extends('layout.main')

@section('content')
  <div class="mb-4">
    <span class="fs-3 border-1 border-bottom pb-2 pe-3">Create menu</span>
  </div>

  <a href="/menu/index" class="btn btn-secondary btn-lg mb-3" title="back"></a>

  <div class="row">
    <div class="col-5">
      <div class="card">
        <div class="card-body">
          <form action="/menu/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">Name :</label>
              <input type="text" name="nameMenu" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Description :</label>
              <textarea name="descMenu" rows="5" class="form-control"></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Photo :</label>
              <input type="file" name="photoMenu" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Price :</label>
              <input type="number" name="price" class="form-control">
            </div>

            <div class="d-grid">
              <button class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
