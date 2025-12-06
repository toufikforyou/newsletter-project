<!DOCTYPE html>
<html>
<head>
    <title>Contact Received</title>
</head>
<body style="font-family: sans-serif; color: #333;">
    <h1>Thank you for contacting us!</h1>
    <p>Hi {{ $contact->first_name }},</p>
    <p>We have received your message regarding "<strong>{{ $contact->subject }}</strong>".</p>
    <p>Your Ticket ID is: <strong>{{ $contact->ticket_id }}</strong></p>
    <p>Our team will get back to you as soon as possible.</p>
    <br>
    <p>Best regards,</p>
    <p>The TechNews Team</p>
</body>
</html>