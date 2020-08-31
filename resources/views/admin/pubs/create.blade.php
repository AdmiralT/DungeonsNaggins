@extends ('layouts.app')

@section('content')
<div class = "container">
  <div class = "row">
    <div class = "col-md-8 col-md-offset-2">
      <div class = "card">
        <div class = "card-header">
          Add new pubs
        </div>
        <div class = "card-body">
          @if ($errors->any())
          <div class = "alert alert-danger">
            <ul>
              @foreach ($errors->all () as $$error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form method = "POST" action = "{{route('admin.pubs.store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for ="name"> Name </label>
              <input type = "text" class="form-control" id="name" name="name" value="{{old('name')}}" />
            </div>
            <div class="form-group">
              <label for ="owner"> Owner </label>
              <input type = "text" class="form-control" id="owner" name="owner" value="{{old('owner')}}" />
            </div>
            <div class="form-group">
              <label for ="times"> Times </label>
              <input type = "text" class="form-control" id="times" name="times" value="{{old('times')}}" />
            </div>
            <div class="form-group">
              <label for ="games"> Games </label>
              <input type = "text" class="form-control" id="games" name="games" value="{{old('games')}}" />
            </div>
            <div class="form-group">
              <label for ="discount"> Discount </label>
              <input type = "text" class="form-control" id="discount" name="discount" value="{{old('discount')}}" />
            </div>
            <div class="form-group">
              <label for ="location"> Location </label>
              <input type = "text" class="form-control" id="location" name="location" value="{{old('location')}}" />
            </div>
            <a href="{{route('admin.pubs.index')}}" class="btn btn-primary"> Cancel </a>
            <button type="submit" class="btn btn-primary float-right"> Submit </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
