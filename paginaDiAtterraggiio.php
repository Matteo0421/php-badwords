<?php

  $paragrafo = $_POST['paragrafo'];
  $password = $_POST['password'];

  $lunghezza_paragrafo = strlen($paragrafo);

  $password_censured = str_repeat('*', strlen($password));

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>

  <title>Ricevo from POST</title>
</head>
<body>

  <div class="container my-5 mt-5 ">
    <h1 class="text-center mb-5">Paragrafo: <?php echo $paragrafo ?></h1>
    <h1 class="text-center text-danger ">Password: <?php echo $password ?></h1>
    <h1 class="text-center mb-5">Lunghezza del paragrafo: <?php echo $lunghezza_paragrafo ?> caratteri</h1>
    <h1 class="text-center text-danger " >Password: <?php echo $password_censured ?></h1>
  </div>
  
</body>
</html>
