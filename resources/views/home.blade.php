<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>lunga: </h1>
    <ul>

      @foreach ($lunga as $card)
      <li>{{ $card['titolo'] }}</li>
      @endforeach
    </ul>

    <h1>corta: </h1>
    <ul>

      @foreach ($corta as $card)
      <li>{{ $card['titolo'] }}</li>
      @endforeach
    </ul>

    <h1>cortissima: </h1>
    <ul>

      @foreach ($cortissima as $card)
      <li>{{ $card['titolo'] }}</li>
      @endforeach
    </ul>



  </body>
</html>
