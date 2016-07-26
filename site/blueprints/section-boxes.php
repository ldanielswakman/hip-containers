<?php if(!defined('KIRBY')) exit ?>

title: Repeatable boxes section
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