// const dropdownNav = document.querySelector(".menu-main-container");
const dropdownItems = document.querySelector(".mobile-container-menu");
const icons = document.querySelector(".menu-icons");
icons.addEventListener("click", toggleDropdown);

const close_dropdown_icon = document.querySelector(".close-menu-icon");
const open_dropdown_icon = document.querySelector(".open-menu-icon");

function toggleDropdown()
{
  if (dropdownItems.style.display == "block")
  {
    dropdownItems.style.display = "none";
    open_dropdown_icon.style.display = "block";
    close_dropdown_icon.style.display = "none";
  }
  else
  {
    dropdownItems.style.display = "block";
    open_dropdown_icon.style.display = "none";
    close_dropdown_icon.style.display = "block";
  }
}
