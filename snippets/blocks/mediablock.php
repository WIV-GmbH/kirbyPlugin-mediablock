<?php 
  $media = false;
  $alignSelf = "";
	$justifyContent = "";

  if($block->mediabuilder()->isNotEmpty()) {
    $media = true;
    switch($block->position()) {
      case 'right':
        $position = 'order-lg-last';
        break;
      case 'left':
        $position = 'order-lg-first';
        break;
    }
  }

  if($block->alignSelf()->isNotEmpty()) {
    switch($block->alignSelf()) {
      case 'start':
        $alignSelf = 'align-self-start';
        break;
      case 'center':
        $alignSelf = 'align-self-center';
        break;
      case 'end':
        $alignSelf = 'align-self-end';
        break;
      default:
        echo "align-self-center";
    }
  }

  if($block->justifyContent()->isNotEmpty()) {
    switch($block->justifyContent()) {
      case 'start':
        $justifyContent = 'd-flex justify-content-start';
        break;
      case 'center':
        $justifyContent = 'd-flex justify-content-center';
        break;
      case 'end':
        $justifyContent = 'd-flex justify-content-end';
        break;
      default:
        echo "d-flex justify-content-center";
    }
  }
?>

<?php if($media): ?>
  <div class="media block block-type-<?= $block->type() ?> <?= $block->class();?> <?= $block->backgroundcolor();?> <?= $alignSelf;?> <?= $justifyContent ?>" id="<?= $block->id();?>">
		<?php foreach($block->mediabuilder()->toBlocks() as $media): ?>
			<?php 
				$sliderElementOnlyOneElement = false;
				if($media->type() == "mediaslider") {
					$sliderTotalSlides = $media->images()->toStructure()->count();
					if($sliderTotalSlides == 1) {
						$sliderElementOnlyOneElement = true;
					}
				}
				
				if($sliderElementOnlyOneElement) {
					snippet('blocks/mediaimage', array('data' => $media->images()->toStructure()->first()));
				} else {
					snippet('blocks/' . $media->type(), array('data' => $media)); 
				}
			?>
		<?php endforeach ?>

  </div>
<?php endif ?>