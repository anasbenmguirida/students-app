<!-- resources/views/emails/feedback.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
</head>
<body>
    <p>You have received a new feedback message from {{ $email }}</p>
   
    <p>{{$messages}}</p>
</body>
</html>
