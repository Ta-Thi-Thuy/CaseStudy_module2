<?php

require_once "src/view/blocks/header.php";

?>
    <div class="container">

        <h2>Danh sách thực phẩm</h2>
        <table id="ThucPham" class="table table-hover table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>STT</th>
                <th>Mã thực phẩm</th>
                <th>Tên thực phẩm</th>
                <th>Loại thực phẩm </th>
                <th>Giá</th>
                <th>Ảnh minh họa</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($foods as $key => $food): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><a href="index.php?page=show-details&id=<?php echo $food['foodCode'] ?>">
                            <?php echo 'DH-' . $food['foodCode'] ?>
<!--                        </a>--><?php //echo $food['foodCode'] ?><!--</td>-->
                    <td><?php echo $food['foodName'] ?></td>
                    <td><?php echo $food['foodLine'] ?></td>
                    <td><?php echo $food['buyPrice'] ?></td>
                    <td>
                        <img style="width: 250px" src="img/<?php echo $food['img'] ?> ">
                    </td>
                    <td><a href="?page=delete&foodCode=<?php echo $food['foodCode'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger">Delete</a>
                    </td>
                    <td><a href="?page=edit&foodCode=<?php echo $food['foodCode'] ?>" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <th>STT</th>
                <th>Mã thực phẩm</th>
                <th>Tên</th>
                <th>Loại thực phẩm </th>
                <th>Giá</th>
                <th>Ảnh minh họa</th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    </div>

<?php

require_once "src/view/blocks/footer.php";

?>