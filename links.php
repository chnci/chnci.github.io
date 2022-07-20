<?php
/**
 * 友情链接 
 *
 * @package custom
 */
 ?>
 
<?php $this->need('header.php'); ?>


<div class="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="page-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
            <ul class="links">
            <?php Links_Plugin::output("SHOW_MIX"); ?>
            </ul>
        </div>
    </article>
</div><!-- end #main-->


<?php $this->need('footer.php'); ?>