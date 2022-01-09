<?php
    require_once 'config/db.php';

    class EmployeeModel{
        private $ID;
        private $Name;
        private $Sex;
        private $Birthday;
        private $Job;
        private $DateStart;
        private $DateEnd;
        private $Address;
        // Định nghĩa các phương thức để sau này nhận các thao tác tương ứng với các action
        public function getAllEmps(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM DOCGIA";
            $result = mysqli_query($conn,$sql);

            // Tôi khai báo biến lưu kết quả trả về (dạng mảng)
            $arr_emps = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_emps = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }

            return $arr_emps;
        }

        public function AddEmps($isEmps = []){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sqlInsert = "INSERT INTO DOCGIA(Madg, hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan,diachi)
            VALUES ('{$isEmps['bdMa']}', '{$isEmps['bdName']}', '{$isEmps['bdSex']}', '{$isEmps['bdBirthday']}', '{$isEmps['bdJob']}', '{$isEmps['bdDateStart']}', '{$isEmps['bdDateEnd']}','{$isEmps['bdAddress']}')";
            $isInsert = mysqli_query($conn,$sqlInsert);

            $this->closeDb($conn);

            return $isInsert;
        }

  public function UpdateEmps($bdID = null){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql3 = "UPDATE DOCGIA SET Madg= '$Name', gioitinh = '$Sex', namsinh = '$Birthday', nghenghiep = '$Job', ngaycapthe = '$bdDateStart', ngayhethan = '$DateEnd' WHERE madg = '$ID'";
            $result3 = mysqli_query($conn,$sql3);
        }

        public function DeleteEmps($bdID = null){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql4 = "DELETE FROM DOCGIA WHERE Madg = '$ID'";
            $result4 = mysqli_query($conn,$sql4);

            $this->closeDb($conn);

            return $result4;
        }

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    }


?>