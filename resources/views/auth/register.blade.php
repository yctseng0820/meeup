@extends('layouts.app')
@section('content')
<div class="detail">
    <div class="am-g am-container">
        <div class="am-u-lg-12">
            <h1 class="detail-h1">Sign Up</h1>
        </div>
    </div>
</div>


<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

        <form method="post" class="am-form">
            @csrf
            <div class="am-form-group am-form-icon am-form-feedback {{ $errors->has('name') ? ' am-form-error ' : '' }}">
                <label class="am-form-label" for="email">用户名: </label>
                <input type="text" id="name" name="name" class="am-form-field" placeholder="输入你的用户名" >
                @if ($errors->has('name'))
                    <span class="am-icon-warning" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="am-form-group am-form-icon am-form-feedback {{ $errors->has('email') ? ' am-form-error ' : '' }}">
                <label class="am-form-label" for="email">邮箱: </label>
                <input type="text" id="email" name="email" class="am-form-field" placeholder="输入你的邮箱">
                @if ($errors->has('email'))
                    <span class="am-icon-warning" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="am-form-group am-form-icon am-form-feedback {{ $errors->has('password') ? ' am-form-error ' : '' }}">
                <label class="am-form-label" for="password">密码: </label>
                <input type="password" name="password" id="password" class="am-form-field" placeholder="输入你的密码">
                @if ($errors->has('password'))
                    <span class="am-icon-warning" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="am-form-group am-form-icon am-form-feedback">
                <label class="am-form-label" for="password_confirmation">重复密码: </label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="am-form-field"
                       placeholder="请重新输入你的密码">
            </div>

            <hr>
            <div class="am-cf">
                <input type="submit" value="Login" class="am-btn am-btn-primary am-btn-sm am-fl">
                <a href="password_reset.html" class="am-btn am-btn-default am-btn-sm am-fr">Forget Password ^_^?</a>
            </div>
        </form>
        <br>
    </div>
</div>
@endsection