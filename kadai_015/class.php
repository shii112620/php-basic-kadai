<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function set_price(string $price) {
                $this->name = $price;
            }
            public function show_price() {
                echo $this->name . '<br>';
            }

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function set_height(string $height) {
                $this->name = $height;
            }
            public function show_height() {
                echo $this->name . '<br>';
            }

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        $food = new Food('potato', 250);

        print_r($food);

        echo '<br>';

        $animal = new Animal('dog', 60, 5000);

        print_r($animal);

        echo '<br>';

        $food->set_price(250);
        $food->show_price();

        $animal->set_height(60);
        $animal->show_height();
        ?>
    </p>
</body>