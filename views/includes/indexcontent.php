<main>
    <div class="h2-like">Обо мне</div>
    <div class="about">
        <!--БЛОК ОБО МНЕ-->
        <div class="leftside" tabindex="0">
            <div class="imgwrapper" style="background-image: url('../../uploads/images/<?php echo $aboutme[0]['image']; ?>');"></div>
            <h2>
                <a href="/articles/<?php echo $aboutme[0]['id']; ?>">
                    <?php echo $aboutme[0]['title']; ?></h2>
            <span class="textart"><?php echo strip_tags($aboutme[0]['content']); ?><br></span>
            <span class="dateart"><?php echo $aboutme[0]['pubdate']; ?></span></a>
            </a>
        </div>


        <!--БЛОКИ SOFT & HARD skills-->
        <div class="rightside">

            <!--БЛОК SOFT Skills-->
            <div class="aboutart">
                <div class="imgwrapper" style="background-image: url('../../uploads/images/<?php echo $softskills[0]['image']; ?>');"></div>
                <h2>
                    <a href="/articles/<?php echo $softskills[0]['id']; ?>">
                    <?php echo $softskills[0]['title']; ?></h2>
                <span class="dateart"><?php echo $softskills[0]['pubdate']; ?></span></a>
            </div>


            <!--БЛОК HARD SKILLS-->
            <div class="aboutart">
                <div class="imgwrapper" style="background-image: url('../../uploads/images/<?php echo $hardskills[0]['image']; ?>');"></div>
                <h2>
                    <a href="/articles/<?php echo $hardskills[0]['id']; ?>">
                    <?php echo $hardskills[0]['title']; ?></h2>
                <span class="dateart"><?php echo $hardskills[0]['pubdate']; ?></span></a>
            </div>

        </div>
    </div>

    <div class="h2-like">Мои проекты</div>
    <div class="other">
        <?php //вывод статьи.
        for ($i=0; $i < count($articles[0]); $i++) {//пока счетчик цикла меньше кол-ва статей полученных, то выводить статью?>
            <div class="otherart">
                <div class="imgwrapper" style="background-image: url('../../uploads/images/<?php echo $articles[0][$i]['image']; ?>');"></div>
                <a href="/articles/<?php echo $articles[0][$i]['id']; ?>"><h2><?php echo $articles[0][$i]['title']; ?></h2>
                    <span class="dateart"><?php echo $articles[0][$i]['pubdate']; ?></span></a>
            </div>
        <?php
        }
        ?>
    </div>
</main>