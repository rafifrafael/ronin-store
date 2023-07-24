<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ronin TopUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 mb-3">
        <a href="https://ronin-topup.vercel.app/" style="text-decoration:none; color: inherit;"><h1>RONIN TOPUP</h1></a>

        <div class="container mt-6 mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-7">
                    <div class="card">
                        <div class="card-body p-5">
                            <h2>
                                Hey {{$order->email}},
                            </h2>
                            <p class="fs-sm">
                                This is the receipt for a payment of <strong>Rp {{$order->total_price}}</strong> you made to Ronin TopUp.
                            </p>

                            <div class="border-top border-gray-200 pt-4 mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-muted mb-2">Payment No.</div>
                                        <strong>#{{$order->id}}</strong>
                                    </div>
                                    <div class="col-md-6 text-md-end">
                                        <div class="text-muted mb-2">Payment Date</div>
                                        <strong>{{$order->created_at}}</strong>
                                    </div>
                                </div>
                            </div>

                            <table class="table border-bottom border-gray-200 mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm px-0">
                                            Description</th>
                                        <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm text-end px-0">
                                            Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-0">Valorant Points</td>
                                        <td class="text-end px-0">Rp {{$order->total_price}}</td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">Status</td>
                                        <td class="text-end px-0">{{$order->status}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
