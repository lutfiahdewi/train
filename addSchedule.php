<?php include 'header.php'; ?>

<section class="sample-page">
    <div class="container border border-primary rounded col-md-8" data-aos="fade-up">
        <div class="row mt-3">
            <h3 class="d-flex justify-content-center">Form tambah data jadwal kereta</h3>
        </div>
        <div class="form-section row justify-content-center mb-3">
            <div class="col-md-10">
                <form id="addSchedule" method="post">
                    <div class="mb-4">
                        <label for="gerbong" class="form-label">Nomor Gerbong</label>
                        <input type="number" class="form-control" id="gerbong" aria-describedby="gerbong">
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
                    <button type="submit" class="btn btn-primary" form="addSchedule" value="Submit" >Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</section>

</main><!-- End #main -->

<?php include 'footer.php'; ?>