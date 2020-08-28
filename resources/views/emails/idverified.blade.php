<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <title>Payment Approval Notification</title>
</head>

<body style="background: #fafafa;width: 38em;margin: auto;padding: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-4 mt-4">
                <div class="card" style="border-radius: 0px;width: 38em;margin: auto;">
                    <div class="card-body pb-5" style="color: #76A140;font-size:16px;text-align:justify;">
                        <p>Hello {{$fullname}}, <br><br> You're receiving this email from <b>Cryptoprofusion</b> as a proof <br> that we have
                            verified your uploaded document. <br> Continue to <a href="https://cryptoprofusion.com/login" class="text-decoration-none btn btn-primary" style="background: #76A140;color:white;text-decoration:none;padding: 6px 8px;">Login</a></p>
                        <p>cheers!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>