<?php
if (isset($_POST['region'])) {
  if ($_POST['region'] != getenv("FLY_REGION")) {
    header("fly-replay: region=" . $_POST['region']);
    exit();
  }
  header_remove("fly-replay");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Fly machine(
    <?php echo getenv("FLY_REGION") ?>)
  </title>
  <style>
    html {
      color-scheme: light dark;
    }

    body {
      width: 35em;
      margin: 0 auto;
      font-family: Tahoma, Verdana, Arial, sans-serif;
    }
  </style>
</head>

<body>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

  <h1>Welcome to fly machines(
    <?php echo getenv("FLY_REGION") ?>) via terraform!
  </h1>
  <p>If you see this page, the nginx web server is successfully installed and
    working. This page is being served from a machine in
    <?php echo getenv("FLY_REGION") ?>
  </p>

  <h2>Force region:</h2>
  <form method="post">
    <button type="submit" name="region" value="ewr">ewr</button>
    <button type="submit" name="region" value="lax">lax</button>
  </form>
  <p><em>Thank you for using fly.io :)</em></p>
</body>

</html>
