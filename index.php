<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" sizes="32x32" href="front/img/favicon-icon.png">
    <title>CELAMEX</title>
    
    <link href="front/general/css/index-style.css" rel="stylesheet" type="text/css" >

</head>

<body>

<?php include 'front/general/header.php'?>
<?php include 'front/index/body.php'?>
<?php include 'front/general/footer.php'?>

</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>  
<script src="https://kit.fontawesome.com/4b69abc4b4.js" crossorigin="anonymous"></script>
<script src="front/general/js/animation-controller.js" ></script>  

<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dotsContainer = document.getElementById('paginationDots');

    const slidesToDisplay = 3; // NÚMERO DE DIAPOSITIVAS VISIBLES
    const slidesToMove = 1; // NÚMERO DE DIAPOSITIVAS QUE SE DESPLAZAN A LA VEZ

    const slidesData = [
        { img: 'front/multimedia/icono-3.png', text: 'Salud Mental' },
        { img: 'front/multimedia/icono-4.png', text: 'Formación Académica' },
        { img: 'front/multimedia/icono-5.png', text: 'Empleabilidad' },
        { img: 'front/multimedia/icono-2.png', text: 'Empoderamiento' },
        { img: 'front/multimedia/icono-1.png', text: 'Autocuidado' }
    ];

    const allSlidesData = [...slidesData, ...slidesData, ...slidesData];

    track.innerHTML = allSlidesData.map(slide => `
        <div class="carousel-slide">
            <img src="${slide.img}" alt="${slide.text}">
            <p>${slide.text}</p>
        </div>
    `).join('');

    slidesData.forEach((_, index) => {
        const dot = document.createElement('button');
        dot.classList.add('pagination-dot');
        dotsContainer.appendChild(dot);
        dot.addEventListener('click', () => {
            // El desplazamiento debe ser por el número de diapositivas a mover
            moveToSlide(index + slidesData.length);
        });
    });

    const slides = Array.from(track.children);
    const dots = Array.from(dotsContainer.children);
    let slideWidth = slides.length > 0 ? slides[0].getBoundingClientRect().width : 0;

    // El índice inicial debe ser el punto de partida para el bucle
    let currentIndex = slidesData.length;
    let isTransitioning = false;

    const updateDots = (current) => {
        const dotIndex = current % slidesData.length;
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[dotIndex]) {
            dots[dotIndex].classList.add('active');
        }
    };

    const setPositionByIndex = () => {
        track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
    };

    setPositionByIndex();
    updateDots(currentIndex);

    const moveToSlide = (index) => {
        if (isTransitioning) return;
        isTransitioning = true;
        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = `translateX(-${slideWidth * index}px)`;
        currentIndex = index;
        updateDots(currentIndex);
    };

    nextBtn.addEventListener('click', () => moveToSlide(currentIndex + slidesToMove));
    prevBtn.addEventListener('click', () => moveToSlide(currentIndex - slidesToMove));

    track.addEventListener('transitionend', () => {
        isTransitioning = false;
        // Reinicio del bucle infinito
        if (currentIndex >= slidesData.length * 2) {
            track.style.transition = 'none';
            currentIndex = slidesData.length;
            setPositionByIndex();
        }
        if (currentIndex < slidesData.length) {
            track.style.transition = 'none';
            currentIndex = slidesData.length * 2;
            setPositionByIndex();
        }
    });

    window.addEventListener('resize', () => {
        slideWidth = slides.length > 0 ? slides[0].getBoundingClientRect().width : 0;
        track.style.transition = 'none';
        setPositionByIndex();
    });

    setInterval(() => {
        moveToSlide(currentIndex + slidesToMove);
    }, 3000);
});    
    
</script>

   
</html>