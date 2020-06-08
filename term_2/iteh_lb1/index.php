<?php require "vendors/vendors.php"; ?>
<?php require "vendors/cars.php"; ?>
<?php require "vendors/cars-name.php"; ?>
<?php require 'connection.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="vendors.php" name="score">
        <p><h1>Car by vendor</h1></p>
        <select name="vendor" id="">
            <?php
                foreach ($outputVendors as $vendor) {
                    echo "<option value=\"$vendor\">$vendor</option>";
                }
            ?>
        </select>
        <p><input type="submit" value="Submit"></p>
    </form>

    <form action="dates.php">
        <p><h1>Free car on date</h1></p>
        <input type="date" name="targetDate">
        <p><input type="submit" value="Submit"></p>
    </form>

    <form action="rent.php">
        <p><h1>Rent by car on date</h1></p>
        <input type="date" name="rentTarget">
        <p><input type="submit" value="Submit"></p>
    </form>




    <form action="insert/in-rent.php">
        <p><h1>Add info</h1></p>
        <table>
            <tr>
                <th>ID CAR</th>
                <th>Date_Start</th>
                <th>Time_Start</th>
                <th>Date_end</th>
                <th>Time_end</th>
                <th>Cost</th>
            </tr>
            <tr>
                <td>
                    <select name="vendor" id="var_id">
                        <?php
                        foreach ($outputCars as $cars) {
                            echo "<option value=\"$cars\">$cars</option>";
                        }
                        ?>
                    </select>
                </td>
                <td><input type="date" name="date_start" required="required"></td>
                <td><input type="time" name="time_start" required="required"></td>
                <td><input type="date" name="date_end" required="required"></td>
                <td><input type="time" name="time_end" required="required"></td>
                <td><input type="text" name="var_cost" required="required"></td>
            </tr>
        </table>
        <p><input type="submit" value="Add"></p>
    </form>


    <form action="insert/replace-race.php">
        <p><h1>Change mileage</h1></p>
        <table>
            <tr>
                <th>CAR</th>
                <th>VALUE</th>
            </tr>
            <tr>
                <td>
                    <select name="car_name" id="car_name">
                        <?php
                        foreach ($outputCarsName as $name) {
                            echo "<option value=\"$name\">$name</option>";
                        }
                        ?>
                    </select>
                </td>
                <td><input type="number" name="race" required="required"></td>
            </tr>
        </table>
        <p><input type="submit" value="Add"></p>
    </form>
</body>
</html>