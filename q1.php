<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            overflow: hidden;
            background-color: #4CAF50;
            padding: 20px 10px;
            height: 8vh;
        }
        .header a {
            float: left;
            color: white;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }
        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }
        .header a:hover {
            background-color: #ddd;
            color: black;
        }
        .header a.active {
            background-color: dodgerblue;
            color: white;
        }
        .header-right {
            float: right;
        }
        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            .header-right {
                float: none;
            }
           
        }
        .footer{
                position: fixed;
                background-color: yellowgreen;
                /* max-width: 500; */
                width: 100%;
                
                

            }
            footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
}

.social-media a {
    margin: 0 10px;
    color: white;
    font-size: 24px;
    text-decoration: none;
}

.social-media a:hover {
    color: #00aced; /* Color change on hover */
}
 
        form {
            margin-top: 50px;
        }
        .bmi-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: Arial, sans-serif;
        }

        /* Form labels and inputs */
        label {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
            display: block;
            text-align: left;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        /* Submit button */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
        }

        /* Hover effect on the button */
        input[type="submit"]:hover {
            background-color: #45a049;
        } 
        .bmi-intro {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .bmi-intro h1 {
            color: #333;
            font-size: 32px;
            margin-bottom: 15px;
        }
        .bmi-intro p {
            color: #555;
            font-size: 18px;
            line-height: 1.6;
        }
        .bmi-ranges {
            margin-top: 20px;
        }
        .bmi-ranges table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .bmi-ranges th, .bmi-ranges td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        .bmi-ranges th {
            background-color: #f8f8f8;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1, h2 {
            color: #333;
        }
        p, ul {
            color: #555;
            font-size: 18px;
            line-height: 1.6;
        }
        .bmi-ranges table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .bmi-ranges th, .bmi-ranges td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        .bmi-ranges th {
            background-color: #f8f8f8;
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

    </style>
</head>
<body>
    <div class="header">
        <a href="#default" class="logo">BMI Calculator</a>
        <div class="header-right">
            <a class="active" href="#home">Home</a>
        </div>
    </div>

    <center>
    
    <div class="bmi-container">
        <h2>BMI Calculator</h2>
        <form method="post">
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" required><br>

            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" step="0.01" required><br>

            <input type="submit" value="Calculate BMI">
        </form>
        </div>
  
    

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $height = $height / 100;
        $bmi = $weight / ($height * $height);

        if ($bmi < 18.5) {
            echo "<h2>Ohh, you are Underweight! A balanced diet and healthy nutrition can help you improve. Take care of yourself!</h2>";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            echo "<h2>Awesome! You have a healthy BMI. Keep maintaining your lifestyle and stay fit!</h2>";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            echo "<h2>You are in the Overweight range! Focusing on a balanced diet and regular exercise can make a difference. You've got this!</h2>";
        } elseif ($bmi >= 30 && $bmi <= 34.9) {
            echo "<h2>It seems you're in the Obesity (Class 1) category. Small changes in diet and physical activity can lead to big improvements. Stay positive and take small steps!</h2>";
        } elseif ($bmi >= 35 && $bmi <= 39.9) {
            echo "<h2>You're in Obesity (Class 2). Taking care of your health through consistent effort is important. You can start today and work towards a healthier you!</h2>";
        } else {
            echo "<h2>Ohh, you're in the Extreme Obesity (Class 3) range. It's never too late to adopt healthy habits. Every small step counts toward a better lifestyle. Stay motivated!</h2>";
        }
        

        echo " <h2>YOUR BMI is " . number_format($bmi, 2)."</h2>";
    }
    ?>
   
    </center>
    <div class="bmi-intro">
    <h1><center>Welcome to the BMI Calculator</center></h1>
    <p>
        The Body Mass Index (BMI) is a simple method to estimate your body fat based on your height and weight. 
        Understanding your BMI can help you assess if you are underweight, normal weight, overweight, or obese, 
        and understand the health risks associated with each category.
    </p>

    <div class="bmi-ranges">
        <h2>BMI Range and Health Risk</h2>
        <table>
            <thead>
                <tr>
                    <th>BMI Range</th>
                    <th>Category</th>
                    <th>Health Risk</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Less than 18.5</td>
                    <td>Underweight</td>
                    <td>Possible nutritional deficiency and osteoporosis</td>
                </tr>
                <tr>
                    <td>18.5 - 24.9</td>
                    <td>Normal weight</td>
                    <td>Low risk (healthy range)</td>
                </tr>
                <tr>
                    <td>25 - 29.9</td>
                    <td>Overweight</td>
                    <td>Increased risk of cardiovascular disease</td>
                </tr>
                <tr>
                    <td>30 - 34.9</td>
                    <td>Obese (Class I)</td>
                    <td>High risk of cardiovascular diseases and diabetes</td>
                </tr>
                <tr>
                    <td>35 - 39.9</td>
                    <td>Obese (Class II)</td>
                    <td>Very high risk of severe health issues</td>
                </tr>
                <tr>
                    <td>40 or more</td>
                    <td>Morbidly Obese</td>
                    <td>Extremely high risk, requires immediate medical attention</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="container">
    <h2>Risks Associated with Being Overweight</h2>
    <p>Being overweight increases the risk of a number of serious diseases and health conditions. Below is a list of said risks, according to the Centers for Disease Control and Prevention (CDC):</p>
    <ul>
        <li>High blood pressure</li>
        <li>Higher levels of LDL cholesterol ("bad cholesterol"), lower levels of HDL cholesterol ("good cholesterol"), and high levels of triglycerides</li>
        <li>Type II diabetes</li>
        <li>Coronary heart disease</li>
        <li>Stroke</li>
        <li>Gallbladder disease</li>
        <li>Osteoarthritis (joint disease)</li>
        <li>Sleep apnea and breathing problems</li>
        <li>Certain cancers (endometrial, breast, colon, kidney, gallbladder, liver)</li>
        <li>Low quality of life</li>
        <li>Mental illnesses such as clinical depression, anxiety, and others</li>
        <li>Body pains and difficulty with certain physical functions</li>
        <li>Increased risk of mortality compared to those with a healthy BMI</li>
    </ul>
    <p>As can be seen from the list above, there are numerous negative, and in some cases fatal, outcomes that may result from being overweight. Generally, a person should try to maintain a BMI below 25 kg/m², but should ideally consult their doctor to determine whether they need to make lifestyle changes to be healthier.</p>

    <h2>Risks Associated with Being Underweight</h2>
    <p>Being underweight has its own associated risks, listed below:</p>
    <ul>
        <li>Malnutrition, vitamin deficiencies, anemia (lower ability to carry blood vessels)</li>
        <li>Osteoporosis, a disease causing bone weakness, increasing the risk of fractures</li>
        <li>Decreased immune function</li>
        <li>Growth and development issues, particularly in children and teenagers</li>
        <li>Possible reproductive issues in women due to hormonal imbalances that can disrupt the menstrual cycle</li>
        <li>Higher chance of miscarriage in the first trimester for underweight women</li>
        <li>Potential complications as a result of surgery</li>
        <li>Increased risk of mortality compared to those with a healthy BMI</li>
    </ul>
    <p>In some cases, being underweight can be a sign of an underlying condition or disease, such as anorexia nervosa. Consult your doctor if you think you or someone you know is underweight, especially if the reason for being underweight does not seem obvious.</p>
</div>
    <!-- footer.php -->
<footer>
    <div class="social-media">
        <a href="https://www.facebook.com/profile.php?id=100054966173992" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://github.com/Khan072" target="_blank">
            <i class="fab fa-github"></i>
        </a>
        <a href="https://www.instagram.com/aabid072/" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/in/aabid-khan-402666216/" target="_blank">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>
    <p>&copy; 2024 BMI-Calculator. All rights reserved.</p>
</footer>

</body>
</html>
