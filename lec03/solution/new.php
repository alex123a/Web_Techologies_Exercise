<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">    <!-- specifies encoding -->
    <title>Album library</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/ex01.js"></script>
    <script src="scripts/ex02.js"></script>
    <!-- decide one script for validation -->
    
    <!--  <script src="scripts/ex03.js"></script>-->
    <script src="scripts/ex04.js"></script>

    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
      <h1>New Album</h1>
      
      <form action="create.php" method="POST" >
          <div class='grid inputGroup'>
            <label> Name: </label>
            <input type="text" name="name" id="name" class="inputForm"/>
            <div class="invalid-feedback">Please provide a valid name.</div>
          </div>
          <div class='grid inputGroup'>
            <label> Year: </label>
            <input type="number" name="year" id="year" class="inputForm"/>
            <div class="invalid-feedback">Please provide a valid year.</div>
          </div>
          <div class='grid inputGroup'>
            <label> Artist: </label>
            <?php $artists = ["matt_elliott" => "Matt Elliott", "low_roar" => "Low Roar", "mum" => "Múm"]; ?>
            <select name="artist" id="artist" class="inputForm">
              <?php foreach($artists as $key => $name): ?>
              <option value="<?php echo $key;?>"><?php echo $name;?></option>
              <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">Please provide a valid name.</div>
          </div>
          <div class='inputGroup'>
            <input type="radio" id="single" name="type" value="single">
            <label for="single">Single</label>
            <input type="radio" id="ep" name="type" value="ep">
            <label for="ep">EP</label>
            <input type="radio" id="album" name="type" value="album">
            <label for="album">Album</label>
            <div class="invalid-feedback">Please provide a valid type.</div>
          </div>
          <div class='grid'>
            <label> Description: </label>
            <textarea  name="description" id="description" class="inputForm"></textarea>
          </div>
          <div class='grid tracks inputGroup'>
            <label> Tracks: </label>
            <div class='grid inputs'>
              <div class = 'track'>
                <input type="text" name="track[]" class="inputForm"/>
                <button class="remove" type='button' disabled='disabled' >Remove</button>
              </div>
            </div>
            <button type='button' class="add">Add</button>
            <div class="invalid-feedback">Please provide at least one track.</div>
          </div>
          <input type="submit" value="Submit">
      </form>
  </body>
</html>
