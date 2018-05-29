<p>Главная страница</p>

<?php foreach ($news as $value): ?>
    <h3><?php echo $value['title']; ?></h3>
    <p><?php echo $value['description']; ?></p>
    <hr>
<?php endforeach; ?>

<h1 class="title"></h1>