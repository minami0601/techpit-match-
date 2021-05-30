@extends('layouts.app')

@section('content')


    <div class="text-right">

        {{ Auth::user()->name }}

    </div>

        <h2 class="mt-5">記事投稿</h2>

        {!! Form::open(['route'=>'articles.store']) !!}
            <div class="form-group mt-5">

                {!! Form::label('title','タイトル',['class'=>'mt-3']) !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}

                {!! Form::label('url','関連URL',['class'=>'mt-3']) !!}
                {!! Form::text('url',null,['class'=>'form-control']) !!}
                
                {!! Form::label('summary','記事詳細',['class'=> 'mt-3']) !!}
                {!! Form::text('summary',null,['class'=>'form-control']) !!}
                <label for="category_id" class="mt-3">カテゴリー</label>
                <select 
                    id="category_id"
                    name="category_id"
                    class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
                    value="{{ old('category_id') }}"
                >
                    @foreach($categories as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                {!! Form::submit('投稿する',['class'=> 'button btn btn-primary mt-5 mb-5']) !!}
            </div>
        {!! Form::close() !!}



@endsection
