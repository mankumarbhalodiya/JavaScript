<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

    <h1>Man Bhalodiya - Portfolio</h1>

    <div class="box">
        <h2>About Me</h2>
        <p>
            My name is Man Bhalodiya. I am pursuing a degree in 
            Information and Communication Technology in Marwadi University.
            I am learning HTML, CSS, JavaScript, PHP and Laravel.
            I want to become a web developer.
            I am interested in real-world projects and problem solving.
        </p>
    </div>

    <div class="box">
        <h2>Skills</h2>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>Laravel</li>
        </ul>
    </div>

    <div class="box">
        <h2>Hobbies</h2>
        <ul>
            <li>Gaming</li>
            <li>Play Cricket</li>
            <li>Coding</li>
            <li>Learning New Technology</li>
        </ul>
    </div>

    <div class="box">
        <h2>Projects</h2>

        <p><b>Voice Assistance AI</b></p>
        <button onclick="openPopup('project1')">View Details</button>

        <p><b>Wireless TMT Heart Monitoring System</b></p>
        <button onclick="openPopup('project2')">View Details</button>
    </div>

<div class="box">
    <h2>Contact</h2>
    <p>Email: manbhalodiya0@gmail.com</p>
    <p>Phone: 9081135404</p>

    <p>
        Github:
        <a href="https://github.com/mankumarbhalodiya" target="_blank">
            Visit My GitHub
        </a>
    </p>
</div>

    <div class="box">
        <h2>Resume</h2>

        <p>You can download my resume below:</p>

        <a href="{{ asset('resume/resume_man.pdf') }}" download class="download-btn">
            Download my Resume
        </a>
    </div>
</div>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>

        <h2 id="popup-title"></h2>
        <p id="popup-text"></p>
    </div>
</div>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>