<?php if(!defined('KIRBY')) exit ?>

title: Gallery section
pages: false
files: true
preview: parent
options:
  template: false
fields:
  title:
    label: Title
    type:  text
  bg: background-color
  color: text-color
  gallery_images:
    label: Gallery images
    type: structure
    modalsize: small
    style: table
    fields:
      carousel_image:
        label: Image
        type: image