<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php 
         
         class Personne {
            public $firstName;
            public function hello()
            {
              echo "hello, " .  $this -> firstName;
              return $this;
            } 
          }
            $personne1 = new Personne();
            $personne2 -> firstName = " Jonnie";
            $personne3 -> hello();
        ?>
    </div>
</body>
</html>