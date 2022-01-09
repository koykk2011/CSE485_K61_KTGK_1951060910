<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thêm người đăng ký</h2>
                    <div style="color: red">
                        <?php echo $error; ?>
                    </div>
                </div>

                <form method="post" action="">
                 Nhập Mã độc giả :
                    <input type="text" name="bdMa" value="" />
                    <br />
                    Nhập họ tên :
                    <input type="text" name="bdName" value="" />
                    <br />
                    Nhập giới tính :
                    <input type="text" name="bdSex" value="" />
                    <br />
                    Nhập năm sinh :
                    <input type="text" name="bdBirthday" value="" />
                    <br />
                    Nhập Nghề Nghiệp :
                    <input type="text" name="bdJob" value="" />
                    <br />
                    Nhập ngày Cấp thẻ :
                    <input type="text" name="bdDateStart" value="" />
                    <br />
                    Nhập Ngày Hết Hạn :
                    <input type="text" name="bdDateEnd" value="" />
                    <br />
                    Nhập Địa Chỉ:
                    <input type="text" name="bdAddress" value="" />
                    <br />
                    <input type="submit" name="btnSave" value="Save" />
                </form>
            </div>
        </div>
    </main>
<?php
    require "view/template/footer.php";
?>