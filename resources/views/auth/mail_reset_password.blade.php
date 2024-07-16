<!DOCTYPE html>

<head>

</head>

<body>

    <p><b>Hello,</b></p>

    <p>We received a request to reset your password for your RMS Technologies account.</p>

    <p>If you requested a password reset, Click the link below to create a new password.</p>

    <a href="{{ route('validate_forgot_password', ['token'=>$token]) }}">Reset Password</a>

    <h4>For your security, please do not share this email with anyone.</h4>

    <p>Thank You,</p>

    <p>The RMS Technologies Team</p>

</body>

</html>
