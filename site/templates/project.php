<?php snippet('header') ?>

<main>
	<h1><?php echo $page->title()->kirbytext() ?></h1>
	<h1><?php echo $page->author()->kirbytext() ?></h1>
	<h1><?php echo $page->year()->kirbytext() ?></h1> 
<?php echo $page->book()->kirbytext() ?>
</main>

<?php snippet('footer') ?>