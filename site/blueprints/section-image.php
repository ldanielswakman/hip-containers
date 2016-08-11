<?php if(!defined('KIRBY')) exit ?>

title: Full width image section
pages: false
files: true
preview: parent
options:
  status: false
  template: false
fields:
  title:
    label: Title
    type: text
    help: for your own use only, doesn't show up on page
  image:
    label: Full width background image
    type: image
  bg: background-color
  text:
    label: Text
    type:  textarea
    help: leave empty for no text