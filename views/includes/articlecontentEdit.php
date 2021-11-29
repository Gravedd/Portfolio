<main>
    <h1 class="h2-like">Редактирование статьи</h1>
    <div class="articlewrapper">
        <form method="post" enctype="multipart/form-data" action="../editprewiew" class="editform thintext">
            Введите имя статьи<b class="accenttext" title="Лучший вариант до ... символов"> ? </b>
            <br>
            <input name="title" type="text" value="<?php echo $result[0]['title']; ?>"><br>
            Дата<b class="accenttext" title="В формате: 2021-11-21 12:25:50"> ? </b>
            <br>
            <input name="date" type="text" value="<?php echo $result[0]['pubdate']; ?>"><br>
            Просмотров<b class="accenttext" title="Укажите число просмторов"> ? </b>
            <br>
            <input name="views" type="number" value="<?php echo $result[0]['views']; ?>"><br>
            Текст статьи<b class="accenttext" title="Разрешается использование тегов и др"> ? </b>
            <br>
            <textarea id="content" class="thintext" name="content"><?php echo $result[0]['content']; ?></textarea><br>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
            <input name="imagefile" type="file">
            <input type="submit" value="Предпросмотр">
            <input name="id" type="hidden" value="<?php echo $id; ?>">
        </form>
    </div>
</main>