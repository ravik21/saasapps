<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Submission Reply</title>
</head>
<body style="font-family: Arial, sans-serif; color: #1f2937; line-height: 1.6;">
    <p>Hello {{ $contactSubmission->name }},</p>

    <div style="margin: 16px 0 24px;">
        {!! nl2br(e($replyMessage)) !!}
    </div>

    <p style="margin-bottom: 4px;">Best regards,</p>
    <p style="margin-top: 0;">{{ config('mail.support.name') }}</p>
</body>
</html>
