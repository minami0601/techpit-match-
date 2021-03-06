<header class="mb-5">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="/">MINAMI</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                
                @if (Auth::check())
                
                    <li class="nav-item">{!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item"><a href="" class="nav-link">マイページ</a></li>
                    <li>{!! link_to_route('articles.create','記事を登録する',['id'=>Auth::id()],['class'=>'nav-link']) !!}</li>
                    
                @else
                
                    <li class="nav-item">{!! link_to_route('signup', '新規ユーザ登録', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                
                @endif
                
            </ul>
        </div>

    </nav>

</header>
