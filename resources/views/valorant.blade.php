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
        <a href="https://ronin-topup.vercel.app/" style="text-decoration:none"><h1>RONIN TOPUP</h1></a>

        <div class="container">
            <div class="row">
                <div class="col">
                    Column
                </div>
                <div class="col">
                    <form class="mt-3" action="/checkout" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="riot id" class="form-label">Riot ID</label>
                            <input type="riot id" class="form-control" name="name"
                                placeholder="Masukkan Riot ID+Tag anda" required>
                            <div class="form-text">Contoh : Ronin#nya</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan Email anda">
                            <div class="form-text">Email digunakan untuk menginformasikan pesanan.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nominal" class="form-label">Nominal</label>
                            <select class="form-select" name="total_price">
                                <option selected>Pilih Nominal</option>
                                <option value="30000">300 VP - Rp 30.000</option>
                                <option value="100000">1125 VP - Rp 100.000</option>
                                <option value="150000">1650 VP - Rp 150.000</option>
                            </select>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
