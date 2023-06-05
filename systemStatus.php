<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- 邊欄左BEGIN -->
            <?php include "sidebarLEFT.php"; ?><!-- 邊欄左ENG -->
            
            
            <!-- 邊欄右BEGIN -->
            <div class="col py-3">
                <h1>標題文字</h1><hr>
                <?php include "connectDB.php"; ?>
                <table class='table table-hover table-striped'>
                    <tr class='text-white bg-primary'><th>方法</th><th>報告</th></tr>
                    <tr><td>mysqli->get_charset()</td><td><?php echo json_encode($conn->get_charset()); ?></td></tr>
                    <tr><td>mysqli->client_info</td><td><?php echo $conn->client_info; ?></td></tr>
                    <tr><td>mysqli->client_version</td><td><?php echo json_encode($conn->client_version); ?></td></tr>
                    <tr><td>mysqli->get_connection_stats()</td><td><?php echo json_encode($conn->get_connection_stats()); ?></td></tr> 
                    <tr><td>mysqli->host_info</td><td><?php echo json_encode($conn->host_info); ?></td></tr> 
                    <tr><td>mysqli->protocol_version</td><td><?php echo json_encode($conn->protocol_version); ?></td></tr> 
                    <tr><td>mysqli->server_info</td><td><?php echo json_encode($conn->server_info); ?></td></tr> 
                    <tr><td>mysqli->server_version</td><td><?php echo json_encode($conn->server_version); ?></td></tr> 
                    <tr><td>mysqli->get_warnings()</td><td><?php echo json_encode($conn->get_warnings()); ?></td></tr> 
                    <tr><td>mysqli->info</td><td><?php echo json_encode($conn->info); ?></td></tr> 
                    <tr><td>mysqli->stat()</td><td><?php echo json_encode($conn->stat()); ?></td></tr> 
                </table>
                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>