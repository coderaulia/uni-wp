# Uni-WP Theme

Hi! It's my first time tryin to build a Wordpress Theme! I know it would be a long journey since I just started to learn it. But I think it would be a nice experience!

## File Explanation

-  [x] Index.php for the index page. Using the Wordpress while loop, we can looping post, page etc.
-  [x] On Style.css you need to define theme name, author, and the version on the top of the file.
-  [x] Single.php for single post page. And Page.php for single page type content. It depends on the URL from the index page.
-  [x] Header.php and Footer.php it allows you to make a dynamic header and footer. And also get all css file, and black admin panel bar at the top.
-  [x] Functions.php. Create/call all Wordpress functionality, call CSS and JS files. We need to use get_theme_uri to call the theme directory to working with CSS, JS, or images. ex: `<?php echo get_theme_file_uri('/images/ocean.jpg') ?>`. Also we can call the dynamic wordpress title tag here: `add_theme_support('title-tag');`.
-  [x] Page.php. We can call the page title (`<?php the_title(); ?>`) and page content (`the_content(); ?>`).
-  [x] Front-page.php. Custom front page file.

## Custom Post Types

-  [x] Create a function and add an action to functions.php.
-  [x] Setting all needed parameter to the post types (names, icons etc).
-  [x] Adding "Must use Plugin", to force using the post types. You can create a new folder on wp-content (mu_plugins).
-  [x] Adding new single-{custom post types name}.php to register new post types. And adding archive-{custom post types name}.php to customize different post types archive.
-  [x] Adding has_archive to true. Adding supports for editor, excerpt.
-  [x] Don't forget to update the .htaccess via wp-admin setting permalinks.
-  [x] Adding custom fields for events date. (using plugin: Advanced Custom Fields).

## Reusable Section Functions

-  [x] Using a function to make a reusable section on functions.php.
-  [x] Create a new function with HTML section.
-  [x] Create a dynamic logic on the functions.
-  [x] Calling the function on every page needed.

## Reusable Parts

-  [x] Using `get_template_part();` function.
-  [x] Create a new folder named template-parts.
-  [x] Call the file using `get_template_part('folder-name/file name')`. Or if want to make more dynamic, we can use `('folder-name/content', 'file name')`. It wil make 'dash' after the content name.

## Adding Node Modules

-  [x] npm init to initialize package JSON.
-  [x] Add some dependencies that needed to your project.
-  [x] Add some script such as build, start etc.
-  [x] Compile your code to build folder using `npm run start` (running on background) or `npm run build`.

## Creating live search module

-  [x] Creating new module on `src/modules`.
-  [x] Call the modules to `index.js` on `src` folder.
-  [x] Adding the HTML overlay, input placeholder, button etc to `footer.php`.
-  [x] Using Javascript/JQuery to trigger event when user click search icon, or pressed keyboard shortcut to open the search overlay. By adding some classes to HTML on footer.php via JS/Jquery.
-  [x] Don't forget to run `npm run build` to compile JS files.
