<main>
    <h1 class="h2-like"><?php echo $_POST['title'];?></h1>
    <div class="articlewrapper">
        <div class="articleMainImage" style="background-image: url('..//uploads/temp/<?php echo $filename; ?>');"></div>
        <span>
            <?php echo $_POST['content']; ?>
        </span><br><br>
        <span class="dateart">Пост опобликован: <?php echo $_POST['date']; ?></span><br>
        <span class="dateart"><small>Просмотров: 0</small></span><br>



        <form method="post" action="addnewpost" class="editform thintext">
            <input name="title" type="hidden" value="<?php echo $_POST['title'];?>">
            <input name="date" type="hidden" value="<?php echo $_POST['date'];?>">
            <input name="imgname" type="hidden" value="<?php echo $filename; ?>">
            <textarea hidden class="thintext" name="content"><?php echo $_POST['content'];?></textarea><br>
            <input type="submit" value="Сохранить пост">
        </form>

    </div>
</main>