<?php
include './db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Daniele Minieri">
        <title>PHP-OOP</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="./assets/pets.png">
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
        <!-- Stile -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <nav class="navbar">
                <div class="container-fluid">
                    <!-- Logo -->
                    <a href="#">
                        <img src="./assets/pets.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-top">
                    </a>
                    <!-- Titolo -->
                    <h2>PHPet Shop</h2>
                </div>
            </nav>
        </header>
        <!-- MAIN -->
        <main>
            <div class="container-fluid">
                <div class="row justify-content-evenly">
                    <!-- Cards -->
                    <?php foreach($products as $product):  ?>
                        <div class="card p-1 col-2 dc-card">
                            <h4 class="d-flex justify-content-between align-items-center">
                                <!-- Icona -->
                            <div class="dc-icon">
                                <img src="<?php  echo $product->category->icon ?>" alt="<?php  echo $product->name ?>">
                            </div>
                            <?php  echo get_class($product) ?></h4>
                            <!-- Immagine -->
                            <img src="<?php  echo $product->image ?>" class="card-img-top" alt="...">
                            <!-- Info -->
                            <div class="card-body text-center p-1">
                                <h5 class="card-title"><?php  echo $product->name ?></h5>
                                <h6 class="dc-green"><?php  echo $product->brand ?></h6>
                                <div class="details">
                                    <?php if(get_class($product) == 'Food'): ?>
                                    <p> <?php echo "<strong>Cibo: </strong>$product->format || <strong>Gusto: </strong>$product->flavour"?></p>
                                    <?php elseif(get_class($product) == 'Toy'): ?>
                                    <p><?php echo "<strong>Materiale: </strong>$product->material || <strong>Colore: </strong>$product->color"?></p>
                                    <?php else: ?>
                                    <p><?php echo "<strong>Materiali: </strong>$product->material || <strong>Dimensioni: </strong>$product->size"?></p>
                                    <?php endif; ?>
                                </div>
                                <p style="color:grey;" class="mb-0"><strong><?php echo $product->price ?>€</strong></p>
                                <a class="dc-green" href="#">Scopri il prodotto >></a>
                                <!-- Etichetta disponibilità -->
                                <?php if($product->is_available): ?>
                                    <div class="available triangle p-0"></div>
                                    <div>Disponibile</div>
                                <?php else: ?>
                                    <div class="not-available triangle"></div>
                                    <div>Non<br>disponibile</div>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </body>
</html>