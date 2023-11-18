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
  <title>
    Snapaper Files -
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

  <h1>Snapaper Files (
    <?php echo getenv("FLY_REGION") ?>)
  </h1>
</body>

</html>
