<div class="item">
	
	<div class="media-left">
		<?php if( $blog['thumb'] && $blog_image )  { ?>
		<a href="<?php echo $blog['link'];?>" target="<?php echo $item_link_target?>">
			<img src="<?php echo $blog['thumb'];?>" alt="<?php echo $blog['title'];?>" class="media-object"/>
		</a>
		<?php } ?>
		<?php if($display_date_added){ ?>
			<div class="media-date-added"><b><?php echo date('j', strtotime($blog['date_modified'])) ?></b><span><?php echo date('M', strtotime($blog['date_modified'])) ?></span>
			</div>
		<?php }?>
	</div>
	
	<div class="media-body">			
		<div class="media-content">
			<?php if ($display_title){ ?>
			<div class="media-heading h4">
				<a href="<?php echo $blog['link'];?>" title="<?php echo $blog['title'];?>" target="<?php echo $item_link_target?>"><?php echo $blog['title_maxlength'];?></a>
			</div>
		<?php }?>
			<?php if($display_description){ ?>
				<div class="description">
						<?php $blog['description'] = strip_tags($blog['description']); ?>
						<?php echo utf8_substr( $blog['description'],0, 200 );?>...
				</div>
			<?php }?>
			<?php if($display_author || $display_view || $display_readmore ) {?>
				<div class="media-subcontent">
				<?php if($display_author){ ?>
					<span class="media-author"><?php echo ucwords($blog['author']); ?></span>
				<?php }?>
				<?php if($display_comment){ ?>
					<span class="media-comment"><?php echo $blog['comment_count']; //echo $blog['text_comment']?><i class="fa fa-comments"></i></span>
				<?php }?>
				<?php if($display_view){ ?>
					<span class="media-view"><?php echo $blog['view_count']; echo $blog['text_view']?></span>
				<?php }?>
				</div>
				<?php if($display_readmore){ ?>
				<div class="readmore">
					<a href="<?php echo $blog['link'];?>" target="<?php echo $item_link_target?>" class="readmore"><?php echo $readmore_text;?> <i class="fa fa-arrow-circle-right"></i></a>
				</div>

				<?php }?>
			<?php }?>
		</div>
	</div>
</div>


