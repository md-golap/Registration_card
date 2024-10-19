<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Registration Form</title>  
    <link rel="stylesheet" href="styles.css"> 
    
    <style>
                body {  
            display: flex;  
            justify-content: center;  
            align-items: center;  
            height: 100vh;  
            margin: 0;  
            font-family: Arial, sans-serif;  
            background-color: #f2f2f2;  
        }  

        .registration-card {  
            width: 400px;  
            padding: 20px;  
            background-color: #ffffff;  
            border-radius: 10px;  
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);  
        }  

        h2 {  
            text-align: center;  
            color: #333;  
        }  

        .form-group {  
            display: flex;  
            justify-content: space-between;  
            margin-bottom: 15px;  
        }  

        .form-group label {  
            width: 45%;  
        }  

        .form-group input {  
            width: 45%;  
            padding: 8px;  
            border: 1px solid #ccc;  
            border-radius: 5px;  
        }  

        .gender-group {  
            display: flex;  
            justify-content: space-between;  
            align-items: center;  
            margin-bottom: 15px;  
        }  

        .gender-group label {  
            margin-right: 10px;  
        }  

        button {  
            width: 100%;  
            padding: 10px;  
            background: linear-gradient(90deg, #4CAF50 0%, #8BC34A 100%);  
            color: white;  
            border: none;  
            border-radius: 5px;  
            cursor: pointer;  
            font-size: 16px;  
        }  

        button:hover {  
            opacity: 0.9;  
        }
    </style>
</head>  
<body>  
    <div class="registration-card">  
        <form action="#" method="post">  
            <h2>Registration Form</h2>  
            <div class="form-group">  
                <label for="fullname">Full Name:</label>  
                <input type="text" id="fullname" name="fullname" required>  
                <label for="username">Username:</label>  
                <input type="text" id="username" name="username" required>  
            </div>  
            <div class="form-group">  
                <label for="email">Email:</label>  
                <input type="email" id="email" name="email" required>  
                <label for="phone">Phone Number:</label>  
                <input type="tel" id="phone" name="phone" required>  
            </div>  
            <div class="form-group">  
                <label for="password">Password:</label>  
                <input type="password" id="password" name="password" required>  
                <label for="confirmpassword">Confirm Password:</label>  
                <input type="password" id="confirmpassword" name="confirmpassword" required>  
            </div>  
            <div class="gender-group">  
                <label>Gender:</label>  
                <label for="male"><input type="radio" id="male" name="gender" value="male"> Male</label>  
                <label for="female"><input type="radio" id="female" name="gender" value="female"> Female</label>  
                <label for="other"><input type="radio" id="other" name="gender" value="other"> Other</label>  
            </div>  
            <button type="submit">Register</button>  
        </form>  
    </div>  
</body>  



</html>




<?php  
function calculateResult($marks) {  
    $totalMarks = array_sum($marks);  
    $numberOfSubjects = count($marks);  
    $average = $totalMarks / $numberOfSubjects;  

    switch (true) {  
        case ($average >= 90):  
            return "Grade: A+";  
        case ($average >= 80):  
            return "Grade: A";  
        case ($average >= 70):  
            return "Grade: B+";  
        case ($average >= 60):  
            return "Grade: B";  
        case ($average >= 50):  
            return "Grade: C";  
        case ($average >= 40):  
            return "Grade: D";  
        default:  
            return "Grade: F";  
    }  
}  

// Example usage  
$marks = [85, 78, 90, 64, 88]; // Example marks  
echo calculateResult($marks);  
?>