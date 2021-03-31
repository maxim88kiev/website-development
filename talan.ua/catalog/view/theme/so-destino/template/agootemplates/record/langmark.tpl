<?php if (count($languages) > 1) { ?>


<div class="btn-group languages-block">

<div id="form-language">
 

<div class="btn-group">
 <?php foreach ($languages as $language) { ?>
 

<div class="language-btn">
 <?php if($language['current']){ ?>
 <span class="hidden-xs"><?php echo $language['name']; ?></span> 
 <?php } else{ ?>
 <button class="btn-block language-select" onclick="window.location = '<?php echo $language['url']; ?>'"><?php echo $language['name']; ?></button>
 <?php } ?>
 </div>


 <?php } ?>
 </div>


 
 
</div>

</div>


<?php } ?>
