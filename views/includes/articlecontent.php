<main>
    <h1 class="h2-like"><?php echo $result[0]['title']; ?></h1>
    <div class="articlewrapper">
        <div class="articleMainImage" style="background-image: "></div>
        <span>
            <?php echo $result[0]['content']; ?>
        </span><br><br>
        <span class="dateart">Пост опобликован: <?php echo $result[0]['pubdate']; ?></span><br>
        <span class="dateart"><small>Просмотров: <?php echo $result[0]['views']; ?></small></span><br>
        <?php if(AdminBase::checkLogged()) { ?><br>
            <span class="spacedtext">&#9998;<a href='../admin/editpost/<?php echo $result[0]['id']; ?>' class='accenttext2'>Отредактировать пост</a></span><br>
            <span class="spacedtext">&#10006; <a href='../admin/deletepost?id=<?php echo $result[0]['id']; ?>' class='accenttext2'>Удалить пост</a></span>
        <?php }?>
    </div>
</main>