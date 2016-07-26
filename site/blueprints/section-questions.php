<?php if(!defined('KIRBY')) exit ?>

title: Questions + Answers section
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
  bg: background-color
  items:
    label: Questions
    type: structure
    entry: >
      <b>{{question}}</b><br>
      <p>{{answer}}</p>
    fields:
      question:
        label: Question
        type: text
      answer:
        label: Answer
        type: textarea
        size: small