<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New contact request</title>
</head>
<body style="font-family: Arial, sans-serif; color: #111; line-height: 1.6;">
    <h2 style="margin-bottom: 12px;">New contact request</h2>

    <p style="margin: 0 0 8px;"><strong>Name:</strong> {{ $name }}</p>
    <p style="margin: 0 0 8px;"><strong>Email:</strong> {{ $email }}</p>
    @if (!empty($phone))
        <p style="margin: 0 0 8px;"><strong>Phone:</strong> {{ $phone }}</p>
    @endif
    @if (!empty($services))
    @foreach ($services as $service)
        <p style="margin: 0 0 8px;"><strong>Services of interest:</strong> {{ $service->title }}</p>
    @endforeach
    @endif

    <p style="margin: 16px 0 8px;"><strong>Message:</strong></p>
    <p style="white-space: pre-line; margin: 0;">{!! nl2br(e($messageContent)) !!}</p>
</body>
</html>
