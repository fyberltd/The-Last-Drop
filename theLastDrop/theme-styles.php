<?php
/* template name: theme-styles */
get_header();
?>

<?php
/* 
Used to display and style website elements, identity, typography - styles sandbox
*/
?>

<main id="theme-styles">
	<section id="typography">
		<div class="container">
			<h2 class="section-heading">Typography</h2>
			<div class="row">
				<div class="col">
					<div class="sub-div headings">
						<h3 class="sub-heading">Headings:</h3>
						<h1>H1: $fontsize1 Adipisicing</h1>
						<h2>H2: $fontsize2 Adipisicing</h2>
						<h3>H3: $fontsize3 Adipisicing</h3>
						<h4>H4: $fontsize4 Adipisicing</h4>
						<h5>H5: $fontsize5 Adipisicing</h5>
						<h6>H6: $fontsize6 Adipisicing</h6>
					</div>

					<div class="sub-div paragraphs">
						<h3 class="sub-heading">Paragraphs:</h3>
						<p>Paragraph: $fontsizeBase</p>
						<p class="base2">Paragraph: $fontsizeBase2</p>
						<p class="font-small">Paragraph: $fontsizeSmall</p>
						<p>Paragraph + link: $fontsizeBase, <a href="">I'm a link, hover me</a>.</p>
					</div>

					<div class="sub-div line-heights">
						<h3 class="sub-heading">Line heights:</h3>
						<p class="line-10">Line-height: 1; - Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi.</p>
						<p class="line-11">Line-height: 1.1; - Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi.</p>
						<p class="line-12">Line-height: 1.2; - Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi.</p>
						<p class="line-13">Line-height: 1.3; - Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi.</p>
						<p class="line-14">Line-height: 1.4; - Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi.</p>
						<p class="line-15">Line-height: 1.5; - Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi.</p>
						<p class="line-20">Line-height: 2; - Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima ipsa corrupti quasi illum velit, at quam tenetur impedit, ab illo repudiandae assumenda soluta aperiam blanditiis eius adipisci! Excepturi.</p>
					</div>

					<div class="sub-div font-weight">
						<h3 class="sub-heading">Font Weight:</h3>
						<p class="font-100">Font-weight: 100; - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="font-200">Font-weight: 200; - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="font-300">Font-weight: 300; - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="font-400">Font-weight: 400; - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="font-500">Font-weight: 500; - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="font-600">Font-weight: 600; - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="font-700">Font-weight: 700; - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="font-800">Font-weight: 800; - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="font-900">Font-weight: 900; - Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<h3 class="sub-heading">hr</h3>
		</div>
		<hr>
	</section>

	<section id="buttons">
		<div class="container">
			<h2 class="section-heading">Buttons</h2>
			<div class="row">
				<div class="col">
					<div class="sub-div buttons">
						<button>button</button> <button class="round">button .round</button>
						<br>
						<br>
						<a href="" class="button">a .button</a> <a href="" class="button round">a .button .round</a>
						<br>
						<br>
						<div class="button">div .button</div>
						<div class="button round">div .button .round</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="list">
		<div class="container">
			<h2 class="section-heading">Lists</h2>
			<div class="row">
				<div class="col">
					<div class="sub-div lists">
						<h3 class="sub-heading">ul - unordered list</h3>
						<ul>
							<li>ul > li element</li>
							<li>ul > li element</li>
							<li>ul > li element</li>
							<li>ul > li element</li>
							<li>ul > li element</li>
						</ul>
					</div>

					<div class="sub-div lists">
						<h3 class="sub-heading">ol - ordered list</h3>
						<ol>
							<li>ol > li element</li>
							<li>ol > li element</li>
							<li>ol > li element</li>
							<li>ol > li element</li>
							<li>ol > li element</li>
						</ol>
					</div>

					<div class="sub-div lists">
						<h3 class="sub-heading">dl - description list</h3>
						<dl>
							<dt>dt - description term</dt>
							<dd>dd - description description, not limited to text.</dd>
							<dd>dd - description description, not limited to text.</dd>
							<dd>dd - description description, not limited to text.</dd>
							<dt>dt - description term</dt>
							<dd>dd - description description, not limited to text.</dd>
							<dd>dd - description description, not limited to text.</dd>
							<dd>dd - description description, not limited to text.</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="form-demo">
		<div class="container">
			<h2 class="section-heading">Form / Inputs</h2>
			<div class="row">
				<div class="col">

					<form action="">
						<h3 class="sub-heading">Basics:</h3>
						<label for="ftext">Text:</label><br>
						<input type="text" id="ftext" name="ftext" placeholder="Enter some text..."><br>
						<br>
						<label for="pwd">Password:</label><br>
						<input type="password" id="pwd" name="pwd" placeholder="Password..."><br>
						<br>
						<label for="email">Email:</label><br>
						<input type="email" id="email" name="email" placeholder="youremail@email.com"><br>
						<br>
						<label for="quantity">Number (between 0 and 100, step 10):</label><br>
						<input type="number" id="quantity" name="quantity" min="0" max="100" step="10" value="30"><br>
						<br>
						<label for="phone">Phone (with pattern attribute):</label><br>
						<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>
						<br>
						<label for="homepage">URL:</label><br>
						<input type="url" id="homepage" name="homepage" placeholder="some-url..."><br>
						<br>

						<label for="w3review">Text Area (rows="4" cols="50"):</label><br>
						<textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Textarea placeholder... "></textarea><br>
						<br>

						<label for="vol">Range (between 0 and 50):</label><br>
						<input type="range" id="vol" name="vol" min="0" max="50"><br>
						<br>

						<label for="myfile">File:</label><br>
						<input type="file" id="myfile" name="myfile"><br>
						<br>

						<label for="gsearch">Search:</label><br>
						<input type="search" id="gsearch" name="gsearch" placeholder="Search for something..."><br>
						<br>

						<h3 class="sub-heading">Multi:</h3>
						<fieldset>
							<legend>Radio:</legend>
							<input type="radio" id="html" name="fav_language" value="HTML">
							<label for="html">HTML</label><br>
							<input type="radio" id="css" name="fav_language" value="CSS">
							<label for="css">CSS</label><br>
							<input type="radio" id="javascript" name="fav_language" value="JavaScript">
							<label for="javascript">JavaScript</label>
						</fieldset><br>

						<fieldset>
							<legend>Checkbox:</legend>
							<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
							<label for="vehicle1"> I have a bike</label><br>
							<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
							<label for="vehicle2"> I have a car</label><br>
							<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
							<label for="vehicle3"> I have a boat</label>
						</fieldset><br>

						<label for="cars">Select:</label><br>
						<select name="cars" id="cars"><br>
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select><br>

						<label for="cars">Select with optgroup:</label><br>
						<select name="cars" id="cars"><br>
							<optgroup label="Swedish Cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
							</optgroup>
							<optgroup label="German Cars">
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</optgroup>
						</select><br>

						<label for="browser">Datalist:</label><br>
						<input list="browsers" name="browser" id="browser" placeholder="Enter or Select"><br>
						<datalist id="browsers">
							<option value="Edge">
							<option value="Firefox">
							<option value="Chrome">
							<option value="Opera">
							<option value="Safari">
						</datalist><br>

						<details><br>
							<summary>Details Summary</summary>
							<p>Details. Can be text or anything you want.</p>
						</details><br>

						<label for="favcolor">Color:</label><br>
						<input type="color" id="favcolor" name="favcolor"><br>
						<br>

						<h3 class="sub-heading">Dates / Time:</h3>
						<label for="datemax">Enter a date before 1980-01-01:</label><br>
						<input type="date" id="datemax" name="datemax" max="1979-12-31"><br>
						<br>
						<label for="datemin">Enter a date after 2000-01-01:</label><br>
						<input type="date" id="datemin" name="datemin" min="2000-01-02"><br>
						<br>

						<label for="birthdaytime">Birthday (date and time):</label><br>
						<input type="datetime-local" id="birthdaytime" name="birthdaytime"><br>
						<br>

						<label for="bdaymonth">Birthday (month and year):</label><br>
						<input type="month" id="bdaymonth" name="bdaymonth"><br>
						<br>

						<label for="week">Select a week:</label><br>
						<input type="week" id="week" name="week"><br>
						<br>

						<label for="appt">Select a time:</label><br>
						<input type="time" id="appt" name="appt"><br>
						<br>

						<br>
						<dialog open>
							<p>Use with Javascript + pseudo element ::backdrop to create simple and accessible modal.</p>
							<p><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog">
									<`dialog`>: The Dialog element
								</a></p>
							<p><a href="https://developer.mozilla.org/en-US/docs/Web/API/HTMLDialogElement/showModal">HTMLDialogElement: showModal() method</a></p>

							<form method="dialog">
								<button>OK</button>
							</form>
						</dialog>
						<br>

						<h3 class="sub-heading">Buttons:</h3>
						<input type="button" onclick="alert('Hello World!')" value="type Button"><br>
						<br>
						<input type="reset" value="type Reset"><br>
						<br>
						<input type="submit" value="type Submit"><br>
						<br>
					</form>

				</div>
			</div>
		</div>
	</section>

	<section id="table">
		<div class="container">
			<h2 class="section-heading">Table</h2>
			<div class="row">
				<div class="col">
					<table>
						<thead>
							<th>thead th</th>
							<th>thead th</th>
							<th>thead th</th>
						</thead>
						<tbody>
							<tr>
								<td>tbody td</td>
								<td>tbody td</td>
								<td>tbody td</td>
							</tr>
							<tr>
								<td>tbody td</td>
								<td>tbody td</td>
								<td>tbody td</td>
							</tr>
							<tr>
								<td>tbody td</td>
								<td>tbody td</td>
								<td>tbody td</td>
							</tr>
						</tbody>
						<tfoot>
							<td>tfoot td</td>
							<td>tfoot td</td>
							<td>tfoot td</td>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</section>

	<section id="coding">
		<div class="container">
			<h2 class="section-heading">Code / Snippets</h2>
			<div class="row">
				<div class="col">
					<p>code:</p>
					<code>Some short code</code><br>
					<br>

					<p>pre:</p>
					<pre>
						Some more complex code:
							first line 
							second line 
							third line
					</pre><br>
					<br>

					<p>kbd, use with css:</p>
					<p>Press <kbd>Ctrl</kbd> + <kbd>C</kbd> to copy text (Windows).</p>
					<p>Press <kbd>Cmd</kbd> + <kbd>C</kbd> to copy text (Mac OS).</p><br>

					<p>samp, use with css:</p>
					<p><samp>File not found.<br>Press F1 to continue</samp></p><br>

					<p>var, use with css:</p>
					<p>The area of a triangle is: 1/2 x <var>b</var> x <var>h</var>, where <var>b</var> is the base, and <var>h</var> is the vertical height.</p><br>
				</div>
			</div>
		</div>
	</section>

	<section id="">
		<div class="container">
			<div class="row">
				<div class="col">

				</div>
			</div>
		</div>
	</section>

	<section id="svgs">
		<div class="container">
			<h2 class="section-heading">SVGs</h2>
			<div class="row">
				<div class="col col-svgs">
					<?php get_template_part('z-svgs/address'); ?>
					<?php get_template_part('z-svgs/arrow'); ?>
					<?php get_template_part('z-svgs/email'); ?> <!-- TODO: all black -->
					<?php get_template_part('z-svgs/facebook'); ?>
					<?php get_template_part('z-svgs/info'); ?>
					<?php get_template_part('z-svgs/insta'); ?>
					<?php get_template_part('z-svgs/linkedin'); ?>
					<?php get_template_part('z-svgs/logo'); ?>
					<?php get_template_part('z-svgs/opening'); ?>
					<?php get_template_part('z-svgs/phone'); ?> <!-- TODO: all black -->
					<?php get_template_part('z-svgs/questions'); ?>
					<?php get_template_part('z-svgs/tips'); ?>
					<?php get_template_part('z-svgs/twitter'); ?>
				</div>
			</div>
		</div>
	</section>

	<section id="bootstrap-grid">
		<div class="container">
			<h2 class="section-heading">Bootstrap grid</h2>
		</div>

		<div class="container">
			<h6>.container</h6>

			<div class="row">
				<h6>.row</h6>

				<div class="col-6 col-item">
					<h6>.col-6</h6>
				</div>

				<div class="col-6 col-item">
					<h6>.col-6</h6>
				</div>
			</div>
		</div>

		<div class="container">
			<h6>.container</h6>

			<div class="row">
				<h6>.row</h6>

				<div class="col-4 col-item">
					<h6>.col-4</h6>
				</div>

				<div class="col-4 col-item">
					<h6>.col-4</h6>
				</div>

				<div class="col-4 col-item">
					<h6>.col-4</h6>
				</div>
			</div>
		</div>

		<div class="container">
			<h6>.container</h6>

			<div class="row">
				<h6>.row</h6>

				<div class="col-3 col-item">
					<h6>.col-3</h6>
				</div>

				<div class="col-3 col-item">
					<h6>.col-3</h6>
				</div>

				<div class="col-3 col-item">
					<h6>.col-3</h6>
				</div>

				<div class="col-3 col-item">
					<h6>.col-3</h6>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>