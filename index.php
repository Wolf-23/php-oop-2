<?php
    require_once __DIR__ . '/class/Realtor.php';
    require_once __DIR__ . '/class/Customer.php';
    require_once __DIR__ . '/class/ForSale.php';
    require_once __DIR__ . '/class/Rent.php';

    $realtor_1 = new Realtor('Riccardo', 'Lupinu', 'classe69@boolean.com', 'classe69', 'Via Roma 86', '07100', 'Sassari', 12345);
    $customer_1 = new Customer('Mario', 'Rossi', 'mario.rossi@gmail.com', 'rossimario', 'Via Milano' , '07100', 'Sassari', 789789);
    $saleProperty_1 = new ForSale('Appartamento', 'SUB7', '187' , '200000', 'Via Genova', '07100', 'Sassari');
    $saleProperty_2 = new ForSale('Villetta', 'SUB2', '250' , '350000', 'Viale Umberto', '81536', 'MIlano');
    $saleProperty_3 = new ForSale('Garage', 'SUB12', '35' , '16000', 'Via Mazzini', '14595', 'Pistpia');
    $rentProperty_1 = new Rent('Appartamento', 'SUB7', '97', '450', 'Viale Torino', '07100', 'Sassari');
    $rentProperty_2 = new Rent('Garage', 'SUB12', '27', '250', 'Via Amendola', '54367', 'Torino');
    $rentProperty_3 = new Rent('Villetta', 'SUB2', '215', '3000', 'Via Parigi', '14698', 'Bologna');
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>PHP OOP 2</title>
</head>
<body>
    <header>
        <div>
            <h2 class="realtor-title">Agente Immobiliare:</h2>
            <?php
                $realtor_1->getInformation();
            ?>
        </div>
        <div>
            <h2 class="customer-title">Cliente:</h2>
            <?php
                $customer_1->getInformation();
            ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="for-sale">
                <h2>Appartamenti in Vendita:</h2>
                <div class="propcontainer">
                    <div class="card">
                        <?php 
                        $saleProperty_1->getPropertyInfo();
                        $saleProperty_1->getPrice();
                        ?>
                    </div>
                    <div class="card">
                        <?php 
                        $saleProperty_2->getPropertyInfo();
                        $saleProperty_2->getPrice();
                        ?>
                    </div>
                    <div class="card">
                        <?php 
                        $saleProperty_3->getPropertyInfo();
                        $saleProperty_3->getPrice();
                        ?>
                    </div>
                </div>
            </div>
            <div class="rent">
                <h2>Appartamenti in Affitto:</h2>
                <div class="propcontainer">
                    <div class="card">
                        <?php 
                            $rentProperty_1->getPropertyInfo();
                            $rentProperty_1->getPrice();
                        ?>
                    </div>
                    <div class="card">
                        <?php 
                            $rentProperty_2->getPropertyInfo();
                            $rentProperty_2->getPrice();
                        ?>
                    </div>
                    <div class="card">
                        <?php 
                            $rentProperty_3->getPropertyInfo();
                            $rentProperty_3->getPrice();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>