<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="BaseCSS.css">
    <link rel="stylesheet" href="SCHEDULE.css">
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
    <div class="imbededcalendar">
        <iframe src="https://embed.styledcalendar.com/#UY15iHMNXEQ7ZArqPcOs" title="Styled Calendar" class="styled-calendar-container" style="width: 100%; border: none;" data-cy="calendar-embed-iframe"></iframe>
        <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>
    </div>
</body>
</html>