<svg id="mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 150">
    <g fill="transparent" stroke="black" stroke-width="10">
        <path d="M0 5H155V145H5V10" stroke="white"></path>
        <path d="M20 105H140" stroke="#009B95"></path>
        <path d="M25 60 V75H80 M25 90V100" stroke="#1142AA"></path>
        <path d="M30 85H40M40 95H140" stroke="#2D9B27"></path>
        <path d="M20 45H135V100" stroke="#BF6F30"></path>
        <path d="M80 75H130" stroke="#4573D5"></path>
    </g>
</svg>

<svg id="desktop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650 70">
    <g fill="transparent" stroke="black" stroke-width="10">
        <path d="M120 5H-120M5 10V35H115V65H-120" stroke="#009B95"></path>
        <path d="M190 5H135V65H190M140 35H190" stroke="#1142AA"></path>
        <path d="M205 40V5H315V35H215V50M205 50V70M220 55H315V70" stroke="#2D9B27"></path>
        <path d="M390 5H335V65H390M340 35H390" stroke="#1142AA"></path>
        <path d="M400 5H515V65H405V20" stroke="#BF6F30"></path>
        <path d="M535 70V5H645V70M540 35H640" stroke="#4573D5"></path>
    </g>
</svg>

<style>
    svg {
        padding: 10px 0;
        display: block;
        margin: auto;
    }

    #desktop {
        width: 650px;
    }

    #mobile {
        width: 160px;
    }
</style>

<?php
if (extension_loaded('soap')) {
    echo '<pre>';
    print_r('okey');
    echo '</pre>';
}
?>