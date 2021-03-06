<?php
  include __DIR__ .'/db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title>eSound</title>
  </head>
  <body>
    <header>
       <img src="https://pbs.twimg.com/profile_images/1274694068254265344/aQ0ltExT.jpg" alt="e-sound">
       <h1>eSound</h1>
    </header>
    <main>
      <div class="container-cd">
        <?php foreach ($cd as $value) {?>
          <div class="cd">
            <img src="<?php echo $value["poster"]?>" alt="img">
            <h3><?php echo $value["author"]?></h3>
            <span id="title"><?php echo $value["title"]?></span>
            <span><?php echo $value["year"]?></span>
          </div>
        <?php } ?>
      </div>
    </main>
  </body>
</html>
