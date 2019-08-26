@extends('layout')
@section('script')
<script>

</script>
@endsection

@section('title','Monster List')

@section('container')

<div class="container mx-auto mt-4">
    <div class="row">
        <div class="col-sm-4">
            <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{$monster->name}}</strong></h5>
                    <p class="card-text"><i>{{$monster->alias}}<i></p>
                    <hr>
                    <p class="card-text">SCP Code : {{$monster->code}}</p>
                    <p class="card-text">Class : {{$monster->class}}</p>
                    <p class="card-text">Region : {{$monster->region}}</p>
                    <p class="card-text">Status : {{$monster->status}}</p>
                    <p class="card-text">Rank : {{$monster->rank}}</p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 offset-sm-1">
            <div class="card">
                <div class="card-body">
                    <img src="{{asset('/data_file/'.$monster->file)}}" class="card-img-top" alt="No Image Available" height="250">
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center">
        <div class="card-header">
            DESCRIPTION
        </div>
        <div class="card-body">
            <p class="card-text">{{$monster->description}}</p>
            <a href="{{url('monster')}}" class="btn btn-primary">Go back</a>
        </div>
        <div class="card-footer text-muted">
            {{$monster->code}}
        </div>
    </div>
</div>
@endsection