<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>カリキュラム08-4</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            {{ csrf_field() }}
            @method("PUT")
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
                <p class="title_error" style="color:red">{{ $errors->first("post.title") }}</p>
            </div>
            <div class="body">
                <h2>メッセージ</h2>
                <textarea name="post[body]" placeholder="メッセージ">{{ $post->body }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first("post.body") }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
    </body>
</html>
