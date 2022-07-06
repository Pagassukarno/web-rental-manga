<?php $this->load->view('header');?>
<?php echo form_open('cart/update'); ?>
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Keranjang Belanja</h1>
        </div>
    </div>
    <div class="container-fluid pt-5">
    <div style="height: 40px;">Note : Jumlah item = jumlah minggu merental manga</div>
        <div class="row px-xl-5">
 
            <div class="col-lg-8 table-responsive mb-5">
                
                <table class="table table-bordered text-center mb-0">
                  
                    <thead class="bg-secondary text-dark">
                    
                        <tr>
                            <th>Manga</th>
                            <th>Jumlah item</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php $i = 1; ?>

 <?php foreach($this->cart->contents() as $items): ?> 

    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

    <tr>
         <td class="align-middle">
        <?php echo $items['name']; ?>
        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
         <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

         <?php echo $option_name; ?>:
         <?php echo $option_value; ?><br />

        <?php endforeach; ?>
      
        <?php endif; ?>


      </td>
      <td class="align-middle"> <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div></td>
     <td class="align-middle">Rp.
     <?php echo $this->cart->format_number($items['price']); ?></td>
      <td class="align-middle">Rp.
   <?php echo $this->cart->format_number($items['subtotal']); ?></td>
    </tr>

 <?php $i++; ?>

 <?php endforeach; ?>

 </table>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Keranjang Belanja</h4>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">Rp. <?php echo $this->cart->format_number($this->cart->total());?></h5>
                        </div> 
                        <div>
                            <button class="btn btn-block btn-primary my-3 py-3">Order </button>
                        </div>
                    </div>
                </div>
            </div>
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
 