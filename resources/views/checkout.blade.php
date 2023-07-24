<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-Fk7OCS5kBxFCbyVY"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <title>Ronin TopUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 mb-3">
        <h1>RONIN TOPUP</h1>

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
                                        <td class="px-0">Valorant VP</td>
                                        <td class="text-end px-0">Rp {{$order->total_price}}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="mt-5">
                                <div class="d-flex justify-content-end mt-3">
                                    <h5 class="me-3">Total:</h5>
                                    <h5 class="text-success">Rp {{$order->total_price}}</h5>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn btn-dark btn-lg card-footer-btn justify-content-center text-uppercase-bold-sm hover-lift-light" id="pay-button">
                            Pay Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              alert("payment success!"); console.log(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>
</body>

</html>