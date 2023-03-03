<?php

function yCustomizeRegister($wp_customize)
{
    socialCustomizer($wp_customize);
    yMiscCustomizerSection($wp_customize);
}
