<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    interface Animal { 
        public function makeSound();
    }
    class Cat implements Animal { 
        public function makeSound() { 
            echo "Meow";
        }
    }

    $animal = new Cat();
    $animal->makeSound();
    ?>
</body>
</html>