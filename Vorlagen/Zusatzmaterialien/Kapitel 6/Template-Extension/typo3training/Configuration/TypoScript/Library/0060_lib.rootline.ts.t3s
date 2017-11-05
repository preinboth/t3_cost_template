# Brotkrumen-Navigation
lib.rootline = HMENU
lib.rootline {
    special = rootline
    special.range = 0|-1

    wrap = <ol class="breadcrumb">|</ol>

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
            allWrap = <li class="active">|</li>
            doNotLinkIt = 1
        }
    }
}