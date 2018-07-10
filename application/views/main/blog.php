<style>

</style>
<blog>
    <div style=" text-align: center; background-color: #f6f6f5;">
        <span style="font-size: 46px; border-bottom: 6px solid green;">БЛОГ</span>
    </div>

    <div class="container-blog">
        <?php if (empty($list)): ?>
            <p>Список постов пуст</p>
        <?php else: ?>
            <?php foreach ($list as $val): ?>
                <div class="new">
                    <a href="/post/<?php echo $val['id']; ?>">
                        <img width="250" height="250" src="/public/images/blog/<?php echo $val['id']; ?>.jpg"/>

                        <h1><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h1>
                        <p><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></p>
                    </a>

                </div>
            <?php endforeach; ?>
            <div class="clearfix">
                <?php echo $pagination; ?>
            </div>
        <?php endif; ?>
    </div>
</blog>
