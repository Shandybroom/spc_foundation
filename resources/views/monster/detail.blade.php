@extends('layouts.master')
@section('script')
<script>

</script>
@endsection

@section('title','Monster List')

@section('container')

<div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3><strong>{{$monster->name}}</strong></h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="card-text"><i>{{$monster->alias}}<i></p>
                    <hr>
                    <p class="card-text">SCP Code : {{$monster->code}}</p>
                    <p class="card-text">Class : {{$monster->class}}</p>
                    <p class="card-text">Region : {{$monster->region}}</p>
                    <p class="card-text">Status : {{$monster->status}}</p>
                    <p class="card-text">Rank : {{$monster->rank}}</p>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('/data_file/'.$monster->file)}}" class="card-img-top" alt="No Image Available" height="250">
                </div>
            </div>
        </div>
        <div class="box-body align-center">
            <h4>DESCRIPTION</h4>
            <hr>
            <p class="card-text">{{$monster->description}}</p>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="form-group">
                    <a href="{{url('monster')}}" type="button" class="btn btn-warning">
                        <i class="fa fa-fw fa-mail-reply"></i>
                        Go Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection