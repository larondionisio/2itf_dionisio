<!DOCTYPE html>
<html>

<head>
    <title> TAXXY: A TAX CALCULATOR WEB APP </title>
    <style type="text/css">
    *{
        text-align: center;
        background-color: orange;
        font-family: 'courier new', monospace;
    }
    </style>
</head>

<body>

    <?php

    if (isset($_POST['submit'])) {
        $salary = $_POST['salary'];
        $type = $_POST['type'];
        $YearlySalary = $salary * 12;
        
        
            if ($_POST['type'] == "bi-Monthly") {
                $salary = $salary * 2;
                $salary = $salary;
                if ($salary <= 250000) {
                    $finalsalary = 0;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary <= 400000 && $salary > 250000) {
                    $finalsalary = $salary * 0.2;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary <= 800000 && $salary > 400000) {
                    $finalsalary = $salary * 0.25 - 30000;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary <= 2000000 && $salary > 800000) {
                    $finalsalary = $salary * 0.3 - 130000;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary <= 8000000 && $salary > 2000000) {
                    $finalsalary = $salary * 0.32 - 490000;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary > 8000000) {
                    $finalsalary = $salary * 0.35 - 2410000;
                    $YearlyTax = $finalsalary * 12;
                }  

                echo "Monthly Salary: " . $salary . "<br>"; 
                echo "Monthly Tax: ". $finalsalary . "<br>";
                echo "Yearly Salary: " . $YearlySalary . "<br>";
                echo "Yearly Tax: " . $YearlyTax . "<BR>";


            } else if ($_POST['type'] == "monthly") {
                $salary = $salary;
                if ($salary <= 250000) {
                    $finalsalary = 0;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary <= 400000 && $salary > 250000) {
                    $finalsalary = $salary * 0.2;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary <= 800000 && $salary > 400000) {
                    $finalsalary = $salary * 0.25 - 30000;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary <= 2000000 && $salary > 800000) {
                    $finalsalary = $salary * 0.3 - 130000;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary <= 8000000 && $salary > 2000000) {
                    $finalsalary = $salary * 0.32 - 490000;
                    $YearlyTax = $finalsalary * 12;
                }
                else if ($salary > 8000000) {
                    $finalsalary = $salary * 0.35 - 2410000;
                    $YearlyTax = $finalsalary * 12;
                }  

                echo "Monthly Salary: " . $salary . "<br>"; 
                echo "Monthly Tax: ". $finalsalary . "<br>";
                echo "Yearly Salary: " . $YearlySalary . "<br>";
                echo "Yearly Tax: " . $YearlyTax . "<BR>";
            }
        
    }     
    ?>

    <center>
        <h1>TAXXY: A TAX CALCULATOR WEB APP</h1>
        <form method="post">

            <center> <img src="https://kittelsoncarpo.com/wp-content/uploads/2018/05/TRAIN-Tax-Image.png" ; width="450" height="250" ; border="5" id="img"> </center>

            <p>Salary:
                <input type="text" id="salary" name="salary" size="30">
            </p>

            <p>Type:
                <input type="Radio" id="bi-monthly" name="type" value="bi-Monthly">
                <label for="bi-monthly">Bi-Monthly</label>
                <input type="Radio" id="monthly" name="type" value="monthly">
                <label for="monthly">Monthly</label>
            </p>

            <input type="submit" value="submit" name="submit">
            


        </form>
        </table>
</body>

</html>