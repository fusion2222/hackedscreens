eval "$(ssh-agent -s)"
ssh-add ~/.ssh/id_rsa
git pull -f
composer install
npm install
npm run production
echo "Deployment has been finished!"