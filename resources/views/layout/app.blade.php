<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Last Time</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
    
    @include('layout.header')
    @yield('content')
    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.19.1/standard-all/ckeditor.js"></script>
    
    <script type="text/javascript">
        CKEDITOR.replace('editor1', {
            // Disable auto-paragraph
            enterMode: CKEDITOR.ENTER_BR,  // or CKEDITOR.ENTER_DIV
            shiftEnterMode: CKEDITOR.ENTER_BR
        });
    </script>
    <script>
        // Auto-dismiss alert after 5 seconds
        setTimeout(function() {
            $('.alert').alert('close');
        }, 5000);
    </script>   
</body>
</html>