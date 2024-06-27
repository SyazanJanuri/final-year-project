

function showProductItems(){  
    $.ajax({
        url:"./adminView/viewAllProducts.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showCategory(){  
    $.ajax({
        url:"./adminView/viewCategories.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showSizes(){  
    $.ajax({
        url:"./adminView/viewSizes.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showProductSizes(){  
    $.ajax({
        url:"./adminView/viewProductSizes.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showCustomers(){
    $.ajax({
        url:"./adminView/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("Parcels page clicked");
        }
    });
}

//fyp parcel function code

function showUser(){
    $.ajax({
        url:"./adminView/viewUser.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("User page clicked");
        }
    });
}

function showRole(){
    $.ajax({
        url:"./adminView/viewRole.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("User page clicked");
        }
    });
}

function showParcels(){
    $.ajax({
        url:"./adminView/viewAllParcels.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("Parcels page clicked");
        }
    });
}

function showCustParcels(){
    $.ajax({
        url:"./adminView/viewCustParcels.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("Parcels page clicked");
        }
    });
}

function showReport(){
    $.ajax({
        url:"./adminView/viewReport.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("User page clicked");
        }
    });
}

function showAddParcel(){
    $.ajax({
        url:"./adminView/addParcel.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("User page clicked");
        }
    });
}

function showReminder(){
    $.ajax({
        url:"./adminView/viewReminder.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("User page clicked");
        }
    });
}

function showNotification(){
    $.ajax({
        url:"./adminView/viewNoti.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("User page clicked");
        }
    });
}

function showAccount(){
    $.ajax({
        url:"./adminView/viewAccount.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("User page clicked");
        }
    });
}

function showEachCollection2(id){
    $.ajax({
        url:"./adminView/viewEachCollection2.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
            console.log("User page clicked");
        }
    });
}




function ChangeParcelStatus(id){
    $.ajax({
       url:"./controller/updateParcelStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Parcel Status updated successfully');
           $('form').trigger('reset');
           showParcels();
       }
   });
}


function sendParcelNotification(parcelID) {
    $.ajax({
        url: "./controller/reminderController.php",
        method: "post",
        data: { parcelID: parcelID },
        success: function (data) {
            alert('Reminder Successfully sent');
            console.log(data); // Log the response from the serverS
        }
    });
}

//update collection form
function updateCollectionForm(id){
    console.log('Function called with id:', id);
    $.ajax({
        url:"./adminView/editCollectionForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update collection after submit
function updateCollection(){
    var parcelID = $('#parcelID').val();
    var recipientName = $('#recipientName').val();
    var collectionDate = $('#collectionDate').val();
    var parcelStatus = $('#parcelStatus').val();
    var phoneNum = $('#phoneNum').val();
    var fd = new FormData();
    fd.append('parcelID', parcelID);
    fd.append('recipientName', recipientName);
    fd.append('collectionDate', collectionDate);
    fd.append('parcelStatus', parcelStatus);
    fd.append('phoneNum', phoneNum);

   
    $.ajax({
      url:'./controller/updateCollectionController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        console.log(data); // Log the response from the server
        showParcels();
      }
    });
}

//edit parcel data form
function ParcelEditForm(id){
    $.ajax({
        url:"./adminView/editParcelForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update collection after submit
function updateParcel(){
    var parcelID = $('#parcelID').val();
    var trackNum = $('#trackNum').val();
    var parcelNum = $('#parcelNum').val();
    var receiveDate = $('#receiveDate').val();
    var phoneNum = $('#phoneNum').val();
    var fd = new FormData();
    fd.append('parcelID', parcelID);
    fd.append('trackNum', trackNum);
    fd.append('parcelNum', parcelNum);
    fd.append('receiveDate', receiveDate);
    fd.append('phoneNum', phoneNum);

   
    $.ajax({
      url:'./controller/updateParcelController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        console.log(data); // Log the response from the server
        showParcels();
      }
    });
}

// update user form
function updateUserForm(id){
    $.ajax({
        url:"./adminView/editUserForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update user after submit
function updateUser(){
    var userID = $('#userID').val();
    var username = $('#username').val();
    var password = $('#password').val();
    var userEmail = $('#userEmail').val();
    var userPhoneNum = $('#userPhoneNum').val();
    var roleID = $('#roleID').val();
    var fd = new FormData();
    fd.append('userID', userID);
    fd.append('username', username);
    fd.append('password', password);
    fd.append('userEmail', userEmail);
    fd.append('userPhoneNum', userPhoneNum);
    fd.append('roleID', roleID);

   
    $.ajax({
      url:'./controller/updateUserController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        console.log(data); // Log the response from the server
        showUser();
      }
    });
}

// update role form
function updateRoleForm(id){
    $.ajax({
        url:"./adminView/editRoleForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update role after submit
function updateRole(){
    var roleID = $('#roleID').val();
    var position = $('#position').val();
    var roleDescription = $('#roleDescription').val();
    var fd = new FormData();
    fd.append('roleID', roleID);
    fd.append('position', position);
    fd.append('roleDescription', roleDescription);

   
    $.ajax({
      url:'./controller/updateRoleController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        console.log(data); // Log the response from the server
        showRole();
      }
    });
}

// update account form
function updateAccountForm(id){
    $.ajax({
        url:"./adminView/editAccountForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update account after submit
function updateAccount(){
    var userID = $('#userID').val();
    var username = $('#username').val();
    var password = $('#password').val();
    var userEmail = $('#userEmail').val();
    var userPhoneNum = $('#userPhoneNum').val();
    var roleID = $('#roleID').val();
    var fd = new FormData();
    fd.append('userID', userID);
    fd.append('username', username);
    fd.append('password', password);
    fd.append('userEmail', userEmail);
    fd.append('userPhoneNum', userPhoneNum);
    fd.append('roleID', roleID);

   
    $.ajax({
      url:'./controller/updateUserController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        console.log(data); // Log the response from the server
        showAccount();
      }
    });
}

//delete parcel data
function ParcelDelete(id){
    $.ajax({
        url:"./controller/deleteParcelController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showParcels();
        }
    });
}

function NotiDelete(id){
    $.ajax({
        url:"./controller/deleteNotiController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showNotification();
        }
    });
}

function UserDelete(id){
    $.ajax({
        url:"./controller/deleteUserController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showUser();
        }
    });
}

function RoleDelete(id){
    $.ajax({
        url:"./controller/deleteRoleController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showRole();
        }
    });
}

//end

function showOrders(){
    $.ajax({
        url:"./adminView/viewAllOrders.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);

        }
    });
}

function ChangeOrderStatus(id){
    $.ajax({
       url:"./controller/updateOrderStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Order Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}

function ChangePay(id){
    $.ajax({
       url:"./controller/updatePayStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Payment Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}


//add product data
function addItems(){
    var p_name=$('#p_name').val();
    var p_desc=$('#p_desc').val();
    var p_price=$('#p_price').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('category', category);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}

//edit product data
function itemEditForm(id){
    $.ajax({
        url:"./adminView/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update product after submit
function updateItems(){
    var product_id = $('#product_id').val();
    var p_name = $('#p_name').val();
    var p_desc = $('#p_desc').val();
    var p_price = $('#p_price').val();
    var category = $('#category').val();
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var fd = new FormData();
    fd.append('product_id', product_id);
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('category', category);
    fd.append('existingImage', existingImage);
    fd.append('newImage', newImage);
   
    $.ajax({
      url:'./controller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showProductItems();
      }
    });
}

//delete product data
function itemDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}


//delete cart data
function cartDelete(id){
    $.ajax({
        url:"./controller/deleteCartController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Cart Item Successfully deleted');
            $('form').trigger('reset');
            showMyCart();
        }
    });
}

function eachDetailsForm(id){
    $.ajax({
        url:"./view/viewEachDetails.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



//delete category data
function categoryDelete(id){
    $.ajax({
        url:"./controller/catDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Category Successfully deleted');
            $('form').trigger('reset');
            showCategory();
        }
    });
}

//delete size data
function sizeDelete(id){
    $.ajax({
        url:"./controller/deleteSizeController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Size Successfully deleted');
            $('form').trigger('reset');
            showSizes();
        }
    });
}


//delete variation data
function variationDelete(id){
    $.ajax({
        url:"./controller/deleteVariationController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showProductSizes();
        }
    });
}

//edit variation data
function variationEditForm(id){
    $.ajax({
        url:"./adminView/editVariationForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//update variation after submit
function updateVariations(){
    var v_id = $('#v_id').val();
    var product = $('#product').val();
    var size = $('#size').val();
    var qty = $('#qty').val();
    var fd = new FormData();
    fd.append('v_id', v_id);
    fd.append('product', product);
    fd.append('size', size);
    fd.append('qty', qty);
   
    $.ajax({
      url:'./controller/updateVariationController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Update Success.');
        $('form').trigger('reset');
        showProductSizes();
      }
    });
}
function search(id){
    $.ajax({
        url:"./controller/searchController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.eachCategoryProducts').html(data);
        }
    });
}


function quantityPlus(id){ 
    $.ajax({
        url:"./controller/addQuantityController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('form').trigger('reset');
            showMyCart();
        }
    });
}
function quantityMinus(id){
    $.ajax({
        url:"./controller/subQuantityController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('form').trigger('reset');
            showMyCart();
        }
    });
}

function checkout(){
    $.ajax({
        url:"./view/viewCheckout.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


function removeFromWish(id){
    $.ajax({
        url:"./controller/removeFromWishlist.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Removed from wishlist');
        }
    });
}


function addToWish(id){
    $.ajax({
        url:"./controller/addToWishlist.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Added to wishlist');        
        }
    });
}