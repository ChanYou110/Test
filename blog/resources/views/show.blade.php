<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>カリキュラム08-3</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <div class="post">
            <h2 class="title">{{ $post->title }}</h2>
            <p class="body">{{ $post->body }}</p>
            <p class="updated_at">{{ $post->updated_at }}</p>
        </div>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" sttyle="display:inline">
            @csrf
            @method("DELETE")
            <input type="submit" name="delete" value="削除" onClick="delete_alert(event);return false;">
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        <script>
            function delete_alert(e){
                if(window.confirm('本当に削除しますか？')) {
                    document.getElementById('form_delete').submit();
                    window.alert('削除しました。');
                }
            };
        </script>
    </body>
</html>
