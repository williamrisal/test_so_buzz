
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>SoQuiz - Culture Generale</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<nav class="navbar navbar-light bg-light">
            <div class="cer-fluid">
                <a class="navbar-brand" href="/">
                    <img src="https://www.so-buzz.fr/wp-content/uploads/2018/05/logo_full_noir.png" />
                </a>
            </div>
        </nav>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
<body>
<div class="container">
  <h1>Score</h1>
  <table class="table table-dark">
    <thead>
        @foreach ($scores as $score )
      <tr>
     <td> {{ $score->name}}<td>
     <td> {{ $score->score}}<td>
         </tr>
         @endforeach
    </thead>
  </table>
</div>
</body>
</html>

