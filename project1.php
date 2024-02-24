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
    <title>Survey: Survey Name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light d-flex flex-column min-vh-100">

<header>
    <div class="container py-4">
        <h1 class="text-center" style="font-size: 3rem;">Survey: Survey Name</h1>
    </div>
</header>

<main class="flex-grow-1">
    <div class="container">
        <form action="" method="get" class="survey">
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
                    <input type="password" name="pw-name" id="pw-id" class="form-control">
                
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
                
                    <!-- TODO: Add your own survey questions -->

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        </div>
        </form>
    </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <span class="text-muted">Copyright © 2024 Derick Marr, All Rights Reserved</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
