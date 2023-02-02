<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LaptopsG&D</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
    <a href="https://wa.me/50376797564?text=Hola%me@%20encuentro%20interesado%20en%20contactar%20por%20un%20servicio"
        class="wa" id="btnCarrito">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-whatsapp"
            viewBox="0 0 16 16">
            <path
                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
        </svg>
    </a>
    <!-- Navigation-->
    <div class="container-fluid" style="background-color:#2499BF">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2499BF">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="management/resources/img/logos/iconPNG.png" alt="logo 1" width="50" height="45"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a style="font-family:Verdana,Arial,Helvetica" href="#guia" class="nav-link"
                                category="all">Todo</a>

                        </li>
                        <li class="nav-item">
                            <a style="font-family:Verdana,Arial,Helvetica" href="nosotros.php" class="nav-link"
                                category="all">Sobre nosotros</a>

                        </li>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                        <li class="nav-item">
                            <a style="font-family:Verdana,Arial,Helvetica" href="#guia" class="nav-link"
                                category="<?php echo $data['categoria']; ?>">
                                <?php echo $data['categoria']; ?>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a href="https://www.facebook.com/LaptospGyD">
                                <button type="button" class="btnnav btn btn-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </button>
                            </a>
                            <a
                                href="https://wa.me/50376797564?text=Hola%20me%20encuentro%20interesado%20en%20contactar%20para%20agendar%20cita">
                                <button type="button" class="btnnav btn btn-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg>
                                </button>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="css-xfq28i"></div>
    </div>

    <!-- Header-->
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1">
                    <div class="overlay"></div>
                </div>
                <div class="hero">
                    <hgroup>
                        <h1>LaptopsG&D</h1>
                        <h3>Llevamos tu PC al siguiente nivel</h3>
                    </hgroup>
                    <br>
                    <p style="text-align: center;"><a class="button" href="tel:+50376797564" rel="nofollow">Clic Aquí,
                            Llámenos</a></p>
                    <p style="text-align: center;"><a class="buttone"
                            href="https://wa.me/50376797564?text=Hola%20me%20encuentro%20interesado%20en%20contactar%20para%20agendar%20cita"
                            rel="nofollow">Chatea, Clic Aquí</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid problemas" style="background-color:#2499BF">
        <br>
        <div class="d-flex justify-content-center">
            <h3>¿Problemas con tu PC? Contáctanos</h3>
        </div>
        <br>
    </div>

    <div class="container-fluid text-center py-5 px-5 mensajes tr">
        <div class="row justify-content-center">
            <div class="col">
                <h3 style="color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path
                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                        <path
                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                    </svg>
                    Repuestos en Baterías
                </h3>
            </div>
            <div class="col">
                <h3 style="color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path
                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                        <path
                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                    </svg>
                    Repuestos en Teclados
                </h3>
            </div>
            <div class="col">
                <h3 style="color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path
                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                        <path
                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                    </svg>
                    Repuestos en Cargadores
                </h3>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            <?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?>
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">
                                    <?php echo $data['nombre'] ?>
                                </h5>
                                <p>
                                    <?php echo $data['descripcion']; ?>
                                </p>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">
                                    <?php echo $data['precio_normal'] ?>
                                </span>
                                <?php echo $data['precio_rebajado'] ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent d-flex justify-content-center" a
                            href="https://wa.me/50322614705?text=Estoy%20interesad@%20en%20este%20producto:%20<?php echo $data['nombre'] ?> + %20de%20$ <?php echo $data['precio_normal']?>+ "">
                                    <a class=" wp"
                                    href="https://wa.me/50322614705?text=Estoy%20interesad@%20en%20este%20producto:%20<?php echo $data['nombre'] ?> + %20de%20$ <?php echo $data['precio_normal']?>+ "">
                                        <i class=" fab fa-whatsapp fa-2x"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php  }
                } ?>
            </div>
        </div>
    </section>

    <div class="banner">
        <div class="banner_description">
            <h1>Repuestos para tus dispositivos</h1>
            <h5>
                Repuestos y más. Contáctanos al número
            </h5>

            <h3>
                <div class="slider">
                    <div class="mask">
                        <ul>
                            <li class="anim1">
                                <div class="quote">+503 6825 6396</div>
                            </li>
                            <li class="anim2">
                                <div class="quote">+503 7679 7564</div>
                            </li>
                            <li class="anim3">
                                <div class="quote">+503 6825 6396</div>
                            </li>
                            <li class="anim4">
                                <div class="quote">+503 7679 7564</div>
                            </li>
                            <li class="anim5">
                                <div class="quote">+503 6825 6396</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </h3>
            <br><br><br>

            <a href="https://www.facebook.com/LaptospGyD">
                <button type="button" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </button>
            </a>
            <a href="https://www.tiktok.com/@laptopsgyd?is_from_webapp=1&sender_device=pc">
                <button type="button" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path
                            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                    </svg>
                </button>
            </a>
            <a
                href="https://wa.me/50376797564?text=Hola%20me%20encuentro%20interesado%20en%20contactar%20para%20agendar%20cita">
                <button type="button" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                </button>
            </a>
        </div>
    </div>

    <div class="sectionMan">
        <a href="#" class="butonfl" role="button" aria-disabled="true">↑</a>
        <div class="section over-hide">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section text-center py-5 py-md-0">
                            <input class="pricing" type="checkbox" id="pricing" name="pricing" />
                            <label for="pricing"><span class="block-diff"><span
                                        class="float-right"></span></span></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="pricing-wrap">
                                            <h4 class="mb-5">Mantenimiento</h4>
                                            <h2 class="mb-2"><sup>$</sup>40 - 50<sup>USD</sup></h2>
                                            <p class="mb-4">Precios economicos</p>
                                            <p class="mb-1"><i class="uil uil-location-pin-alt size-22"></i></p>
                                            <p class="mb-4">San Salvador</p>
                                            <a href="https://wa.me/50376797564?text=Hola%20me%20encuentro%20interesado%20en%20contactar%20para%20agendar%20cita%20para%20mantenimiento."
                                                class="link">Agenda cita</a>
                                            <div class="img-wrap img-1">
                                                <img src="https://cdn-icons-png.flaticon.com/512/2593/2593341.png"
                                                    alt="">
                                            </div>
                                            <div class="img-wrap img-6">
                                                <img src="https://www.pngall.com/wp-content/uploads/10/Tools-No-Background.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <div class="pricing-wrap">
                                            <h4 class="mb-5">Reparacion de equipos</h4>
                                            <h2 class="mb-2"><sup>$</sup>40 - 50<sup>USD</sup></h2>
                                            <p class="mb-4">Precios economicos</p>
                                            <p class="mb-1"><i class="uil uil-location-pin-alt size-22"></i></p>
                                            <p class="mb-4">San Salvador</p>
                                            <a href="https://wa.me/50376797564?text=Hola%20me%20encuentro%20interesado%20en%20contactar%20para%20agendar%20cita%20para%20reparación."
                                                class="link">Agenda cita</a>
                                            <div class="img-wrap img-4">
                                                <img src="https://www.pngkey.com/png/full/905-9057780_why-the-msp-world-needs-ecsm-mantenimiento-reparacion.png"
                                                    alt="">
                                            </div>
                                            <div class="img-wrap img-7">
                                                <img src="https://cdn-icons-png.flaticon.com/512/1213/1213001.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid titNos">
        <div class="row">
            <div class="col">
                <h1>Galería de Repuestos Disponibles</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col col-sm-4">
                <img src="assets/img/im/3.jpg" class="img-fluid align-self-center" alt="err">
            </div>
            <div class="col col-sm-4">
                <img src="assets/img/im/2.jpg" class="img-fluid align-self-center" alt="err">
            </div>
            <div class="col col-sm-4">
                <img src="assets/img/im/1.jpg" class="img-fluid align-self-center" alt="err">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col col-sm-4">
                <img src="assets/img/im/4.jpg" class="img-fluid align-self-center" alt="err">
            </div>
            <div class="col col-sm-4">
                <img src="assets/img/im/5.jpg" class="img-fluid align-self-center" alt="err">
            </div>
            <div class="col col-sm-4">
                <img src="assets/img/im/6.jpg" class="img-fluid align-self-center" alt="err">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col col-sm-4">
                <img src="assets/img/im/7.jpg" class="img-fluid align-self-center" alt="err">
            </div>
            <div class="col col-sm-4">
                <img src="assets/img/im/113.jpg" class="img-fluid align-self-center" alt="err">
            </div>
            <div class="col col-sm-4">
                <img src="assets/img/im/196.jpg" class="img-fluid align-self-center" alt="err">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col col-sm-4">
                <img src="assets/img/im/55.00-Cargador-para-laptop-Lenovo-20V-3.25A-punta-USB-1.jpg"
                    class="img-fluid align-self-center" alt="err">
            </div>
            <div class="col col-sm-4">
                <img src="assets/img/im/GJKNX.jpg" class="img-fluid align-self-center" alt="err">
            </div>
            <div class="col col-sm-4">
                <img src="assets/img/im/RE03XL HP MK.jpg" class="img-fluid align-self-center" alt="err">
            </div>
        </div>
    </div>

    <br>
    <!-- Footer-->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Dirección</h4>
                                <span>Poniente II 3228, San Salvador</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Llámanos</h4>
                                <span>76797564 - Numero Ejecutivo de ventas</span>
                                <br>
                                <span>72103334 - Número venta al por mayoreo de repuestos</span>
                                <br>
                                <span>68256396 - Número de dudas en mantenimientos y repuestos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Escríbenos</h4>
                                <span>gyd_mercadeo@hotmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="https://andreaaturcios.com"><img
                                        src="https://andreaaturcios.com/img/LogoSinFondo.png" class="img-fluid"
                                        alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>LaptopsG&D: Los mejores proporcionando mantenimientos de equipos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Enlaces de contacto</h3>
                            </div>
                            <ul>
                                <li><a href="https://www.facebook.com/andreaaturciosb/">Facebook</a></li>
                                <li><a href="https://twitter.com/Mairesama">Twitter</a></li>
                                <li><a href="https://www.instagram.com/andreaaturcios/">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Suscríbete</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>¿Deseas contactarnos? Envíanos tu correo y te contactaremos.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="https://formsubmit.co/programmer@andreaaturcios.com" method="POST">
                                    <input type="text" name="correo" placeholder="Correo" required>
                                    <input type="hidden" name="sitio" placeholder="laptopsgyd.com"
                                        value="laptopsgyd.com" required>
                                    <button type="submit">
                                        <p>Send</p>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <a href="https://github.com/AndreaTurcios" style="color:#FFFFFF;">
                                <script type="text/javascript">
                                    copyright = new Date();
                                    update = copyright.getFullYear();
                                    document.write("© 2022 - " + update + " " + "Laptops G&D  | Developer"); 
                                </script>
                                Andrea Turcios
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>