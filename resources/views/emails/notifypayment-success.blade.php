<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <title>Payment Approval Notification</title>
</head>

<body style="background:lavender;">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-5">
                <div class="card" style="border-radius: 0px;">
                    <div class="card-body pb-5" style="color: #76A140;">
                        <p>Hello {{$fullname}}, <br><br> You're receiving this email from <b>Cryptoprofusion</b> as a proof that we have
                            verified your payment of {{'$'.$amount}} was successful. Your countdown starts immediately</p>
                        <p>cheers!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>