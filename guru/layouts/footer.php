    </div>
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-left">
                    <p class="mb-0">
                        <a href="index.php" class="text-muted"><strong>Absenin</strong></a> &copy; <script>document.write(new Date().getFullYear());</script>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>

    <script src="../assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script>
        function Hapus() {
            Swal.fire({
                text: 'Apakah anda yakin akan menghapus data ini?',
                icon: 'error',
                confirmButtonText: 'Hapus'
            })
        }
    </script>
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
    <script>
        // Function ini dijalankan ketika Halaman ini dibuka pada browser
        $(function() {
            setInterval(timestamp, 1000); //fungsi yang dijalan setiap detik, 1000 = 1 detik
        });

        //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
        function timestamp() {
            $.ajax({
                url: 'config/timestamp_ajax.php',
                success: function(data) {
                    $('#timestamp').html(data);
                },
            });
        }
    </script>
    </body>

    </html>