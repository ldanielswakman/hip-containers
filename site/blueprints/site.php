<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: 
  template:
    - section
    - section-intro
    - section-gallery
    - section-boxes
    - section-questions
    - section-image
fields:
  title:
    label: Title
    type:  text
  description:
    label: Description
    type: textarea
  keywords:
    label: Keywords
    type: tags
  logo:
    label: Logo
    type: image