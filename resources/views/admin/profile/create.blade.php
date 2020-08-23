{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- proflile.blade.phpの@yield('title')に'プロフィール新規作成'を埋め込む --}}
@section('title','プロフィールの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを読み込む --}}
@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィールの新規作成</h2>
            </div>
        </div>
    </div>
＠endsection