<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @if (!empty($emailBody['name']))        
    <p>Name: {{ @$emailBody['name'] }}</p>
    @endif

    @if (!empty($emailBody['age']))        
    <p>Age: {{ @$emailBody['age'] }}</p>
    @endif
    
    @if (!empty($emailBody['email']))        
    <p>Email: {{ @$emailBody['email'] }}</p>
    @endif

    @if (!empty($emailBody['location']))        
    <p>Location: {{ @$emailBody['location'] }}</p>
    @endif
   
    @if (!empty($emailBody['reason']))        
    <p>Reason for contact: {{ @$emailBody['reason'] }}</p>
    @endif

    @if (!empty($emailBody['message']))        
    <p>Message: {{ @$emailBody['message'] }}</p>
    @endif

    @if (!empty($emailBody['subject']))        
    <p>Subject: {{ @$emailBody['subject'] }}</p>
    @endif

    @if (!empty($emailBody['description']))        
    <p>Description: {{ @$emailBody['description'] }}</p>
    @endif

</body>
</html>