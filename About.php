<?php
function getTrackListings(){
  return array(
    1 => 'Rick Astley - Never Gonna Give You Up',
    2 => 'ODB - Shimmy Shimmy Ya',
    3 => 'Jimi Hendrix - All Along the Watchtower',
  );
}

function sendTrackRequest($track){
  return mail(
    'you@emample.org',
    'Track Request',
    sprintf('Please play %s, lots of love, a user.', $track)
  );
}

if('POST' === $_SERVER['REQUEST_METHOD']){
  
  $track_id = filter_input(INPUT_POST, 'track_id');
  
  $tracks = getTrackListings();

  if(array_key_exists($track_id, $tracks)){
    sendTrackRequest($tracks[$track_id]);
  }
  
}
?>
<html>
  <head>
    <title>Track Request</title>
  </head>
  <body>
    <?php foreach(getTrackListings() as $id => $name): ?>
      <form action="#" method="post">
        <div>
          <?php echo $name; ?>
          <input type="hidden" name="track_id" value="<?php echo $id; ?>" />
          <input type="submit" value="request this" />
        </div>
      </form>
    <?php endforeach; ?>
  </body>
</html>
