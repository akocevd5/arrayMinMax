<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


  <h1>Array Min and Max</h1>
  <form method="POST">
      <p>
          Enter a comma-separated list of numbers:
          <input type="text" name="numbersInput" />
          <button type="submit" name="submit">Find Min and Max</button>
      </p>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["numbersInput"])) {
          $numbers = explode(",", $_POST["numbersInput"]);

          // Remove any leading/trailing whitespaces from each number
          $numbers = array_map("trim", $numbers);

          // Convert each number from string to float
          $numbers = array_map("floatval", $numbers);

          $min = min($numbers);
          $max = max($numbers);

          echo "<p>Minimum value: $min</p>";
          echo "<p>Maximum value: $max</p>";
      }
  }


?>
    
</body>
</html>