<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.php"); ?>

    <?php
        $booths = [
            [
                'Bank Name' => 'Al-Arafah Islami Bank Ltd',
            ],
            [
                'Bank Name' => 'Midland Bank Ltd',
            ],
            [
                'Bank Name' => 'BRAC Bank Ltd (CDM)',
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
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">Bank Booth Information</h2>
                    <p class="text-base font-medium text-gray-500 max-w-xl">You can pay the convocation fee at the booth located in the University lobby before filling out the form using the deposit slip or money receipt generated from UMS. Make sure that you have mentioned your student code in the deposit slip.</p>
                </div>
            </div><!-- flex end -->

            <div class="">
                <?php
                    echo '<table class="w-full table-auto bg-white border border-gray-300">';
                    echo '<thead>
                                <tr>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Bank Booth Name</th>
                                </tr>
                            </thead>';
                    echo '<tbody>';

                        foreach ($booths as $booth) {
                            echo '<tr>';
                            echo '<td class="px-4 py-2 border-b text-left"><p>' . htmlspecialchars($booth['Bank Name']) . '</p></td>';
                            echo '</tr>';
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
