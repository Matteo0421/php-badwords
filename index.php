<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>

  <title>Form POST</title>
</head>
<body>

  <div class="container my-5">
    <div class="row">
      <div class="col-6">
      <form action="paginaDiAtterraggiio.php" method="POST">

        <div class="mb-3">
          <label class="form-label" placeholder="Scrivi il tuo paragrafo" >Paragrafo</label>
          <!-- l'input DEVE avere il name che è la variabile che viene inviata in POST e quindi letta
          Es name="indirizzo" -> la leggo come $_POST['indirizzo'] nella pagina di atterraggio -->
          <input name="paragrafo" type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label" placeholder="Cripta il tuo paragrafo con una password">password</label>
          <input name="password" type="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Invio</button>
      </form>
      </div>
    </div>
  </div>
  
</body>
</html>