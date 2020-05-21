{{-- <ul>
    @foreach ($posts as $post)
   
        <li> 
            <h2>
                {{$post->title}}
            </h2>
            <img src="{{$post->img}}" alt="">          
            <p>
                {{$post->body}}
            </p>
            <small>{{$post->author}}</small> --}}
            {{-- devo metterle per forza lo slug perché sembra che sia obbligatorio per come l'ho settato nel db... non può essere null  --}}
            {{-- <small>{{$post->slug}}</small>
            <br><br><br>
        </li>

    @endforeach
</ul> --}}


{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Show</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">  
        <table class="table">
          <thead>
            <th>Titolo</th>
            <th>Autore</th>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                <td><a href="{{route('posts.show', $post->slug)}}">{{$post->title}}</a></td>
                  <td>Scritto da {{$post->author}}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
</body>
</html> --}}



