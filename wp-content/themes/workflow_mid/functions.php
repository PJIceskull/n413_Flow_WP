<?php

function init_editor_style()
{
    add_editor_style("style.css");
}

add_action("after_setup_theme", "init_editor_style");

function init_view_style()
{
    wp_enqueue_style("workflow_mid_style", get_stylesheet_directory_uri() . "/style.css");
}

add_action("wp_enqueue_scripts", "init_view_style");
