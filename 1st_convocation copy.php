<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.php"); ?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-gray-100">

    <?php include("includes/nav.php"); ?>

    <section class="py-16" data-aos="fade-down">
        <div class="container mx-auto relative overflow-hidden rounded-lg shadow-lg">
            <div class="flex transition-transform duration-700" id="slider-wrapper">
                <div class="min-w-full h-80 md:h-96 lg:h-[500px] overflow-hidden">
                    <img src="https://i.ytimg.com/vi/Voa9J8rO6WE/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYAC0AWKAgwIABABGGUgTShGMA8=&rs=AOn4CLCha3AGCLIleRcjEsIUjteEQjCMOQ" alt="Slide 1" class="w-full h-full object-cover">
                </div>
                <div class="min-w-full h-80 md:h-96 lg:h-[500px] overflow-hidden">
                    <img src="https://www.observerbd.com/2022/07/21/observerbd.com_1658412514.jpg" alt="Slide 2" class="w-full h-full object-cover">
                </div>
                <div class="min-w-full h-80 md:h-96 lg:h-[500px] overflow-hidden">
                    <img src="https://www.shutterstock.com/image-photo/dhaka-bangladesh-asia-university-pacific-600nw-2597113199.jpg" alt="Slide 3" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" data-aos="fade-up">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">1st Convocation</h2>
                <p class="text-gray-600 text-lg mb-8">
                    1st Convocation of Southeast University was held on
                    <span class="font-semibold">2nd February, 2024</span>
                </p>
                <img src="./img/graduation-hats.gif" alt="12th Convocation" class="mx-auto md:mx-0 w-80">
            </div>

            <div data-aos="fade-left">
                <h3 class="text-lg font-bold text-gray-800 mb-6">Program Details</h3>
                <ul class="space-y-4 text-gray-700 font-medium">
                    <li class="border-b pb-2">PROGRAM INDEX</li>
                    <li class="border-b pb-2">SPEECHES</li>
                    <li class="border-b pb-2">COMMITTEE</li>
                    <li class="border-b pb-2">SOUVENIR</li>
                    <li class="border-b pb-2">EXPLANATORY NOTE</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white" id="messages">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-3" data-aos="zoom-in">MESSAGES</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                $messages = [
                    [
                        "name" => "Md. Abdul Hamid",
                        "title" => "PRESIDENT",
                        "org" => "People's Republic of Bangladesh",
                        "img" => "./img/default_profile.png",
                        "msg" => "I am delighted to know that Daffodil International University is going to hold its 7th Convocation..."
                    ],
                    [
                        "name" => "Sheikh Hasina",
                        "title" => "PRIME MINISTER",
                        "org" => "Government of the People’s Republic of Bangladesh",
                        "img" => "./img/default_profile.png",
                        "msg" => "Education is the backbone of a nation. Our government has taken initiatives.I congratulate the students and faculty members for their achievements.I congratulate the students and faculty members for their achievements
                        I congratulate the students and faculty members for their achievements. I congratulate the students and faculty members for their achievements, I congratulate the students and faculty members for their achievements .."
                    ],
                    [
                        "name" => "Nurul Islam Nahid M.P.",
                        "title" => "EDUCATION MINISTER",
                        "org" => "Government of the People’s Republic of Bangladesh",
                        "img" => "./img/default_profile.png",
                        "msg" => "I congratulate the students and faculty members for their achievements I congratulate the students and faculty members for their I congratulate the students and faculty members for their..."
                    ],
                    [
                        "name" => "Professor Abdul Mannan",
                        "title" => "CHAIRMAN",
                        "org" => "University Grants Commission of Bangladesh",
                        "img" => "./img/default_profile.png",
                        "msg" => "It gives me immense pleasure to share this moment with graduates..."
                    ]
                ];

                $delay = 0;
                foreach ($messages as $index => $m) {
                    echo '
                <div class="bg-gray-50 p-6 rounded-lg text-center shadow-lg"
                     data-aos="fade-up" data-aos-delay="' . $delay . '">
                    <img class="w-28 h-28 rounded-full mx-auto mb-4 border-4 border-white shadow" src="' . $m['img'] . '" alt="' . $m['name'] . '">
                    <h3 class="font-semibold text-gray-800">' . $m['name'] . '</h3>
                    <p class="text-orange-500 text-sm">' . $m['title'] . '</p>
                    <p class="text-gray-500 mt-1 text-sm">' . $m['org'] . '</p>
                    <button onclick="openMessage(' . $index . ')" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700">View Message</button>
                </div>';
                    $delay += 100; // stagger each card
                }
                ?>
            </div>
        </div>
    </section>



    <section class="py-24 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-3" data-aos="zoom-in">GOLD MEDALISTS</h2>
                <div class="flex justify-center space-x-8 text-gray-500 font-medium" data-aos="fade-up" data-aos-delay="100">
                    <button class="tab-btn text-gray-800 border-b-2 border-transparent pb-2 hover:text-gray-900 active" data-tab="chancellor">Chancellor Goldmedalist</button>
                    <button class="tab-btn" data-tab="vicechancellor">Vice Chancellor's Gold Medal</button>
                </div>
            </div>

            <div id="tab-contents">



                <div class="tab-content" id="chancellor">

                    <!-- 2019 -->
                    <div class="1st">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4" data-aos="zoom-in">
                            Chancellor Gold Medalists - 2019
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $chancellor2019 = [
                                ["name" => "Chandrima Chakraborty", "program" => "Textile Engineering", "id" => "2016000400060", "medal" => "CM", "mobile" => "01749406117","type"=>"Chancellor Gold Medalists - 2019", "img" => "./img/gold_medalist/2016000400060 Chandrima Chakraborty.jpeg"],
                            ];
                            $delay = 0;
                            foreach ($chancellor2019 as $c) {
                                echo '
                                <div class="bg-gray-50 p-6 rounded-lg text-center shadow-lg"
                                    data-aos="fade-up" data-aos-delay="' . $delay . '">
                                    <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" 
                                        src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                    <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                    <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                    <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                                    <p class="text-gray-500 text-sm">' . $c['type'] . '</p>
                                </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>
                    </div>

                    <!-- 2020 -->
                    <div class="2nd">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4" data-aos="zoom-in">
                            Chancellor Gold Medalists - 2020
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $chancellor2020 = [
                                ["name" => "Ariful Karim", "program" => "B. Pharm (Hons)", "id" => "2017000300005", "medal" => "CM", "mobile" => "01319420828", "img" => "./img/gold_medalist/2017000300005 Ariful Karim.jpg"],
                            ];
                            $delay = 0;
                            foreach ($chancellor2020 as $c) {
                                echo '
                                <div class="bg-gray-50 p-6 rounded-lg text-center shadow-lg"
                                    data-aos="fade-up" data-aos-delay="' . $delay . '">
                                    <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" 
                                        src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                    <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                    <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                    <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                                </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>
                    </div>

                    <!-- 2021 -->
                    <div class="3rd">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4" data-aos="zoom-in">
                            Chancellor Gold Medalists - 2021
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $chancellor2021 = [
                                ["name" => "Rema Rani Paul", "program" => "BBA", "id" => "2018010000105", "medal" => "CM", "mobile" => "01707024957", "img" => "./img/gold_medalist/Rema Rani Paul.jpg"],
                            ];
                            $delay = 0;
                            foreach ($chancellor2021 as $c) {
                                echo '
                                <div class="bg-gray-50 p-6 rounded-lg text-center shadow-lg"
                                    data-aos="fade-up" data-aos-delay="' . $delay . '">
                                    <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" 
                                        src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                    <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                    <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                    <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                                </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="4th">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4" data-aos="zoom-in">
                            Chancellor Gold Medalists - 2022
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $chancellor2022 = [
                                ["name" => "Sumaia Aktar", "program" => "B. Pharm (Hons)", "id" => "2018100300034", "medal" => "CM", "mobile" => "01988485896", "img" => "./img/gold_medalist/Sumaia Aktar.png"],
                            ];
                            $delay = 0;
                            foreach ($chancellor2022 as $c) {
                                echo '
                                <div class="bg-gray-50 p-6 rounded-lg text-center shadow-lg"
                                    data-aos="fade-up" data-aos-delay="' . $delay . '">
                                    <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" 
                                        src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                    <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                    <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                    <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                                </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>
                    </div>

                    <!-- 2023 -->
                    <div class="5th">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4" data-aos="zoom-in">
                            Chancellor Gold Medalists - 2023
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $chancellor2023 = [
                                ["name" => "Habiba Khanom Lubna", "program" => "B. Pharm (Hons)", "id" => "2019100300074", "medal" => "CM", "mobile" => "01833276333", "img" => "./img/gold_medalist/2019100300074 Habiba Khanom Lubna.png"],
                            ];
                            $delay = 0;
                            foreach ($chancellor2023 as $c) {
                                echo '
                                <div class="bg-gray-50 p-6 rounded-lg text-center shadow-lg"
                                    data-aos="fade-up" data-aos-delay="' . $delay . '">
                                    <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" 
                                        src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                    <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                    <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                    <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                                </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>
                    </div>

                </div>


                <div class="tab-content hidden" id="vicechancellor">
                    <!-- 2019 -->
                    <div class="1st mb-9">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4">Vice Chancellor Gold Medalists - 2019</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                            <?php
                            $vice = [
                                ["name" => "Takiba Hasan", "Rep" => "Ryan Hassan Diyab (Brother)", "program" => "B. Pharm", "id" => "2016000300129", "medal" => "VCM", "mobile" => "01817593359", "img" => "./img/gold_medalist/2016000300129 Takiba Hasan.jpeg"],
                                ["name" => "Muntasir Mahmud", "Rep" => "Kawsar Bin Rahman (Cousin)", "program" => "BA (Hons) in English", "id" => "2015220200015", "medal" => "VCM", "mobile" => "+4748655178, 01683707407", "img" => "./img/gold_medalist/2015220200015 Muntasir Mahmud.jpg"],
                                ["name" => "Rubiya Amin", "program" => "BBA", "id" => "2015010000412", "medal" => "VCM", "mobile" => "01771741060", "img" => "./img/gold_medalist/2015010000412 Rubiya Amin.jpg"],
                                ["name" => "Md Jahangir Alom", "program" => "MBA (1Year)", "id" => "2019010004042", "medal" => "VCM", "mobile" => "01751159281", "img" => "./img/gold_medalist/2019010004042 Md Jahangir Alom.jpg"],
                                ["name" => "Md. Tawhidur Rahman", "Rep" => "Shakira Sabrin Salek (Wife)", "program" => "MDS", "id" => "2018020100009", "medal" => "VCM", "mobile" => "01717272123", "img" => "./img/gold_medalist/2018020100009 Md. Tawhidur Rahman.jpeg"],

                            ];
                            $delay = 0;
                            foreach ($vice as $c) {
                                echo '<div class="bg-gray-50 p-6 rounded-lg text-center" data-aos="fade-up" data-aos-delay="' . $delay . '">
                                <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                              </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>
                    </div>

                    <div class="2nd mb-9">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4">Vice Chancellor Gold Medalists - 2020</h2>

                        <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $vice = [
                                ["name" => "Md. Barkat Zannat", "Rep" => "Mrs. Gibunnesha (Mother)", "program" => "BBA", "id" => "2017010000231", "medal" => "VCM", "mobile" => "01732692998, 01716596823", "img" => "./img/gold_medalist/2017010000231 Md. Barkat Zannat.jpg"],
                                ["name" => "Mahbub Ahmed", "program" => "BSc in CSE", "id" => "2016100000007", "medal" => "VCM", "mobile" => "01986347911", "img" => "./img/gold_medalist/2016100000007 Mahbub Ahmed.jpeg"],
                                ["name" => "Md. Pavel Sarker", "program" => "LLB Hons", "id" => "2016120300034", "medal" => "VCM", "mobile" => "01681189938", "img" => "./img/gold_medalist/2020120301005 Md. Pavel Sarker.jpeg"],
                                ["name" => "Md. Nuruddin Jongi", "program" => "MBA (1Year)", "id" => "2019210004072", "medal" => "VCM", "mobile" => "01715751204", "img" => "./img/gold_medalist/2019210004072 Md. Nuruddin Jongi.jpg"],
                                ["name" => "Md. Israfil Hossain", "program" => "MA in Bangla", "id" => "2019120502006", "medal" => "VCM", "mobile" => "01711710388", "img" => "./img/gold_medalist/sayedur.rahman Md. Israfil Hossain.jpg"]

                            ];
                            $delay = 0;
                            foreach ($vice as $c) {
                                echo '<div class="bg-gray-50 p-6 rounded-lg text-center" data-aos="fade-up" data-aos-delay="' . $delay . '">
                                <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                 <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                              </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>

                    </div>
                    <div class="3rd">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4">Vice Chancellor Gold Medalists - 2021</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $vice = [
                                ["name" => "Sara Yesmin", "program" => "B. Pharm (Hons)", "id" => "2018000300130", "medal" => "VCM", "mobile" => "01687300559", "img" => "./img/gold_medalist/Sara Yesmin.jpeg"],
                                ["name" => "Md. Rubayet Hasan Sourov", "program" => "BBA", "id" => "2017110000026", "medal" => "VCM", "mobile" => "01521436274", "img" => "./img/gold_medalist/2021110004028 Md. Rubayet Hasan Sourov.jpeg"],
                                ["name" => "Farhana Sultana Taposi", "program" => "LLB Hons", "id" => "2018020300044", "medal" => "VCM", "mobile" => "01788283616", "img" => "./img/gold_medalist/2022020301029 Farhana Sultana Taposi.jpeg"],
                                ["name" => "Tasibul Hasan", "program" => "MBA (1year)", "id" => "2021010004105", "medal" => "VCM", "mobile" => "01797435924", "img" => "./img/gold_medalist/Tasibul Hasan.jpg"],
                                ["name" => "Mohit Lal Sarkar", "program" => "MA in Bangla", "id" => "2020220502001", "medal" => "VCM", "mobile" => "01970632543", "img" => "./img/gold_medalist/Mohit Lal Sarkar.jpg"]

                            ];
                            $delay = 0;
                            foreach ($vice as $c) {
                                echo '<div class="bg-gray-50 p-6 rounded-lg text-center" data-aos="fade-up" data-aos-delay="' . $delay . '">
                                <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                 <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                              </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>

                    </div>
                    <div class="4th">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4">Vice Chancellor Gold Medalists - 2022</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $vice = [
                                ["name" => "Md. Al-Shahriar Ayon", "program" => "BBA", "id" => "2019110000032", "medal" => "VCM", "mobile" => "01843641562", "img" => "./img/gold_medalist/2019110000032 Md. Al-Shahriar Ayon.jpg"],
                                ["name" => "Azizur Rahman Shubh", "program" => "Textile Engineering", "id" => "2018100400013", "medal" => "VCM", "mobile" => "01870029175", "img" => "./img/gold_medalist/2018100400013 Azizur Rahman Shubh.jpg"],
                                ["name" => "Shohel Mondol", "program" => "BA (Hon's) in Bangla", "id" => "2019020501012", "medal" => "VCM", "mobile" => "01304149175", "img" => "./img/gold_medalist/2019020501012_frr04k2c.jpg"],
                                ["name" => "Anisul Haque Khandaker", "program" => "MBA (Regular)", "id" => "2020210001007", "medal" => "VCM", "mobile" => "01729069418", "img" => "./img/gold_medalist/2020210001007 Anisul Haque Khandaker.jpeg"],
                                ["name" => "Faheun Sultana", "program" => "MA in Bangla", "id" => "2022020502004", "medal" => "VCM", "mobile" => "01997422780", "img" => "./img/gold_medalist/2022020502004 Faheun Sultana.jpg"]

                            ];
                            $delay = 0;
                            foreach ($vice as $c) {
                                echo '<div class="bg-gray-50 p-6 rounded-lg text-center" data-aos="fade-up" data-aos-delay="' . $delay . '">
                                <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                 <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                              </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>

                    </div>
                    <div class="5th">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4">Vice Chancellor Gold Medalists - 2023</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $vice = [
                                ["name" => "Fahmida Islam", "program" => "BBA", "id" => "2019210000026", "medal" => "VCM", "mobile" => "01323633488", "img" => "./img/gold_medalist/2019210000026 Fahmida Islam.jpg"],
                                ["name" => "Md. Miraz Hossain", "program" => "BSc in CSE", "id" => "2019100000024", "medal" => "VCM", "mobile" => "01614148864", "img" => "./img/gold_medalist/2019100000024 Md. Miraz Hossain.jpg"],
                                ["name" => "Sharmin Akter", "program" => "BSS in Economics", "id" => "2020020106004", "medal" => "VCM", "mobile" => "01777851178", "img" => "./img/gold_medalist/2020020106004 Sharmin Akter.jpg"],
                                ["name" => "Jarin Tasnim", "program" => "MBA (1year)", "id" => "2022210004015", "medal" => "VCM", "mobile" => "01992163263", "img" => "./img/gold_medalist/2022210004015 Jarin Tasnim.jpg"],
                                ["name" => "Selina Yeasmin", "program" => "LLM (Final)", "id" => "2022220301011", "medal" => "VCM", "mobile" => "01729227228", "img" => "./img/gold_medalist/2018220300011 Selina Yeasmin.jpg"]

                            ];
                            $delay = 0;
                            foreach ($vice as $c) {
                                echo '<div class="bg-gray-50 p-6 rounded-lg text-center" data-aos="fade-up" data-aos-delay="' . $delay . '">
                                <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                 <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                              </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>

                    </div>
                    <div class="6th">
                        <h2 class="text-2xl font-bold text-gray-500 mb-4">Vice Chancellor Gold Medalists - Special</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-9">
                            <?php
                            $vice = [
                                ["name" => "Md. Ashraful Islam", "program" => "EEE", "id" => "2016000500052", "medal" => "VCM", "mobile" => "01887731234", "img" => "./img/gold_medalist/2016000500052_Md. Ashraful Islam.jpg"],
                                ["name" => "Arifa Tamanna", "program" => "B.Arch", "id" => "2016100600009", "medal" => "VCM", "mobile" => "01945732782", "img" => "./img/gold_medalist/2016100600009 Arifa Tamanna.jpeg"]

                            ];
                            $delay = 0;
                            foreach ($vice as $c) {
                                echo '<div class="bg-gray-50 p-6 rounded-lg text-center" data-aos="fade-up" data-aos-delay="' . $delay . '">
                                <img class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow" src="' . $c['img'] . '" alt="' . $c['name'] . '">
                                <h3 class="font-semibold text-gray-800">' . $c['name'] . '</h3>
                                <p class="text-orange-400 text-sm">ID: ' . $c['id'] . '</p>
                                 <p class="text-gray-500 text-sm">Dept: ' . $c['program'] . '</p>
                              </div>';
                                $delay += 100;
                            }
                            ?>
                        </div>

                    </div>




                </div>







            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>

    <script>
        const tabs = document.querySelectorAll(".tab-btn");
        const contents = document.querySelectorAll(".tab-content");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                // Remove active from all tabs
                tabs.forEach(t => t.classList.remove("active", "border-b-2", "border-gray-800", "text-gray-800"));
                // Hide all contents
                contents.forEach(c => c.classList.add("hidden"));
                // Activate current tab
                tab.classList.add("active", "border-b-2", "border-gray-800", "text-gray-800");
                document.getElementById(tab.dataset.tab).classList.remove("hidden");

                // Re-initialize AOS after a new tab is shown
                AOS.refresh();
            });
        });

        // Initial AOS refresh to ensure elements are animated correctly on page load
        window.addEventListener('load', () => {
            AOS.refresh();
        });
    </script>

    <script>
        const sliderWrapper = document.getElementById("slider-wrapper");
        const totalSlides = sliderWrapper.children.length;
        let index = 0;

        function nextSlide() {
            index = (index + 1) % totalSlides;
            sliderWrapper.style.transform = `translateX(-${index * 100}%)`;
        }

        // Auto slide every 3 seconds
        setInterval(nextSlide, 3000);
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Modal -->
    <div id="messageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2 relative p-6">
            <!-- Close Button -->
            <button onclick="closeMessage()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800">&times;</button>

            <div class="flex flex-col md:flex-row gap-6">
                <img id="modalImg" class="w-32 h-32 rounded-lg border shadow" src="" alt="">
                <div>
                    <h3 id="modalName" class="text-xl font-bold text-gray-800"></h3>
                    <p id="modalTitle" class="text-orange-500 font-medium"></p>
                    <p id="modalOrg" class="text-gray-600 text-sm mb-4"></p>
                    <p id="modalMsg" class="text-gray-700 leading-relaxed"></p>
                </div>
            </div>
        </div>
    </div>



    <script>
        const messages = <?php echo json_encode($messages); ?>;

        function openMessage(index) {
            const m = messages[index];
            document.getElementById("modalImg").src = m.img;
            document.getElementById("modalName").innerText = m.name;
            document.getElementById("modalTitle").innerText = m.title;
            document.getElementById("modalOrg").innerText = m.org;
            document.getElementById("modalMsg").innerText = m.msg;

            document.getElementById("messageModal").classList.remove("hidden");
            document.getElementById("messageModal").classList.add("flex");
        }

        function closeMessage() {
            document.getElementById("messageModal").classList.add("hidden");
            document.getElementById("messageModal").classList.remove("flex");
        }
    </script>

    <script>
        // Disable AOS animations on mobile
        document.addEventListener("DOMContentLoaded", function() {
            const isMobile = window.innerWidth < 768; // Tailwind's md breakpoint
            if (isMobile) {
                // Select all elements with data-aos
                document.querySelectorAll("[data-aos]").forEach(el => {
                    el.removeAttribute("data-aos");
                    el.removeAttribute("data-aos-delay");
                });
            }
        });
    </script>



</body>

</html>