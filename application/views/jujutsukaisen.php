<?php $this->load->view('header');?>
<body>

<div class="carousel-inner " style="margin: 30px 0px 30px 80px;" >
<div class="carousel-item active" style="height: 500px; width: 1200px;">
                            <img class="img-fluid" src="<?php echo base_url ('img/jk.jpg') ?>" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center ">
                                <div class="p-3" style="max-width: 500px;">
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Jujutsu Kaisen</h3>            
                                </div>
                            </div>
                        </div>
</div>
<div class="container-fluid pt-5"> 
    <div class="col-lg-10" style="margin-left: 110px;">
                <div class="row">    
 <?php if (!empty($product_listjk)): ?>
    
    <?php 
        $a = 1;
        foreach($product_listjk as $product): ?> 
 
                    <div class="col col-lg-4 col-md-3 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="<?php 
                                if ($a == 1 )
                                echo base_url ('img/jujutsukaisen-vol1.jpeg');
                                elseif ($a == 2)
                                echo base_url ('img/jujutsukaisen-vol2.jpeg');
                                elseif ($a == 3)
                                echo base_url ('img/jujutsukaisen-vol3.jpeg');
                                elseif ($a == 4)
                                echo base_url ('img/jujutsukaisen-vol4.jpeg');
                                else echo base_url ('img/jujutsukaisen-vol5.jpeg');
                                ++$a;
                                ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?php echo $product->nama_manga ?></h6>
                                <h6 class="text-truncate mb-3">Rp.<?php echo $product->harga_sewa ?></h6>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="<?php echo site_url("cart/add/$product->id_manga") ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    

 <?php endforeach ?>
 <?php else : ?>
     <p>Produk kosong.</p>
 <?php endif ?> 
 </div>
 </div>
    </div>


    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">        </div>
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url ('lib/easing/easing.min.js') ?>"></script>
    <script src="<?php echo base_url ('lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url ('js/main.js')?>"></script>
</body>

</html>