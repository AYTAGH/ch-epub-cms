
<div class="grid">
<?php foreach(page('projects')->children()->visible() as $project): ?>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <div class ="col-1-3">
      <a href="<?php echo $project->url() ?>">
        <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
      </a>
    </div>
    <?php endif ?>
<?php endforeach ?>
</div>