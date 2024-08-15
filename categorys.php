<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<?php
/**
 * 分类
 *
 * @package custom
 */
?>

<body>
  <div class="content index width mx-auto px3 my4">
    <header id="header">
      <a href="<?php $this->options->siteUrl(); ?>">
        <div id="logo" style="background-image: url(<?php if ($this->options->logoimg) : ?><?php $this->options->logoimg(); ?><?php else : ?><?php $this->options->themeUrl('images/logo.png'); ?><?php endif; ?>);"></div>
      </a>
      <div id="title">
        <h1>Category</h1>
      </div>
      <div id="nav">
        <ul>
          <li class="icon">
            <a href="#">
              <i class="fa fa-bars fa-2x"></i>
            </a>
          </li>
          <li>
            <a href="<?php $this->options->siteUrl(); ?>">Home</a>
          </li>
          <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
          <?php if ($this->options->github) : ?>
            <li>
              <a href="<?php $this->options->github(); ?>" target="_blank">Github</a>
            </li><?php endif; ?>
        </ul>
      </div>
    </header>

    <style type="text/css">
      .cate {
        font-size: 15px;
      }

      .cate .child {
        margin: 5px;
        padding: 0;
        margin-left: 20px;
      }

      .cate li {
        list-style: circle;
        /* list-style: circle; */
      }

      .cate .child li {
        list-style: none;
      }



      /* .parent {
        font-size: 17px;
      }

      .child {
        font-size: 15px;
      } */
    </style>

    <!-- <h1>Category</h1> -->

    <!-- 输出全部分类
    <?php $this->widget('Widget_Metas_Category_List')
      ->parse('<li><a href="{permalink}" title="{description}">{name}</a> ({count})</li>'); ?>
    -->

    <!-- 子分类 -->
    <div class="cate">
      <!-- <h1>Category</h1> -->
      <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
      <?php while ($categorys->next()) : ?>
        <?php if ($categorys->levels === 0) : ?>
          <?php $children = $categorys->getAllChildren($categorys->mid); ?>
          <?php if (empty($children)) { ?>
            <li <?php if ($this->is('category', $categorys->slug)) : ?> class="category active" <?php endif; ?>>
              <a class="parent" href="<?php $categorys->permalink(); ?>" title="<?php $categorys->description(); ?>"><?php $categorys->name(); ?></a>（<?php $categorys->count(); ?>）
            </li>
          <?php } else { ?>
            <li>
              <a data-toggle="dropdown" href="#" data-target="#"><?php $categorys->name(); ?></a>
              <ul class="child">
                <?php foreach ($children as $mid) { ?>
                  <?php $child = $categorys->getCategory($mid); ?>
                  <li <?php if ($this->is('category', $mid)) : ?> class="active" <?php endif; ?>>
                    <a class="child" href="<?php echo $child['permalink'] ?>" title="<?php echo $child['name']; ?>"><?php echo $child['name']; ?></a>（<?php $categorys->count(); ?>）
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>
        <?php endif; ?>
      <?php endwhile; ?>
    </div>


  </div>

  <?php $this->need('footer.php'); ?>



  <!-- 
    参考：
    https://blog.csdn.net/fonaix/article/details/102404563
    https://www.443.net.cn/showinfo-201-20548-0.html
    http://443.net.cn/showinfo-201-20520-0.html
-->