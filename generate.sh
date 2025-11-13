# # =================================
# # Making Project
# # =================================
# cd $HOME/Developments/
# composer create-project laravel/laravel [nama-project]
# cd [nama-project]
# yarn install
# yarn build
# composer require laravel-shift/blueprint -W --dev
# composer require filament/filament -W
# php artisan blueprint:new
# code draft.yaml
# FIXME: Perbaiki agar menggantikan kata .blueprint di file .gitignore
# echo .blueprint >> .gitignore
# # =================================

# =================================
# Making Blueprint
# =================================
php artisan blueprint:erase
rm -rf .blueprint
php artisan blueprint:build
# =================================

# =================================
# Laravel Optimization
# =================================
php artisan optimize:clear
php artisan filament:optimize-clear
php artisan config:clear
php artisan cache:clear
php artisan queue:clear
php artisan queue:flush
php artisan view:clear
./vendor/bin/pint
# =================================


