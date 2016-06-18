<? include('./layouts/header.php');?>
  
  <div class="row">
    <div class="columns">
      <h1>Video Platform Specification</h1>
      <div class="callout">      
        <h3>Part 1 - Upload</h3>
        <h4>Video On Demand</h4>
        <p>Our system would need to make uploading video as easy as Youtube.
        This would likely be via a web interface that would allow people to
        upload their files and add all appropriate metadata. This might include
        concert programmes, scores, lecture slides and other details currently
        not collected by YouTube.</p>
        <h4>Live</h4>
        <p>The system would ideally receive a single feed from an encoder like
        Wirecast/OBS via RTMP and have the facility to also receive a backup stream.</p>
        <div class="callout success">
          <h4>Minimum Viable Product</h4>
          <p>Use Amazon S3 PHP SDK to build simple upload form that uploads a file to an S3 bucket.</p>
        </div>
      </div>
      <div class="callout">
        <h3>Part 2 - Processing</h3>
        <h4>Video On Demand</h4>
        <p>Once upload was completed the system would need to have an automated
        transcoding pipeline. Newly uploaded videos would be transcoded at
        different levels of quality to support Adaptive Bitrate Streaming.</p>
        <h4>Live</h4>
        <p>Similarly system should receive one stream and transcode output files
        required for ABS.</p>
        <div class="callout success">
          <h4>Minimum Viable Product</h4>
          <p>Use Amazon Lambda to run a script each time a new object is created in the upload S3 bucket.  The script creates a job to transcode the uploaded file into three HLS-ready files at 400k, 1M and 2M bitrates.  These files will be created in a different 'output' bucket.</p>
        </div>
      </div>
      <div class="callout">
        <h3>Part 3 - Distribution</h3>
        <p>All content should be made available via a CDN with a reliable
        service and a well developed network of global edge locations.</p>
        <div class="callout success">
          <h4>Minimum Viable Product</h4>
          <p>The output bucket is being mirrored by CloudFront CDN making the transcoded files available at 43 edge locations around the world.</p>
        </div>
      </div>
      <div class="callout">
        <h3>Part 4 - Playback</h3>
        <p>Parts 1, 2 and 3 of the system should "just work". It will be the
        presentation of playback UI that will make people choose to use the
        system. This will be a combination of player features and the creation
        of a 'digital concert hall' site that can be made available via an
        institution's website.</p>
        <p>It will be here that we will be able to answer the question "why not
        Youtube?".</p>
        <p>The answer is control. Control of the features your users have when
        viewing your content and control over the content itself.</p>
        <p>Suggested features:</p>
        <ul>
          <li>Player skinning/branding</li>
          <li>Video watermarking</li>
          <li>Pay to view</li>
          <li>Pay to watch in HD</li>
          <li>Password protected content</li>
          <li>Subscriptions</li>
          <li>In-video events - eg. clickable program links to the start time
          in concert</li>
          <li>Ability to add adverts/preroll content</li>
          <li>Detailed analytics</li>
          <li>Interfaces customised for showing concerts and lectures</li>
          <li>Additional information - chat, scores, twitter, programmes</li>
        </ul>
            <div class="callout success">
              <h4>Minimum Viable Product</h4>
              <p>Set up demo interfaces using some of these features.</p>
            </div>

      </div>
    </div>
  </div>
<? include('./layouts/footer.php');?>