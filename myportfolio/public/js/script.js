function showSection(id)
{
    let sections = document.querySelectorAll('.section');

    sections.forEach(function(section){
        section.style.display = "none";
    });

    document.getElementById(id).style.display = "block";
}

function toggleProject(id)
{
    let project = document.getElementById(id);

    if(project.style.display === "block")
    {
        project.style.display = "none";
    }
    else
    {
        project.style.display = "block";
    }
}   