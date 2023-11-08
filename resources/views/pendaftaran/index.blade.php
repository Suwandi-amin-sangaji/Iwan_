<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Pendaftaran</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <!-- Include jQuery and jQuery UI -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body class="container bg-light">
    <!-- Start Header form -->
    <div class="text-center pt-5">
        <img src="https://i.ibb.co/8cDgdFX/Logo.png" alt="network-logo" width="72" height="72" />
        <h2>Form Pendaftaran</h2>
        <p>
            Silakan Melakukan Pendaftaran Dan Isi Data Dengan Benar
        </p>
    </div>
    <!-- End Header form -->

    <!-- Start Card -->
    <div class="card">
        <!-- Start Card Body -->
        <div class="card-body">
            <!-- Start Form -->
            <form id="bookingForm" action="{{ route('pendaftaran.store') }}" method="POST" class="needs-validation"
                novalidate autocomplete="off" enctype="multipart/form-data">
                @csrf <!-- Menambahkan token CSRF -->
                <!-- Start Input Nama Kapal -->
                <div class="form-group">
                    <label for="inputName">Nama Kapal</label>
                    <input type="text" class="form-control" id="inputName" name="nama_kapal" placeholder="Nama Kapal"
                        required />

                </div>
                <!-- End Input Nama Kapal -->

                <!-- Start Input Email -->
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Alamat Email"
                        required />

                </div>
                <!-- End Input Email -->

                <!-- Start Input Nomor HP -->
                <div class="form-group">
                    <label for="inputPhone">Nomor HP</label>
                    <input type="number" class="form-control" id="inputPhone" name="no_hp" placeholder="Nomor HP"
                        required />

                </div>
                <!-- End Input Nomor HP -->

                <!-- Start Input Jumlah Penumpang -->
                <div class="form-group">
                    <label for="inputJumlahPenumpang">Jumlah Penumpang</label>
                    <input type="number" class="form-control" id="inputJumlahPenumpang" name="jumlah_penumpang"
                        placeholder="Jumlah Penumpang" required />
                </div>
                <!-- End Input Jumlah Penumpang -->

                <div class="form-group">
                    <label for="inputCluster">Cluster</label>
                    <select class="form-control" id="inputCluster" name="cluster_id" required>
                        <option value="Pilih" readonly>Pilih Cluster</option>
                        @foreach ($clusters as $cluster)
                            <option value="{{ $cluster->id }}">{{ $cluster->nama_cluster }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- End Input Cluster -->

                <!-- Start Input Tanggal -->
                <div class="form-group">
                    <label for="inputTanggal">Tanggal</label>
                    <input type="date" class="form-control" id="inputTanggal" name="tanggal" required />
                </div>
                <!-- End Input Tanggal -->

                <!-- Start Input Titik Selam -->
                <div class="form-group">
                    <label for="inputTitikSelam">Titik Selam</label>
                    <select class="form-control" id="inputTitikSelam" name="titik_selam_id" required>
                        <option value="Pilih" readonly>Pilih Titik Selam</option>
                        {{-- Opsi untuk titik selam akan dimuat melalui JavaScript saat cluster dipilih --}}
                    </select>
                </div>
                <!-- End Input Titik Selam -->

                <script>
                    // Menangani perubahan pemilihan cluster
                    $('#inputCluster').on('change', function() {
                        var selectedCluster = $(this).val();
                        console.log(selectedCluster);
                        if (selectedCluster !== "Pilih") {
                            // Kirim permintaan AJAX untuk mendapatkan data titik selam berdasarkan cluster yang dipilih
                            $.ajax({
                                type: 'GET',
                                url: '{{ route('selectCluster', '') }}/' + selectedCluster,


                                dataType: 'json',
                                success: function(data) {
                                    var titikSelamOptions =
                                        '<option value="Pilih" readonly>Pilih Titik Selam</option>';
                                    $.each(data, function(index, titikSelam) {
                                        titikSelamOptions += '<option value="' + titikSelam.id + '">' +
                                            titikSelam.nama + '</option>';
                                            console.log(titikSelamOptions);
                                    });
                                    $('#inputTitikSelam').html(titikSelamOptions);
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    console.log('Error: ' + textStatus, errorThrown);
                                }
                            });
                        } else {
                            // Jika "Pilih Cluster" dipilih, reset pilihan Titik Selam
                            $('#inputTitikSelam').html('<option value="Pilih" readonly>Pilih Titik Selam</option>');
                        }
                    });
                </script>
                

                <!-- Start Input Waktu -->
                <div class="form-group">
                    <label for="inputWaktu">Waktu</label>
                    <select class="form-control" id="inputWaktu" name="waktu_id" required>
                        <option value="Pilih" readonly>Pilih Waktu</option>
                        @foreach ($waktu as $w)
                            <option value="{{ $w->id }}">{{ $w->jam }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- End Input Waktu -->

                <!-- Start Input Catatan -->
                <div class="form-group">
                    <label for="textAreaCatatan">Catatan</label>
                    <textarea class="form-control" name="note" id="textAreaCatatan" rows="2"
                        placeholder="Masukkan catatan (opsional)"></textarea>
                </div>
                <!-- End Input Catatan -->

                <!-- Start Submit Button -->
                <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                <!-- End Submit Button -->
            </form>
            <!-- End Form -->
        </div>
        <!-- End Card Body -->
    </div>
    <!-- End Card -->
    <footer>
        <div class="my-4 text-muted text-center">
            <p>© Perusahaan Saya</p>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

 


    <!-- Start Script for Form Validation -->
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!-- End Script for Form Validation -->
</body>

</html>
