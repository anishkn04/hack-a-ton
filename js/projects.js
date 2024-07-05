fetch('../resources/contacts.json')
    .then(results => results.json())
    .then(data => showData(data.members));

const shows = document.querySelector('.slider');
let next=document.querySelector(".next");
let prev=document.querySelector(".prev");

const showData = (data) => {
    const showD = data.map((dat) => {
        // dat.projectImage = "../images/healthy-foods.webp";
        dat.projectDes="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque sed ratione doloremque eum, incidunt quia nisi debitis hic ea facilis obcaecati nam beatae modi enim animi sunt praesentium itaque vel!";
        return `
            <div class="slides flex justify-start items-center absolute w-[240px] h-[320px] rounded-[20px] top-1/2  shadow-2xl
            " style="--img: url('${dat.projectImage}')">
                <div class="content relative max-w-[600px] p-[30px] text-white ">
                    <h1 class="font-black text-3xl md:text-6xl text-[#FCD581] drop-shadow-2xl">${dat.teamName}</h1>
                    <p class="mt-5 tracking-wider text-md md:text-lg">${dat.projectDes}</p>
                    <div class='bg-[#090909] inline-block p-3 mt-2 rounded-lg'>
                        <a href="${dat.repoName}" >Repository</a>
                    </div>
                </div>
            </div>
        `;
    }).join(''); 

    shows.innerHTML = showD;
};
next.addEventListener('click',function(){
    let slides=document.querySelectorAll('.slides');
    shows.appendChild(slides[0])
})
prev.addEventListener('click',function(){
    let slides=document.querySelectorAll('.slides');
    shows.prepend(slides[slides.length-1])
})

