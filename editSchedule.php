<?php include 'header.php'; 
$gerbong = $_GET['gerbong'];

$url = "localhost:8080/scheduler";

$client = curl_init();
curl_setopt($client, CURLOPT_URL, $url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);

$result = json_decode($response);
//var_dump($result->schedule[1]->gerbong);
curl_close($client);
$listSchedule = $result->schedule;

foreach ($listSchedule as $key => $schedule) {
    if($schedule->gerbong==$gerbong){
        
    }
}

?>

<section class="sample-page">
    <div class="container border border-primary rounded col-md-8" data-aos="fade-up">
        <div class="row mt-3">
            <h3 class="d-flex justify-content-center">Form edit data jadwal kereta</h3>
        </div>
        <div class="form-section row justify-content-center mb-3">
            <div class="col-md-10">
                <form id="addSchedule" method="post">
                    <div class="mb-4">
                        <label for="gerbong" class="form-label">Nomor Gerbong</label>
                        <input type="number" class="form-control" id="gerbong" aria-describedby="gerbong" value="">
                    </div>
                    <div class="mb-3">
                        <label for="keberangkatan" class="form-label">Stasiun Keberangkatan</label>
                        <input type="text" class="form-control" id="keberangkatan" aria-describedby="keberangkatan">
                    </div>
                    <div class="mb-3">
                        <label for="jamk" class="form-label">Jam Keberangkatan</label>
                        <input type="time" class="form-control" id="jamk" aria-describedby="jamk">
                    </div>
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Stasiun Tujuan</label>
                        <input type="text" class="form-control" id="tujuan" aria-describedby="tujuan">
                    </div>
                    <div class="mb-3">
                        <label for="jamt" class="form-label">Jam Tiba</label>
                        <input type="time" class="form-control" id="jamt" aria-describedby="jamt">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" aria-describedby="harga">
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="number" class="form-control" id="kapasitas" aria-describedby="kapasitas">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="correct">
                        <label class="form-check-label" for="correct">Saya yakin data sudah benar</label>
                    </div>
                    <button type="submit" class="btn btn-primary" form="addSchedule" value="Submit" >Simpan data</button>
                </form>
            </div>
        </div>
    </div>
</section>

</main><!-- End #main -->

<?php include 'footer.php'; ?>