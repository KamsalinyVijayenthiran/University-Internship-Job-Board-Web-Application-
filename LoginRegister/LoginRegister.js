function showFprm(formId) {
    document.querySelectorAll('.form-box').forEach(form => form.classList.remove('active'));
    document.getElementById(formId).classList.add('active');
}



const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");

menuBtn.addEventListener("click", () => {
  navLinks.classList.toggle("open");
});
