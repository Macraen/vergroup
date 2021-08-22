@extends('layouts/admin_layout')
@section('title', 'Наши проекты')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактор блока с проектами</h1>
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
                            <a href="/admin/dist/img/projects.png" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                                <img src="/admin/dist/img/projects.png" class="img-fluid mb-2" alt="black sample">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="{{ route('main.projects.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Главный текст</label>
                                <textarea type="text" class="form-control editor" name="main_text" id="exampleInputEmail1" placeholder="">{{$projects['main_text']}}</textarea>
                            </div>
                        </div>
                        <div class="card-body">
                            <label>Проект 1</label>
                            <div class="form-group">
                                <label for="exampleInputFile">Логотип</label>
                                <input type="text" id="feature_image1" value="{{$projects['logo1']}}" class="form-control" name="logo1" readonly>
                                <a href="{{$projects['logo1']}}" class="popup_selector" data-inputid="feature_image1">Выберите фото</a>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ccылка</label>
                                <input type="text" class="form-control" name="link1" id="year_experience1" value="{{$projects['link1']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Подпись</label>
                                <input type="text" class="form-control" name="name1" id="year_experience1" value="{{$projects['name1']}}">
                            </div>
                        </div>

                        <div class="card-body">
                            <label>Проект 2</label>
                            <div class="form-group">
                                <label for="exampleInputFile">Логотип</label>
                                <input type="text" id="feature_image2" value="{{$projects['logo2']}}" class="form-control" name="logo2" readonly>
                                <a href="{{$projects['logo2']}}" class="popup_selector" data-inputid="feature_image2">Выберите фото</a>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ccылка</label>
                                <input type="text" class="form-control" name="link2" id="year_experience1" value="{{$projects['link2']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Подпись</label>
                                <input type="text" class="form-control" name="name2" id="year_experience" value="{{$projects['name2']}}">
                            </div>
                        </div>

                        <div class="card-body">
                            <label>Проект 3</label>
                            <div class="form-group">
                                <label for="exampleInputFile">Логотип</label>
                                <input type="text" id="feature_image3" value="{{$projects['logo3']}}" class="form-control" name="logo3" readonly>
                                <a href="{{$projects['logo3']}}" class="popup_selector" data-inputid="feature_image3">Выберите фото</a>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ccылка</label>
                                <input type="text" class="form-control" name="link3" id="year_experience1" value="{{$projects['link3']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Подпись</label>
                                <input type="text" class="form-control" name="name3" id="year_experience1" value="{{$projects['name3']}}">
                            </div>
                        </div>

                        <div class="card-body">
                            <label>Проект 4</label>
                            <div class="form-group">
                                <label for="exampleInputFile">Логотип</label>
                                <input type="text" id="feature_image4" value="{{$projects['logo4']}}" class="form-control" name="logo4" readonly>
                                <a href="{{$projects['logo4']}}" class="popup_selector" data-inputid="feature_image4">Выберите фото</a>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ccылка</label>
                                <input type="text" class="form-control" name="link4" id="year_experience1" value="{{$projects['link4']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Подпись</label>
                                <input type="text" class="form-control" name="name4" id="year_experience1" value="{{$projects['name4']}}">
                            </div>
                        </div>

                        <div class="card-body">
                            <label>Проект 5</label>
                            <div class="form-group">
                                <label for="exampleInputFile">Логотип</label>
                                <input type="text" id="feature_image5" value="{{$projects['logo5']}}" class="form-control" name="logo5" readonly>
                                <a href="{{$projects['logo5']}}" class="popup_selector" data-inputid="feature_image5">Выберите фото</a>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ccылка</label>
                                <input type="text" class="form-control" name="link5" id="year_experience1" value="{{$projects['link5']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Подпись</label>
                                <input type="text" class="form-control" name="name5" id="year_experience1" value="{{$projects['name5']}}">
                            </div>
                        </div>

                        <div class="card-body">
                            <label>Проект 6</label>
                            <div class="form-group">
                                <label for="exampleInputFile">Логотип</label>
                                <input type="text" id="feature_image6" value="{{$projects['logo6']}}" class="form-control" name="logo6" readonly>
                                <a href="{{$projects['logo6']}}" class="popup_selector" data-inputid="feature_image6">Выберите фото</a>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ccылка</label>
                                <input type="text" class="form-control" name="link6" id="year_experience1" value="{{$projects['link6']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Подпись</label>
                                <input type="text" class="form-control" name="name6" id="year_experience1" value="{{$projects['name6']}}">
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

