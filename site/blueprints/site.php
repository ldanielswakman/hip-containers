<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: 
  template:
    - section
    - section-intro
    - section-gallery
    - section-boxes
    - section-questions
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea