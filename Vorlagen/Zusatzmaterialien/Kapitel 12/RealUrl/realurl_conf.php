<?php
$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'] = array(
     'pagePath' => array(
          'type' => 'user',
          'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
          'spaceCharacter' => '-',
          'languageGetVar' => 'L',
          'expireDays' => 7,
          'firstHitPathCache' => 1,
          'segTitleFieldList' => 'tx_realurl_pathsegment,alias,nav_title,title,uid',
     ),
     'init' => array(
          'appendMissingSlash' => 'ifNotFile',
          'enableUrlDecodeCache' => TRUE,
          'enableUrlEncodeCache' => TRUE,
          'enableCHashCache' => TRUE,
          'adminJumpToBackend' => TRUE,
          'emptyUrlReturnValue' => '/',
          'respectSimulateStaticURLs' => 0,
     ),
     'preVars' => array(
          array(
               'GETvar' => 'L',
               'valueMap' => array(
                    'en' => '1',
               ),
               'noMatch' => 'bypass',
          ),
          array(
               'GETvar' => 'no_cache',
               'valueMap' => array(
                    'nc' => '1',
               ),
               'noMatch' => 'bypass',
          ),
     ),
     'fileName' => array(
          'defaultToHTMLsuffixOnPrev' => FALSE,
          'acceptHTMLsuffix' => 1,
          'index' => array(
                    // news rss feed
               'rss.xml' => array(
                    'keyValues' => array(
                         'type' => 9818,
                    ),
               ),
                    // tq_seo
               'sitemap.txt' => array(
                    'keyValues' => array(
                         'type' => 841131,
                    ),
               ),
               'sitemap.xml' => array(
                    'keyValues' => array(
                         'type' => 841132,
                    ),
               ),
               'robots.txt' => array(
                    'keyValues' => array(
                         'type' => 841133,
                    ),
               ),
          ),
     ),
     'fixedPostVars' => array(
          // EXT:news start
          'newsDetailConfiguration' => array(
               array(
                    'GETvar' => 'tx_news_pi1[action]',
                    'valueMap' => array(
                         'detail' => '',
                    ),
                    'noMatch' => 'bypass'
               ),
               array(
                    'GETvar' => 'tx_news_pi1[controller]',
                    'valueMap' => array(
                         'News' => '',
                    ),
                    'noMatch' => 'bypass'
               ),
               array(
                    'GETvar' => 'tx_news_pi1[news]',
                    'lookUpTable' => array(
                         'table' => 'tx_news_domain_model_news',
                         'id_field' => 'uid',
                         'alias_field' => 'title',
                         'addWhereClause' => ' AND NOT deleted',
                         'useUniqueCache' => 1,
                         'useUniqueCache_conf' => array(
                              'strtolower' => 1,
                              'spaceCharacter' => '-'
                         ),
                         'languageGetVar' => 'L',
                         'languageExceptionUids' => '',
                         'languageField' => 'sys_language_uid',
                         'transOrigPointerField' => 'l10n_parent',
                         'autoUpdate' => 1,
                         'expireDays' => 180,
                    )
               )
          ),
          'newsCategoryConfiguration' => array(
               array(
                    'GETvar' => 'tx_news_pi1[overwriteDemand][categories]',
                    'lookUpTable' => array(
                         'table' => 'sys_category',
                         'id_field' => 'uid',
                         'alias_field' => 'title',
                         'addWhereClause' => ' AND NOT deleted',
                         'useUniqueCache' => 1,
                         'useUniqueCache_conf' => array(
                              'strtolower' => 1,
                              'spaceCharacter' => '-'
                         )
                    )
               )
          ),
          'newsTagConfiguration' => array(
               array(
                    'GETvar' => 'tx_news_pi1[overwriteDemand][tags]',
                    'lookUpTable' => array(
                         'table' => 'tx_news_domain_model_tag',
                         'id_field' => 'uid',
                         'alias_field' => 'title',
                         'addWhereClause' => ' AND NOT deleted',
                         'useUniqueCache' => 1,
                         'useUniqueCache_conf' => array(
                              'strtolower' => 1,
                              'spaceCharacter' => '-'
                         )
                    )
               )
          ),
          // EXT:news end
     ),
     'postVarSets' => array(
          '_DEFAULT' => array(
               /*
               'forgot' => array(
                    'type' => 'single',
                    'keyValues' => array(
                         'tx_felogin_pi1[forgot]' => 1,
                    ),
               ),
               */
          ),
     ),
);

## Domain und rootpage_id anpassen
$TYPO3_CONF_VARS['EXTCONF']['realurl']['domain.de'] = $TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'];
$TYPO3_CONF_VARS['EXTCONF']['realurl']['domain.de']['pagePath']['rootpage_id'] = 1;

## In der folgenden Zeile die ID der News-Detail-Seite angeben
## Falls mehrere Detail-Seiten verwendet werden, die Zeile kopieren und ID anpassen
## News-Artikel
$TYPO3_CONF_VARS['EXTCONF']['realurl']['domain.de']['fixedPostVars']['119'] = 'newsDetailConfiguration';

## weitere Detail-Seite
## $TYPO3_CONF_VARS['EXTCONF']['realurl']['domain.de']['fixedPostVars']['27'] = 'newsDetailConfiguration';