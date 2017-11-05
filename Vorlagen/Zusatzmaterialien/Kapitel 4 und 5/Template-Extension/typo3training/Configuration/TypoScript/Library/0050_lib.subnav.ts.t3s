# Subnavigation in rechter Spalte
lib.subnav = HMENU
lib.subnav {
    entryLevel = 1

    stdWrap.wrap = <ul class="nav nav-pills nav-stacked well">|</ul>
    stdWrap.required = 1

    1 = TMENU
    1 {

        NO = 1
        NO {
            wrapItemAndSub  = <li>|</li>
            stdWrap.htmlSpecialChars = 1
            ATagTitle.field = abstract // description // subtitle // title
        }

        CUR < .NO
        CUR {
            wrapItemAndSub  = <li class="active">|</li>
        }

        ACT < .CUR
    }

    2 < .1
    2 {
        wrap = <ul>|</ul>

        CUR.wrapItemAndSub = <li class="active">|</li>
        CUR.linkWrap = <strong>|</strong>

        IFSUB >
        CURIFSUB >
    }

    3 < .2

}