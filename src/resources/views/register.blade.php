@extends('layouts.app')



@section('content')

<div class="login-form">
    <h2 class="login-form__heading content__heading">新規会員登録</h2>

    <p class="login-form__heading guide__heading">STEP1 アカウント情報の登録</p>

    <form class="register-form__form" action="/register/register2" method="post">
    @csrf

    <label class="register-form__label" for="name">お名前</label>
    <input class="register-form__input" type="text" name="name" id="name" placeholder="名前を入力">

    <label class="register-form__label" for="email">メールアドレス</label>
    <input class="register-form__input" type="mail" name="email" id="email" placeholder="メールアドレスを入力">

    <label class="register-form__label" for="password">パスワード</label>
    <input class="register-form__input" type="password" name="password" id="password" placeholder="パスワードを入力">

    <input class="register-form__btn btn" type="submit" value="次に進む">

    <a class="login__link" href="/login">ログインはこちら</a>

    </form>

</div>
@endsection('content')