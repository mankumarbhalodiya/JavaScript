function openPopup(project) {

    let title = document.getElementById("popup-title");
    let text = document.getElementById("popup-text");

    if (project === "project1") {
        title.innerText = "Voice Assistance AI";
text.innerText = `Built a voice-controlled AI assistant using Python with speech recognition and text-to-speech functionality.Implemented commands for opening applications, websites, and playing music to provide basic automation.`;
    }

    if (project === "project2") {
        title.innerText = "Wireless TMT Heart Monitoring System";
        text.innerText = `developed a wireless ECG monitoring system using Python and Flask for real-time heart signal monitoringand visualization. Implemented sensor data processing, ECG graph generation, and heart rate analysis forhealthcare monitoring applications.`;
    }

    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}