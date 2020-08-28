<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <title>Support Mail</title>
</head>

<body style="background: #fafafa;width: 38em;margin: auto;padding: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-5">
                <div class="card" style="border-radius: 0px;">
                    <div class="card-body pb-5" style="color: #76A140;">
                        <span class="d-block text-center mb-4 h4" style="color: #76A140;">Contact from Client</span>
                        <span class="d-block">Name: {{$name}}</span>
                        <span class="d-block">Email: {{$email}}</span>
                        <span class="d-block">Subject: {{$subject}}</span>
                        <div class="mt-3">
                            <p>{{$message}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>