<!doctype html>
<head>
  <!-- player skin -->
  <link rel="stylesheet" href="skin/functional.css">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live Player</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">

  <!-- site specific styling -->
   <style>
   body { font: 12px "Myriad Pro", "Lucida Grande", sans-serif; text-align: center; padding-top: 5%; }
   </style>

   <!-- for video tag based installs flowplayer depends on jQuery 1.7.2+ -->
   <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

   <!-- include flowplayer -->
   <script src="flowplayer.min.js"></script>

</head>

<body>
<div class="row">
  <div class="columns">
    <div class="callout">
      <h1>Live Player</h1>
    </div>
  </div>
</div>

<div class="row">
  <div class="large-12 medium-12 columns">
    <div data-live="true" data-ratio="0.5625" class="flowplayer fixed-controls">
      <video data-title="Live stream">
        <source type="application/x-mpegurl" src="http://d13ot61jzxsx6y.cloudfront.net/davetest.m3u8">
      </video>
    </div>
  </div>
</div>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
</body>
</html>