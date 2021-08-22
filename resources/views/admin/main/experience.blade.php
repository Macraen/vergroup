@extends('layouts/admin_layout')
@section('title', 'Редактор блока опыта')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактор блока опыта</h1>
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
                            <a href="/admin/dist/img/experience.png" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                                <img src="/admin/dist/img/experience.png" class="img-fluid mb-2" alt="black sample">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="{{ route('main.experience.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
{{--                        <script type="application/javascript">--}}
{{--                            let Exp = 1;--}}
{{--                            function viewDiv(){--}}
{{--                                Exp = Exp + 1;--}}
{{--                                document.getElementById("div"+Exp).style.display = "block";--}}
{{--                            }--}}
{{--                        </script>--}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опыт работы</label>
                                <textarea type="text" class="form-control editor" name="experience_text1" id="experience_text1" placeholder="{{ $json['experience_text1'] }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Год</label>
                                <input type="number" class="form-control" name="year_experience1" id="year_experience1" value="{{ $json['year_experience1'] }}">
                            </div>
                        </div>
                        <div class="card-body" id="div2" style="display: none">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опыт работы</label>
                                <textarea type="text" class="form-control editor" name="experience_text2" id="experience_text2" placeholder="{{ $json['experience_text2'] }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Год</label>
                                <input type="number" class="form-control" name="year_experience2" id="year_experience2" value="{{ $json['year_experience2'] }}">
                            </div>
                        </div>
                        <div class="card-body" id="div3" style="display: none">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опыт работы</label>
                                <textarea type="text" class="form-control editor" name="experience_text3" id="experience_text3" placeholder="{{ $json['experience_text3'] }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Год</label>
                                <input type="number" class="form-control" name="year_experience3" id="year_experience3" value="{{ $json['year_experience3'] }}">
                            </div>
                        </div>
                        <div class="card-body" id="div4" style="display: none">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опыт работы</label>
                                <textarea type="text" class="form-control editor" name="experience_text4" id="experience_text4" placeholder="{{ $json['experience_text4'] }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Год</label>
                                <input type="number" class="form-control" name="year_experience4" id="year_experience4" value="{{ $json['year_experience4'] }}">
                            </div>
                        </div>
                        <div class="card-body" id="div5" style="display: none">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опыт работы</label>
                                <textarea type="text" class="form-control editor" name="experience_text5" id="experience_text5" placeholder="{{ $json['experience_text5'] }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Год</label>
                                <input type="number" class="form-control" name="year_experience5" id="year_experience5" value="{{ $json['year_experience5'] }}">
                            </div>
                        </div>
                        <div class="card-body" id="div6" style="display: none">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опыт работы</label>
                                <textarea type="text" class="form-control editor" name="experience_text6" id="experience_text6" placeholder="{{ $json['experience_text6'] }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Год</label>
                                <input type="number" class="form-control" name="year_experience6" id="year_experience6" value="{{ $json['year_experience6'] }}">
                            </div>
                        </div>
                        <div class="card-body" id="div7" style="display: none">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опыт работы</label>
                                <textarea type="text" class="form-control editor" name="experience_text7" id="experience_text7" placeholder="{{ $json['experience_text7'] }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Год</label>
                                <input type="number" class="form-control" name="year_experience7" id="year_experience7" value="{{ $json['year_experience7'] }}">
                            </div>
                        </div>
                        <div class="card-body" id="div8" style="display: none">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опыт работы</label>
                                <textarea type="text" class="form-control editor" name="experience_text8" id="experience_text8" placeholder="{{ $json['experience_text8'] }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Год</label>
                                <input type="number" class="form-control" name="year_experience8" id="year_experience8" value="{{ $json['year_experience8'] }}">
                            </div>
                        </div>
                        <!-- /.card-body -->
{{--                        <input type="button" class="btn btn-primary" value="Click" onmousedown="viewDiv()">--}}
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
{{--                        <script type="application/javascript">--}}
{{--                            window.onload = function() {--}}
{{--                                let user= document.getElementById("year_experience1").value;--}}
{{--                                if (user!="")--}}
{{--                                {alert("working")}--}}
{{--                                else{alert("not working")}--}}
{{--                            };--}}
{{--                        </script>--}}
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

