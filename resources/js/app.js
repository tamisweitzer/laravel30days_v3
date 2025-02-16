import './bootstrap';

const mobileToggle = document.getElementById( 'mobile-toggle' ),
      mobileMenu = document.getElementById( 'mobile-menu' );

mobileToggle.addEventListener( 'click', function ( e ) {
  mobileMenu.classList.toggle( 'hidden' );
} );
