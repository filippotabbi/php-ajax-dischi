<?php include_once __DIR__ .'/partials/db.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue Dischi</title>
    <link rel="stylesheet" href="./dist/css/master.css">
  </head>
  <body>
        <h1>DISCHI CONSIGLIATI </h1>
      <div class="container" id="root">
        <div class="select-mood">

          <span>seleziona il tuo genere preferito</span>
        <select class="" name="" value="">
          <option value="">All</option>
          <option value="rock">Rock</option>
          <option value="pop">Pop</option>
          <option value="jazz">Jazz</option>
          <option value="metal">Metal</option>
        </select>


        </div>
        <div class="cards-all">
          <?php foreach ($database as $disk ) {
          ?>
            <div class="card">

                <div class="card-cover" style="background-image: url('<?php echo $disk['poster'] ?>') ; ">
                </div>
                <div class="artista-titolo">
                  <span class="artista"> <?php echo $disk['author'] ?> </span> <br>
                  <span class="titolo"> <?php echo $disk['title'] ?> </span>
                </div>
                <div class="genere-anno">
                  <span> <?php echo $disk['year'] ?> </span>
                  <span> <?php echo $disk['author'] ?></span>
                </div>

            </div>
          <?php   } ; ?>
          </div>
      </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="./assets/js/main.js" charset="utf-8"></script> -->
  </body>
</html>
