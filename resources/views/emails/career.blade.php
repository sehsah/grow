<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New career application</title>
</head>
<body style="font-family: Arial, sans-serif; color: #111; line-height: 1.6;">
    <h2 style="margin-bottom: 12px;">New career application</h2>

    <p style="margin: 0 0 8px;"><strong>Name:</strong> {{ $name }}</p>
    <p style="margin: 0 0 8px;"><strong>Email:</strong> {{ $email }}</p>
    <p style="margin: 0 0 8px;"><strong>Phone:</strong> {{ $phone }}</p>
    <p style="margin: 0 0 8px;"><strong>Role interested in:</strong> {{ $career }}</p>

    @if (!empty($details))
        <p style="margin: 16px 0 8px;"><strong>Details:</strong></p>
        <p style="white-space: pre-line; margin: 0;">{!! nl2br(e($details)) !!}</p>
    @endif

    <p style="margin-top: 16px;">The applicant’s CV is attached.</p>
</body>
</html>
