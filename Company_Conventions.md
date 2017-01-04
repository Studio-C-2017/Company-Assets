# HTML
- Tabs should be four spaces wide, adjust your chosen text editor if it is 2, 8, or any other number
- Id's and classes should use hyphens to separate words instead of underscores or camelCase (i.e. `<div class="some-class"></div>`)
- When closing long divs or other generic elements, please add an HTML comment to specify which div is being closed if there is an ID (`<div id="some-id"> ... </div> <!-- END #some-id -->`)
- "Wrappers" should only hold a single element for the use of styling
- "Containers" can hold multiple elements
- Containers contain wrappers
- Empty elements should be closed XHTML style, with a space and a slash (i.e. `<img src="image.png" />`)

# CSS
- Again, tabs should be four spaces wide
- Try to order elements as they appear in the page

# JavaScript
- Use camelCase format to name variables, do not use underscores
- Verify code with JSLint

# File System
- Ideally, all non-HTML files will go in a directory named "assets" (or "_assets") that holds subdirectories for images (img), JavaScript files (js), and CSS files (css)
- Do not use spaces in file names, hyphens are preferred although underscores can also be used
- Add .DS_Store to the .gitignore file
