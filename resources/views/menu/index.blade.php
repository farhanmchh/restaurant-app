@extends('layout.main')

@section('content')
  <div class="mb-4">
    <span class="fs-3 border-1 border-bottom pb-2 pe-3">Menu page</span>
  </div>

  <a href="/menu/create" class="btn btn-primary px-3 mb-2">Create</a>

  @if (session('success'))
    <div class="my-1">
      <span class="text-white bg-success">{{ session('success') }}</span>
    </div>
  @endif

  <div class="row">
    <div class="col-10">
      <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($menu as $m)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $m->nameMenu }}</td>
              <td>{{ $m->price }}</td>
              <td>
                @if ($m->photoMenu)
                  <img src="{{ asset("storage/$m->photoMenu") }}" width="25%" height="25%">
                @else
                  <img src="/photo/default.png" width="25%" height="25%">
                @endif
              </td>
              <td>
                <a href="/menu/edit/{{ $m->id }}" class="btn btn-warning btn-lg"></a>
                <a href="/menu/destroy/{{ $m->id }}" class="btn btn-danger btn-lg"
                  onclick="return confirm('Sure?')"></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
