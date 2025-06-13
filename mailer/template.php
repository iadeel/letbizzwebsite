<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        h2 {
            color: #007bff;
        }
        p {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        hr {
            border: 1px solid #ccc;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h2>Contact Us Form Submission</h2>
    <p><strong>Name:</strong> {{name}}</p>
    <p><strong>Email:</strong> {{email}}</p>
    <p><strong>Subject:</strong> {{subject}}</p>
    <p><strong>Message:</strong><br>{{message}}</p>
    <hr>
    <p>This email was sent from the contact form on your website.</p>
</body>
</html>
