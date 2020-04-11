<?php
/* Copyright (c) 2009 Arnaud Renevier, Inc, published under the modified BSD
   license. */

// database type
define ("DBTYPE", "mariadb");

// database hostname
define ("DBHOST", "localhost");

// database user
define ("DBUSER", "syp");

// database password
define ("DBPWD", "syppasahitza");

// database name
define ("DBNAME", "syp");

// tables prefix. This prefix will also be used as a prefix for cookie names.
define ("DBPREFIX", "syp_");

// directory where images will be uploaded and stored. That directory needs
// to be writeable by SYP.
define ("UPLOADDIR", "upload");

// directory where generated thumbnails are stored. That directory needs to be
// writeable by SYP.
define ("THUMBSDIR", "upload/_thumbs");

// title of your website
define ("SITETITLE", "SYP - Vitoria-Gasteiz fotos historicas");

// email contact for webmaster.
define ("WEBMASTERMAIL", "");

// url of images directory. If empty, syp will try to guess it from syp admin
// location and UPLOADDIR. So, you need to set that variable if host is
// different between syp admin and images directory. Or if protocol is
// different (for example, if syp admin is https and images directory is http)
define ("IMGSDIRURL", "");

// url of tumbnails directory. If empty, syp will try to guess it from syp
// location and THUMBSDIR. So, you need to set that variable if host is
// different between syp admin and images directory. Or if protocol is
// different (for example, if syp admin is https and images directory is http)
define ("THUMBSDIRURL", "");

// max size (either width or height) of thumbnails. If one dimension of
// uploaded image is bigger, images will be resized.
define ("THUMBSMAXSIZE", 400);

// If set to 0 popup will appear near selected marker.
// If set to 1, popup will appear at top left corner of the map
// If set to 2, popup will appear at top right corner of the map
// If set to 3 (default), popup will appear at bottom right corner of the map
// If set to 4, popup will appear at bottom left corner of the map
define ("POPUPPOS", 3);
?>
