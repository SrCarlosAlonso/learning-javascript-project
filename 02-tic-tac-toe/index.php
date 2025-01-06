<?php
const html = "
    <h1> Tic tac toe</h1>
    <p> This is my fist app in PHP</p>
    <a id='btn-start' href='#'>Start </a>
  ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      font-size: 62.5%;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      color: #723772;
    }

    body {
      height: 100vh;
      display: grid;
      place-items: center;
      background-color: thistle;
      font-size: 1.6rem;
    }

    section {
      width: 100%;
      max-width: 800px;
      background-color: #f4dff4;
      padding: 3.2rem;
    }

    h1 {
      font-size: 3rem;
    }

    p {
      color: #723772;
      height: auto;
      margin-bottom: 2rem;
      line-height: 1.2;
    }

    a {
      background-color: #723772;
      text-decoration: none;
      font-weight: bold;
      color: #f4dff4;
      line-height: 1.2;
      padding: 1rem 2rem;
      transition: filter 300ms ease;

      &:hover {
        filter: saturate(1.5);
      }
    }
  </style>
</head>

<body>
  <section>
    <?= html ?>
  </section>
</body>

</html>
