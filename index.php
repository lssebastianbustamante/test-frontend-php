<?php require_once('./public/php/products.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="./public/css/style.min.css">

    <!-- Title -->
    <title>Document</title>
</head>

<body>

    <main>

        <header class="header">

            <div class="header__offer flex flex-jc-c flex-ai-c">
                <p>!Aprovechá la promo! <span>Comprá hasta 12 cuotas sin interés</span></p>
                <div class="close-btn hide-for-desktop"></div>
            </div>

            <nav class="container flex flex-jc-sb flex-ai-c">
                <!-- Menu Mobile -->
                <div class="header__toggle hide-for-desktop">
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>

                <div class="header__logo">
                    <img src="./images/img/logo-descktop.svg" alt="">
                </div>

                <!-- Links Desktop -->
                <div class="header__links">
                    <ul class="hide-for-mobile">
                        <li><a href="#">shop</a>
                            <ul class="sub-menu">
                                <li><a href="#">pantalos</a></li>
                                <li><a href="#">remera</a></li>
                                <li><a href="#">campera</a></li>
                            </ul>
                        </li>
                        <li><a href="#" id="winter">real winter</a></li>
                        <li><a href="#">complementos</a></li>
                        <li><a href="#">editoriales</a></li>
                    </ul>
                </div>

                <div class="header__search">
                    <input type="text" placeholder="buscar" class="hide-for-mobile">
                    <button type="submit"></button>
                </div>

                <div class="header__cta">
                    <a href="#" id="login" class="hide-for-mobile">ingresar</a>
                    <a href="#" class="hide-for-mobile">carrito </a>
                    <span></span>
                </div>

            </nav>

        </header>

        <section class="shop container">

            <div class="shop__breadcrumb flex-ai-c">
                <ul>
                    <li>
                        <p><span></span> Invierno 2022</p>
                    </li>
                    <li>
                        <h1>Titulo de categoria</h1>
                    </li>
                </ul>
            </div>

            <div class="shop__wrap flex">
                <!-- Filtro Desktop -->
                <div class="left hide-for-mobile">
                    <p>Filtrar por</p>

                    <div class="sidebar">

                        <aside>
                            <button class="collapsible">Talle</button>
                            <div class="content">
                                <ul class="category">
                                    <li><input type="radio" value="35"><label>35</label></li>
                                    <li><input type="radio" value="36"><label>36</label></li>
                                    <li><input type="radio" value="37"><label>37</label></li>
                                    <li><input type="radio" value="38"><label>38</label></li>
                                    <li><input type="radio" value="39"><label>39</label></li>
                                    <li><input type="radio" value="40"><label>40</label></li>
                                    <li><input type="radio" value="41"><label>41</label></li>
                                </ul>
                            </div>

                            <button class="collapsible">color</button>
                            <div class="content">
                                <ul class="category">
                                    <li><input type="radio" value="35"><label>amarillo</label></li>
                                    <li><input type="radio" value="36"><label>blanco</label></li>
                                    <li><input type="radio" value="37"><label>hueso</label></li>
                                    <li><input type="radio" value="38"><label>marrón</label></li>
                                    <li><input type="radio" value="39"><label>negro</label></li>
                                    <li><input type="radio" value="40"><label>nude</label></li>
                                    <li><input type="radio" value="41"><label>rojo</label></li>
                                    <li><input type="radio" value="41"><label>Suela</label></li>
                                    <li><input type="radio" value="41"><label>vision</label></li>
                                </ul>
                            </div>

                            <button class="collapsible">precio</button>
                            <div class="content">
                                <ul class="category">
                                    <li><input type="radio" value=""><label>$2.000 - $3.000</label></li>
                                    <li><input type="radio" value=""><label>$3.000 - $4.000</label></li>
                                </ul>
                            </div>

                            <button class="collapsible">temporada</button>
                            <div class="content">
                                <ul class="category">
                                    <li><input type="radio" value="primaveraVerano"><label>primavera - verano</label>
                                    </li>
                                    <li><input type="radio" value="otonoInverno"><label>otoño - inverno</label></li>
                                </ul>
                            </div>

                            <button class="collapsible">material</button>
                            <div class="content">
                                <ul class="category">
                                    <li><input type="radio" value="35"><label>cuero</label></li>
                                    <li><input type="radio" value="36"><label>lona</label></li>
                                    <li><input type="radio" value="36"><label>tela</label></li>
                                    <li><input type="radio" value="36"><label>gamuza</label></li>
                                    <li><input type="radio" value="36"><label>políester</label></li>
                                </ul>
                            </div>

                        </aside>
                    </div>
                </div>
                <div class="right">
                    <div class="product">
                        <!-- Grilla Productos -->
                        <div class="product__grid">
                            <!-- Filtro Mobile -->
                            <div class="product__sort-mobile flex flex-ai-c hide-for-desktop">
                                <a href="#" id="sort-button">filtrá por <span><img src="/images/icons/mas.svg"
                                            alt=""></span></a>
                                <a href="">ordena por <span><img src="/images/icons/sort-arrow.svg" alt=""></span></a>
                                <div id="myNav" class="overlay">
                                    <a href="#" id="closebtn"></a>
                                    <div class="overlay__content">
                                        <p>filtrá por:</p>
                                        <div class="swatches">

                                           <form action="">
                                            <div class="size">
                                                <p>Talle:</p>
                                                <ul>
                                                    <li><input type="radio" value="36"><label>36</label></li>
                                                    <li><input type="radio" value="37"><label>37</label></li>
                                                    <li><input type="radio" value="38"><label>38</label></li>
                                                    <li><input type="radio" value="39"><label>39</label></li>
                                                    <li><input type="radio" value="40"><label>40</label></li>
                                                    <li><input type="radio" value="41"><label>41</label></li>
                                                    <li><input type="radio" value="42"><label>42</label></li>
                                                    <li><input type="radio" value="43"><label>43</label></li>
                                                </ul>
                                            </div>
                                            <div class="color">
                                                <p>Talle:</p>
                                                <ul>
                                                    <li><input type="radio" value="a"><label></label></li>
                                                    <li><input type="radio" value="b"><label></label></li>
                                                    <li><input type="radio" value="c"><label></label></li>

                                                </ul>
                                            </div>
                                            <div class="precio">
                                                <p>Precio:</p>
                                                <ul>
                                                    <li><input type="radio" value="primaveraVerano"><label>$2.000 -
                                                            $3.000</label></li>
                                                    <li><input type="radio" value="otonoInverno"><label>$3.000 -
                                                            $4.000</label></li>
                                                </ul>
                                            </div>

                                            <button class="btn btn-white">aplicar</button>
                                           </form>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- Ordenar por -->
                            <ul class="product__top-sort-by">
                                <li>
                                    <p>6 productos</p>
                                </li>
                                <li>
                                    <form action="" class="hide-for-mobile">
                                        <p>ordenar por:</p>
                                        <select name="sorting">
                                            <option value="relevancia">relevancia</option>
                                            <option value="mayorPrecio">mayor precio</option>
                                            <option value="menorPrecio">menor precio</option>
                                            <option value="aZ">a - z</option>
                                            <option value="zA">z - a</option>
                                        </select>
                                    </form>
                                </li>
                            </ul>
                            <!-- Productos -->
                            <?php 
                                for($i = 0; $i < count($items); $i++ ) { ?>

                                    <div class="product__item">
                                    <div class="product__image">
                                        <img class="theImage" src="<?= $items[$i]['imageSrc'] ?>" alt="">
                                        <p>-50 off</p>
                                    </div>
                                    <div class="product__detail">
                                        <p class="title"><?= $items[$i]['name'] ?></p>
                                        <p class="price"><span><?= $items[$i]['listPrice'] ?></span><?= $items[$i]['bestPrice'] ?></p>
                                        <p class="cuotas">hasta <span><?= $items[$i]['fees'] ?> cuotas</span></p>
                                    </div>
                                </div>
                                    
                                <?php }
                            
                            
                            ?>        
                            <button id="verMas" class="btn">Ver más productos</button>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- Footer -->
        <footer class="footer flex flex-jc-c flex-ai-c">
            <!-- Links Footer -->
            <div class="footer__link">
                <ul>
                    <li><a href="#">cambios y devoluciones</a></li>
                    <li><a href="#">envios</a></li>
                    <li><a href="#">medios de pago</a></li>
                    <li><a href="#">preguntas frecuentes</a></li>
                    <li><a href="#">venta mayorista</a></li>
                </ul>
            </div>
            <!-- Formularios suscripcion -->
            <div class="footer__form">
                <h3>news</h3>
                <p>suscribite y entérate de las promos!</p>
                <form action="post">
                    <input type="text" placeholder="Escribí tu Mail">
                    <a href="" class="btn">suscribete</a>
                </form>
            </div>
        </footer>
    </main>

    <!-- Script -->
    <script src="./app/js/script.js"></script>
</body>

</html>