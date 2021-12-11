

<!DOCTYPE html>
 <html>
    <head>
        <title>SoQuiz - Culture Generale</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <nav class="navbar navbar-light bg-light">
  <div class="cer-fluid">
    <a class="navbar-brand" href="/">
      <img
        src="https://www.so-buzz.fr/wp-content/uploads/2018/05/logo_full_noir.png"
      />
    </a>
  </div>
</nav> 
    </head>
     <body>
         <div class="container">
         <form action="{{ route("inscription_user") }}" method="POST">
                 @csrf
               <fieldset>                 
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input name="nom" type="text" class="form-control" id="nom" placeholder="nom">
                   <input hidden name="scores" type="number" class="form-control" id="scores" placeholder="scores" value="<?php echo(substr($_SERVER['REQUEST_URI'], 13, 10)); ?>">
                   <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Send
                </div>
               </fieldset>
             </form>
         </div>
    </body>
</html>