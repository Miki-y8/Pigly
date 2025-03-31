@extends('layouts.app')



@section('content')

<h2 class="login-form__heading content__heading">ログイン</h2>


<form class="register-form__form" action="/register/register2" method="post">
@csrf

<label class="register-form__label" for="email">メールアドレス</label>
<input class="register-form__input" type="mail" name="email" id="email" placeholder="メールアドレスを入力">

<label class="register-form__label" for="password">パスワード</label>
<input class="register-form__input" type="password" name="password" id="password" placeholder="パスワードを入力">

<input class="register-form__btn btn" type="submit" value="ログイン">

</form>
@endsection('content')