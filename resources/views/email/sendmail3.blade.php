<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
   Hello,

   User {{$from_user->name}} tagged you on a post in thread {{'"' . $thread->title . '"'}} and category {{'"' . $category_title . '"'}} at {{ URL::to('/forum') }}.

   {{-- <div><b>Website Page menu:</b> <a href="{{ URL::to('/') }}">{{ URL::to('/') }}</a></div> --}}
</body>
</html>