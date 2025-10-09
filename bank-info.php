<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.php"); ?>

    <?php
        $bankAccounts = [
            [
                'Bank Name' => 'Al-Arafah Islami Bank Ltd',
                'Account Number' => '1851020002303',
            ],
            [
                'Bank Name' => 'Midland Bank Ltd',
                'Account Number' => '0002-1050003643',
            ],
            [
                'Bank Name' => 'BRAC Bank Ltd',
                'Account Number' => '1507200853926001',
            ],
            [
                'Bank Name' => 'Prime Bank Ltd',
                'Account Number' => '20731050002617',
            ],
            [
                'Bank Name' => 'Dhaka Bank Ltd',
                'Account Number' => '0206150000001033',
            ],
            [
                'Bank Name' => 'Shahjalal Islami Bank Ltd',
                'Account Number' => '401313100000030',
            ],
        ];
    ?>
</head>

<body class="bg-gray-100">

    <?php include("includes/nav.php"); ?>


    <section id="contact" data-aos="fade-down" class="py-24 bg-white">
        <div class="container">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">Bank Information</h2>
                    <p class="text-base font-medium text-gray-500 max-w-xl">You can deposit the convocation fee directly at the listed bank or through Internet Banking before filling out the form. Make sure that you have mentioned your student code in the deposit slip.</p>
                </div>
            </div><!-- flex end -->

            <div class="">
                <?php
                    echo '<table class="w-full table-auto bg-white border border-gray-300">';
                    echo '<thead>
                                <tr>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Bank Name</th>
                                    <th class="px-4 py-2 border-b bg-gray-200 text-left">Account Number</th>
                                </tr>
                            </thead>';
                    echo '<tbody>';

                        foreach ($bankAccounts as $bankAccount) {
                            echo '<tr>';
                            echo '<td class="px-4 py-2 border-b text-left"><p>' . htmlspecialchars($bankAccount['Bank Name']) . '</p></td>';
                            echo '<td class="px-4 py-2 border-b text-left"><p>' . htmlspecialchars($bankAccount['Account Number']) . '</p></td>';
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
