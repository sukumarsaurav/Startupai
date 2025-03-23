// Initialize AOS (Animate On Scroll)
AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

$(document).ready(function() {
    // Side Drawer functionality
    $('#drawerToggle').on('click', function() {
        $('.side-drawer, .drawer-overlay').addClass('show');
        $('body').css('overflow', 'hidden');
    });

    $('.drawer-close, .drawer-overlay').on('click', function() {
        $('.side-drawer, .drawer-overlay').removeClass('show');
        $('body').css('overflow', '');
    });

    // Drawer dropdown toggle
    $('.drawer-item.dropdown-toggle').on('click', function(e) {
        e.preventDefault();
        $(this).next('.drawer-submenu').slideToggle();
        $(this).toggleClass('active');
    });

    // Automatically open drawer submenu for active links
    $('.drawer-submenu a.active').each(function() {
        $(this).closest('.drawer-submenu').show();
        $(this).closest('.drawer-submenu').prev('.drawer-item.dropdown-toggle').addClass('active');
    });

    // Navbar scroll effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
            $('.top-nav').addClass('d-none');
        } else {
            $('.navbar').removeClass('scrolled');
            $('.top-nav').removeClass('d-none');
        }
    });

    // Fix for dropdown menus in Bootstrap 5
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
        }
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass('show');
        });

        return false;
    });

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this.hash);
        if (target.length) {
            $('.side-drawer, .drawer-overlay').removeClass('show');
            $('body').css('overflow', '');
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 1000);
        }
    });

    // Active link switching
    $(window).scroll(function() {
        var scrollDistance = $(window).scrollTop();
        
        $('section').each(function(i) {
            if ($(this).position().top <= scrollDistance + 100) {
                $('.navbar-nav a.active').removeClass('active');
                $('.navbar-nav a').eq(i).addClass('active');
            }
        });
    }).scroll();

    // Mobile menu collapse on click
    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });

    // Form validation
    $('form').on('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        alert('Form submitted successfully!');
    });

    // Preloader
    $(window).on('load', function() {
        $('.preloader').fadeOut('slow');
    });
});

// Typing animation for hero section
if (document.querySelector('.typed-text')) {
    new Typed('.typed-text', {
        strings: ['Web Development', 'AI Solutions', 'Mobile Apps', 'Digital Marketing'],
        typeSpeed: 60,
        backSpeed: 40,
        loop: true
    });
}

// Intersection Observer for revealing elements on scroll
const revealElements = document.querySelectorAll('.reveal');
const revealOptions = {
    threshold: 0.15,
    rootMargin: '0px'
};

const revealOnScroll = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            observer.unobserve(entry.target);
        }
    });
}, revealOptions);

revealElements.forEach(element => {
    revealOnScroll.observe(element);
});

// Contact Form Handling
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            const data = {};
            formData.forEach((value, key) => data[key] = value);
            
            // Show loading state
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Sending...';
            
            // Simulate form submission (replace with actual API endpoint)
            setTimeout(() => {
                // Success message
                const successMessage = document.createElement('div');
                successMessage.className = 'alert alert-success mt-3';
                successMessage.role = 'alert';
                successMessage.textContent = 'Thank you for your message! We will get back to you soon.';
                
                // Insert message after form
                contactForm.insertAdjacentElement('afterend', successMessage);
                
                // Reset form and button
                contactForm.reset();
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
                
                // Remove success message after 5 seconds
                setTimeout(() => {
                    successMessage.remove();
                }, 5000);
            }, 1500);
        });
    }
});

// Testimonial Slider
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const track = document.querySelector('.testimonials-track');
    const cards = document.querySelectorAll('.testimonial-card');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    
    // Variables
    let currentIndex = 0;
    let cardWidth;
    let visibleCards;
    
    // Initialize
    function init() {
        updateLayout();
        window.addEventListener('resize', updateLayout);
        
        // Add event listeners to buttons
        prevButton.addEventListener('click', showPreviousCards);
        nextButton.addEventListener('click', showNextCards);
    }
    
    // Update layout based on screen size
    function updateLayout() {
        // Get the width of a single card including margins
        const cardStyle = window.getComputedStyle(cards[0]);
        const marginLeft = parseInt(cardStyle.marginLeft);
        const marginRight = parseInt(cardStyle.marginRight);
        cardWidth = cards[0].offsetWidth + marginLeft + marginRight;
        
        // Determine how many cards to show based on screen width
        if (window.innerWidth >= 1024) {
            visibleCards = 3;
        } else if (window.innerWidth >= 768) {
            visibleCards = 2;
        } else {
            visibleCards = 1;
        }
        
        // Position the cards
        updateCardPositions();
    }
    
    // Update card positions based on current index
    function updateCardPositions() {
        const offset = -currentIndex * cardWidth;
        track.style.transform = `translateX(${offset}px)`;
    }
    
    // Show previous set of cards
    function showPreviousCards() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            // Loop back to the end
            currentIndex = cards.length - visibleCards;
        }
        updateCardPositions();
    }
    
    // Show next set of cards
    function showNextCards() {
        if (currentIndex < cards.length - visibleCards) {
            currentIndex++;
        } else {
            // Loop back to the beginning
            currentIndex = 0;
        }
        updateCardPositions();
    }
    
    // SEO Calculator Button functionality
    const seoCalculator = document.querySelector('.seo-calculator');
    if (seoCalculator) {
        seoCalculator.addEventListener('click', function() {
            // Redirect to SEO calculator page or open modal
            alert('SEO Calculator will open here!');
        });
    }
    
    // Initialize the slider if elements exist
    if (track && cards.length && prevButton && nextButton) {
        init();
    }
});
