<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
********************************************************************
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: Glype
* Website: http://www.glype.com/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/

// Website name
$themeReplace['site_name'] = $_SERVER['HTTP_HOST'].' &copy;YAT proxy';

// Meta description
$themeReplace['meta_description'] = <<<OUT

OUT;

// Meta keywords (separate with comma)
$themeReplace['meta_keywords'] = <<<OUT

OUT;

// Proxy description text
$themeReplace['description'] = <<<OUT
OUT;
   <p>YAT免费提供代理访问服务，可以帮助您隐藏自己的真实User-Agent以免遭广告商骚扰或追踪IP。本站提供翻墙服务，但不对您的任何行为负责。本站将记录您的数据进行备份，如您违反当地法规本站将积极配合工作并提供此类数据，除此之外本站不向任何第三方提供数据。</p>

// Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT

OUT;

// Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT

OUT;

// Ad location on proxied pages below the url mini-form
$themeReplace['proxied'] = <<<OUT

OUT;
