const sidebar = document.querySelector(".sidebar");
const mobileToggle = document.querySelector("#mobile-toggle")
const sidebarClose = document.querySelector("#sidebar-close")
// const inputButton = document.getElementById("inpFile");
// console.log(inputButton);
// const previewContainer = document.getElementById("imagePreview")
// //const previewContainer = document.querySelector("#imagePreview")
// console.log(previewContainer)
// const previewImage = previewContainer.querySelector(".preview__image")
// console.log(previewImage);
// const previewDefaultText = previewContainer.querySelector(".default-text");
// console.log(previewDefaultText)

// //const previewContainer = document.getElementById("imagePreview")
// //const previewImage  = previewContainer.querySelector(".preview__image")

// const navlink = document.querySelectorAll(".sidebar-menu > li > a")
// const navlinks = document.getElementsByClassName('link')

// inputButton.addEventListener("change", ()=> {
//     const file = inputButton.files[0]

//     if(file){
//         const reader = new FileReader();

//         previewDefaultText.style.display = "none";
//         previewImage.style.display = "block"

//         reader.addEventListener("load", () => {
//             previewImage.setAttribute("src", reader.result)
//         });

//         reader.readAsDataURL(file);
//     }
// })
mobileToggle.addEventListener("click", ()=>{

    sidebar.classList.toggle('active');
   
})
sidebarClose.addEventListener('click', ()=>{
    if(sidebar.classList.contains('active')){
        sidebar.classList.remove('active');
    }
});
document.querySelectorAll('.sidebar-submenu').forEach(e => {
    e.querySelector('.sidebar-menu-dropdown').onclick = (event) => {
        event.preventDefault()
        e.querySelector('.sidebar-menu-dropdown .dropdown-icon').classList.toggle('active')

        let dropdown_content = e.querySelector('.sidebar-menu-dropdown-content')
        let dropdown_content_lis = dropdown_content.querySelectorAll('li')

        let active_height = dropdown_content_lis[0].clientHeight * dropdown_content_lis.length

        dropdown_content.classList.toggle('active')

        dropdown_content.style.height = dropdown_content.classList.contains('active') ? active_height + 'px' : '0'
    }
})
// for(let i  = 0 ; i < navLinks.length ; i++){
//     navLinks[i].addEventListener("click", ()=> {
//         let current = document.getElementsByName('active');
//         current[0].className = current[0].className.replace(" active", "");
//         this.className += " active";
//     });
// }
// navLinks.forEach((link) => {
//     link.addEventListener('click', () => {
//         console.log("listening")
        
//     });
// });