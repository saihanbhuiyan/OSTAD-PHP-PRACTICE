<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One page templet practice site</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
</head>
<body>
@include('OnepageLayout.header')

@yeild('contents')

@include('OnepageLayout.footer')
 <script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
</body>
</html>