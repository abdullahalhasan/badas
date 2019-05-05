<?php
session_start();
    include('db_connect.php');
    //error_reporting(0);

$sql = "SELECT badas_id FROM badas";

if ($result = mysqli_query($db, $sql)) {
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows($result);
    //echo $rowcount;
    //printf("Result set has %d rows.\n",$rowcount);
    // Free result set
    }


$query_upozila = "SELECT * FROM `upazilas` WHERE 1 ORDER BY name ASC";
    $results_upozila = mysqli_query($db, $query_upozila);

    $row_upozila = mysqli_fetch_assoc($results_upozila);

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
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

        <!--Jquery CDN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

    </head><!--/head-->
    <body>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/33.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/11.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/22.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--/#main-slider-->
        <br>
        <!--Heading-->
        <div class="container">
            <div class="jumbotron">
                <h1>সেন্টার ফর গ্লোবাল হেলথ রিসার্চ, বাংলাদেশ ডায়াবেটিক সমিতি</h1>
            </div>
            <div style="float: right">
                <p>Total Count: <?php
                    echo $rowcount;
                    ?>
                </p>

            </div>
        </div>
    <br>
    <br>
        <br>
        <!--First Form-->


        <div class="container">
            <form autocomplete="off" method="post" action="database.php">
                <div class="form-group row">
                    <label for="center" class="col-sm-3 col-form-label"> Employee ID</label>
                    <div class="col-sm-3">
                        <input type="text" autocomplete="off" class="form-control" name="emp_id">
                    </div>

                    <label for="center" class="col-sm-3 col-form-label">Form Number</label>
                    <div class="col-sm-3">
                        <input type="text" autocomplete="off" class="form-control" name="form_number" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="center" class="col-sm-3 col-form-label">১. কেন্দ্র</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="center" id="center" placeholder="কেন্দ্র" >
                    </div>

                    <label for="district" class="col-sm-3 col-form-label">২.১ বিভাগ</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="division" name="division" >
                            <option value="" selected="selected">সিলেক্ট করুন</option>
                            <option value="Barishal">1. বরিশাল</option>
                            <option value="Chittagong">2. চট্টগ্রাম</option>
                            <option value="Dhaka">3. ঢাকা</option>
                            <option value="Khulna">4. খুলনা</option>
                            <option value="Mymensingh">5. ময়মনসিংহ</option>
                            <option value="Rajshahi">6. রাজশাহী</option>
                            <option value="Rangpur">7. রংপুর</option>
                            <option value="Sylhet">8. সিলেট</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="district" class="col-sm-3 col-form-label">২.২ জেলা</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="district" name="district" onchange="changeFunc()">
                            <option value="" selected="selected">সিলেক্ট করুন</option>
                            <option value="Bagerhat">Bagerhat বাগেরহাট</option>
                            <option value="Bandarban" >Bandarban বান্দরবান</option>
                            <option value="Barguna">Barguna বরগুনা</option>
                            <option value="Barisal" >Barisal বরিশাল</option>
                            <option value="Bhola">Bhola ভোলা</option>
                            <option value="Bogra">Bogra বগুড়া</option>
                            <option value="Brahmanbaria">Brahmanbaria ব্রাহ্মণবাড়িয়া</option>
                            <option value="Chandpur">Chandpur চাঁদপুর</option>
                            <option value="Chapai_Nawabganj">Chapai Nawabganj চাঁপাই নবাবগঞ্জ</option>
                            <option value="Chittagong">Chittagong চট্টগ্রাম</option>
                            <option value="Chuadanga">Chuadanga চুয়াডাঙ্গা</option>
                            <option value="Comilla">Comilla কুমিল্লা</option>
                            <option value="Coxs_Bazar" > Cox's Bazar কক্সবাজার</option>
                            <option value="Dhaka"> Dhaka ঢাকা</option>
                            <option value="Dinajpur">Dinajpur দিনাজপুর</option>
                            <option value="Faridpur">Faridpur ফরিদপুর</option>
                            <option value="Feni">Feni ফেনী</option>
                            <option value="Gaibandha">Gaibandha গাইবান্ধা</option>
                            <option value="Gazipur">Gazipur গাজীপুর</option>
                            <option value="Gopalganj">Gopalganj গোপালগঞ্জ</option>
                            <option value="Habiganj">Habiganj হবিগঞ্জ</option>
                            <option value="Jamalpur">Jamalpur জামালপুর</option>
                            <option value="Jessore">Jessore যশোর</option>
                            <option value="Jhalakati">Jhalakati ঝালকাঠী</option>
                            <option value="Jhenaidah"> Jhenaidah ঝিনাইদহ</option>
                            <option value="Joypurhat">Joypurhat জয়পুরহাট</option>
                            <option value="Khagrachari">Khagrachari খাগড়াছড়ি</option>
                            <option value="Khulna">Khulna খুলনা</option>
                            <option value="Kishorganj">Kishorganj কিশোরগঞ্জ</option>
                            <option value="Kurigram">Kurigram কুড়িগ্রাম</option>
                            <option value="Kushtia">Kushtia কুষ্টিয়া</option>
                            <option value="Lakshimpur">Lakshimpur লক্ষ্মীপুর</option>
                            <option value="Lalmonirhat">Lalmonirhat লালমনিরহাট</option>
                            <option value="Magura">Magura মাগুরা</option>
                            <option value="Manikganj"> Manikganj মানিকগঞ্জ</option>
                            <option value="Maulvibazar"> Maulvibazar মৌলভীবাজার</option>
                            <option value="Meherpur"> Meherpur মেহেরপুর</option>
                            <option value="Munshiganj">Munshiganj মুন্সিগঞ্জ</option>
                            <option value="Mymensingh">Mymensingh ময়মনসিংহ</option>
                            <option value="Naogaon">Naogaon    নওগাঁ</option>
                            <option value="Narail">Narail নড়াইল</option>
                            <option value="Narayangang">Narayangang নারায়ণগঞ্জ</option>
                            <option value="Narshindi">Narshindi নরসিংদী</option>
                            <option value="Natore">Natore নাটোর</option>
                            <option value="Netrokona"> Netrokona নেত্রোকোনা</option>
                            <option value="Nilphamari"> Nilphamari নীলফামারী</option>
                            <option value="Noakhali"> Noakhali নোয়াখালী</option>
                            <option value="Pabna">Pabna পাবনা</option>
                            <option value="Panchgarh">Panchgarh পঞ্চগড়</option>
                            <option value="Patuakhali">Patuakhali পটুয়াখালী</option>
                            <option value="Rajbari">Rajbari রাজবাড়ী</option>
                            <option value="Rajshahi">Rajshahi রাজশাহী</option>
                            <option value="Rangamati">Rangamati রাঙ্গামাটি</option>
                            <option value="Rangpur">Rangpur    রংপুর</option>
                            <option value="Satkhira"> Satkhira সাতক্ষীরা</option>
                            <option value="Shariatpur">Shariatpur শরিয়তপুর</option>
                            <option value="Sherpur">Sherpur শেরপুর</option>
                            <option value="Sirajganj">Sirajganj  সিরাজগঞ্জ</option>
                            <option value="Sunamganj">Sunamganj সুনামগঞ্জ</option>
                            <option value="Sylhet">Sylhet সিলেট</option>
                            <option value="Tangail"> Tangail  টাঙ্গাঈল</option>
                            <option value="Thakurgaon">Thakurgaon ঠাকুরগাঁও</option>
                        </select>
                    </div>

                    <label for="district" class="col-sm-3 col-form-label">২.৩ উপজেলা</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="dhaka_thana" name="upozila">
                            <option value="" selected="selected">সিলেক্ট করুন</option>
                            <?php
                            while ($row_upozila = mysqli_fetch_assoc($results_upozila)){
                                //echo $row['name']."<br>";
                                echo "<option value=".$row_upozila['name'].">".$row_upozila['name']."</option>";
                            }
                            ?>

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">৩. নাম</label>
                    <div class="col-sm-3">
                        <input autocomplete="off" type="text" class="form-control" name="name" id="name"
                               placeholder="নাম">
                    </div>

                    <label for="age" class="col-sm-3 col-form-label">৪. বয়স</label>
                    <div class="col-sm-3">
                        <input autocomplete="off" type="number" maxlength="3" min="15" max="110" class="form-control"
                               name="age" id="age" placeholder="বয়স">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-3 col-form-label">৫. লিঙ্গ </label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="Male">
                            <label class="form-check-label" for="inlineRadio1">পুরুষ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="Female">
                            <label class="form-check-label" for="inlineRadio2">মহিলা</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="otherRadio" value="Other">
                            <label class="form-check-label" for="otherRadio">অন্যান্য</label>
                        </div>
                    </div>

                    <label for="mobile" class="col-sm-3 col-form-label">৬. মোবাইল নাম্বার</label>
                    <div class="col-sm-3">
                        <input autocomplete="off" type="text" class="form-control" maxlength="11" name="mobile"
                               id="mobile" placeholder="মোবাইল নাম্বার">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">৭. ঠিকানা</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="address" id="villageRadio" value="Village">
                            <label class="form-check-label" for="inlineRadio1">গ্রাম</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="address" id="townRadio" value="Town">
                            <label class="form-check-label" for="inlineRadio2">শহর</label>
                        </div>
                    </div>

                    <label for="age" class="col-sm-3 col-form-label">৮. শিক্ষাগত যোগ্যতা</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="education">
                            <option value="">সিলেক্ট করুন</option>
                            <option value="Illiterate">1. নিরক্ষর</option>
                            <option value="Primary School">2. প্রাথমিক বিদ্যালয়</option>
                            <option value="Secondary School">3. মাধ্যমিক বিদ্যালয়</option>
                            <option value="College">4. কলেজ</option>
                            <option value="Higher Education">5. উচ্চতর শিক্ষা</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="center" class="col-sm-3 col-form-label">৯. পেশা</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="occupation">
                            <option value="">সিলেক্ট করুন</option>
                            <option value="Job Holder">1. চাকুরীজীবী</option>
                            <option value="Businessman">2. ব্যবসায়ী</option>
                            <option value="Maid">3. গৃহকর্মী</option>
                            <option value="Housewife">4. গৃহিণী</option>
                            <option value="Student">5. ছাত্র</option>
                            <option value="Retired">6. অবসরপ্রাপ্ত</option>
                            <option value="Farmer">7. কৃষক</option>
                            <option value="Unemployed">8 বেকার</option>
                            <option value="Other">9. অন্যান্য</option>
                        </select>
                    </div>

                    <label for="district" class="col-sm-3 col-form-label">১০. ধুমপানের অভ্যাস</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cigarate" id="cigYesRadio" value="Yes">
                            <label class="form-check-label" for="cigYesRadio">হ্যাঁ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cigarate" id="cigNoRadio" value="No">
                            <label class="form-check-label" for="cigNoRadio">না</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">১১. মাসিক সংসার খরচ</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="monthly_expense">
                            <option value="">সিলেক্ট করুন</option>
                            <option value="Below 10,000 TK">1. ১০,০০০ টাকার কম</option>
                            <option value="10,000 TK - 20,000 TK">2. ১০,০০০ টাকা - ২০,০০০ টাকা</option>
                            <option value="Above 20,000 TK">3. ২০,০০০ টাকার বেশি</option>
                        </select>
                    </div>

                    <label for="age" class="col-sm-3 col-form-label">১২. শারীরিক শ্রম</label>
                    <div class="col-sm-3">

                        <select class="form-control" name="physical_exer">
                            <option value="">সিলেক্ট করুন</option>
                            <option value="<30">1. ৩০ মিনিটের কম হাঁটা</option>
                            <option value="30-60">2. ৩০ থেকে ৬০ মিনিট হাঁটা</option>
                            <option value="60>">3. ৬০ মিনিটের বেশি হাঁটা</option>
                            <option value="0">4. না</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-3 col-form-label">১৩. সপ্তাহে কয়দিন শাকসবজি খান </label>
                    <div class="col-sm-3">
                        <!--<input type="text" class="form-control" id="mobile" name="vegitable" placeholder=" ... দিন">-->

                        <select class="form-control" name="vegitable">
                            <option value="">সিলেক্ট করুন</option>
                            <option value="1">1 দিন</option>
                            <option value="2">2 দিন</option>
                            <option value="3">3 দিন</option>
                            <option value="4">4 দিন</option>
                            <option value="5">5 দিন</option>
                            <option value="6">6 দিন</option>
                            <option value="7">7 দিন</option>
                            <option value="0">না</option>
                        </select>
                    </div>

                    <label for="mobile" class="col-sm-3 col-form-label">১৪. সপ্তাহে কয়দিন ফল খান</label>
                    <div class="col-sm-3">
                        <!--<input type="text" class="form-control" id="mobile" name="fruits" placeholder=" ... দিন">-->
                        <select class="form-control" name="fruits">
                            <option value="">সিলেক্ট করুন</option>
                            <option value="1">1 দিন</option>
                            <option value="2">2 দিন</option>
                            <option value="3">3 দিন</option>
                            <option value="4">4 দিন</option>
                            <option value="5">5 দিন</option>
                            <option value="6">6 দিন</option>
                            <option value="7">7 দিন</option>
                            <option value="0">না</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">১৫. পরিবারে ডায়াবেটিস আছে কিনা</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="familyDiab" id="familyDiabYesRadio" value="Yes">
                            <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="familyDiab" id="familyDiabNoRadio" value="No">
                            <label class="form-check-label" for="inlineRadio2">না</label>
                        </div>
                    </div>

                    <label for="age" class="col-sm-3 col-form-label">১৬. বৈবাহিক অবস্থা</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="maritial" id="maritialYesRadio" value="Married" onclick="checkMaritalStatus()">
                            <label class="form-check-label" for="inlineRadio1">বিবাহিত</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="maritial" id="maritialNoRadio" value="Unmarried" onclick="checkMaritalStatus()">
                            <label class="form-check-label" for="inlineRadio2">অবিবাহিত</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row" id="married_check">
                    <label for="center" class="col-sm-3 col-form-label">১৭. সন্তান সংখ্যা</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="children_count">
                            <option value="0">০০</option>
                            <option value="1">০১</option>
                            <option value="2">০২</option>
                            <option value="3">০৩</option>
                            <option value="4">০৪</option>
                            <option value="5">০৫</option>
                            <option value="6">০৬</option>
                            <option value="7">০৭</option>
                            <option value="8">০৮</option>
                            <option value="9">০৯</option>
                            <option value="10">১০</option>
                        </select>
                    </div>

                    <label for="district" class="col-sm-3 col-form-label">১৮. সন্তান নেওয়ার আগে চিকিৎসকের পরামর্শ নিয়েছিলেন?</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="children" id="childrenYesRadio" value="Yes">
                            <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="children" id="childrenNoRadio" value="No">
                            <label class="form-check-label" for="inlineRadio2">না</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">১৯. ওজোন</label>
                    <div class="col-sm-3">
                        <input type="number"  maxlength="3" min="30"  max="200" class="form-control" id="weight" name="weight" placeholder="কে.জি." ">
                    </div>

                    <label for="age" class="col-sm-2 col-form-label">২০. উচ্চতা</label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" id="heightFeet" name="heightFeet" placeholder="ফুট" onkeyup="feetFunction()" >
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" id="heightInch" name="heightInch" placeholder="ইঞ্চি" onkeyup="inchFunction()">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="heightCentemtre" name="heightCentemtre" placeholder="সেন্টিমিটার" onkeyup="centimeterFunc()">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-3 col-form-label">২১. কোমরের মাপ</label>
                    <div class="col-sm-1">
                        <input type="number" step="0.01" maxlength="2" class="form-control" id="waistInch" name="wrist"
                               placeholder="ইঞ্চি" onkeyup="waistInchFunc()">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" step="0.01" maxlength="3" class="form-control" id="waistCm" name="wristCM"
                               placeholder="সেন্টিমিটার" onkeyup="waistCmFunc()">
                    </div>

                    <label for="mobile" class="col-sm-2 col-form-label">২২. রক্তচাপ</label>
                    <!--<div class="col-sm-3">
                        <input type="text" class="form-control" id="blood_pressure" name="blood_pressure" placeholder="রক্তচাপ">
                    </div>-->
                    <div class="col-sm-2">
                        <input type="number" step="0.01" class="form-control" maxlength="3" min="60" max="210"id="blood_pressure_sys"  name="blood_pressure_sys" placeholder="সিস্টোলিক" onkeyup="sysDysNotSame()">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" step="0.01" class="form-control" maxlength="3" min="40" max="150" id="blood_pressure_dys"  name="blood_pressure_dys" placeholder="ডায়াস্টোলিক" onkeyup="sysDysNotSame()">
                    </div>
                </div>

                <div class="form-group row">
                    <!--<label for="district" class="col-sm-3 col-form-label">২৩.০ সুগারের মাত্রা</label>
                    <div class="col-sm-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bp_level" id="fsb_bp_level" value="fsb">
                            <label class="form-check-label" for="inlineRadio1">খালি পেটে রক্তে সুগারের মাত্রা</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bp_level" id="rsb_bp_level" value="rsb">
                            <label class="form-check-label" for="inlineRadio2">ভরা পেটে রক্তে সুগারের মাত্রা (Random)</label>
                        </div>
                    </div>-->

                    <label for="age" class="col-sm-3 col-form-label">২৩.০ সুগারের মাত্রা</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="sugerLevel" id="suverLevel" onchange="sugerSelect()">
                            <option value="">সিলেক্ট করুন</option>
                            <option value="1" selected>খালি পেটে রক্তে সুগারের মাত্রা</option>
                            <option value="2">ভরা পেটে রক্তে সুগারের মাত্রা (Random)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="name" class="col-sm-3 col-form-label">২৩.১ খালি পেটে রক্তে সুগারের মাত্রা</label>
                    <div class="col-sm-3" id="fsb_div" style="visibility: visible">
                        <input type="number" class="form-control" step="0.01" id="fsb_mole" maxlength="3"
                               max="40" id="sugarLevelEmpty" name="sugarLevelEmpty" placeholder="মিলিমোল/লি"
                               onkeyup="moleFunc()">
                        <input type="number" class="form-control" step="0.01" id="fsb_gram" maxlength="4"
                               id="sugarLevelFillMG" name="sugarLevelFillMG" placeholder="মিলিগ্রাম" onkeyup="gramFunc()">
                    </div>


                    <label for="age" class="col-sm-3 col-form-label">২৩.২ ভরা পেটে রক্তে সুগারের মাত্রা (Random)</label>
                    <div class="col-sm-3" id="rsb_div" style="visibility: hidden">
                        <input type="number" class="form-control" step="0.01" id="rsb_mole" maxlength="3" max="40"
                               id="sugarLevelFill" name="sugarLevelFill" placeholder="মিলিমোল/লি" onkeyup="r_moleFunc()">
                        <input type="number" class="form-control" step="0.01" id="rsb_gram" maxlength="4"
                               id="sugarLevelFillMG" name="sugarLevelFillMG" placeholder="মিলিগ্রাম" onkeyup="r_gramFunc()">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="age" class="col-sm-3 col-form-label">২৪. চিকিৎসা</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="medical" id="medical" onchange="medicineFunc()">
                            <option value="1">সিলেক্ট করুন</option>
                            <option value="Diet">শুধু খাদ্য নিয়ন্ত্রন</option>
                            <option value="Oralmedicine">মুখে খাওয়ার ঔষধ</option>
                            <option value="Insulin">ইনসুলিন</option>
                            <option value="Insulin And Oralmedicine">ইনসুলিন ও মুখে খাওয়ার ঔষধ</option>
                        </select>
                    </div>
                </div>
                <?php
                    $query_insulin = "SELECT * FROM `insulin_list` WHERE 1 ORDER BY brand ASC";
                    $results_insulin = mysqli_query($db,$query_insulin);
                    $row_insulin = mysqli_fetch_assoc($results_insulin);

                ?>
                <br><br>
                <!--style="visibility: hidden"-->
                <div class="form-group row" id="insulin1" style="visibility: hidden">
                    <label for="mobile" class="col-sm-3 col-form-label">২৫.১ ইনসুলিনের (১) নাম</label>
                    <div class="col-sm-2">
                        <!--<input type="text" class="form-control" id="insulinName1" name="insulinName1" placeholder="ইনসুলিনের নাম">-->
                        <select class="form-control" name="insulinName1" id="insulinName1">

                            <option value="">সিলেক্ট করুন</option>
                            <?php
                            while ($row_insulin = mysqli_fetch_assoc($results_insulin) ) {
                                echo "<option value=".$row_insulin['id'].">".$row_insulin['brand']."</option>";

                                //echo $row_insulin['brand']."<br>";
                            }
                            ?>
                        </select>
                    </div>

                    <label for="mobile" class="col-sm-4 col-form-label">২৫.২ ইনসুলিনের (১) সময়</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="insulinDozeTime1[]" id="insulinDozeTimeMor1" value="Morning">-->
                            <label class="form-check-label" for="insulinDozeTimeMor">সকাল</label>
                            <input type="text" class="form-control" id="insulinDoze1" name="insulinDozeMor1" placeholder=" IU">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="insulinDozeTime1[]" id="insulinDozeTimeDay1" value="Day">-->
                            <label class="form-check-label" for="insulinDozeTimeDay">দুপুর</label>
                            <input type="text" class="form-control" id="insulinDoze1" name="insulinDozeDay1" placeholder=" IU">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="insulinDozeTime1[]" id="insulinDozeTimeNight1" value="Night">-->
                            <label class="form-check-label" for="insulinDozeTimeNight">রাত</label>
                            <input type="text" class="form-control" id="insulinDoze1" name="insulinDozeNight1" placeholder=" IU">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="insulinDozeTime1[]" id="insulinDozeTimeNight1" value="Night">-->
                            <label class="form-check-label" for="insulinDozeBed1">বেড টাইম</label>
                            <input type="text" class="form-control" id="insulinDoze1" name="insulinDozeBed1" placeholder=" IU">
                        </div>
                    </div>

                </div>
                <?php
                    $query_insulin = "SELECT * FROM `insulin_list` WHERE 1 ORDER BY brand ASC";
                    $results_insulin = mysqli_query($db,$query_insulin);
                    $row_insulin = mysqli_fetch_assoc($results_insulin);
                    /*while ($row_insulin = mysqli_fetch_assoc($results_insulin) ) {
                        //echo "<option value=".$row_insulin['generic'].">".$row_insulin['brand']."</option>";
                        echo $row_insulin['brand']."<br>";
                    }*/
                ?>
                <!--style="visibility: hidden"-->
                <div class="form-group row" id="insulin2" style="visibility: hidden">
                    <label for="mobile" class="col-sm-3 col-form-label">২৬.১ ইনসুলিনের (২) নাম</label>
                    <div class="col-sm-2">
                        <!--<input type="text" class="form-control" id="insulinName2" name="insulinName2" placeholder="ইনসুলিনের নাম">-->
                        <select class="form-control" name="insulinName2" id="insulinName2">

                            <option value="">সিলেক্ট করুন</option>
                            <?php
                                while ($row_insulin = mysqli_fetch_assoc($results_insulin) ) {
                                    echo "<option value=".$row_insulin['id'].">".$row_insulin['brand']."</option>";

                                    //echo $row_insulin['brand']."<br>";
                                }
                            ?>
                        </select>
                    </div>
                    <!--<label for="name" class="col-sm-2 col-form-label">২৭.২ ইনসুলিনের (২) ডোজ</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="insulinDoze2" name="insulinDoze2" placeholder=" IU">
                    </div>-->
                    <label for="mobile" class="col-sm-4 col-form-label">২৬.২ ইনসুলিনের (২) সময়</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="insulinDozeTime2[]" id="insulinDozeTimeMor2" value="Morning">-->
                            <label class="form-check-label" for="insulinDozeTimeMor">সকাল</label>
                            <input type="text" class="form-control" id="insulinDoze2" name="insulinDozeMor2" placeholder=" IU">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="insulinDozeTime2[]" id="insulinDozeTimeDay2" value="Day">-->
                            <label class="form-check-label" for="insulinDozeTimeDay">দুপুর</label>
                            <input type="text" class="form-control" id="insulinDoze2" name="insulinDozeDay2" placeholder=" IU">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="insulinDozeTime2[]" id="insulinDozeTimeNight2" value="Night">-->
                            <label class="form-check-label" for="insulinDozeTimeNight">রাত</label>
                            <input type="text" class="form-control" id="insulinDoze2" name="insulinDozeNight2" placeholder=" IU">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="insulinDozeTime1[]" id="insulinDozeTimeNight1" value="Night">-->
                            <label class="form-check-label" for="insulinDozeBed2">বেড টাইম</label>
                            <input type="text" class="form-control" id="insulinDoze1" name="insulinDozeBed2" placeholder=" IU">
                        </div>
                    </div>

                </div>

                <br><br>
                <?php
                $query_medicine = "SELECT * FROM `medicines` WHERE 1 ORDER BY brand ASC";
                $results_medicine = mysqli_query($db,$query_medicine);
                $row_medicine = mysqli_fetch_assoc($results_medicine);
                /*while ($row_medicine = mysqli_fetch_assoc($results_medicine) ) {
                    //echo "<option value=".$row_insulin['generic'].">".$row_insulin['brand']."</option>";
                    echo $row_medicine['brand']."<br>";
                }*/
                ?>
                <div class="form-group row" id="medicine1" style="visibility: hidden">
                    <label for="mobile" class="col-sm-3 col-form-label">২৭.১ ঔষধের (১) নাম</label>
                    <div class="col-sm-2">
                        <!--<input type="text" class="form-control" id="medicineName1" name="medicineName1" placeholder="ঔষধের নাম">-->
                        <select class="form-control" name="medicineName1" id="medicineName1">

                            <option value="">সিলেক্ট করুন</option>
                            <?php
                            while ($row_medicine= mysqli_fetch_assoc($results_medicine) ) {
                                echo "<option value=".$row_medicine['id'].">".$row_medicine['brand']."</option>";
                                //echo $row_insulin['brand']."<br>";
                            }
                            ?>
                        </select>
                    </div>
                    <!--<label for="name" class="col-sm-2 col-form-label">২৮.২ ঔষধের (১) ডোজ</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="medicineDoze1" name="medicineDoze1" placeholder=" mg">
                    </div>-->
                    <label for="mobile" class="col-sm-4 col-form-label">২৭.২ ঔষধের (১) সময়</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="medicineDozeTime1[]" id="medicineDozeTimeMor1" value="Morning">-->
                            <label class="form-check-label" for="medicineDozeTimeMor1">সকাল</label>
                            <input type="text" class="form-control" id="medicineDoze1" name="medicineDozeMor1" placeholder=" ট্যাবলেট">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="medicineDozeTime1[]" id="medicineDozeTimeDay1" value="Day">-->
                            <label class="form-check-label" for="medicineDozeTimeDay1">দুপুর</label>
                            <input type="text" class="form-control" id="medicineDoze1" name="medicineDozeDay1" placeholder=" ট্যাবলেট">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="medicineDozeTime1[]" id="medicineDozeTimeNight1" value="Night">-->
                            <label class="form-check-label" for="medicineDozeTimeNight1">রাত</label>
                            <input type="text" class="form-control" id="medicineDoze1" name="medicineDozeNight1" placeholder=" ট্যাবলেট">
                        </div>
                    </div>

                </div>
                <?php
                $query_medicine = "SELECT * FROM `medicines` WHERE 1 ORDER BY brand ASC";
                $results_medicine = mysqli_query($db,$query_medicine);
                $row_medicine = mysqli_fetch_assoc($results_medicine);
                /*while ($row_medicine = mysqli_fetch_assoc($results_medicine) ) {
                    //echo "<option value=".$row_insulin['generic'].">".$row_insulin['brand']."</option>";
                    echo $row_medicine['brand']."<br>";
                }*/
                ?>
                <div class="form-group row" id="medicine2" style="visibility: hidden">
                    <label for="mobile" class="col-sm-3 col-form-label">২৮.১ ঔষধের (২) নাম</label>
                    <div class="col-sm-2">
                        <!--<input type="text" class="form-control" id="medicineName2" name="medicineName2" placeholder="ঔষধের নাম">-->
                        <select class="form-control" name="medicineName2" id="medicineName2">

                            <option value="">সিলেক্ট করুন</option>
                            <?php
                                while ($row_medicine= mysqli_fetch_assoc($results_medicine) ) {
                                    echo "<option value=".$row_medicine['id'].">".$row_medicine['brand']."</option>";
                                    //echo $row_insulin['brand']."<br>";
                                }
                            ?>
                        </select>
                    </div>
                    <!--<label for="name" class="col-sm-4 col-form-label">২৯.২ ঔষধের (২) ডোজ</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="medicineDoze2" name="medicineDoze2" placeholder=" mg">
                    </div>-->
                    <label for="mobile" class="col-sm-4 col-form-label">২৮.২ ঔষধের (২) সময়</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="medicineDozeTime2[]" id="medicineDozeTimeMor2" value="Morning">-->
                            <label class="form-check-label" for="medicineDozeTimeMor2">সকাল</label>
                            <input type="text" class="form-control" id="medicineDoze2" name="medicineDozeMor2" placeholder=" ট্যাবলেট">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="medicineDozeTime2[]" id="medicineDozeTimeDay2" value="Day">-->
                            <label class="form-check-label" for="medicineDozeTimeDay2">দুপুর</label>
                            <input type="text" class="form-control" id="medicineDoze2" name="medicineDozeDay2" placeholder=" ট্যাবলেট">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="medicineDozeTime2[]" id="medicineDozeTimeNight2" value="Night">-->
                            <label class="form-check-label" for="medicineDozeTimeNight2">রাত</label>
                            <input type="text" class="form-control" id="medicineDoze2" name="medicineDozeNight2" placeholder=" ট্যাবলেট">
                        </div>
                    </div>

                </div>
                <?php
                    $query_medicine = "SELECT * FROM `medicines` WHERE 1 ORDER BY brand ASC";
                    $results_medicine = mysqli_query($db,$query_medicine);
                    $row_medicine = mysqli_fetch_assoc($results_medicine);
                    /*while ($row_medicine = mysqli_fetch_assoc($results_medicine) ) {
                        //echo "<option value=".$row_insulin['generic'].">".$row_insulin['brand']."</option>";
                        echo $row_medicine['brand']."<br>";
                    }*/
                ?>
                <div class="form-group row" id="medicine3" style="visibility: hidden">
                    <label for="mobile" class="col-sm-3 col-form-label">২৯.১ ঔষধের (৩) নাম</label>
                    <div class="col-sm-2">
                        <!--<input type="text" class="form-control" id="medicineName3" name="medicineName3" placeholder="ঔষধের নাম">-->
                        <select class="form-control" name="medicineName3" id="medicineName3">

                            <option value="">সিলেক্ট করুন</option>
                            <?php
                                while ($row_medicine= mysqli_fetch_assoc($results_medicine) ) {
                                    echo "<option value=".$row_medicine['id'].">".$row_medicine['brand']."</option>";
                                    //echo $row_insulin['brand']."<br>";
                                }
                            ?>
                        </select>
                    </div>
                    <!--<label for="name" class="col-sm-2 col-form-label">৩০.২ ঔষধের (৩) ডোজ</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="medicineDoze3" name="medicineDoze3" placeholder=" mg">
                    </div>-->
                    <label for="mobile" class="col-sm-4 col-form-label">২৯.২ ঔষধের (৩) সময়</label>
                    <div class="col-sm-3">
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="medicineDozeTime3[]" id="medicineDozeTimeMor3" value="Morning">-->
                            <label class="form-check-label" for="medicineDozeTimeMor3">সকাল</label>
                            <input type="text" class="form-control" id="medicineDoze3" name="medicineDozeMor3" placeholder=" ট্যাবলেট">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="medicineDozeTime3[]" id="medicineDozeTimeDay3" value="Day">-->
                            <label class="form-check-label" for="medicineDozeTimeDay3">দুপুর</label>
                            <input type="text" class="form-control" id="medicineDoze3" name="medicineDozeDay3" placeholder=" ট্যাবলেট">
                        </div>
                        <div class="form-check form-check-inline">
                            <!--<input class="form-check-input" type="checkbox" name="medicineDozeTime3[]" id="medicineDozeTimeNight3" value="Night">-->
                            <label class="form-check-label" for="medicineDozeTimeNight3">রাত</label>
                            <input type="text" class="form-control" id="medicineDoze3" name="medicineDozeNight3" placeholder=" ট্যাবলেট">
                        </div>
                    </div>

                </div>

                <br>
                <hr>
                <br>
                <div class="container">
                    <p class="blockquote">
                        পৃথিবীর অন্যান্য দেশের মতো বাংলাদেশেও ডায়াবেটিস ও এর সাথে সম্পর্কিত বিভিন্ন জটিলতা দ্রুত বৃদ্ধি পাচ্ছে। নীচে ডায়াবেটিস,
                        গর্ভকালীন ডায়াবেটিস এবং গর্ভধারণ-পূর্ব সেবা সম্পর্কিত কিছু প্রশ্ন করা হয়েছে। আপনার সুচিন্তিত মতামত ভবিষ্যতে বাংলাদেশে ডায়াবেটিস
                        রোগ প্রতিরোধে সাহায্য করবে। আপনার মতামতের পাশে &#9745; দিন।
                    </p>
                </div>
                <br>
                <hr>
                <br>

                <div class="form-group">
                    <label for="name" class="col-md-12 col-form-label">১. ডায়াবেটিস সম্পর্কে আপনার কি কোন পূর্ব ধারনা আছে? </label>
                    <div class="col-md-6">
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="001" id="001" value="Yes">
                                <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="001" id="001" value="No">
                                <label class="form-check-label" for="inlineRadio2">না</label>
                            </div>
                        </div>
                        <!--<div class="custom-control custom-checkbox mr-md-2">
                            <input type="radio" class="custom-control-input" name="001" id="yesPrev" value="Yes">
                            <label class="custom-control-label" for="yesPrev">হ্যাঁ</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="radio" class="custom-control-input" name="001" id="noPrev" value="No" selected>
                            <label class="custom-control-label" for="noPrev">না</label>
                        </div>-->

                    </div>

                    <br>

                    <label for="age" class="col-md-12 col-form-label">২. ডায়াবেটিস এর ঝুঁকি কোনগুলি?</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="002[]" id="overWeight" value="Over Weight" onclick="diabetesRisk()">
                            <label class="custom-control-label" for="overWeight">বেশি ওজোন</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="002[]" id="low_physic" value="Less physical activity" onclick="diabetesRisk()">
                            <label class="custom-control-label" for="low_physic">শারীরিক পরিশ্রম কম হওয়া</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="002[]" id="diabeticHistory" value="Family history of diabetes" onclick="diabetesRisk()">
                            <label class="custom-control-label" for="diabeticHistory">পরিবারে ডায়াবেটিসের ইতিহাস</label>
                        </div>

                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="002[]" id="men_pres" value="Mental pressure" onclick="diabetesRisk()">
                            <label class="custom-control-label" for="men_pres">মানসিক চাপ</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="002[]" id="all_ok" value="All of the above" onclick="diabetesRisk()">
                            <label class="custom-control-label" for="all_ok">সবগুলো ঠিক</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="002[]" id="dontKnowRisks" value="Dont Know" onclick="diabetesRisk()">
                            <label class="custom-control-label" for="dontKnowRisks">জানি না</label>
                        </div>
                    </div>

                    <br>

                    <label for="name" class="col-md-12 col-form-label">৩. ডায়াবেটিস থেকে কি বিভিন্ন ধরণের শারীরিক জটিলতা হতে পারে? </label>
                    <div class="col-md-6">
                        <div class="col-sm-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="003" id="003" value="Yes">
                                <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="003" id="003" value="No">
                                <label class="form-check-label" for="inlineRadio2">না</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="003" id="003" value="No">
                                <label class="form-check-label" for="inlineRadio2">জানি না</label>
                            </div>
                        </div>
                        <!--<div class="custom-control custom-checkbox mr-md-2">
                            <input type="radio" class="custom-control-input" name="003[]" id="yesPhysic" value="Yes">
                            <label class="custom-control-label" for="yesPhysic">হ্যাঁ</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="radio" class="custom-control-input" name="003[]" id="noPhysic" value="No">
                            <label class="custom-control-label" for="noPhysic">না</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="radio" class="custom-control-input" name="003[]" id="dontknowPhysic" value="Dont Know">
                            <label class="custom-control-label" for="dontknowPhysic">জানি না</label>
                        </div>-->
                    </div>

                    <br>

                    <label for="age" class="col-md-12 col-form-label">৪. হ্যাঁ হলে, কোনটি ডায়াবেটিসজনিত জটিলতা?</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="004[]" id="kidneyDiff" value="Kidney failure" onclick="diabetesDiff()">
                            <label class="custom-control-label" for="kidneyDiff">কিডনী বিকল হয়ে যাওয়া</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="004[]" id="heartDiff" value="Heart disease" onclick="diabetesDiff()">
                            <label class="custom-control-label" for="heartDiff">হৃদরোগ</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="004[]" id="strokDiff" value="Stroke or paralysis" onclick="diabetesDiff()">
                            <label class="custom-control-label" for="strokDiff">স্ট্রোক বা পক্ষাঘাত</label>
                        </div>

                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="004[]" id="blindDiff" value="Blindness" onclick="diabetesDiff()">
                            <label class="custom-control-label" for="blindDiff">অন্ধত্ব</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="004[]" id="rottDiff" value="Peptic wounds on the body" onclick="diabetesDiff()">
                            <label class="custom-control-label" for="rottDiff">পায়ে পচনশীল ক্ষত</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="004[]" id="allOkDiff" value="All of the above" onclick="diabetesDiff()">
                            <label class="custom-control-label" for="allOkDiff">সবগুলো সঠিক</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="004[]" id="dontKnowDiff" value="Dont Know" onclick="diabetesDiff()">
                            <label class="custom-control-label" for="dontKnowDiff">জানি না</label>
                        </div>
                    </div>

                    <br>

                    <label for="name" class="col-md-12 col-form-label">৫. ডায়াবেটিস কি প্রতিরোধ করা সম্ভব? </label>
                    <div class="col-md-6">
                        <div class="col-sm-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="005" id="005" value="Yes">
                                <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="005" id="005" value="No">
                                <label class="form-check-label" for="inlineRadio2">না</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="005" id="005" value="No">
                                <label class="form-check-label" for="inlineRadio2">জানি না</label>
                            </div>
                        </div>
                        <!--<div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="005[]" id="yesPrevnt" value="Yes">
                            <label class="custom-control-label" for="yesPrevnt">হ্যাঁ</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="005[]" id="noPrevnt" value="No">
                            <label class="custom-control-label" for="noPrevnt">না</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="005[]" id="dontknowPrevnt" value="Dont Know">
                            <label class="custom-control-label" for="dontknowPrevnt">জানি না</label>
                        </div>-->
                    </div>

                    <br>

                    <label for="name" class="col-md-12 col-form-label">৬. গর্ভাবস্থায় ডায়াবেটিস হতে পারে কিনা? </label>
                    <div class="col-md-6">
                        <div class="col-sm-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="006" id="006" value="Yes">
                                <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="006" id="006" value="No">
                                <label class="form-check-label" for="inlineRadio2">না</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="006" id="006" value="No">
                                <label class="form-check-label" for="inlineRadio2">জানি না</label>
                            </div>
                        </div>
                        <!--<div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="006[]" id="yesPregnant" value="Yes">
                            <label class="custom-control-label" for="yesPregnant">হ্যাঁ</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="006[]" id="noPregnant" value="No">
                            <label class="custom-control-label" for="noPregnant">না</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="006[]" id="dontknowPregnant" value="Dont Know">
                            <label class="custom-control-label" for="dontknowPregnant">জানি না</label>
                        </div>-->
                    </div>

                    <br>

                    <label for="name" class="col-md-12 col-form-label">৭. গর্ভধারনের আগে সঠিক সেবা ভবিষ্যতে ডায়াবেটিস, গর্ভকালীন ডায়াবেটিস ও হৃদরোগের ঝুঁকি কমায়? </label>
                    <div class="col-md-6">
                        <div class="col-sm-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="007" id="007" value="Yes">
                                <label class="form-check-label" for="inlineRadio1">হ্যাঁ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="007" id="007" value="No">
                                <label class="form-check-label" for="inlineRadio2">না</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="007" id="007" value="No">
                                <label class="form-check-label" for="inlineRadio2">জানি না</label>
                            </div>
                        </div>
                        <!--<div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="007[]" id="yesPregnantRight" value="Yes">
                            <label class="custom-control-label" for="yesPregnantRight">হ্যাঁ</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="007[]" id="noyesPregnantRight" value="No">
                            <label class="custom-control-label" for="noyesPregnantRight">না</label>
                        </div>
                        <div class="custom-control custom-checkbox mr-md-2">
                            <input type="checkbox" class="custom-control-input" name="007[]" id="dontknowyesPregnantRight" value="Dont Know">
                            <label class="custom-control-label" for="dontknowyesPregnantRight">জানি না</label>
                        </div>-->
                    </div>

                    <br>
                    <br>

                    <div class="col-md-12">
                        <button type="submit" name="submit_btn" class="btn btn-primary">জমা দিন</button>
                    </div>
                </div>
            </form>
        </div>
        <!--First Form Ends-->
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

        <!-- Optional JavaScript -->
        <script type="text/javascript">
            $("#dhaka_thana").chosen();
            $("#district").chosen();
            $("#insulinName1").chosen();
            $("#insulinName2").chosen();
            $("#medicineName1").chosen();
            $("#medicineName2").chosen();
            $("#medicineName3").chosen();

        </script>
    </body>
</html>

<script language="JavaScript">
    <!--

    function checkMaritalStatus(){
        //married_check
        var mar = document.getElementById("maritialYesRadio");
        var unMar = document.getElementById("maritialNoRadio");
        var married_div = document.getElementById("married_check");
        if (unMar.checked) {
            married_div.style.visibility = "hidden";
        } if (mar.checked) {
            married_div.style.visibility = "visible";
        }

    }

    function moleFunc() {

        var fsb_gram = document.getElementById("fsb_gram");
        var fsb_mole = document.getElementById("fsb_mole");
        var value_fsb_mole = fsb_mole.value;

        var result = value_fsb_mole*18;
        fsb_gram.value = result;
    }

    function gramFunc() {
        var fsb_gram = document.getElementById("fsb_gram");
        var fsb_mole = document.getElementById("fsb_mole");
        var value_fsb_gram = fsb_gram.value;

        var result = value_fsb_gram/18;
        fsb_mole.value = result;
    }

    function r_moleFunc() {

        var fsb_gram = document.getElementById("rsb_gram");
        var fsb_mole = document.getElementById("rsb_mole");
        var value_fsb_mole = fsb_mole.value;

        var result = value_fsb_mole*18;
        fsb_gram.value = result;
    }

    function r_gramFunc() {
        var fsb_gram = document.getElementById("rsb_gram");
        var fsb_mole = document.getElementById("rsb_mole");
        var value_fsb_gram = fsb_gram.value;

        var result = value_fsb_gram/18;
        fsb_mole.value = result;
    }

    function sysDysNotSame() {

        var systolic = document.getElementById("blood_pressure_sys").value;
        var dystolic = document.getElementById("blood_pressure_dys").value;
        if (systolic != 0 ) {
            if(systolic == dystolic) {
                alert("Can not be same !");
            }

        }
        if (parseInt(systolic)<parseInt(dystolic)){
            alert("Wrong Input !");
        }

    }




    function sugerSelect() {

        var selectBox = document.getElementById("suverLevel");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var fsb = document.getElementById("fsb_div");
        var rsb = document.getElementById("rsb_div");
        //fsb.innerHTML = selectedValue;

        if (selectedValue=="1") {
            //		c.style.display="bock";
            fsb.style.visibility = "visible";
            rsb.style.visibility = "hidden";
        } else if (selectedValue=="2"){
            fsb.style.visibility = "hidden";
            rsb.style.visibility = "visible";
        } else {
            fsb.style.visibility = "hidden";
            rsb.style.visibility = "hidden";
        }

    }


    function diabetesRisk() {

        var chkYes = document.getElementById("dontKnowRisks");
        var dvPassport = document.getElementById("overWeight");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("overWeight");
        chkYes.checked ? dvchck.checked = false: checked = true;

        var chkYes = document.getElementById("dontKnowRisks");
        var dvPassport = document.getElementById("low_physic");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("low_physic");
        chkYes.checked ? dvchck.checked = false: checked = true;

        var chkYes = document.getElementById("dontKnowRisks");
        var dvPassport = document.getElementById("diabeticHistory");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("diabeticHistory");
        chkYes.checked ? dvchck.checked = false: checked = true;

        var chkYes = document.getElementById("dontKnowRisks");
        var dvPassport = document.getElementById("men_pres");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("men_pres");
        chkYes.checked ? dvchck.checked = false: checked = true;

        var chkYes = document.getElementById("dontKnowRisks");
        var dvPassport = document.getElementById("all_ok");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("all_ok");
        chkYes.checked ? dvchck.checked = false: checked = true;

    }

    function diabetesDiff() {

        var chkYes = document.getElementById("dontKnowDiff");
        var dvPassport = document.getElementById("kidneyDiff");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("kidneyDiff");
        chkYes.checked ? dvchck.checked = false: checked = true;

        var chkYes = document.getElementById("dontKnowDiff");
        var dvPassport = document.getElementById("heartDiff");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("heartDiff");
        chkYes.checked ? dvchck.checked = false: checked = true;

        var chkYes = document.getElementById("dontKnowDiff");
        var dvPassport = document.getElementById("strokDiff");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("strokDiff");
        chkYes.checked ? dvchck.checked = false: checked = true;

        var chkYes = document.getElementById("dontKnowDiff");
        var dvPassport = document.getElementById("blindDiff");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("blindDiff");
        chkYes.checked ? dvchck.checked = false: checked = true;

        var chkYes = document.getElementById("dontKnowDiff");
        var dvPassport = document.getElementById("rottDiff");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("rottDiff");
        chkYes.checked ? dvchck.checked = false: checked = true;

        var chkYes = document.getElementById("dontKnowDiff");
        var dvPassport = document.getElementById("allOkDiff");
        dvPassport.style.display = chkYes.checked ? "none" : "block";
        var dvchck = document.getElementById("allOkDiff");
        chkYes.checked ? dvchck.checked = false: checked = true;

    }
    
    function medicineFunc() {
        var selectBox = document.getElementById("medical");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var medicine1 = document.getElementById("medicine1");
        var medicine2 = document.getElementById("medicine2");
        var medicine3 = document.getElementById("medicine3");
        var insulin1 = document.getElementById("insulin1");
        var insulin2 = document.getElementById("insulin2");
        //	var c=document.getElementById("thana_list");

        if (selectedValue=="1") {
            //		c.style.display="bock";
            medicine1.style.visibility = "hidden";
            medicine2.style.visibility = "hidden";
            medicine3.style.visibility = "hidden";
            insulin1.style.visibility = "hidden";
            insulin2.style.visibility = "hidden";
        } else if (selectedValue=="Diet"){
            medicine1.style.visibility = "hidden";
            medicine2.style.visibility = "hidden";
            medicine3.style.visibility = "hidden";
            insulin1.style.visibility = "hidden";
            insulin2.style.visibility = "hidden";
        } else if (selectedValue=="Oralmedicine"){
            medicine1.style.visibility = "visible";
            medicine2.style.visibility = "visible";
            medicine3.style.visibility = "visible";
            insulin1.style.visibility = "hidden";
            insulin2.style.visibility = "hidden";
        }else if (selectedValue=="Insulin"){
            medicine1.style.visibility = "hidden";
            medicine2.style.visibility = "hidden";
            medicine3.style.visibility = "hidden";
            insulin1.style.visibility = "visible";
            insulin2.style.visibility = "visible";
        } else {
            medicine1.style.visibility = "visible";
            medicine2.style.visibility = "visible";
            medicine3.style.visibility = "visible";
            insulin1.style.visibility = "visible";
            insulin2.style.visibility = "visible";
        }
    }

    function feetFunction() {
        var inch = 0;
        var result;
        var feet = document.getElementById("heightFeet");
        inch = document.getElementById("heightInch");
        var cm = document.getElementById("heightCentemtre");
        var valueF = feet.value;
        var valueI = inch.value;

        result = valueF*12;
        var final =result*2.54;
        cm.value = final;
    }
    function inchFunction() {
        var inch1,feet1 = 0;
        var result1;
        feet1 = document.getElementById("heightFeet");
        inch1 = document.getElementById("heightInch");
        var cm1 = document.getElementById("heightCentemtre");
        var valueF1= parseInt(feet1.value);
        var valueI1 = parseInt(inch1.value);

        result1 = ((valueF1*12)+ valueI1);
        var final =result1*2.54;
        if (isNaN(final)) {
            cm1.value = valueF1*12;
        } else {
            cm1.value = final;
        }

    }
    function centimeterFunc() {
        var cm =0;
        var feet = document.getElementById("heightFeet");
        var inch = document.getElementById("heightInch");
        cm = document.getElementById("heightCentemtre");
        var valueC = parseFloat(cm.value);
        valueC = valueC/2.54;
        var vf = parseInt(valueC / 12);
        var vi = parseInt(valueC % 12);
        if (isNaN(vf)) {
            feet.value = 0;
        } else {
            feet.value = vf;
        }
        if (isNaN(vi)) {
            inch.value = 0;
        } else {
            inch.value = vi;
        }


    }

    function waistInchFunc() {
        var wInch = document.getElementById("waistInch");
        var wCm = document.getElementById("waistCm");
        var wvalueI = wInch.value;
        var resultCm =wvalueI*2.54;
        resultCm = Number((resultCm).toFixed(2))
        wCm.value = resultCm;
    }

    function waistCmFunc() {
        var wInch = document.getElementById("waistInch");
        var wCm = document.getElementById("waistCm");
        var wvalueC = wCm.value;
        var resultInch = wvalueC /2.54;
        resultInch = Number((resultInch).toFixed(2))
        wInch.value = resultInch;
    }
    //-->
</script>