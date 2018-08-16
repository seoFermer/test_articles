<div class="wrapper">
    <section class="user_post">
        <h5 class="message"><?= $_COOKIE['message']?></h5>
        <form action="#" method="post">
            <input type="text" name="name">
            <textarea name="content" cols="30" rows="5"></textarea>
            <input type="submit" value="send">
        </form>
    </section>
    <section>
        <hr>
        <h1>Articles</h1>

        <?php foreach ($articles as $article):?>
            <article>
                <h2><?=$article['name']?> <span class="date">(<?=$article['date']?>)</span></h2>
                <p><?=$article['content']?></p>
            </article>
        <?php endforeach;?>
    </section>
</div>
</body>
</html>
