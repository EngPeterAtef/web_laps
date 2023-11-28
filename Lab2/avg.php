<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Name Input</title>
    <script>
        function validateForm () {
            my_input = document.getElementById("fileName");
            if (my_input.value ===""){
                alert("Enter the file name");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inputString = $_POST["digitsInput"];

    // Calculate average of digits
    $digitsArray = str_split($inputString);
    $sum = array_sum($digitsArray);
    $average = $sum / count($digitsArray);

    // Display the result
    echo "<p>Input: $inputString<</p>";
    echo "<p>Average: $average</p>";
    
    // Process file name input
    if (isset($_POST["fileName"])) {
        $fileName = $_POST["fileName"];
        // Write average to a text file with the entered name
        $fileContent = "Input: $inputString\nAverage: $average";
        // file_put_contents($fileName . ".txt", $fileContent);
        $file=fopen("$fileName.txt","w");
        
        fwrite($file, $average);
        fclose($file);

        echo "<p>Result written to file: $fileName.txt</p>";
    }
    
}

?>
    <form method="post" onsubmit="return validateForm()">
        <label for="fileName">Enter a file name:</label>
        <input type="text" id="fileName" name="fileName">
        <input type="hidden" id="digitsInput" name="digitsInput" value="<?php echo $inputString?>">
        <input type="hidden" id="avg" name="avg" value="<?php echo $average?>">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
