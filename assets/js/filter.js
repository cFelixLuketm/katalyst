
const filters = document.querySelectorAll("#filterButton");
const filterableProjects = document.querySelectorAll(".column");

const filterProjects = (e) => {
    const links = document.querySelectorAll(".project-initals .title_link");
    links.forEach(link => {
        link.classList.remove("active");
    })
    e.target.classList.add("active");

    filterableProjects.forEach(project => {
        if(project.dataset.name === e.target.dataset.filter || e.target.dataset.filter === "all") {
            return project.classList.replace("hide", "show");
        }
        project.classList.add("hide");
    });
}

filters.forEach(button => 
    button.addEventListener("click", filterProjects)
);