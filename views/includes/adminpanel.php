<main>
    <h1 class="h2-like">Админ-Панель</h1>
    <div class="articlewrapper">
        <h1 class="accenttext2 spacedtext thintext">Добро пожаловать в админ-панель</h1>
        <div class="adminactions">
            <div class="admAction"><a href="admin/addposts">Добавить пост</a></div>
            <div class="admAction"><a href="admin/allposts">Удалить пост</a></div>
            <div class="admAction"><a href="admin/allposts">Редактировать пост</a></div>
            <div class="admAction"><a href="../">Вернутся на главную сайта</a></div>
            <div class="admAction"><a href="admin/logout">Выйти из аккаунта</a></div>
        </div>
        <h2 class="accenttext2 spacedtext thintext">Статистика</h2>
        <span class="thintext">Общее кол-во просмотров у статей: <?php echo $count["SUM(`views`)"]; ?></span>
    </div>
</main>