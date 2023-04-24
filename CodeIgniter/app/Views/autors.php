<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= base_url('public/css/style_menu.css')?>">
    <link rel="shortcut icon" href="./img/icon.png" type="img/x-icon">

</head>

<body>

<!-- CONTENT -->

<div id="particles-js">



</div>


<button><a href="<?=base_url('/public/curriculum_anthony')?>">HOJA DE VIDA ANTHONY</button>

<button><a href="<?=base_url('/public/curriculum_jorge')?>">HOJA DE VIDA JORGE</button>

<div id="sidemenu" class="menu-collapsed">

        <!-----HEADER----->
        <div id="header">
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>
        <!-----PROFILE----->
        <div id="profile">
            <div id="name"><span style="font-family: 'Fantasy', fantasy; font-size:x-large;">
                </span></div>
            <div id="photo"><img src="<?=base_url('public/img/user_pic.png')?>"></div>
        </div>
        <!-----ITEMS----->

        <div id="menu-items">
            <div class="item">
                <div class="item separator">
                </div>
                <a href="<?=base_url('/public/homeuser')?>">
                    <div class="icon"><img src="<?=base_url('public/img/return_arrow_icon.png')?>"></div>
                    <div class="title"><span
                            style="color:#000000; font-family: 'Fantasy', fantasy; font-size:large;">Volver</span>
                    </div>
                </a>
            </div>
            <div class="item separator">
            </div>
            </div>
            <div class="item separator">
            </div>
        </div>
</body>

<!-- SCRIPTS -->

<script src="<?=base_url('public/js/script.js')?>"></script>
<script src="<?=base_url('public/js/particles.js')?>"></script>
<script src="<?=base_url('public/js/app.js')?>"></script>
<script>
            const btn = document.querySelector('#menu-btn');
            const menu = document.querySelector('#sidemenu');
            btn.addEventListener('click', e => {
                menu.classList.toggle("menu-expanded");
                menu.classList.toggle("menu-collapsed");
                document.querySelector('body').classList.toggle('body-expanded');
            });
        </script>

<!-- -->

</html>
