<?php if ($reviews) { ?>
<?php foreach ($reviews as $review) { ?>


<div class="review_block_customers">
  <div class="review_block_customers_product">
    <div class="review_block_customers_product_img">
      <img src="image/catalog/product/product1.png" alt="">
    </div>
    <div class="review_block_customers_product_txt">
      Галька Sherry 100-300 мм
    </div>
  </div>
  <div class="review_block_customers_text">
    <div class="review_block_customers_text_description"><?php echo $review['text']; ?></div>
    <div class="review_block_customers_text_bot">
      <div class="customers_text_bot--author"><?php echo $review['author']; ?></div>
      <div class="customers_text_bot--date_added"><?php echo $review['date_added']; ?></div>
      <div class="customers_text_bot--answer">Ответить ></div>
    </div>



    <table class="">
      <tr>
        <td style="width: 50%;"><strong></strong></td>
        <td class="text-right"></td>
      </tr>
      <tr>
        <td colspan="2"><p></p>
          <?php for ($i = 1; $i <= 5; $i++) { ?>
          <?php if ($review['rating'] < $i) { ?>
          <?php } else { ?>
          <?php } ?>
          
			<?php } ?>
			<?php if ($review['answer']) { ?>
			<hr>
			  <div class="answer_admin">
				<p><strong><?php echo $review['admin_author']; ?></strong> - <?php echo $entry_admin_author; ?></p>
				<p><?php echo $review['answer']; ?></p>
			  </div>
			<?php } ?>
			</td>
		
      </tr>
    </table>



  </div>
</div>


<?php } ?>
<div class="text-right"><?php echo $pagination; ?></div>
<?php } else { ?>
<p><?php echo $text_no_reviews; ?></p>
<?php } ?>
