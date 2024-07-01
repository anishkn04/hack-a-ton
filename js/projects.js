fetch('../resources/contacts.json')
    .then(results => results.json())
    .then(data => showData(data.members));

const shows = document.querySelector('.slider');
let next=document.querySelector(".next");
let prev=document.querySelector(".prev");

const showData = (data) => {
    const showD = data.map((dat) => {
        dat.repoName = "rushab";
        dat.projectImage = "../images/healthy-foods.webp";
        return `
            <div class="slides absolute w-[240px] h-[320px] rounded-[20px] top-1/2  shadow-2xl
            " style="--img: url('${dat.projectImage}')">
            
            </div>
        `;
    }).join(''); // join the array elements into a single string

    shows.innerHTML = showD;
};
next.addEventListener('click',function(){
    let slides=document.querySelectorAll('.slides');
    shows.appendChild(slides[0])
})

