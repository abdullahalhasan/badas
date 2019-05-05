<?php
//ENTER THE RELEVANT INFO BELOW
$mysqlUserName      = "root";
$mysqlPassword      = "";
$mysqlHostName      = "localhost";
$DbName             = "badas_db";
$backup_name        = "mybackup.csv";
$tables             = "badas";
error_reporting(0);
//export.php
$connect = mysqli_connect("localhost", "root", "", "badas_db");
$output = '';

    $query = "SELECT * FROM `badas`";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th class="th-md">#
                        </th>
                        <th class="th-md">Form Number
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
                        <th class="th-md">BMI Remarks
                        </th>
                        <th class="th-md">Waist size
                        </th>
                        <th class="th-md">Waist size Remarks
                        </th>
                        <th class="th-md">Systolic Blood Pressure
                        </th>
                        <th class="th-md">Dystolic Blood Pressure
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
  ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
                    <tr>  
                       <td>' . $row["badas_id"] . '</td>
                       <td>' . $row["form_number"] . '</td>  
                       <td>'.$row["center"].'</td>  
                       <td>'.$row["division"].'</td>
                       <td>'.$row["district"].'</td>  
                       <td>'.$row["upozila"].'</td>    
                       <td>'.$row["full_name"].'</td>  
                       <td>'.$row["age"].'</td>
                       <td>'.$row["gender"].'</td>  
                       <td>'.$row["mobile"].'</td>  
                       <td>'.$row["address"].'</td>  
                       <td>'.$row["education"].'</td>  
                       <td>'.$row["occupation"].'</td>
                       <td>'.$row["cigarate"].'</td>  
                       <td>'.$row["monthly_expense"].'</td>  
                       <td>'.$row["physical_exer"].'</td>  
                       <td>'.$row["vegitable"].'</td>  
                       <td>'.$row["fruits"].'</td>
                       <td>'.$row["familyDiab"].'</td>  
                       <td>'.$row["maritial"].'</td>  
                       <td>'.$row["children_count"].'</td>  
                       <td>'.$row["children"].'</td>  
                       <td>'.$row["weight"].'</td>
                       <td>'.$row['heightInch'].'</td>
                       <td>' . $row["bmi"] . '</td>
                       <td>' . $row["bmi_remarks"] . '</td>  
                       <td>' . $row["wrist"] . '</td>
                       <td>' . $row["wrist_remarks"] . '</td>  
                       <td>' . $row["blood_pressure_sys"] . '</td>
                       <td>' . $row["blood_pressure_dys"] . '</td>  
                       <td>'.$row["blood_remark"].'</td> 
                       <td>'.$row["sugarLevelEmpty"].'</td> 
                       <td>'.$row["sle_remarks"].'</td>  
                       <td>'.$row["sugarLevelFill"].'</td>
                       <td>'.$row["slf_remarks"].'</td> 
                       <td>'.$row["medical"].'</td>
                       
                       <td>'.$row["insulinName1"].'</td>  
                       <td>'.$row["insulinClass1"].'</td> 
                       <td>'.$row["insulinType1"].'</td>  
                       <td>'.$row["insulinDosage1"].'</td>  
                       <td>'.$row["insulinDozeMor1"].'</td>  
                       <td>'.$row["insulinDozeDay1"].'</td>  
                       <td>'.$row["insulinDozeNight1"].'</td> 
                       <td>'.$row["insulinDozeBed1"].'</td>   
                       
                       <td>'.$row["insulinName2"].'</td>  
                       <td>'.$row["insulinClass2"].'</td> 
                       <td>'.$row["insulinType2"].'</td>  
                       <td>'.$row["insulinDosage2"].'</td>  
                       <td>'.$row["insulinDozeMor2"].'</td>  
                       <td>'.$row["insulinDozeDay2"].'</td>  
                       <td>'.$row["insulinDozeNight2"].'</td> 
                       <td>'.$row["insulinDozeBed2"].'</td>  
                       
                       <td>'.$row["insulin_remarks"].'</td>
                       <td>'.$row["insulin_count"].'</td>  
                       
                       <td>'.$row["medicineName1"].'</td>  
                       <td>'.$row["medicineBrand1"].'</td> 
                       <td>'.$row["medicineClass2"].'</td> 
                       <td>'.$row["medicineDozeMor1"].'</td>  
                       <td>'.$row["medicineDozeDay1"].'</td>  
                       <td>'.$row["medicineDozeNight1"].'</td>  
                       
                       <td>'.$row["medicineName2"].'</td>  
                       <td>'.$row["medicineBrand2"].'</td> 
                       <td>'.$row["medicineClass2"].'</td> 
                       <td>'.$row["medicineDozeMor2"].'</td>  
                       <td>'.$row["medicineDozeDay2"].'</td>  
                       <td>'.$row["medicineDozeNight2"].'</td>  
                       
                       <td>'.$row["medicineName3"].'</td>  
                       <td>'.$row["medicineBrand3"].'</td> 
                       <td>'.$row["medicineClass3"].'</td> 
                       <td>'.$row["medicineDozeMor3"].'</td>  
                       <td>'.$row["medicineDozeDay3"].'</td>  
                       <td>'.$row["medicineDozeNight3"].'</td> 
                       
                       <td>'.$row["medicine_remarks"].'</td>  
                       
                       <td>'.$row["one"].'</td>  
                       <td>'.$row["two"].'</td>  
                       <td>'.$row["three"].'</td>  
                       <td>'.$row["four"].'</td>                       
                       <td>'.$row["five"].'</td>  
                       <td>'.$row["six"].'</td>
                       <td>'.$row["seven"].'</td>
                    </tr>
   ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=download.xls');
        echo $output;

}
?>