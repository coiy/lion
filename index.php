<?php get_header(); ?>
<!-- Header Contents/ -->
    <!-- Menu/ -->
    <div class="menu sp">
      <a class="menu-trigger" href="#">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
    <!-- /Menu -->
    <!-- Menu_box/ -->
      <div class="menu_box sp">
        <ul class="main_category">
          <li class="spmenuicon1"><a href="/about.html">風に立つライオン基金とは</a></li>
          <li class="spmenuicon7"><a href="/company.html">組織概要</a></li>
          <li class="spmenuicon2"><a href="/purpose.html">事業目的</a></li>
          <li class="spmenuicon3"><a href="/comingsoon2.html">活動</a></li>
          <li class="spmenuicon4"><a href="/donation/index.html">基金へのご支援</a></li>
          <li class="spmenuicon5"><a href="/comingsoon.html">メンバー募集</a></li>
          <li class="spmenuicon6"><a href="/comingsoon2.html">風の広場</a></li>
          <li class="spmenuicon8"><a href="/comingsoon2.html">風の応援団</a></li>
        </ul>
        <!-- /share_menu -->
        <div class="share_sp">
          <ul>
            <li><a href="http://www.facebook.com/share.php?u=http://lion.or.jp/" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes');return false;"><img src="http://lion.or.jp/testblog/images/icon_facebook2.png" width="31px"/></a></li>
            <li class="likebtn2">
              <div class="fb-share-button" data-href="https://www.facebook.com/%E4%B8%80%E8%88%AC%E8%B2%A1%E5%9B%A3%E6%B3%95%E4%BA%BA-%E9%A2%A8%E3%81%AB%E7%AB%8B%E3%81%A4%E3%83%A9%E3%82%A4%E3%82%AA%E3%83%B3%E5%9F%BA%E9%87%91-1131646966864149/timeline/" data-layout="button_count"></div>
              <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
            </li>
          </ul>
        </div>
        <!-- /btn_menu -->
        <!-- <div class="bannerarea_sp">
          <a href="http://www.tokyu-dept.co.jp/toyoko/scramble/"><img src="http://lion.or.jp/testblog/images/banner2.png" width="100%"/></a>
        </div> -->
        <div class="menucompany_sp">
          <p>Copyright 一般財団法人 風に立つライオン基金　All Rights Reserved</p>
        </div>
      </div>
      <div class="menusp_bar"><img src="http://lion.or.jp/testblog/images/menusp_colorbar.png" width="100%"/></div>
      <!-- /Menu_box -->
  </div>
</div>
<!-- /Header Contents -->
<!-- Main Images/ -->
<div id="main_images">
  <div class="slide_all pc">
    <div class="slide_wrap">
      <div class="slide_body">
        <div class="slide"><a href="/news/no151021.html"><img src="http://lion.or.jp/testblog/images/slide2.png"></a></div>
        <!-- <div class="slide"><a href=""><img src="http://lion.or.jp/testblog/images/slide1.png"></a></div>
        <div class="slide"><a href=""><img src="http://lion.or.jp/testblog/images/slide1.png"></a></div> -->
      </div>
    </div>
  </div>
  <!-- <div class="control">
    <span id="slider-prev"></span>
    <span id="slider-next"></span>
  </div> -->
  <ul class="sp">
    <li><a href="/news/no151021.html"><img src="http://lion.or.jp/testblog/images/slide2.png"></a></li>
    <!-- <li><a href="/fashion/article.html"><img src="http://lion.or.jp/testblog/images/slide1.png"></a></li> -->
    <!-- <li><a href="/fashion/article.html"><img src="http://lion.or.jp/testblog/images/slide1.png"></a></li> -->
  </ul>
</div>
<!-- /Main Images -->
<!-- <script type="text/javascript">
var pagenum = 0;
window.onload = function()
{
getDataList('content_wrap');
};
</script> -->
<!-- Contents/ -->
<div id="contents">
  <!-- Main Contents/ -->
  <div id="main_contents">
      <!-- <div class="dots-loader" id="loader1">
        Loading…
      </div>
      <div class="dots-loaderie8" id="loader2">
        Loading…
      </div> -->
    <!-- Content_wrap/ -->
    <div id="content_wrap">
			<div class="content">
			<?php
			if(have_posts()) {
				while(have_posts()) {
						the_post();
						_e("Category", 'lion');
						the_category('&gt;', 'multiple');
						?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php the_post_thumbnail(small-thumbnail); ?>
								<?php the_content(); ?>
			<?php
				}
			}
			?>
		</div>
  </div><!-- Content_wrap -->
  </div>
  <!-- /Main Contents -->
  <!-- Side menu/ -->
  <div id="side_menu">
    <!-- Menu List/ -->
    <div class="main_list pc">
        <?php get_sidebar(); ?>
    </div>
    <!-- /Menu List -->
    <!-- Pr space/ -->
    <!-- <div class="pr_space">
      <ul>
        <li><a href=""><img src=""></a></li>
      </ul>
    </div> -->
    <!-- /Pr space -->
    <!-- Facebook Box/ -->
    <div class="facebook_box">
      <div class="fb-page" data-href="https://www.facebook.com/%E4%B8%80%E8%88%AC%E8%B2%A1%E5%9B%A3%E6%B3%95%E4%BA%BA-%E9%A2%A8%E3%81%AB%E7%AB%8B%E3%81%A4%E3%83%A9%E3%82%A4%E3%82%AA%E3%83%B3%E5%9F%BA%E9%87%91-1131646966864149/timeline/" data-width="260" data-height="630" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
    </div>
    <div id="fb-root"></div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /Facebook Box -->
    <div class="pr_space">
      <a href="http://www.nagasakips.com/"><img src="http://lion.or.jp/testblog/images/banner1.png" alt=""/></a>
    </div>
  </div>
  <!-- /Side menu -->
</div>
<!-- /Contents -->

<?php get_footer(); ?>
