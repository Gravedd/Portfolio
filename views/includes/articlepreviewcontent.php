<main>
    <h1 class="h2-like"><?php echo $_POST['title'];?></h1>
    <div class="articlewrapper">
        <?php if (!isset($noimg)) { ?>
        <div class="articleMainImage" style="background-image: url('..//uploads/temp/<?php echo $filename; ?>');"></div>
        <?php } else { ?>
        <div class="articleMainImage" style="background-image: url('..//uploads/images/<?php echo $filename; ?>'); text-align: center">Нет изменений</div>
        <?php } ?>

        <span>
            <?php echo $_POST['content']; ?>
        </span><br><br>
        <span class="dateart">Пост опобликован: <?php echo $_POST['date']; ?></span><br>
        <span class="dateart"><small>Просмотров: <?php echo $_POST['views']; ?></small></span><br>



        <form method="post" action="saveEditPost" class="editform thintext">
            <input name="id" type="hidden" value="<?php echo $_POST['id']; ?>">
            <input name="title" type="hidden" value="<?php echo $_POST['title'];?>">
            <input name="date" type="hidden" value="<?php echo $_POST['date'];?>">
            <input name="views" type="hidden" value="<?php echo $_POST['views'];?>">
            <input name="imgname" type="hidden" value="<?php echo $filename; ?>">
            <input name="noimg" type="hidden" value="<?php echo $noimg; ?>">
            <textarea hidden class="thintext" name="content"><?php echo $_POST['content'];?></textarea><br>
            <input type="submit" value="Сохранить пост">
        </form>

    </div>
</main>