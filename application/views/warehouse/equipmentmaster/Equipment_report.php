<!DOCTYPE html>
<html>

<head>

    <title>Taxi_Booking_Month_Wise_Report</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

</head>


<?php
$con = mysqli_connect("localhost", "root", "", "rajfarmadb");
if ($con) {
    // echo 'success';                                                  
} else {
    echo 'failed';
}
?>

<body>
    <h1>
        <h1>
            <hr>
            <center>Taxi_Booking_Month_Wise_Report</center>
            <hr>
        </h1>
    </h1>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Equipment Name</th>
                <th>EquipmentCode</th>
                <th>EquipmentCategory</th>
                <th>Description</th>
                <th>WareHouseName</th>
                <th>Maintainace</th>
                <th>MaintainaceDuration</th>
            
            </tr>
        </thead>
        <tbody>

            <?php
            $showemps = "SELECT * FROM equipments" ;
            $showempsrun = mysqli_query($con, $showemps);
            while ($row = mysqli_fetch_array($showempsrun)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['EquipmentName']; ?></td>
                    <td><?php echo $row['EquipmentCode']; ?></td>
                    <td><?php echo $row['EquipmentCategory']; ?></td>
                    <!-- <td><?php echo $row['Description']; ?></td> -->
                    <td><?php echo $row['WareHouseName']; ?></td>
                    <td><?php echo $row['Maintainace']; ?></td>
                    <td><?php echo $row['MaintainaceDuration']; ?></td>
                    
                </tr>
            <?php } ?>

        </tbody>

    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>
</body>

</html>