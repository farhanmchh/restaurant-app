@extends('layout.main')

@section('content')
  <div class="mb-5">
    <span class="fs-3 border-1 border-bottom pb-2 pe-3">Customer page</span>
  </div>

  <a href="/customer/create" class="btn btn-primary px-3 mb-2">Create</a>

  @if (session('success'))
    <p class="text-success">{{ session('success') }}</p>
  @endif

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
          @foreach ($customers as $customer)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $customer->name }}</td>
              <td>
                <a href="/customer/{{ $customer->id }}/edit" class="btn btn-warning btn-lg" title="edit"></a>
                <form action="/customer/{{ $customer->id }}}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-lg" type="submit" title="delete" onclick="return confirm('Sure?')"></button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
