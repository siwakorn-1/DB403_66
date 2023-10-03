<?php
require 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Activity - singup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      html,
      body {
        height: 100%;
      }

      .form-singup {
        max-width: 330px;
        padding: 1rem;
      }

      .form-singup .form-floating:focus-within {
        z-index: 2;
      }
    </style>
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-singup w-100 m-auto">
      <form>
        <img class="mb-4" src="images/IP.jpg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    
        <div class="form-floating mb-1">
          <input type="text" class="form-control" id="Student ID" placeholder="Email address">
          <label for="Student ID">Student ID</label>
        </div>
        <div class="form-floating mb-1">
          <input type="text" class="form-control" id="Student Name" placeholder="Email address">
          <label for="Student Name">Student Name</label>
        </div>
        <div class="form-floating mb-1">
          <select class="form-select" id="Major">
            <?php
            $sql = 'select * from major order by faculty';
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()){
                echo "<option value='{$row['majorID']}'>
                {$row['faculty']}-{$row['majorName']}
                </option>";
            }
            $conn->close();
            ?>
                  </select>
          <label for="Major">Major ID</label>
        </div>
        <div class="form-floating mb-1">
          <input type="password" class="form-control" id="Password" placeholder="Password">
          <label for="Password">Password</label>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="re-Password" placeholder="Password">
          <label for="re-Password">Retype-Password</label>
        </div>
    
        <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-body-secondary">©Siwakorn Thepkaew</p>
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>