+--------------------------+
|                          |
|    Gallery Downloader    |
|          V 0.2           |
|                          |
+--------------------------+
This simple php script can be used to download an entire gallery of pictures.
How to use it:
Suppose we have a gallery like that:
http://google.com/gallery/image001.jpg
The last picture of that gallery:
http://google.com/gallery/image042.jpg
The $url will be "http://google.com/gallery/image"
The $zero will be "00"
The $type will be ".jpg"
The $first will be "1"
The $last will be "42"
So after you edited that value you can use my script through terminal:
php ./gd.php

Enjoy ;)