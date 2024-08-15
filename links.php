<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<?php
/**
 * 友情链接
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
        <h1>Links</h1>
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
      .block {
        padding-left: 5px;
        margin-bottom: 8px;
      }

      .block::before {
        content: "# ";
      }

      .remark p {
        font-size: 14px;
        color: #878787;
        font-style: italic;
        margin: 0;
      }

      .remark blockquote {
        margin-left: 10px;
      }

      .remark blockquote::before {
        color: #ccffb6;
        content: "\201C";
        font-size: 25px;
        position: relative;
        top: 15px;
      }

      .remark blockquote::after {
        color: #ccffb6;
        content: "\201E";
        font-size: 25px;
        float: right;
        position: relative;
        bottom: 15px;
      }
    </style>


    <div class="link">

      <!-- title -->
      <?php if ($this->fields->title) : ?>
        <h1><?php echo $this->fields->title; ?></h1>
      <?php else : ?>
        <h1><?php $this->title(); ?></h1>
      <?php endif ?>

      <!-- Main -->
      <div id="main">
        <!-- <div class="post">
          <div class="entry_text">
            <?php $this->content(); ?>
          </div>
        </div> -->
      </div>

      <!-- footer -->
      <div class="remark">
        <?php if ($this->fields->remark) : ?>
          <blockquote>
            <p><?php echo $this->fields->remark; ?></p>
          </blockquote>
        <?php endif ?>
      </div>
    </div>


    <!--
		动态读取数据
	-->
    <script type="text/javascript">
      var datas =
        `<?php
          $html = $this->row['text'];
          echo $html;
          ?>`;
      datas = datas.split("\n");
      for (var i = 0; i < datas.length; i++) {
        datas[i] = datas[i].split(",");
      }

      function creatArticle(datas) {
        var parent = document.getElementById("main");
        for (var i = 0; i < datas.length; i++) {
          if (datas[i] != '') {
            var block = document.createElement("li");
            block.className = "block";
            parent.appendChild(block);


            var a = document.createElement("a");
            a.className = "text";
            a.href = datas[i][1];
            a.target = "_blank"
            a.innerHTML = datas[i][0];
            block.appendChild(a);
          }
        }
      }
      creatArticle(datas);
    </script>

    <?php $this->need('comments.php'); ?>


  </div>


  <?php $this->need('footer.php'); ?>