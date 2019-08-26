@extends('layouts/master')

@section('script')
<script>
    $(function () {
        $('#myTable').DataTable()
    })
</script>
@endsection

@section('container')
<div class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">Monster List :</div>
                    <hr>
                    <p class="text-light">Monster SPC terbagi atas beberapa Rank atau tingkat berbahaya.</p>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><strong>Safe</strong> : Monster dalam rank ini terdaftar sebagai monster yang aman dan tidak berbahaya sama sekali.</li>
                        <li class="list-group-item list-group-item-primary"><strong>Normal</strong> : Monster dalam rank ini termasuk aman namun akan menyerang apabila diganggu.</li>
                        <li class="list-group-item list-group-item-danger"><strong>Danger</strong> : Monster dalam rank ini terdaftar sebagai monster yang berbahaya dan sudah memiliki riwayat membunuh Manusia atau makhluk lainnya.</li>
                    </ul>
                    <br>
                    <a href="{{url('monster/create')}}" type="button" class="btn btn-primary">
                    <i class="fa fa-fw fa-plus"></i>
                    <strong>Add Monster</strong></a>
                </div>
                
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
                                    <a href="monster/{{$mtr->id}}" class="btn btn-primary"><i class="fa fa-fw fa-book"></i> detail</a>
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
            </div>
        </div>
    </div>

</div>
@endsection
