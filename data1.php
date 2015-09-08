<?PHP
  $text=file_get_contents('php://input',true);
  $name=$_GET['name'];
    echo $name.$text.'_post';
?>