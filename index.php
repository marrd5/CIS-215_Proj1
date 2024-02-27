<!-------------------------------------------------------
//  "Project 1 Survey/Quiz": Correcting and adjusting
//  a page.
//
//  Edited & Written by: Derick Marr
//  Contact: dmarr@genesee.edu
//------------------------------------------------------>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey: Project 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light d-flex flex-column min-vh-100">
<header>
  <style>
    .quiz-button {
      flex: 1;
      font-size: 1rem;
      border: 2px solid transparent;
      padding: .5rem 1rem;
      margin-bottom: 1rem;
      cursor: pointer;
      background-color: #ffffff;
      color: #000000;
      text-align: center;
    }
    .quiz-button:hover {
      background-color: #b4a4ec;
      color: #ffffff;
    }
    .quiz-button:active {
      background-color: #b4a4ec;
      color: #ffffff;
    }
    .submit-button {
      background-color: #b4a4ec;
      border: none;
      color: white;
      width: 100%;
      padding: 1rem;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      margin-top: 3.5rem;
      margin-bottom: 3.5rem; /* Fixed margin-bottom value */
      font-size: 1.25rem;
      cursor: pointer;
      box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.226);
    }
    .submit-button:hover {
      background-color: #000;
    }
    input[type="radio"] {
      display: none;
    }
    input[type="radio"] + label {
      display: block;
      margin-top: 1rem;
      padding: 1rem;
      border: 0 transparent;
      cursor: pointer;
    }
    input[type="radio"]:checked + label {
      background-color: #000;
      color: #ffffff;
    }
    footer {
      margin-top: 1rem !important;
    }
  </style>
  <div class="container py-4">
      <h1 class="text-center" style="font-size: 3rem;">Survey: Project 1 </h1>
  </div>
</header>

<main class="flex-grow-1">
  <div class="container">
    <form action="process.php" method="post" class="survey">
      <div class="row">
        <div class="col-md-6">
          <h2>What's this about?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
        <div class="col-md-6">
          <h2>Survey Form</h2>
            <label for="email-id">Enter your email: </label>
            <input type="email" name="email-name" id="email-id" class="form-control">
            <label for="pw-id">Enter your password: </label>
            <input type="password" name="password" id="pw-id" class="form-control">
            <label for="age">What age group do you belong to? </label>
            <select name="age" id="age" class="form-select">
              <?php
              $age_ranges = array(
                "0-12",
                "13-17",
                "18-22",
                "23-27",
                "28-32",
                "33-37",
                "38-42",
                "43-47",
                "48-52",
                "53-57",
                "58-62",
                "63-67",
                "68-72",
                "72+",
                "Anagist",
                "Omniagist",
                "Chronoagist",
                "Eonagist",
                "Temporalagist",
                "Agefluid"
              );
              foreach ($age_ranges as $range) {
                echo "<option value='$range'>$range</option>";
              }
              ?>
            </select>
            <label for="gender">What gender do you identify with? </label>
            <select name="gender" id="gender" class="form-select">
              <?php
              $genders = array(
              "Male",
              "Female",
              "Nonbinary",
              "Genderfluid",
              "Agender",
              "Anxiegender",
              "Blurgender",
              "Collgender",
              "Condigender",
              "Demigender",
              "Domgender",
              "Egogender",
              "Esspigender",
              "Exgender",
              "Femgender",
              "Genderblank",
              "Deliciagender",
              "Cloudgender",
              "Cengender",
              "Demiflux",
              "Cavusgender",
              "Duragender",
              "Choose not to say/Other"
              );
              foreach ($genders as $gender) {
                echo "<option value='$gender'>$gender</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="row">
          <?php
          $questions = array(
            "Do you like Apples?",
            "Is the sky blue?",
            "Are cats awesome?",
            "Is green a color?",
          );
          for ($i = 0; $i < count($questions); $i++) {
            echo "<h4>Question " . ($i + 1) . ": " . $questions[$i] . "</h4>";
            echo "<div style='display: flex;'>";
            echo "<input type='radio' name='answer$i' id='answer$i-A' value='A'>";
            echo "<label class='quiz-button' for='answer$i-A'>Yes</label>";
            echo "<input type='radio' name='answer$i' id='answer$i-B' value='B'>";
            echo "<label class='quiz-button' for='answer$i-B'>No</label>";
            echo "</div>";
          }
          ?>
          <label for="fav-question"><h4>Enter the number of your favorite question</h4></label>
          <input type="number" step="1" name="fav-question" id="fav-question" class="form-control">
          <label for="submit-date"><h4>Enter your favorite date</h4></label>
          <input type="date" name="submit-date" id="submit-date" class="form-control">
          <button type="submit" class="submit-button">Submit</button>
        </div>
      </form>
    </div>
  </main>
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
      <span class="text-muted">Copyright © 2024 Derick Marr, All Rights Reserved</span>
    </div>
  </footer>
</body>
</html>
