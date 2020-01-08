#!/usr/bin/env python3

import os

filename = input('File Name: ')
page_heading = input('Heading: ')
count = 1
heading = ''
headings = list()
while True:
    heading = input('Subheading (enter if none): ')
    if heading == '':
        break
    headings.append(heading)

with open('help/' + filename, 'w') as fp:
    fp.write('<a name="top"></a>\n')
    fp.write('<h3>' + page_heading + '</h3>\n')
    fp.write('<b>In this article</b>\n')
    fp.write('<ol>\n')
    count = 1
    for heading in headings:
        fp.write('<li><a href="#' + str(count) + '">' + heading + '</a></li>\n')
        count = count + 1
    fp.write('</ol>\n')
    count = 1
    for heading in headings:
        fp.write('<a name="' + str(count) + '"></a>\n')
        fp.write('<h4>' + heading + '</h4>\n')
        fp.write('<p>\n')
        fp.write('</p>\n')
        fp.write('<div style="text-align: right"><a href="#top">Top</a></div>\n')
        count = count + 1
