

<?php
  include_once 'includes/connect.php';
  include_once 'includes/header.php';
?>

<main>
  <div class="container">
    <form action="index.php" method="post">
      <input class="search" type="text" name="search" placeholder="search for movies...">
      <button type="submit">search</button>
    </form>
  </div>
</main>

<?php
  include_once 'includes/footer.php';
?>