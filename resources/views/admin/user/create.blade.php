@extends('layouts/admin_layout')
@section('title', 'Добавление пользователей')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить пользователя</h1>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="InputEmail">Логин</label>
                                    <input type="text" class="form-control" id="InputLogin" name="InputLogin" placeholder="Логин" required>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail1">Почта</label>
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Почта" required>
                                </div>
                                <div class="form-group">
                                    <label for="InputPassword">Пароль</label>
                                    <input type="password" class="form-control" name="InputPassword" id="InputPassword" placeholder="Пароль" required>
                                </div>
                                <div class="form-group">
                                    <label>Тип аккаунта</label>
                                    <label for="InputRole"></label>
                                    <select class="form-control" id="InputRole" name="InputRole">
                                        <option selected value="1">Пользователь</option>
                                        <option value="3">Модератор</option>
                                        <option value="2">Администратор</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
