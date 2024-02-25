<?php
$countries = array (
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="//cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>
</head>
<body>

<div class = "container">
    <form action="">
        <h3>Basic Info</h3>
        <hr>
        <div class="blog1">
            <label>Employee ID </label>
            <input type="text" value="" id="employeeID">
        </div>
        <div class="blog1">
            <label>first Name</label>
            <input type="text" value="" id="firstName">
        </div>
        <div class="blog1">
            <label>Last Name</label>
            <input type="text" value="" id="lastName">
        </div>
        <div class="form-radio">
            <label>Gender</label>
            <div class="k1"><input type="radio" name="gender">Male</div>
            <div class="k1" ><input type="radio" name="gender">Female</div>
            <div class="k1"><input type="radio" name="gender">XXX</div>
            <div class="k1"><input type="radio" name="gender">ZZZ</div>
        </div>

        <div class="blog1">
            <label>Title</label>
            <input type="text" name="title">
        </div>
        <div class="blog1">
            <label>Suffix</label>
            <input type="text" name="suffix">
        </div>
        <div class="blog1">
            <label>BirthDate</label>
            <input type="date" name="birthdate">
        </div>
        <div class="blog1">
            <label>HireDate</label>
            <input type="date" name="hiredate">
        </div>
        <div class="blog1">
            <label>SSN # (if applicable)</label>
            <input type="text" name="hiredate">
        </div>
        <div class="blog1">
            <label>Reports To</label>
            <select class="style">
                <option value="" label="" name="">Buchanan</option>
                <option value="" label="" name="">berry</option>
            </select>
        </div>

        <h3>Contact Info</h3>
        <hr>
        <div class="blog1">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="blog1">
            <label>Address</label>
            <input type="text" name="address" >
        </div>
        <div class="blog1">
            <label>City</label>
            <input type="text" name="city" >
        </div>
        <div class="blog1">
            <label>Region</label>
            <input type="text" name="region" >
        </div>
        <div class="blog1">
            <label>Postal Code</label>
            <input type="text" name="postal" >
        </div>
        <div class="blog1">
            <label>Country</label>
            <select class="select">
                <?php
                include "data.php";
                foreach ($countries as $item)
                    echo '<option>'.$item.'</option>';
                ?>
                <option value="test">test</option>
            </select>
        </div>
        <div class="blog1">
            <label>US Home Phone</label>
            <input type="text" name="home-phone" >
        </div>
        <div class="blog1">
            <label>Photo</label>
            <input type="file" id="file-upload">
        </div>


        <h3>Contact Info</h3>
        <hr>
        <div class="blog1">
            <label>Notes</label>
            <textarea  id="notes" class="textarea"></textarea>
            <script>
                CKEDITOR.replace('notes');
            </script>
        </div>
        <div class="checkbox">
            <label>Preferred Shift</label>
            <input type="checkbox" name=" ">Regular

        </div>
        <div class="checkbox1">
            <input type="checkbox" name=" ">Gravy Yard
        </div>
        <div class="checkbox2">
            <label>Active?</label>
           <input type="checkbox" id="Active" name=" " class="checkbox22">
        </div>

        <div class="blog1">
            <label>Are you human?</label>
            <input type="text" name=" ">
        </div>

        <h3></h3>
        <hr>
        <div class="blog12">

                <button class="button"><</button>
                <button class="button">></button>
                <p>*required</p>
        </div>
        <div class="submitt">
                <input type="submit" name = "submit" value="Submit">
                <input type="submit" name = "cancel" value="Cancel">
        </div>

    </form>
</div>
</body>
</html>