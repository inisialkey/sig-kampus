@section('js')

<script type="text/javascript">
    $(document).ready(function () {
        $(".users").select2();
    });

</script>

<script type="text/javascript">
    function readURL() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).prev().attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $(".uploads").change(readURL)
        $("#f").submit(function () {
            // do ajax submit or just classic form submit
            //  alert("fake subminting")
            return false
        })
    })

</script>
@stop

@extends('layouts.app')

@section('content')

<form action="{{ route('kampus.update', $data->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Data Kampus <b>{{$data->nama_kampus}}</b> </h4>
                            <form class="forms-sample">
                                <div class="form-group{{ $errors->has('nama_kampus') ? ' has-error' : '' }}">
                                    <label for="nama_kampus" class="col-md-4 control-label">Nama Kampus</label>
                                    <div class="col-md-6">
                                        <input id="nama_kampus" type="text" class="form-control" name="nama_kampus"
                                            value="{{ $data->nama_kampus }}" required>
                                        @if ($errors->has('nama_kampus'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama_kampus') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                    <label for="alamat" class="col-md-4 control-label">Alamat</label>
                                    <div class="col-md-6">
                                        <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="5" required>{{ $data->alamat }}</textarea>
                                        @if ($errors->has('alamat'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
                                    <label for="latitude" class="col-md-4 control-label">Latitude</label>
                                    <div class="col-md-6">
                                        <input id="latitude" type="text" class="form-control" name="latitude"
                                            value="{{ $data->latitude }}" required>
                                        @if ($errors->has('latitude'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('latitude') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
                                    <label for="longitude" class="col-md-4 control-label">Longitude</label>
                                    <div class="col-md-6">
                                        <input id="longitude" type="text" class="form-control" name="longitude"
                                            value="{{ $data->longitude }}" required>
                                        @if ($errors->has('longitude'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('longitude') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                                    <label for="telepon" class="col-md-4 control-label">Nomor Telepon</label>
                                    <div class="col-md-6">
                                        <input id="telepon" type="text" maxlength="15" class="form-control"
                                            name="telepon" value="{{ $data->telepon }}" required>
                                        @if ($errors->has('telepon'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telepon') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="gambar" class="col-md-4 control-label">Foto Kampus</label>
                                    <div class="col-md-6">
                                        <img width="200" height="200" @if($data->gambar)
                                        src="{{ asset('images/kampus/'.$data->gambar) }}" @endif />
                                        <input type="file" class="uploads form-control" style="margin-top: 20px;"
                                            name="gambar">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary" id="submit">
                                    Update
                                </button>
                                <a href="{{route('kampus.index')}}" class="btn btn-light pull-right">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection
