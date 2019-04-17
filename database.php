<?php
session_start();
include('db_connect.php');
error_reporting(0);

/*$per = 10.1111111;
$f = sprintf ("%.1f",$per);
$rounded = round($f, 1);
echo $rounded;
die;*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BADAS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head><!--/head-->
<body>
<br>
<br>
<form method='post' action='database.php' onclick='myFunction'>
    <?php
    // REGISTER USER
    if (isset($_POST['submit_btn'])) {
        // receive all input values from the form
        /*
        echo $insulinName1;
        die;*/
        $center = $_POST['center'];
        $division = $_POST['division'];
        $district = $_POST['district'];
        $upozila = $_POST['upozila'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $education = $_POST['education'];
        $occupation = $_POST['occupation'];
        $cigarate = $_POST['cigarate'];
        $monthly_expense = $_POST['monthly_expense'];
        $physical_exer = $_POST['physical_exer'];
        $vegitable = $_POST['vegitable'];
        $fruits = $_POST['fruits'];
        $familyDiab = $_POST['familyDiab'];
        $maritial = $_POST['maritial'];
        $children_count = $_POST['children_count'];
        $children = $_POST['children'];
        $weight = $_POST['weight'];
        $heightFeet = $_POST['heightFeet'];
        $heightFeet = $heightFeet;
        $heightInch = $_POST['heightInch'];

        $bmi = $weight / (((($heightFeet * 12) + $heightInch) * 0.0254) * (($heightFeet * 12) + $heightInch) * 0.0254);
        $f = sprintf("%.1f", $bmi);
        $bmi = round($f, 2);

        $heightFeet = $heightFeet * 12;
        $heightInch = (($heightFeet + $heightInch) * 2.54);
        $f = sprintf("%.1f", $heightInch);
        $heightInch = round($f, 2);

        $wrist = $_POST['wrist'];
        $wrist = $wrist * 2.54;
        $f = sprintf("%.1f", $wrist);
        $wrist = round($f, 2);

        $blood_pressure_sys = $_POST['blood_pressure_sys'];
        $blood_pressure_dys = $_POST['blood_pressure_dys'];

        if ($blood_pressure_sys <= $blood_pressure_dys) {
            $_SESSION['dys'] = 'dys';
            header('Location: index.php');
        }
        $blood_pressure = $blood_pressure_sys . "/" . $blood_pressure_dys;
        if ($blood_pressure_sys <= 120 && $blood_pressure_dys <= 80) {
            $blood_remark = "Normal";
        } else {
            $blood_remark = "High BP";
        }

        if ($blood_pressure_sys == "" && $blood_pressure_dys == "") {
            $blood_remark = "";
            $blood_pressure = "";
        }

        $sugarLevelEmpty = $_POST['sugarLevelEmpty'];

        if ($sugarLevelEmpty >= 2 && $sugarLevelEmpty < 6.1) {
            $sle_remarks = "Normal";
        } else if ($sugarLevelEmpty >= 6.1 && $sugarLevelEmpty <= 6.9) {
            $sle_remarks = "Pre-Diabetes";
        } else if ($sugarLevelEmpty >= 7) {
            $sle_remarks = "Diabetes";
        } else {
            $sle_remarks = "";
        }

        $sugarLevelFill = $_POST['sugarLevelFill'];

        if ($sugarLevelFill >= 2 && $sugarLevelFill < 5.5) {
            $slf_remarks = "Normal";
        } else if ($sugarLevelFill >= 5.5 && $sugarLevelEmpty < 11.1) {
            $slf_remarks = "Pre-Diabetes";
        } else if ($sugarLevelFill >= 11.1) {
            $slf_remarks = "Diabetes";
        } else {
            $slf_remarks = "";
        }

        $medical = $_POST['medical'];
        if ($medical == "1") {
            $medical = "0";
        }

        // Insulin Starts
        $insulinName1 = $_POST['insulinName1'];
        $query_insulin = "SELECT * FROM `insulin_list` WHERE id =" . $insulinName1;
        $results_insulin = mysqli_query($db, $query_insulin);
        $row_insulin = mysqli_fetch_assoc($results_insulin);

        $insulinBrand1 = $row_insulin['brand'];
        $insulinGeneric1 = $row_insulin['generic'];
        $insulinDosage1 = $row_insulin['dosage_form'];
        $insulinType1 = $row_insulin['type'];
        $insulinClass1 = $row_insulin['class'];
        $insulinDozeMor1 = $_POST['insulinDozeMor1'];
        $insulinDozeDay1 = $_POST['insulinDozeDay1'];
        $insulinDozeNight1 = $_POST['insulinDozeNight1'];
        $insulinDozeBed1 = $_POST['insulinDozeBed1'];

        $insulinName2 = $_POST['insulinName2'];
        $query_insulin2 = "SELECT * FROM `insulin_list` WHERE id =" . $insulinName2;
        $results_insulin2 = mysqli_query($db, $query_insulin2);
        $row_insulin2 = mysqli_fetch_assoc($results_insulin2);

        $insulinBrand2 = $row_insulin2['brand'];
        $insulinGeneric2 = $row_insulin2['generic'];
        $insulinDosage2 = $row_insulin2['dosage_form'];
        $insulinType2 = $row_insulin2['type'];
        $insulinClass2 = $row_insulin2['class'];
        $insulinDozeMor2 = $_POST['insulinDozeMor2'];
        $insulinDozeDay2 = $_POST['insulinDozeDay2'];
        $insulinDozeNight2 = $_POST['insulinDozeNight2'];
        $insulinDozeBed2 = $_POST['insulinDozeBed2'];


        $insulin_count = 0;
        if ($insulinDozeMor1 != null) {
            $insulin_count += intval($insulinDozeMor1);
        } if ($insulinDozeMor2 != null) {
            $insulin_count += intval($insulinDozeMor2);
        } if ($insulinDozeDay1 != null) {
            $insulin_count += intval($insulinDozeDay1);
        } if ($insulinDozeDay2 != null) {
            $insulin_count += intval($insulinDozeDay2);
        } if ($insulinDozeNight1 != null) {
            $insulin_count += intval($insulinDozeNight1);
        } if ($insulinDozeNight2 != null) {
            $insulin_count += intval($insulinDozeNight2);
        } if ($insulinDozeBed1 != null) {
            $insulin_count += intval($insulinDozeBed1);
        } if ($insulinDozeBed2 != null) {
            $insulin_count += intval($insulinDozeBed2);
        }

        /*echo "Class 1:" . $insulinClass1;
        echo "<br>";
        echo "Class 2:" . $insulinClass2;*/


        //echo $insulin_count."<br>";

        $morFlag = "0";
        $dayFlag = "0";
        $nightFlag = "0";
        $bedFlag = "0";
        $morFlag2 = "0";
        $dayFlag2 = "0";
        $nightFlag2 = "0";
        $bedFlag2 = "0";

        //Morning Dose
        if ($insulinDozeMor1 != null) {
            switch ($insulinClass1) {
                case "Short Acting":
                    $morFlag = "11";
                    break;
                case "Long Acting":
                    $morFlag = "22";
                    break;
                case "Intermediate Acting":
                    $morFlag = "33";
                    break;
                case "Premix":
                    $morFlag = "44";
                    break;
                case "Rapid Acting":
                    $morFlag = "55";
                    break;
            }
        }
        if ($insulinDozeMor2 != null) {
            switch ($insulinClass2) {
                case "Short Acting":
                    $morFlag2 = "111";
                    break;
                case "Long Acting":
                    $morFlag2 = "222";
                    break;
                case "Intermediate Acting":
                    $morFlag2 = "333";
                    break;
                case "Premix":
                    $morFlag2 = "444";
                    break;
                case "Rapid Acting":
                    $morFlag2 = "555";
                    break;
            }
        }

        echo "<br>Mor Flag 1: " . $morFlag;
        echo "<br>Mor Flag 2: " . $morFlag2;


        //Day Dose
        if ($insulinDozeDay1 != null) {
            switch ($insulinClass1) {
                case "Short Acting":
                    $dayFlag = "11";
                    break;
                case "Long Acting":
                    $dayFlag = "22";
                    break;
                case "Intermediate Acting":
                    $dayFlag = "33";
                    break;
                case "Premix":
                    $dayFlag = "44";
                    break;
                case "Rapid Acting":
                    $dayFlag = "55";
                    break;
            }
        }
        if ($insulinDozeDay2 != null) {
            switch ($insulinClass2) {
                case "Short Acting":
                    $dayFlag2 = "111";
                    break;
                case "Long Acting":
                    $dayFlag2 = "222";
                    break;
                case "Intermediate Acting":
                    $dayFlag2 = "333";
                    break;
                case "Premix":
                    $dayFlag2 = "444";
                    break;
                case "Rapid Acting":
                    $dayFlag2 = "555";
                    break;
            }
        }

        echo "<br>Day Flag 1: " . $dayFlag;
        echo "<br>Day Flag 2: " . $dayFlag2;

        //Night Dose
        if ($insulinDozeNight1 != null) {
            switch ($insulinClass1) {
                case "Short Acting":
                    $nightFlag = "11";
                    break;
                case "Long Acting":
                    $nightFlag = "22";
                    break;
                case "Intermediate Acting":
                    $nightFlag = "33";
                    break;
                case "Premix":
                    $nightFlag = "44";
                    break;
                case "Rapid Acting":
                    $nightFlag = "55";
                    break;
            }
        }
        if ($insulinDozeNight2 != null) {
            switch ($insulinClass2) {
                case "Short Acting":
                    $nightFlag2 = "111";
                    break;
                case "Long Acting":
                    $nightFlag2 = "222";
                    break;
                case "Intermediate Acting":
                    $nightFlag2 = "333";
                    break;
                case "Premix":
                    $nightFlag2 = "444";
                    break;
                case "Rapid Acting":
                    $nightFlag2 = "555";
                    break;
            }
        }

        echo "<br>Night Flag 1: " . $nightFlag;
        echo "<br>Night Flag 2: " . $nightFlag2;
        //Bed Time Dose
        if ($insulinDozeBed1 != null) {
            switch ($insulinClass1) {
                case "Short Acting":
                    $bedFlag = "11";
                    break;
                case "Long Acting":
                    $bedFlag = "22";
                    break;
                case "Intermediate Acting":
                    $bedFlag = "33";
                    break;
                case "Premix":
                    $bedFlag = "44";
                    break;
                case "Rapid Acting":
                    $bedFlag = "55";
                    break;
            }
        }
        if ($insulinDozeBed2 != null) {
            switch ($insulinClass2) {
                case "Short Acting":
                    $bedFlag2 = "111";
                    break;
                case "Long Acting":
                    $bedFlag2 = "222";
                    break;
                case "Intermediate Acting":
                    $bedFlag2 = "333";
                    break;
                case "Premix":
                    $bedFlag2 = "444";
                    break;
                case "Rapid Acting":
                    $bedFlag2 = "55";
                    break;
            }
        }
        echo "<br>Bed Flag 1: " . $bedFlag;
        echo "<br>Bed Flag 2: " . $bedFlag2;


        //Basal-Bolas 1
        if (
                ($morFlag == 11 || $morFlag2 == 111) &&
                ($dayFlag == 11 || $dayFlag2 == 111) &&
                ($nightFlag == 11 || $nightFlag2 == 111) &&
                ($bedFlag == 22 || $bedFlag2 == 222)) {
            $insulin_remarks = "Basal-Bolus";

        }

        //Basal-Bolas 2
        if (

                ($morFlag == 11 || $morFlag2 == 111) &&
                ($dayFlag == 11 || $dayFlag2 == 111) &&
                (($nightFlag == 11 && $nightFlag2 == 333)|| ($nightFlag == 33 && $nightFlag2 == 111)) &&
                ($bedFlag == 0 || $bedFlag2 == 0)
        ) {
            $insulin_remarks = "Basal-Bolus";

        }

        /*if (
            //Basal-Plus
                (($morFlag == 11 && $morFlag2 == 333)|| ($morFlag == 33 && $morFlag2 == 111)) &&
                ($nightFlag == 11 && $nightFlag2 == 333)|| ($nightFlag == 33 && $nightFlag2 == 111) &&
                ($bedFlag == 22 || $bedFlag2 == 222)) {
            $insulin_remarks = "Basal Plus";

        }*/

        if (
            //Split Mix
                (($morFlag == 11 && $morFlag2 == 333)||($morFlag == 33 && $morFlag2 == 111)) &&
                (($dayFlag == 11 && $dayFlag2 == 333)|| $dayFlag == 33 && $dayFlag2 == 111) &&
                (($nightFlag == 11 && $nightFlag2 == 333) || ($nightFlag == 33 && $nightFlag2 == 111)) &&
                ($bedFlag == 0 && $bedFlag2 == 0)
        ) {
            $insulin_remarks = "Split Mix";

        }

        if (
            //Premix
                ($morFlag == 44 || $morFlag2 == 444) &&
                ($dayFlag == 0 && $dayFlag2 == 0) &&
                ($nightFlag == 44 || $nightFlag2 == 444) &&
                ($bedFlag == 0 && $bedFlag2 == 0)
        ) {
            $insulin_remarks = "Premix";

        }

        //Basal Bolus 3
        if (
            ($morFlag == 55 || $morFlag2 == 555) &&
            ($dayFlag == 55 || $dayFlag2 == 555) &&
            ($nightFlag == 55 || $nightFlag2 == 555) &&
            ($bedFlag == 22 || $bedFlag2 == 222)
        ){
            $insulin_remarks = "Basal-Bolus";
        }

        //Basal Plus 1
        if (
            ($morFlag == 0 && $morFlag2 == 0) &&
            ($dayFlag == 55 || $dayFlag2 == 555) &&
            ($nightFlag == 0 && $nightFlag2 == 0) &&
            ($bedFlag == 22 || $bedFlag2 == 222)

        ){
            $insulin_remarks = "Basal-Plus";
        }

        //Basal Plus 2
        if (
            ($morFlag == 0 && $morFlag2 == 0) &&
            ($dayFlag == 11 || $dayFlag2 == 111) &&
            ($nightFlag == 0 && $nightFlag2 == 0) &&
            ($bedFlag == 22 || $bedFlag2 == 222)

        ){
            $insulin_remarks = "Basal-Plus";
        }

        //Bolus Only 1
        if (
            ($morFlag == 11 || $morFlag2 == 111) &&
            ($dayFlag == 11 || $dayFlag2 == 111) &&
            ($nightFlag == 11 || $nightFlag2 == 111) &&
            ($bedFlag == 0 && $bedFlag2 == 0)
        ) {
            $insulin_remarks = "Bolus";

        }

        //Bolus Only 1
        if (
            ($morFlag == 55 || $morFlag2 == 555) &&
            ($dayFlag == 55 || $dayFlag2 == 555) &&
            ($nightFlag == 55 || $nightFlag2 == 555) &&
            ($bedFlag == 0 && $bedFlag2 == 0)
        ) {
            $insulin_remarks = "Bolus";

        }

        //Bolus Only 1
        if (
            ($morFlag == 0 && $morFlag2 == 0) &&
            ($dayFlag == 0 && $dayFlag2 == 0) &&
            ($nightFlag == 0 && $nightFlag2 == 0) &&
            ($bedFlag == 22 || $bedFlag2 == 222)
        ) {
            $insulin_remarks = "Basal";

        }

        /*echo "<br>Insulin Remarks: ".$insulin_remarks;
        die;*/

        //Medicine Start
        $medicineName1 = $_POST['medicineName1'];
        //echo $medicineName1."<br>";
        $query_medicine1 = "SELECT * FROM `medicines` WHERE id ='" . $medicineName1."'";
        $results_medicine1 = mysqli_query($db, $query_medicine1);
        $row_medicine1 = mysqli_fetch_assoc($results_medicine1);

        $medicineClass1 = $row_medicine1['class'];
        echo $medicineGeneric1."<br>";
        $medicineBrand1 = $row_medicine1['brand'];
        //echo $medicineBrand1."<br>";
        $medicineGeneric1 = $row_medicine1['generic'];
        $medicineDozeMor1 = $_POST['medicineDozeMor1'];
        $medicineDozeDay1 = $_POST['medicineDozeDay1'];
        $medicineDozeNight1 = $_POST['medicineDozeNight1'];

        $medicineName2 = $_POST['medicineName2'];
        //echo $medicineName2."<br>";
        $query_medicine2 = "SELECT * FROM `medicines` WHERE id ='" . $medicineName2."'";
        $results_medicine2 = mysqli_query($db, $query_medicine2);
        $row_medicine2 = mysqli_fetch_assoc($results_medicine2);

        $medicineClass2 = $row_medicine2['class'];
        //echo $medicineGeneric2."<br>";
        $medicineBrand2 = $row_medicine2['brand'];
        //echo $medicineBrand2."<br>";
        $medicineGeneric2 = $row_medicine2['generic'];
        $medicineDozeMor2 = $_POST['medicineDozeMor2'];
        $medicineDozeDay2 = $_POST['medicineDozeDay2'];
        $medicineDozeNight2 = $_POST['medicineDozeNight2'];

        $medicineName3 = $_POST['medicineName3'];
        //echo $medicineName3."<br>";
        $query_medicine3 = "SELECT * FROM `medicines` WHERE id ='" . $medicineName3."'";
        $results_medicine3 = mysqli_query($db, $query_medicine3);
        $row_medicine3 = mysqli_fetch_assoc($results_medicine3);

        $medicineClass3 = $row_medicine3['class'];
        //echo $medicineGeneric3."<br>";
        $medicineBrand3 = $row_medicine3['brand'];
        //echo $medicineBrand3."<br>";
        $medicineGeneric3 = $row_medicine3['generic'];
        
        $medicineDozeMor3 = $_POST['medicineDozeMor3'];
        $medicineDozeDay3 = $_POST['medicineDozeDay3'];
        $medicineDozeNight3 = $_POST['medicineDozeNight3'];

        $medicine_remarks = $medicineClass1."+".$medicineClass2."+".$medicineClass3;

        //echo $medicine_remarks;
        //die;

        $one = $_POST['001'];
        $two = implode($_POST['002']);
        $three = $_POST['003'];
        $four = implode($_POST['004']);
        $five = $_POST['005'];
        $six = $_POST['006'];
        $seven = $_POST['007'];
        //echo $bmi;
        //die;

        $query = "INSERT INTO badas (badas_id, center,division, district,upozila, 
                  full_name, age, gender, 
                  mobile, address, education, 
                  occupation,cigarate, monthly_expense, 
                  physical_exer, vegitable, fruits, 
                  familyDiab, maritial, children_count, 
                  children, weight, heightFeet, 
                  heightInch,bmi, wrist, 
                  blood_pressure, blood_remark, 
                  sugarLevelEmpty, sle_remarks, 
                  sugarLevelFill, slf_remarks , 
                  medical,
                  insulinName1,insulinClass1,insulinType1,insulinDosage1,insulinDozeMor1,insulinDozeDay1,insulinDozeNight1,insulinDozeBed1,
                  insulinName2,insulinClass2,insulinType2,insulinDosage2,insulinDozeMor2,insulinDozeDay2,insulinDozeNight2,insulinDozeBed2,insulin_remarks,insulin_count,
                  medicineName1,medicineBrand1,medicineClass1,medicineDozeMor1,medicineDozeDay1,medicineDozeNight1,
                  medicineName2,medicineBrand2,medicineClass2,medicineDozeMor2,medicineDozeDay2,medicineDozeNight2,
                  medicineName3,medicineBrand3,medicineClass3,medicineDozeMor3,medicineDozeDay3,medicineDozeNight3,medicine_remarks,
                  one, two, three, four, five, six, seven) 
                  VALUES(null, '$center','$division','$district','$upozila',
                  '$name','$age','$gender', 
                  '$mobile','$address','$education',
                  '$occupation','$cigarate', '$monthly_expense', 
                  '$physical_exer','$vegitable','$fruits',
                  '$familyDiab', '$maritial', '$children_count',
                  '$children','$weight','$heightFeet', 
                  '$heightInch','$bmi','$wrist',
                  '$blood_pressure','$blood_remark',
                  '$sugarLevelEmpty','$sle_remarks',
                  '$sugarLevelFill','$slf_remarks',
                  '$medical',
                  '$insulinBrand1','$insulinClass1','$insulinType1','$insulinDosage1','$insulinDozeMor1','$insulinDozeDay1','$insulinDozeNight1','$insulinDozeBed1',
                  '$insulinBrand2','$insulinClass2','$insulinType2','$insulinDosage2','$insulinDozeMor2','$insulinDozeDay2','$insulinDozeNight2','$insulinDozeBed2','$insulin_remarks','$insulin_count',
                  '$medicineGeneric1','$medicineBrand1','$medicineClass1','$medicineDozeMor1','$medicineDozeDay1','$medicineDozeNight1',
                  '$medicineGeneric2','$medicineBrand2','$medicineClass2','$medicineDozeMor2','$medicineDozeDay2','$medicineDozeNight2',
                  '$medicineGeneric3','$medicineBrand3','$medicineClass3','$medicineDozeMor3','$medicineDozeDay3','$medicineDozeNight3','$medicine_remarks',
                  '$one','$two','$three','$four','$five', '$six', '$seven')";

//        echo $query;
//        die;
        $database = "badas_db";
        $ifInsert = mysqli_query($db, $query);

        if ($ifInsert) {
            echo "
                        <div class='container'>
                            <div class='jumbotron' >
                                <h1 class='txt-md-center'>আপনার দেয়া তথ্য ডাটাবেজে সফল ভাবে জমা হয়েছে। আরেকটি এন্ট্রি করুন।</h1>
                                
                            </div>
                            <div style='float: right'>
                                 <a href='index.php'> <input type='button' class='btn btn-success' name='abs' value='নতুন এন্ট্রি করুন'> </a>
                            </div>
                        </div>
                    ";


        } else {

            echo "<div class='container'>
                            <div class='jumbotron' >
                                <h1 class='txt-md-center'>আপনার ডাটা এন্ট্রি সফল হয় নি। অনুগ্রহ করে আবার এন্ট্রি করুন।</h1>
                                
                            </div>
                            <div style='float: right'>
                                 <a href='index.php'> <input type='button' class='btn btn-success' name='abs' value='আবার জমা দিন'> </a>
                            </div>
                        </div>";


        }


    }

    ?>
</form>
</body>
</html>
