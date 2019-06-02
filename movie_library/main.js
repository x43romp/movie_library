const dropCat = document.getElementById('dropCat');
const categoryList = document.getElementById('categoryList');
const categories = document.getElementById('categories');

categoryList.addEventListener("mouseover", () => {
  categories.style.animationDirection =
  categories.style.display = "flex";
});

categoryList.addEventListener("mouseout", () => {
  categories.style.display = "none";
});