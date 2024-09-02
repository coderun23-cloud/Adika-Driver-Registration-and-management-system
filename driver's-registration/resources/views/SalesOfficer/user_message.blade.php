<!-- resources/views/emails/user_message.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message</title>
</head>
<body>
    <h1>Message from Admin</h1>
    <p>{{ $messageContent }}</p> <!-- Directly use $messageContent as it's a public property -->
</body>
</html>
