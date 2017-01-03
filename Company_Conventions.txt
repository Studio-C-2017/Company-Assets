
- All HTML documents should begin with <!DOCTYPE html>
- Tabs should be four spaces wide, adjust your chosen text editor if it is 2, 8, or any other number
- Id's and classes should use hyphens to separate words instead of underscores or camelCase (i.e. <div class="some-class"></div>)
- "Wrappers" should only hold a single element for the use of styling
- "Containers" can hold multiple elements, as in the following
<div id="container>
	<div class="wrapper">
		<p>Something</p>
	</div>
	<div class="wrapper">
		<p>Something else</p>
	</div>
</div>
- When closing long divs or other generic elements, please add an HTML comment to specify which div is being closed if there is an ID (<div id="some-id"> ... </div> <!-- END #some-id -->)
