<main>
    <h1 class="h2-like">Редактирование статьи</h1>
    <div class="articlewrapper">
        <form method="post" action="">
            Введите имя статьи<br>
            <input name="title" type="text" value="<?php echo $result[0]['title']; ?>"><br>
            Дата<br>
            <input name="date" type="text" value="<?php echo $result[0]['pubdate']; ?>"><br>
            Просмотров<br>
            <input name="views" type="number" value="<?php echo $result[0]['views']; ?>"><br>
            Текст статьи<br>
            <textarea name="content"><?php echo $result[0]['content']; ?></textarea><br>
            <input type="submit">
        </form>
    </div>
</main>
