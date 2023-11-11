<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="laftah.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ca4ef8ed5a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="report_style.css">
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
            margin-top: 6%;
            height: 100%;
            /* height:190vh; */
        }

        .div_3 {
            border: 1px red;
        }

        #tabel_pr {
            margin: 3%;

        }
    </style>
    <script>
        function pritDiv() {
            var divContent = document.getElementById('tabel_pr').innerHTML;
            var a = window.open('', '', 'height=900, width=900');
            a.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">');
            a.document.write('<style>#tabel_pr{  width: min-content;}</style>');
            a.document.write('<html>');
            a.document.write('<header><div class="container-fluid text-center" style="background: #062519;"><img class="img-responsive " src="laftah.png" alt="laftah logo" width="10%"></div></header>')
            a.document.write('<body>');
            a.document.write(divContent)
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

<body>
    <div id="continer">
        <header>
            <div class="container-fluid text-center" style="background: #062519;">
                <img class="img-responsive " src="laftah.png" alt="laftah logo" width="10%">
            </div>
        </header>
        <!-- end header -->
        <div class="div_1">
            <h4 style="color: #be9453; font-weight: 700;">:صفحة التقارير</h4>
            <hr>
            <form dir="rtl" style="border: #062519 1px solid;" class="text-end" method="POST" action="reports.php">
                <br>

                <div style="padding: 0.5%;"></div>
                <div class="row justify-content-start p-2">
                    <div class="col-auto p-2 ">
                        <label>
                            &nbsp; &nbsp;
                            <input type="radio" name="option" value="s_one" onclick="document.getElementById('s_bill_num').disabled = false;
                                document.getElementById('s_date_one').disabled = true;
                                document.getElementById('s_date_two').disabled = true;
                                document.getElementById('s_branch_name').disabled = true;
                                document.getElementById('s_date_onee').disabled = true;
                                document.getElementById('s_date_twoo').disabled = true;">
                            &nbsp;البحث برقم الفاتورة &nbsp; &nbsp;
                            <input type="number" name="s_bill_num" id="s_bill_num" disabled=true required>
                        </label>
                    </div>
                </div>

                <div class="row justify-content-start p-2">
                    <div class="col-auto p-2 ">
                        <label>
                            &nbsp; &nbsp;
                            <input type="radio" name="option" value="s_two" onclick="document.getElementById('s_bill_num').disabled = true; 
                                document.getElementById('s_date_one').disabled = false;
                                document.getElementById('s_date_two').disabled = false;
                                document.getElementById('s_branch_name').disabled = true;
                                document.getElementById('s_date_onee').disabled = true;
                                document.getElementById('s_date_twoo').disabled = true;">
                            &nbsp; البحث بتاريخين &nbsp; &nbsp;
                            <input type="date" name="s_date_one" id="s_date_one" disabled=true required>
                            &nbsp; &nbsp;إلى &nbsp; &nbsp;
                            <input type="date" name="s_date_two" id="s_date_two" disabled=true required>
                        </label>
                    </div>
                </div>
                <div class="row justify-content-start p-2">
                    <div class="col-auto p-2 ">
                        <label>
                            &nbsp; &nbsp;
                            <input type="radio" name="option" value="s_there" onclick="document.getElementById('s_bill_num').disabled = true;
                                document.getElementById('s_date_one').disabled = true;
                                document.getElementById('s_date_two').disabled = true;
                                document.getElementById('s_branch_name').disabled = false;
                                document.getElementById('s_date_onee').disabled = false;
                                document.getElementById('s_date_twoo').disabled = false;">
                            &nbsp; البحث بتاريخين و رقم الفرع
                            <input type="number" name="s_branch_name" id="s_branch_name" disabled=true required>&nbsp; &nbsp;
                            وتاريخ &nbsp; &nbsp;
                            <input type="date" name="s_date_onee" id="s_date_onee" disabled=true required>
                            &nbsp; &nbsp;إلى &nbsp; &nbsp;
                            <input type="date" name="s_date_twoo" id="s_date_twoo" disabled=true required>
                        </label>
                    </div>
                </div>

                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                <div class="btn-group">
                    <button class="btn btn-primary " name="search" style="background-color: #062519; width: 90%;">بحث</button>
                    &nbsp; &nbsp;
                    <button type="submit" class="btn btn-primary" name="savee" id="print" onclick="pritDiv();" style="background-color: #062519; width: 90%;">طباعة</button>
                </div>
            </form>
            <div class="table-responsive" id="tabel_pr">
                <table dir="rtl" class="table" style='margin-bottom: 20%;'>
                    <tr>
                        <th>كود الفرع</th>
                        <th>اسم الفرع</th>
                        <th>الموصل</th>
                        <th>تاريخ الدخول</th>
                        <th>رقم فاتورة التعديل</th>
                        <th>باركود العباية</th>
                        <th>المقاس القديم</th>
                        <th>العدد</th>
                        <th>اسم المستلم</th>
                        <th>تاريخ الاستلام</th>
                        <th>المقاس الجديد</th>
                        <th>اسم الخياط</th>
                        <th>ملاحظات</th>
                    </tr>
                    <?php
                    // to hide warining  part
                    error_reporting(E_ERROR | E_PARSE);
                    // 
                    $con = mysqli_connect("localhost", "root", "", "edits_test");
                    $res = $_POST['option'];
                    if (isset($_POST['search'])) {
                        # code...
                        if ($res == 's_one') {
                            # code...
                            $bil_num = $_POST['s_bill_num'];
                            $req = "SELECT * FROM `info_edits` WHERE `bil_num`= '$bil_num'";
                            $quary = mysqli_query($con, $req);
                            while ($fetch = mysqli_fetch_assoc($quary)) {
                                //     # code...
                                echo
                                "<tr>
                        <td>" . $fetch['branch_code'] . "</td>
                        <td>" . $fetch['branch_name'] . "</td>
                        <td>" . $fetch['provider'] . "</td>
                        <td>" . $fetch['date_in'] . "</td>
                        <td>" . $fetch['bil_num'] . "</td>
                        <td>" . $fetch['parcode'] . "</td>
                        <td>" . $fetch['old_size'] . "</td>
                        <td>" . $fetch['count'] . "</td>
                        <td>" . $fetch['reciption'] . "</td>
                        <td>" . $fetch['recption_date'] . "</td>
                        <td>" . $fetch['new_size'] . "</td>
                        <td>" . $fetch['tailor_name'] . "</td>
                        <td>" . $fetch['notes'] . "</td>
                        
                        </tr>";
                            }
                        } elseif ($res == 's_two') {
                            $date_one = $_POST['s_date_one'];
                            $date_two = $_POST['s_date_two'];
                            $req = "SELECT * FROM `info_edits` WHERE `date_in` BETWEEN '$date_one' AND '$date_two'";
                            $quary = mysqli_query($con, $req);
                            while ($fetch = mysqli_fetch_assoc($quary)) {
                                //     # code...
                                echo
                                "<tr>
                    <td>" . $fetch['branch_code'] . "</td>
                    <td>" . $fetch['branch_name'] . "</td>
                    <td>" . $fetch['provider'] . "</td>
                    <td>" . $fetch['date_in'] . "</td>
                    <td>" . $fetch['bil_num'] . "</td>
                    <td>" . $fetch['parcode'] . "</td>
                    <td>" . $fetch['old_size'] . "</td>
                    <td>" . $fetch['count'] . "</td>
                    <td>" . $fetch['reciption'] . "</td>
                    <td>" . $fetch['recption_date'] . "</td>
                    <td>" . $fetch['new_size'] . "</td>
                    <td>" . $fetch['tailor_name'] . "</td>
                    <td>" . $fetch['notes'] . "</td>
                    
                    </tr>";
                            }
                        } elseif ($res == 's_there') {
                            $s_branch_num = $_POST['s_branch_name'];
                            $s_date_odate = $_POST['s_date_onee'];
                            $s_date_tdate = $_POST['s_date_twoo'];
                            $req = "SELECT * FROM `info_edits` WHERE `date_in` BETWEEN ' $s_date_odate' AND '$s_date_tdate' AND `branch_code`= '$s_branch_num' ";
                            $quary = mysqli_query($con, $req);
                            while ($fetch = mysqli_fetch_assoc($quary)) {
                                //     # code...
                                echo
                                "<tr>
                        <td>" . $fetch['branch_code'] . "</td>
                        <td>" . $fetch['branch_name'] . "</td>
                        <td>" . $fetch['provider'] . "</td>
                        <td>" . $fetch['date_in'] . "</td>
                        <td>" . $fetch['bil_num'] . "</td>
                        <td>" . $fetch['parcode'] . "</td>
                        <td>" . $fetch['old_size'] . "</td>
                        <td>" . $fetch['count'] . "</td>
                        <td>" . $fetch['reciption'] . "</td>
                        <td>" . $fetch['recption_date'] . "</td>
                        <td>" . $fetch['new_size'] . "</td>
                        <td>" . $fetch['tailor_name'] . "</td>
                        <td>" . $fetch['notes'] . "</td>
                        
                        </tr>";
                            }
                        }
                    } else {
                        // echo 'false';
                    }

                    $con->close();


                    ?>

                </table>
            </div>


        </div>
        <!--  -->
        <div class="div_2">
            <div class="container-fluid justify-self-end">
                <div class="row">
                    <div class="d-flex flex-column justify-content-between text-center col-auto bg-dark min-vh-100" id="main-sidemenu" style="margin-right: 20%;">
                        <div>
                            <a href="#" class="text-white d-none d-sm-inline text-decoration-none d-flex align-items-center ms-4" role="button">
                                <span class="fs-5"></span>
                            </a>
                            <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                                <li class="nav-item">
                                    <a href="#sideMenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                                        <i class="fa fa-caret-down"></i>
                                        <span class="ms-2 d-none d-sm-inline">:عرض التعديلات </span>
                                        <i class="fa fa-pen-to-square"></i>
                                    </a>
                                    <hr class="text-white">
                                    <ul class="nav collapse ms-1 flex-column" id="sideMenu" data-bs-parent="#menu">
                                        <li class="nav-item ">
                                            <a class="nav-link text-white align-items-center" href="http://192.168.100.86:2022/testhoting/work13/main_index.php" aria-current="page">
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

            </div>
        </div>
        <!-- footer -->
        <footer>
            <div class="container-fluid p-3 text-center text-50 fixed-bottom" style="background: #062519;bottom: 0;">
                <p style=" color:  #be9453;">تصميم م. بشاير المطحني &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; اشراف م. وليد
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