<?php

require_once "src/view/blocks/header.php";

?>

<div  style="border: 1px solid black; background-color: lightgreen " class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="color: tomato; text-align: center;">Thay đổi</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Mã thực phẩm</label>
                    <input value="<?php echo $foods['foodCode'] ?>" type="text" class="form-control" name="name" readonly>
                </div>
                <div class="form-group">
                    <label>Tên thực phẩm</label>
                    <input value="<?php echo $foods['foodName'] ?>" type="text" class="form-control" name="foodName" placeholder="Nhập tên" required>
                </div>
                <div class=" form-group">
                        <label for="exampleFormControlTextarea1"> Loại thực phẩm</label>
                        <select name="foodLine" class="form-control ">
                            <?php foreach ($foodlines as $foodline): ?>
                                <option value="<?php echo $foodline['foodLine'] ?>"><?php echo $foodline['foodLine'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="col-4 form-group">
                    <label>Giá</label>
                    <input value="<?php echo $foods['buyPrice'] ?>" type="number"class="form-control" name="buyPrice" placeholder="Nhập giá" required>
                </div>
                <div class="col-4 form-group">
                    <label>Ảnh minh họa</label>
                    <input type="file" name="img" placeholder="Chọn ảnh"  required>
                </div>
                <button style="height: 50px" type="submit" class="btn btn-primary">Thay đổi</button>
                <button style="height: 50px" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </div>
    </div>

<?php

require_once "src/view/blocks/footer.php";

?>