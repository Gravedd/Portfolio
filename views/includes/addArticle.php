<main>
    <h1 class="h2-like">Создание статьи</h1>
    <div class="articlewrapper">
        <form method="post" enctype="multipart/form-data" action="newpostspreview" class="editform thintext">
            Введите имя статьи<b class="accenttext" title="Лучший вариант до ... символов"> ? </b>
            <br>
            <input name="title" type="text""><br>
            Дата<b class="accenttext" title="В формате: 2021-11-21 12:25:50"> ? </b>
            <br>
            <input name="date" type="text"><br>
            Текст статьи<b class="accenttext" title="Разрешается использование тегов и др"> ? </b>
            <br>
            <textarea class="thintext" name="content"></textarea><br>

            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <input name="imagefile" type="file"/>
            <input type="submit" value="Предпросмотр">
        </form>
    </div>
</main>
