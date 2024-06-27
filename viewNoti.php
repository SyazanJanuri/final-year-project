<div id="ordersBtn" >
  <h2>Notification History</h2>

 <!-- search function-->
    <div class="form-group">

    <label for="search">Search by Phone Number:</label>
        <input type="text" class="form-control" id="searchNumber" onkeyup="searchNoti()" placeholder="Enter Phone Number">

        <label for="searchDate">Search by Date:</label>
        <input type="date" id="searchDate" onchange="searchNoti()">

    </div>


  <!-- Trigger the modal with a button -->
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.N.</th>
        <th>Contact</th>
        <th>Send Date</th>
        <th>Notification Status</th>
        <th>More</th>
        <th>Action</th>

     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT n.*, p.phoneNum FROM notifications n JOIN parcel p ON n.parcelID = p.parcelID ORDER BY n.sendDate DESC";
      $result=$conn-> query($sql);
      $count=1;

      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$count?></td>
          <td><?=$row["phoneNum"]?></td>
          <td><?=$row["sendDate"]?></td>
          <td><?=$row["notificationStatus"]?></td>
          <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachParcel.php?parcelID=<?=$row['parcelID']?>" href="javascript:void(0) ;">Details</a></td>
          <td><button class="btn btn-danger" style="height:40px"  onclick="NotiDelete('<?=$row['parcelID']?>')">Delete</button></td>
        </tr>
    <?php
          $count=$count+1;  
        }
      }
    ?>
     
  </table>
   
</div>


<!--view Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">History</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>

<script>

function searchNoti() {
    var input, dateInput, filter, table, tr, td, tdDate, i, txtValue, txtDate;
    input = document.getElementById("searchNumber");
    dateInput = document.getElementById("searchDate");
    filter = input.value.toUpperCase();
    table = document.querySelector(".table");
    tr = table.getElementsByTagName("tr");

    // Get the selected date from the date input
    var inputDate = dateInput.value;

    // Loop through all table rows, and hide those that don't match the search query and date filter
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; // Assuming phone number is in the second column
        tdDate = tr[i].getElementsByTagName("td")[2]; // Assuming date is in the third column

        if (td && tdDate) {
            txtValue = td.textContent || td.innerText;
            txtDate = tdDate.textContent || tdDate.innerText;

            // Check if the phone number matches the search query and the date matches the filter
            var phoneNumberMatch = txtValue.toUpperCase().indexOf(filter) > -1;
            var dateMatch = inputDate === "" || txtDate.includes(inputDate);

            if (phoneNumberMatch && dateMatch) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}


// function filterByStatus() {
//     var selectedStatus = document.getElementById("statusFilter").value;
//     var table = document.querySelector(".table");
//     var tr = table.getElementsByTagName("tr");

//     for (var i = 0; i < tr.length; i++) {
//         var tdStatus = tr[i].getElementsByTagName("td")[4]; // Assuming status is in the fifth column

//         if (tdStatus) {
//             var status = tdStatus.textContent || tdStatus.innerText;
//             var statusMatch = selectedStatus === "" || status.toLowerCase() === selectedStatus.toLowerCase();

//             if (statusMatch) {
//                 tr[i].style.display = "";
//             } else {
//                 tr[i].style.display = "none";
//             }
//         }
//     }
// }


//  function searchParcel() {
//     var input, numberInput, dateInput, filter, table, tr, td, tdNumber, tdDate, i, txtValue, txtValue2, txtDate;
//     input = document.getElementById("search");
//     numberInput = document.getElementById("searchNumber");
//     dateInput = document.getElementById("searchDate");
//     filter = input.value.toUpperCase();
//     numberFilter = numberInput.value.toUpperCase();
//     table = document.querySelector(".table");
//     tr = table.getElementsByTagName("tr");

//     // Get the selected date from the date input
//     var inputDate = dateInput.value;

//     // Loop through all table rows, and log information about each row
//     for (i = 0; i < tr.length; i++) {
//         tdNumber = tr[i].getElementsByTagName("td")[0]; // Assuming parcel number is in the first column
//         td = tr[i].getElementsByTagName("td")[1]; // Assuming tracking number is in the second column
//         tdDate = tr[i].getElementsByTagName("td")[3]; // Assuming date is in the fourth column

//         if (td && tdNumber && tdDate) {
//             txtValue = td.textContent || td.innerText;
//             txtValue2 = tdNumber.textContent || tdNumber.innerText;
//             txtDate = tdDate.textContent || tdDate.innerText;

//             // Log the values to the console
//             console.log("Parcel Number:", txtValue2, "Tracking Number:", txtValue, "Date:", txtDate);

//             // Check if the tracking number matches the search query, parcel number matches, and the date matches the filter
//             var trackingNumberMatch = txtValue.toUpperCase().indexOf(filter) > -1;
//             var parcelNumberMatch = txtValue2.toUpperCase().indexOf(numberFilter) > -1;
//             var dateMatch = inputDate === "" || txtDate === inputDate;

//             console.log("Tracking Number Match:", trackingNumberMatch, "Parcel Number Match:", parcelNumberMatch, "Date Match:", dateMatch);

//             if (trackingNumberMatch && parcelNumberMatch && dateMatch) {
//                 tr[i].style.display = "";
//             } else {
//                 tr[i].style.display = "none";
//             }
//         }
//     }
// }





    // function searchParcel() {
    //     var input, filter, table, tr, td, i, txtValue;
    //     input = document.getElementById("search");
    //     filter = input.value.toUpperCase();
    //     table = document.querySelector(".table");
    //     tr = table.getElementsByTagName("tr");

    //     // Loop through all table rows, and hide those that don't match the search query
    //     for (i = 0; i < tr.length; i++) {
    //         td = tr[i].getElementsByTagName("td")[1]; // Assuming tracking number is in the second column
    //         if (td) {
    //             txtValue = td.textContent || td.innerText;
    //             if (txtValue.toUpperCase().indexOf(filter) > -1) {
    //                 tr[i].style.display = "";
    //             } else {
    //                 tr[i].style.display = "none";
    //             }
    //         }
    //     }
    // }


/*function filterByDate() {
    var inputDate = $("#searchDate").val();

    $(".table tr").each(function() {
        var parcelDate = $(this).find("td:eq(3)").text(); // Assuming receive date is in the fourth column

        if (parcelDate === inputDate) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}*/



</script>


