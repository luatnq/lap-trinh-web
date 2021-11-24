<?php
$sql_lietkedonhang = "SELECT * FROM tbl_donhang LEFT JOIN tbl_user on tbl_donhang.user_id = tbl_user.id ORDER BY created_date DESC";
$sql_lietkedoanhthu = "SELECT tbl_donhang.price FROM tbl_donhang WHERE tbl_donhang.status = 'Thành công' ";

$sql_countOrder = "SELECT * FROM tbl_donhang LEFT JOIN tbl_user on tbl_donhang.user_id = tbl_user.id WHERE tbl_donhang.status = '";
$sql_orderBy = "' ORDER BY created_date DESC";
?>
<div class="container-fluid px-4 overflow-hidden">
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="m-3 p-3  d-flex justify-content-around align-items-center rounded bg-silver shadow-custom text-white" style="background-color: #039be5;">
                <div>
                    <?php
                    $sql_countOrderPending = $sql_countOrder . "Chờ phê duyệt" . $sql_orderBy;
                    $query_countPending = mysqli_query($mysqli, $sql_countOrderPending);
                    $data = mysqli_num_rows($query_countPending);
                    ?>
                    <h1><?php echo $data; ?></h1>
                    <p class="fs-6">Đơn chờ phê duyệt </p>
                </div>
                <i class="fas fa-gift fs-1 text-white p-3"></i>
            </div>
        </div>

        <div class="col-md-3 ">
            <div class="m-3 p-3 d-flex justify-content-around align-items-center rounded bg-silver shadow-custom text-white" style="background-color: #ffa000;">
                <div>
                    <?php
                    $sql_countOrderPending = $sql_countOrder . "Thành công" . $sql_orderBy;
                    $query_countPending = mysqli_query($mysqli, $sql_countOrderPending);
                    $data = mysqli_num_rows($query_countPending);
                    ?>
                    <h1><?php echo $data; ?></h1>
                    <p class="fs-6">Đơn hàng đã thành công</p>
                </div>
                <i class="fas fa-hand-holding-usd fs-1 text-white p-3"></i>
            </div>
        </div>

        <div class="col-md-3 ">
            <div class="m-3 p-3 bg-silver d-flex justify-content-around align-items-center rounded shadow-custom text-white" style="background-color: #4caf50;">
                <div>
                    <?php
                    $sql_countOrderPending = $sql_countOrder . "Đang giao hàng" . $sql_orderBy;
                    $query_countPending = mysqli_query($mysqli, $sql_countOrderPending);
                    $data = mysqli_num_rows($query_countPending);
                    ?>
                    <h1><?php echo $data; ?></h1>
                    <p class="fs-6">Đơn đang vận chuyển</p>
                </div>
                <i class="far fa-shipping-timed fs-1 text-white p-3"></i>
            </div>
        </div>

        <div class="col-md-3 ">
            <div class="m-3 p-3 bg-silver d-flex justify-content-around align-items-center rounded shadow-custom text-white" style="background-color: #dd2c00;">
                <div>
                    <?php
                    $query_lietkedoanhthu = mysqli_query($mysqli, $sql_lietkedoanhthu);
                    $sum = 0;
                    while ($row = mysqli_fetch_array($query_lietkedoanhthu)) {
                        $sum += $row['price'];
                    }
                    ?>
                    <h1><?php echo number_format($sum) ?></h1>
                    <p class="fs-6  ">Doanh thu</p>
                </div>
                <i class="fas fa-chart-line fs-1 text-white p-3"></i>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="table-responsive custom-table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col" width="50">STT</th>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Người tạo</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Giá trị</th>
                        <th scope="col">Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query_lietkedonhang = mysqli_query($mysqli, $sql_lietkedonhang);
                    $i = 0;
                    while ($row = mysqli_fetch_array($query_lietkedonhang)) {
                        $i++;
                    ?>
                        <tr>
                            <th scope="col" width="50"><?php echo $i ?></th>
                            <td><?php echo $row['ma_don_hang'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['created_date'] ?></td>
                            <td><?php echo number_format($row['price']) ?></td>
                            <td><?php echo $row['status'] ?></td>
                        </tr>
                        <tr class="spacer"> <td colspan="100"></td> </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>