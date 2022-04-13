<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/app.css" rel="stylesheet">
  <title>Document</title>
  
</head>
<body>

    <h1>
      Dipendente : {{$dipendente->nome}} {{$dipendente->cognome}}
    </h1>
    <div>
      @foreach ($bedgiature as $bedgiatura)
      
        @if ($bedgiatura->verso === 'E')
          <strong>Entrata</strong> : {{$bedgiatura->ora}}
        @elseif($bedgiatura->verso === 'U')
          <strong>Uscita</strong> : {{$bedgiatura->ora}} <br>
        @endif  
      @endforeach
    </div>

    <div>
      

  
</body>
</html>