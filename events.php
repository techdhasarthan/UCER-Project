<?php require_once "./libs/load.php" ?>


<?php load_template("navbar"); ?>


<div class="carousel-eve">
  <div class="carousel-item-eve">
    <img class="carousel-img-eve" src="https://flxt.tmsimg.com/assets/p185554_b_v10_az.jpg" alt="Image 1">
    <div class="carousel-content-eve">
      <h4>Item 1</h4>
      <p>Information about item 1.</p>
    </div>
    <button class="carousel-button-eve">Button 1</button>
  </div>
  <div class="carousel-item-eve">
    <img class="carousel-img-eve" src="https://flxt.tmsimg.com/assets/p185554_b_v10_az.jpg" alt="Image 2">
    <div class="carousel-content-eve">
      <h4>Item 2</h4>
      <p>Information about item 2.</p>
    </div>
    <button class="carousel-button-eve">Button 2</button>
  </div>
  <div class="carousel-item-eve">
    <img class="carousel-img-eve" src="https://flxt.tmsimg.com/assets/p185554_b_v10_az.jpg" alt="Image 3">
    <div class="carousel-content-eve">
      <h4>Item 3</h4>
      <p>Information about item 3.</p>
    </div>
    <button class="carousel-button-eve">Button 3</button>
  </div>

  <div class="carousel-item-eve">
    <img class="carousel-img-eve" src="https://flxt.tmsimg.com/assets/p185554_b_v10_az.jpg" alt="Image 3">
    <div class="carousel-content-eve">
      <h4>Item 3</h4>
      <p>Information about item 3.</p>
    </div>
    <button class="carousel-button-eve">Button 3</button>
  </div>
</div>

<script>
    const carousel = document.querySelector('.carousel-eve');
const button = document.querySelector('.carousel-button-eve');

button.addEventListener('click', () => {
  carousel.scrollBy({
    left: carousel.offsetWidth,
    behavior: 'smooth'
  });
});
    </script>

<?php load_template("footer"); ?>