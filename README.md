
<div id="top"></div>

<div align="center">

<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Ffilmstrip-box-multiple.svg&fill=%239A3412&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">Page-Builder Video Rotator</h3>

<p align="center">
    Renders a block element that shows you multiple videos that change every few seconds.
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents



* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
	* 3.1. [Instance.](#Instance.)
	* 3.2. [Wrapper.](#Wrapper.)
	* 3.3. [Menu Wrapper.](#MenuWrapper.)
	* 3.4. [Content Wrapper.](#ContentWrapper.)
	* 3.5. [Rotator.](#Rotator.)
	* 3.6. [CSS.](#CSS.)
	* 3.7. [Javascript.](#Javascript.)
* 4. [Customising](#Customising)
* 5. [Troubleshooting](#Troubleshooting)
* 6. [Contributing](#Contributing)
* 7. [License](#License)
* 8. [Contact](#Contact)
* 9. [Changelog](#Changelog)



##  2. <a name='AboutTheProject'></a>About The Project

ACF-Based panel for inserting a video rotator.

This was inspired by one of the blocks that squarespace have on their homepage that I replicated. Is has links to select different videos to watch.

![londonparkour](https://github.com/IORoot/wp-plugin__page-builder--video-rotator/blob/master/files/docs/londonparkour.png?raw=true)
![Squarespace](https://github.com/IORoot/wp-plugin__page-builder--video-rotator/blob/master/files/docs/squarespace.png?raw=true)

<p align="right">(<a href="#top">back to top</a>)</p>


###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [https://github.com/IORoot/wp-plugin__page-builder](https://github.com/IORoot/wp-plugin__page-builder)
* [Tailwind](https://tailwindcss.com/)
* [ACF](https://advancedcustomfields.com/)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>


###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```bash
    git clone https://github.com/IORoot/wp-plugin__page-builder--video-rotator ./wp-content/plugins/page-builder-videorotator
    ```
1. Activate the plugin.


> Note: This plugin requires the page-builder plugin to work [https://github.com/IORoot/wp-plugin__page-builder](https://github.com/IORoot/wp-plugin__page-builder)

<p align="right">(<a href="#top">back to top</a>)</p>

##  3. <a name='Usage'></a>Usage

The video selector plugin has seven tabs:

###  3.1. <a name='Instance.'></a>Instance.

- Enabled. Render this on the page or not.
- Instance Name. Slug identifier.

![instance](https://github.com/IORoot/wp-plugin__page-builder--video-rotator/blob/master/files/docs/instance.png?raw=true)

###  3.2. <a name='Wrapper.'></a>Wrapper.

- Wrapper Open. Any HTML to start before everything else.
- Wrapper Close. Any HTML at the end of everything else.

![wrapper](https://github.com/IORoot/wp-plugin__page-builder--video-rotator/blob/master/files/docs/wrapper.png?raw=true)

###  3.3. <a name='MenuWrapper.'></a>Menu Wrapper.

- Menu Wrapper Open. Any HTML to start before the menu options.
- Menu Wrapper Close. Any HTML at the end of the menu options.

![menu-wrapper](https://github.com/IORoot/wp-plugin__page-builder--video-rotator/blob/master/files/docs/menu-wrapper.png?raw=true)

###  3.4. <a name='ContentWrapper.'></a>Content Wrapper.

- Content Wrapper Open. Any HTML to start before the rest of the content (videos / text / buttons).
- Content Wrapper Close. Any HTML at the end of the content (videos / text / buttons.)

![content-wrapper](https://github.com/IORoot/wp-plugin__page-builder--video-rotator/blob/master/files/docs/content-wrapper.png?raw=true)

###  3.5. <a name='Rotator.'></a>Rotator.

- Rotator Instance (row)
    - Identifier. Title to separate from other rows.
    - Menu Item. This is the code that will be used in the menu. Usually a list item with a link tag in it.
        ```html
        <li class="current" data-id="one" ><a href="/classes">OUTDOOR CLASS</a></li>
        ```
    - Content. What to render when the menu item gets clicked. Example:
        ```html
        <div class="one">
            <lite-youtube class="lazyload w-full h-40 md:h-64 lg:h-96 bg-cover bg-center block rounded mb-10 flex cursor-pointer" videoid="8UEP-8yX7E0" style="background-image: url('/wp-content/uploads/Essential/video-covers/outdoor.jpg');">
                <svg role="img" aria-label="youtube logo button" width="100px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="m-auto fill-white hover:fill-youtube">
                    <path d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z"></path></svg>
            </lite-youtube>
            
            <h3 class="mb-4 text-xl md:text-2xl ">This is real, practical, parkour movement for beginners.</h3>
            <p class="leading-8 mb-10 lg:w-2/3" >Crafted with the true spirit of parkour and refined to be one of the most enjoyable, challenging and rewarding training sessions you will ever participate in.</p>
            <a href="/classes" class="py-4 px-10 mr-4 inline-block z-10 w-full rounded-xl md:w-auto text-center bg-night text-white hover:bg-Blue900 hover:text-white">MORE DETAILS</a>
                
        </div>
        ```

![rotator](https://github.com/IORoot/wp-plugin__page-builder--video-rotator/blob/master/files/docs/rotator.png?raw=true)

###  3.6. <a name='CSS.'></a>CSS.

- Inline CSS. A `<style>` tag is inserted above the video selector with this code in it. Use it to style the items within. Below is the CSS for LondonParkour.com video rotator:

```css
<style>
	.rotator .current {
		position: relative;
	}

	.rotator .current a { 
		border-bottom: 5px solid; 
		color: #ffffff;
	}

	.rotator .current a:after {
        display: inline-block;
        content: ' ';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ffffff' %3E%3Cpath d='M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z'/%3E%3C/svg%3E");
        background-size: 2rem 2rem;
        background-repeat: no-repeat;
        background-position: center;
        height: 100%;
        width: 2.5rem;
        position: absolute;
        top: 0px;
        fill: #ffffff;
	}

	.rotator-content > :not(.hidden) {
		opacity: 1;
		animation: fade 1s linear;
	}

	@keyframes fade {
        0%   { opacity: 0 }
        100% { opacity: 1 }
	}

</style>
```

![css](https://github.com/IORoot/wp-plugin__page-builder--video-rotator/blob/master/files/docs/css.png?raw=true)

###  3.7. <a name='Javascript.'></a>Javascript.

- Javascript. Added into the footer of the page. Example is the code used for the video-rotator on LondonParkour.com:

```javascript
<script defer onload type="text/javascript">
	
	// VIDEO ROTATOR - Menu Items
	let items = document.querySelectorAll(".rotator-menu li");
	let pause = false;

	for (let elem of items) {
	
        elem.firstChild.addEventListener('mouseenter', () => {
			clear_all_menus(items);
			clear_all_content();
			add_current_menu(elem);
			show_content(elem.dataset.id);
			pause = true;
			clear_all_timeouts();
        });
		
		// start loop again.
		elem.firstChild.addEventListener('mouseleave', () => {
			pause = false;
			myLoop();  
		});
	};


	// If hovering over contents, pause.
	let contents = document.querySelectorAll(".rotator-content");

	contents[0].addEventListener('mouseenter', () => {
		pause = true;
		clear_all_timeouts();
	});

	contents[0].addEventListener('mouseleave', () => {
		pause = false;
		myLoop();  
	});
	



	function add_current_menu(elem) {
		elem.classList.add("current");
	}

	function clear_all_menus(items) {
		for (let item of items) {
			item.classList.remove("current");
		}
	}

	function clear_all_content() {
		content = document.querySelectorAll(".rotator-content > div");
		for (let item of content) {
			item.classList.add("hidden");
		}
	}

	function show_content(id) {
		content = document.querySelectorAll(".rotator-content ."+id);
		content[0].classList.remove("hidden");
	}

	function clear_all_timeouts() {
		const highestId = window.setTimeout(() => {
			for (let i = highestId; i >= 0; i--) {
				window.clearInterval(i);
			}
		}, 0);
	}
	
	// Loop through each menu item.
	var i = 0;   
	function myLoop() { 
		if (!pause){ 
			setTimeout(function() {
				clear_all_menus(items);
				clear_all_content();
				add_current_menu(items[i]);
				show_content(items[i].dataset.id);
				i++; 
				if (i == items.length) { i = 0; }
				if (i < items.length) { myLoop(); }  	  
			}, 5000)
		}	
	}
	myLoop();              

</script>
```

![javascript](https://github.com/IORoot/wp-plugin__page-builder--video-rotator/blob/master/files/docs/javascript.png?raw=true)


##  4. <a name='Customising'></a>Customising

None.

##  5. <a name='Troubleshooting'></a>Troubleshooting

None.

<p align="right">(<a href="#top">back to top</a>)</p>


##  6. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  8. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>


##  9. <a name='Changelog'></a>Changelog

v1.0.0 - Initial Release
