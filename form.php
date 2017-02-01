<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
  <body>
    <form class="" action="submit_post.php" method="POST">
      <div class="titleInput">
        <label for="title">Titre</label>
        <input type="text" name="title" value="">
    </div>
    <div class="authorInput">
      <label for="author">Auteur</label>
      <input type="text" name="author" value="">
    </div>
    <div class="contentInput">
      <label for="content">Article</label>
      <textarea name="content" rows="8" cols="80"></textarea>
    </div>
    <button type="submit" name="button">Envoyer</button>
    </form>
  </body>
</html>
