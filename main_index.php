
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="laftah.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/ca4ef8ed5a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylr.css">
    <title>Home Page</title>
   
    <style>
        
        .div_1{
            /* background-color: blue; */
            width: 80%;
            float: left;
            text-align: end;
            padding-top: 5%;
        }
        .div_2{
            /* background-color: #062519; */
            /* background-color: brown; */
            width: max-content;
            float: right;
            text-align: center;
            position: absolute;
            right: 0;
            top: 0;
            margin-top: 9%;
            /* height: 150%; */
            /* height:190vh; */
        }
    </style>
</head>

<body>
    <div id="continer">
        <header>
            <div class="container-fluid text-center" style="background: #062519;">
                <img class="img-responsive " src="laftah.png" alt="laftah logo" width="15%">
            </div>
        </header>
        <!-- end header -->
       <div class="div_1">
       <?php
        // to hide warining  part
        error_reporting(E_ERROR | E_PARSE);

    $Branch_name = $_POST["branch_name"];
    $branch_code = $_POST["branch_code"];
    // 
    $bill_num =  $_POST["bill_num"];
    $date_in =  $_POST["date_in"];
    $mediator =  $_POST["mediator"];
    // 
    $num =$_POST["num"];
    $old_size = $_POST["old_size"];
    $parcode = $_POST["parcode"];
    // 
    $recipiet_date =  $_POST["recipiet_date"];
    $recipiet_name =  $_POST["recipiet_name"];
    // 
    $tailor_name = $_POST["tailor_name"];
    $new_size= $_POST["new_size"];
    $notes = $_POST["notes"];
        // 
        $con = mysqli_connect("localhost","root","","edits_test");
    //  
    if (isset($_POST['savee'])) {
        # code...
    
    if ($con) {
            # code...
            $sql = "INSERT INTO `info_edits`
            ( `branch_name`, `branch_code`, `provider`, `date_in`, `bil_num`, `parcode`, `old_size`, `count`, `reciption`, `recption_date`, `new_size`, `tailor_name`, `notes`) 
            VALUES ('$Branch_name','$branch_code','$mediator','$date_in ','$bill_num','$parcode','$old_size','$num','$recipiet_name','$recipiet_date','$new_size','$tailor_name','$notes')";
    
            // mysqli_query($con,$sql);
            if($con->query($sql)){
                // echo "";
                    echo '<div class="alert alert-success "><strong>نجاح!</strong> تم الادخال بنجاح</div>';
                
            }else{
                echo '<div class="alert alert-danger"><strong>فشل  !</strong> الرجاء التأكد من المدخلات</div>';
            }
            $con->close();
        }else{
            // $stm = $con->prepare();
            // die('connecr Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
            echo '<div class="alert alert-danger"><strong>فشل  !</strong> الرجاء التأكد من المدخلات</div>';
        }
    
    }
        ?>
       <form method="post" action="main_index.php" style="margin-bottom: 10%;" class="was-validated">
        <h4><small>:معلومات الفرع</small></h4>
        <hr style="color: #062519;">
        <div class="row justify-content-end p-2">
           
            <div class="col-auto p-2 ">
                <select id="branch-name" name="branch_name" required onchange="getval();" >
                    <option value="" selected></option>
                    <option value="Alzahrani">الزهراني</option>
                    <option value="Makka">مكة</option>
                    <option value="Rania">رنية</option>
                    <option value="Tabouk">تبوك</option>
                    <option value="Hawia">الحاوية</option>
                    <option value="Bolvard">بوليفارد</option>
                    <option value="Baha">الباحة</option>
                    <option value="Bisha">بيشة</option>
                    <option value="Taif">الطائف</option>
                    <option value="Jeddah">جدة</option>
                    <option value="Store">المتجر</option>
                    <option value="Shopra">شبرا</option>
                    <option value="Borj">البرج</option>
                    <option value="Jory">جوري</option>
                    <option value="Salam">السلام</option>
                    <option value="Riyadh">الرياض</option>
                    <option value="Madina">المدينة</option>
                    <option value="Jizan">جازان</option>
                </select >
                <!-- .... -->
                <!-- <div class="valid-feedback">Valid.</div> -->
                <div class="invalid-feedback">يجب تعبئة هذا الحقل</div>
      <!--  -->
                <label for="branch-name" class="req">اسم الفرع<span style="color:red;font-size: large;">  * </span></label>
                <div class="col-auto p-2 " style="margin-top: 15px;">
                    <input type="number" id="branch-code" name="branch_code" readonly >
                    <!--  -->
                    <!-- <div class="valid-feedback">Valid.</div> -->
                    <div class="invalid-feedback">يجب تعبئة هذا الحقل</div>
                    <!--  -->
                    <label for="branch-code" class="code-branch" style="top: -30px; ;
                    font-size: 12px;" >:كود الفرع <span style="color:red;font-size: large;">  * </span></label>
                </div>
            </div>
    
        </div>
        <h4><small>:معلومات الدخول</small></h4>
        <hr style="color: #062519;">
        <div class="row justify-content-end p-2">
            <div class="col-auto p-2 ">
                <input type="text" id="bill-num" name="bill_num" required>
                <!--  -->
                <!-- <div class="valid-feedback">Valid.</div> -->
                <div class="invalid-feedback">يجب تعبئة هذا الحقل</div>
                <!--  -->
                <label for="bill-num" class="bill-num">:رقم فاتورة التعديل <span style="color:red;font-size: large;">  * </span></label>
            </div>
            <div class="col-auto p-2 " style=" min-width:max-content">
                <input type="date" id="date-in" name="date_in"   required style="font-size: 1.3rem; margin-right: 15%;">
                <!--  -->
                <!-- <div class="valid-feedback">Valid.</div> -->
                    <div class="invalid-feedback">يجب تعبئة هذا الحقل</div>
                    <!--  -->
                <label for="date-in" class="date-in">:تاريخ الدخول <span style="color:red;font-size: large;">  * </span></label>
            </div>
            <div class="col-auto p-2 ">
                <input type="text" id="mediator" name="mediator" required>
                <!--  -->
                <!-- <div class="valid-feedback">Valid.</div> -->
                <div class="invalid-feedback">يجب تعبئة هذا الحقل</div>
                    <!--  -->
                <label for="mediator">:الموصل <span style="color:red;font-size: large;">  * </span></label>
            </div>
        </div>
        <div class="row justify-content-end p-2">
            <div class="col-auto p-2 ">
                <input type="text" id="num" name="num" required >
                <!--  -->
                <!-- <div class="valid-feedback">Valid.</div> -->
                <div class="invalid-feedback">يجب تعبئة هذا الحقل</div>
                    <!--  -->
                <label for="num">:العدد <span style="color:red;font-size: large;">  * </span></label>
            </div>
            <div class="col-auto p-2 ">
                <input type="number" id="old-size" name="old_size" required >
                <!--  -->
                <!-- <div class="valid-feedback">Valid.</div> -->
                <div class="invalid-feedback">يجب تعبئة هذا الحقل</div>
                    <!--  -->
                <label for="old-size">:المقاس القديم <span style="color:red;font-size: large;">  * </span></label>
            </div>
            <div class="col-auto p-2 ">
                <input type="text" id="parcode" name="parcode" required >
                <!--  -->
                <!-- <div class="valid-feedback">Valid.</div> -->
                <div class="invalid-feedback">يجب تعبئة هذا الحقل</div>
                    <!--  -->
                <label for="parcode">:باركود العباية <span style="color:red;font-size: large;">  * </span></label>
            </div>
        </div>
        <h4><small>:معلومات المستلم</small></h4>
        <hr style="color: #062519;">
        <div class="row justify-content-end p-2">
            <div class="col-auto p-2 ">
                <input type="date" id="recipiet-date" name="recipiet_date"  style="font-size: 1.3rem; margin-right: 15%;" >
                <label for="recipiet-date" class="recipiet-date" >:تاريخ الاستلام</label>
            </div>
            <div class="col-auto p-2 ">
                <input type="text" id="recipiet-name" name="recipiet_name" >
                <label for="recipiet-name">:اسم المستلم</label>
            </div>
        </div>
        <h4><small>:معلومات التعديل</small></h4>
        <hr style="color: #062519;">
        <div class="row justify-content-end p-2">
            <div class="col-auto p-2 ">
                <input type="text" id="tailor-name" name="tailor_name"  >
                <label for="tailor-name">:اسم الخياط</label>
            </div>
            <div class="col-auto p-2 ">
                <input type="number" id="new-size" name="new_size"  >
                <label for="new-size">:المقاس الجديد</label>
    
            </div>
            <div class="row justify-content-end p-2">
            <div class="col-auto p-2 ">
                <textarea id="notes" name="notes" rows="3" cols="75"   style="max-width: max-content;" class="form-control col-xl-12 col-xxl-12 col-lg-12 col-sm-auto"></textarea >
                <label for="notes" class="notes" >:ملاحظات</label>
            </div>
        </div>
        <div class="btn">
            <!-- <button type="submit" onclick="alert('saved')" class="submit">حفظ</button> -->
            <button type="submit" onsubmit="alert('saved')"  class="btn btn-primary" name="savee" style="background-color: #062519; width: 20%;">حفظ</button>
            <button type="reset" class="btn btn-secondary" style="background-color: #1e1e1e; ">إعادة تعين</button>
        </div>
    </form>
    
</div>
       <div class="div_2"><div class="container-fluid justify-self-end">
        <div class="row" id="side_nav">
            <div class="d-flex flex-column justify-content-between text-align-self-center col-auto bg-dark min-vh-100"
                id="main-sidemenu" style="margin-right: 20%;">
                <div>
                    <a href="#"
                        class="text-white d-none d-sm-inline text-decoration-none d-flex align-items-center ms-4"
                        role="button">
                        <span class="fs-5"></span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <li class="nav-item">
                            <a href="#sideMenu" data-bs-toggle="collapse" class="nav-link text-white"
                                aria-current="page">
                                <i class="fa fa-caret-down"></i>
                                <span class="ms-2 d-none d-sm-inline">:عرض التعديلات </span>
                                <i class="fa fa-pen-to-square"></i>
                            </a>
                            <hr class="text-white">
                            <ul class="nav collapse ms-1 flex-column" id="sideMenu" data-bs-parent="#menu">
                                <li class="nav-item ">
                                    <a class="nav-link text-white align-items-center" href="main_index.php"
                                        aria-current="page">
                                        <span class="ms-1">:إضافة</span>
                                        <i class="fa-solid fa-file-circle-plus"></i>
                                    </a>
    
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" aria-current="page">
                                        <span class="ms-1">:بحث</span>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
    
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="http://192.168.100.86:2022/testhoting/work13/reports.php">
                                        <span class="ms-1">:التقارير</span>
                                        <i class="fa-solid fa-chart-simple"></i>
                                    </a>
                                    <hr class="text-white">
                                </li>
                            </ul>
    
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <span class="ms-2 d-none d-sm-inline">About</span>
                                <i class="fa fa-book"></i>
                            </a>
                            <hr class="text-white">
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <span class="ms-2 d-none d-sm-inline">team</span>
                                <i class="fa fa-users"></i>
                            </a>
                            <hr class="text-white">
                        </li>
                        <li class="nav-item">
                            <a href="#sideMenu" data-bs-toggle="collapse" class="nav-link text-white">
                                <span class="ms-2 d-none d-sm-inline">Setting</span>
                                <i class="fa fa-cog"></i>
                            </a>
                            <hr class="text-white">
                        </li>
                        <li class="nav-item">
                            <a href="#sideMenu" data-bs-toggle="collapse" class="nav-link text-white">
                                <span class="ms-2 d-none d-sm-inline">contact</span>
                                <i class="fa fa-phone"> </i>
                            </a>
                            <hr class="text-white">
                        </li>
                    </ul>
                </div>
    
            </div>
        </div>
    
    </div></div>

        <footer>
            <div class="container-fluid p-3 text-center text-50 fixed-bottom" style="background: #062519;bottom: 0;">
                <p style=" color:  #bc9450;">تصميم م. بشاير المطحني &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; اشراف م. وليد
                    العيسائي</p>
            </div>
        </footer>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        function getval() {
            const names_1 = ["Alzahrani", "Makka", "Rania"];
            const names_2 = ["Tabouk", "Hawia", "Bolvard", "Baha", "Bisha", "Taif"];
            const names_3 = ["Jeddah", "Store", "Shopra", "Borj", "Jory", "Salam", "Riyadh", "Madina", "Jizan"]
            var selectedval = document.getElementById('branch-name').value;
            if (names_1.includes(selectedval)) {
                document.getElementById('branch-code').value = names_1.indexOf(selectedval) + 201;

            } else if (names_2.includes(selectedval)) {
                document.getElementById('branch-code').value = names_2.indexOf(selectedval) + 205;
            } else if (names_3.includes(selectedval)) {
                document.getElementById('branch-code').value = names_3.indexOf(selectedval) + 212;
            } else {
                document.getElementById('branch-code').value = '';
            }
        }

    </script>
</body>


</html>
