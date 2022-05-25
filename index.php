<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="style.css">
  
  <title>Frontend Mentor | NFT preview card component</title>

</head>
<body>
  <main class="container">
    <div class="container__img">
      <img src="images/image-equilibrium.jpg" alt="" srcset="" class="container__img--orig">
      <img src="images/icon-view.svg" alt="" srcset="" class="container__img--overlay">
    </div>
    <span class="container__title">Equilibrium #3429</span>
    <detail class="container__subtitle">Our Equilibrium collection promotes balance and calm.</detail>
    <div class="container__caption">
      <div class="container__caption--right">
        <img src="images/icon-ethereum.svg" alt="" srcset="" class="container__img-eth">
        <span class="container__caption-eth"> 0.041 ETH</span>
      </div>
      <div class="container__caption--left">
        <img src="images/icon-clock.svg" alt="" srcset="">
        <span class="container__caption-day"> 3 days left</span>
      </div>
    </div>
    
    <hr>
    <div class="container__credits">
      <img src="images/image-avatar.png" alt="" srcset="" class="container__avatar">
      <span class="container__credits--creation">Creation of <span class="container__credits--name">Jules Wyvern</span></span>
    </div>
</main>
  <footer class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
    Coded by <a href="#">John Lois Floro</a>.
</footer>
  
</body>
</html>