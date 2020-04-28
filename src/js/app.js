
document.addEventListener('DOMContentLoaded', function() {
    // Add scrolled clas to body on scroll
    function windowScroll() {
        let body = document.querySelector('body');
        let searchWrap = document.querySelector('.search-wrap');
        window.addEventListener('scroll', function() {
            // console.log(document.documentElement.scrollTop);
            if(document.documentElement.scrollTop > 100) {
                body.classList.add('scrolled');
                body.classList.remove('search-is-open');
                searchWrap.classList.remove('active');
            } else if(document.documentElement.scrollTop < 100) {
                body.classList.remove('scrolled');
            }
        });
    };

    windowScroll();


    // Search Pop Up
    function searchPopUp() {
        let searchIcon = document.querySelector('.search-icon');
        let searchWrap = document.querySelector('.search-wrap');
        let body = document.querySelector('body');

        searchIcon.addEventListener('click', function(e) {
            e.preventDefault();
            // Scroll page to top
            document.documentElement.scrollTop = 0;
            body.classList.toggle('search-is-open');
            searchWrap.classList.toggle('active');
        });
    };

    searchPopUp();

    // Remove next/previous arrows from pagination
    function removeArrows() {

        let leftArrow = document.querySelector('.page-numbers.prev');
        let rightArrow = document.querySelector('.page-numbers.next');
        if(leftArrow) {
            leftArrow.textContent = '';
        }
        if(rightArrow) {
            rightArrow.textContent = '';
        }

    }

    removeArrows();

    // Add class to category Widget
    function addSelectClass() {
        let catSelect = document.querySelector('.widget_product_categories');
        if(catSelect) {
            catSelect.classList.add('select');
        }
    }

    addSelectClass();

});
