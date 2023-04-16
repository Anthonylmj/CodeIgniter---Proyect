<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    position: relative;
    background-color: black;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}

main {
    width: 100%;
    padding: 20px;
    margin: auto;
    margin-top: 150px;
}

.contenedor__todo {
    width: 100%;
    max-width: 800px;
    margin: auto;
    position: relative;
}

.caja__trasera {
    width: 100%;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    background-color: #2b2b2ba4;

}

.caja__trasera div {
    margin: 100px 40px;
    color: #ffffff;
    transition: all 500ms;
}


.caja__trasera div p,
.caja__trasera button {
    margin-top: 30px;
}

.caja__trasera div h3 {
    font-weight: 400;
    font-size: 26px;
}

.caja__trasera div p {
    font-size: 16px;
    font-weight: 300;
}

.caja__trasera button {
    padding: 10px 40px;
    border: 2px solid #fff;
    font-size: 14px;
    background: transparent;
    font-weight: 600;
    cursor: pointer;
    color: rgb(255, 255, 255);
    outline: none;
    transition: all 300ms;
}

.caja__trasera button:hover {
    background-color: #691b88;
    color: white;
}

/*Formularios*/

.contenedor__login-register {
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 380px;
    position: relative;
    top: -185px;
    left: 10px;

    /*La transicion va despues del codigo JS*/
    transition: left 500ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
}

.contenedor__login-register form {
    width: 100%;
    padding: 50px 20px;
    background: #e9e9e9;
    position: absolute;
    border-radius: 20px;
}

.contenedor__login-register form h2 {
    font-size: 30px;
    text-align: center;
    margin-bottom: 20px;
    color: #000000;
}

.contenedor__login-register form input {
    width: 100%;
    margin-top: 20px;
    padding: 9px;
    border: none;
    background: #F2F2F2;
    font-size: 16px;
    outline: none;
}

.contenedor__login-register button:hover {
    background-color: #691b88;
    color: white;
}

.contenedor__login-register form button {
    padding: 10px 40px;
    margin-top: 40px;
    border: none;
    font-size: 14px;
    background: #2b2b2b;
    font-weight: 600;
    cursor: grab;
    color: white;
    outline: none;
}




.formulario__login {
    opacity: 1;
    display: block;
}

.formulario__register {
    display: none;
}



@media screen and (max-width: 850px) {

    main {
        margin-top: 50px;
    }

    .caja__trasera {
        max-width: 350px;
        height: 300px;
        flex-direction: column;
        margin: auto;
    }

    .caja__trasera div {
        margin: 0px;
        position: absolute;
    }


    /*Formularios*/

    .contenedor__login-register {
        top: -10px;
        left: -5px;
        margin: auto;
    }

    .contenedor__login-register form {
        position: relative;
    }
}


#particles-js {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}

#name {

    font-family: 'Fantasy', fantasy;
    font-size: medium;
    background-color: rgb(177, 177, 177);
    color: rgb(0, 0, 0);
    border-style: solid;
    border-width: 2px;
    border-color: rgb(0, 0, 0)
}

#lastname {

    font-family: 'Fantasy', fantasy;
    font-size: medium;
    background-color: rgb(177, 177, 177);
    color: rgb(0, 0, 0);
    border-style: solid;
    border-width: 2px;
    border-color: rgb(0, 0, 0)
}

#adress {

    font-family: 'Fantasy', fantasy;
    font-size: medium;
    background-color: rgb(177, 177, 177);
    color: rgb(0, 0, 0);
    border-style: solid;
    border-width: 2px;
    border-color: rgb(0, 0, 0)
}

#phone {

    font-family: 'Fantasy', fantasy;
    font-size: medium;
    background-color: rgb(177, 177, 177);
    color: rgb(0, 0, 0);
    border-style: solid;
    border-width: 2px;
    border-color: rgb(0, 0, 0)
}

#email {

    font-family: 'Fantasy', fantasy;
    font-size: medium;
    background-color: rgb(177, 177, 177);
    color: rgb(0, 0, 0);
    border-style: solid;
    border-width: 2px;
    border-color: rgb(0, 0, 0)
}

#user {

    font-family: 'Fantasy', fantasy;
    font-size: medium;
    background-color: #b1b1b1;
    color: rgb(0, 0, 0);
    border-style: solid;
    border-width: 2px;
    border-color: rgb(0, 0, 0)
}

#password {

    font-family: 'Fantasy', fantasy;
    font-size: medium;
    background-color: rgb(177, 177, 177);
    color: rgb(0, 0, 0);
    border-style: solid;
    border-width: 2px;
    border-color: rgb(0, 0, 0)
}
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

</header>

<!-- CONTENT -->

<section>
<div id="particles-js"></div>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="/formdatabase/config/login.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="user" id="name" placeholder="Usuario">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <button>Entrar</button>
                    <span style="color:#e9e9e9">______________</span>
                    <span><i class="fab fa-github fa-lg"></i><a href="https://github.com/Anthonylmj" target="_blank" style="color:#000000;"> Anthonylmj</a></span>
                </form>

                <!--Register-->
                <form action="" class="formulario__register" method="get">
                    <h2>Registro</h2>
                    <input type="text" name="name" id="name" placeholder="Nombre">
                    <input type="text" name="lastname" id="lastname" placeholder="Apellido">
                    <input type="text" name="adress" id="adress" placeholder="Dirección">
                    <input type="text" name="phone" id="phone" placeholder="Teléfono">
                    <input type="text" name="email" id="email" placeholder="Correo">
                    <input type="text" name="user" id="user" placeholder="Usuario">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <button type="submit" name="m" value="guardar">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
</section>
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>

</footer>

<!-- SCRIPTS -->

<script src="/assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/bc3470d05e.js" crossorigin="anonymous"></script>
<script src="/assets/js/particles.js"></script>
<script src="/assets/js/app.js"></script>

<!-- -->

</body>
</html>
