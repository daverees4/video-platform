<? include('./layouts/header.php');?>
<div class="row">
  <div class="columns">
    <div class="callout">
      <h1>Live Player</h1>
      <p>To see video here, send a livestream called davetest to: rtmp://ec2-52-208-119-65.eu-west-1.compute.amazonaws.com/live</p>
      <p>If there are problems, this is probably due to security settings on the server.</p>
    </div>
  </div>
</div>

<div class="row">
  <div class="large-12 medium-12 columns">
    <div data-live="true" data-ratio="0.5625" class="flowplayer fixed-controls">
      <video data-title="Live stream">
        <source type="application/x-mpegurl" src="http://ec2-52-209-131-58.eu-west-1.compute.amazonaws.com/live/myStream/playlist.m3u8">
      </video>
    </div>
  </div>
</div>
<? include('./layouts/footer.php');?>