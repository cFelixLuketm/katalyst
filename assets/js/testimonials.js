
const projects = [
    {   quote: '“For this section there needs to be a cap on how long each testimonial is - I think no more than 2-3 lines of text should be displayed here. “For this section there needs to be a cap on how long each testimonial is - I think no more than 2-3 lines of text should be displayed here” - ',
        name: 'Markus Sorg',
        title: 'Brand Director • Renera Energy',   
        pos: 'start',
        image: '1.png' 
    },
    {
        name: 'Shueb',
        pos: 'end',
        image: '2.png' 
    },
    {
        name: 'Agnes',
        pos: 'mid',
        image: '3.png'    
    },
    {
        name: 'Lisa',    
        pos: 'start',
        image: '1.png' 
    },
    {
        name: 'Shueb',
        pos: 'mid',
        image: '2.png' 
    },
    {
        name: 'Agnes',
        pos: 'end',
        image: '3.png'    
    },
    {   quote: '“For this section there needs to be a cap on how long each testimonial is - I think no more than 2-3 lines of text should be displayed here. “For this section there needs to be a cap on how long each testimonial is - I think no more than 2-3 lines of text should be displayed here” - ',
        name: 'Markus Sorg',
        title: 'Brand Director • Renera Energy',   
        pos: 'start',
        image: '1.png' 
    },
    {
        name: 'Shueb',
        pos: 'end',
        image: '2.png' 
    }
]

const createProjects = () => {
    projects.forEach(project => {
        let panel = document.createElement('div');
        panel.classList.add('project', `${project.pos}`);

        let imageContainer = document.createElement('div');
        imageContainer.className = `image__container`;

        let image = document.createElement('img');
        image.classList.add('project__image');
        image.src = project.image;

        let projectDetails = document.createElement('div');
        projectDetails.classList.add('project__details');

        let projectQuote = document.createElement('p');
        projectQuote.innerText = project.quote;
        projectQuote.classList.add('main-paragraph');

        let projectTitle = document.createElement('p');
        projectTitle.innerText = project.name;
        projectTitle.classList.add('testimonial-name');

        let projectType = document.createElement('p');
        projectType.innerText = project.title;
        projectType.classList.add('main-paragraph');

        projectDetails.append(projectQuote, projectTitle, projectType)

        imageContainer.appendChild(image);
        panel.append(imageContainer, projectDetails);

        document.querySelector('.projects__slider').appendChild(panel);
    })

}

export {
    createProjects
}