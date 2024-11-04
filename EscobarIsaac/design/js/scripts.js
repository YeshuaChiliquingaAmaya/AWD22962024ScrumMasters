// JavaScript Document


function toggleAccordion(element) {
    const content = element.nextElementSibling;
    const arrow = element.querySelector('.arrow');

    if (content.style.display === "block") {
        content.style.display = "none";
        arrow.style.transform = "rotate(0deg)";
    } else {
        // Cerrar otros acordeones
        const allContents = document.querySelectorAll('.accordion-content');
        const allArrows = document.querySelectorAll('.arrow');
        allContents.forEach((item) => item.style.display = "none");
        allArrows.forEach((arrowItem) => arrowItem.style.transform = "rotate(0deg)");

        content.style.display = "block";
        arrow.style.transform = "rotate(180deg)";
    }
}
