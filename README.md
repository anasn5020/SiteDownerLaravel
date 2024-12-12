### Site Downer Laravel
Site Downer Laravel is a Laravel package that allows developers to easily display a customizable "site down" overlay message when needed, such as when payments are overdue. This overlay provides a simple way to notify site owners about payment issues without taking the entire site offline.

## Features
Display an optional "site down" overlay on all pages.
Fully customizable overlay message and design.
Easy-to-use configuration options.
Compatible with Laravel 8.x, 9.x, and 10.x.


## Author
Name: Anas Nasr
Email: anasn5020@gmail.com
GitHub: anasn5020


## Installation
Step 1: Install via Composer
Run the following command in your Laravel project directory:

## bash
composer require anasnasr/site-downer-laravel
Step 2: Register the Service Provider
If you're using Laravel 7.x or earlier, manually register the service provider in config/app.php by adding this line to the providers array:

## php
Anasnasr\SiteDownerLaravel\PaymentCheckerServiceProvider::class,
For Laravel 8.x and above, this step is not required as the package uses auto-discovery.

Step 3: Publish Configuration and Views
Publish the configuration file and views using the following commands:

php artisan vendor:publish --tag=config
php artisan vendor:publish --tag=views


Step 4: Configure the Environment
Add the following variables to your .env file to activate the overlay and customize the message:

## env
PAYMENT_CHECKER_ACTIVE=true
PAYMENT_CHECKER_MESSAGE="Payment is pending. Please contact the developer."
Configuration
The configuration file config/paymentchecker.php provides the following default options:

return [
    'active' => env('PAYMENT_CHECKER_ACTIVE', false),

    'message' => env('PAYMENT_CHECKER_MESSAGE', 'Please contact the developer to clear payments.'),
];
## Usage
When PAYMENT_CHECKER_ACTIVE is set to true, the "site down" overlay will appear across all pages.
The overlay message can be customized via the PAYMENT_CHECKER_MESSAGE environment variable.
Customizing the Overlay
The default overlay view is located in resources/views/vendor/paymentchecker/overlay.blade.php.
Feel free to edit this file to match your design or add custom styles.

## Compatibility
Laravel 8.x, 9.x, and 10.x are fully supported.
Requires PHP 7.4, 8.0, or above.
## License
This package is open-source and licensed under the MIT License. See the LICENSE file for details.

## Contribution
Contributions are welcome! To report issues or submit pull requests, visit the GitHub repository.