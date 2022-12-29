<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Form Validation</h3>
  <p>Try to submit the form.</p>
  <?php
// define variables and set to empty values
$nameErr = $RollErr = $DepartmentErr = $GPAErr = "";
$name = $Roll = $Department = $GPA = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["Roll"])) {
    $RollErr = "Roll is required";
  } else {

    
  }
    
  if (empty($_POST["Department"])) {
    $Department = "Department is required";
  } else {

    
  }

  if (empty($_POST["GPA"])) {
    $GPAerr = "GPA is required";
  } else {
    $comment = test_input($_POST["GPA"]);
  }

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    
  <form action="/Armin 28-project" class="was-validated" method ="post">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required value="<?php echo $name;?>" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Roll:</label>
      <input type="password" class="form-control" id="Roll" placeholder="Enter your Roll number" name="Roll" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Department:</label>
      <select class="form-select" id="Department"placeholder="Enter your Department" name="Department">
      <option>CSE</option>
      <option>CIVIL</option>
      <option>MT</option>
    </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">GPA:</label>
      <input type="password" class="form-control" id="GPA" placeholder="Enter your GPA " name="GPA" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">I agree on blabla.</label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
