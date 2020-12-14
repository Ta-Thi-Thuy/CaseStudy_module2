<?php

require_once "src/view/blocks/header.php";
?>

    <div   style="border: 1px solid black; background-color: lavender;  " class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1 style="color: greenyellow; text-align: center">Thêm</h1>
                </div>
                <div class="col-12">
                    <form method="post" enctype="multipart/form-data">

                        <div    class="form-group">
                            <label>Tên thực phẩm</label>
                            <input name="foodName" type="text" class="form-control" placeholder="Nhập tên" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> Loại thực phẩm</label>
                            <select name="foodLine" class="form-control ">
                                <?php foreach ($foodlines as $foodline): ?>
                                    <option value="<?php echo $foodline['foodLine'] ?>"><?php echo $foodline['foodLine'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                </div>
                <div class="col-4 form-group">
                    <label>Giá</label>
                    <input name="buyPrice" type="number" class="form-control" placeholder="Nhập giá" required>
                </div>
                <div class="col-4 form-group">
                    <label>Ảnh minh họa</label>
                    <input type="file" name="img" placeholder="Chọn ảnh" required>
                </div>
                <div >
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<?php
require_once "src/view/blocks/footer.php";

?>