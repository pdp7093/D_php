<h1>Dear,{{ $name }}</h1>

<p>We received a request to reset your password for your Musicana account. If you made this request, click the button below to reset your password:</p>

<a href="{{url('/ResetPassword/'.$email)}}">Forgot Password</a>

<p>This link will expire in 10min for security reasons. If you did not request a password reset, please ignore this email.

If you need help, contact us at Musicana.</p>

<h6>
Best Regards,<br>
Musicana Team

</h6>
