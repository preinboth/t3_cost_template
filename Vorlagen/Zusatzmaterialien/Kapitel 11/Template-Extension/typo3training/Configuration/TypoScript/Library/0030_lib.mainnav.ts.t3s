## Haupt-Navigation
lib.mainnav = COA
lib.mainnav {

    10 = HMENU
    10 {
        wrap = <ul class="nav navbar-nav">|</ul>

        1 = TMENU
        1 {
            expAll = 1

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

            IFSUB < .NO
            IFSUB {
                wrapItemAndSub = <li class="dropdown">|</li>
                ATagParams = class="dropdown-toggle" data-toggle="dropdown"
                stdWrap.noTrimWrap = || <span class="caret"></span>|
            }

            ACTIFSUB < .IFSUB
            ACTIFSUB.wrapItemAndSub = <li class="dropdown active">|</li>

            CURIFSUB < .ACTIFSUB
        }

        2 < .1
        2 {
            wrap = <ul class="dropdown-menu">|</ul>

            IFSUB >
            CURIFSUB >
            ACTIFSUB >

            SPC = 1
            SPC.allWrap = <li role="separator" class="divider">|</li>
        }

    }
}