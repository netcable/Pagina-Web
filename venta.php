<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cable Net</title>
    <script src="//code.tidio.co/mteuyjoaymtokhi9tlsxlgqubb4vyszp.js" async></script>
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/venta.css">
</head>

<body>
    <header>
        <!-- NAVEGADOR -->
        <nav class="menu">
            <section class="contenedor_menu">
                <img src="img/logo.png" class="logo_menu">
                <div class="cont_enlaces">
                    <ul class="menu_links">
                        <li class="menu_item">
                            <a href="index.html" class="link">Principal</a>
                        </li>
                    </ul>
                </div>
                <div class="menu_icon">
                    <img src="img/menu.svg" class="menu_img">
                </div>
            </section>
        </nav>
        <script src="js/navegador.js"></script>
    </header>
    <main>
        <section class="venta" id="venta">
            <div class="contenedor-venta">
                <div class="venta-form">
                    <form action="registrar_venta.php" id="form">
                        <h2>CONTRATA UN PLAN</h2>
                        <div class="inputbox-vent">
                            <input type="text" name="full_name" id="full_name" autocomplete="off" required>
                            <span>Nombres y Apellidos</span>
                        </div>
                        <div class="venta-input">
                            <div class="inputbox-vent">
                                <input type="text" name="dni" id="dni" autocomplete="off" required>
                                <span>DNI</span>
                            </div>
                            <div class="inputbox-vent venta-sep">
                                <input type="text" name="telefono" id="telefono" autocomplete="off" required>
                                <span>Telefono</span>
                            </div>
                        </div>
                        <div class="inputbox-vent">
                            <input type="email" name="email" id="email" autocomplete="off" required>
                            <span>Email</span>
                        </div>
                        <div class="inputbox-vent">
                            <input type="text" name="departamento" id="departamento" autocomplete="off" required>
                            <span>Departamento</span>
                        </div>
                        <div class="venta-input">
                            <div class="inputbox-vent">
                                <input type="text" name="provincia" id="provincia" autocomplete="off" required>
                                <span>Provincia</span>
                            </div>
                            <div class="inputbox-vent venta-sep">
                                <input type="text" name="distrito" id="distrito" autocomplete="off" required>
                                <span>Distrito</span>
                            </div>
                        </div>
                        <div class="inputbox-vent">
                            <input type="text" name="direccion" id="direccion" autocomplete="off" required>
                            <span>Dirección</span>
                        </div>
                        <?php
                            if (isset($_GET['btnenviar'])) {
                                $mensaje = $_GET['txtservicio'];
                            }
                        ?>
                        <input type="text" name="servicio" id="servicio" value="<?php echo $mensaje?>" class="campo_vacio">
                        <div class="inputbox-vent">
                            <input type="submit" name="" value="ENVIAR">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="main-footer">
        <div class="footer__section">
            <h2 class="footer__title">SOBRE NOSOTROS:</h2>
            <p class="footer__txt">Comunicaciones Simonnete E.I.R.L. también conocido como Cable Net, es una empresa de
                telecomunicaciones que brinda servicios de internet y tv por cable. Inicio sus labores el 13
                de abril del año 2009.</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">UBICACIÓN:</h2>
            <p class="footer__txt">Calle Junín #164 Alto Laran</p>
            <h2 class="footer__title">CONTACTOS: </h2>
            <p class="footer__txt">Teléfono: +51 956 634 414</p>
            <p class="footer__txt">Correo: larantvplus@gmail.com</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">ENLACES:</h2>
            <a href="index.html" class="footer__link">Principal</a>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">SUSCRIBETE:</h2>
            <p class="footer__txt">Al suscribirse a nuestra lista de correo, siempre recibirá nuestras últimas noticias
                y actualizaciones.</p>
            <input type="email" class="footer__input" placeholder="Enter your email">
        </div>
        <p class="copy">&copy; 2023 CABLE NET | COMUNICACIONES SIMONNETE E.I.R.L.</p>
    </footer>
</body>