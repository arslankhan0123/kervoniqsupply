<?php

/*
|--------------------------------------------------------------------------
| Brand theme — THE one place to change colours
|--------------------------------------------------------------------------
| Every button, link, badge and gradient on the storefront, the admin panel,
| the PDF invoice and the order emails reads from here. Change a value, run
| `php artisan optimize:clear`, and it updates everywhere.
|
| Storefront & admin: these become CSS variables (--brand, --brand-grad, …)
| printed by resources/views/partials/theme-vars.blade.php and used by the
| shared classes in public/css/theme.css (.btn-brand, .bg-brand, .text-brand …).
| PDF & email: read directly with ztheme('brand') because they can't use CSS vars.
*/

return [

    // Primary brand colour (buttons, links, active states) — deep teal
    'brand'        => '#0f766e',
    'brand_dark'   => '#134e4a',   // hover / pressed, strong headings, table heads
    'brand_light'  => '#14b8a6',   // gradient end, decorative orbs
    'brand_soft'   => '#e7f6f4',   // tinted backgrounds behind brand text (selected rows, chips)

    // Secondary accent — warm amber (small highlights, ticker dots, focus rings)
    'accent'       => '#f59e0b',
    'accent_soft'  => '#fef3c7',

    // Gradient used on primary buttons, icon tiles and hero banners
    'grad'         => 'linear-gradient(135deg,#134e4a 0%,#0f766e 55%,#14b8a6 100%)',
    'grad_hover'   => 'linear-gradient(135deg,#0f766e 0%,#119184 55%,#2dd4bf 100%)',

    // Status colours
    'sale'         => '#f97316',   // discounts, "Shop Now" hero button, cart badge
    'success'      => '#22c55e',
    'warning'      => '#f6a609',
    'danger'       => '#dc2626',
    'star'         => '#ffb400',

    // Text & surfaces (storefront)
    'ink'          => '#0c2a27',
    'ink_2'        => '#1e3d39',
    'muted'        => '#5b7370',
    'faint'        => '#8fa6a2',
    'surface'      => '#f3f8f7',
    'line'         => '#e1ecea',
    'line_2'       => '#d1e0dd',

    // Shadows / glow derived from the brand (rgb triplet of brand_dark)
    'shadow_rgb'   => '19,78,74',
];
