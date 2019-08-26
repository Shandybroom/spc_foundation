@extends('layout')
@section('script')
<script>

</script>
@endsection

@section('title','Monster List')

@section('container')

<div class="container mx-auto mt-5">
    
        <form method="PUT" action="{{url('monster/$id')}}">
            @csrf
            <h3>EDIT MONSTER</h3>
            <hr>
            <div class="form-group">
                    <label class="col-sm-2" for="name">Name</label>
                <div class="col-sm-5">
                    <div class="form-line">
                        <input id='name' name='name' class="form-control" type="text" value="{{$data->name}}">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                    <label class="col-sm-2" for="code">SCP Code</label>
                <div class="col-sm-2">
                    <div class="form-line">
                        <input id='code' name='code' class="form-control" type="text" value="{{$data->code}}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                    <label class="col-sm-2" for="alias">Alias</label>
                <div class="col-sm-5">
                    <div class="form-line">
                        <input id='alias' name='alias' class="form-control" type="text" value="{{$data->alias}}">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                    <label class="col-sm-2" for="class">Class</label>
                <div class="col-sm-2">
                    <div class="form-line">
                        <input id='class' name='class' class="form-control" type="text" value="{{$data->class}}">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
            <label class="col-sm-2" for="rank">Rank</label>
                <div class="col-sm-2">
                    <select class="form-control" id="rank" name="rank">
                        @if($data->rank=="Safe")
                            <option value="Safe" selected=true>SAFE</option>
                            <option value="Normal">NORMAL</option>
                            <option value="Danger">DANGER</option>
                        @elseif($data->rank=="Normal")
                            <option value="Safe">SAFE</option>
                            <option value="Normal" selected=true>NORMAL</option>
                            <option value="Danger">DANGER</option>
                        @else
                            <option value="Safe">SAFE</option>
                            <option value="Normal">NORMAL</option>
                            <option value="Danger" selected=true>DANGER</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2" for="region">Region</label>
                <div class="col-sm-4">
                    <textarea class="form-control" id="region" name="region" rows="2" >{{$data->region}}</textarea>
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2" for="status">Status</label>
                <div class="col-sm-2">
                    <select class="form-control" id="status" name="status">
                        @if($data->status=="Wild")
                            <option value="Wild" selected=true>WILD</option>
                            <option value="Protected">PROTECTED</option>
                            <option value="Quarantine">QUARANTINE</option>
                            <option value="Extinct">EXTINCT</option>
                        @elseif($data->status=="Protected")
                            <option value="Wild">WILD</option>
                            <option value="Protected" selected=true>PROTECTED</option>
                            <option value="Quarantine">QUARANTINE</option>
                            <option value="Extinct">EXTINCT</option>
                        @elseif($data->status=="Quarantine")
                            <option value="Wild">WILD</option>
                            <option value="Protected">PROTECTED</option>
                            <option value="Quarantine" selected=true>QUARANTINE</option>
                            <option value="Extinct">EXTINCT</option>
                        @else
                            <option value="Wild">WILD</option>
                            <option value="Protected">PROTECTED</option>
                            <option value="Quarantine">QUARANTINE</option>
                            <option value="Extinct" selected=true>EXTINCT</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2" for="description">Description</label>
                <div class="col-sm-4">
                    <textarea class="form-control" id="description" name="description" rows="4">{{$data->description}}</textarea>
                </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-2" for="file">File Upload</label>
                <div class="col-sm-4">
                    <input id='file' name='file' type="file">
                </div>
            </div>
            <hr>
            <button class="btn btn-primary" type="submit" value="Submit">Save Data</button>
        </form>
        <br>
</div>
@endsection
