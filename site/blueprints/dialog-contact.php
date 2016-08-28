<?php if(!defined('KIRBY')) exit ?>

title: Contact form dialog
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