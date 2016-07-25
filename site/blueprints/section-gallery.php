<?php if(!defined('KIRBY')) exit ?>

title: Gallery section
pages: false
files: true
options:
  preview: parent
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  bg: background-color
  gallery_images:
    label: Gallery images
    type: structure
    modalsize: small
    style: table
    fields:
      carousel_image:
        label: Image
        type: image