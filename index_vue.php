<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title>eSound</title>
  </head>
  <body>
    <div id="app">
      <header>
         <img src="https://pbs.twimg.com/profile_images/1274694068254265344/aQ0ltExT.jpg" alt="e-sound">
         <h1>eSound</h1>
      </header>
      <main>
        <div class="container-cd">
          <div  v-for="cd in all_cd" class="cd">
            <img :src="cd.poster" alt="cd.author">
            <h3>{{cd.author}}</h3>
            <span id="title">{{cd.title}}</span>
            <span>{{cd.year}}</span>
          </div>
        </div>
      </main>
    </div>
    <script src="js/script.js"charset="utf-8"></script>
  </body>
</html>
