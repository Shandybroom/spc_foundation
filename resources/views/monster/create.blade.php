@extends('layout')
@section('script')
<script>

</script>
@endsection

@section('title','Monster List')

@section('container')

<div class="container mx-auto mt-5">

    <form method="POST" action="{{url('monster')}}" enctype="multipart/form-data">
        @csrf
        <div class="card bg-light">
            <div class="card-header">
                <h2><b>Add New Monster</b></h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="col-sm-2" for="name">Name</label>
                    <div class="col-sm-5">
                        <div class="form-line">
                            <input id='name' name='name' class="form-control" type="text" placeholder="Monsters Name">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2" for="code">SCP Code</label>
                    <div class="col-sm-2">
                        <div class="form-line">
                            <input id='code' name='code' class="form-control" type="text" placeholder="SCP-xxx">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2" for="alias">Alias</label>
                    <div class="col-sm-5">
                        <div class="form-line">
                            <input id='alias' name='alias' class="form-control" type="text" placeholder="Alias">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2" for="class">Class</label>
                    <div class="col-sm-2">
                        <div class="form-line">
                            <input id='class' name='class' class="form-control" type="text" placeholder="Class">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2" for="rank">Rank</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="rank" name="rank">
                            <option value="Safe">SAFE</option>
                            <option value="Normal">NORMAL</option>
                            <option value="Danger">DANGER</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="region">Region</label>
                    <div class="col-sm-4">
                        <textarea class="form-control" id="region" name="region" rows="2"
                            placeholder="Where it lives"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2" for="status">Status</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="status" name="status">
                            <option value="Wild">WILD</option>
                            <option value="Protected">PROTECTED</option>
                            <option value="Quarantine">QUARANTINE</option>
                            <option value="Extinct">EXTINCT</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="description">Description</label>
                    <div class="col-sm-4">
                        <textarea class="form-control" id="description" name="description" rows="4"
                            placeholder="What the Hell is that!"></textarea>
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
</div>
</div>
@endsection
