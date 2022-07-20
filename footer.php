<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div>

<footer>
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
    Theme <a href="https://www.yixinya.cn/first.html" target="_blank">First</a>.
    <br>
    <p style="color:#999">建站日期：<?php $this->options->bs(); ?></p>
</footer>

<?php $this->footer(); ?>

<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.staticfile.org/fancybox/3.5.2/jquery.fancybox.min.css">
<script src="https://cdn.staticfile.org/fancybox/3.5.2/jquery.fancybox.min.js"></script>
<script type="text/javascript">



jQuery(document).ready(function($) {
	$( ".fancybox").fancybox();
	
	//新标签页打开
	$('.post-content a').attr('target','_blank');
	//折叠评论
	$('.comments-toggle').click(function(){
		$('#comments').slideToggle('fast',function(){
			if($('.comments-toggle').text()=='折叠评论'){
				$('.comments-toggle').text('展开评论');
			}else{
				$('.comments-toggle').text('折叠评论');
			}
		});
	})
    //点击下一页的链接(即那个a标签)
    $('.next').click(function() {
        $this = $(this);
        $this.addClass('loading').text('正在努力加载'); //给a标签加载一个loading的class属性，用来添加加载效果
        var href = $this.attr('href'); //获取下一页的链接地址
        if (href != undefined) { //如果地址存在
            $.ajax({ //发起ajax请求
                url: href,
                //请求的地址就是下一页的链接
                type: 'get',
                //请求类型是get
                error: function(request) {
                    //如果发生错误怎么处理
                },
                success: function(data) { //请求成功
                    $this.removeClass('loading').text('点击查看更多'); //移除loading属性
                    var $res = $(data).find('.post'); //从数据中挑出文章数据，请根据实际情况更改
                    $('.post-list').append($res.fadeIn(500)); //将数据加载加进posts-loop的标签中。
                    var next = $('.next');
                    $('.post-list').append(next);
                    var newhref = $(data).find('.next').attr('href'); //找出新的下一页链接
                    if (newhref != undefined) {
                        $('.next').attr('href', newhref);
                    } else {
                        $('.next').remove(); //如果没有下一页了，隐藏
                    }
                }
            });
        }
        return false;
    });
});
</script>

</body>
</html>
