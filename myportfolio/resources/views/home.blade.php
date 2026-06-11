<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="sidebar">
    <div class="profile">
        <img src="{{ asset('image/profile.jpeg') }}" class="profile-img" alt="Profile">
        <h3 class="name">Man Bhalodiya</h3>
        <h4 class="work">Learner</h4>
    </div>

<ul class="self">

    <li onclick="showSection('home')">🏠 Home</li>

    <li onclick="showSection('skills')">💻 Skills</li>

    <li onclick="showSection('certificates')">🏆 Certificates</li>

    <li onclick="showSection('projects')">📁 Projects</li>

    <li onclick="showSection('hobbies')">🎮 Hobbies</li>

    <li onclick="showSection('about')">👤 About</li>

    <li onclick="showSection('contact')">📞 Contact</li>

    <li class="available-box">
        🟢 <span class="dot"></span>
        <span id="statusText">Online</span>
    </li>
</ul>

    <!-- Home -->
    <div class="content">
    <div id="home" class="section">
        <h1>Home</h1>
        <p>
        Welcome to my portfolio!
        </p>
        <p>
        Hi, I'm Man Bhalodiya
        </p>
        <p>
        Student & Aspiring Full-Stack Developer
</p>    
        <p>
        I am a passionate learner currently diving deep 
        into web development.
        </p>
    <p>
        I love building functional, clean, and interactive
        websites using backend frameworks and modern frontend technologies. 
    </p> 
        <p>
        Scroll down to see my journey, skills extra.
        </p>
    </div>

    <!-- Skills -->
    <div id="skills" class="section">

    <h1>Skills</h1>

    <div class="skills-container">
        <div class="skill-box"><h3>HTML</h3></div>
        <div class="skill-box"><h3>CSS</h3></div>
        <div class="skill-box"><h3>JavaScript</h3></div>
        <div class="skill-box"><h3>PHP</h3></div>
        <div class="skill-box"><h3>Laravel</h3></div>
        <div class="skill-box"><h3>My Sql</h3></div>
        <div class="skill-box"><h3>DVD</h3></div>
        <div class="skill-box"><h3>Ardiuno IDE</h3></div>
        <div class="skill-box"><h3>DVD</h3></div>

    </div>

</div>

    <!-- Certificates -->
    <div id="certificates" class="section">

    <h1>Certificates</h1>

    <div class="project-box">
        <h3>Microsoft Power BI</h3>
        <a href="{{ asset('certificates/Power_BI.pdf') }}" target="_blank" class="btn">View</a>
        <a href="{{ asset('certificates/Power_BI.pdf') }}" download class="btn">Download</a>
    </div>

    <div class="project-box">
        <h3>Learning Python for Data Science</h3>
        <a href="{{ asset('certificates/Learning_Python_for_Data_Science.pdf') }}" target="_blank" class="btn">View</a>
        <a href="{{ asset('certificates/Learning_Python_for_Data_Science.pdf') }}" download class="btn">Download</a>
    </div>

    <div class="project-box">
        <h3>Oracel Database Management System</h3>
        <a href="{{ asset('certificates/oracel.pdf') }}" target="_blank" class="btn">View</a>
        <a href="{{ asset('certificates/oracel.pdf') }}" download class="btn">Download</a>
    </div>

    <div class="project-box">
        <h3>udemy Web Development</h3>
        <a href="{{ asset('certificates/udemy.pdf') }}" target="_blank" class="btn">View</a>
        <a href="{{ asset('certificates/udemy.pdf') }}" download class="btn">Download</a>
    </div>

    <div class="project-box">
        <h3>Business Intelligence using Advanced Excel and Power BI</h3>
        <a href="{{ asset('certificates/excelr.pdf') }}" target="_blank" class="btn">View</a>
        <a href="{{ asset('certificates/excelr.pdf') }}" download class="btn">Download</a>
    </div>

</div>
    <!-- Projects -->
    <div id="projects" class="section">

        <h1>Projects</h1>

        <div class="project-box">

            <h3>AI Voice Assistant</h3>

            <button onclick="toggleProject('p1')">
                Know More
            </button>

            <div id="p1" class="project-detail">

                <p>
                    Built a voice-controlled AI assistant using Python with speech recognition and text-to-speech functionality.
                    Implemented commands for opening applications, websites, and playing music to provide basic automation
                    and user interaction.
                </p>
                <p>
                    • Built using Python.
                </p>

                <p>
                    • Uses Speech Recognition and Text-to-Speech.
                </p>

                <p>
                    • Can open websites, applications and play music.
                </p>

            </div>

        </div>

        <div class="project-box">

            <h3>Wireless TMT Heart Monitoring System</h3>

            <button onclick="toggleProject('p2')">
                Know More
            </button>

            <div id="p2" class="project-detail">

                <p>
                    developed a wireless ECG monitoring system using Python and Flask for real-time heart signal monitoring
                    and visualization. Implemented sensor data processing, ECG graph generation, and heart rate analysis for
                    healthcare monitoring applications.
                </p>

                <p>
                    Key Features:
                </p>

                <p>
                    • Improve heart signal accuracy and monitoring performance.
                </p>
                <p>
                    • Add mobile application support for remote monitoring.
                </p>
                <p>
                    • Integrate cloud storage for patient data records.
                </p>


            </div>

        </div>

    </div>

    <!-- Hobbies -->
    <div id="hobbies" class="section">

        <h1>Hobbies</h1>
<div class="skill-box"><h3>💻 Coding</h3></div>

<div class="skill-box"><h3>🚀 Learning New Technologies</h3></div>

<div class="skill-box"><h3>🎵 Listening to Music</h3></div>

<div class="skill-box"><h3>🎮 Gaming</h3></div>

    </div>

    <!-- About -->
    <div id="about" class="section">
        <h1>About Me</h1>

        <p>
            My name is Man Bhalodiya.
        </p>

        <p>
            i am Pursuing B.Tech in Information and Communication Technology
        </p>
        <p>
            i study in Marwadi University
        </p> 
        <p>
            I am learning Web Development and Laravel.
        </p>

        <p>
            My goal is to become a Full Stack Developer.
        </p>
        <p>
            Relevant Coursework : OOP,DBMS, Web Technologies, Data Structures.
        </p>

    </div>

    <!-- Contact -->
    <div id="contact" class="section">

    <h1>📞 Contact</h1>

    <p>👤 Name : Man Bhalodiya</p>

    <p>📱 Phone : +91 9xxxx3xxxx</p>

    <p>📧 Email :
        <a href="mailto:manbhalodiya0@gmail.com">
            manbhalodiya0@gmail.com
        </a>
    </p>    

    <p>💼 LinkedIn :
        <a href="https://www.linkedin.com/in/mankumar-bhalodiya-6a9587411"
            target="_blank">
            View LinkedIn
        </a>
    </p>

    <p>💻 GitHub :
        <a href="https://github.com/mankumarbhalodiya"
            target="_blank">
            view Github
        </a>
    </p>

    <p>📍 Location : Rajkot, India</p>

            </div>

        </div>

    </div>
</div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

