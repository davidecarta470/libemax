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
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dipendenti as $key => $dipendente)
        
          <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$dipendente->nome}}</td>
            <td>{{$dipendente->cognome}}</td>
            <td><a href="{{route('dipendenti.show',$dipendente->id)}}">vai al dipendente</a></td>
            
          </tr>
        
      @endforeach
    </tbody>
  </table>
  
</body>
</html>