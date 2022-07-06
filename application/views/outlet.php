<?php $this->load->view('header');?>
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Daftar Outlet</h1>
        </div>
    </div>
    <div class="container-fluid pt-3">
            <div class="col-lg-10 mb-5" style="margin-left: 100px;">
                <table class="table table_light" style="font-size: 20px;">
<thead class="table-primary">
<tr>
<td>ID OUTLET</td>
<td>NAMA OUTLET</td>
<td>ALAMAT OUTLET</td>
</tr>
</thead>
<tbody>
<?php 

foreach ($isi as $key){ 
?>
<tr>
<td><?= $key->id_outlet; ?></td>
<td><?= $key->nama_outlet; ?></td>
<td><?= $key->alamat; ?></td>
</tr>
<?php } ?>
</tbody>
                </table>
            </div>
    </div>

    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        
       
    </div>


    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url ('lib/easing/easing.min.js') ?>"></script>
    <script src="<?php echo base_url ('lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url ('js/main.js')?>"></script>
</body>
</html>