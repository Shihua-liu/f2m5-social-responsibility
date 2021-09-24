<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
        <a href="<?php echo url( 'register_form' ) ?>"<?php if ( current_route_is( 'register_form' ) ): ?> class="active"<?php endif ?>>registreer</a>
    </li>
</ul>