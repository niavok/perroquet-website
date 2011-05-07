#!/bin/sh
# Make mo files
SCRIPT="msgfmt -c -v -o"
MO_FILE="LC_MESSAGES/perroquet-website.mo"

mkdir -p ../locales/fr_FR.utf8/LC_MESSAGES
$SCRIPT ../locales/fr_FR.utf8/LC_MESSAGES/perroquet-website.mo fr.po
$SCRIPT ../locales/es_ES.utf8/LC_MESSAGES/perroquet-website.mo es.po
