<?php 
    session_start();
    include_once "../config/dbconnect.php";
    $userID = $_SESSION['userID'];
?>

<?php if(isset($_SESSION['userID'])) { ?>
    <?php if($_SESSION['userID'] == 999) { 
        $sql = "SELECT u.*, r.* FROM user u JOIN role r ON u.roleID = r.roleID where u.userID = $userID ";
        $result=$conn-> query($sql);
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
    ?>
    <section class="home-section"> 
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card2" style="top:20px;left:300px;">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="./assets/images/logo.png" width="150" height="150" alt="user" >
                                    <div class="mt-3">
                                        <h3><?php echo $row['username'] ?></h3>
                                        <p><?php echo "- ". $row['position'] . " -"?></p>
                                        <h6><?php echo $row['userEmail'] ?></h6>
                                        <h6><?php echo $row['userPhoneNum'] ?></h6>
    <?php
            }
        } else {
            // No rows found
            echo "No user found with the provided userID.";
        }
    } else { 
        // If userID is not 999
        $sql = "SELECT u.*, r.* FROM user u JOIN role r ON u.roleID = r.roleID where u.userID = $userID ";
        $result=$conn-> query($sql);
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) { ?>
    <section class="home-section"> 
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card2" style="top:20px;left:500px;">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="./assets/images/staff.png" width="150" height="150" alt="user" >
                                    <div class="mt-3">
                                        <h3><?php echo $row['username'] ?></h3>
                                        <p><?php echo "- ". $row['position'] . " -"?></p>
                                        <h6><?php echo $row['userEmail'] ?></h6>
                                        <h6><?php echo $row['userPhoneNum'] ?></h6>
                                        
                                        <button class="btn btn-primary" style="height:40px"  onclick="updateAccountForm('<?=$row['userID']?>')">Edit</button>
    <?php   }
        }
    } 
    }?>