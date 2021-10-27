<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Assessment Results</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            padding: 50px 0;
        }
    </style>
</head>

<body>
    <?php
        $name = $_POST["name"];
        $age = $_POST["age"];
        $sex = $_POST["optsex"];
        $marriage = $_POST["marriage"];
        $q1 = $_POST["optq1"];
        $q2 = $_POST["optq2"];
        $q3 = $_POST["optq3"];
        $q4 = $_POST["optq4"];
        $space = strpos($name," ");
        $nameLen = strlen($name);
        $lName = substr($name, $space, $nameLen);
        $ansList = array();
        array_push($ansList, $q1, $q2, $q3, $q4);
        function test_q($var) {
            return($var & "1");
        }
        $score = count(array_filter($ansList, "test_q"));
        $sal = "";
        $rec = "";
        if ($sex=="m" && $age>25) {
            $sal = "Mr. ";
        }
        else if ($sex=="f" && $age>25 && $marriage=="false") {
            $sal = "Miss ";
        }
        else if ($sex=="f" && $age>25 && $marriage=="true") {
            $sal = "Mrs. ";
        }
        if ($score >= 3) {
            $rec = "You may need COVID-19 testing.";
        }
        else if ($score == 2) {
            if ($ansList[2] == "1") {
                $rec = "You may need COVID-19 testing.";
            } else if ($ansList[0] == "1" && $ansList[1] == "1") {
                $rec = "Self-quarantine at home.";
            } else {
                $rec = "Your symptoms may or may not be related to COVID-19.";
            }
        } else if ($score == 1) {
            if ($ansList[0] == "1" || $ansList[1] == "1") {
                $rec = "Self-quarantine at home.";
            } else if ($ansList[2] == "1") {
                $rec = "Your symptoms may or may not be related to COVID-19.";
            } else {
                $rec = "Practice social distancing and watch for symptoms.";
            }
        } else {
            $rec = "Practice social distancing and watch for symptoms.";
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2>COVID-19 Risk Self-assessment Program</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm">
                <h3>Dear <?php echo $sal . $lName ?>,</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h4>Our recommendation is:</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <h3><?php echo $rec ?></h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <h6>Be safe!</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h6>Thank you.</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h7>For more info about COVID-19, click <a
                        href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19">here</a>
                </h7>
            </div>
        </div>
    </div>
</body>

</html>