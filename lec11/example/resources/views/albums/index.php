<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Album library</title>
    <link rel="stylesheet" href="<?php echo asset("css\app.css")?>">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


  </head>
  <body>
      <h1>Welcome!</h1>

      <div>
        <h2>Albums #<?php echo $count?></h2>
        <div id='albums'>
          <?php if(empty($albums)): ?>
            <p>No albums found :(</p>
          <?php else: ?>
            <ul>
              <?php foreach($albums as $album): ?>
                <li>
                  <?php echo $album->artist->name.": ".$album->name."(".count($album->tracks)." songs)"; ?>
                </li>
              <?php endforeach;?>
            </ul>
          <?php endif;?>
        </div>
        <a href='<?php echo route("albums.create")?>'><button>Add new</button></a>
      </div>

      
  </body>
</html>
