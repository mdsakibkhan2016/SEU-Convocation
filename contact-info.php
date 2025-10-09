<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.php"); ?>

    <?php
        $programs = [
            "Admission & Promotion Office" => [
                [
                    "Sl" => 6,
                    "Name" => "",
                    "Designation" => "",
                    "Mobile" => ["01885532554"],
                    "Extension" => "124",
                    "E-mail" => "admission@seu.edu.bd"
                ]
            ],
            "Controller of Examinations Office" => [
                [
                    "Sl" => 6,
                    "Name" => "",
                    "Designation" => "",
                    "Mobile" => [],
                    "Extension" => "261",
                    "E-mail" => "info.exam@seu.edu.bd"
                ]
            ],
            "Department of Computer Science & Engineering" => [
                [
                    "Sl" => 6,
                    "Name" => "Md. Abu Sayed",
                    "Designation" => "Senior Officer",
                    "Mobile" => ["01712135835"],
                    "Extension" => "671",
                    "E-mail" => "abu.sayed@seu.edu.bd"
                ],
                [
                    "Sl" => 7,
                    "Name" => "Md. Amran Hossain",
                    "Designation" => "Asst. Officer",
                    "Mobile" => ["01845905713"],
                    "Extension" => "672",
                    "E-mail" => "amran.hossain@seu.edu.bd"
                ]
            ],
            "Department of Electrical and Electronic Engineering" => [
                [
                    "Sl" => 10,
                    "Name" => "Md: Manowar",
                    "Designation" => "Asst. Officer",
                    "Mobile" => ["01718763252"],
                    "Extension" => "401",
                    "E-mail" => "md.manowar@seu.edu.bd"
                ],
                [
                    "Sl" => 11,
                    "Name" => "Farah Diba Orin",
                    "Designation" => "Asst. Officer",
                    "Mobile" => ["01915867482"],
                    "Extension" => "401",
                    "E-mail" => "farah.diba@seu.edu.bd"
                ]
            ],
            "Department of Textile Engineering" => [
                [
                    "Sl" => 8,
                    "Name" => "Md. Miraz Sharif",
                    "Designation" => "Asst. Officer",
                    "Mobile" => ["01992165546", "01518472813"],
                    "Extension" => "202",
                    "E-mail" => "miraz.sharif@seu.edu.bd"
                ],
                [
                    "Sl" => 9,
                    "Name" => "Md. Saharuzzaman",
                    "Designation" => "Asst. Officer",
                    "Mobile" => ["01919993435"],
                    "Extension" => "202",
                    "E-mail" => "saharuzzaman@seu.edu.bd"
                ]
            ],
            "Department of Architecture" => [
                [
                    "Sl" => 12,
                    "Name" => "",
                    "Designation" => "",
                    "Mobile" => [],
                    "Extension" => "151",
                    "E-mail" => ""
                ]
            ],
            "Department of Pharmacy" => [
                [
                    "Sl" => 13,
                    "Name" => "ASM Muquit Reza",
                    "Designation" => "Officer",
                    "Mobile" => ["01911536364"],
                    "Extension" => "732",
                    "E-mail" => "asm.muquit@seu.edu.bd"
                ],
                [
                    "Sl" => 14,
                    "Name" => "Jannatul Fardous",
                    "Designation" => "Asst. Officer",
                    "Mobile" => ["01533791977"],
                    "Extension" => "732",
                    "E-mail" => "jannatul.fardous@seu.edu.bd"
                ]
            ],
            "Southeast Business School" => [
                [
                    "Sl" => 1,
                    "Name" => "Md. Nuruzzaman Miah",
                    "Designation" => "Senior Officer",
                    "Mobile" => ["01716459601"],
                    "Extension" => "649",
                    "E-mail" => "nuruzzaman.miah@seu.edu.bd"
                ],
                [
                    "Sl" => 2,
                    "Name" => "Kaikobad Hossain",
                    "Designation" => "Senior Officer",
                    "Mobile" => ["01827981489"],
                    "Extension" => "647",
                    "E-mail" => "kaikobad.hossain@seu.edu.bd"
                ],
                [
                    "Sl" => 3,
                    "Name" => "Effat Ara Enam",
                    "Designation" => "Officer",
                    "Mobile" => ["01680053494"],
                    "Extension" => "648",
                    "E-mail" => "effat.enam@seu.edu.bd"
                ],
                [
                    "Sl" => 4,
                    "Name" => "Sadika Akter Tanni",
                    "Designation" => "Asst. Officer",
                    "Mobile" => ["01686236214"],
                    "Extension" => "648",
                    "E-mail" => "sadika@seu.edu.bd"
                ],
                [
                    "Sl" => 5,
                    "Name" => "Md. Selim Reza",
                    "Designation" => "Lab Asst.",
                    "Mobile" => ["01723867353"],
                    "Extension" => "648",
                    "E-mail" => "selim.reza@seu.edu.bd"
                ]
            ],
            "Department of Economics" => [
                [
                    "Sl" => 17,
                    "Name" => "Raina Harun",
                    "Designation" => "Asst. Officer",
                    "Mobile" => ["01631644407"],
                    "Extension" => "702",
                    "E-mail" => "raina.harun@seu.edu.bd"
                ]
            ],
            "Department of English" => [
                [
                    "Sl" => 18,
                    "Name" => "Tahmina Akhtar",
                    "Designation" => "Senior Officer",
                    "Mobile" => ["01743911578"],
                    "Extension" => "713",
                    "E-mail" => "tahmina@seu.edu.bd"
                ],
                [
                    "Sl" => 19,
                    "Name" => "Md. Morshed Alam",
                    "Designation" => "Asst. Officer",
                    "Mobile" => ["01517845429"],
                    "Extension" => "713",
                    "E-mail" => "morshed.alam@seu.edu.bd"
                ]
            ],
            "Department of Law" => [
                [
                    "Sl" => 16,
                    "Name" => "Nurul Amin",
                    "Designation" => "Officer",
                    "Mobile" => ["01911399904"],
                    "Extension" => "802",
                    "E-mail" => "nurul.amin@seu.edu.bd"
                ]
            ],
            "Department of  Bangla" => [
                [
                    "Sl" => 15,
                    "Name" => "Sabana Sultana",
                    "Designation" => "Senior Officer",
                    "Mobile" => ["01732227063"],
                    "Extension" => "822",
                    "E-mail" => "sabana.sultana@seu.edu.bd"
                ]
            ]
        ];
    ?>
</head>

<body class="bg-gray-100">

    <?php include("includes/nav.php"); ?>


    <section id="contact" data-aos="fade-down" class="py-24 bg-white">
        <div class="container">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">Contact Information</h2>
                    <p class="text-base font-medium text-gray-500 max-w-xl">Preferred communication method is email and preferred time for phone calls is from 09.00 AM to 5.00 PM.</p>
                </div>
            </div><!-- flex end -->

            <div class="flex md:hidden">
                <?php
                    echo '<table class="w-full table-auto bg-white border border-gray-300">';
                    echo '<thead>
                                <tr>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Name</th>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Contact</th>
                                </tr>
                            </thead>';
                    echo '<tbody>';

                    foreach ($programs as $program => $staff) {
                        echo '<tr>';
                        echo '<td colspan="2" class="px-4 py-2 border-b bg-gray-100 text-lg font-semibold">' . htmlspecialchars($program) . '</td>';
                        echo '</tr>';

                        foreach ($staff as $person) {
                            echo '<tr>';
                            echo '<td class="px-4 py-2 border-b">';
                            echo '<p class="text-sm font-bold">' . htmlspecialchars($person['Name']) . '</p>';
                            echo '<p>' . htmlspecialchars($person['Designation']) . '</p>';
                            echo '</td>';

                            echo '<td class="px-4 py-2 border-b">';
                            echo '<p class="text-sm font-bold"><a href="mailto:' . htmlspecialchars($person['E-mail']) . '" target="_blank">' . htmlspecialchars($person['E-mail']) . '</a></p>';
                            foreach ($person['Mobile'] as $mobile) {
                                echo '<p><a href="tel:+880' . substr($mobile, 1) . '">Mobile: ' . htmlspecialchars($mobile) . '</a></p>';
                            }
                            echo '<p><a href="tel:+8802226603610">Extension: ' . htmlspecialchars($person['Extension']) . '</a></p>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    }

                    echo '</tbody></table>';
                ?>

            </div>

            <div class="flex hidden md:block lg:hidden">

                <?php
                    echo '<table class="w-full table-auto bg-white border border-gray-300">';
                    echo '<thead>
                                <tr>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Name</th>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Contact</th>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Email</th>
                                </tr>
                            </thead>';
                    echo '<tbody>';

                    foreach ($programs as $program => $staff) {
                        echo '<tr>';
                        echo '<td colspan="3" class="px-4 py-2 border-b bg-gray-100 text-lg font-semibold">' . htmlspecialchars($program) . '</td>';
                        echo '</tr>';

                        foreach ($staff as $person) {
                            echo '<tr>';
                            echo '<td class="px-4 py-2 border-b">';
                            echo '<p class="text-sm font-bold">' . htmlspecialchars($person['Name']) . '</p>';
                            echo '<p>' . htmlspecialchars($person['Designation']) . '</p>';
                            echo '</td>';

                            echo '<td class="px-4 py-2 border-b">';
                            foreach ($person['Mobile'] as $mobile) {
                                echo '<p><a href="tel:+880' . substr($mobile, 1) . '">Mobile: ' . htmlspecialchars($mobile) . '</a></p>';
                            }
                            echo '<p><a href="tel:+8802226603610">Extension: ' . htmlspecialchars($person['Extension']) . '</a></p>';
                            echo '</td>';

                            echo '<td class="px-4 py-2 border-b">';
                            echo '<p class="text-sm font-bold"><a href="mailto:' . htmlspecialchars($person['E-mail']) . '" target="_blank">' . htmlspecialchars($person['E-mail']) . '</a></p>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    }

                    echo '</tbody></table>';
                ?>

            </div>

            <div class="flex hidden lg:block">
                <?php
                    echo '<table class="w-full table-auto bg-white border border-gray-300">';
                    echo '<thead>
                                <tr>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Name</th>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Designation</th>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-center">Mobile</th>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-center">Extension</th>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Email</th>
                                </tr>
                            </thead>';
                    echo '<tbody>';

                    foreach ($programs as $program => $staff) {
                        echo '<tr>';
                        echo '<td colspan="5" class="px-4 py-2 border-b bg-gray-100 text-lg font-semibold">' . htmlspecialchars($program) . '</td>';
                        echo '</tr>';

                        foreach ($staff as $person) {
                            echo '<tr>';
                            echo '<td class="px-4 py-2 border-b"><p class="text-sm font-bold">' . htmlspecialchars($person['Name']) . '</p></td>';
                            echo '<td class="px-4 py-2 border-b"><p>' . htmlspecialchars($person['Designation']) . '</p></td>';
                            echo '<td class="px-4 py-2 border-b text-center">';
                            foreach ($person['Mobile'] as $mobile) {
                                echo '<p><a href="tel:+880' . substr($mobile, 1) . '">' . htmlspecialchars($mobile) . '</a></p>';
                            }
                            echo '</td>';
                            echo '<td class="px-4 py-2 border-b text-center"><p><a href="tel:+8802226603610">' . htmlspecialchars($person['Extension']) . '</a></p></td>';
                            echo '<td class="px-4 py-2 border-b"><p class="text-sm font-bold"><a href="mailto:' . htmlspecialchars($person['E-mail']) . '" target="_blank">' . htmlspecialchars($person['E-mail']) . '</a></p></td>';
                            echo '</tr>';
                        }
                    }

                    echo '</tbody></table>';
                ?>

            </div>

        </div>
    </section>


    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>

</body>

</html>
