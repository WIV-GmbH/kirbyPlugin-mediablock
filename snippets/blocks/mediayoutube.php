<?php
  preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $data->youtubelink(), $match);
  if(!empty($match)) {
    $youtubeID = $match[1];
  }
?>

<div class="wrapper-mediayoutube">
  <<?= $data->headlineSize() ?>><?= $data->headline() ?></<?= $data->headlineSize() ?>>
  <div class="iframe-wrapper">
    <iframe
      class="lazy"
      data-src="https://www.youtube-nocookie.com/embed/<?= $youtubeID ?>"
      width="100%"
      height="auto"
      allowfullscreen
    ></iframe>
  </div>
</div>
  