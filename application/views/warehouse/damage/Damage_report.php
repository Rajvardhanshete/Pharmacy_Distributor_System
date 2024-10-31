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
                <th>Warehouse Name</th>
                <th>Location</th>
                <th>ContactPersonName</th>
                <th>Contact1</th>
                <!-- <th>Contact2</th> -->
                <th>Email</th>
            
            </tr>
        </thead>
        <tbody>

            <?php
            $showemps = "SELECT * FROM warehouse" ;
            $showempsrun = mysqli_query($con, $showemps);
            while ($row = mysqli_fetch_array($showempsrun)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['WarehouseName']; ?></td>
                    <td><?php echo $row['Location']; ?></td>
                    <td><?php echo $row['ContactPersonName']; ?></td>
                    <!-- <td><?php echo $row['Contact1']; ?></td> -->
                    <td><?php echo $row['Contact2']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    
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