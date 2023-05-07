<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
</head>

<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- 邊欄左BEGIN -->
            <?php include "sidebarLEFT.php"; ?>
            <!-- 邊欄左ENG -->
            <!-- 邊欄右BEGIN -->
            <div class="col py-3">
                <h1>員工層級總覽</h1><hr>
                <?php include "connectDB.php"; ?>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item m-1">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            總裁
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-hover">
                                <tr><th class='bg-primary text-white'>職稱</th><th class='bg-primary text-white'>員工編號</th>
                                    <th class='bg-primary text-white'>姓名</th><th class='bg-primary text-white'>分機</th>
                                    <th class='bg-primary text-white'>電子信箱</th><th class='bg-primary text-white'>分公司</th>
                                    <th class='bg-primary text-white'>主管</th>
                                </tr>
                                <?php 
                                $sql = "select * from employees, offices where jobTitle='President' and employees.officeCode=offices.officeCode;";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>".$row['jobTitle']."</td>";
                                        echo "<td>".$row['employeeNumber']."</td>";
                                        echo "<td>".$row['firstName']." ".$row['lastName']."</td>";
                                        echo "<td>".$row['extension']."</td>";
                                        echo "<td>".$row['email']."</td>";
                                        echo "<td>".$row['city']." ".$row['country']."</td>";
                                        echo "<td>".$row['reportsTo']."</td>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item m-1">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            副總裁
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <table class="table table-hover">
                               <tr><th class='bg-primary text-white'>職稱</th><th class='bg-primary text-white'>員工編號</th>
                                    <th class='bg-primary text-white'>姓名</th><th class='bg-primary text-white'>分機</th>
                                    <th class='bg-primary text-white'>電子信箱</th><th class='bg-primary text-white'>分公司</th>
                                    <th class='bg-primary text-white'>主管</th>
                                </tr>                            
                                <?php 
                                $sql = "select * from employees, offices where jobTitle like 'VP%' and employees.officeCode=offices.officeCode;";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>".$row['jobTitle']."</td>";
                                        echo "<td>".$row['employeeNumber']."</td>";
                                        echo "<td>".$row['firstName']." ".$row['lastName']."</td>";
                                        echo "<td>".$row['extension']."</td>";
                                        echo "<td>".$row['email']."</td>";
                                        echo "<td>".$row['city']." ".$row['country']."</td>";
                                        echo "<td>".$row['reportsTo']."</td>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item m-1">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            銷售經理
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-hover">
                                <tr><th class='bg-primary text-white'>職稱</th><th class='bg-primary text-white'>員工編號</th>
                                    <th class='bg-primary text-white'>姓名</th><th class='bg-primary text-white'>分機</th>
                                    <th class='bg-primary text-white'>電子信箱</th><th class='bg-primary text-white'>分公司</th>
                                    <th class='bg-primary text-white'>主管</th>
                                </tr>  
                                <?php 
                                $sql = "select * from employees, offices where jobTitle like '%Manager%' and employees.officeCode=offices.officeCode;";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>".$row['jobTitle']."</td>";
                                        echo "<td>".$row['employeeNumber']."</td>";
                                        echo "<td>".$row['firstName']." ".$row['lastName']."</td>";
                                        echo "<td>".$row['extension']."</td>";
                                        echo "<td>".$row['email']."</td>";
                                        echo "<td>".$row['city']." ".$row['country']."</td>";
                                        echo "<td>".$row['reportsTo']."</td>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                            </table>                            
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item m-1">
                        <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            銷售員
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-hover">
                                <tr><th class='bg-primary text-white'>職稱</th><th class='bg-primary text-white'>員工編號</th>
                                    <th class='bg-primary text-white'>姓名</th><th class='bg-primary text-white'>分機</th>
                                    <th class='bg-primary text-white'>電子信箱</th><th class='bg-primary text-white'>分公司</th>
                                    <th class='bg-primary text-white'>主管</th>
                                </tr>
                                <?php 
                                $sql = "select * from employees, offices where jobTitle like '%Rep%' and employees.officeCode=offices.officeCode;";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>".$row['jobTitle']."</td>";
                                        echo "<td>".$row['employeeNumber']."</td>";
                                        echo "<td>".$row['firstName']." ".$row['lastName']."</td>";
                                        echo "<td>".$row['extension']."</td>";
                                        echo "<td>".$row['email']."</td>";
                                        echo "<td>".$row['city']." ".$row['country']."</td>";
                                        echo "<td>".$row['reportsTo']."</td>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                            </table>                            
                        </div>
                        </div>
                    </div>
                </div>





                <?php include "disconnectDB.php"; ?>
            </div>
            <!-- 邊欄右END -->

        </div>
    </div>
</body>

</html>