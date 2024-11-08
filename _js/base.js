/* Mobile Navigation */

var menuToggle, siteNavigation;

menuToggle       = document.getElementById( 'menu-toggle' );
siteNavigation   = document.getElementById( 'site-navigation' );

// Enable menuToggle.
bindMenuToggle();
function bindMenuToggle() {

  // Return early if menuToggle is missing.
  if ( !menuToggle.innerHTML === "" ) {
    return;
  }

  // Add an initial values for the attribute.
    if (window.innerWidth <= 768) {
      siteNavigation.setAttribute( 'aria-expanded', 'false' );
    }

  menuToggle.addEventListener( 'click', function() {
    menuToggle.classList.toggle( 'toggled-on' );
    siteNavigation.classList.toggle( 'toggled-on' );

    // jscs:disable
    siteNavigation.setAttribute( 'aria-expanded', siteNavigation.getAttribute( 'aria-expanded' ) === 'false' ? 'true' : 'false' );

    // jscs:enable
  } );
}

// Smooth scroll to anchor links
let anchorlinks = document.querySelectorAll('a[href^="#"]');

for (let item of anchorlinks) { // relitere
    item.addEventListener('click', (e)=> {
        let hashval = item.getAttribute('href');
        let target = document.querySelector(hashval);
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
        history.pushState(null, null, hashval)
        e.preventDefault()
    })
}
