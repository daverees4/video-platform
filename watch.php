<? include('./layouts/header.php');?>
<div class="row">
  <div class="columns">
    <div class="callout">
      <h3>Video On Demand Playback</h3>
    </div>
  </div>
</div>

<div class="row">
  <div class="large-12 columns">
    <div class="flowplayer">
      <video>
        <source type="application/x-mpegurl" src="http://d3rjjofeplqma4.cloudfront.net/transcoder/output/<?=$_GET['videoid'];?>/playlist.m3u8">
      </video>
    </div>
  </div>
</div>
<? include('./layouts/footer.php');?>