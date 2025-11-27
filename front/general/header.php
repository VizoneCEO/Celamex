
<header class="header" id="header">
    <div class="logo">
        <img src="front/multimedia/logo.png" alt="Logo Celamex">
    </div>

    <nav class="main-nav" id="mainNav">
        <ul>
            <li><a href="front/nosotros/nosotros.php">NOSOTROS</a></li>
            <li><a href="front/quehacemos/quehacemos.php">¿QUÉ HACEMOS?</a></li>
            <li><a href="front/aliados/aliados.php">ALIADOS</a></li>
            <li><a href="front/contacto/contacto.php">CONTACTO</a></li>
            <li><a href="front/donar/donar.php">DONAR</a></li>
        </ul>
    </nav>
    
    <nav class="main-web-nav">
        <ul>
            <li><a href="front/nosotros/nosotros.php">NOSOTROS</a></li>
            <li><a href="front/quehacemos/quehacemos.php">¿QUÉ HACEMOS?</a></li>
            <li><a href="front/aliados/aliados.php">ALIADOS</a></li>
            <li><a href="front/contacto/contacto.php">CONTACTO</a></li>
        </ul>
    </nav>

    <div class="btn-donate" id="btnDonate">DONAR HOY</div>

    <div class="hamburger-menu" id="hamburgerMenu"><i class="fa-solid fa-bars"></i></div>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#hamburgerMenu').on('click', function() {
           $('#mainNav').toggleClass('is-open');
        });
        
        $(window).on('resize', function() {
        if ($(window).width() > 767) {
            $('#mainNav').removeClass('is-open');
        }
        });
        
        $(window).on('scroll', function(){
           if ($(window).scrollTop() > 60) {
                $('.header').addClass('scrolled');
            } else {
                $('.header').removeClass('scrolled');
            } 
        });
        
        $('#btnDonate').on('click', function(){
           window.location.href = 'front/donar/donar.php'; 
        });
        
        $('#btnColibri').on('click', function(){
           window.location.href = 'https://wa.me/+5562217114'; 
        });
        
    });
</script>

