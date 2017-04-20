# The Official Studio C Style Guide
![XKCD comic](https://imgs.xkcd.com/comics/tags.png "<A>: Like </a>this.&nbsp;")

"[Tags](https://xkcd.com/1144/)" by Randall Monroe is licensed under [CC BY-NC](https://creativecommons.org/licenses/by-nc/2.5/)

## HTML
- Tabs should be four spaces wide, adjust your chosen text editor if it is 2, 8, or any other number
- Id's and classes should use hyphens to separate words instead of underscores or camelCase (i.e. `<div class="some-class"></div>`)
- When closing long divs or other generic elements, please add an HTML comment to specify which div is being closed if there is an ID (`<div id="some-id"> ... </div> <!-- END #some-id -->`)
- Wrappers vs. Containers
  - "Wrappers" should only hold a single unit of related elements for use of styling
  - "Containers" can hold multiple elements
  - Containers contain wrappers
  - Imagine a jar of wrapped candies; each candy has its own wrapper and each wrapped candy is inside of the jar
- Empty elements should be closed XHTML style, with a space and a slash (i.e. `<img src="image.png" />`)

## CSS
- Again, tabs should be four spaces wide
- Try to order elements as they appear in the page

## JavaScript
- Use camelCase format to name variables, do not use underscores
- Verify code with JSLint

## PHP
- Use single quotes to denote PHP strings
- Use underscores to separate words in variable names

## File System
- Ideally, all non-HTML files will go in a directory named "assets" (or "_assets") that holds subdirectories for images (img), JavaScript files (js), and CSS files (css)
- Do not use spaces in file names, hyphens are preferred, although underscores can also be used
- Add .DS_Store to the .gitignore file
