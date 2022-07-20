<?php
/**
 * 一款粉色调主题，希望能够喜欢~<a href="https://yixinya.cn/first.html">模板简介</a>
 * 
 * @package First For Typecho
 * @author 一新
 * @version 1.0
 * @link https://www.yixinya.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="main">
	<div class="post-list">

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

	<?php $this->pageLink('加载更多','next'); ?>

	</div>
</div>


<?php $this->need('footer.php'); ?>
