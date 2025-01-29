<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
</head>
<body>
    <?php
        require_once 'Classes/Car.php';
        $car01 = new Car("Toyota", "Red");
        echo $car01->vahicleType;
        echo "<br>";
        echo $car01->GetCarInfo();
    ?>
</body>
</html>