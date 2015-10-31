curl -s http://xkcd.com| grep "http://imgs.xkcd.com/comics" | sed -e 's/^\Image URL (for hotlinking\/embedding):\s*//' > php/png.txt
/usr/bin/php /home/plurk/php/plurkbot.php
