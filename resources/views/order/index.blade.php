@extends('layout.main')

@section('content')
  <div class="mb-5">
    <span class="fs-3 border-1 border-bottom pb-2 pe-3">Order page</span>
  </div>

  <div class="row">
    <div class="col-10">
      <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#</td>
            <td>nama</td>
            <td>
              <a href="/menu/edit" class="btn btn-warning btn-lg" title="edit"></a>
              <form action="#" method="POST" class="d-inline">
                @method('DELETE')
                <button class="btn btn-danger btn-lg" type="submit" title="delete"></button>
              </form>
            </td>
          </tr>
          <tr>
            <td>#</td>
            <td>nama</td>
            <td>
              <a href="/menu/edit" class="btn btn-warning btn-lg" title="edit"></a>
              <form action="#" method="POST" class="d-inline">
                @method('DELETE')
                <button class="btn btn-danger btn-lg" type="submit" title="delete"></button>
              </form>
            </td>
          </tr>
          <tr>
            <td>#</td>
            <td>nama</td>
            <td>
              <a href="/menu/edit" class="btn btn-warning btn-lg" title="edit"></a>
              <form action="#" method="POST" class="d-inline">
                @method('DELETE')
                <button class="btn btn-danger btn-lg" type="submit" title="delete"></button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
