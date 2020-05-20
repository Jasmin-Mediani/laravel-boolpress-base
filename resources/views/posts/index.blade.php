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
            {{-- devo metterle per forza lo slug perché sembra che sia obbligatorio per come l'ho settato nel db... non può essere null  --}}
            <small>{{$post->slug}}</small>
            <br><br><br>
        </li>

    @endforeach
</ul>
