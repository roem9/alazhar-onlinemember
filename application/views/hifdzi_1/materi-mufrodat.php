        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="<?= base_url()?>hifdzi1/kelas/<?= $link?>" class="btn btn-md btn-success"><i class="fa fa-home mr-1"></i>Hifdzi 1</a>
                </div>
                <?php foreach ($image as $image) :?>
                    <div class="col-12 col-md-4 mb-3">
                        <?= $image?>
                    </div>
                <?php endforeach;?>

                <div class="col-12">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i>Tugas Tambahan. Penggal kalimat berikut menjadi perkata kemudian terjemahkan kata demi kata</div>
                    <ul class="list-group mb-3">
                        <?= $tambahan?>
                    </ul>
                </div>

                <div class="col-12 mb-3">
                    <?php if($back != "" && $next == "") :?>
                        <div class="d-flex justify-content-start">
                            <a href="<?= base_url()?>Hifdzi1/kelas/<?= $link?>?pertemuan=<?= $back?>" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i></a>
                        </div>
                    <?php elseif($back != "" && $next != "") :?>
                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url()?>Hifdzi1/kelas/<?= $link?>?pertemuan=<?= $back?>" class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i></a>
                            <a href="<?= base_url()?>Hifdzi1/kelas/<?= $link?>?pertemuan=<?= $next?>" class="btn btn-md btn-success"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    <?php elseif($back == "" && $next != "") :?>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>Hifdzi1/kelas/<?= $link?>?pertemuan=<?= $next?>" class="btn btn-md btn-success"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    <?php endif;?>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-warning">Latihan</li>
                        <?php if($latihan):?>
                            <li class="list-group-item d-flex">
                                <a href="<?= base_url()?>hifdzi1/kelas/<?= $link?>?latihan=<?= MD5($title)?>" class="btn btn-md btn-block btn-success mr-3">
                                    <div class="d-flex justify-content-between">Latihan 1 <span><?= date("H:i d-m-y", strtotime($latihan['waktu']))?></span></div>
                                </a>
                                <span class="btn btn-md btn-outline-dark"><?= $latihan['nilai']?></span>
                            </li>
                        <?php else :?>
                            <li class="list-group-item"><a href="<?= base_url()?>hifdzi1/kelas/<?= $link?>?latihan=<?= MD5($title)?>" class="btn btn-md btn-block btn-danger">Latihan 1</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>