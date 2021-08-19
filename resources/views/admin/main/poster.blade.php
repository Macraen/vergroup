@extends('layouts/admin_layout')
@section('title', 'Редактор постера')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактор постера</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-6">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="row">
                                <a href="/admin/dist/img/poster.png" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                                    <img src="/admin/dist/img/poster.png" class="img-fluid mb-2" alt="black sample">
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="{{ route('main.poster.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Главный текст</label>
                                <textarea type="text" class="form-control editor" name="main_text" id="exampleInputEmail1" placeholder="">{{ $json['main_text'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Подпись</label>
                                <textarea type="text" class="form-control" name="small_text" id="exampleInputPassword1" placeholder="">{{ $json['small_text'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Кнопка</label>
                                <input type="text" class="form-control" name="button_text" id="exampleInputPassword1" value="{{ $json['button_text'] }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Фото</label>
                                <img src="{{ $json['image'] }}" alt="" class="img-uploaded" style="display: block; width: 200px">
                                <br>
                                <input type="text" id="feature_image" value="{{ $json['image'] }}" class="form-control" name="feature_image" readonly value="">
                                <a href="" class="popup_selector" data-inputid="feature_image">Выберите фото</a>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

