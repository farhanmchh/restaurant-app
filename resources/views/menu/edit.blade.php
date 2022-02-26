@extends('layout.main')

@section('content')
  <div class="mb-4">
    <span class="fs-3 border-1 border-bottom pb-2 pe-3">Edit menu</span>
  </div>

  <a href="/menu/index" class="btn btn-secondary btn-lg mb-3" title="back"></a>

  <div class="row">
    <div class="col-5">
      <div class="card">
        <div class="card-body">
          <form action="#" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label class="form-label">Name :</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Price :</label>
              <input type="number" name="price" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Carbo :</label>
              <input type="number" name="carbo" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Protein :</label>
              <input type="number" name="protein" class="form-control">
            </div>

            <div class="d-grid">
              <button class="btn btn-primary">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
