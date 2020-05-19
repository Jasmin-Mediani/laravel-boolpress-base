<ul>
    @foreach ($posts as $post)
   
        <li> 
            <h2>
                {{$post->title}}
            </h2>
            <small>{{$post->author}}</small>
            <p>
                {{$post->body}}
            </p>
        </li>

    @endforeach
</ul>
