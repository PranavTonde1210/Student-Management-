<?php
include("config.php")
?>
<?php
if(isset($_POST['searchdata'])) 
{
    $search = $_POST['search'];
    $query = "SELECT * FROM form WHERE id = '$search'";
    $data = mysqli_query($conn, $query);
    if ($data && mysqli_num_rows($data) > 0) {
        $result = mysqli_fetch_assoc($data);
    } else {
        $result = []; 
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="center">
        <form action="#" method="POST">
        <h1>Student Data Entry Automation</h1>
        <div class="form"> 
            <input type="text" placeholder=" Search Student ID"  class="textfield" name="search" value="<?php if(isset($_POST['searchdata'])){ echo $result['id']; } ?>">
            <input type="text" placeholder="Enter Student Name"  class="textfield" name="name"  value="<?php if(isset($_POST['searchdata'])){ echo $result['std_name']; } ?>">
            <input type="number" placeholder="Select Age"  class="textfield" name="age" value="<?php if(isset($_POST['searchdata'])){ echo $result['age']; } ?>">
            <select name="city" class="textfield">
                <option value="not selected">Select City</option>
                <option value="mumbai" <?php if(isset($result['city']) && $result['city'] == 'mumbai') { echo "selected"; } ?>>Mumbai</option>
                <option value="pune" <?php if(isset($result['city']) && $result['city'] == 'pune') { echo "selected"; } ?>>Pune</option>
                <option value="nagpur" <?php if(isset($result['city']) && $result['city'] == 'nagpur') { echo "selected"; } ?>>Nagpur</option>
                <option value="nashik" <?php if(isset($result['city']) && $result['city'] == 'nashik') { echo "selected"; } ?>>Nashik</option>
                <option value="aurangabad" <?php if(isset($result['city']) && $result['city'] == 'aurangabad') { echo "selected"; } ?>>Aurangabad</option>
                <option value="solapur" <?php if(isset($result['city']) && $result['city'] == 'solapur') { echo "selected"; } ?>>Solapur</option>
                <option value="amravati" <?php if(isset($result['city']) && $result['city'] == 'amravati') { echo "selected"; } ?>>Amravati</option>
                <option value="thane" <?php if(isset($result['city']) && $result['city'] == 'thane') { echo "selected"; } ?>>Thane</option>
                <option value="navi_mumbai" <?php if(isset($result['city']) && $result['city'] == 'navi_mumbai') { echo "selected"; } ?>>Navi Mumbai</option>
                <option value="kolhapur" <?php if(isset($result['city']) && $result['city'] == 'kolhapur') { echo "selected"; } ?>>Kolhapur</option>
                <option value="latur" <?php if(isset($result['city']) && $result['city'] == 'latur') { echo "selected"; } ?>>Latur</option>
                <option value="jalgaon" <?php if(isset($result['city']) && $result['city'] == 'jalgaon') { echo "selected"; } ?>>Jalgaon</option>
                <option value="akola" <?php if(isset($result['city']) && $result['city'] == 'akola') { echo "selected"; } ?>>Akola</option>
                <option value="satara" <?php if(isset($result['city']) && $result['city'] == 'satara') { echo "selected"; } ?>>Satara</option>
                <option value="sangli" <?php if(isset($result['city']) && $result['city'] == 'sangli') { echo "selected"; } ?>>Sangli</option>
            </select>

            <select class="textfield" name="gender">
                <option value="not selected">Select Gender</option>
                <option value="male" <?php if(isset($result['gender']) && $result['gender'] == 'male') { echo "selected"; } ?>>Male</option>
                <option value="female" <?php if(isset($result['gender']) && $result['gender'] == 'female') { echo "selected"; } ?>>Female</option>
            </select>

            <input type="text" placeholder="Enter Email Address"  class="textfield" name="email" value="<?php if(isset($_POST['searchdata'])){ echo $result['email']; } ?>">
            <input type="text" placeholder="Enter Phone Number"  class="textfield" name="number" value="<?php if(isset($_POST['searchdata'])){ echo $result['phn_no']; } ?>">
            <textarea placeholder="Address" name="address"><?php if(isset($_POST['searchdata'])){ echo $result['address']; } ?></textarea>
            <input type="submit" value="Search" class="btn" name="searchdata">
            <input type="submit" value="Save" class="btn" name="save">
            <input type="submit" value="Modify" class="btn" name="modify">
            <input type="submit" value="Delete" class="btn" name="delete" onclick="return confirmdlt()">
            <input type="reset" value="Clear" class="btn" name="clear">
        </div>
        </form>
    </div>
</body>
</html>
<script>
    function confirmdlt()
    {
        return confirm('Are U Sure That U Want To Delete ?');
    }
</script>

<?php
if(isset($_POST['save']))
{
    $name     =$_POST['name'];
    $age      =$_POST['age'];
    $city     =$_POST['city'];
    $gender   =$_POST['gender'];
    $address  =$_POST['address'];
    $number   =$_POST['number'];
    $email    =$_POST['email'];

    $query ="INSERT INTO form (std_name,age,city,gender,email,phn_no,address) VALUES ('$name','$age','$city','$gender','$email','$number','$address')";

    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo "<script> alert('Data Saved Into DataBase ')</script>";
    } 
    else
    {
        echo "<script> alert('Data Is Saved Into DataBase ')</script>";
    }
}
?>
<?php
if(isset($_POST['delete']))
{
    $id = $_POST['search'];

    $query="DELETE FROM form WHERE id='$id'";

    $data=mysqli_query($conn,$query);
}
?>
<?php
if(isset($_POST['modify']))
{
    $id=$_POST['search'];
    $std_name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $phn_no=$_POST['number'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    $query="UPDATE form SET std_name='$std_name',age='$age',city='$city',gender='$gender',email='$email',phn_no='$phn_no',address='$address' WHERE id='$id'";
    $data=mysqli_query($conn,$query);
}
?>
