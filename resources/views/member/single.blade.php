@extends('layout.private')

@section('content')

<div class="row mt-5">
    <div class="col">
        <h3>{{ $food -> food_name }}</h3>
    </div>
</div>

<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #ddd;
  }
  h3 {
  font-size: 36px;
  font-weight: bold;
  margin-top: -20px;
  margin-bottom: 20px;
}
</style>


<div class="row">
    <div class="col-4">
        <img src="{{ asset('public/storage/image/'.$food->image) }}" width="300" height="300" alt="" class="img-fluid">
    </div>
    <div class="col-8">
        <table>
            <tr>
                <td><strong>Category : </strong></td>
                <td>{{ $food->category->name}}</td>
            </tr>
            <tr>
                <td><strong>Location : </strong></td>
                <td>{{ $food->location->name}}</td>
            </tr>
            <tr>
                <td><strong>Description : </strong></td>
                <td>{{ nl2br($food -> food_description)}}</td>
            </tr>
            <tr>
                <td><strong>Uploaded at: </strong></td>
                <td>{{ $food -> created_at}}</td>
            </tr>
            <tr>
                <td><strong>Best Before : </strong></td>
                <td>{{ $food -> best_before}}</td>
            </tr>
            <tr>
                <td><strong>Uploaders Name : </strong></td>
                <td>{{ $food->user->name }}</td>
            </tr> 
            <tr>
                <td><strong>Uploaders Phone Number : </strong></td>
                <td>{{ $food->user->phone }}</td>
            </tr>
        </table>
    </div>
</div>

@endsection