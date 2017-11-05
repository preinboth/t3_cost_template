# Meta-Navigation
lib.meta = HMENU
lib.meta {
    special = directory
    special.value = 13
    wrap = <ul class="list-inline pull-right">|</ul>

    1 = TMENU
    1 {
        NO = 1
        NO {
            allWrap = <li>|</li>
            stdWrap.htmlSpecialChars = 1
            ATagTitle.field = abstract // description // subtitle // title
        }

        CUR < .NO
        CUR {
            allWrap = <li><strong>|</strong></li>
        }
    }
}

# Datum im Footer dynamisch
lib.year = TEXT
lib.year {
    data = date:U
    strftime = %Y
    ## Beispiel komplettes Datum
    ## Syntax: http://php.net/manual/de/function.strftime.php
    ## strftime = %d. %B %Y
}