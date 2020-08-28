<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <title>Notification</title>
</head>

<body style="background: #fafafa;width: 38em;margin: auto;padding: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-5">
                <div class="card" style="border-radius: 0px;">
                    <div class="card-body pb-5" style="color: #76A140;">
                        <span class="d-block text-center mb-4 h4" style="color: #76A140;">Notification!!</span>
                        <span class="d-block">Hello Cryptoprofusion,</span>
                        <div class="mt-3">
                            <p>This is a reminder to let you know that the following investor is due <br> for
                                withdrawal. Please visit your dashboard to see all others due for withdrawal. Do well to
                                verify before making payment.</p>
                            <div class="mt-2">
                            <span>Name: {{ $fullname }}</span><br>
                            <span>Wallet Address: {{ $wallet_address }}</span><br>
                            <span>Amount: {{ $amount }}</span><br>
                            <span>Due on: {{ $due_on }}</span><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>