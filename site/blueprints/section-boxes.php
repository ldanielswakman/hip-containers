<?php if(!defined('KIRBY')) exit ?>

title: Repeatable boxes section
pages: false
files: true
preview: parent
options:
  template: false
fields:
  title:
    label: Title
    type:  text
  text: textarea
  bg: background-color
  color: text-color
  boxes:
    label: Questions
    type: structure
    entry: >
      <b>{{title}}</b><br>
      <p>{{text}}</p>
    fields:
      title:
        label: Title
        type: text
      text:
        label: Description
        type: textarea