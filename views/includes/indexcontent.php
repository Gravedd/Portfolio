<main>
    <div class="h2-like">Обо мне</div>
    <div class="about">
        <!--БЛОК ОБО МНЕ-->
        <div class="leftside" tabindex="0">
            <div class="imgwrapper"></div>
            <h2>
                <a href="/articles/<?php echo $aboutme[0]['id']; ?>">
                    <?php echo $aboutme[0]['title']; ?></h2>
            <span class="textart"><?php echo $aboutme[0]['content']; ?><br></span>
            <span class="dateart"><?php echo $aboutme[0]['pubdate']; ?></span></a>
            </a>
        </div>


        <!--БЛОКИ SOFT & HARD skills-->
        <div class="rightside">

            <!--БЛОК SOFT Skills-->
            <div class="aboutart">
                <div class="imgwrapper"></div>
                <h2>
                    <a href="/articles/<?php echo $softskills[0]['id']; ?>">
                    <?php echo $softskills[0]['title']; ?></h2>
                <span class="dateart"><?php echo $softskills[0]['pubdate']; ?></span></a>
            </div>


            <!--БЛОК HARD SKILLS-->
            <div class="aboutart">
                <div class="imgwrapper"></div>
                <h2>
                    <a href="/articles/<?php echo $hardskills[0]['id']; ?>">
                    <?php echo $hardskills[0]['title']; ?></h2>
                <span class="dateart"><?php echo $hardskills[0]['pubdate']; ?></span></a>
            </div>

        </div>
    </div>

    <div class="h2-like">Мои проекты</div>
    <div class="other">
        <div class="otherart">
            <div class="imgwrapper"></div>
            <a href="/articles/1"><h2>What is Lorem Ipsum?</h2>
            <span class="dateart">2021-11-14</span></a>
        </div>
        <div class="otherart">
            <div class="imgwrapper"></div>
            <a href="/articles/1"><h2>What is Lorem Ipsum?</h2>
            <span class="dateart">2021-11-14</span></a>
        </div>
        <div class="otherart">
            <div class="imgwrapper"></div>
            <a href="/articles/1"><h2>What is Lorem Ipsum?</h2>
            <span class="dateart">2021-11-14</span></a>
        </div>
        <div class="otherart">
            <div class="imgwrapper"></div>
            <a href="/articles/1"><h2>What is Lorem Ipsum?</h2>
            <span class="dateart">2021-11-14</span></a>
        </div>
    </div>
</main>