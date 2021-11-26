<main>
    <h1 class="h2-like">Все посты</h1>
    <div class="articlewrapper">
        <?php
        for ($i = 0; $i < count($posts); $i++) {
            ?>
        <hr>
        <span class="accenttext2">ID:<?php echo $posts[$i]['id']; ?></span><br>
        <span class="spacedtext">&#9998;<a href='../admin/editpost/<?php echo $posts[$i]['id']; ?>' class='accenttext2'>Отредактировать пост</a></span><br>
        <span class="spacedtext">&#10006; <a href='../admin/deletepost/<?php echo $posts[$i]['id']; ?>' class='accenttext2'>Удалить пост</a></span><br>
        <span class="h2-like"><?php echo $posts[$i]['title']; ?></span><br>
        Дата: <?php echo $posts[$i]['pubdate']; ?><br>
        Просмторов: <?php echo $posts[$i]['views']; ?><br>
        <span><?php echo $posts[$i]['content']; ?></span>
        <hr><br><br>
        <?php
        }
        ?>


    </div>
</main>
