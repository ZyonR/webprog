<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Amadeus Music Theatre</title>
<link rel="stylesheet" href="HOME.css">
<link rel="stylesheet" href="BaseCSS.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Uncial+Antiqua&display=swap" rel="stylesheet">
</head>
<body>

<header class="header">
    <div class="top-section">
        <h1 class="title">AMADEUS</h1>
        <a href="booking.php" class="header-button">Book Now</a>
    </div>
    <?php include'Navigation.php'; ?>
</header>
    <!-- <main>
    </main>
    <footer class="footer"></footer>
</div>
<script src="home.js"></script> -->
<main>
    <img class="amadeuslogo rounded-img" src="./AmadeusLogo.png" alt="Amadeus Logo"/>
    <section>
        <h3 class="title-h3">Amadeus</h3>
        <p class="amdeusparagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A erat nam at lectus. Mauris in aliquam sem fringilla ut. Nam libero justo laoreet sit amet cursus sit. Urna porttitor rhoncus dolor purus non enim praesent. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis cras sed felis eget velit aliquet sagittis. Ultrices tincidunt arcu non sodales neque sodales ut etiam sit. Tempus imperdiet nulla malesuada pellentesque elit eget. Quis vel eros donec ac odio tempor. Dictumst quisque sagittis purus sit. Sit amet risus nullam eget felis eget nunc lobortis. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Tortor aliquam nulla facilisi cras fermentum. Dapibus ultrices in iaculis nunc. Ut aliquam purus sit amet.</p>
        <?php include'AnimatedScrollImages.php'; ?>
        <h3 class="title-h3">Mission Vision</h3>
        <p class="amdeusparagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A erat nam at lectus. Mauris in aliquam sem fringilla ut. Nam libero justo laoreet sit amet cursus sit. Urna porttitor rhoncus dolor purus non enim praesent. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis cras sed felis eget velit aliquet sagittis. Ultrices tincidunt arcu non sodales neque sodales ut etiam sit. Tempus imperdiet nulla malesuada pellentesque elit eget. Quis vel eros donec ac odio tempor. Dictumst quisque sagittis purus sit. Sit amet risus nullam eget felis eget nunc lobortis. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Tortor aliquam nulla facilisi cras fermentum. Dapibus ultrices in iaculis nunc. Ut aliquam purus sit amet.</p>
        <h3 class="title-h3">Location</h3>
        <div class="gmaps">
            <p class="amdeusparagraph">Ikaw na maglagay ng Gmaps here hehe</p>
        </div>
        <p class="amdeusparagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A erat nam at lectus. Mauris in aliquam sem fringilla ut. Nam libero justo laoreet sit amet cursus sit. Urna porttitor rhoncus dolor purus non enim praesent. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis cras sed felis eget velit aliquet sagittis. Ultrices tincidunt arcu non sodales neque sodales ut etiam sit. Tempus imperdiet nulla malesuada pellentesque elit eget. Quis vel eros donec ac odio tempor. Dictumst quisque sagittis purus sit. Sit amet risus nullam eget felis eget nunc lobortis. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Tortor aliquam nulla facilisi cras fermentum. Dapibus ultrices in iaculis nunc. Ut aliquam purus sit amet.</p>
        <h3 class="title-h3">Schedules</h3>
        <iframe src="https://embed.styledcalendar.com/#UY15iHMNXEQ7ZArqPcOs" title="Styled Calendar" class="styled-calendar-container" style="width: 100%; border: none;" data-cy="calendar-embed-iframe"></iframe>
        <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>
        <h3 class="title-h3">Mechanics</h3>
        <p class="amdeusparagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A erat nam at lectus. Mauris in aliquam sem fringilla ut. Nam libero justo laoreet sit amet cursus sit. Urna porttitor rhoncus dolor purus non enim praesent. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis cras sed felis eget velit aliquet sagittis. Ultrices tincidunt arcu non sodales neque sodales ut etiam sit. Tempus imperdiet nulla malesuada pellentesque elit eget. Quis vel eros donec ac odio tempor. Dictumst quisque sagittis purus sit. Sit amet risus nullam eget felis eget nunc lobortis. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Tortor aliquam nulla facilisi cras fermentum. Dapibus ultrices in iaculis nunc. Ut aliquam purus sit amet.</p>
        <h3 class="title-h3">Reviews</h3>
        <div class="Reviews">
            <?php include'ALLREVIEWS_Factory.php'; ?>
        </div>
        <h3 class="title-h3">FAQs</h3>
        <?php include'FAQ.php'; ?>
    </section>
</main>
<br>
<br>
<br>
<img class="Footimage" src="ImagesScroll\Footer.jpg" alt="footerImg"/>
</body>
</html>
