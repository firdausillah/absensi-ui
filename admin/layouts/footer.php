            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <p class="mb-0">
                                <a href="index.php" class="text-muted"><strong>AdminKit</strong></a> &copy;
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
            </div>

            <script src="../assets/js/app.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>
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
                $(document).ready(function() {
                    $('#table1').DataTable();
                });
            </script>
            </body>

            </html>