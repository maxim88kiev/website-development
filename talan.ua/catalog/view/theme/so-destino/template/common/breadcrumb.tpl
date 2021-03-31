<ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
    <? 

	foreach ($breadcrumbs as $breadcrumb_indx => $breadcrumb) : ?>
        <? $clean_text = trim(strip_tags($breadcrumb['text'])); ?>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		
		<? if ($breadcrumb == end($breadcrumbs)) { ?>
			<span<? if ($clean_text) : ?> itemprop="name"<? endif; ?>><?= $breadcrumb['text']; ?></span>
		<? } else { ?>
			<a itemprop="item" href="<?= $breadcrumb['href']; ?>">
                <span<? if ($clean_text) : ?> itemprop="name"<? endif; ?>><?= $breadcrumb['text']; ?></span>
			</a>
		<? } ?>
				
            <? if (!$clean_text && !$breadcrumb_indx) : ?>
                <meta itemprop="name" content="Talan">
            <? endif; ?>
            <meta itemprop="position" content="<?= ($breadcrumb_indx + 1); ?>">
        </li>
		
		<? 
		if($breadcrumb["text"] == '<i class="fa fa-home"></i>' 
		&& count($breadcrumbs) == 2 
		&& $_SERVER['REQUEST_URI'] !== '/category/all/') : ?>
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a itemprop="item" href="category/all/">
					<span itemprop="name"><?= $text_oll_prod; ?></span>
				</a>
			</li>
		<? endif; ?>
		
    <? endforeach; ?>
</ul>