<?php include("./includes/functions.php"); ?>
<!DOCTYPE html>
<html lang="en" class="<?php if (is_dark_mode()) echo 'dark'; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//assets//css//tailwind.output.css">
    <script defer src=".//assets//js//darkMode.js"></script>
    <title>Doctors Portal: Login</title>
</head>

<body class="dark:bg-slate-900 dark:text-slate-400">
    <a href="./" class="absolute left-2 top-2 rounded-lg rotate-90 hover:cursor-pointer hover:-translate-y-1 hover:opacity-90 transition-all"><img src=".//assets//images//down-arrow.png" height="35" width="35" title="Home Page"></img></a>
    <img class="darkModeBTN absolute right-2 top-2 dark:bg-white bg-slate-400 rounded-lg hover:cursor-pointer hover:-translate-y-1 hover:opacity-90 transition-all" src=".//assets//images//theme_light_dark_icon.png" height="35" width="35"></img>
    <div class="flex h-screen justify-center">
        <form action="./login.php" method="post" class="flex flex-col self-center">
            <h1 class="self-center text-3xl font-extrabold m-4 text-green-400">Login</h1>
            <input type="email" name="email" placeholder="Email" class="m-2 rounded-md p-1 w-96 text-black border border-black dark:border-0">
            <input type="password" name="password" placeholder="Password" class="m-2 rounded-md p-1 w-96 text-black border border-black dark:border-0">
            <input type="submit" value="Login" class="hover:cursor-pointer m-2 rounded-md p-2 w-fit self-center border-2 border-black dark:border-green-950 bg-green-400 dark:text-green-950 hover:-translate-y-1 hover:opacity-90 transition-all">
        </form>
    </div>
</body>

</html>