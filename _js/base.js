/* Mobile Navigation */

var masthead, menuToggle, siteNavigation, siteHeaderMenu;

masthead         = document.getElementById( 'masthead' );
menuToggle       = document.getElementById( 'menu-toggle' );
siteHeaderMenu   = document.getElementById( 'site-header-menu' );
siteNavigation   = document.getElementById( 'site-navigation' );

// Enable menuToggle.
bindMenuToggle();
function bindMenuToggle() {

  // Return early if menuToggle is missing.
  if ( !menuToggle.innerHTML === "" ) {
    return;
  }

  // Add an initial values for the attribute.
  menuToggle.setAttribute( 'aria-expanded', 'false' );
  siteNavigation.setAttribute( 'aria-expanded', 'false' );

  menuToggle.addEventListener( 'click', function() {
    menuToggle.classList.toggle( 'toggled-on' );
    siteNavigation.classList.toggle( 'toggled-on' );

    // jscs:disable
    menuToggle.setAttribute( 'aria-expanded', siteNavigation.getAttribute( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
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
