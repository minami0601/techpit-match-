@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">新規ユーザー登録</h3>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  <label for="term">何期生ですか？</label>
                  <select class="w-100 px-1 py-2" name="term" id="term">
                    <option value="" >選択してください</option>
                    @foreach (config('const.term') as $key => $val)
                        <option value="{{ $val }}" >{{ $val }}</option>
                    @endforeach
                  </select>
                </div>


                {!! Form::submit('新規登録', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}

        </div>
    </div>

@endsection
