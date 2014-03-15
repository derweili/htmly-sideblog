htmly
=====

A Theme for HTMLy<br />
http://www.htmly.com

Demo:<br />
http://www.julian-weiland.de/htmly

<strong>Features:</strong>
<ul>
<li>Html/css only</li>
<li>Background image,</li>
<li>Clean and minimalistic Design</li>
<li>Responsive Design</li>
<li>SEO</li>
<li>iOS WebApp</li>
<li>Google Fonts</li>
</ul>
<hr />
<h2>Configuration</h2>
<h3>Background image:</h3>
<p>You need the abolute path to your Image.</p>
<pre>
<code>my.bgimage = "http://www.julian-weiland.de/htmly/themes/sideblog/img/hintergrund-1.jpg" </code>
</pre>
<h3>Fonts:</h3>
<p>You can use every google font for your Blog. Just use this code (you can even add only a few of it)</p>
<p>Code for Headlinefont:</p>
<pre>
<code>; Headline Fonts my.headlinesrc = "<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>" my.headlinefont = "'Josefin Slab', Arial" my.headlineweight = "600" my.headlinestyle = "normal" </code>
</pre>
<p>
<strong>Note:</strong>
</p>
<ol>
<li>The values ​​in the example show the default values​​, which will work without a config entry.</li>
<li>Don't use double quotation marks as value, only use single as you can see in the example</li>
<li>my.headlinesrc : link element to load google font</li>
<li>myheadlinefont : the name of the font to use</li>
<li>myheadlineweight: define fontweight</li>
<li>myheadlinestyle: define fontstyle e.g. italic</li>
</ol>
<p>You cando the same with the copytext:</p>
<pre>
<code>; Headline Fonts my.copysrc = "<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' type='text/css'>" my.copyfont = "'Lato,Arial,sans-serif" my.headlineweight = "400" my.headlinestyle = "normal" </code>
</pre>
<h3>Interested in SEO Configuration? look here:</h3>
<p>
<a href="http://www.julian-weiland.de/htmly/2014/03/seo">http://www.julian-weiland.de/htmly/2014/03/seo</a>
</p>

<h2>SEO Configuration </h2>
<p>Sideblog also inlcudes also SEO Features. Some features will work out of the box, some have to be configurated.</p>
<p>To do so you have to add some lines to config.ini All lines are have the same structure: First the attribute socond the value, separated by a equal sign. The value is delimited by double quotation marks, so all double quotes must be replaced with single quotes in the values​​.</p>
<p>Example:</p>
<pre>
<code>attribute = "value" seo.author = "http://julian-weiland.de/" </code>
</pre>
<h2>Lines to add in config for SEO Configuration:</h2>
<p>Author URL:</p>
<pre>
<code>seo.author = "http://julian-weiland.de/" </code>
</pre>
<p>Location:</p>
<pre>
<code>seo.location = "de_DE" </code>
</pre>
<p>Open Graph image: (usualy article)</p>
<pre>
<code>seo.ogimage = "http://linktoimage.jpg" </code>
</pre>
<p>Open Graph Content type: (usualy article)</p>
<pre>
<code>seo.ogtype = "article" </code>
</pre>
<p>Apple Touch Images (use always absolute URLs) Basic Touch image</p>
<pre>
<code>seo.ati = "http://link-to-touch-image.jpg" </code>
</pre>
<p>touch Image 76px x 76 px</p>
<pre>
<code>seo.ati76 = "http://link-to-touch-image.jpg" </code>
</pre>
<p>touch Image 120px x 120 px</p>
<pre>
<code>seo.ati120 = "http://link-to-touch-image.jpg" </code>
</pre>
<p>touch Image 152px x 152 px</p>
<pre>
<code>seo.ati152 = "http://link-to-touch-image.jpg" </code>
</pre>
<p>Apple Startup Image</p>
<pre>
<code>seo.asi = "http://link-to-startup-image.jpg" </code>
</pre>

<hr />
<h2>Responsive Design </h2>
Sideblog Themes looks beautifull on all Devices. Since the page loads in less then one second you can few it easily on mobil devices. (The use of large image files can affect this negatively.) 
<img src=‚http://i59.tinypic.com/nz572q.png' alt=‚sideblog-responsive‘ />