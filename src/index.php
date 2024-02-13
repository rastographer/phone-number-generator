<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phone Number Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .rounded-div {
      border: 1px solid grey;
      border-radius: 10px;
      padding: 20px;
      width: 400px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="rounded-div">
    <h2 class="mb-4 text-center">Phone Number Generator</h2>
    <form id="phoneForm" action="" method="post">
      <div class="mb-3">
        <label for="country_code" class="form-label">Country Code:</label>
        <input type="text" class="form-control" id="country_code" name="country_code" required>
      </div>
      <div class="mb-3">
        <label for="random_number" class="form-label">Random Number:</label>
        <input type="text" class="form-control" id="random_number" name="random_number" required>
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" class="form-control" id="quantity" name="quantity" required>
      </div>
      <div class="text-center">
        <button type="button" id="generateButton" class="btn btn-primary">Generate Numbers</button>
      </div>
    </form>
    <div id="phoneNumbers" class="mt-4"></div>
  </div>
</div>

<footer class="text-center mt-4">
  <p>All Rights Reserved. Created by Tony</p>
</footer>

<script src="assets/scripts.js"></script>
</body>
</html>