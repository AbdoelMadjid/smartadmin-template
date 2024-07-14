@extends('inc.main')
@section('title', 'General Docs')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-duotone.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Documentation'])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'book',
                'heading1' => 'Documentation:',
                'heading2' => 'General Docs',
                'pagedescription' => 'Product documentation, plugin reference, and online help',
            ])
            @endcomponent
        </div>
        <a href="javascript:void(0);" name="top"></a>
        <ul class="fs-md fw-700 mb-5 list-spaced">
            <li>
                <a href="#introduction">Introduction</a>
            </li>
            <li>
                <a href="#gulp">Gulp Installation For Advanced Usage</a>
            </li>
            <li>
                <a href="#buildjson">Build.json For Gulp Usage</a>
            </li>
            <li>
                <a href="#app.config.js">Configuration JS</a>
            </li>
            <li>
                <a href="#applayouts">Layout Options</a>
            </li>
            <li>
                <a href="#skinsthemes">Skins & Themes</a>
            </li>
            <li>
                <a href="#seedslim">Seed & Slim Projects</a>
            </li>
            <li>
                <a href="#filestructure">File Structure</a>
            </li>
            <li>
                <a href="#pluginreference">Plugin Reference & Dependency</a>
            </li>
            <li>
                <a href="#rtlsupport">RTL Support</a>
            </li>
            <li>
                <a href="#productsupport">Product Support</a>
            </li>
            <li>
                <a href="#changingcomponentcolors">Changing Component Colors</a>
            </li>
            <li>
                <a href="#browsersupport">Browser Support</a>
            </li>
            <li>
                <a href="#components">Components</a>
            </li>
        </ul>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Introduction <a href="javascript:void(0);" name="introduction"></a>
                    <small>
                        First of all, thank you so much for supporting our product! We are excited to have you as our
                        customer and as with any Theme and/or Product, good documentation is essential to provide you with
                        that first solid impression and we hope we have delivered on that expectation.
                    </small>
                </h2>
                <div class="panel-tag">
                    You can use the Table of Contents below to quickly jump to each section and find a quick reference to
                    all the pages that we currently have available. However, if you do find something missing, do feel free
                    to voice your opinion and/or requests on our Support Forum! We check these on a near daily basis and
                    many customers have already contributed great ideas that have made it into updates of the Theme and the
                    documentation!
                </div>
                <p>
                    <strong>Once again it is great to have you onboard and thank you -very- much for supporting this
                        project!</strong>
                </p>
                <p>
                    This template and projects demonstrates the core principles and concepts of how you can integrate
                    SmartAdmin 4 with your favorite backend platform. We aim, and do our best, to create a reference project
                    based on community adopted guidelines and principles. That said, with our years of experience and our
                    focus on quality we believe that this template will provide you with a great starting point that you can
                    use for your own project purposes and customizations.
                </p>
                <p class="mb-g">
                    What this template, and documentation is not however, is a tutorial and/or introduction in all things
                    HTML. For that we would kindly ask you to check the Resources listed below and go through all the pages
                    for all the components, each component has either a link to its documentation source or examples of
                    usage. Some level of knowledge on these topics will be required when explaining and discussing the theme
                    and project, but we will do our best to ensure that all levels of experience can benefit and read along.
                </p>
                <strong>Where to Start?</strong>
                <p>The best area to start is with this documentation page. If you are looking for a blank slate, a nice bet
                    would be to go with <a href="/page_blank" title="blank" target="_blank">Blank Page</a>, it has
                    everything you need to get started with the barebone essentials only.</p>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Gulp Installation For Advanced Usage <a href="javascript:void(0);" name="gulp"></a>
                    <small class="m-0">
                        This webapp UI toolkit is based on Bootstrap 4 framework that provides a complete frontend user
                        interface to build any type of web or mobile application. The package includes state of the art
                        build tools to manage and deploy project assets with ease. This documentation will provide
                        information you need to be able to use SmartAdmin WebApp in your applications, customising it to
                        match your development needs and requirements at a fast pace environment.
                        <br>
                        <br>
                        This section guides you to install all required software and libraries in order to fully utilize
                        this UI toolkit for your project(s).
                        <br>
                        <a class="h3 mt-5 btn btn-primary" target="_blank"
                            href="https://www.youtube.com/watch?v=LwD-kYlZXtw">Watch the video ►</a>
                    </small>
                </h2>
                <hr class="my-5">
                <ol class="list-spaced fs-md">
                    <li>
                        <strong class="mb-1 d-block fs-lg">
                            Install Git (<span class="fw-500 text-danger">important</span>)
                        </strong>
                        <p>
                            Before you start using Git, you have to make it available on your computer. Even if it’s already
                            installed, it’s probably a good idea to update to the latest version. You can either install it
                            as a package or via another installer, or <a
                                href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git"
                                target="_blank">download the source code</a> and compile it yourself
                        </p>
                    </li>
                    <li>
                        <strong class="mb-1 d-block fs-lg">
                            Install Node.js
                        </strong>
                        <p>
                            Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine. Node.js is required in
                            order to run the application build tools. Download the latest version of Node and install it: <a
                                href="https://nodejs.org/en/download/" target="_blank">nodejs.org/en/download/</a>
                        </p>
                    </li>
                    <li>
                        <strong class="mb-1 d-block fs-lg">
                            Install NPM
                        </strong>
                        <p class="mb-1">
                            Npm is the package manager for JavaScript and the world’s largest software registry. Npm is a
                            separate project from Node.js, and tends to update more frequently. As a result, even if you’ve
                            just downloaded Node.js (and therefore npm), you’ll probably need to update your npm.
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-g w-100">
                            npm install npm@latest -g
                        </code>
                        <p class="mb-1">
                            Verify that npm in successfully installed, and version of installed npm will appear.
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-g w-100">
                            npm --version
                        </code>
                    </li>
                    <li>
                        <strong class="mb-1 d-block fs-lg">
                            Install Gulp
                        </strong>
                        <p class="mb-1">
                            Gulp is a toolkit that helps you automate your time-consuming tasks in development workflow. To
                            install gulp globally.
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-g w-100">
                            npm install gulp-cli -g
                        </code>
                        <p class="mb-1">
                            If you have previously installed a version of <code>gulp</code> globally, please remove it to
                            make sure old version doesn't collide with new <code>gulp-cli</code>
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-g w-100">
                            npm rm --global gulp
                        </code>
                        <p class="mb-1">
                            Verify that gulp in successfully installed, and version of installed gulp will appear.
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-g w-100">
                            gulp --version
                        </code>
                    </li>
                    <li>
                        <strong class="mb-1 d-block fs-lg">
                            Install NPM Packages
                        </strong>
                        <p class="mb-1">
                            NPM packages are a great way to ensure your files are up to date and everyone in your
                            development tree is using the same version for the files. To install the npm you simple type:
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-1 w-100">
                            npm install
                        </code>
                        <div class="mb-g help-block">
                            You may or may not see some messages regarding vulnerabilities, we and the npm community, are
                            aware of these issues and you can choose to ignore them or upgrade your jquery to the latest
                            version (warning: doing so may break IE10 Datatables responsive plugin)
                        </div>
                        <p class="mb-1">
                            Check outdated files and versions by typing:
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-g w-100">
                            npm outdated
                        </code>
                        <p>
                            If you are updating the npm packages, please be sure to read their changelogs for any breaking
                            changes before you do any major update. To update a package, simple open your package.json file
                            and change the version number run <code>npm i</code> command
                        </p>
                    </li>
                    <li>
                        <strong class="mb-1 d-block fs-lg">
                            Build project
                        </strong>
                        <p>
                            Once all your NPM packages are installed you can now run the command to build your project. The
                            build project will compile your project and create the necessary HTML files, CSS, and JS scripts
                            related for each page. Once the compilation is completed, gulp will switch to 'watch' mode and
                            watch for changes in your JS/HBS templates/SCSS files. Any changes you make, gulp will auto
                            compile the project in seconds.
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-g w-100">
                            gulp build
                        </code>
                        <p>
                            Once the compilation is complete, you can go to <a href="http://localhost:4000"
                                target="_blank">http://localhost:4000</a> to view your compiled project
                        </p>
                    </li>
                    <li>
                        <strong class="mb-1 d-block fs-lg">
                            Other commands
                        </strong>
                        <p class="mb-1">
                            Gulp watch will initialize the file watch process and start the server
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-g w-100">
                            gulp watch
                        </code>
                        <p class="mb-1">
                            Gulp build-nav will build the _nav.hbs file from your nav.json file
                        </p>
                        <code class="bg-fusion-500 d-block pt-2 pr-3 pb-2 pl-3 fw-700 mb-g w-100">
                            gulp build-nav
                        </code>
                    </li>
                </ol>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Build.json For Gulp Usage <a href="javascript:void(0);" name="buildjson"></a>
                    <small>
                        Configure your project files <code>build.json</code>. You can completely slim down your project
                        through the build.json file.
                    </small>
                </h2>
                <div class="fw-500 mb-1">
                    File app.config.js contents
                </div>
                <div class="border border-dark mb-g overflow-hidden rounded">
                    <pre class="prettyprint fs-md mb-0" style="max-height: 250px;">
{
	"config": {
		"debug": false,
		"data" : {
			"app": "SmartAdmin",
			"app-name": "SmartAdmin WebApp",
			"app-flavor": "SmartAdmin WebApp",
			"app-flavor-subscript": "",
			"user": "Dr. Codex Lantern",
			"email": "drlantern@gotbootstrap.com",
			"twitter": "codexlantern",
			"avatar": "avatar-admin.png",
			"version": "4.5.1",
			"bs4v": "4.5",
			"logo": "logo.png",
			"logo-m": "logo.png",
			"copyright": "2020 © SmartAdmin by&amp;nbsp;&lt;a href&#x3D;&#x27;https://www.gotbootstrap.com&#x27; class&#x3D;&#x27;text-primary fw-500&#x27; title&#x3D;&#x27;gotbootstrap.com&#x27; target&#x3D;&#x27;_blank&#x27;&gt;gotbootstrap.com&lt;/a&gt;",
			"copyright-inverse": "2020 © SmartAdmin by&amp;nbsp;&lt;a href&#x3D;&#x27;https://www.gotbootstrap.com&#x27; class&#x3D;&#x27;text-white opacity-40 fw-500&#x27; title&#x3D;&#x27;gotbootstrap.com&#x27; target&#x3D;&#x27;_blank&#x27;&gt;gotbootstrap.com&lt;/a&gt;",
			"iconPrefix": "fal",
			"layoutSettings": true,
			"chatInterface": true,
			"shortcutMenu": true,
			"appLayoutShortcut": true,
			"appShortcutModal": true,
			"appHeader": true,
			"appFooter": true,
			"appSidebar": true
		},
		"compile": {
			"jsUglify": false,
			"cssMinify": false,
			"jsSourcemaps": false,
			"cssSourcemaps": true,
			"autoprefixer": true,
			"seedOnly": false,
			"rtl": false
		},
		"path": {
			"src": "./src",
			"node_modules": "./node_modules",
			"exportPath": "./src/template/include/_nav.hbs",
			"outputPath": "./src/template/include"
		},
		"dist": {
			"theme": {
				"path": "./dist"
			}
		}
	},
	"build": {
		"vendors": {
			"base": {
				"src": {
					"required": {
						"pace-js": {
							"scripts": [
								"{$config.path.node_modules}/pace-js/pace.js"
							]
						},
						"jquery": {
							"scripts": [
								"{$config.path.node_modules}/jquery/dist/jquery.js"
							]
						},
						"jquery-ui": {
							"scripts": [
								"{$config.path.src}/custom/plugins/jquery-ui-cust/jquery-ui-cust.js"
							]
						},
						"bootstrap": {
							"styles": [
								"{$config.path.src}/scss/bootstrap.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/popper.js/dist/umd/popper.js",
								"{$config.path.node_modules}/bootstrap/dist/js/bootstrap.js"
							]
						},
						"bootbox": {
							"scripts": [
								"{$config.path.src}/custom/plugins/bootbox/bootbox-cust.js",
								"{$config.path.src}/custom/plugins/bootbox/bootbox-config.js"
							]
						},
						"jquery-snippets": {
							"scripts": [
								"{$config.path.src}/custom/plugins/jquery-snippets/jquery-snippets.js"
							]
						},
						"throttle-debounce": {
							"scripts": [
								"{$config.path.node_modules}/jquery-throttle-debounce/jquery.ba-throttle-debounce.js"
							]
						},
						"webfonts": {
							"styles": [
								"{$config.path.src}/scss/app.icons.scss"
							],
							"fonts": [
								"{$config.path.src}/custom/webfonts/fontawesome-pro-master/webfonts/**",
								"{$config.path.src}/custom/webfonts/nextgen-fonts-master/webfonts/**",
								"{$config.path.src}/custom/webfonts/plugins/summernote/**"
							]
						}
					},
					"optional": {
						"jquery-slimscroll": {
							"scripts": [
								"{$config.path.node_modules}/jquery-slimscroll/jquery.slimscroll.js"
							]
						},
						"waves": {
							"scripts": [
								"{$config.path.node_modules}/node-waves/dist/waves.js"
							]
						},
						"smartpanels": {
							"scripts": [
								"{$config.path.src}/custom/plugins/smartpanels/smartpanels.js"
							]
						},
						"app-images" : {
							"images" : [
								"{$config.path.src}/img/**"
							]
						},
						"app-data": {
							"json" : [
								"{$config.path.src}/custom/webfonts/fontawesome-pro-master/used-for-demo-pages/*.json",
								"{$config.path.src}/custom/webfonts/nextgen-fonts-master/used-for-demo-pages/*.json",
								"{$config.path.src}/custom/plugins/datatables/demo-data/*.json",
								"{$config.path.src}/custom/docs-data/*.json",
								"{$config.path.src}/custom/lang/*.json"

							]
						},
						"app-media": {
							"media" : [
								"{$config.path.src}/custom/media/**"
							]
						}
					}
				},
				"bundle": {
					"styles": "{$config.output}/css/vendors.bundle.css",
					"scripts": "{$config.output}/js/vendors.bundle.js",
					"images": "{$config.output}/img",
					"fonts": "{$config.output}/webfonts",
					"json": "{$config.output}/media/data/",
					"media": "{$config.output}/media"
				}
			},
			"custom": {
				"i18next": {
					"src": {
						"scripts": [
							"{$config.path.node_modules}/i18next-client/i18next.js"
						]
					},
					"bundle": {
						"scripts": "{$config.output}/js/i18n/i18n.js"
					}
				},
				"fontawesome": {
					"light" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/webfonts/fontawesome-pro-master/scss/light.scss"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/fa-light.scss"
						}
					},
					"regular" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/webfonts/fontawesome-pro-master/scss/regular.scss"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/fa-regular.scss"
						}
					},
					"solid" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/webfonts/fontawesome-pro-master/scss/solid.scss"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/fa-solid.scss"
						}
					},
					"duotone" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/webfonts/fontawesome-pro-master/scss/duotone.scss"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/fa-duotone.scss"
						}
					},
					"brand" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/webfonts/fontawesome-pro-master/scss/brands.scss"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/fa-brands.scss"
						}
					}
				}
			},
			"addons": {
				"statistics" : {
					"dygraph" : {
						"plugin" : {
							"src": {
								"styles":[
									"{$config.path.node_modules}/dygraphs/dist/dygraph.css"
								],
								"scripts": [
									"{$config.path.node_modules}/dygraphs/dist/dygraph.min.js"
								]
							},
							"bundle": {
								"styles": "{$config.output}/css/statistics/dygraph/dygraph.css",
								"scripts": "{$config.output}/js/statistics/dygraph/dygraph.js"
							}
						},
						"demo-data" : {
							"src": {
								"scripts": [
									"{$config.path.src}/custom/demo-data/demo-data-dygraph.js"
								]
							},
							"bundle": {
								"scripts": "{$config.output}/js/statistics/demo-data/demo-data-dygraph.js"
							}
						}
					},
					"flotchart" : {
						"src": {
							"scripts": [
								"{$config.path.node_modules}/flot/jquery.flot.js",
								"{$config.path.node_modules}/flot/jquery.colorhelpers.js",
								"{$config.path.node_modules}/flot/jquery.flot.canvas.js",
								"{$config.path.node_modules}/flot/jquery.flot.categories.js",
								"{$config.path.node_modules}/flot/jquery.flot.crosshair.js",
								"{$config.path.node_modules}/flot/jquery.flot.errorbars.js",
								"{$config.path.node_modules}/flot/jquery.flot.fillbetween.js",
								"{$config.path.node_modules}/flot/jquery.flot.image.js",
								"{$config.path.node_modules}/flot/jquery.flot.navigate.js",
								"{$config.path.node_modules}/flot/jquery.flot.pie.js",
								"{$config.path.node_modules}/flot/jquery.flot.resize.js",
								"{$config.path.node_modules}/flot/jquery.flot.selection.js",
								"{$config.path.node_modules}/flot/jquery.flot.stack.js",
								"{$config.path.node_modules}/flot-spline/js/jquery.flot.spline.js",
								"{$config.path.node_modules}/flot/jquery.flot.symbol.js",
								"{$config.path.node_modules}/flot/jquery.flot.threshold.js",
								"{$config.path.node_modules}/jquery.flot.tooltip/js/jquery.flot.tooltip.js",
								"{$config.path.node_modules}/flot/jquery.flot.time.js"
							]
						},
						"bundle": {"scripts": "{$config.output}/js/statistics/flot/flot.bundle.js"}
					},
					"chartjs" : {
						"src": {
							"styles":[
								"{$config.path.node_modules}/chart.js/dist/Chart.css"
							],
							"scripts": [
								"{$config.path.node_modules}/chart.js/dist/Chart.bundle.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/statistics/chartjs/chartjs.css",
							"scripts": "{$config.output}/js/statistics/chartjs/chartjs.bundle.js"
						}
					},
					"chartist" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/plugins/chartist/chartist.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/chartist/dist/chartist.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/statistics/chartist/chartist.css",
							"scripts": "{$config.output}/js/statistics/chartist/chartist.js"
						}
					},
					"d3" : {
						"src": {
							"scripts": [
								"{$config.path.node_modules}/d3/dist/d3.js"
							]
						},
						"bundle": {
							"scripts": "{$config.output}/js/statistics/d3/d3.js"
						}
					},
					"c3" : {
						"plugin": {
							"src": {
								"styles":[
									"{$config.path.node_modules}/c3/c3.css"
								],
								"scripts": [
									"{$config.path.node_modules}/c3/c3.js"
								]
							},
							"bundle": {
								"styles": "{$config.output}/css/statistics/c3/c3.css",
								"scripts": "{$config.output}/js/statistics/c3/c3.js"
							}
						},
						"demo-data": {
							"src": {
								"scripts": [
									"{$config.path.src}/custom/demo-data/demo-c3.js"
								]
							},
							"bundle": {
								"scripts": "{$config.output}/js/statistics/demo-data/demo-c3.js"
							}
						}
					},
					"peity" : {
						"src": {
							"scripts": [
								"{$config.path.node_modules}/peity/jquery.peity.js",
								"{$config.path.src}/custom/plugins/peity/jquery.peity.config.js"
							]
						},
						"bundle": {
							"scripts": "{$config.output}/js/statistics/peity/peity.bundle.js"
						}
					},
					"sparkline" : {
						"src": {
							"scripts": [
								"{$config.path.node_modules}/jquery-sparkline/jquery.sparkline.js",
								"{$config.path.src}/custom/plugins/jquery-sparkline/jquery-sparkline.config.js"
							]
						},
						"bundle": {
							"scripts": "{$config.output}/js/statistics/sparkline/sparkline.bundle.js"
						}
					},
					"easypiechart" : {
						"src": {
							"scripts": [
								"{$config.path.node_modules}/easy-pie-chart/dist/jquery.easypiechart.js",
								"{$config.path.src}/custom/plugins/easy-pie-chart/jquery.easypiechart.config.js"
							]
						},
						"bundle": {
							"scripts": "{$config.output}/js/statistics/easypiechart/easypiechart.bundle.js"
						}
					}
				},
				"datagrid" : {
					"datatables" : {
						"core" : {
							"src": {
								"styles":[
									"{$config.path.node_modules}/datatables.net-bs4/css/dataTables.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-autofill-bs4/css/autoFill.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-buttons-bs4/css/buttons.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-keytable-bs4/css/keyTable.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-responsive-bs4/css/responsive.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-scroller-bs4/css/scroller.bootstrap4.css",
									"{$config.path.node_modules}/datatables.net-select-bs4/css/select.bootstrap4.css",
									"{$config.path.src}/custom/plugins/datatables/datatables.styles.app.scss"
								],
								"scripts": [
									"{$config.path.node_modules}/datatables.net/js/jquery.dataTables.js",
									"{$config.path.node_modules}/datatables.net-bs4/js/dataTables.bootstrap4.js",
									"{$config.path.src}/custom/plugins/datatables/datatables.styles.app.js",
									"{$config.path.node_modules}/datatables.net-autofill/js/dataTables.autoFill.js",
									"{$config.path.node_modules}/datatables.net-autofill-bs4/js/autoFill.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-buttons/js/dataTables.buttons.js",
									"{$config.path.node_modules}/datatables.net-buttons-bs4/js/buttons.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-buttons/js/buttons.html5.js",
									"{$config.path.node_modules}/datatables.net-buttons/js/buttons.print.js",
									"{$config.path.node_modules}/datatables.net-buttons/js/buttons.colVis.js",
									"{$config.path.src}/custom/plugins/datatables/datatables.styles.buttons.app.js",
									"{$config.path.node_modules}/datatables.net-colreorder/js/dataTables.colReorder.js",
									"{$config.path.node_modules}/datatables.net-colreorder-bs4/js/colReorder.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-fixedcolumns/js/dataTables.fixedColumns.js",
									"{$config.path.node_modules}/datatables.net-fixedcolumns-bs4/js/fixedColumns.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-fixedheader/js/dataTables.fixedHeader.js",
									"{$config.path.node_modules}/datatables.net-fixedheader-bs4/js/fixedHeader.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-keytable/js/dataTables.keyTable.js",
									"{$config.path.node_modules}/datatables.net-keytable-bs4/js/keyTable.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-responsive/js/dataTables.responsive.js",
									"{$config.path.node_modules}/datatables.net-responsive-bs4/js/responsive.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-rowgroup/js/dataTables.rowGroup.js",
									"{$config.path.node_modules}/datatables.net-rowgroup-bs4/js/rowGroup.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-rowreorder/js/dataTables.rowReorder.js",
									"{$config.path.node_modules}/datatables.net-rowreorder-bs4/js/rowReorder.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-scroller/js/dataTables.scroller.js",
									"{$config.path.node_modules}/datatables.net-scroller-bs4/js/scroller.bootstrap4.js",
									"{$config.path.node_modules}/datatables.net-select/js/dataTables.select.js",
									"{$config.path.node_modules}/datatables.net-select-bs4/js/select.bootstrap4.js",
									"{$config.path.src}/custom/plugins/datatables-alteditor/datatables-alteditor.js"
								]
							},
							"bundle": {
								"styles": "{$config.output}/css/datagrid/datatables/datatables.bundle.css",
								"scripts": "{$config.output}/js/datagrid/datatables/datatables.bundle.js"
							}
						},
						"export" : {
							"src": {
								"scripts": [
									"{$config.path.node_modules}/jszip/dist/jszip.js",
									"{$config.path.node_modules}/pdfmake/build/pdfmake.js",
									"{$config.path.node_modules}/pdfmake/build/vfs_fonts.js"
								]
							},
							"bundle": {
								"scripts": "{$config.output}/js/datagrid/datatables/datatables.export.js"
							}
						}
					}
				},
				"notifications" : {
					"toastr" : {
						"src": {
							"styles":[
								"{$config.path.node_modules}/toastr/toastr.scss",
								"{$config.path.src}/custom/plugins/toastr/toastr-custom.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/toastr/toastr.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/notifications/toastr/toastr.css",
							"scripts": "{$config.output}/js/notifications/toastr/toastr.js"
						}
					},
					"sweetalert2" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/plugins/sweetalert2/sweetalert2.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/es6-promise-polyfill/promise.js",
								"{$config.path.node_modules}/sweetalert2/dist/sweetalert2.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/notifications/sweetalert2/sweetalert2.bundle.css",
							"scripts": "{$config.output}/js/notifications/sweetalert2/sweetalert2.bundle.js"
						}
					}
				},
				"formplugins" : {
					"colorpicker" : {
						"src": {
							"styles":[
								"{$config.path.node_modules}/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css"
							],
							"scripts": [
								"{$config.path.node_modules}/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/bootstrap-colorpicker/bootstrap-colorpicker.css",
							"scripts": "{$config.output}/js/formplugins/bootstrap-colorpicker/bootstrap-colorpicker.js"
						}
					},
					"datepicker" : {
						"src": {
							"styles": [
								"{$config.path.node_modules}/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css",
								"{$config.path.src}/custom/plugins/datepicker/datepicker-custom.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css",
							"scripts": "{$config.output}/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js"
						}
					},
					"daterangepicker" : {
						"src": {
							"styles": [
								"{$config.path.node_modules}/bootstrap-daterangepicker/daterangepicker.css",
								"{$config.path.src}/custom/plugins/daterangepicker/daterangepicker-custom.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/bootstrap-daterangepicker/daterangepicker.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css",
							"scripts": "{$config.output}/js/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.js"
						}
					},
					"dropzone" : {
						"src": {
							"styles": [
								"{$config.path.node_modules}/dropzone/dist/dropzone.css",
								"{$config.path.src}/custom/plugins/dropzone/dropzone-custom.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/dropzone/dist/dropzone.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/dropzone/dropzone.css",
							"scripts": "{$config.output}/js/formplugins/dropzone/dropzone.js"
						}
					},
					"ion-rangeslider": {
						"src": {
							"styles": [
								"{$config.path.node_modules}/ion-rangeslider/css/ion.rangeSlider.css",
								"{$config.path.src}/custom/plugins/ion-rangeslider/ion.rangeslider-custom.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/ion-rangeslider/js/ion.rangeSlider.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/ion-rangeslider/ion-rangeslider.css",
							"scripts": "{$config.output}/js/formplugins/ion-rangeslider/ion-rangeslider.js"
						}
					},
					"inputmusk": {
						"src": {
							"scripts": [
								"{$config.path.node_modules}/inputmask/dist/jquery.inputmask.bundle.js"
							]
						},
						"bundle": {
							"scripts": "{$config.output}/js/formplugins/inputmask/inputmask.bundle.js"
						}
					},
					"cropper": {
						"src": {
							"styles": [
								"{$config.path.node_modules}/cropperjs/dist/cropper.css",
								"{$config.path.src}/custom/plugins/cropperjs/cropper-demo.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/cropperjs/dist/cropper.js",
								"{$config.path.node_modules}/jquery-cropper/dist/jquery-cropper.js"

							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/cropperjs/cropper.css",
							"scripts": "{$config.output}/js/formplugins/cropperjs/cropper.js"
						}
					},
					"select2": {
						"src": {
							"styles": [
								"{$config.path.node_modules}/select2/dist/css/select2.css",
								"{$config.path.src}/custom/plugins/select2/select2-cust.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/select2/dist/js/select2.full.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/select2/select2.bundle.css",
							"scripts": "{$config.output}/js/formplugins/select2/select2.bundle.js"
						}
					},
					"summernote": {
						"src": {
							"styles": [
								"{$config.path.node_modules}/summernote/dist/summernote-bs4.css",
								"{$config.path.src}/custom/plugins/summernote/summernote-custom.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/summernote/dist/summernote-bs4.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/summernote/summernote.css",
							"scripts": "{$config.output}/js/formplugins/summernote/summernote.js"
						}
					},
					"markdown": {
						"src": {
							"styles": [
								"{$config.path.node_modules}/bootstrap-markdown/css/bootstrap-markdown.min.css"
							],
							"scripts": [
								"{$config.path.node_modules}/markdown/lib/markdown.js",
								"{$config.path.node_modules}/bootstrap-markdown/js/bootstrap-markdown.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/bootstrap-markdown/bootstrap-markdown.css",
							"scripts": "{$config.output}/js/formplugins/bootstrap-markdown/bootstrap-markdown.js"
						}
					},
					"nouislider": {
						"src": {
							"styles": [
								"{$config.path.node_modules}/nouislider/distribute/nouislider.css"
							],
							"scripts": [
								"{$config.path.node_modules}/nouislider/distribute/nouislider.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/nouislider/nouislider.css",
							"scripts": "{$config.output}/js/formplugins/nouislider/nouislider.js"
						}
					},
					"wizard": {
						"src": {
							"styles": [
								"{$config.path.node_modules}/smartwizard/dist/css/smart_wizard.css",
								"{$config.path.node_modules}/smartwizard/dist/css/smart_wizard_theme_arrows.css",
								"{$config.path.node_modules}/smartwizard/dist/css/smart_wizard_theme_circles.css",
								"{$config.path.node_modules}/smartwizard/dist/css/smart_wizard_theme_dots.css"
							],
							"scripts": [
								"{$config.path.node_modules}/smartwizard/dist/js/jquery.smartWizard.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/formplugins/smartwizard/smartwizard.css",
							"scripts": "{$config.output}/js/formplugins/smartwizard/smartwizard.js"
						}
					}
				},
				"miscellaneous" : {
					"fullcalendar" : {
						"src": {
							"styles":[
								"{$config.path.node_modules}/@fullcalendar/core/main.css",
								"{$config.path.node_modules}/@fullcalendar/daygrid/main.css",
								"{$config.path.node_modules}/@fullcalendar/list/main.css",
								"{$config.path.node_modules}/@fullcalendar/timegrid/main.css",
								"{$config.path.node_modules}/@fullcalendar/bootstrap/main.css",
								"{$config.path.src}/custom/plugins/@fullcalendar/core-main-override.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/@fullcalendar/core/main.js",
								"{$config.path.node_modules}/@fullcalendar/daygrid/main.js",
								"{$config.path.node_modules}/@fullcalendar/list/main.js",
								"{$config.path.node_modules}/@fullcalendar/timegrid/main.js",
								"{$config.path.node_modules}/@fullcalendar/interaction/main.js",
								"{$config.path.src}/custom/plugins/@fullcalendar/bootstrap-main-cust.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/miscellaneous/fullcalendar/fullcalendar.bundle.css",
							"scripts": "{$config.output}/js/miscellaneous/fullcalendar/fullcalendar.bundle.js"
						}
					},
					"lightgallery" : {
						"src": {
							"styles":[
								"{$config.path.node_modules}/justifiedGallery/dist/css/justifiedGallery.css",
								"{$config.path.src}/custom/plugins/lightgallery/lightgallery.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/justifiedGallery/dist/js/jquery.justifiedGallery.js",
								"{$config.path.node_modules}/jquery-mousewheel/jquery.mousewheel.js",
								"{$config.path.node_modules}/lightgallery/src/js/lightgallery.js",
								"{$config.path.node_modules}/lightgallery/modules/lg-autoplay.js",
								"{$config.path.node_modules}/lightgallery/modules/lg-fullscreen.js",
								"{$config.path.node_modules}/lightgallery/modules/lg-hash.js",
								"{$config.path.node_modules}/lightgallery/modules/lg-pager.js",
								"{$config.path.node_modules}/lightgallery/modules/lg-thumbnail.js",
								"{$config.path.node_modules}/lightgallery/modules/lg-zoom.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/miscellaneous/lightgallery/lightgallery.bundle.css",
							"scripts": "{$config.output}/js/miscellaneous/lightgallery/lightgallery.bundle.js"
						}
					},
					"smartvoice" : {
						"src": {
							"scripts": [
								"{$config.path.src}/custom/plugins/smartvoice/smartvoice-config.js",
								"{$config.path.src}/custom/plugins/smartvoice/smartvoice.js"
							]
						},
						"bundle": {
							"scripts": "{$config.output}/js/miscellaneous/lightgallery/smartvoice.bundle.js"
						}
					},
					"reactions" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/plugins/reactions/reactions.scss"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/miscellaneous/reactions/reactions.css"
						}
					},
					"jqvmap" : {
						"core" : {
							"src": {
								"styles":[
									"{$config.path.node_modules}/jqvmap/dist/jqvmap.css",
									"{$config.path.src}/custom/plugins/jqvmap/jqvmap-cust.scss"
								],
								"scripts": [
									"{$config.path.node_modules}/jqvmap/dist/jquery.vmap.js",
									"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.world.js"
								]
							},
							"bundle": {
								"styles": "{$config.output}/css/miscellaneous/jqvmap/jqvmap.bundle.css",
								"scripts": "{$config.output}/js/miscellaneous/jqvmap/jqvmap.bundle.js"
							}
						},
						"maps" : {
							"algeria" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.algeria.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.algeria.js"
								}
							},
							"argentina" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.argentina.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.argentina.js"
								}
							},
							"brazil" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.brazil.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.brazil.js"
								}
							},
							"canada" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.canada.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.canada.js"
								}
							},
							"europe" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.europe.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.europe.js"
								}
							},
							"france" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.france.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.france.js"
								}
							},
							"germany" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.germany.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.germany.js"
								}
							},
							"greece" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.greece.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.greece.js"
								}
							},
							"iran" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.iran.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.iran.js"
								}
							},
							"iraq" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.iraq.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.iraq.js"
								}
							},
							"russia" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.russia.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.russia.js"
								}
							},
							"tunisia" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.tunisia.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.tunisia.js"
								}
							},
							"turkey" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.turkey.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.turkey.js"
								}
							},
							"usa" : {
								"src": {
									"scripts": [
										"{$config.path.node_modules}/jqvmap/dist/maps/jquery.vmap.usa.js"
									]
								},
								"bundle": {
									"scripts": "{$config.output}/js/miscellaneous/jqvmap/maps/jquery.vmap.usa.js"
								}
							}
						}
					},
					"nestable" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/plugins/nestable/nestable.scss"
							],
							"scripts": [
								"{$config.path.node_modules}/nestable/jquery.nestable.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/miscellaneous/nestable/nestable.css",
							"scripts": "{$config.output}/js/miscellaneous/nestable/nestable.js"
						}
					},
					"treeview" : {
						"src": {
							"styles":[
								"{$config.path.src}/custom/plugins/treeview/treeview.scss"
							],
							"scripts": [
								"{$config.path.src}/custom/plugins/treeview/treeview.js"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/miscellaneous/treeview/treeview.css",
							"scripts": "{$config.output}/js/miscellaneous/treeview/treeview.js"
						}
					}
				},
				"dependencyplugins" : {
					"moment" : {
						"src": {
							"scripts": [
								"{$config.path.node_modules}/moment/min/moment.min.js"
							]
						},
						"bundle": {
							"scripts": "{$config.output}/js/dependency/moment/moment.js"
						}
					}
				}
			}
		},
		"app": {
			"base": {
				"src": {
					"styles": [
						"{$config.path.src}/scss/app.core.scss"
					],
					"scripts": [
						"{$config.path.src}/js/_config/app.config.js",
						"{$config.path.src}/js/_modules/app.navigation.js",
						"{$config.path.src}/js/_modules/app.menu.slider.js",
						"{$config.path.src}/js/_modules/app.init.js",
						"{$config.path.src}/js/_modules/app.resize.trigger.js",
						"{$config.path.src}/js/_modules/app.scroll.trigger.js",
						"{$config.path.src}/js/_modules/app.domReady.js",
						"{$config.path.src}/js/_modules/app.orientationchange.js",
						"{$config.path.src}/js/_modules/app.window.load.js",
						"{$config.path.src}/js/_config/app.colors.js"

					]
				},
				"bundle": {
					"styles": "{$config.output}/css/app.bundle.css",
					"scripts": "{$config.output}/js/app.bundle.js"
				}
			},
			"custom": {
				"auth" : {
					"login" : {
						"src": {
							"styles":[
								"{$config.path.src}/content/pages/page_login_alt/page-login-alt.scss"
							]
						},
						"bundle": {
							"styles": "{$config.output}/css/page-login-alt.css"
						}
					}
				},
				"invoice" : {
					"src": {
						"styles":[
							"{$config.path.src}/content/pages/page_invoice/page-invoice.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/page-invoice.css"
					}
				}
			},
			"demo": {
				"theme": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/theme-demo.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/theme-demo.css"

					}
				}
			},
			"themes": {
				"theme-1": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-1.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-1.css"

					}
				},
				"theme-2": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-2.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-2.css"

					}
				},
				"theme-3": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-3.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-3.css"

					}
				},
				"theme-4": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-4.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-4.css"

					}
				},
				"theme-5": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-5.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-5.css"

					}
				},
				"theme-6": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-6.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-6.css"

					}
				},
				"theme-7": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-7.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-7.css"

					}
				},
				"theme-8": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-8.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-8.css"

					}
				},
				"theme-9": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-9.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-9.css"

					}
				},
				"theme-10": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-10.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-10.css"

					}
				},
				"theme-11": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-11.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-11.css"

					}
				},
				"theme-12": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-12.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-12.css"

					}
				},
				"theme-13": {
					"src": {
						"styles": [
							"{$config.path.src}/scss/_themes/cust-theme-13.scss"
						]
					},
					"bundle": {
						"styles": "{$config.output}/css/themes/cust-theme-13.css"

					}
				}
			}
		}
	}
}           </pre>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:260px">
                                    variable
                                </th>
                                <th style="width: 100px">
                                    value
                                </th>
                                <th>
                                    description
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    config.debug
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    spits out debugging data and error messages on npm log file
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    config.data.*
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    global data for the template, control profile images, user names, etc
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    config.compile.jsUglify
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    minifies all javascript files in the project
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    config.compile.cssMinify
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    minifies all css files in the project
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    config.compile.jsSourcemaps
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    generates js source maps from the scss files for easier debugging options using the
                                    browser's inspection tool
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    config.compile.cssSourcemaps
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    generates css source maps from the scss files for easier debugging options using the
                                    browser's inspection tool
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    config.compile.autoprefixer
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    we recommend you leave this set to true. This will auto-generate all the necessary CSS
                                    browser prefixes for different browser types
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    config.compile.seedOnly
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    generates the seed project navigation menu, all other assets will be intact, can be
                                    removed manually (but will not be called into the main project)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    config.path.*
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    addresses source and dist path of your porject files, change this if you change your
                                    source file path
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    build.vendor.*
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    link all sources for plugins from the node_modules directory, you can concatinte files
                                    here and also rename them if needed
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    build.app.*
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    concatinates all the main core files for the theme
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Configuration JS (app.config.js) <a href="javascript:void(0);" name="app.config.js"></a>
                    <small>
                        Your <code>app.config.js</code> mainly controls the behaviour of your application, you can configure
                        the navigation speed, disable visual effects, and change localstorage settings. To learn more about
                        app configuration and how it works, check out the <a href="/plugin_appcore" class="fw-500"
                            title="app.core.js">app.core.js</a> page
                    </small>
                </h2>
                <div class="fw-500 mb-1">
                    File app.config.js contents
                </div>
                <div class="border border-dark mb-g overflow-hidden rounded">
                    <pre class="prettyprint fs-md mb-0" style="max-height: 250px;">
var myapp_config = {
 VERSION: '4.5.1',
 root_: $('body'), // used for core app reference
 root_logo: $('.page-sidebar > .page-logo'), // used for core app reference
 throttleDelay: 450, // for window.scrolling & window.resizing
 filterDelay: 150,   // for keyup.functions
 thisDevice: null, // desktop or mobile
 isMobile: (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase())), //popular device types available on the market
 mobileMenuTrigger: null, // used by pagescrolling and appHeight script, do not change!
 mobileResolutionTrigger: 992, //the resolution when the mobile activation fires
 isWebkit: ((!!window.chrome && !!window.chrome.webstore) === true || Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0 === true),
 isChrome: (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())),
 isIE: ( (window.navigator.userAgent.indexOf('Trident/') ) > 0 === true ),
 debugState: true, // outputs debug information on browser console
 rippleEffect: true, // material design effect that appears on all buttons
 mythemeAnchor: '#mytheme',
 activateLastTab: true,
 navAnchor: $('#js-primary-nav'), //changing this may implicate slimscroll plugin target
 navHooks: $('#js-nav-menu'), //changing this may implicate CSS targets
 navAccordion: true, //nav item when one is expanded the other closes
 navInitalized: 'js-nav-built', //nav finished class
 navFilterInput: $('#nav_filter_input'), //changing this may implicate CSS targets
 navHorizontalWrapperId: 'js-nav-menu-wrapper',
 navSpeed: 500, //ms
 mythemeColorProfileID: $('#js-color-profile'),
 navClosedSign: 'fal fa-angle-down',
 navOpenedSign: 'fal fa-angle-up',
 appIconPrefix: 'fal',
 appDateHook: $('.js-get-date'),
 storeLocally: true,
 /*
 * Used with initApp.loadScripts
 * DOC: Please leave it blank
 */
 jsArray : []
};      </pre>
                </div>
                <div class="fw-500 mb-1">
                    Config file definition
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:260px">
                                    variable
                                </th>
                                <th style="width: 100px">
                                    value
                                </th>
                                <th>
                                    description
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    myapp_config.VERSION
                                </td>
                                <td>
                                    <code>integer</code>
                                </td>
                                <td>
                                    application version number
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.root_
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    used for core app reference
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.root_logo
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    used for core app reference to detect logo click behaviour
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.throttleDelay
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    for window.scrolling & window.resizing
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.filterDelay
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    keyup.functions for the search filter
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.mobileResolutionTrigger
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    the resolution when the mobile activation fires
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.debugState
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    outputs debug information on browser console
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.rippleEffect
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    global configuration for material design effect that appears on all buttons
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.mythemeAnchor
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    this anchor is created dynamically and CSS is loaded as an override theme
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.navAnchor
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    this is the root anchor point where the menu script will begin its build
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.navAccordion
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    nav item when one is expanded the other closes
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.navSpeed
                                </td>
                                <td>
                                    <code>integer</code>
                                </td>
                                <td>
                                    the rate at which the menu expands revealing child elements on click, lower rate reels
                                    faster expansion of nav childs
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.navClosedSign
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    main navigation's collapse icon
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.navOpenedSign
                                </td>
                                <td>
                                    <code>string</code>
                                </td>
                                <td>
                                    main navigation's expand icon
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    myapp_config.storeLocally
                                </td>
                                <td>
                                    <code>boolean</code>
                                </td>
                                <td>
                                    saveSettings to localStorage, to store settings to a DB instead of LocalStorage use
                                    initApp.pushSettings("className1 className2")
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Layout Options <a href="javascript:void(0);" name="applayouts"></a>
                    <small>
                        SmartAdmin WebApp has over 285 layout combinations, you can check them out at <a
                            href="/settings_layout_options" class="fw-500">Layout Options</a> page.
                    </small>
                </h2>
                <p class="panel-tag">
                    You can also try them out through the <a href="#" class="fw-500" data-toggle="modal"
                        data-target=".js-modal-settings"><i class="fal fa-cog"></i> Settings Panel</a>. The classes comes
                    with 3 unique prefixes, <code>.header-*</code>, <code>.nav-*</code>, and <code>.mod-*</code>. You can
                    also save your state settings to your database using <code>initApp.pushSettings()</code> and <code>
                        initApp.getSettings()</code> methods, more info found in the <a href="/settings_saving_db"
                        class="fw-500">Saving to Database</a> page.
                </p>
                <p class="fw-500">
                    Add the following classes to your <code>body</code> tag in order to see the effect. You may need to
                    clear your <code>localStorage</code> first if you intend to add it manually.
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:260px">
                                    class name
                                </th>
                                <th>
                                    description
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <code>.header-function-fixed</code>
                                </td>
                                <td>
                                    header is in a fixed position at all times, effecting mobile & desktop view
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.nav-function-fixed</code>
                                </td>
                                <td>
                                    Left panel position becomes fixed, activates custom scroll plugin
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.nav-function-minify</code>
                                </td>
                                <td>
                                    Navigation text are collapsed. Only visible portion are the icons. Hover the icons to
                                    reveal any child elements
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.nav-function-hidden</code>
                                </td>
                                <td>
                                    Navigation is revealed upon user hovering the visible portion of the navigation
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.nav-function-top</code>
                                </td>
                                <td>
                                    Main navigation shifts to the top (horizontal nav)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-main-boxed</code>
                                </td>
                                <td>
                                    Contain layout to 1200px max width. Some classes are not compatible with this setting
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.nav-mobile-push</code>
                                </td>
                                <td>
                                    Content panel pushed on menu reveal
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.nav-mobile-no-overlay</code>
                                </td>
                                <td>
                                    Removes mesh on menu reveal
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.nav-mobile-slide-out</code>
                                </td>
                                <td>
                                    Content overlaps menu
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-bigger-font</code>
                                </td>
                                <td>
                                    Fonts are bigger for readability
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-high-contrast</code>
                                </td>
                                <td>
                                    4.5:1 text contrast ratio to meet WCAG 2 AA standards
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-color-blind</code>
                                </td>
                                <td>
                                    Color vision deficiency (this is a progressive UI option)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-pace-custom</code>
                                </td>
                                <td>
                                    Preloader will be inside content
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-clean-page-bg</code>
                                </td>
                                <td>
                                    A white background for your webapp
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-hide-nav-icons</code>
                                </td>
                                <td>
                                    Hides navigation icons for a slick and clean look (some classes will be incompatible)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-disable-animation</code>
                                </td>
                                <td>
                                    Disables css based animations
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-hide-info-card</code>
                                </td>
                                <td>
                                    Hides info card from left panel
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-lean-subheader</code>
                                </td>
                                <td>
                                    Distinguished page header
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>.mod-nav-link</code>
                                </td>
                                <td>
                                    Clear breakdown of nav links (some options will be incompatble)
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Skins & Themes <a href="javascript:void(0);" name="skinsthemes"></a>
                    <small>
                        SmartAdmin WebApp contains over 10 pre-built CSS skins to choose from. All located inside
                        <code>dist/css/themes</code> or you would like to edit the source, go to
                        <code>src/scss/_themes</code>. The skin files generated are very lightweight, ranging from 10-20kb
                        in size, which only contains the color overrides.
                    </small>
                </h2>
                <h4>
                    How to change theme colors
                    <small>
                        There are more than one way to change your skin or theme colors. Use any one of the following
                        methods below:
                    </small>
                </h4>
                <div class="fw-500 mb-1">
                    <span class="color-info-500">Method 1:</span> Changing skins programatically via button action, add the
                    following line to any clickable object. Remove <code>data-themesave</code> attribute if you do not plan
                    to save the theme to localStorage.
                </div>
                <div class="border border-dark mb-g overflow-hidden rounded">
                    <pre class="prettyprint m-0">data-action="theme-update" data-themesave="" data-theme="css/themes/cust-theme-1.css"</pre>
                </div>
                <div class="fw-500 mb-1">
                    <span class="color-info-500">Method 2:</span> Changing skins manually, add the skin CSS file to your
                    html <code>head</code>, it must be added after apps' main CSS files
                </div>
                <div class="border border-dark mb-g overflow-hidden rounded">
                    <pre class="prettyprint m-0">
link rel="stylesheet" media="screen, print" href="css/vendors.bundle.css"
link rel="stylesheet" media="screen, print" href="css/app.bundle.css"
link id="mytheme" rel="stylesheet" href="css/themes/cust-theme-1.css" <-- Theme CSS override</pre>
                </div>
                <div class="fw-500 mb-1">
                    <span class="color-info-500">Method 3:</span> Changing skins programatically via script.
                    <code>themeName</code> is the location of where your theme's CSS file is located including the full file
                    name, path and extension. <code>themeSave</code> is to indicate if you wish to save this change to the
                    <code>localStorage</code>.
                </div>
                <div class="border border-dark mb-g overflow-hidden rounded">
                    <pre class="prettyprint m-0">
//initApp.updateTheme(themeName, themeSave);

//saves the theme
initApp.updateTheme('css/themes/cust-theme-1.css');

// does not save
initApp.updateTheme('css/themes/cust-theme-1.css', false);</pre>
                </div>
                <div class="height-1 mb-3"></div>
                <h4>
                    Theme Color references
                    <small>
                        Add the theme URL by following the steps above
                    </small>
                </h4>
                <table class="table table-bordered mb-g">
                    <thead>
                        <tr>
                            <td>
                                Theme Name
                            </td>
                            <td>
                                Theme URL
                            </td>
                            <td>
                                Theme Colors
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Default
                            </td>
                            <td>
                                <code>base CSS</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 bg-primary-500 rounded-circle"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 bg-success-500 rounded-circle"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 bg-danger-500 rounded-circle"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 bg-warning-500 rounded-circle"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 bg-info-500 rounded-circle"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 bg-fusion-500 rounded-circle"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tapestry
                            </td>
                            <td>
                                <code>css/themes/cust-theme-1.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#b56a9f"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#1dc958"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#c139fd"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#b8ff41"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#21e2f3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#505050"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Atlantis
                            </td>
                            <td>
                                <code>css/themes/cust-theme-2.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#9fcb3d"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#1dc9b7"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#fd3995"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#ffc241"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#2196F3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#444444"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Indigo
                            </td>
                            <td>
                                <code>css/themes/cust-theme-3.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#4679cc"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#1dc9b7"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#fd3995"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#ffc241"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#2196F3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#494949"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Dodger Blue
                            </td>
                            <td>
                                <code>css/themes/cust-theme-4.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#2198F3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#69FB13"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#FC1349"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#FF9A13"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#BB1BF4"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#434a51"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tradewind
                            </td>
                            <td>
                                <code>css/themes/cust-theme-5.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#6ab5b4"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#85b86c"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#b57d6a"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#e0d07e"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#8f6ab5"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#505050"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Cranberry
                            </td>
                            <td>
                                <code>css/themes/cust-theme-6.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#dd5293"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#1dc9b7"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#fd3995"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#ffc241"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#2196F3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#585858"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Oslo Gray
                            </td>
                            <td>
                                <code>css/themes/cust-theme-7.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#868e96"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#1dc9b7"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#b57d6a"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#ffc241"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#2196F3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#4e4e4e"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Chetwode Blue
                            </td>
                            <td>
                                <code>css/themes/cust-theme-8.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#7c91df"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#93ff87"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#ff8793"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#ffbf87"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#90c7f2"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#6e6e6e"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Apricot
                            </td>
                            <td>
                                <code>css/themes/cust-theme-9.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#e59c6c"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#6c9be3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#e77070"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#ede267"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#cb6de3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:dimgray"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Blue Smoke
                            </td>
                            <td>
                                <code>css/themes/cust-theme-10.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#778c85"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#8eff37"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#af37ff"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#37ffa8"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#3787ff"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#424242"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Green Smoke
                            </td>
                            <td>
                                <code>css/themes/cust-theme-11.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#a2b077"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#7fd894"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#f88c71"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#e892d7"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#d9b5a3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#545454"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wild Blue Yonder
                            </td>
                            <td>
                                <code>css/themes/cust-theme-12.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#7976b3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#1dc958"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#c139fd"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#b8ff41"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#21e2f3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#555555"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Emerald
                            </td>
                            <td>
                                <code>css/themes/cust-theme-13.css</code>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#55ce5f"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#1dc958"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#c139fd"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#b8ff41"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#21e2f3"></span>
                                    <span class="d-inline-block mx-1 mt-1 p-2 rounded-circle"
                                        style="background:#525252"></span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="height-1 mb-3"></div>
                <h4>
                    Generate your own unique Themes
                    <small>
                        You can generate any number of themes by following the instructions below.
                    </small>
                </h4>
                <ol class="list-spaced">
                    <li>
                        <strong>Go over to <code>smartadmin-html-full\src\scss\_themes</code></strong>
                    </li>
                    <li>
                        <strong>Create an empty file with <code>.scss</code> extension. Lets name your file <span
                                class="text-success">'mytheme.scss'</span></strong>
                    </li>
                    <li>
                        <strong>Open <code>cust-theme-1.scss</code> to take a look at the example of what we did.</strong>
                    </li>
                    <li>
                        <strong>You can either copy from <code>cust-theme-1.scss</code> to your 'methemes.scss' file and
                            change the color values, or you may open <code>variables.scss</code> file and copy over any
                            values you wish to change. </strong>
                        <br><br>
                        <strong>For example: mytheme.scss</strong>
                        <div class="border border-dark mb-g overflow-hidden rounded">
                            <pre class="prettyprint mb-0">
/* #THEME COLOR (variable overrides)
========================================================================== */
$color-primary:                     #b56a9f;
$color-success:                     #1dc958;

/* #GLOBAL IMPORTS (You must not remove this!)
========================================================================== */
@import './src/scss/_imports/_theme-modules-import';

/* #My Unique Changes (you can also add CSS overrides below)
========================================================================== */
$nav-background:                    #ed1c34; //<-- my unique change here</pre>
                        </div>
                    </li>
                    <li>
                        <strong>Once done, re-run the <a href="#gulp">gulp build command</a> to generate your unique CSS
                            skin. You can then use the methods above to load the new skin to your application.</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Seed & Slim Projects <a href="javascript:void(0);" name="seedslim"></a>
                    <small>
                        SmartAdmin WebApp's slim and seed projects comes at a reduced functionality, where seed is only the
                        barebone essentials to get the project up and running, slim offers much more reduced
                        functionalities, CSS features. If the Full Project was a size of a potato, the Seed Project would be
                        the size of potato wedges, and the Slim Project would be Lays thinly sliced potato chips.
                    </small>
                </h2>
                <table class="table table-bordered table-hover table-striped m-0">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th class="text-center"><span class="badge badge-danger width-5 fs-lg">Slim</span></th>
                            <th class="text-center"><span class="badge badge-warning width-5 fs-lg">Seed</span></th>
                            <th class="text-center"><span class="badge badge-info width-5 fs-lg">Full</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bootstrap components</td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                        <tr>
                            <td>Dependencies</td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                        <tr>
                            <td>Core plugins</td>
                            <td class="text-center">Partial*</td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                        <tr>
                            <td>Extension plugins</td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                        <tr>
                            <td>App Settings and Layouts</td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                        <tr>
                            <td>Form Plugins</td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                        <tr>
                            <td>Sample Pages</td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                        <tr>
                            <td>Datatables</td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                        <tr>
                            <td>Charts &amp; Statistics</td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                        <tr>
                            <td>Notifications & Other plugins</td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-times-circle fa-2x color-danger-800"></i></td>
                            <td class="text-center"><i class="fal fa-check-circle fa-2x color-success-800"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0" name="filestructure">
                    File Structure <a href="javascript:void(0);" name="filestructure"></a>
                    <small>
                        This webapp toolkit comes with a flexible file structure that can be easily used for small to large
                        scope projects. This section will explains app's file structure and how to adapt it to your project.
                    </small>
                </h2>
                <ul class="fs-lg fw-500 list-style-none pl-2">
                    <li>
                        <i class="fad fa-folder-open color-warning-700"></i> smartadmin-html-full
                        <ul>
                            <li><i class="fad fa-folder color-warning-700"></i> build <span
                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp;all the scripts for gulp</span></li>
                            <li><i class="fad fa-folder color-warning-700"></i> dist <span
                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; compiled HTML and assets</span></li>
                            <li>
                                <i class="fad fa-folder-open color-success-600"></i> src
                                <ul>
                                    <li><i class="fad fa-folder color-warning-700"></i> content <span
                                            class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; content for all pages</span>
                                    </li>
                                    <li>
                                        <i class="fad fa-folder-open color-success-600"></i> custom
                                        <ul>
                                            <li><i class="fad fa-folder color-warning-800"></i> demo-data <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; data for demo pages
                                                    and graphs</span></li>
                                            <li><i class="fad fa-folder color-warning-700"></i> docs-data <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; data for plugins and
                                                    documentation</span></li>
                                            <li><i class="fad fa-folder color-warning-600"></i> lang <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; data for language
                                                    files</span></li>
                                            <li><i class="fad fa-folder color-warning-500"></i> media <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; video and sound
                                                    files</span></li>
                                            <li><i class="fad fa-folder color-warning-400"></i> plugins <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; scripts for all
                                                    custom plugins and non-destructive manipulation</span></li>
                                            <li><i class="fad fa-folder color-warning-300"></i> webfonts <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; all font icon
                                                    files</span></li>
                                        </ul>
                                    </li>
                                    <li><i class="fad fa-folder color-warning-700"></i> image <span
                                            class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; all image contents</span>
                                    </li>
                                    <li><i class="fad fa-folder color-warning-700"></i> js <span
                                            class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; core javascript
                                            contents</span></li>
                                    <li>
                                        <i class="fad fa-folder-open color-success-600"></i> scss
                                        <ul>
                                            <li><i class="fad fa-folder color-warning-800"></i> _extensions <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; customization for
                                                    extended plugins</span></li>
                                            <li><i class="fad fa-folder color-warning-700"></i> _imports <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; global and theme
                                                    imports as a master file refernce</span></li>
                                            <li><i class="fad fa-folder color-warning-600"></i> _mixins <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; scss mixins and
                                                    shortclasses</span></li>
                                            <li><i class="fad fa-folder color-warning-500"></i> _modules <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; SCSS modular
                                                    components for the theme</span></li>
                                            <li><i class="fad fa-folder color-warning-400"></i> _themes <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; theme files for
                                                    various theme colors</span></li>
                                            <li><i class="fad fa-folder color-warning-300"></i> ...</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <i class="fad fa-folder-open color-success-600"></i> template
                                        <ul>
                                            <li><i class="fad fa-folder color-warning-700"></i> layouts <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; various hbs layout
                                                    templates </span></li>
                                            <li><i class="fad fa-folder color-warning-600"></i> include <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; hbs includes, such as
                                                    head, body, nav, content area, etc </span></li>
                                            <li><i class="fad fa-folder color-warning-500"></i> _helpers <span
                                                    class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; hbs conditions
                                                </span></li>
                                        </ul>
                                    </li>
                                    <li><i class="fad fa-file"></i> navigation.json <span
                                            class="text-muted fs-sm fw-400">&nbsp; --- &nbsp; JSON file that auto generates
                                            nav.hbs file </span> </li>
                                </ul>
                            </li>
                            <li><i class="fad fa-file"></i> build.json <span class="text-muted fs-sm fw-400">&nbsp; ---
                                    &nbsp; structure of the entire project and file components, use this file to restructure
                                    your project files </span></li>
                            <li><i class="fad fa-file"></i> package.json <span class="text-muted fs-sm fw-400">&nbsp; ---
                                    &nbsp; list of all npm packages for the app </span></li>
                        </ul>
                    </li>
                    <li><i class="fad fa-folder color-warning-700"></i> smartadmin-html-seed</li>
                    <li><i class="fad fa-folder color-warning-600"></i> smartadmin-html-slim</li>
                    <li><i class="fad fa-folder color-warning-500"></i> tests</li>
                </ul>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0" name="pluginreference">
                    Plugin Reference & Dependency <a href="javascript:void(0);" name="pluginreference"></a>
                    <small>
                        Reference for all plugins within SmartAdmin WebApp
                    </small>
                </h2>
                <p>
                    All plugins are categorized into five (5) categories. <span
                        class="badge bg-fusion-500 fs-nano my-1">DEPENDENCY</span> and <span
                        class="badge badge-danger fs-nano my-1">CORE</span> are essential plugins, removing any of these
                    plugins can cause the application to crash or become unstable. <span
                        class="badge badge-success fs-nano my-1">EXTENSION</span> are refered to plugins that enhances the
                    user experience, this could range from SmartPanels, SlimScroll, BootBox, etc. You are free to remove
                    these plugins without crashing the application. <span
                        class="badge badge-warning fs-nano my-1">RECOMMENDED</span> increases application's performance,
                    removing this will not crash the application but users may experience delay in animation or delayed
                    overall responses from the application. <span class="badge badge-primary fs-nano my-1">ADDON</span> are
                    plugins added on top as a development need or requirement, you are free to add or delete any addons
                </p>
                <br>
                <p class="panel-tag fw-500">
                    To see all list of Core plugins for a barebone version please visit the <a href="/plugin_faq"
                        class="fw-500"> Plugin FAQ</a> page.
                </p>
                <div class="mb-g">
                    <h4><i class="fal fa-exclamation text-danger"></i> Select a plugin from the list below for full
                        documentation</h4>
                    <p class="text-faded fs-nano">Disclaimer: Third party plugins are left unchanged, all third party
                        plugins have limited support (to design elements only), and you must refer to the documentation via
                        plugin's official website</p>
                    <select class="js-plugins custom-select form-control" style="width:15rem;">
                        <option value="">-- Select Plugin --</option>
                    </select>
                </div>
                <div id="js-display" class="d-none">
                    <h5 class="fw-700">
                        <span class="js-plugin-name"></span>
                    </h5>
                    <p>
                        <span class="js-plugin-description"></span>
                    </p>
                    <p>
                        <strong>Documentation:</strong>
                        <br>
                        <a href="" class="js-plugin-url" target="_blank"></a>
                    </p>
                    <p>
                        <strong>License:</strong>
                        <br>
                        <span class="js-plugin-license"></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    RTL Support <a href="javascript:void(0);" name="rtlsupport"></a>
                    <small>
                        Right to left text support for SmartAdmin WebApp
                    </small>
                </h2>
                <p>You can turn on your RTL support by enabling the RTL CSS, by adding the suffix <code>*-rtl.css</code> you
                    can turn on your RTL support. You can also have RTL on by default through your build.json config file.
                </p>
                <div class="fw-500 mb-1">
                    Change via CSS from your HTML <code>head</code>
                </div>
                <div class="border border-dark mb-g overflow-hidden rounded">
                    <pre class="prettyprint mb-0">
link rel="stylesheet" media="screen, print" href="css/vendors.bundle-rtl.css"  <-- just add the '-rtl' suffix
link rel="stylesheet" media="screen, print" href="css/app.bundle-rtl.css"</pre>
                </div>
                <div class="fw-500 mb-1">
                    Change via Gulp and <code>build.json</code> file
                </div>
                <div class="border border-dark mb-g overflow-hidden rounded">
                    <pre class="prettyprint mb-0">
"compile": {
  "jsUglify": false,
  "cssMinify": false,
  "jsSourcemaps": false,
  "cssSourcemaps": true,
  "autoprefixer": true,
  "seedOnly": false,
  "rtl": true <-- change to 'true'
},</pre>
                </div>
                <p class="fw-500 fs-md">Once done, save your changes and run your <a href="#gulp">gulp build command</a>
                    to generate the new CSS files.</p>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Changing Component Colors <a href="javascript:void(0);" name="changingcomponentcolors"></a>
                    <small>
                        How to change component colors in SmartAdmin WebApp using Chrome's developer tools and Gulp
                    </small>
                </h2>
                <div class="panel-tag">
                    In this example, we will change the 'left panel' background color. For this example to work, you first
                    need to make sure your <a href="#overview">gulp build</a> is working correctly and you have the
                    following enabled from <code>build.json</code>
                    <br><br>
                    <span class="fw-500 font-italic">Inside your build.json file</span>
                    <pre class="prettyprint mb-0 bg-transparent fs-sm">
"compile": {
  "jsUglify": false,
  "cssMinify": false,
  "jsSourcemaps": false,
  "cssSourcemaps": true, <-- change to 'true'
  "autoprefixer": true,
  "seedOnly": false,
  "rtl": false
},
</pre>
                </div>
                <ol class="pl-3">
                    <li>
                        <span class="fw-500 mb-2 d-block">
                            Load your website on the latest version of <a href="https://www.google.ca/chrome/"
                                target="_blank"> Google Chrome </a> and press F12 to load the <a
                                href="https://developers.google.com/web/tools/chrome-devtools/open" target="_blank">
                                developer toolkit </a>
                        </span>
                        <div class="row">
                            <div class="col col-lg-9 col-xl-7">
                                <div class="demo-window rounded height-sm mb-g">
                                    <div class="demo-window-content">
                                        <img src="/admin/img/demo/chromedevtools-1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span class="fw-500 mt-4 mb-2 d-block">
                            Click on Elements tab and then locate the DOM element (eg. <code>page-sidebar</code>) you wish
                            to manipulate, once selected it will reveal the SCSS file from the CSS maps (to the right).
                            Locate the reference for the CSS class (eg. <code>.page-sidebar</code>) to reveal the SCSS file
                            name where these classes are residing. In this example below it is residing inside
                            <code>_placeholder.scss</code> in line 29. Clicking on the file name as shown in the image
                            below...
                        </span>
                        <div class="row">
                            <div class="col col-lg-9 col-xl-7">
                                <div class="demo-window rounded height-sm mb-g">
                                    <div class="demo-window-content">
                                        <img src="/admin/img/demo/chromedevtools-2.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span class="fw-500 mt-4 mb-2 d-block">
                            When you open the <code>_placeholder.scss</code> file from the previous window, you will see the
                            variable you need to change for the left navigation background color. In this example it will be
                            <code>$nav-background</code>
                        </span>
                        <div class="row">
                            <div class="col col-lg-9 col-xl-7">
                                <div class="demo-window rounded height-sm mb-g">
                                    <div class="demo-window-content">
                                        <img src="/admin/img/demo/chromedevtools-3.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span class="fw-500 mt-4 mb-2 d-block">
                            Open <code>\smartadmin-html-full\src\scss\_modules\variables.scss</code> and locate the key
                            variable you wish to change, in this case we locate <code>$nav-background</code>, make sure to
                            also change <code>$nav-background-shade</code> to your liking.
                        </span>
                        <div class="row">
                            <div class="col col-lg-9 col-xl-7">
                                <div class="demo-window rounded height-sm mb-g">
                                    <div class="demo-window-content">
                                        <img src="/admin/img/demo/chromedevtools-4.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span class="fw-500 mt-4 mb-2 d-block">
                            Once done, save your changes and run your <a href="#gulp">gulp build command</a> to generate
                            the new CSS files.
                        </span>
                    </li>
                </ol>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Product Support <a href="javascript:void(0);" name="productsupport"></a>
                    <small>
                        Customer support for SmartAdmin WebApp
                    </small>
                </h2>
                <p>All support questions related to HTML and/or CSS will be honored. Issues that are encountered on the Seed
                    versions of specific flavors of SmartAdmin are covered by their <a href="/intel_introduction"
                        target="_blank">respective authors</a>, but will be limited to HTML and/or CSS issues. If you need
                    assistance with a technical issue that is currently not covered by the FAQ, you will need to have
                    purchased a Full license of that flavor and contact the respective author for further assistance. The
                    Full version links will be added to the <a href="/info_app_flavors" target="_blank">Flavors</a>
                    page once they are made available.</p>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Browser Support <a href="javascript:void(0);" name="browsersupport"></a>
                    <small>
                        SmartAdmin WebApp supports all the browsers supported by the Bootstrap 4, which includes:
                    </small>
                </h2>
                <ul class="list-spaced list-unstyled fs-lg">
                    <li>
                        <i class="fab fa-internet-explorer mr-2" style="color: #42c0fb"></i> IE10+
                    </li>
                    <li>
                        <i class="fab fa-firefox mr-2" style="color: #fe820a"></i> Firefox (latest)
                    </li>
                    <li>
                        <i class="fab fa-safari mr-2" style="color: #448aff"></i> Safari (latest)
                    </li>
                    <li>
                        <i class="fab fa-chrome mr-2" style="color: #458bc2"></i> Chrome (latest)
                    </li>
                    <li>
                        <i class="fab fa-opera mr-2" style="color: #ff0000"></i> Opera (latest)
                    </li>
                </ul>
                <p>
                    <strong>Note: Certain pages and plugins are not supported with IE10, when this happens, we will display
                        a message in your IE10 browser to notify the user.</strong>
                </p>
            </div>
        </div>
        <div class="card mb-g p-2">
            <div class="card-body">
                <h2 class="fw-700 m-0">
                    Components <a href="javascript:void(0);" name="components"></a>
                    <small>
                        SmartAdmin WebApp comes with full documentation for all components
                    </small>
                </h2>
                <p>
                    Each component page has documentation of its usage and how they work. For all bootstrap components we
                    have demonstrated its usage with examples for you to either copy from the HTML source or refer to the
                    docs directly on bootstrap website.
                </p>
                <p class="font-weight-bold">
                    To see documentation on a particular component please refer to the component page. For third party
                    plugin documentation, you will need to refer to the website for the third party plugin, which can be
                    located at the <a href="#pluginreference">Plugin Reference & Dependency</a> section.
                </p>
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <script>
        $(document).ready(function() {
            var jsdisplay = $('#js-display');
            var url = "/admin/media/data/plugin-reference.json";

            $.getJSON(url, function(data) {
                $.each(data, function(index, value) {
                    $('.js-plugins').append('<option value="' + value.plugin +
                        '" data-description="' + value.description + '" data-url="' + value
                        .url + '" data-license="' + value.license + '">' + value.plugin +
                        '</option>');
                });
            });

            // SHOW SELECTED VALUE.
            $('.js-plugins').change(function() {
                var plugin = this.options[this.selectedIndex].text;
                var url = $('select.js-plugins').find(':selected').data('url');
                var license = $('select.js-plugins').find(':selected').data('license');
                var description = $('select.js-plugins').find(':selected').data('description');

                jsdisplay.removeClass().addClass('d-block')

                $('.js-plugin-name').text(plugin);
                $('.js-plugin-url').text(url);
                $('.js-plugin-url').attr('href', url);
                $('.js-plugin-license').text(license);
                $('.js-plugin-description').text(description);
            });
        });
    </script>
@endsection
