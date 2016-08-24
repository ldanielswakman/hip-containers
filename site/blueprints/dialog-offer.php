<?php if(!defined('KIRBY')) exit ?>

title: Offer form dialog
pages: false
files: false
preview: parent
options:
  template: false
  url: false
fields:
  title:
    label: Title
    type:  text
  questions:
    label: Questions
    type: structure
    modalsize: large
    entry: >
      {{title}}<br>
      <b>{{question}}</b><br>
      <span style="color: #999;">{{answer_1_text}} (€{{answer_1_price}})</span> &nbsp;&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp; <span style="color: #999;">{{answer_2_text}} (€{{answer_2_price}})</span> 
    fields:
      title:
        label: Title
        type: text
      question:
        label: Question
        type: text
      answer_1_text:
        label: Answer 1 Text
        type: text
        width: 2/3
      answer_1_price:
        label: Price (€)
        type: number
        width: 1/3
        min: 0
      answer_2_text:
        label: Answer 2 Text
        type: text
        width: 2/3
      answer_2_price:
        label: Price (€)
        type: number
        width: 1/3
        min: 0
  message_title:
    label: >
      Message field – <span style="font-weight: normal;">title ...</span>
    type: text
    icon: comment
    help: (Leave empty to hide in the form)
    width: 1/3
  message_placeholder:
    label: > 
      <span style="font-weight: normal;">... & placeholder</span>
    type: text
    width: 2/3
  name_title:
    label: >
      Name field – <span style="font-weight: normal;">title ...</span>
    type: text
    icon: user
    help: (Required)
    width: 1/3
  name_placeholder:
    label: > 
      <span style="font-weight: normal;">... & placeholder</span>
    type: text
    width: 2/3
  email_title:
    label: >
      Email field – <span style="font-weight: normal;">title ...</span>
    type: text
    icon: envelope
    help: (Required)
    width: 1/3
  email_placeholder:
    label: > 
      <span style="font-weight: normal;">... & placeholder</span>
    type: text
    width: 2/3
