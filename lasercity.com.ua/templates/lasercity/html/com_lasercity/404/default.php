<?php defined('_JEXEC') or die;
header("HTTP/1.1 404 Not Found");
//узнаем ссылку на язык
$current_sef = ContentLoader::getUriByLanguage();

$language = JFactory::$language->getTag();
?>
<main>
  <section class="section-404" aria-labelledby="404">
      <div class="wrap-404">
          <h1 class="title-404"><?=JText::_('COM_LASERCITY_404_H1')?></h1>
          <div class="conteiner-img-404">
            <img src="/images/404.png" alt="">
          </div>
          <div class="conteiner-txt-404">
              <span>
                  <?=JText::_('COM_LASERCITY_404_TXT')?>
              </span>
          </div>
      </div>
  </section>
</main>
<!--<style>
    .section-404{
        text-align: center;
        padding: 65px 15px 170px 15px;
    }
    .wrap-404{
        display: inline-block;
        max-width: 765px;
        vertical-align: top;
    }
    .title-404{
        display: inline-block;
        width: 100%;
        vertical-align: top;
        margin: 0;
        padding: 0;
        font-size: 36px;
        color:#000;
    }
    .conteiner-img-404{
        display: inline-block;
        width: 100%;
        vertical-align: top;
    }
    .conteiner-img-404 img{
        display: inline-block;
        vertical-align: top;
        margin: 45px 0 65px 0;
    }
    .conteiner-txt-404{
        display: inline-block;
        width: 100%;
        vertical-align: top;
        font-size: 16px;
        color: #757575;
        line-height: 25px;
        text-align: center;
    }
    .conteiner-txt-404 span{
        text-align: left;
        display: inline-block;
        vertical-align: top;
        border-bottom: 1px solid #e9e9e9;
        padding-bottom: 13px;
    }
</style>-->