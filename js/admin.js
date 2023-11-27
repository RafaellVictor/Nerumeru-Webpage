const NavDrop = document.querySelectorAll('.NavDrop');
const NavdropBox = document.querySelectorAll('.NavdropBox');

const NavDropParent =  NavDrop.parentNode;

console.log(NavDropParent)

NavDrop.forEach((OtherNavDrop, index) => {
    OtherNavDrop.addEventListener("click", () => {
        const parentNavdrop = NavdropBox[index].parentNode;
        console.log(parentNavdrop);
    }); 
});
