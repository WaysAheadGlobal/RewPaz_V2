<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--   m                                                                                                                                                                                                                                                                                                                <title>Professional Email Template with Company Logo</title> -->
    <style>
        /* Reset some default styles */
        body, p, h1, h2, h3, h4, h5, h6 {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        /* Main container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e1e1e1;
        }
        /* Header */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px; /* Set the desired width for your logo */
        }
        .header h1 {
            color: #333;
            font-size: 24px;
            margin-top: 10px;
        }
        /* Body content */
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .content p {
            margin-bottom: 15px;
        }
        /* Call-to-action button */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        /* Footer */
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://rewpaz.waysdatalabs.com/assets/images/logo.png" alt="Your Company Logo">
            <!-- <h1>Rewpaz</h1> -->
        </div>
        <div class="content">

            <p>Dear {{ $name }},</p>

            <p>{{ $msg }}</p><br>

            <p><strong>Full Name :- </strong> {{ $name }}</p>
            <p><strong>Official E-mail ID :-</strong> {{ $email }}</p>
            <p><strong>Token :-</strong> {{ $token }}</p>
            <p><strong>Employee Code :-</strong> {{ $emp_code }}</p>
            <p>Thank you for your attention.</p><br>
            <p>Sincerely,</p>

            <p>{{ $company }}</p><br>

        </div>
        <div class="footer">
            <p>&copy; 2023 RewPaz. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
