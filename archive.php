<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main">
	<div class="post-list">

        <p class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></p>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
        <article class="post">
        	<a class="post-item" style="background-image:url('<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
<?php else: ?>
<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
<?php else: ?>
<?php showThumbnail($this); ?>
        <?php endif; ?>
        <?php endif; ?>')" href="<?php $this->permalink() ?>">
			<h2 class="post-title">
				<?php $this->title() ?>
			</h2>
				<span class="post-list-date"><?php $this->date(); ?></span>
			</a>
        </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

	<?php $this->pageLink('加载更多','next'); ?>
    </div><!-- end #main -->
</div>
</div>
	<?php $this->need('footer.php'); ?>
