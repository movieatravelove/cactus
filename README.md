# 仙人掌 Cactus

### FORK

forked from [Seevil/cactus](https://github.com/Seevil/cactus)

🌵 一个响应式干净和简洁优雅的 Typecho 主题

主题移植至 Hexo 同名主题 [hexo-theme-cactus][1]参考(抄)了部分 [Alili][2]的样式和功能。

主题详情：https://www.xde.io/typecho/cactus.html

### 修改

**2022.11.04**

- 修改加密文章标题可见

  修改网站文件：`var/Widget/Abstract/Contents.php`，`$value['title'] = _t('此内容被密码保护');` 替换为 `$value['title'] = '[加密] ' . $value['title'];`

- 修改文章页细节

**2022.07.25**

- 模板设置中新增自定义导航

**2022.04.19**

- 首页每日一句换为一言接口

- 增加分类标签

**2020.11**

- 修改内容页宽度

- 修改文章标题显示长度

- 修改首页每日一句（footer.php、functions.php）

- 增加文章字数统计 **[ Typecho_WordsCounter](https://github.com/elatisy/Typecho_WordsCounter)**

- 修改文章标题样式

- 增加独立相册 By [Time 时光相册](https://www.abcio.cn/C/314.html)

  使用方法：

  下载解压 TimeImg.php 放在 Typecho 主题目录，新建独立页，模板选独立相册，图片格式如下：

  ```
  足记,2020年06月01日拍摄,https://yun.abcio.cn/blog/13.jpg
  足记,2020年06月02日拍摄,https://yun.abcio.cn/blog/14.png
  足记,2020年06月03日拍摄,https://yun.abcio.cn/blog/15.jpg
  足记,2020年06月04日拍摄,https://yun.abcio.cn/blog/16.jpg
  ```

- 修改默认表格样式

- 增加 `友情链接` 模板

  用法：新建独立页面，自定义模板选择 `友情链接`

  内容格式：`网站名称,网站链接`

  自定义字段：`title`：页面标题，`remark`：底部备注

- 增加 `分类` 模板

  用法：新建独立页面，自定义模板选择 `分类`



## 设置
```
logo: https://oss.jianz.xyz/blog/logo/logo.png
github: https://github.com/movieatravelove
gitee: https://gitee.com/march21sunny
备案号： 陕ICP备2021010762号
文章置顶：66 58

projects:
网站导航 | http://nav.jianz.xyz/ | 收集常用、有趣、好玩的网站
时光相册 | http://photo.jianz.xyz/ | 生活相册记录
每日提醒 | https://github.com/movieatravelove| 每天定时发送一封暖心小邮件
springboot-module-demo| https://github.com/movieatravelove/springboot-module-demo | SpringBoot 多模块工程 Demo 

自定义导航：
Nav | http://nav.jianz.xyz/ 
Photo | http://photo.jianz.xyz/  

运行时间：2020-09-01 08:08:08
.SiteRunningTime{
    line-height: 25px;
    padding-bottom: 2rem;
}



```