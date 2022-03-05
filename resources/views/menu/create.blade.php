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
          <form action="#" method="POST">
            @csrf
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
            <div class="mb-3">
              <label class="form-label">Select 2 :</label>
              <select name="" class="select2 form-select">
                <option value="farhan">Farhan</option>
                <option value="ahmad">ahmad</option>
                <option value="damar">damar</option>
                <option value="zaky">zaky</option>
              </select>
            </div>

            <div class="d-grid">
              <button class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('.select-picker').select2();
    });
  </script>
@endsection
