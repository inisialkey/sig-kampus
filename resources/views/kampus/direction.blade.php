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
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Cek Rute Perjalanan</h4>
                <div class="content" style="height:100%;">
                    {!!$map['html']!!}
                    <div id="directionsDiv"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
