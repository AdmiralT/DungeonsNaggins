@extends ('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class = "col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Pub: {{$pub->name}}
        </div>
        <div class="card-body">
          <table id="table-pubs" class="table table-hover">
            <tbody>
              <tr>
                <td>Name</td>
                <td>{{$pub->name}}
              </tr>
              <tr>
                <td>Owner</td>
                <td>{{$pub->owner}}
              </tr>
              <tr>
                <td>Times</td>
                <td>{{$pub->times}}
              </tr>
              <tr>
                <td>Games</td>
                <td>{{$pub->games}}
              </tr>
              <tr>
                <td>Discount</td>
                <td>{{$pub->discount}}
              </tr>
              <tr>
                <td>Location</td>
                <td>{{$pub->location}}
              </tr>
            </tbody>
          </table>
          <a href="{{ route('user.pubs.index', $pub->id) }}" class="btn btn-default">Back</a>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
