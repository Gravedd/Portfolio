<main>
    <h1 class="h2-like"><?php echo $_POST['title'];?></h1>
    <div class="articlewrapper">
        <div class="articleMainImage" style="background-image: "></div>
        <span>
            <?php echo $_POST['content']; ?>
        </span><br><br>
        <span class="dateart">Пост опобликован: <?php echo $_POST['date']; ?></span><br>
        <span class="dateart"><small>Просмотров: <?php echo $_POST['views']; ?></small></span><br>
        <a href="" class="buttonbase">Сохранить запись</a>

    </div>
</main>