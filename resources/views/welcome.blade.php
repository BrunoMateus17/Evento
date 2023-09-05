<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
      
    </head>
    <body>
            <h1>teste</h1>
            @if(10 > 5)
                <p>true</p>
            @endif
            <h1>{{$nome}}</h1>


            @for($i = 0; $i < count($arr);$i++)
                <p>{{ $arr[$i] }}</p>
            @endfor
            @php
                $name = "doido";
                echo $name;
            @endphp
            @foreach($names as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
            @endforeach
            <!-- comentario da blade -->
            {{-- asd --}}

    </body>
</html>
