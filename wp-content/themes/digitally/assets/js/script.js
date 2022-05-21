jQuery(document).ready(function () {

    jQuery('.nav-hamburger').click(function () {
        jQuery('.nav-hamburger').toggleClass('open');
        jQuery(this).parent().parent().children('.header__menu').toggleClass('open');
        jQuery('html').toggleClass('over');
    });


    jQuery('select').select2({
        width: "100%",
        minimumResultsForSearch: -1,
    });

});


var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    if (window.pageYOffset < 200) {
        document.getElementById("scrollnav").classList.remove("scroll");
    } else {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("scrollnav").classList.add("scroll");
        } else {
            document.getElementById("scrollnav").classList.remove("scroll");
        }
        prevScrollpos = currentScrollPos;
    }
}

var menuItems = document.querySelectorAll('li.menu-item-has-children, li.page_item_has_children');
Array.prototype.forEach.call(menuItems, function (el, i) {
    var activatingA = el.querySelector('a');
    var btn = '<button><span><span class="visuallyhidden">Submenu “' + activatingA.text + '”</span></span></button>';
    activatingA.insertAdjacentHTML('afterend', btn);

    el.querySelector('button').addEventListener("click", function (event) {
        if (this.parentNode.classList.contains("open")) {
            this.parentNode.classList.remove("open");
            this.parentNode.querySelector('a').setAttribute('aria-expanded', "false");
            this.parentNode.querySelector('button').setAttribute('aria-expanded', "false");
            if (this.parentNode.querySelector('.children')) {
                this.parentNode.querySelector('.children').classList.remove("open");
            }
            if (this.parentNode.querySelector('.sub-menu')) {
                this.parentNode.querySelector('.sub-menu').classList.remove("open");
            }
        } else {
            this.parentNode.classList.add("open");
            this.parentNode.querySelector('a').setAttribute('aria-expanded', "true");
            this.parentNode.querySelector('button').setAttribute('aria-expanded', "true");
            if (this.parentNode.querySelector('.children')) {
                this.parentNode.querySelector('.children').classList.add("open");
            }
            if (this.parentNode.querySelector('.sub-menu')) {
                this.parentNode.querySelector('.sub-menu').classList.add("open");
            }
        }
        event.preventDefault();
    });
});



