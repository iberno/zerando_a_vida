<?php require('partials/header.php'); ?>

  <!-- Primary Page Layout –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <div class="container">
    <form method="POST" action="/task">
      <input type="text" name="description">
      <button type="submit">salvar</button>
    </form>
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
        <?php foreach ($tasks as $task) : ?>
          <li>
            <?php if($task->completed) : ?>
              <strike><?= $task->description; ?></strike>
            <?php else: ?>
              <?= $task->description; ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php require('partials/footer.php'); ?>