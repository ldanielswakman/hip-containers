<?php if(!defined('KIRBY')) exit ?>

title: Intro section
pages: false
files: true
preview: parent
options:
  template: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  bg: background-color
  carousel_images:
    label: Carousel images
    type: structure
    modalsize: small
    style: table
    fields:
      carousel_image:
        label: Image
        type: image