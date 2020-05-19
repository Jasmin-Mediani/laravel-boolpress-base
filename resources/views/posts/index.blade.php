<ul>
    @foreach ($posts as $post)
   
        <li> 
            <h2>
                {{$post->title}}
            </h2>
            <img src="{{$post->img}}" alt="">          
            <p>
                {{$post->body}}
            </p>
            <small>{{$post->author}}</small>
            <br><br><br>
        </li>

    @endforeach
</ul>
