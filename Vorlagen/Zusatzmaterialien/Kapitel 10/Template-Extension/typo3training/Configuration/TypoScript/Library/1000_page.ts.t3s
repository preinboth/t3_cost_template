page = PAGE

# Template

page.10 = FLUIDTEMPLATE
page.10 {
    partialRootPath = EXT:typo3training/Resources/Private/Partials/
    layoutRootPath = EXT:typo3training/Resources/Private/Layouts/

    #file = EXT:typo3training/Resources/Private/Templates/Homepage.html

    ## Backend-Layouts auswerten
    file.stdWrap.cObject = CASE
    file.stdWrap.cObject {
        key.data = pagelayout

        # default = 2Columns
        default = TEXT
        default.value = EXT:typo3training/Resources/Private/Templates/2Columns.html

        ## Wenn BE-Layouts in der DB gespeichert, sind Zugriff nur über die ID, also 1 = TEXT...
        ## Wenn BE-Layouts im PageTS gespeichert sind, Zugriff über pagets__ID, also z.B. pagets__1 = TEXT...

        # Homepage
        pagets__1 = TEXT
        pagets__1.value = EXT:typo3training/Resources/Private/Templates/Homepage.html

        # 2Columns
        pagets__2 < .default

        # 1Columns
        pagets__3 = TEXT
        pagets__3.value = EXT:typo3training/Resources/Private/Templates/1Column.html
    }

    ## Inhalte an die Templates übergeben
    variables {
        jumbotron < styles.content.get
        jumbotron.select.where = colPos = 3

        left < styles.content.get
        left.select.where = colPos = 1

        main < styles.content.get
        main.select.where = colPos = 0

        right < styles.content.get
        right.select.where = colPos = 2
    }
}

page {
    # Meta
    meta {
        X-UA-Compatible = IE=edge,chrome=1
        X-UA-Compatible.httpEquivalent = 1

        viewport = width=device-width, initial-scale=1

        description.field = description
        keywords.field = keywords
    }

    # CSS
    includeCSS {
        file10 = EXT:typo3training/Resources/Public/Css/bootstrap.min.css
        file10.disableCompression = 1
        file20 = EXT:typo3training/Resources/Public/Css/bootstrap-theme.min.css
        file20.disableCompression = 1
        file30 = EXT:typo3training/Resources/Public/Css/main.css
    }

    # JavaScript
    includeJS {
        modernizr = EXT:typo3training/Resources/Public/JavaScript/modernizr-2.8.3-respond-1.4.2.min.js
        modernizr.disableCompression = 1
    }

    includeJSFooter {
        file10 = EXT:typo3training/Resources/Public/JavaScript/bootstrap.min.js
        file10.disableCompression = 1
        file20 = EXT:typo3training/Resources/Public/JavaScript/main.js
    }

    # HTML5 Boilerplate
    # Default-Sprache de
    # Es hätte leider den zeitlichen Rahmen des Videotrainings
    # gesprengt, die Einbindung dieses Boilerplate-Codes zu zeigen.
    # Es ist zwar heutzutage nicht mehr unbedingt notwendig, diesen Code einzubauen
    # aber man sieht, dass es mit TypoScript auch kein Problem ist, die Ausgabe
    # des <html>-Tags zu beeinflussen. Informationen zu htmlTag_stdWrap sind in der
    # TypoScript-Referenz zu finden:
    # https://docs.typo3.org/typo3cms/TyposcriptReference/Setup/Config/Index.html#htmltag-stdwrap
    #
    # Anpassung des Codes für mehrsprachige Websites: http://wiki.wowa-webdesign.de/typo3/html5-boilerplate-html-tag
    config {
        htmlTag_stdWrap {
            cObject = TEXT
            cObject.value (
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="de"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="de"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="de"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
            )
        }
    }
}

# jQuery im Fussbereich der Seite
# Einbindung per TEXT-Objekt, da so der Fallback verwendet werden kann, falls jQuery nicht
# aus dem Google CDN geladen werden kann.
page.1000 = TEXT
page.1000.value (
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="typo3conf/ext/typo3training/Resources/Public/JavaScript/jquery-1.11.2.min.js"><\/script>')</script>
)

# beim Layout der Homepage ein kleineres padding-top
page.cssInline.10 = CASE
page.cssInline.10 {
    key.data = pagelayout

    pagets__1 = TEXT
    pagets__1.value (
body {
	padding-top: 50px !important;
	padding-bottom: 20px !important;
}
    )
}
