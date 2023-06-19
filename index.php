<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Tab</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-gray-900 text-white">
    <nav class="navbar">
        <span class="welcome">Welcome <span>User</span></span>
        <span class="time">Current time: <span id="time"></span></span>
        <ul class="navbar-menu">
            <li>Settings</li>
            <li>Something</li>
        </ul>
    </nav>
    <div class="flex flex-col items-center justify-center h-56">
        <form action="https://www.google.com/search" method="GET" class="text-center mb-8 form-container">
            <input type="text" id="searchQuery" name="q" placeholder="Search the World Wide Web." class="p-3 bg-gray-800 text-white rounded-lg text-xl input-field">
        </form>
    </div>


    <div id="apps-container">
        <a href="https://stackoverflow.com/">
            <img src="assets/img/stackoverflow.png" style="height: 24px; width: 24px; ">
            <div class="label">
                <span class="name">StackOverflow</span>
                <span class="url">stackoverflow.com</span>
            </div>
        </a>
        <a href="https://www.youtube.com/">
            <img src="assets/img/youtube.png" style="height: 24px; width: 24px; ">
            <div class="label">
                <span class="name">YouTube</span>
                <span class="url">youtube.com</span>
            </div>
        </a>
        <a href="https://chat.openai.com/">
            <img src="assets/img/openai.png" style="height: 24px; width: 24px; ">
            <div class="label">
                <span class="name">ChatGPT</span>
                <span class="url">chat.openai.com</span>
            </div>
        </a>
        <a href="https://mail.google.com/">
            <img src="assets/img/gmail.png" style="height: 24px; width: 24px; ">
            <div class="label">
                <span class="name">Gmail</span>
                <span class="url">mail.google.com</span>
            </div>
        </a>
        <a href="https://open.spotify.com/">
            <img src="assets/img/spotify.png" style="height: 24px; width: 24px; ">
            <div class="label">
                <span class="name">Spotfy</span>
                <span class="url">open.spotify.com</span>
            </div>
        </a>
        <a href="https://github.com/">
            <img src="assets/img/github.png" style="height: 24px; width: 24px; ">
            <div class="label">
                <span class="name">GitHub</span>
                <span class="url">github.com</span>
            </div>
        </a>
        <a href="https://www.netflix.com/">
            <img src="assets/img/netflix.png" style="height: 24px; width: 24px; ">
            <div class="label">
                <span class="name">Netflix</span>
                <span class="url">netflix.com</span>
            </div>
        </a>
        <a href="https://store.steampowered.com/">
            <img src="assets/img/steam.png" style="height: 24px; width: 24px; ">
            <div class="label">
                <span class="name">Steam</span>
                <span class="url">store.steampowered.com</span>
            </div>
        </a>
    </div>
</body>

<script src="assets/script/script.js"></script>

</html>