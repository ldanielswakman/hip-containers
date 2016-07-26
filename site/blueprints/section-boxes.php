<?php if(!defined('KIRBY')) exit ?>

title: Intro section
pages: false
files: true
options:
  preview: parent
  status: false
  template: false
  delete: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type: textarea
    size: small
  bg: background-color
  boxes:
    label: Repeatable boxes
    type: structure
    fields:
      title:
        label: Title
        type: text
      text:
        label: Description
        type: textarea