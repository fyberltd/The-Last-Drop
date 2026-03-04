# V5 THEME

-   Use this template when creating a new repo
-   git clone your-new-repo
-   npm i
-   gulp watch

## Folder Structure

-   fonts
-   images
    -   icons
    -   social
    -   website-identity
-   js
    -   gsap
    -   slick-slider
-   scss
    -   abstract
    -   base
        -   breakpoints-memo
        -   colors
        -   global
        -   reset
        -   typography
    -   components
        -   call-to-action
        -   recent-posts
        -   sidebar
    -   forms
    -   html-elements (to style semantic tags, add classes when needed)
        -   buttons
        -   cards
    -   layout
        -   footer
        -   header
        -   heros
    -   pages
    -   sliders
    -   vendor-extensions
    -   vendors
    -   main.scss (to import all scss files. !!! Edit when creating new scss file)
-   z-components (big elements, can be called where necessary: Call to Action, slider...)
-   z-layout (big elements, present across all website: navbar, )
-   z-svgs (full SVGs in php files, to be included as a component. Allow css manipulations)
-   pages + header + footer

## ACF - custom templates

-   create a page using 'Custom Template'
-   create a field group
-   create a field of type 'Flexible Content'
-   name it 'layout'
-   create the required fields you want with '+ Add Layout'
-   in z-acf-layout create the corresponding templates
-   add the styles in acf-layout

## PHP

## SCSS

## Javascript

## Prettier config => .prettierrc

## Default libraries

-   [Slick Slider](https://kenwheeler.github.io/slick/) (CSS in header.php, JS in footer.php)
-   [GSAP and ScrollTrigger](https://greensock.com/docs/) (JS in footer.php)
-   [Split-Type](https://www.npmjs.com/package/split-type) (JS in footer.php)
-   [Bootstrap](https://getbootstrap.com/) (V5.2.3 included in package.json)

## .gitignore

-   node_modules
-   name of the theme - same as the folder created with gulp.js
