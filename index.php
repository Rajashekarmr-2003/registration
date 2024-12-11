<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .form-container h2 {
            text-align: center;
        }
        .output {
            display: none;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #4caf50;
            background-color: #dff0d8;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form id="registrationForm" method="POST" action="">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone:</label><br>
            <input type="tel" id="phone" name="phone" required><br><br>

            <button type="submit">Submit</button>
        </form>

        <div id="output" class="output">
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $phone = htmlspecialchars($_POST['phone']);

                    echo "<strong>Details Entered:</strong><br>Name: $name<br>Email: $email<br>Phone: $phone";

                    echo "<script>
                        setTimeout(() => {
                            document.getElementById('output').style.display = 'none';
                            document.getElementById('registrationForm').reset();
                        }, 5000);
                    </script>";
                }
            ?>
        </div>
    </div>
</body>
</html>
