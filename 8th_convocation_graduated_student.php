<?php


// Get request parameters
$encryptedData = $_GET['token'] ?? null;
$code = $_GET['code'] ?? null;

if (empty($encryptedData) || empty($code)) {
    // Redirect if token or code is missing
    header("Location: index.php?error=Invalid-request");
    exit();
}



function decryptAES($encryptedData, $secretKey, $salt) {
    $encryptedData = base64_decode(strtr($encryptedData, '-_', '+/')); // Decode from Base64

    $key = hash_pbkdf2("sha256", $secretKey, $salt, 65536, 32, true);

    $iv = substr($encryptedData, 0, 16); // Extract IV
    $encryptedText = substr($encryptedData, 16); // Extract Encrypted Text

    $decrypted = openssl_decrypt($encryptedText, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv);

    return $decrypted;
}

// Secret key and salt (must match Java)
$secretKey = "p3Vb6Yq@!mKzD#sX9vLfT4wG";
$salt = "aB7z*NcPqJtY2dX@M5rK8V!W";


$decryptedData = decryptAES($encryptedData, $secretKey, $salt);

if (!$decryptedData) {
    // Redirect if decryption fails
    header("Location: error.php?error=Invalid-token");
    exit();
}


// Split the decrypted data (assuming format: XXX-YYY-ZZZ)
$dataParts = explode("-", $decryptedData);
$decryptedCode = $dataParts[0] ?? null;

if ($decryptedCode === $code) {
    // Redirect to success page
    // header("Location: success.php?code=" . urlencode($code));
    // exit();
} else {
    // Redirect if code doesn't match
    header("Location: error.php?error=Security-mismatch");
    exit();
}


// echo "Decrypted Data: " . $decryptedData;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>8th Convocation Card</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- <link rel="icon" type="image/png" sizes="32x32" href="assets/image/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="assets/image/favicon-16x16.png">
     <link rel="icon" type="image/png" href="assets/image/favicon-16x16.png" />
     <link rel="icon" href="assets/image/favicon.ico" type="image/x-icon" />-->
    <style>
        @keyframes confetti {
            0% { transform: translateY(-100vh) rotate(0deg); opacity: 1; }
            100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
        }
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: red;
            opacity: 0.1;
            animation: confetti 5s linear infinite;
        }

        /* Keyframes for the congratulatory background animation */
        @keyframes congratulationAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Apply the animation to the card background */
        .congratulation-bg {
            background: linear-gradient(270deg, #d71820, #fad0c4, #fbc2eb, #a6c1ee, #84fab0);
            background-size: 400% 400%;
            animation: congratulationAnimation 10s ease infinite;
        }

        /* Gold medalist effect */
        .gold-effect {
            background: linear-gradient(270deg, #ffd700, #ffcc00, #ffeb3b, #f8e366);
            background-size: 400% 400%;
            animation: congratulationAnimation 6s ease infinite;
        }
        .gold-effect2 {
            background: linear-gradient(270deg, rgba(255, 215, 0, 0.78), rgba(255, 204, 0, 0.75), rgba(255, 235, 59, 0.71), rgba(248, 227, 102, 0.83));
            background-size: 400% 400%;
            animation: congratulationAnimation 3s ease infinite;
        }
    </style>


</head>

<!--<body class="flex items-center justify-center min-h-screen bg-gray-100 relative overflow-hidden pl-4 pr-4 sm:p-0 ">

    <div class="">8th Convocation</div>
<div id="preloader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
    <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-blue-500"></div>
</div>
<div id="main-content" class="max-w-3xl h-[300px] w-full bg-white shadow-lg shadow-blue-100 rounded-2xl text-center relative z-10 -mt-60 sm:-mt-40 ">
    <div class="text-center font-semibold border p-2 rounded-t-xl mb-2 bg-blue-50 text-xl text-blue-800">🎉 Congratulations 🎉</div>
    <div class="w-[400px] h-[500px] sm:h-[470px] w-full bg-white shadow-lg rounded-2xl p-6 text-center">
        <img class="w-56 h-60 mx-auto rounded-xl border-4 border-blue-200 -mt-2" id="student-picture" src="" alt="Graduate Image">
        <h2 class="mt-4 text-3xl font-semibold text-blue-800" id="student-name">-</h2>
        <h2 class="hidden mt-3 mb-2 text-xl font-semibold text-green-800 animate-pulse" id="goldMadelChancellor">Chancellor's Gold Medal 🥇</h2>
        <h2 class="hidden mt-3 mb-2 text-xl font-semibold text-green-800 animate-pulse" id="goldMadelVice">Vice Chancellor's Gold Medal 🥇</h2>
        <div class="text-lg  mt-1 text-blue-800 " id="departmentName">-</div>
        <hr class="w-full border-t my-8" id="css">
        <div class="text-gray-700 font-medium text-green-700 flex flex-row  text-center justify-center animate-pulse ">
            <div class="hidden sm:block"><img class="w-5 h-5 mx-min mt-0.5" src="img/verify.png" alt="Graduate Image"></div>
            <div class="ml-1">Proud Graduate of Southeast University</div>
        </div>
    </div>
</div>

<script>
    window.onload = () => {
        createConfetti();
        setInterval(createConfetti, 1000);
    };
    function createConfetti() {
        for (let i = 0; i < 100; i++) {
            const confetti = document.createElement("div");
            confetti.classList.add("confetti");
            confetti.style.left = Math.random() * 100 + "vw";
            confetti.style.top = "-10px";
            confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 50%)`;
            confetti.style.animationDuration = Math.random() * 3 + 2 + "s";
            confetti.style.width = Math.random() * 10 + 5 + "px";
            confetti.style.height = confetti.style.width;
            document.body.appendChild(confetti);
            setTimeout(() => confetti.remove(), 5000);
        }
    }
</script>
<script type="text/javascript" src="js/custom.js"></script>
</body>-->
<body id="body" class="flex flex-col items-center justify-center min-h-screen bg-gray-100 relative overflow-hidden pl-4 pr-4 sm:p-0 ">
<div id="preloader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
    <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-blue-500"></div>
</div>
<!-- 8th Convocation Title Outside of Main Content -->
<div id="header" class="flex flex-row hidden">
    <div class="ml-8"><img class="w-12 h-12 mx-min mt-6 ml-4" src="img/logo.png"></div>
    <h1 class="text-3xl sm:text-5xl font-bold text-blue-900 mt-6 text-center  "><div class="ml-2">8<sup>th</sup> Convocation</div></h1>
</div>


<div id="main-content" class="max-w-3xl w-full  rounded-2xl text-center relative -mt-4 sm:-mt-2 p-6 z-10 hidden">
    <div class="text-center font-semibold border p-2 rounded-t-xl bg-blue-900 text-xl text-white ">🎉 Congratulations 🎉</div>
    <!--<div class="absolute  bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold text-lg hidden mt-1 ml-2" id="goldBadge">
        🥇 Gold Medalist
    </div>-->

    <div id="cardEffectDiv" class="w-[400px] bg-white w-full shadow-lg rounded-b-2xl p-6 text-center ">

        <div class="text-center">
            <!-- Graduate Image -->
            <img class="w-48 sm:w-56 h-52 sm:h-60 mx-auto rounded-xl border-4 border-blue-200 -mt-2" id="student-picture" src="" alt="Graduate Image">

            <!-- Student Name -->
            <h2 class="mt-4 text-2xl sm:text-3xl font-semibold text-blue-800" id="student-name">-</h2>

            <!-- Gold Medal Section - Centered -->
            <div class="flex flex-col items-center mt-2 space-y-2">
                <h2 class="bg-blue-700 text-white px-3 py-1 rounded-full text-xs sm:text-md font-semibold text-center w-44 hidden" id="goldBadge">🥇 Gold Medalist</h2>
                <hr id="goldMadelLine" class="w-full  border-blue-900 hidden" id="css">
                <div id="goldMadelDiv" class="mt-2 hidden">
                    <h2 class="hidden text-md sm:text-xl font-semibold text-blue-800 animate-pulse text-center mt-3" id="goldMadelChancellor">CHANCELLOR'S GOLD MEDAL</h2>
                    <h2 class="hidden text-md sm:text-xl font-semibold text-blue-800 animate-pulse text-center mt-3" id="goldMadelVice">VICE CHANCELLOR'S GOLD MEDAL</h2>
                </div>
            </div>

            <!-- Department Name -->
            <div class="text-lg mt-1 text-blue-800 font-semibold" id="departmentName">-</div>

            <hr class="w-full border-t my-8  border-blue-900" id="css">

            <!-- Verification Text -->
            <div class="text-gray-700 font-medium text-green-700 flex flex-row text-center justify-center animate-pulse">
                <div class="hidden sm:block"><img class="w-5 h-5 mx-min mt-0.5" src="img/verify.png" alt="Graduate Image"></div>
                <div class="ml-1">Proud Graduate of Southeast University</div>
            </div>
        </div>
    </div>

</div>

<script>
    window.onload = () => {
        createConfetti();
        setInterval(createConfetti, 1000);
    };
    function createConfetti() {
        for (let i = 0; i < 100; i++) {
            const confetti = document.createElement("div");
            confetti.classList.add("confetti");
            confetti.style.left = Math.random() * 100 + "vw";
            confetti.style.top = "-10px";
            confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 50%)`;
            confetti.style.animationDuration = Math.random() * 3 + 2 + "s";
            confetti.style.width = Math.random() * 10 + 5 + "px";
            confetti.style.height = confetti.style.width;
            document.body.appendChild(confetti);
            setTimeout(() => confetti.remove(), 5000);
        }
    }
</script>
<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>
