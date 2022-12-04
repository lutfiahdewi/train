<?php include 'header.php';

$url = "localhost:8080/scheduler";

$client = curl_init();
curl_setopt($client, CURLOPT_URL, $url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);

$result = json_decode($response);
//var_dump($result->schedule[1]->gerbong);
curl_close($client);
$listSchedule = $result->schedule;

?>

<section class="sample-page">
    <div class="container" data-aos="fade-up">
        <h2>Daftar Jadwal Keberangkatan dan Tujuan Kereta</h2>
        <button type="button" class="btn btn-outline-primary my-3 add" id="add" disabled>
            <i class="bi bi-plus-square me-1"></i>
            <a href="addSchedule.php" style="color:inherit">Tambah data kereta</a>
        </button>
        <!-- table schedule -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Gerbong</th>
                    <th scope="col">Stasiun Keberangkatan</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Stasiun Tujuan</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kapasitas</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listSchedule as $key => $schedule) {
                    echo "
                    <tr>
                    <td>$schedule->gerbong</td>
                    <td>$schedule->keberangkatan</td>
                    <td>$schedule->jamk</td>
                    <td>$schedule->tujuan</td>
                    <td>$schedule->jamt</td>
                    <td>$schedule->harga</td>
                    <td>$schedule->kapasitas</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-warning edit\" id=\"edit\"
                        onclick=\"editSchedule($schedule->gerbong)\" disabled>
                        <i class=\"bi bi-pencil-square me-1\"></i>Edit</button>
                        <button type=\"button\" class=\"btn btn-danger delete\" id=\"delete\"
                        onclick=\"deleteSchedule($schedule->gerbong)\" disabled>
                        <i class=\"bi bi-trash me-1\"></i>Delete</button>
                        
                    </td>
                </tr>";
                } ?>
            </tbody>
        </table>
        <!-- End of Table -->
    </div>
</section>

</main>
<!-- End #main -->

<?php
include 'footer.php';

if (isset($_COOKIE['token'])) {
    //set button
    if ($_COOKIE['role'] == 'admin"') {
        echo '<script>const kelas = ["add", "edit", "delete"];</script>';
    } elseif ($_COOKIE['role'] == 'member') {
        echo '<script>const kelas = ["edit"];</script>';
    }
    echo '<script>onload=changeClickability(kelas)</script>';

}


?>