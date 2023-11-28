<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Calculator</title>
    <script>
        function validateForm() {
            var inputString = document.getElementById("digitsInput").value;

            if (inputString.trim() === "") {
                alert("Please enter a string of digits before submitting.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <form action="avg.php" method="post" onsubmit="return validateForm()">
        <label for="digitsInput">Enter a string of digits:</label>
        <input type="text" id="digitsInput" name="digitsInput" pattern="\d+" title="Please enter only digits (0-9)">
        <button type="submit">Calculate Average</button>
    </form>
</body>
</html>
