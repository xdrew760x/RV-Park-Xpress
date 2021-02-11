<?php
/**
* Plugin Name:     BRM Block Controls
* Plugin URI:
* Description:     tesy blocky
* Version:         9.0.0
* Author:          Andrew Munoz
* Author URI:
* License:         MIT
* License URI:     http://opensource.org/licenses/MIT
*/

//
///
////
/////
//////
///////
//////// Remove stock blocks / Add Custom Blocks

add_filter( 'allowed_block_types', 'misha_allowed_block_types' );

function misha_allowed_block_types( $allowed_blocks ) {

  return array(
    'acf/split',
    //'acf/news-blog',
    //'acf/newsletter',
    'acf/resort-amenities',
    'acf/resort-attractions',
    'acf/resort-rates',
    'acf/hero',
    'acf/testimonials',
    'acf/portals',
    //'acf/rates',
    //'acf/all-properties',
    //'acf/rent-properties',
    // 'acf/owner-properties',
    //'acf/sale-properties',
    //'acf/newsletter',
    'core/block' // add this for reusable block
  );
}


//
///
////
/////
//////
///////
//////// Registers Block Category for Gutenberg

function my_blocks_plugin_block_categories( $categories ) {
  return array_merge(
    $categories,
    array(
      array(
        'slug' => 'general_blocks',
        'title' => __( 'General Blocks', 'brm' ),
        'icon'  => 'wordpress',
      ),
      array(
        'slug' => 'resort_blocks',
        'title' => __( 'Resort Blocks', 'brm' ),
        'icon'  => 'wordpress',
      ),
    )
  );
}

add_filter( 'block_categories', 'my_blocks_plugin_block_categories', 10, 2 );


//
///
////
/////
//////
///////
//////// Gutenberg Backend Styling Overide

add_action('admin_head', 'gutenberg_styling_overide');

function gutenberg_styling_overide() {
  echo '<style>
  @media (min-width: 782px) {
    .is-sidebar-opened .interface-interface-skeleton__sidebar {
      width: 20%;
      min-width: 20% !important;
      transition: all ease .2s;
      position: fixed !important;
      right: 0px;
      left: auto;
      margin-top: 88px;
      z-index: 500;
    }

    .interface-interface-skeleton__left-sidebar {
      position: absolute !important;
      width: 100%;
      max-width: 400px;
      max-height:500px;
      top: 0;
      left:60px;
      z-index: 1000;
    }

    .expand-me {
      width: 40% !important;
      z-index: 100 !important;
    }
  }

  .components-notice-list,
  .edit-post-layout__metaboxes {
    max-width: 75% !important;
  }

  .components-notice-list,
  .edit-post-layout__metaboxes {
    max-width: 80%;
  }

  .edit-post-layout__metaboxes {
    z-index: 100 !important;
  }

  .block-editor-block-list__layout {
    overflow: hidden !important;
    position: relative;
  }

  .block-editor-block-list__layout .block-editor-block-list__layout {
    width: 100% !important;
  }

  .wp-core-ui .button,
  .wp-core-ui .button-secondary {
    background: transparent !important;
    background-color: inherit !important;
    color: black;
  }

  .editor-styles-wrapper .button {
    color: inherit !important;
  }

  .wp-editor-area {
    height: 150px !important;
  }

  .interface-complementary-area {
    width: 100% !important;
  }

  .block-list-appender {
    z-index: 10;
    position: relative;
  }

  .editor-styles-wrapper .block-editor-block-list__block {
    margin-top: 0px;
    margin-bottom: 0px;
  }

  .open-sidebar {
    display: none !important;
  }

  .block-editor-page .open-sidebar {
    display: block !important;
  }

  .open-sidebar {
    right: -155px;
    transition: all ease  .2s;
  }

  .open-sidebar::before {
    content: "\2190";
    padding-right: 15px;
  }

  .open-sidebar:hover {
    right: 0px;
  }

  .block-editor-inserter__menu .preview-none {
    display: none !important;
  }

  .block-editor-inserter__menu .block_preview {
    display: block !important;
  }

  .editor-styles-wrapper *, .editor-styles-wrapper *::before, .editor-styles-wrapper *::after {
    position: relative;
  }

  .hero__video {
    z-index: 1 !important;
  }

  .edit-post-visual-editor {
    padding-left: 0px !important;
  }

  .editor-post-title {
    background-color: white;
    margin-top: -30px !important;
  }

  .components-popover__content {
    z-index: 5 !important;
  }

  .wp-block {
    postition: relatiive;
    z-index: 2 !important;
  }

  .editor-styles-wrapper .wp-block {
    max-width: 100% !important;
  }

  .acf-block-panel .acf-block-fields {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  .block-editor-block-list__layout {
    width: 79%;
    padding-left: 0;
    padding-right: 5px;
  }

  .editor-post-title {
    z-index: 100 !important;
    position: relative;
    left: 0;
  }

  .acf-block-body .acf-block-preview {
    pointer-events: none;
  }

  .components-popover {
    left: 230px !important;
    z-index: 100;
  }

  .components-notice-list,
  .edit-post-layout__metaboxes {
    max-width: 88% !important;
  }

  .block-editor-block-list__block,
  .block-editor-block-list__layout .wp-block {
    margin-left: 0;
  }

  .edit-post-header {
    display: flex;
    justify-content: flex-start;
    flex-flow: row wrap;
  }

  .components-popover__content,
  .components-popover {
    right: auto !important;
    left: 15px !important;
    z-index:1000;
    margin-top: 70px;
  }

  .editor-styles-wrapper b, .editor-styles-wrapper strong, .editor-styles-wrapper span  {
    font-family: dashicons !important;
  }

  .components-dropdown__content {
    right: 300px !important;
    left: auto !important;
  }

  </style>

  <a class="open-sidebar text-h1 button--primary" onclick="openWin()"
  style="
  position: absolute;
  z-index: 1000;
  bottom: 0;
  font-size: 20px;
  padding: 15px;
  border: 1px solid black;
  background-color: white;
  cursor: pointer;
  ">Toggle Toolbar</a>';
}
