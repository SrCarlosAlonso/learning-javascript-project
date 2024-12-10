<?php
const API_URL = "https://www.whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$data = json_decode($response, true);
$day_until = $data["days_until"];
$title = $data["title"];
$overview = $data["overview"];
$poster = $data["poster_url"];
curl_close($ch);
?>

<main>
  <h2>The next UCM movie is <span style="color:rebeccapurple;"><?php echo $day_until; ?></span> days away!</h2>
  <H3>
      <h1><?php echo $title; ?></h1>
  </H3>
    <img style="width: 400px; border-radius: 10px;" src="<?php echo $poster; ?>">
  <p><?php echo $overview; ?></p>
</main>

<style>
  :root {
    color-scheme: light dark;
  }
  body{
    font-family: sans-serif;
    display: grid;
    place-content: center;
  }
  main{
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    text-align:center;
  }

</style>
