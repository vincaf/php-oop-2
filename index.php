<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    
    <?php
    
        include_once __DIR__ . "./Models/User.php";
        include_once __DIR__ . "./Models/RegisteredUser.php";
        include_once __DIR__ . "./Models/CreditCard.php";
        include_once __DIR__ . "./Models/Product.php";
        include_once __DIR__ . "./Models/Toy.php";
        include_once __DIR__ . "./Models/Food.php";

        $creditCard1 = new CreditCard("1111-2222-3333-4444", "10-27", "000");
        var_dump($creditCard1);
        $creditCard2 = new CreditCard("2222-3333-4444-5555", "12-24", "222");
        var_dump($creditCard2);

        $user1 = new User("Paolo", "Bitta", "Via Delle Città, Milano", $creditCard1);
        var_dump($user1);
        $user2 = new RegisteredUser("luca85", "ladirezione", "Luca", "Nervi", "Via Della Vespa, Milano", $creditCard2);
        var_dump($user2);

        $product1 = new Toy("osso", "3", "toys", "gomma", "blue");
        var_dump($product1);
        $product2 = new Food("Carne in scatola", "5", "food", "12-2023", "carne di pollo");
        var_dump($product2);

    ?>
</body>
</html>