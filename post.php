<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="page-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <p class="post-meta">
            <?php _e('Written by '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
            <?php _e(' on '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
            <?php _e(' in '); ?><?php $this->category(','); ?>
        </p>
        <div class="post-content" itemprop="articleBody">
            <?php
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
    $replacement = '<a href="$1" data-fancybox="gallery" /><img src="$1" alt="'.$this->title.'" title="点击放大图片"></a>';
    $content = preg_replace($pattern, $replacement, $this->content);
    echo $content;
?>
        </div>
        <p itemprop="keywords" class="tags"><?php _e('Tags: '); ?><?php $this->tags(', ', true, 'None'); ?></p>
    	
    </article>
	
    <?php $this->need('comments.php'); ?>

</div><!-- end #main-->


<?php $this->need('footer.php'); ?>
