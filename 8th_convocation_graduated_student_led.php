<?php
ini_set("log_errors", 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/tailwindcss-3.4.16.min.js"></script>
    <title>8th Convocation Card</title>
    <script src="./js/jquery-3.7.1.min.js"></script>
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
        /* Fade-in animation */
          @keyframes fadeIn {
            from {
              opacity: 0;
              transform: translateY(20px);
            }
            to {
              opacity: 1;
              transform: translateY(0);
            }
          }

          /* Fade-out animation */
          @keyframes fadeOut {
            from {
              opacity: 1;
              transform: translateY(0);
            }
            to {
              opacity: 0;
              transform: translateY(20px);
            }
          }

          @keyframes fadeInTop {
              from {
                opacity: 0;
                transform: translateY(-50px); /* Start from 50px above */
              }
              to {
                opacity: 1;
                transform: translateY(0); /* Normal position */
              }
            }

            @keyframes fadeInLeft {
                from {
                  opacity: 0;
                  transform: translateX(-100px); /* Start from 50px to the left */
                }
                to {
                  opacity: 1;
                  transform: translateX(0); /* Normal position */
                }
              }

              /* Apply fade-in animation */
              .fade-in-left {
                opacity: 0; /* Initially hidden */
                animation: fadeInLeft 1s ease-out forwards;
              }

            @keyframes fadeInLeftProfileCard {
                from {
                  opacity: 0;
                  transform: translateX(-300px);
                }
                to {
                  opacity: 1;
                  transform: translateX(0);
                }
              }

              /* Apply fade-in animation */
              .fade-in-left-profile-card {
                opacity: 0; /* Initially hidden */
                animation: fadeInLeft 0.5s ease-out forwards;
              }

            /* Apply fade-in animation */
            .fade-in-top-animation {
              opacity: 0; /* Initially hidden */
              animation: fadeInTop 1s ease-out forwards;
            }

          /* Apply fade-in animation */
          .fade-in-animation {
            opacity: 0; /* Initially hidden */
            animation: fadeIn 1s ease-out forwards;
          }

          /* Apply fade-out animation */
          .fade-out-animation {
            animation: fadeOut 1s ease-out forwards;
          }
    </style>
</head>

<!-- Background 8th convocation logo -->
<div class="absolute inset-0 bg-[url('/img/8th_convocation_logo.png')] bg-center opacity-5"></div>

<body id="body" class="flex flex-col items-center justify-center min-h-screen bg-gray-100 relative overflow-hidden sm:p-0">

<div class="flex min-h-screen w-full items-center overflow-hidden justify-center bg-gray-100 bg-gradient-to-r from-orange-100 to-blue-100">
  <div class="flex w-full flex-col items-center justify-center gap-2 sm:gap-4 fade-in-left">

    <!--Southeast University logo-->
    <div class="z-10 mb-2 flex items-center justify-center px-2">
      <img src="/img/logo-2.png" alt="Southeast University Logo" class="h-20 md:h-28" />
    </div>

    <div class="relative z-10 grid  grid-cols-1 lg:grid-cols-12 sm:w-2/3 h-full md:h-[600px] overflow-hidden rounded-[40px] bg-white p-2 sm:p-6 mx-2 shadow-lg" id="profile-card">

      <!-- Left Side Graduate Image -->
      <div class="md:col-span-5 flex flex-col items-center justify-center">
        <div class="flex items-center justify-center">
          <img id="student-picture" src="img/8th_convocation_logo.png" alt="Graduate Image" class="h-[200px] md:h-[250px] lg:h-[500px] w-[150px] md:w-[225px] lg:w-[400px] rounded-full border-gray-300 fade-in-animation" />
        </div>
      </div>

      <!-- Right Side -->
      <div class="md:col-span-7 flex flex-col pl-6 text-center">

        <!-- Congrats Image -->
        <div class="mx-auto flex w-full items-center justify-center fade-in-top-animation" id="congrats">
          <img src="/img/congrats-removebg.png" alt="Congratulation Logo" class="w-[90%]" />
        </div>

        <!-- Personal Details -->
        <div class="mt-4 md:mt-6 md:mt-10 flex flex-col items-center justify-center fade-in-animation" id="profile-details">
          <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-yellow-800" id="student-name">TO OUR PROUD GRADUATES</h2>
          <p class="mt-4 md:mt-6 lg:mt-10 text-xl md:text-2xl lg:text-3xl font-medium text-gray-700 " id="departmentName"></p>
          <p class="mt-2 md:mt-4 text-xl md:text-2xl lg:text-3xl text-gray-700 hidden" id="passing-year">Completion Semester: <span class="font-semibold" id="passing-year-2">Fall 2019</span></p>
        </div>

        <!-- convocation people logo -->
        <div class="mx-auto absolute bottom-0">
          <img src="/img/convocation_people_2.png" alt="Congratulation Logo" class="w-[100%] opacity-5 -mb-10"/>
        </div>
      </div>
    </div>

  </div>
</div>

<input type="text" id="code" name="code" style="opacity: 0; position: absolute; left: -9999px;">

<!-- <input type="text" id="code" name="code">-->

<div class = "w-full flex flex-col item-center justify-center">
<div id="preloader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
    <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-blue-500"></div>
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
<script type="text/javascript" src="js/custom_led.js"></script>
</body>

</html>
