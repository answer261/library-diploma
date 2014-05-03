<!-- Basic Pagination View -->
<ul class="pagination">

	<?php if ($first_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($first_page)) ?>" rel="first"><?php echo "Перший" ?></a></li>
	<?php else: ?>
		<!--<?php echo "Перший" ?>-->
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($previous_page)) ?>" rel="prev"><?php echo "Попередній" ?></a></li>
	<?php else: ?>
		<!--<?php echo "Попередній" ?>-->
	<?php endif ?>

	<?php for ($i = 1; $i <= $total_pages; $i++): ?>

		<?php if ($i == $current_page): ?>
			<li><strong><?php echo $i ?></strong></li>
		<?php else: ?>
			<li><a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a></li>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($next_page)) ?>" rel="next"><?php echo "Наступний" ?></a></li>
	<?php else: ?>
		<!--<li><?php echo "Наступний" ?></li>-->
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($last_page)) ?>" rel="last"><?php echo "Останній" ?></a></li>
	<?php else: ?>
		<!--<li><?php echo "Останній" ?></li>-->
	<?php endif ?>
</ul>
<!--</p>-->
<!-- .pagination -->