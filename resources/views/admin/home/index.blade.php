@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Главная</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
{{--            <div class="col-lg-3 col-6">--}}
{{--                <!-- small box -->--}}
{{--                <div class="small-box bg-info">--}}
{{--                    <div class="inner">--}}
{{--                        <h3>150</h3>--}}

{{--                        <p>New Orders</p>--}}
{{--                    </div>--}}
{{--                    <div class="icon">--}}
{{--                        <i class="ion ion-bag"></i>--}}
{{--                    </div>--}}
{{--                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- ./col -->
{{--            <div class="col-lg-3 col-6">--}}
{{--                <!-- small box -->--}}
{{--                <div class="small-box bg-success">--}}
{{--                    <div class="inner">--}}
{{--                        <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

{{--                        <p>Bounce Rate</p>--}}
{{--                    </div>--}}
{{--                    <div class="icon">--}}
{{--                        <i class="ion ion-stats-bars"></i>--}}
{{--                    </div>--}}
{{--                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $users}}</h3>

                        <p>Зарегестрировано</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('user.index') }}" class="small-box-footer">Больше информации  <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
{{--            <div class="col-lg-3 col-6">--}}
{{--                <!-- small box -->--}}
{{--                <div class="small-box bg-danger">--}}
{{--                    <div class="inner">--}}
{{--                        <h3>65</h3>--}}

{{--                        <p>Unique Visitors</p>--}}
{{--                    </div>--}}
{{--                    <div class="icon">--}}
{{--                        <i class="ion ion-pie-graph"></i>--}}
{{--                    </div>--}}
{{--                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
