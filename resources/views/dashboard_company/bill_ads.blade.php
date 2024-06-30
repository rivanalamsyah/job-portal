<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/icon.png">
    <link rel="icon" href="/img/icon.png">

    <title>Maxy Academy | {{ $title }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/nucleo-icons.css" rel="stylesheet">
    <link href="/css/nucleo-svg.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="/css/style.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <h4 class="card-title">Advertising Payments</h4>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Id Job: </label>
                    <span>35735275</span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Metode Pembayaran: </label>
                    <span>Bank Rakyat Indonesia (BRI)</span>
                </div>
                <div class="mb-3">
                    <label class="form-label">No Rekening: </label>
                    <span>345376548745764764</span>
                </div>
                <div class="mb-3">
                    <label for="uploadBuktiPembayaran" class="form-label">Upload Bukti Pembayaran:</label>
                    <input class="form-control" type="file" id="uploadBuktiPembayaran">
                </div>
                <!-- Buttons -->
                <a href="/job-management" class="btn btn-danger" role="button">Cancel</a>
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#sendModal">Send</button>
            </div>
        </div>

        <body>
            <div class="mt-4">
                <h4>Payment Instructions</h4>
                <div class="card mb-3">
                    <div class="card-header">
                        <strong>ATM Bank Rakyat Indonesia</strong>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Masukkan kartu ATM dan Pin anda.</li>
                            <li>Pilih menu Transfer</li>
                            <li>Masukkan nomor rekening :</li>
                            <li>Masukkan nominal tagihan</li>
                            <li>Cek, apakah sesuai dengan tagihan</li>
                            <li>Lalu, upload bukti transfer</li>
                        </ol>
                    </div>
                    <div class="card-header">
                        <strong>Pembayaran Melalui Mobile Banking</strong>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Buka aplikasi MBSB</li>
                            <li>Masukkan user dan password</li>
                            <li>Pilih menu transfer antar Bukopin.</li>
                            <li>Masukkan nomor Virtual Account: 7719602100016010.</li>
                            <li>Masukkan nominal tagihan.</li>
                            <li>Cek, apakah nama dan transaksi sesuai tagihan.</li>
                            <li>Klik transfer.</li>
                            <li>Lalu, kirim bukti transfer</li>
                            <li>Selesai.</li>
                        </ol>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sendModalLabel">Success!</h5>
                </div>
                <div class="modal-body">
                    <img src="/img/illustrations/success-post-job.jpg"" alt="Image" class="img-fluid"
                        style="width: 200px; height: 200px;">
                    <p>Congratulations! We will process your package immediately. Thank you for using our platform!</p>
                </div>
                <div class="modal-footer">
                    <a href="/job-management" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/js/plugins/smooth-scrollbar.min.js"></script>
</body>

</html>
