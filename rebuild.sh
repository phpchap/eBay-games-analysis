#!/bin/sh
php symfony doctrine:build --all --and-load --no-confirmation
php symfony games:parse-metacritic-games

