<?php include 'includes/functions.php';

if (isset($_SESSION['user_id'])){
    header("Location: templates/dashboard.php");
    exit;
}

else { ?>
    <!DOCTYPE html>
    <html lang="en" class="scroll-smooth <?php if (is_dark_mode()) echo 'dark'; ?>">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/tailwind.output.css">
        <link rel="stylesheet" href="./assets/css/index.styles.css">
        <title>Doctors Portal</title>
        <script src=".//assets//js//scroll.js" defer></script>
        <script src=".//assets//js//darkMode.js" defer></script>
    </head>

    <body class="dark:bg-slate-900 bg-white">
        <header class="bgIMG">
            <!-- <div class="bgIMG"></div> -->
            <div class="top-20 left-2 sm:left-10 rounded-lg bg-gradient-to-r from-green-400 p-5 hover:-translate-y-1 hover:opacity-90 transition-all text-green-900 flex justify-between sticky w-11/12">
                <h1 class="font-extrabold text-2xl hover:cursor-pointer md:text-3xl"><a href="./">Doctors Portal</a></h1>
                <nav>
                    <ul class="flex">
                        <li class="bg-green-400 rounded-l-lg p-1 hover:-translate-y-1 transition-transform">
                            <a href="login.php">login</a>
                        </li>
                        <li class="bg-green-400 p-1 hover:-translate-y-1 transition-transform">
                            <a href="register.php">register</a>
                        </li>
                        <img class="darkModeBTN bg-green-400 rounded-r-lg p-1 hover:-translate-y-1 transition-transform hover:cursor-pointer" src=".//assets//images//theme_light_dark_icon.png" height="30" width="30"></img>
                    </ul>
                </nav>
            </div>
        </header>

        <a href="#welcome" class="mt-2 flex justify-center hover:opacity-90"><img src="./assets/images/down-arrow.png" alt="down arrow" height="40" width="40"></a>

        <main class="md:m-32 dark:text-slate-400 text-sm md:text-xl m-10">
            <h2 class="text-2xl text-center my-36 reveal" id="welcome">Welcome to my Doctors Portal</h2>
            <section id="about" class="mb-32">
                <img src="assets/images/DoctorIMG.jpg" alt="Doctor" class="w-60 h-auto float-right rounded-lg hover:-translate-y-1 hover:opacity-90 transition-all lg:ml-10 md:ml-2 md:block hidden" id="docIMG">
                <p class="xl:mt-20 reveal">
                    Our platform connects doctors, patients, and administrative staff for efficient healthcare management. Whether you're a seasoned physician or a new practitioner, our portal streamlines your daily tasks and enhances patient care.
                </p>
            </section>
            <section class="mb-32">
                <table class="border-collapse border-spacing-1 reveal">
                    <caption class="text-left pb-1">
                        <h2>Key Features:</h2>
                    </caption>
                    <tr>
                        <th scope="row" class="border border-black dark:border-slate-400 text-center p-2 hover:bg-slate-900 hover:text-slate-400 dark:hover:bg-white dark:hover:text-black transition-colors duration-300">Appointment Management</th>
                        <td class="border border-black dark:border-slate-400 p-2 hover:bg-slate-900 hover:text-slate-400 dark:hover:bg-white dark:hover:text-black transition-colors duration-300">Schedule, reschedule, or cancel appointments with ease. View upcoming appointments and relevant patient information.</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border border-black dark:border-slate-400 text-center p-2 hover:bg-slate-900 hover:text-slate-400 dark:hover:bg-white dark:hover:text-black transition-colors duration-300">Patient Records</th>
                        <td class="border border-black dark:border-slate-400 p-2 hover:bg-slate-900 hover:text-slate-400 dark:hover:bg-white dark:hover:text-black transition-colors duration-300">Access comprehensive patient profiles, including medical history, diagnoses, and treatment plans.</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border border-black dark:border-slate-400 text-center p-2 hover:bg-slate-900 hover:text-slate-400 dark:hover:bg-white dark:hover:text-black transition-colors duration-300">Secure Communication</th>
                        <td class="border border-black dark:border-slate-400 p-2 hover:bg-slate-900 hover:text-slate-400 dark:hover:bg-white dark:hover:text-black transition-colors duration-300">Communicate securely with patients and other staff members. Exchange messages, share lab reports, and discuss treatment options.</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border border-black dark:border-slate-400 text-center p-2 hover:bg-slate-900 hover:text-slate-400 dark:hover:bg-white dark:hover:text-black transition-colors duration-300">Prescription Generation</th>
                        <td class="border border-black dark:border-slate-400 p-2 hover:bg-slate-900 hover:text-slate-400 dark:hover:bg-white dark:hover:text-black transition-colors duration-300">Create digital prescriptions for medications, tests, and procedures. Maintain a history of prescribed treatment.</td>
                    </tr>
                </table>
            </section>
            <p class="revealFast">
                Get started by logging in or creating an account. Our user-friendly interface ensures a seamless experience across devices.
            </p>
        </main>

        <div class="footerPlaceHolder m-9"></div>

        <footer class="fixed bottom-0 w-full text-center bg-green-400 p-2 hover:opacity-80 transition-opacity flex flex-row justify-evenly">
            <a href="https://github.com/AmirMS90" class="hover:-translate-y-1 transition-transform"><img src="./assets/images/github-mark-white.png" alt="Github icon" title="github profile" width="25" height="25" /></a>
            <a href="https://x.com/amir_ms90" class="hover:-translate-y-1 transition-transform"><img src="./assets/images/x-social-media-white-icon.png" alt="X twitter icon" title="My X" width="25" height="25" /></a>
            <a href="mailto:Wk8pX@example.com" class="hover:-translate-y-1 transition-transform"><img src="./assets/images/gmail.png" alt="Gmail icon" title="Email me!" width="25" height="25" /></a>
        </footer>
    </body>

    </html>
<?php } ?>