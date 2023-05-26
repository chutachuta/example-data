<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>exam-data</title>

    <style>
        
    </style>
</head>

<body>
    <h1>exam-data</h1>

    <?php
        $jsonData = file_get_contents('exam-data.json');

        $data = json_decode($jsonData, true);

        // Filter the array based on the condition
        $filteredArray = array_filter($data, function ($item) {
            return $item['is_editable_price'] === false;
        });

        // Process the filtered array
        foreach ($filteredArray as $item) {
            $name = $item['name'];
            $weight = $item['weight'];

            // Display the data
            echo "Name: $name <br>";
            echo "totalSubProductWeight: $weight <br>";

        }
    ?>








</body>
</html>
