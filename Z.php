<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- 邊欄左BEGIN -->
            <?php include "sidebarLEFT.php"; ?>
            <!-- 邊欄左ENG -->

            <!-- 邊欄右BEGIN -->
            <div class="col py-3">
                <h1>分公司記錄修改</h1>
                <hr>
                <?php include "connectDB.php"; ?>
                <?php
                $sql = "SELECT * FROM offices;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    }
                } else {
                    echo "0 results";
                }
                ?>

                <div class="col-lg-8 col-xl-6"><!--右邊欄BEGIN-->
                    <div class="card rounded-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                            alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>
                            <form class="px-md-2"><!--表單BEGIN-->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Name</label>
                                </div>
                                <div class="row"><!--ROW開始-->
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline datepicker">
                                            <input type="text" class="form-control" id="exampleDatepicker1" />
                                            <label for="exampleDatepicker1" class="form-label">Select a date</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <select class="select">
                                            <option value="1" disabled>Gender</option>
                                            <option value="2">Female</option>
                                            <option value="3">Male</option>
                                            <option value="4">Other</option>
                                        </select>
                                    </div>
                                </div><!--ROW結束-->
                                <div class="mb-4">
                                    <select class="select">
                                        <option value="1" disabled>Class</option>
                                        <option value="2">Class 1</option>
                                        <option value="3">Class 2</option>
                                        <option value="4">Class 3</option>
                                    </select>
                                </div>
                                <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                    <div class="col-md-6">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1w" class="form-control" />
                                            <label class="form-label" for="form3Example1w">Registration code</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
                            </form><!--表單END-->
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