<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Expandable Button with Plus/Minus Symbol</title>
<link rel="stylesheet" href="FAQ.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Uncial+Antiqua&display=swap" rel="stylesheet">
</head>
<body>
<br>
<header class="header">
<div class="top-section">
    <h1 class="title">AMADEUS</h1>
    <a href="booking.php" class="header-button">Book Now</a>
  </div>
  <?php include'Navigation.php'; ?>
</header>
<br>
<br>
<section class="image-section">
<img src="FAQ.png" alt="Band Image" class="faq-image">
</section>
<br>
<br>
<br>
    <div class="faq-questions">
    <?php
    #insert array of FAQs here
        for($i = 0;$i!=10;$i++){
            echo (
                "<div class='QUESTIONSECTION'>
                    <div class='button-text'>Question 1<div class='toggle-symbol'>➕</div></div>
                    <div class='content'><br>
                        Here is the first content that will show up when the container is clicked!
                    </div>
                </div>"
            );
        }
    ?>
    </div>
<script src="FAQ.js"></script>
</body>
</html>