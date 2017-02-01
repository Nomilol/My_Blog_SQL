<?php require 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username','root');
ORM::configure('password', 'root');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Blog</title>
  </head>
  <body>
    <h1>Mon blog</h1>

<?php

$id1 = ORM::for_table('posts')-> WHERE('author', 'Pierre Martin')->find_one();
  echo $id1->title . " ";
  echo $id1->content . " ";
  echo $id1->author . " " . $id1->created_at;
?>

<br>
<?php

$id2 = ORM::for_table('posts')->WHERE('author', 'Allan')->find_one();
  echo $id2->title . " ";
  echo $id2->content . " ";
  echo $id2->author . " " . $id2->created_at;
?>

<br>

<a href="form.php"><button type="button" name="button">Ajouter un article</button></a>


  </body>
</html>
