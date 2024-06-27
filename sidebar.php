<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<?php if(isset($_SESSION['userID'])) { ?>
        <?php if($_SESSION['userID'] == 999) { ?>
    <div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hello, Admin</h5>
    </div>  
<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./adminDashboard.php" ><i class="fa fa-home"></i> Dashboard</a>
    <!--<a href="#customers"  onclick="showCustomers()" ><i class="fa fa-users"></i> Customers</a>
    <a href="#category"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Category</a>
    <a href="#sizes"   onclick="showSizes()" ><i class="fa fa-th"></i> Sizes</a>
    <a href="#productsizes"   onclick="showProductSizes()" ><i class="fa fa-th-list"></i> Product Sizes</a>    
    <a href="#products"   onclick="showProductItems()" ><i class="fa fa-th"></i> Products</a>
    <a href="#orders" onclick="showOrders()"><i class="fa fa-list"></i> Orders</a>-->
    <a href="#users" onclick="showUser()"><i class="fa fa-users"></i> Staff</a>
    <a href="#users" onclick="showRole()"><i class="fa fa-briefcase"></i> Role</a>
    <!-- <a href="#parcels" onclick="showParcels()"><i class="fa fa-archive"></i> Parcels</a> -->
    <a href="#report" onclick="showReport()"><i class="fa fa-list"></i> Report</a>
  
  <!---->

        <?php }else { ?>
            <div class="side-header">
            <img src="./assets/images/staff.png" width="120" height="120" alt="Swiss Collection"> 
            <h5 style="margin-top:10px;">Hello! Staff</h5>
            </div>
            <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="./staffDashboard.php" ><i class="fa fa-home"></i> Dashboard</a>
            <a href="#parcels" onclick="showParcels()"><i class="fa fa-archive"></i> Parcels</a>
            <a href="#AddParcel" onclick="showAddParcel()"><i class="fa fa-plus-square-o"></i> Add Parcel</a>
            <a href="#Reminder" onclick="showReminder()"><i class="fa fa-exclamation"></i>  Reminder</a>
            <a href="#Notification" onclick="showNotification()"><i class="fa fa-bell"></i>  Notification</a>
            <a href="#report" onclick="showReport()"><i class="fa fa-list"></i> Report</a>
            <?php } ?>
<?php }else { ?>
<div class="side-header">
<img src="./assets/images/customer.png" width="120" height="120" alt="Swiss Collection"> 
<h5 style="margin-top:10px;">Hello!</h5>
</div>
<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<a href="./userDashboard.php" ><i class="fa fa-home"></i> Dashboard</a>
<a href="#Custparcels" onclick="showCustParcels()"><i class="fa fa-archive"></i> Parcels</a>
<?php } ?>


</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>


