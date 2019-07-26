@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('#table').DataTable({
            "iDisplayLength": 50
        });

    });
</script>
<script type="text/javascript">var centreGot = false;</script>
    {!!$map['js']!!}
@stop
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-home-map-marker text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Data Kampus</p>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0">{{$kampus->count()}}</h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-home mr-1" aria-hidden="true"></i> Total Data Kampus
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-account-box text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Datal User</p>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0">{{$user->count()}}</h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total Data User
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-book text-success icon-lg" style="width: 40px;height: 40px;"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Data Seminar</p>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"></h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-book mr-1" aria-hidden="true"></i> Total Data Seminar
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-backup-restore text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                        <p class="mb-0 text-right">Data Workshop</p>
                        <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"></h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total Data Workshop
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lokasi Perguruan Tinggi</h4>
                <div class="content" style="height:100%;">
                    {!!$map['html']!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
