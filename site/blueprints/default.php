<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  bg:
    label: Background color
    type: select
    options:
      white: White
      lightestgreen: Lightest Green
      green: Green
      darkblue: Dark Blue