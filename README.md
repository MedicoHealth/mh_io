# Medicohealth.io

## Style Guide
### HTML
* Use lowercase tag names and attributes `<section attr='1'> </section>`
* Always close HTML tags `<p> </p>`
* Optional: Close empty HTML elements `<meta charset='utf8' />`
* Always add the `alt=''` attribute to img tags
* Always quote attribute values `<p color='white'> </p>`
* Don't use spaces around attributes' equal signs
* Don't use unnecessary line breaks in code
* Single line comments should have tags on same line
* Multiline comments should have tags on lines around the comment
* Always include the viewport meta tag in head
* Type attribute is unnecessary for script tags
* Keep line length below 100 characters
Example:
```HTML
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>HTML5 Syntax and Coding Style</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles.css" />
        <script src="myscript.js"></script>
    </head>
	<body>
        <md-progress-circular
            md-mode="indeterminate"
            class="md-accent"
            ng-show="ctrl.loading"
            md-diameter="35">
        </md-progress-circular>
        <ol>
            <li>London</li>
            <li>Paris</li>
            <li>Tokyo</li>
        </ol>
        <!--
        This is a long comment example. This is a long comment example.
        This is a long comment example. This is a long comment example.
        -->
	</body>
</html>
```

### CSS
* Use only lowercase letters
* Use IDs only for specific elements
* Use Classes for recurring element styles
* Avoid unnecessary type selectors BAD: `ul#nav {}`
* Use shorthand properties (use `font:` instead of multiple `font-*:` properties)
* Use single line declarations if they are short
* Avoid using units with the `0` value
* Use hyphens instead of underscores or camelCase
* Always start a new line if selecting multiple elements
* Put property declarations in alphabetical order
* Use spaces after property name's colon
* Always put a blank line between rule declarations, except nested rules
* Indent nested rules by html nesting, don't separate by newline
* Use single quotation marks `''` instead of double `""`
* Add CSS section comments for easier readability
* Use 4 spaces for indentation
Example:
```css
html { background: #fff; }

body {
    margin: auto;
    width: 50%;
}

ul { list-style: none; }
    li { color: blue; }

h1,
h2,
h3 {
    color: red;
    margin: 1em;
}

```

### PHP
* Use 4 spaces for indentation
* Use spaces around the `.` concat sign
* Use spaces around math operators
* Use strict comparison `===` instead of `==`
* If nesting in html use single-line tags if line shorter than 100 characters
* Use DocBlock documentation (optional)
* Use line breaks before and after `{ }`
Example:
```php
/**
 * @author John Doe
 */
class Foo
{
	/**
	 * @var array
	 */
	private $foo = [];

	/**
	 * @param array $foo
	 * @return int
	 */
	private function setFooAndReturnNumberOfItems(array $foo)
	{
		$this->foo = $foo;
		return count($this->foo);
	}
}
```
HTML + PHP Example:
```HTML+PHP
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/startofbody.php';?>
    <div id="main">
        <!-- SECTION: INTRO !-->
        <?php include $_SERVER['DOCUMENT_ROOT'].'/content/intro.php';?>
        <!-- SECTION: PRESENTATIONAL ANIMATION !-->
        <?php include $_SERVER['DOCUMENT_ROOT'].'/content/animation.php';?>
        <!-- SECTION: TOP ICO REVIEWS !-->
        <?php include $_SERVER['DOCUMENT_ROOT'].'/content/topIcoReviews.php';?>
        <!-- SECTION: PRESENTATIONAL VIDEO !-->
        <?php include $_SERVER['DOCUMENT_ROOT'].'/content/video.php';?>
    </div>
</body>
```
