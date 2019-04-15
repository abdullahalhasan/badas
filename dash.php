<?php
include('db_connect.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head><!--/head-->
    <body>
    <br>
    <!--Heading-->
    <div class="container-fluid text-md-center">
        <div class="jumbotron">
            <h1>সেন্টার ফর গ্লোবাল হেলথ রিসার্চ, বাংলাদেশ ডায়াবেটিক সমিতি</h1>
        </div>
    </div>
    <br>
    <!--Heading End-->

    <!--Table Start-->
    <div class="container-fluid" style="overflow-x:auto;">
        <table class="table table-striped table-bordered table-md" cellspacing="1"
               width="100%">
            <thead>
            <tr>
                <th class="th-md">#
                </th>
                <th class="th-md">Centre
                </th>
                <th class="th-md">Division
                </th>
                <th class="th-md">District
                </th>
                <th class="th-md">Upozila
                </th>
                <th class="th-md">Name
                </th>
                <th class="th-md">Age
                </th>
                <th class="th-md">Gender
                </th>
                <th class="th-md">Mobile Number
                </th>
                <th class="th-md">Address
                </th>
                <th class="th-md">Educational Background
                </th>
                <th class="th-md">Occupation
                </th>
                <th class="th-lg">Smoking Habit
                </th>
                <th class="th-lg">Monthly Family Expense
                </th>
                <th class="th-md">Physical Activity
                </th>
                <th class="th-lg">How many days do you consume vegetables in a week
                </th>
                <th class="th-lg">How many days do you consume fruits in a week
                </th>
                <th class="th-lg">Do you have diabetes in your family
                </th>
                <th class="th-md"> Marital Status
                </th>
                <th class="th-md">Number of child
                </th>
                <th class="th-lg">Did you consult with any doc before pregnancy
                </th>
                <th class="th-md">Weight
                </th>
                <th class="th-md">Height
                </th>
                <th class="th-md">BMI
                </th>
                <th class="th-md">Waist size
                </th>
                <th class="th-md">Blood Pressure
                </th>
                <th class="th-md">Remarks
                </th>
                <th class="th-md">FBG
                </th>
                <th class="th-md">Remarks
                </th>
                <th class="th-md">RBG
                </th>
                <th class="th-md">Remarks
                </th>
                <th class="th-md">Medical
                </th>
                <th class="th-md">Insulin 1 Brand
                </th>
                <th class="th-md">Insulin 1 Class
                </th>
                <th class="th-md">Insulin 1 Type
                </th>
                <th class="th-md">Insulin 1 Dosage Form
                </th>
                <th class="th-md">Insulin 1 Doze Morning
                </th>
                <th class="th-md">Insulin 1 Doze Day
                </th>
                <th class="th-md">Insulin 1 Doze Night
                </th>
                <th class="th-md">Insulin 1 Doze Bed Time
                </th>
                <th class="th-md">Insulin 2 Brand
                </th>
                <th class="th-md">Insulin 2 Class
                </th>
                <th class="th-md">Insulin 2 Type
                </th>
                <th class="th-md">Insulin 2 Dosage Form
                </th>
                <th class="th-md">Insulin 2 Doze Morning
                </th>
                <th class="th-md">Insulin 2 Doze Day
                </th>
                <th class="th-md">Insulin 2 Doze Night
                </th>
                <th class="th-md">Insulin 2 Doze Bed Time
                </th>
                <th class="th-md">Insulin Remarks
                </th>
                <th class="th-md">Insulin Consumed
                </th>
                <th class="th-md">Medicine 1 Generic
                </th>
                <th class="th-md">Medicine 1 Brand
                </th>
                <th class="th-md">Medicine 1 Class
                </th>
                <th class="th-md">Medicine 1 Doze Morning
                </th>
                <th class="th-md">Medicine 1 Doze Day
                </th>
                <th class="th-md">Medicine 1 Doze Night
                </th>
                <th class="th-md">Medicine 2 Generic
                </th>
                <th class="th-md">Medicine 2 Brand
                </th>
                <th class="th-md">Medicine 2 Class
                </th>
                <th class="th-md">Medicine 2 Doze Morning
                </th>
                <th class="th-md">Medicine 2 Doze Day
                </th>
                <th class="th-md">Medicine 2 Doze Night
                </th>
                <th class="th-md">Medicine 3 Generic
                </th>
                <th class="th-md">Medicine 3 Brand
                </th>
                <th class="th-md">Medicine 3 Class
                </th>
                <th class="th-md">Medicine 3 Doze Morning
                </th>
                <th class="th-md">Medicine 3 Doze Day
                </th>
                <th class="th-md">Medicine 3 Doze Night
                </th>
                <th class="th-md">Medicine Combination
                </th>
                <th class="th-lg">Do you have any pre-knowledge about diabetes
                </th>
                <th class="th-lg">What are the risks of diabetes
                </th>
                <th class="th-lg">Do you think diabetes can cause different types of physical complication
                </th>
                <th class="th-lg">If yes then which complication is connected to diabetes
                </th>
                <th class="th-lg">Is diabetes preventive
                </th>
                <th class="th-lg">Is there any possibility of having diabetes at the time of pregnancy
                </th>
                <th class="th-lg">Proper care before pregnancy reduces the future risk of having diabetes at the time of pregnancy and heart disease
                </th>

            </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM `badas` ORDER BY badas_id DESC";
            $results = mysqli_query($db, $query);

            //$row = mysqli_fetch_assoc($results);
            while ($row = mysqli_fetch_assoc($results)) {
                ?>
                <tr>
                    <td><?php echo $row['badas_id'] ?></td>
                    <td><?php echo $row['center'] ?></td>
                    <td><?php echo $row['division'] ?></td>
                    <td><?php echo $row['district'] ?></td>
                    <td><?php echo $row['upozila'] ?></td>
                    <td><?php echo $row['full_name'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['education'] ?></td>
                    <td><?php echo $row['occupation'] ?></td>
                    <td><?php echo $row['cigarate'] ?></td>
                    <td><?php echo $row['monthly_expense'] ?></td>
                    <td><?php echo $row['physical_exer'] ?></td>
                    <td><?php echo $row['vegitable'] ?></td>
                    <td><?php echo $row['fruits'] ?></td>
                    <td><?php echo $row['familyDiab'] ?></td>
                    <td><?php echo $row['maritial'] ?></td>
                    <td><?php echo $row['children_count'] ?></td>
                    <td><?php echo $row['children'] ?></td>
                    <td><?php echo $row['weight'] ?></td>
                    <td><?php echo /*$row['heightFeet'].",".*/$row['heightInch'] ?></td>
                    <td><?php echo $row['bmi'] ?></td>
                    <td><?php echo $row['wrist'] ?></td>
                    <td><?php echo $row['blood_pressure'] ?></td>
                    <td><?php echo $row['blood_remark'] ?></td>
                    <td><?php echo $row['sugarLevelEmpty'] ?></td>
                    <td><?php echo $row['sle_remarks'] ?></td>
                    <td><?php echo $row['sugarLevelFill'] ?></td>
                    <td><?php echo $row['slf_remarks'] ?></td>
                    <td><?php echo $row['medical'] ?></td>

                    <td><?php echo $row['insulinName1'] ?></td>
                    <td><?php echo $row['insulinClass1'] ?></td>
                    <td><?php echo $row['insulinType1'] ?></td>
                    <td><?php echo $row['insulinDosage1'] ?></td>
                    <td><?php echo $row['insulinDozeMor1'] ?></td>
                    <td><?php echo $row['insulinDozeDay1'] ?></td>
                    <td><?php echo $row['insulinDozeNight1'] ?></td>
                    <td><?php echo $row['insulinDozeBed1'] ?></td>

                    <td><?php echo $row['insulinName2'] ?></td>
                    <td><?php echo $row['insulinClass2'] ?></td>
                    <td><?php echo $row['insulinType2'] ?></td>
                    <td><?php echo $row['insulinDosage2'] ?></td>
                    <td><?php echo $row['insulinDozeMor2'] ?></td>
                    <td><?php echo $row['insulinDozeDay2'] ?></td>
                    <td><?php echo $row['insulinDozeNight2'] ?></td>
                    <td><?php echo $row['insulinDozeBed2'] ?></td>

                    <td><?php echo $row['insulin_remarks'] ?></td>
                    <td><?php echo $row['insulin_count'] ?></td>

                    <td><?php echo $row['medicineName1'] ?></td>
                    <td><?php echo $row['medicineBrand1'] ?></td>
                    <td><?php echo $row['medicineClass1'] ?></td>
                    <td><?php echo $row['medicineDozeMor1'] ?></td>
                    <td><?php echo $row['medicineDozeDay1'] ?></td>
                    <td><?php echo $row['medicineDozeNight1'] ?></td>

                    <td><?php echo $row['medicineName2'] ?></td>
                    <td><?php echo $row['medicineBrand2'] ?></td>
                    <td><?php echo $row['medicineClass2'] ?></td>
                    <td><?php echo $row['medicineDozeMor2'] ?></td>
                    <td><?php echo $row['medicineDozeDay2'] ?></td>
                    <td><?php echo $row['medicineDozeNight2'] ?></td>

                    <td><?php echo $row['medicineName3'] ?></td>
                    <td><?php echo $row['medicineBrand3'] ?></td>
                    <td><?php echo $row['medicineClass3'] ?></td>
                    <td><?php echo $row['medicineDozeMor3'] ?></td>
                    <td><?php echo $row['medicineDozeDay3'] ?></td>
                    <td><?php echo $row['medicineDozeNight3'] ?></td>

                    <td><?php echo $row['medicine_remarks'] ?></td>

                    <td><?php echo $row['one'] ?></td>
                    <td><?php echo $row['two'] ?></td>
                    <td><?php echo $row['three'] ?></td>
                    <td><?php echo $row['four'] ?></td>
                    <td><?php echo $row['five'] ?></td>
                    <td><?php echo $row['six'] ?></td>
                    <td><?php echo $row['seven'] ?></td>

                </tr>

                <?php
            }
            ?>

        </table>
    </div>
    <!--Table End-->
    <br>
    <br>
    <div class="col-md-12" ">
    <form action="dump.php">
        <button type="submit" name="asd" class="btn btn-primary">Excel Download</button>
    </form>
    </div>
    <!-- Footer -->
    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 mb-4">

            <!--Footer-->
            <footer class="page-footer blue text-center text-md-left mt-0">

                <!--Footer Links-->
                <div class="container">
                    <div class="row">

                        <!--First column-->
                        <div class="col-md-6">
                            <h5 class="title mb-3">বিস্তারিত তথ্যের জন্য যোগাযোগ করুন</h5>
                            <p>সেন্টার ফর গ্লোবাল হেলথ রিসার্চ
                                রুম নংঃ ২৩৩, ২য় তলা, বারডেম জেনারেল হাসপাতাল ১২২ কাজী নজরুল ইসলাম এভিনিউ, শাহবাগ, ঢাকা ১০০০, বাংলাদেশ
                                <br>
                                মোবাইল হেল্প লাইনঃ ০১৭০৫৩৬০২৬৮ ,০১৫৩৪১১৮৪৫৪
                                <br>
                                ইমেইলঃ info@pcc-badas.org / cghr.badas@gmail.com</p>
                        </div>
                        <!--/.First column-->

                        <!--Second column-->
                        <div class="col-md-6">
                            <h5 class="title mb-3">যোগাযোগ</h5>
                            <ul>
                                <li>ওয়েবসাইট <a href="https://www.pcc-badas.org/"> https://www.pcc-badas.org/</a></li>
                                <li>ফেসবুক <a href="https://www.facebook.com/pcc.badas/">https://www.facebook.com/pcc.badas/</a></li>
                                <li>ইউটিউব <a href="https://www.youtube.com/pcc-badas">https://www.youtube.com/pcc-badas</a></li>
                            </ul>
                        </div>
                        <!--/.Second column-->
                    </div>
                </div>
                <!--/.Footer Links-->

                <!--Copyright-->
                <div class="footer-copyright">
                    <div class="container-fluid">
                        © 2019 Copyright: <a href="https://www.parlancecs.com" target="_blank"> Parlance Consulting Services Limited </a>

                    </div>
                </div>
                <!--/.Copyright-->

            </footer>
            <!--/.Footer-->

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->
    <!-- Footer -->

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="table.js"></script>
    </body>
</html>
