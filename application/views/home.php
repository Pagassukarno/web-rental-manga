<?php $this->load->view('header');?>
<div style="margin: 30px 0px 30px 80px;">
                <div id="header-carousel" class="carousel slide" data-ride="carousel" style="width: 1200px;" >
                    <div class="carousel-inner " class="">
                        <div class="carousel-item active" style="height: 670px;">
                            <img class="img-fluid" src="<?php echo base_url ('img/jujutsu.jpg') ?>" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center ">
                                <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">Rental 1 Manga 10k/minggu</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Jujutsu Kaisen</h3>
                                <a href="jujutsukaisen" class="btn btn-light py-2 px-3">Rental Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 670px;">
                            <img class="img-fluid" src="<?php echo base_url ('img/onepiece.jpg') ?>" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">Rental 1 Manga 10k/minggu</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">One Piece</h3>
                                    <a href="onepiece" class="btn btn-light py-2 px-3">Rental Now</a>
                                </div>
                            </div>
                        </div>
						<div class="carousel-item" style="height: 670px;">
                            <img class="img-fluid" src="<?php echo base_url ('img/conan.jpg') ?>" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">Rental 1 Manga 10k/minggu</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Detektif Conan</h3>
                                    <a href="One piece" class="btn btn-light py-2 px-3">Rental Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 50px;">
                    <p class="text-right">5 Products</p>
                    <a href="detektifconan" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="<?php echo base_url ('img/detektifconan-vol1.jpeg') ?>" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Detective Conan </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1" >
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 52px;">
                    <p class="text-right">5 Products</p>
                    <a href="jujutsukaisen" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="<?php echo base_url ('img/jujutsukaisen-vol1.jpeg') ?>" alt="" style="height: fit-content;">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Jujutsu Kaisen </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 50px;">
                    <p class="text-right">5 Products</p>
                    <a href="onepiece" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="<?php echo base_url ('img/onepiece-vol1.jpeg') ?>" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">One Piece</h5>
                </div>
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