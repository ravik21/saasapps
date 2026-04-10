<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Submission</title>
</head>
<body style="font-family: Arial, sans-serif; color: #1f2937; line-height: 1.6;">
    <h2 style="margin-bottom: 16px;">New Contact Us Submission</h2>
    <p>A new inquiry has been submitted through the website contact form.</p>

    <table cellpadding="8" cellspacing="0" border="0" style="border-collapse: collapse; width: 100%; max-width: 720px;">
        <tr>
            <td style="font-weight: bold; width: 160px;">Name</td>
            <td>{{ $contactSubmission->name }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Email</td>
            <td>{{ $contactSubmission->email }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Phone</td>
            <td>{{ $contactSubmission->phone ?: 'N/A' }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Service</td>
            <td>{{ $contactSubmission->service ?: 'N/A' }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Subject</td>
            <td>{{ $contactSubmission->subject }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold; vertical-align: top;">Message</td>
            <td>{!! nl2br(e($contactSubmission->message)) !!}</td>
        </tr>
    </table>
</body>
</html>
