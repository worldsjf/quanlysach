<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Quản lý sách</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?= base_url('public/css/style.css')?>" rel="stylesheet"/>
	
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 title" style="background-image: url('<?= base_url('public/image/1143.jpg_wh860.jpg')?>')">
            <p>
                PHẦN MỀM QUẢN LÝ THƯ VIỆN
            </p>
        </div>
    </div>
    <div>
        <p class="menu">
            <a href="<?= base_url()?>">Trang chủ</a>|
            <a href="#">giới thiệu</a>|
            <a href="#">Hướng dẫn</a>|
            <a href="#">Liên hệ</a>|
        </p>
    </div>

</div>

<div class="container-fluid">
    <div class="row" >
        <div class="col-md-3">
            <ul>
                <li>
                    <a href="<?= base_url('index.php/chitiet/danhmuc?phanbiet=0')?>">Sách giảm giá</a>
                </li>
                <li>Sách ôn thi</li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://salt.tikicdn.com/cache/200x200/ts/product/25/c9/a7/d8b90a27e250bb36b8d1e660f3485a93.jpg"/>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <p>Tên sách</p>
                            <p>Giá sách</p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-md-6">
                    <a href="<?= base_url('index.php/chitiet/detail?phanbiet=0')?>">

                        <div class="row">
                            <div class="col-md-6">
                                <img src="https://salt.tikicdn.com/cache/200x200/ts/product/25/c9/a7/d8b90a27e250bb36b8d1e660f3485a93.jpg"/>
                            </div>

                            <div class="col-md-6">
                                <p>Tên sách</p>
                                <p>Giá sách</p>
                            </div>

                        </div>

                    </a>
                </div>

            </div>
        </div>
    </div>   
</div>

</body>
</html>