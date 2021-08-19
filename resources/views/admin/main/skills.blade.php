@extends('layouts/admin_layout')
@section('title', 'Редактор блока навыков и клиентов')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактор блока навыков и клиентов</h1>
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
                            <a href="/admin/dist/img/skills.png" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                                <img src="/admin/dist/img/skills.png" class="img-fluid mb-2" alt="black sample">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="{{ route('main.skills.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Навыки</label>
                                <textarea type="text" class="form-control editor" name="skills" id="exampleInputEmail1" placeholder="">{{ $json['skills'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Клиенты</label>
                                <textarea type="text" class="form-control" name="clients" id="exampleInputPassword1" placeholder="">{{ $json['clients'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <img src="" alt="" class="img-uploaded" style="display: block; width: 64px">
                                <br>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="exampleInputFile">Иконка 1</label>
                                        <input type="text" id="feature_image1" value="{{ $json['ico1'] }}" class="form-control" name="feature_image1" readonly>
                                        <a href="" class="popup_selector" data-inputid="feature_image1">Выберите фото</a>
                                    </div>
                                    <div class="col-lg-3">`
                                        <label for="exampleInputFile">Иконка 2</label>
                                        <input type="text" id="feature_image2" value="{{ $json['ico2'] }}" class="form-control" name="feature_image2" readonly">
                                        <a href="" class="popup_selector" data-inputid="feature_image2">Выберите фото</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="exampleInputFile">Иконка 3</label>
                                        <input type="text" id="feature_image3" value="{{ $json['ico3'] }}" class="form-control" name="feature_image3" readonly>
                                        <a href="" class="popup_selector" data-inputid="feature_image3">Выберите фото</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="exampleInputFile">Иконка 4</label>
                                        <input type="text" id="feature_image4" value="{{ $json['ico4'] }}" class="form-control" name="feature_image4" readonly>
                                        <a href="" class="popup_selector" data-inputid="feature_image4">Выберите фото</a>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputFile">Иконка 2</label>--}}
{{--                                <img src="" alt="" class="img-uploaded" style="display: block; width: 64px">--}}
{{--                                <br>--}}
{{--                                <input type="text" id="feature_image" value="" class="form-control" name="feature_image" readonly value="">--}}
{{--                                <a href="" class="popup_selector" data-inputid="feature_image2">Выберите фото</a>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputFile">Иконка 3</label>--}}
{{--                                <img src="" alt="" class="img-uploaded" style="display: block; width: 64px">--}}
{{--                                <br>--}}
{{--                                <input type="text" id="feature_image" value="" class="form-control" name="feature_image" readonly value="">--}}
{{--                                <a href="" class="popup_selector" data-inputid="feature_image3">Выберите фото</a>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputFile">Иконка 4</label>--}}
{{--                                <img src="" alt="" class="img-uploaded" style="display: block; width: 64px">--}}
{{--                                <br>--}}
{{--                                <input type="text" id="feature_image" value="" class="form-control" name="feature_image4" readonly value="">--}}
{{--                                <a href="" class="popup_selector" data-inputid="feature_image">Выберите фото</a>--}}
{{--                            </div>--}}
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


