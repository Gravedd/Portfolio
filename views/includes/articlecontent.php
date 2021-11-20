<main>
    <h1 class="h2-like"><?php echo $result[0]['title']; ?></h1>
    <div class="articlewrapper">
        <div class="articleMainImage" style="background-image: "></div>
        <span>
            <?php echo $result[0]['content']; ?>
        </span><br><br>
        <span class="dateart"><?php echo $result[0]['pubdate']; ?></span>
    </div>
</main>