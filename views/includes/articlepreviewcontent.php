<main>
    <h1 class="h2-like"><?php echo $_POST['title'];?></h1>
    <div class="articlewrapper">
        <div class="articleMainImage" style="background-image:"></div>

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
            <textarea class="thintext" name="content"><?php echo $_POST['content'];?></textarea><br>
            <input type="submit" value="Предпросмотр">
        </form>

    </div>
</main>