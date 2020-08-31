@extends ('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class = "col-md-12">
      <div class="card">
        <div class="card-header">
          Pubs
          <a href="{{ route('admin.pubs.create') }}" class="btn btn-primary float-right"> Add </a>
        </div>
        <div class="card-body">
          @if (count($pubs) === 0)
          <p> There are no pubs registered. Please add a pub. </p>
          @else
          <table id="table-pubs" class="table table-hover">
            <thead>
              <th>Name</th>
              <th>Owner</th>
              <th>Times</th>
              <th>Games</th>
              <th>Discount</th>
              <th>Location</th>
              <th>Actions</th>
            </thead>
            <tbody>
              @foreach ($pubs as $pub)
              <tr data-id="{{ $pub->id}}">
                <td> {{$pub->name}}</td>
                <td> {{$pub->owner}}</td>
                <td> {{$pub->times}}</td>
                <td> {{$pub->games}}</td>
                <td> {{$pub->discount}}</td>
                <td> {{$pub->location}}</td>
                <td>
                  <a href="{{ route('admin.pubs.show', $pub->id) }}" class="btn btn-default">View</a>
                  <a href="{{ route('admin.pubs.edit', $pub->id) }}" class="btn btn-warning">Edit</a>
                  <form style="display:inline-block" method="POST" action="{{route ('admin.pubs.destroy', $pub->id) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <button type="submit" class="form-control btn btn-danger">Delete</a>
                    </form>
                  </td>
                </tr>

              @endforeach
            </tbody>
          </table>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
