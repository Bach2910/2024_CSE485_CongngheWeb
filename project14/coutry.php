<?php


// Biến lưu trữ thông tin nhân viên
$employee = array(
    "id" => 9,
    "last_name" => "Dodsworth",
    "first_name" => "Anne",
    "gender" => "Female",
    "title" => "Sales Representative",
    "suffix" => "Ms.",
    "birthdate" => "1969-07-02",
    "hiredate" => "1994-11-15",
    "ssn" => "",
    "reports_to" => "Buchanan",
    "notes" => "Đây là phần ghi chú của bạn. Bạn có thể sử dụng định dạng văn bản phong phú tại đây."
);
$contact = array(
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "address" => "123 Main Street",
    "city" => "Anytown",
    "region" => "CA",
    "postal_code" => "91234",
    "country" => "United States",
    "phone" => "(123) 456-7890",
    "photo" => "image.jpg"
);

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin nhân viên</title>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="coutry.css" />
</head>
<body>
<div class="Basic">
    <h1>Basic Info</h1>
    <form action="process.php" method="post">
        <div class="form-group">
            <label for="last_name">Employ ID&emsp;&emsp;&emsp;&emsp;&ensp;</label>
            <input type="text" name="id" id="id" class="form-input" value="<?php echo $employee['id']; ?>">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name&emsp;&emsp;&emsp;&emsp;&ensp;</label>
            <input type="text" name="last_name" id="last_name" class="form-input" value="<?php echo $employee['last_name']; ?>">
        </div>
        <div class="form-group">
            <label for="first_name">First Name&emsp;&emsp;&emsp;&emsp;&ensp;</label>
            <input type="text" name="first_name" id="first_name" class="form-input" value="<?php echo $employee['first_name']; ?>">
        </div>
        <div class="form-group">
        <label for="gender">Gender&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
        <select name="gender" id="gender">
            <option value="Male" <?php if ($employee['gender'] === 'Male') echo 'selected'; ?>>Nam</option>
            <option value="Female" <?php if ($employee['gender'] === 'Female') echo 'selected'; ?>>Nữ</option>
            <option value="" >ZZZ</option>
            <option value="" >XXX</option>
        </select>
        </div>
        <div class="form-group">
            <label for="title">Title&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" name="title" id="title" class="form-input" value="<?php echo $employee['title']; ?>">
        </div>
        <div class="form-group">
            <label for="suffix">Suffix&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;</label>
            <input type="text" name="suffix" id="suffix" class="form-input" value="<?php echo $employee['suffix']; ?>">
        </div>
        <div class="form-group">
            <label for="birthDate">Birthdate&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="date" name="birthdate" id="birthdate" class="form-input" value="<?php echo $employee['birthdate']; ?>">
        </div>
        <div class="form-group">
            <label for="HireDate">HireDate&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="date" name="hiredate" id="hiredate" class="form-input" value="<?php echo $employee['hiredate']; ?>">
        </div>
        <div class="form-group">
            <label for="SSN">SSN # (if applicable)</label>
            <input type="text" name="ssn" id="ssn" class="form-input" value="<?php echo $employee['ssn']; ?>">
        </div>
        <div class="form-group">
            <label for="reports_to">Reports To&emsp;&emsp;&emsp;&emsp;</label>
            <select name="reports_to" id="Reports To">
                <option value="">Afghanistan</option>
                <option value="">Albania</option>
                <option value="" >Belarus</option>
                <option value="" >Burundi</option>
                <option value="" >Buchanan</option>
            </select>
        </div>
    </form>
</div>
<br>
<div class="Contact Info">
    <h1>Contact Info</h1>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email" class="form-label">Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="email" name="email" id="email" class="form-input" value="<?php echo $contact['email']; ?>">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Address&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;</label>
            <input type="text" name="address" id="address" class="form-input" value="<?php echo $contact['address']; ?>">
        </div>
        <div class="form-group">
            <label for="city" class="form-label">City:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;</label>
            <input type="text" name="city" id="city" class="form-input" value="<?php echo $contact['city']; ?>">
        </div>
        <div class="form-group">
            <label for="region" class="form-label">Region&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;</label>
            <input type="text" name="region" id="region" class="form-input" value="<?php echo $contact['region']; ?>">
        </div>
        <div class="form-group">
            <label for="postal_code" class="form-label">Postal Code&emsp;&emsp;&emsp;&ensp;</label>
            <input type="text" name="postal_code" id="postal_code" class="form-input" value="<?php echo $contact['postal_code']; ?>">
        </div>
        <div class="form-group">
            <label for="country" class="form-label">Country&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <select name="country" id="country" class="form-input">
                <option value="">Vietnam</option>
                <option value="">Brazil</option>
                <option value="">British Virgin</option>
                <option value="">Burkina Faso</option>
            </select>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Phone&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" name="phone" id="phone" class="form-input" value="<?php echo $contact['phone']; ?>">
        </div>
        <div class="form-group">
            <label for="photo" class="form-label">Photo&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="file" name="photo" id="photo" class="form-input">
        </div>
    </form>
</div>
<br>
<div class = "Optional-Info">
    <h1>Optional Info</h1>
    <div class ="form-group">
        <label for="notes">Notes</label>
        <textarea name="notes" id="notes"><?php echo $employee['notes']; ?></textarea>
    </div>
    <div class ="form-bottom">
        <label for="preferred_shift">Preferred Shift</label>
        <label style="margin-left: 20px" for="preferred_shift">Regular</label>
        <input type="checkbox" id="preferred_shift" name="shiftCheckbox">
        <br><label style="margin-left: 97px" for="preferred_shift">Gravy Yard</label>
        <input type="checkbox" id="preferred_shift" name="shiftCheckbox">
    </div>
    <div class = "form-bottom">
        <label for="active">Active?</label>
        <input style="margin-left: 120px" type ="checkbox" id="active"><br>
        <h1><label style="margin-left: 140px;font-family:Monaco; " for="code">TIDAWO</label><br></h1>
        <label for="human">Are you human ?</label>
        <label style="margin-left: 110px;" for="click">Click to change</label><br>
        <input style="margin-left: 150px;width: 20%" type="button" name="">
    </div>
    <div class ="rightandleft">
        <button><</button>
        <button>></button>
    </div>
    <div class = "twoButton">
        <input type="submit" value="Submit">

        <input type="submit" value="Cancel">
    </div>


</div>


<script>
    // Khởi tạo CKEditor cho phần ghi chú
    CKEDITOR.replace('notes');
</script>
</body>
</html>