@extends('layouts/master')

@section('script')
<script>
$(function () {
    $('#myTable').DataTable()
  })
</script>
@endsection

@section('container')
<div class="container">
    <div class="box-body">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>No</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Alias</th>
                    <th>Type</th>
                    <th>Rank</th>
                    <th>Status</th>
                    <th>Region</th>
                </tr>
            </thead>
                <tbody>
                @foreach($monster as $mtr)
                    <tr>
                        <th>
                            <!-- <a href="" class="badge badge-success">edit</a> -->
                            <a href="monster/{{$mtr->id}}" class="btn btn-primary">detail</a>
                        </th>
                        <th>{{$loop->iteration}}</th>
                        <th>{{$mtr->id}}</th>
                        <th>{{$mtr->name}}</th>
                        <th>{{$mtr->code}}</th>
                        <th>{{$mtr->alias}}</th>
                        <th>{{$mtr->class}}</th>
                        <th>{{$mtr->rank}}</th>
                        <th>{{$mtr->status}}</th>
                        <th>{{$mtr->region}}</th>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection
