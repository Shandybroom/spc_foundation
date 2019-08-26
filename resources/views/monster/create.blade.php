@extends('layouts.master')
@section('script')
<script>
$(function(){
    $('.select2').select2()
})
</script>
@endsection

@section('title','Monster List')

@section('container')

<div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <div class="box-tittle"><h3>Tambah Monster</h3></div>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <div class="box-body">
        <form method="POST" action="{{url('monster')}}" enctype="multipart/form-data">@csrf
        <div class="col-md-12">
        
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                        <label>Name</label>
                        <div class="form-line">
                            <input id='name' name='name' class="form-control" type="text" placeholder="Monsters Name" value="{{old('name')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-xs-4 {{$errors->has('code') ? 'has-error' : ''}}">
                        <label>SCP Code</label>            
                        <div class="form-line">
                            <input id='code' name='code' class="form-control" type="text" placeholder="SCP-xxx" value="SCP-" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-xs-4 {{$errors->has('class') ? 'has-error' : ''}}">
                        <label>Class</label>            
                        <div class="form-line">
                            <input id='class' name='class' class="form-control" type="text" placeholder="Classify" value="{{old('class')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-4">
                    <label>Rank</label>
                        <select class="form-control select2" style="width: 100%;" id="rank" name="rank">
                            <option value="Safe">SAFE</option>
                            <option value="Normal">NORMAL</option>
                            <option value="Danger">DANGER</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-xs-12 {{$errors->has('region') ? 'has-error' : ''}}">
                        <label>Region</label>            
                        <div class="form-line">
                            <input id='region' name='region' class="form-control" type="text" placeholder="Where it lives" value="{{old('region')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-4">
                    <label>Status</label>
                        <select class="form-control select2" id="status" name="status">
                            <option value="Wild">WILD</option>
                            <option value="Protected">PROTECTED</option>
                            <option value="Quarantine">QUARANTINE</option>
                            <option value="Extinct">EXTINCT</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group col-xs-12 {{$errors->has('alias') ? 'has-error' : ''}}">
                    <label>Alias</label>            
                    <div class="form-line">
                        <input id='alias' name='alias' class="form-control" type="text" placeholder="As Know As" value="{{old('alias')}}" required>
                    </div>
                </div>
                <div class="form-group col-xs-12 {{$errors->has('description') ? 'has-error' : ''}}">
                    <label>Description</label>            
                    <div class="form-line">
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="What the Hell is that!" value="{{old('description')}}" required></textarea>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <label>File Upload</label>            
                    <div class="form-line">
                        <input id='file' name='file' type="file">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="form-group">
                    <div class="col-xs-2 col-xs-offset-4">
                        <a href="{{url('monster')}}" type="button" class="btn btn-warning">
                            <i class="fa fa-fw fa-remove"></i>
                            Cancel
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <button class="btn btn-primary" type="submit" value="Submit">
                        <i class="fa fa-fw fa-save"></i> Save Data</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        </div>
        </div>
    </div>
</div>
@endsection
