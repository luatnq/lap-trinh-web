<?php
    $sql_lietkedonhang= "SELECT * FROM tbl_donhang ORDER BY created_date DESC";
    $query_lietkedonhang= mysqli_query($mysql, $sql_lietkedonhang);
?>

<div class="row my-5">
        <h3 class="fs-4 mb-3 text-center text-uppercase">Bảng trạng thái các đơn hàng</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm table-striped table-hover">
                <thead class="thead-dark">
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
                    <tr>
                        <th scope="row">1</th>
                        <td>HN3214</td>
                        <td>Luat</td>
                        <td>13-11-2021</td>
                        <td>1.000.000</td>
                        <td>Chưa phê duyệt</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>HN5423</td>
                        <td>Luatnq</td>
                        <td>11-11-2021</td>
                        <td>1.500.000</td>
                        <td>Chưa phê duyệt</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>HN5923</td>
                        <td>Luatnq</td>
                        <td>10-11-2021</td>
                        <td>10.500.000</td>
                        <td>Chưa phê duyệt</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>HN5423</td>
                        <td>Luatnq</td>
                        <td>11-11-2021</td>
                        <td>1.500.000</td>
                        <td>Chưa phê duyệt</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>HN5423</td>
                        <td>Luatnq</td>
                        <td>11-11-2021</td>
                        <td>1.500.000</td>
                        <td>Chưa phê duyệt</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>HN5423</td>
                        <td>Luatnq</td>
                        <td>11-11-2021</td>
                        <td>1.500.000</td>
                        <td>Chưa phê duyệt</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>HN5423</td>
                        <td>Luatnq</td>
                        <td>11-11-2021</td>
                        <td>1.500.000</td>
                        <td>Chưa phê duyệt</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>