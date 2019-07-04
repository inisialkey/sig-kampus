@section('js')
<script type="text/javascript">
    var table = $('#kampus').DataTable({
            autoWidth: false,
            columnDefs : [
                {
                        "targets":    [ 1 ],
                        "visible":    false
                },
                {
                        "width": "10%",
                        "targets": [ 0,2,3,4,5 ]
                }
            ],
        });

</script>
@stop
@extends('layouts.app')

@section('content')
<div class="row">

    <div class="col-lg-2">
        <a href="{{ route('kampus.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>
            Tambah Data</a>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <form action="{{ url('import_kampus') }}" method="post" class="form-inline" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-group {{ $errors->has('importKampus') ? 'has-error' : '' }}">
                <input type="file" class="form-control" name="importKampus" required="">

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-success"
                        style="height: 38px;margin-left: -2px;">Import</button>
                </span>
            </div>
        </form>
    </div>

    <div class="col-lg-12">
        @if (Session::has('message'))
        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">
            {{ Session::get('message') }}</div>
        @endif
    </div>
</div>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title pull-left">Data Kampus</h4>
                <a href="{{url('format_kampus')}}" class="btn btn-xs btn-info pull-right">Format Data Kampus</a>
                <div class="table-responsive">
                    <table class="table table-striped" id="kampus" style="max-width: 100%; display: block; white-space: word-wrap: break-word;">
                        <thead>
                            <tr>
                                <th>
                                    Nama Kampus
                                </th>
                                <th>
                                    Alamat
                                </th>
                                <th>
                                    Latitude
                                </th>
                                <th>
                                    Longitude
                                </th>
                                <th>
                                    Nomor Telepon
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td class="py-1">
                                    @if($data->gambar)
                                    <img src="{{url('images/kampus/'. $data->gambar)}}" alt="image"
                                        style="margin-right: 10px;" />
                                    @else
                                    <img src="{{url('images/kampus/default.png')}}" alt="image"
                                        style="margin-right: 10px;" />
                                    @endif
                                    <a href="{{route('kampus.show', $data->id)}}">
                                        {{$data->nama_kampus}}
                                    </a>
                                </td>
                                <td>

                                    {{$data->alamat}}

                                </td>

                                <td>
                                    {{$data->latitude}}
                                </td>
                                <td>
                                    {{$data->longitude}}
                                </td>
                                <td>
                                    {{$data->telepon}}
                                </td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start"
                                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                            <a class="dropdown-item" href="{{route('kampus.direction', $data->id)}}"> Cek Rute
                                            </a>
                                            <a class="dropdown-item" href="{{route('kampus.edit', $data->id)}}"> Edit
                                            </a>
                                            <form action="{{ route('kampus.destroy', $data->id) }}" class="pull-left"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="dropdown-item"
                                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                    Delete
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{--  {!! $datas->links() !!} --}}
            </div>
        </div>
    </div>
</div>
@endsection
