<div class="wrapper-mediaimage <?= $data->imageScale() ?>">
  <?php if($image = $data->image()->toFile()): ?>
    <?php snippet('picture', [
      "image" => $image,
      "class" => $data->class(),
      'srcset' => [
        '300'  => ['width' => 475],
        '480'  => ['width' => 555],
        '576'  => ['width' => 525],
        '768'  => ['width' => 750],
        '992'  => ['width' => 425],
        '1200' => ['width' => 600],
      ],
    ]);?>
  <?php endif ?>
</div>
  