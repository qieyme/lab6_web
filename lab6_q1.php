<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 20px;
        }
        td {
            border: 1px solid #333;
            padding: 8px 12px;
        }
        td:first-child {
            font-weight: bold;
            width: 30%;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <?php
        $name = "Muhammad Hakimi Bin Karim";
        $matric = "CI 240107";
        $course = "BIC21203 Web Development";
        $yearOfStudy = "Year 3";
        $address = "Taman Budiman, Parit Jambul";
    ?>

    <h2>Student Details</h2>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>