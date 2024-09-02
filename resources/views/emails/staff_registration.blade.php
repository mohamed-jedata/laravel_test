<!DOCTYPE html>
<html>
<head>
    <title>Complete Your Registration</title>
</head>
<body>
    <p>Hello, {{ $username }}</¨p>

    <p>You have been added as a Staff member to our system. Please click the link below to complete your registration:</p>

    <p><a href="{{ $registrationUrl }}">Complete Registration</a></p>

    <p>If you did not expect this email, please ignore it.</p>

    <p>Thank you!</p>
</body>
</html>
