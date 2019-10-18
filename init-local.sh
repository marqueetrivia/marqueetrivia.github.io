#!/bin/bash

echo "Cleaning old files..."
rm -rf server/wp-content/themes/trivia-admin
echo "Copying admin theme files..."
cp -r theme server/wp-content/themes
echo "Renaming admin theme folder..."
mv server/wp-content/themes/theme server/wp-content/themes/trivia-admin
for arg in "$@"
do
  if [ "$arg" == "--composer" ] || [ "$arg" == "-c" ]
  then
    echo "Updating plugins..."
    composer update
  fi
done
echo "Starting local WP server..."
docker-compose -f stack.yml up
echo "Server stopped"