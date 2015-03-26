<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Twig For CodeIgniter 3
 * GitHub   => https://github.com/rakibtg/Twig-For-CodeIgniter-3
 * Package  => CodeIgniter 3.x
 * Version  => 1.0
 * Author   => 
 *  - Original Author: Edmundas Kondrašovas <as@edmundask.lt>
 *  - Extended Version Author: Hasan < https://twitter.com/rakibtg >
 *  - The parent version was shifted to CodeIgniter 3 by Hasan
 * License  => http://www.opensource.org/licenses/MIT
 */

// Template file extension
$config['twig_conf']['template_file_ext'] = '.twig';


/*
| Syntax Delimiters
| Custom Twig syntax delimiters
| Ruby erb style:
|
|   'tag_comment'   => array('<%#', '#%>'),
|   'tag_block'     => array('<%', '%>'),
|   'tag_variable'  => array('<%=', '%>')
|
| Smarty style:
|
|    'tag_comment'  => array('{*', '*}'),
|    'tag_block'    => array('{', '}'),
|    'tag_variable' => array('{$', '}'),
|
*/

$config['twig_conf']['delimiters'] = array
(
    'tag_comment'   => array('{#', '#}'),
    'tag_block'     => array('{%', '%}'),
    'tag_variable'  => array('{{', '}}')
);


// Environment Options
$config['twig_conf']['environment']['cache']                = FALSE;
$config['twig_conf']['environment']['debug']                = FALSE;
$config['twig_conf']['environment']['charset']              = 'utf-8';
$config['twig_conf']['environment']['base_template_class']  = 'Twig_Template';
$config['twig_conf']['environment']['auto_reload']          = NULL;
$config['twig_conf']['environment']['strict_variables']     = FALSE;
$config['twig_conf']['environment']['autoescape']           = FALSE;
$config['twig_conf']['environment']['optimizations']        = -1;


/*
    Twig Cache Directory Location
    Path to the cache folder for compiled twig templates. It is relative to
    CodeIgniter's base directory.
*/

$config['twig_conf']['twig_cache_dir'] = APPPATH . 'cache/twig/';

/*
|--------------------------------------------------------------------------
| Themes Base Dir
|--------------------------------------------------------------------------
|
| Directory where themes are located at. This path is relative to 
| CodeIgniter's base directory OR module's base directory. For example:
|
| $config['themes_base_dir'] = 'themes/';
|
| It will actually mean that themes should be placed at:
|
| {APPPATH}/themes/ and {APPPATH}/modules/{some_module}/themes/.
|
| NOTE: modules do not necessarily need to be in {APPPATH}/modules/ as
| Twiggy will figure out the paths by itself. That way you can package 
| your modules with themes.
|
| Also, do not forget the trailing slash!
|
*/

$config['twig_conf']['themes_base_dir'] = 'themes/';


/*
|--------------------------------------------------------------------------
| Include APPPATH
|--------------------------------------------------------------------------
|
| This lets you include the APPPATH for the themes base directory (only for
| the application itself, not the modules). See the example below.
|
| Suppose you have:
| $config['themes_base_dir'] = 'themes/'
| $config['include_apppath'] = TRUE
|
| Then the path will be {APPPATH}/themes/ but if you set this option to
| FALSE, then you will have themes/.
|
| This is useful for when you want to have the themes folder outside the
| application (APPPATH) folder.
|
*/

$config['twig_conf']['include_apppath'] = TRUE;


/*
|--------------------------------------------------------------------------
| Default theme
|--------------------------------------------------------------------------
*/

$config['twig_conf']['default_theme'] = '';


/*
|--------------------------------------------------------------------------
| Default layout
|--------------------------------------------------------------------------
*/

$config['twig_conf']['default_layout'] = 'index';


/*
|--------------------------------------------------------------------------
| Default template
|--------------------------------------------------------------------------
*/

$config['twig_conf']['default_template'] = 'index';


/*
|--------------------------------------------------------------------------
| Auto-reigster functions
|--------------------------------------------------------------------------
|
| Here you can list all the functions that you want Twiggy to automatically
| register them for you.
|
| NOTE: only registered functions can be used in Twig templates. 
|
*/

$config['twig_conf']['register_functions'] = array
(

);


/*
|--------------------------------------------------------------------------
| Auto-reigster filters
|--------------------------------------------------------------------------
|
| Much like with functions, list filters that you want Twiggy to 
| automatically register them for you.
|
| NOTE: only registered filters can be used in Twig templates. Also, keep
| in mind that a filter is nothing more than just a regular function that
| acceps a string (value) as a parameter and outputs a modified/new string.
|
*/

$config['twig_conf']['register_filters'] = array
(

);

/*
|--------------------------------------------------------------------------
| Title separator
|--------------------------------------------------------------------------
|
| Lets you specify the separator used in separating sections of the title 
| variable.
|
*/

$config['twig_conf']['title_separator'] = ' | ';
